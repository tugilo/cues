<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Mail;
use App\Mail\SendSalesCalendarMail;
use App\Mail\SendSalesCalendarMailStaff;
use App\Models\WebMTorihikisaki;
use App\Models\WebMSyokui;
use App\Models\WebMSyouhin;
use App\Models\WebMSyouhinTanka;
use App\Models\WebMSyouhinCategory;
use App\Models\WebMSyouhinSyubetu;
use App\Models\WebTWebJuchu;
use App\Models\WebTWebJuchuDetail;

class CalendarSyouhinController extends Controller
{
    public function __construct()
    {
        $this->middleware('login');
    }

    public function ShowSyouhinlist(Request $request)
    {
        Log::info(print_r(session()->all(), true));
        $now = new Carbon('now');
        
        // 固定の日付に設定
        //$now = Carbon::create(2024, 12, 10);
        Log::info(print_r('now:' . $now, true));

        // 商品一覧を取得し、web_disp_orderで並び替える
        $syouhins = WebMSyouhin::where('syouhin_syubetu', 1)
            ->orderBy('web_disp_order', 'asc')
            ->get(['syouhin_cd', 'web_syouhin_nm', 'web_disp_flg', 'syouhin_color']);
        
        $syouhin_data = [];
    
        foreach ($syouhins as $syouhin) {
            // 単価情報を取得
            $tanka = WebMSyouhinTanka::where('syouhin_cd', $syouhin->syouhin_cd)
                ->where('select_stat_dt', '<=', $now)
                ->orderBy('select_stat_dt', 'desc')
                ->first();
    
            // 表示する単価を設定
            $price = $tanka ? $tanka->web_syouhin_tanka : 'N/A';
    
            // 税込価格を計算
            $tax_rate = 0.10; // 消費税率10%
            $price_with_tax = $price !== 'N/A' ? round($price * (1 + $tax_rate)) : 'N/A';
    
            // 画像ファイル名を設定
            switch ($syouhin->syouhin_cd) {
                case 1:
                    $image = 'kabeA_01.jpg';
                    break;
                case 4:
                    $image = 'kabeB_01.jpg';
                    break;
                case 92:
                    $image = 'kabeC_01.jpg';
                    break;
                case 7:
                    $image = 'takuA_01.jpg';
                    break;
                case 10:
                    $image = 'takuB_01.jpg';
                    break;
                case 85:
                    $image = 'takuC_01.jpg';
                    break;
                default:
                    $image = 'default.jpg';
                    break;
            }
    
            // 商品データを配列に追加
            $syouhin_data[] = [
                'syouhin_cd' => $syouhin->syouhin_cd,
                'web_syouhin_nm' => $syouhin->web_syouhin_nm,
                'web_disp_flg' => $syouhin->web_disp_flg,
                'syouhin_color' => $syouhin->syouhin_color,
                'price' => $price,
                'price_with_tax' => $price_with_tax,
                'image' => $image,
            ];
        }
    
        // 商品データをログに出力
        Log::info('Syouhin Data:', $syouhin_data);
    
        return view('calendar.syouhin_list', ['syouhins' => $syouhin_data]);
    }
    
