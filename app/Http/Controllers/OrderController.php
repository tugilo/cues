<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Mail;
use App\Mail\SendSalesMail;
use App\Mail\SendSalesMailStaff;
use App\Models\WebMTorihikisaki;
use App\Models\WebMSyokui;
use App\Models\WebMSyouhin;
use App\Models\WebMSyouhinTanka;
use App\Models\WebMSyouhinCategory;
use App\Models\WebMSyouhinSyubetu;
use App\Models\WebTWebJuchu;
use App\Models\WebTWebJuchuDetail;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('login');
    }

    public function ShowHistory(Request $request)
    {
        $password = config('my-setting.MY_CRYPT_KEY'); //.envファイル:DB_CRYPT_KEY
        Log::info(print_r($request->all(), true));
        $web_m_torihikisaki_id = session('id');
        $flgs = [];
        $sql = "
            SELECT
                J.system_year,
                J.web_m_torihikisaki_id,
                J.web_juchu_id,
                JD.web_juchu_detail_no,
                JD.syouhin_cd,
                JD.suryou,
                SM.web_syouhin_nm,
                SCM.web_syouhin_category_nm,
                SCM.tani_name,
                SCM.syouhin_syubetu,
                CASE WHEN (SCM.syouhin_syubetu <> 1 OR JD.syouhin_cd = 1 OR JD.syouhin_cd = 4  OR JD.syouhin_cd = 7  OR JD.syouhin_cd = 10  OR JD.syouhin_cd = 85 OR JD.syouhin_cd = 92) THEN FALSE ELSE TRUE END AS hatsou_syouhin_flg,
                CASE WHEN SM.web_syouhin_nm = SCM.web_syouhin_category_nm OR SCM.syouhin_syubetu <> 3 THEN SCM.web_syouhin_category_nm ELSE CONCAT(SCM.web_syouhin_category_nm, '(', SM.web_syouhin_nm, ')') END AS syouhin_nm
                FROM web_t_web_juchu AS J
                INNER JOIN web_t_web_juchu_detail AS JD ON J.web_juchu_id = JD.web_juchu_id AND J.config_id = JD.config_id
                INNER JOIN web_m_syouhin AS SM ON JD.config_id = SM.config_id AND (JD.syouhin_cd = SM.syouhin_cd OR JD.syouhin_cd = SM.syouhin_hatu_cd)
                INNER JOIN web_m_syouhin_category AS SCM ON SM.syouhin_category_cd = SCM.syouhin_category_cd AND SM.config_id = SCM.config_id
                WHERE J.web_m_torihikisaki_id = '".$web_m_torihikisaki_id."'
                AND J.delete_flg = 0
                ORDER BY J.system_year DESC, J.web_juchu_id DESC, JD.web_juchu_detail_no
            ";
        $history = DB::select($sql);
        Log::info(print_r($history, true));
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

       $year_list = [2024,2023,2022, 2021]; //履歴ページの表示のための配列
       Log::info(print_r($flgs, true));
        return view('history',[
            'year_list' => $year_list,
            'history' => $history,
            'flgs' => $flgs,

        ]);
    }
}
