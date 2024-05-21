<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\WebMTorihikisaki;
use App\Models\WebMSyokui;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('login');
    }



    public function ShowMypage(Request $request)
    {
        $password = config('my-setting.MY_CRYPT_KEY'); //.envファイル:DB_CRYPT_KEY
        $web_m_torihikisaki_id = session('id');
        $flgs = [];
        $sql2 = "
            SELECT
            CASE WHEN SUM(JD.suryou) >= 20 THEN TRUE ELSE FALSE END AS download_button_flag,
            SUM(JD.suryou) AS suryou_kabe_total
            FROM web_t_web_juchu AS J
            INNER JOIN web_t_web_juchu_detail AS JD ON J.web_juchu_id = JD.web_juchu_id AND J.config_id = JD.config_id
            WHERE J.delete_flg = 0
            AND (JD.syouhin_cd = 1 OR JD.syouhin_cd = 2 OR JD.syouhin_cd = 4 OR JD.syouhin_cd = 5 OR JD.syouhin_cd = 92 OR JD.syouhin_cd = 93)
            AND J.web_m_torihikisaki_id = '".$web_m_torihikisaki_id."' AND J.system_year = 2023
            GROUP BY J.system_year, J.web_m_torihikisaki_id
        ";
        $flgs = DB::select($sql2);
        Log::info(print_r($flgs, true));
        return view('mypage',[
            'flgs' => $flgs,
        ]);
    }

    public function ShowUserInfo(Request $request)
    {
        Log::info(print_r($request->all(), true));
        $password = config('my-setting.MY_CRYPT_KEY'); //.envファイル:DB_CRYPT_KEY
        $torihikisaki_id = session('id');
        $torihikisaki_name = session('name');
        $sql = "select
            TM.id as torihikisaki_id,
            TM.lp_cd as lp_cd,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_nm), '".$password."' ) USING utf8) as torihikisaki_nm,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_kana), '".$password."' ) USING utf8) as torihikisaki_kana,
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
            TM.siharaihou_cd as siharaihou_cd,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_telno), '".$password."' ) USING utf8) as torihikisaki_tantosya_telno,
            convert( AES_DECRYPT( UNHEX(SM.shisya_nm), '".$password."' ) USING utf8) as shisya_nm,
            convert( AES_DECRYPT( UNHEX(SM.kaisya_nm), '".$password."' ) USING utf8) as kaisya_nm
            from web_m_torihikisaki as TM
            left Join web_m_shisya as SM on TM.shisya_cd = SM.shisya_cd
            left Join web_m_syokui as SY on TM.syokui_cd = SY.syokui_cd
            where TM.id = '".$torihikisaki_id."'
            ";
        $user = DB::select($sql);
        Log::info(print_r($user, true));

        return view('user_info',[
            'user' => $user,
        ]);
    }
    public function EditUser(Request $request)
    {
        $password = config('my-setting.MY_CRYPT_KEY'); //.envファイル:DB_CRYPT_KEY
        $torihikisaki_id = session('id');
        $torihikisaki_name = session('name');
        $shisyas = [];
        $area_sql = "select
            web_area_kbn_id,
            web_area_nm
            from web_m_web_area_kbn
            order by web_area_sort asc
        ";
        $arealists = DB::select($area_sql);
        $area_count = count($arealists);
//        Log::info(print_r($arealists, true));
        if($area_count)
        {
            foreach($arealists as $al)
            {
                $shisya_sql = "select
                    shisya_cd,
                    web_area_kbn_id,
                    convert( AES_DECRYPT( UNHEX(shisya_nm), '".$password."' ) USING utf8) as shisya_nm
                    from web_m_shisya
                    where web_disp_flg = 1
                    And web_area_kbn_id = '".$al->web_area_kbn_id."'
                    And shisya_cd <> 3001
                    order by web_sort asc;
                ";

                $shisyalists = DB::select($shisya_sql);
                $shisya_count = count($shisyalists);
                for($i = 0; $i < $shisya_count; $i++)
                {
                    if($i == 0)
                    {
                        $shisyas[] = [
                            'option' => 0,
                            'value' => $al->web_area_nm,
                        ];
                        if($shisyalists[$i]->shisya_cd == 3001 || $shisyalists[$i]->shisya_cd == 3004 || $shisyalists[$i]->shisya_cd == 3011 || $shisyalists[$i]->shisya_cd == 3074 || $shisyalists[$i]->shisya_cd == 3091 || $shisyalists[$i]->shisya_cd == 3108 || $shisyalists[$i]->shisya_cd == 3113 || $shisyalists[$i]->shisya_cd == 3116 )
                        {
                            $shisyas[] = [
                                'option' => $shisyalists[$i]->shisya_cd,
                                'value' => $shisyalists[$i]->shisya_nm,
                            ];
                        }
                    }else{
                        $shisyas[] = [
                            'option' => $shisyalists[$i]->shisya_cd,
                            'value' => $shisyalists[$i]->shisya_nm,
                        ];
                    }
                }

            }

        }
        //Log::info(print_r($shisyas, true));

        $syokui_sql = "select
            syokui_cd,
            syokui_nm
            from web_m_syokui;
        ";
        $syokuilists = DB::select($syokui_sql);

        $user_sql = "select
            TM.id as torihikisaki_id,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_nm), '".$password."' ) USING utf8) as torihikisaki_nm,
            TM.lp_cd as lp_cd,
            TM.gaiji_flg as gaiji_flg,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_email), '".$password."' ) USING utf8) as torihikisaki_tantosya_email,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_kana), '".$password."' ) USING utf8) as torihikisaki_kana,
            convert( AES_DECRYPT( UNHEX(SM.postno), '".$password."' ) USING utf8) as postno,
            convert( AES_DECRYPT( UNHEX(SM.address1), '".$password."' ) USING utf8) as address1,
            convert( AES_DECRYPT( UNHEX(SM.address2), '".$password."' ) USING utf8) as address2,
            convert( AES_DECRYPT( UNHEX(SM.address3), '".$password."' ) USING utf8) as address3,
            convert( AES_DECRYPT( UNHEX(SM.telno), '".$password."' ) USING utf8) as telno,
            TM.shisya_henkou_flag as shisya_henkou_flag,
            TM.shisya_henkou_dt as shisya_henkou_dt,
            TM.shisya_cd as shisya_cd,
            TM.syokui_cd as syokui_cd,
            SY.syokui_nm as syokui_nm,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_telno), '".$password."' ) USING utf8) as torihikisaki_tantosya_telno,
            convert( AES_DECRYPT( UNHEX(SM.shisya_nm), '".$password."' ) USING utf8) as shisya_nm,
            convert( AES_DECRYPT( UNHEX(SM.kaisya_nm), '".$password."' ) USING utf8) as kaisya_nm
            from web_m_torihikisaki as TM
            left Join web_m_shisya as SM on TM.shisya_cd = SM.shisya_cd
            left Join web_m_syokui as SY on TM.syokui_cd = SY.syokui_cd
            where TM.id = '".$torihikisaki_id."'
            ";
        $user = DB::select($user_sql);
        Log::info(print_r($user, true));

        return view('user_edit',[
            'shisyas' => $shisyas,
            'syokuilists' => $syokuilists,
            'user' => $user,
        ]);
    }
    public function ForgetPassword(Request $request)
    {
        return view('pw_forget',[]);
    }
    public function ShowEditPassword(Request $request)
    {
        Log::info(print_r($request->all(), true));
        return view('pw_edit',[
            'mode' => $request->mode,
            'error' => 0,
        ]);
    }
    public function EditPassword(Request $request)
    {
        $password = config('my-setting.MY_CRYPT_KEY'); //.envファイル:DB_CRYPT_KEY
        Log::info(print_r($request->all(), true));
        if(empty($request->mode))
        {
            $rules = array(
                'old_password' => ['required'],
                'new_password' => ['required', 'string', 'min:8', 'confirmed','regex:/[a-z]/',
                'regex:/[0-9]/'],
                'new_password_confirmation' => ['required'],
            );
        }else{
            $rules = array(
                'new_password' => ['required', 'string', 'min:8', 'confirmed','regex:/[a-z]/',
                'regex:/[0-9]/'],
                'new_password_confirmation' => ['required'],
            );
        }
        $this->validate($request, $rules);
        $old_password = $request->old_password;
        $new_password = $request->new_password;

        $torihikisaki_id = session('id');
        if(empty($request->mode))
        {
            $user_sql = "select
                TM.id as torihikisaki_id,
                convert( AES_DECRYPT( UNHEX(TM.torihikisaki_web_password), '".$password."' ) USING utf8) as torihikisaki_web_password
                from web_m_torihikisaki as TM
                where TM.id = '".$torihikisaki_id."'
                ";
            $user = DB::select($user_sql);
            Log::info(print_r($user, true));
            if($request->old_password == $user[0]->torihikisaki_web_password)
            {
                $sql = "update web_m_torihikisaki set
                    torihikisaki_web_password = HEX(AES_ENCRYPT( '".$new_password."', '".$password."' ))
                    where id = '".$torihikisaki_id."'";
                    Log::info(print_r($sql, true));

                    $update_sql = DB::update($sql);
                    return redirect('/mypage');
            }else{
                return view('pw_edit',[
                    'mode' => $request->mode,
                    'error' => 1,
                ]);
            }
        }else{
            $sql = "update web_m_torihikisaki set
                torihikisaki_web_password = HEX(AES_ENCRYPT( '".$new_password."', '".$password."' ))
                where id = '".$torihikisaki_id."'";
                Log::info(print_r($sql, true));

                $update_sql = DB::update($sql);
            return redirect('/home');
        }

    }
    public function ShowStEditPassword(Request $request)
    {
        Log::info(print_r($request->all(), true));
        return view('pw_st_edit',[
            'mode' => 1,
        ]);
    }
}