    public function ShowSyouhinDetail(Request $request)
    {
        Log::info(print_r($request->all(), true));
        Log::info(print_r(session()->all(), true));
    
        $syouhin_cd = $request->syouhin_cd;
        $now = new Carbon('now');
        
        // 固定の日付に設定
        //$now = Carbon::create(2024, 12, 10);
        Log::info(print_r('now:' . $now, true));

    
        // 商品情報を取得
        $syouhin = WebMSyouhin::where('syouhin_cd', $syouhin_cd)->first(['syouhin_cd', 'web_syouhin_nm', 'web_disp_flg', 'syouhin_color']);
    
        if ($syouhin) {
            // 単価情報を取得
            $tanka = WebMSyouhinTanka::where('syouhin_cd', $syouhin_cd)
                ->where('select_stat_dt', '<=', $now)
                ->orderBy('select_stat_dt', 'desc')
                ->first();
    
            // 表示する単価を設定
            $price = $tanka ? $tanka->web_syouhin_tanka : 'N/A';
            $web_soldout_flg = $tanka ? $tanka->web_soldout_flg : 0;
            $web_hatsou_soldout_flg = $tanka ? $tanka->web_hatsou_soldout_flg : 0;
    
            // 税込価格を計算
            $tax_rate = 0.10; // 消費税率10%
            $price_with_tax = $price !== 'N/A' ? round($price * (1 + $tax_rate)) : 'N/A';
    
            // 商品データを配列に追加
            $syouhin_data = [
                'syouhin_cd' => $syouhin->syouhin_cd,
                'web_syouhin_nm' => $syouhin->web_syouhin_nm,
                'web_disp_flg' => $syouhin->web_disp_flg,
                'syouhin_color' => $syouhin->syouhin_color,
                'price' => $price,
                'price_with_tax' => $price_with_tax,
                'web_soldout_flg' => $web_soldout_flg,
                'web_hatsou_soldout_flg' => $web_hatsou_soldout_flg,
                'image' => $this->getImageFilename($syouhin_cd),
            ];    
            // 商品データをログに出力
            Log::info('Syouhin Data:', $syouhin_data);
    
            return view('calendar.syouhin_detail_' . $syouhin_cd, [
                'syouhin' => $syouhin_data
            ]);
        }
    
        // 商品が見つからない場合は404ページを表示
        abort(404);
    }
    
    private function getImageFilename($syouhin_cd)
    {
        switch ($syouhin_cd) {
            case 1:
                return 'kabeA_01.jpg';
            case 4:
                return 'kabeB_01.jpg';
            case 92:
                return 'kabeC_01.jpg';
            case 7:
                return 'takuA_01.jpg';
            case 10:
                return 'takuB_01.jpg';
            case 85:
                return 'takuC_01.jpg';
            default:
                return 'default.jpg';
        }
    }

