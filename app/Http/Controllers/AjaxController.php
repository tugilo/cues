<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class AjaxController extends Controller
{
    public function GetAddress(Request $request)
    {
        $password = config('my-setting.MY_CRYPT_KEY'); //.envファイル:DB_CRYPT_KEY

        Log::info(print_r($request->all(), true));
        $branch_id =$request->branch_id;
        $postno = '';
        $address1 = '';
        $address2 = '';
        $address3 = '';
        $telno = '';
        $shisya_sql = "select
            shisya_cd,
            convert( AES_DECRYPT( UNHEX(postno), '".$password."' ) USING utf8) as postno,
            convert( AES_DECRYPT( UNHEX(address1), '".$password."' ) USING utf8) as address1,
            convert( AES_DECRYPT( UNHEX(address2), '".$password."' ) USING utf8) as address2,
            convert( AES_DECRYPT( UNHEX(address3), '".$password."' ) USING utf8) as address3,
            convert( AES_DECRYPT( UNHEX(telno), '".$password."' ) USING utf8) as telno
            from web_m_shisya
            where shisya_cd = '".$branch_id."';
        ";
        $shisya = DB::select($shisya_sql);
        Log::info(print_r($shisya, true));
        if($shisya[0]->postno)
        {
            $postno = $shisya[0]->postno;
        }
        if($shisya[0]->address1)
        {
            $address1 = $shisya[0]->address1;
        }
        if($shisya[0]->address2)
        {
            $address2 = $shisya[0]->address2;
        }
        if($shisya[0]->address3)
        {
            $address3 = $shisya[0]->address3;
        }
        if($shisya[0]->telno)
        {
            $telno = $shisya[0]->telno;
        }
        $data = [
            'postno' => $postno,
            'address1' => $address1,
            'address2' => $address2,
            'address3' => $address3,
            'telno' => $telno,
        ];
        Log::info(print_r($data, true));
        echo json_encode($data);
    }
}
