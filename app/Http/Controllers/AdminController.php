<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\WebMTorihikisaki;
use App\Models\WebMSyokui;

class AdminController extends Controller
{
    public function ListUser(Request $request)
    {
        $password = config('my-setting.MY_CRYPT_KEY'); //.envファイル:DB_CRYPT_KEY
        $sql = "select
            TM.id as torihikisaki_id,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_nm), '".$password."' ) USING utf8) as torihikisaki_nm,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_kana), '".$password."' ) USING utf8) as torihikisaki_kana,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_telno), '".$password."' ) USING utf8) as torihikisaki_tantosya_telno,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_email), '".$password."' ) USING utf8) as torihikisaki_tantosya_email,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_web_password), '".$password."' ) USING utf8) as torihikisaki_web_password,
            convert( AES_DECRYPT( UNHEX(SM.shisya_nm), '".$password."' ) USING utf8) as shisya_nm,
            convert( AES_DECRYPT( UNHEX(SM.kaisya_nm), '".$password."' ) USING utf8) as kaisya_nm
            from web_m_torihikisaki as TM
            left Join web_m_shisya as SM on TM.shisya_cd = SM.shisya_cd;
            ";
        $users = DB::select($sql);
        Log::info(print_r($users, true));

        return view('admin.userlist',[
            'users' => $users,
        ]);
    //
    }
}