    public function CartAdd(Request $request)
    {
        Log::info(print_r($request->all(), true));
        $syohin_amounts = $request->syohin_amount;
        $syouhin_cds = $request->syouhin_cd;
        $syouhin_names = $request->syouhin_name;
        Log::info(print_r($_SERVER['HTTP_REFERER'], true));
        if($syohin_amounts)
        {
            $syohin_count = count($syohin_amounts);

            for($i = 0; $i < $syohin_count; $i++)
            {
                if($syohin_amounts[$i])
                {
                    $cartData = [
                        'syouhin_cd' => $syouhin_cds[$i],
                        'syouhin_name' => $syouhin_names[$i],
                        'syohin_amount' => $syohin_amounts[$i],
                    ];
                    Log::info(print_r($cartData, true));

                    if(!session()->has('cartData'))
                    {
                        session()->push('cartData', $cartData);
                    }else{
                        //sessionにcartData配列が「有る」場合、情報取得
                        $sessionCartData = session()->get('cartData');

                        Log::info(print_r($sessionCartData, true));
                        //sessionにcartData配列が「有る」場合、情報取得
                        $sessionCartData = $request->session()->get('cartData');

                        //isSameProductId定義 product_id同一確認フラグ false = 同一ではない状態を指定
                        $isSameProductId = false;
                        foreach ($sessionCartData as $index => $sessionData) {
                            //product_idが同一であれば、フラグをtrueにする → 個数の合算処理、及びセッション情報更新。更新は一度のみ
                            if ($sessionData['syouhin_cd'] === $cartData['syouhin_cd'] ) {
                                $isSameProductId = true;
                                $quantity = $sessionData['syohin_amount'] + $cartData['syohin_amount'];
                                //cartDataをrootとしたツリー状の多次元連想配列の特定のValueにアクセスし、指定の変数でValueの上書き処理
                                $request->session()->put('cartData.' . $index . '.syohin_amount', $quantity);
                                break;
                            }
                        }

                        //product_idが同一ではない状態を指定 その場合であればpushする
                        if ($isSameProductId === false) {
                            $request->session()->push('cartData', $cartData);
                        }
                    }

                }
            }
        }

        $sessionCartData = $request->session()->get('cartData');
        Log::info(print_r($sessionCartData, true));
        $sum_total = 0;
        if($sessionCartData)
        {
            foreach($sessionCartData as $sc)
            {
                $sum_total += $sc['syohin_amount'];
            }

        }
        Log::info(print_r('sum_total:'.$sum_total, true));
        return view('calendar.cart_add',[
            'sessionCartData' => $sessionCartData,
            'sum_total' => $sum_total,
        ]);

    }
    public function CartConfirm(Request $request)
    {
        Log::info(print_r($request->all(), true));
        $sessionCartData = $request->session()->get('cartData');
        Log::info(print_r($sessionCartData, true));
        $syohin_amounts = $request->syohin_amount;
        $syouhin_cds = $request->syouhin_cd;
        $sum_total = 0;
        $hatsu_flg = 0;
        $cartData = [];
        if($syohin_amounts)
        {
            $syohin_count = count($syohin_amounts);

            for($i = 0; $i < $syohin_count; $i++)
            {
                if($syohin_amounts[$i])
                {
                    $cartData = [
                        'syouhin_cd' => $syouhin_cds[$i],
                        'syohin_amount' => $syohin_amounts[$i],
                    ];
                    if($syouhin_cds[$i] == 2 || $syouhin_cds[$i] == 5 ||$syouhin_cds[$i] == 8 ||$syouhin_cds[$i] == 11 ||$syouhin_cds[$i] == 86 ||$syouhin_cds[$i] == 93)
                    {
                        $hatsu_flg = 1;
                    }
                    $isSameProductId = false;
                    foreach ($sessionCartData as $index => $sessionData) {
                        //product_idが同一であれば、フラグをtrueにする → 個数の合算処理、及びセッション情報更新。更新は一度のみ
                        if ($sessionData['syouhin_cd'] === $cartData['syouhin_cd'] ) {
                            $isSameProductId = true;
                            $quantity = $cartData['syohin_amount'];
                            //cartDataをrootとしたツリー状の多次元連想配列の特定のValueにアクセスし、指定の変数でValueの上書き処理
                            $request->session()->put('cartData.' . $index . '.syohin_amount', $quantity);
                            break;
                        }
                    }
                }
            }
        }
        Log::info(print_r($cartData, true));
        $sessionCartData = $request->session()->get('cartData');
        Log::info(print_r($sessionCartData, true));
        $sum_total = 0;
        foreach($sessionCartData as $sc)
        {
            $sum_total += $sc['syohin_amount'];
        }
        Log::info(print_r('sum_total:'.$sum_total, true));

        return view('calendar.cart_confirm',[
            'sessionCartData' => $sessionCartData,
            'sum_total' => $sum_total,
            'hatsu_flg' => $hatsu_flg,

        ]);

    }
    public function CartFinish(Request $request)
    {
        $password = config('my-setting.MY_CRYPT_KEY'); //.envファイル:DB_CRYPT_KEY
        Log::info(print_r($request->all(), true));
        $sessionData = $request->session()->all();
        $bikou = $request->bikou;
        Log::info(print_r($sessionData, true));
        $now = Carbon::now();
        $m_config_sql = "select * from web_m_config where config_id = 1";
        $configs = DB::select($m_config_sql);
        Log::info(print_r($configs, true));
        $config_id = $configs[0]->config_id;
        $system_year = $configs[0]->system_year;
        if($request->doukonbutu_kbn1 == 1)
        {
            $doukonbutu_kbn1 = $request->doukonbutu_kbn1;

        }else{
            $doukonbutu_kbn1 = 0;
        }
        if($request->doukonbutu_kbn2 == 1)
        {
            $doukonbutu_kbn2 = $request->doukonbutu_kbn2;

        }else{
            $doukonbutu_kbn2 = 0;
        }
        if($request->doukonbutu_kbn3 == 1)
        {
            $doukonbutu_kbn3 = $request->doukonbutu_kbn3;

        }else{
            $doukonbutu_kbn3 = 0;
        }


        $remote_address = $_SERVER['REMOTE_ADDR'];
        $remote_host = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
        $remote_port = $_SERVER['REMOTE_PORT'];
        $http_user_agent = $_SERVER['HTTP_USER_AGENT'];
        $http_referer = $_SERVER['HTTP_REFERER'];
        $http_accept_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $http_connection = $_SERVER['HTTP_CONNECTION'];

        $q = new WebTWebJuchu;
        $q->config_id = $config_id;
        $q->import_kbn = 0;
        $q->web_m_torihikisaki_id = $sessionData['id'];
        $q->import_torihikisaki_kbn = 0;
        $q->web_juchu_dt = $now;
        $q->system_year = $system_year;
        $q->remote_address = $remote_address;
        $q->remote_host = $remote_host;
        $q->remote_port = $remote_port;
        $q->http_user_agent = $http_user_agent;
        $q->http_referer = $http_referer;
        $q->http_accept_language = $http_accept_language;
        $q->http_connection = $http_connection;
        $q->bikou = $bikou;
        $q->doukonbutu_kbn1 = $doukonbutu_kbn1;
        $q->doukonbutu_kbn2 = $doukonbutu_kbn2;
        $q->doukonbutu_kbn3 = $doukonbutu_kbn3;
        $q->sakusei_tp = $now;
        $q->sakusei_tanto_cd = 0;
        $q->koushin_tp = $now;
        $q->koushin_tanto_cd = 0;
        $q->tmstamp = $now;
        $q->save();
        $web_juchu_id = $q->id;
        /*商品購入時に取引先マスターのsysytem_yearが最新でない場合は最新にセット*/
        $torihikisaki = WebMTorihikisaki::where('id', '=', $sessionData['id'])->first();
        if($torihikisaki->system_year != $system_year)
        {
            $torihikisaki->system_year = $system_year;
            $torihikisaki->koushin_tp = $now;
            $torihikisaki->save();
        }
        $sessionCartData = $request->session()->get('cartData');
        $i=1;
        $countall = 0;
        foreach($sessionCartData as $scd)
        {
            if($scd['syouhin_cd'] == 2)
            {
                $tmp_syouhin_cd = 1;
            }elseif($scd['syouhin_cd'] == 5){
                $tmp_syouhin_cd = 4;

            }elseif($scd['syouhin_cd'] == 8){
                $tmp_syouhin_cd = 7;

            }elseif($scd['syouhin_cd'] == 11){
                $tmp_syouhin_cd = 10;
            }elseif($scd['syouhin_cd'] == 86){
                $tmp_syouhin_cd = 85;
            }elseif($scd['syouhin_cd'] == 93){
                $tmp_syouhin_cd = 92;
            }else{
                $tmp_syouhin_cd = $scd['syouhin_cd'];
            }


            $syouhin_tanka = WebMSyouhinTanka::where('syouhin_cd', '=', $tmp_syouhin_cd)
                ->where('config_id', '=', 1)
                ->where('web_soldout_flg', '=', 0)
                ->where('select_stat_dt', '<=', $now)
                ->orderBy('select_stat_dt', 'desc')
                ->first();
            $detail = new WebTWebJuchuDetail;
            $detail->config_id = $config_id;
            $detail->web_juchu_id = $web_juchu_id;
            $detail->web_juchu_detail_no = $i;
            $detail->syouhin_cd = $scd['syouhin_cd'];
            $detail->syohin_tanka_cd = $syouhin_tanka->syohin_tanka_cd;
            $detail->suryou = $scd['syohin_amount'];
            $detail->hatsou_syouhin_flg = 0;
            $detail->tmstamp = $now;
            $detail->syouhin_category_cd = 1;
            $detail->save();

            $carts[] = [
                'cart_no' => $i,
                'syouhin_name' => $scd['syouhin_name'],
                'syohin_amount' => $scd['syohin_amount'],
            ];
            $countall += $scd['syohin_amount'];
            $i++;
        }
        $sql = "select
            TM.id as torihikisaki_id,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_nm), '".$password."' ) USING utf8) as torihikisaki_nm,
            TM.gaiji_flg as gaiji_flg,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_email), '".$password."' ) USING utf8) as torihikisaki_tantosya_email,
            convert( AES_DECRYPT( UNHEX(SM.postno), '".$password."' ) USING utf8) as postno,
            convert( AES_DECRYPT( UNHEX(SM.address1), '".$password."' ) USING utf8) as address1,
            convert( AES_DECRYPT( UNHEX(SM.address2), '".$password."' ) USING utf8) as address2,
            convert( AES_DECRYPT( UNHEX(SM.address3), '".$password."' ) USING utf8) as address3,
            convert( AES_DECRYPT( UNHEX(SM.telno), '".$password."' ) USING utf8) as telno,
            TM.shisya_henkou_flag as shisya_henkou_flag,
            TM.shisya_henkou_dt as shisya_henkou_dt,
            TM.syokui_cd as syokui_cd,
            SY.syokui_nm as syokui_nm,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_telno), '".$password."' ) USING utf8) as torihikisaki_tantosya_telno,
            convert( AES_DECRYPT( UNHEX(SM.shisya_nm), '".$password."' ) USING utf8) as shisya_nm,
            convert( AES_DECRYPT( UNHEX(SM.kaisya_nm), '".$password."' ) USING utf8) as kaisya_nm
            from web_m_torihikisaki as TM
            left Join web_m_shisya as SM on TM.shisya_cd = SM.shisya_cd
            left Join web_m_syokui as SY on TM.syokui_cd = SY.syokui_cd
            where TM.id = '".$sessionData['id']."'
            ";
        $user = DB::select($sql);
        $subject = "ご注文ありがとうございました";
        $mailto = $user[0]->torihikisaki_tantosya_email;
//        $mailto = 'tugi@tugilo.com';
        $bcc = [
//            'tugi@tugilo.com',
        ];

        if($mailto)
        {
            Mail::to($mailto)
                ->bcc($bcc)
                ->send(new SendSalesCalendarMail($subject, $user, $carts, $countall, $bikou, $doukonbutu_kbn1, $doukonbutu_kbn2, $doukonbutu_kbn3));
        }
        $staff_mail = [
            'mt@cues-plus.com',
        ];

        if($staff_mail)
        {
            $staff_subject = "【2025年カレンダーご注文受付】";
            Mail::to($staff_mail)
                ->bcc($bcc)
                ->send(new SendSalesCalendarMailStaff($staff_subject, $user, $carts, $countall, $bikou, $mailto, $doukonbutu_kbn1, $doukonbutu_kbn2, $doukonbutu_kbn3));
        }

        Log::info(print_r($carts, true));
        Log::info(print_r('countall:'.$countall, true));
        $request->session()->forget('cartData');
        Log::info(print_r($request->session()->all(), true));
        return view('calendar.cart_finish',[
        ]);

    }
    public function CartDelete(Request $request)
    {
        Log::info(print_r($request->all(), true));
        $sessionCartData = $request->session()->get('cartData');

        Log::info(print_r($sessionCartData, true));
        $delete_syouhin_cd = $request->delete_syouhin_cd;
        $list_cart_cd = array_column($sessionCartData, 'syouhin_cd');
        $result_index = array_search($delete_syouhin_cd, $list_cart_cd);
        $cartData = array_splice($sessionCartData, $result_index, 1);

        //上記の抽出情報でcartDataを上書き処理
        $request->session()->put('cartData', $sessionCartData);
        //上書き後のsession再取得

        return redirect('/calendar/cart/add');

    }
}
