<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Mail;
use App\Mail\VerifyMail;
use App\Models\WebMTorihikisaki;
use App\Models\WebMSyokui;
use App\Libs\CuesLib;

class LoginController extends Controller
{
    private $password = "fwN23GhjsiALm";

    public function index(Request $request)
    {
        return view('top',[]);
    }

    public function ShowLoginForm(Request $request)
    {
        return view('login',[]);
    }

    public function login(Request $request)
    {
        Log::info(print_r($request->all(), true));
        $rules = array(
            'inputEmail' => 'required',
            'inputPassword' => 'required',
        );
        $this->validate($request, $rules);
        $cueslib = new CuesLib();
        //login.blade.phpより入力された情報を各変数へ格納
        $inputEmail = $request->inputEmail;
        $inputPassword = $request->inputPassword;
        $urltoken = $request->urltoken;
        $password = config('my-setting.MY_CRYPT_KEY'); //.envファイル:DB_CRYPT_KEY

        //入力されたメールアドレス,パスワードで取引先マスターから引っ張ってくる
        $sql = "select
            TM.id torihikisaki_id,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_nm), '".$password."' ) USING utf8) as torihikisaki_nm,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_email), '".$password."' ) USING utf8) as torihikisaki_tantosya_email,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_web_password), '".$password."' ) USING utf8) as torihikisaki_web_password,
            convert( AES_DECRYPT( UNHEX(SM.shisya_nm), '".$password."' ) USING utf8) as shisya_nm,
            convert( AES_DECRYPT( UNHEX(SM.kaisya_nm), '".$password."' ) USING utf8) as kaisya_nm,
            TM.id as torihikisaki_id,
            TM.web_record_kbn as web_record_kbn,
            TM.web_login_lock_flg,
            TM.taisyoku_flg,
            TM.delete_flg
            from web_m_torihikisaki as TM
            left Join web_m_shisya as SM on TM.shisya_cd = SM.shisya_cd
            where convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_email), '".$password."' ) USING utf8) = '".$inputEmail."'
            ";
        $user = DB::select($sql);

        if (count($user) === 0){
            //メールアドレスまたはパスワードが違う場合は0件
            return view('login', [
                'login_error' => '1',
                'inputEmail' => $inputEmail,
                'inputPassword' => $inputPassword
            ]);
        }
        Log::info(print_r($user, true));

        // 一致
        if ($inputPassword == $user[0]->torihikisaki_web_password) {

                if($user[0]->taisyoku_flg == true || $user[0]->delete_flg == true)
                {
                    Log::info(print_r('error', true));

                    return view('login', ['login_error' => '1',
                        'inputEmail' => $inputEmail,
                        'inputPassword' => $inputPassword
                    ]);
                }else{
                    //入力されたパスワードが一致した場合はセッションに保存
                    // セッション
                    $torihikisaki_id = $user[0]->torihikisaki_id;
                    $torihikisaki_nm = $user[0]->torihikisaki_nm;
                    $torihikisaki_tantosya_email = $user[0]->torihikisaki_tantosya_email;
                    $kaisya_nm = $user[0]->kaisya_nm;
                    $shisya_nm = $user[0]->shisya_nm;
                    $check_password = $cueslib->checkPassword($user[0]->torihikisaki_web_password,$torihikisaki_tantosya_email);
                    Log::info(print_r('check_password:'.$check_password, true));


                    if($user[0]->web_record_kbn == 2)
                    {
                        session(['id'  => $torihikisaki_id]);
                        session(['name'  => $torihikisaki_nm]);
                        session(['email' => $torihikisaki_tantosya_email]);
                        session(['kaisya_nm' => $kaisya_nm = $user[0]->kaisya_nm]);
                        session(['shisya_nm' => $shisya_nm = $user[0]->shisya_nm]);
                        Log::info(print_r('ok', true));
                        if($check_password == 1)
                        {
                            return redirect('/pw_st_edit');
                        }else{
                            return redirect(url('/home'));
                        }
                    }else{
                        $shisya_sql = "select
                            shisya_cd,
                            convert( AES_DECRYPT( UNHEX(shisya_nm), '".$password."' ) USING utf8) as shisya_nm
                            from web_m_shisya
                            where web_disp_flg = 1
                            order by web_sort desc;
                        ";

                        $shisyalists = DB::select($shisya_sql);

                        $syokui_sql = "select
                            syokui_cd,
                            syokui_nm
                            from web_m_syokui;
                        ";
                        $syokuilists = DB::select($syokui_sql);
                        session(['id'  => $torihikisaki_id]);
                        session(['email' => $inputEmail]);

                        return redirect('/register?mode=2');

                    }
                }
            // 不一致
            }else{
                Log::info(print_r('error', true));

                return view('login', ['login_error' => '1',
                    'inputEmail' => $inputEmail,
                    'inputPassword' => $inputPassword
                ]);
            }
    }
    public function ShowSignUp(Request $request)
    {
        Log::info(print_r($request->all(), true));
        $urltoken = $request->urltoken;

        return view('signup',[
            'urltoken' => $urltoken,
        ]);

    }
    public function Signup(Request $request)
    {
        $password = config('my-setting.MY_CRYPT_KEY'); //.envファイル:DB_CRYPT_KEY
        $rules = array(
            'tmp_password' => ['required'],
        );
        $cueslib = new CuesLib();
        $this->validate($request, $rules);
        Log::info(print_r($request->all(), true));
        $urltoken = $request->urltoken;
        $input_password = $request->tmp_password;
        $web_password = '';
        Log::info(print_r('urltoken:'.$urltoken, true));
        Log::info(print_r('input_password:'.$input_password, true));
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
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_web_password), '".$password."' ) USING utf8) as torihikisaki_web_password,
            TM.shisya_henkou_flag as shisya_henkou_flag,
            TM.shisya_henkou_dt as shisya_henkou_dt,
            TM.syokui_cd as syokui_cd,
            SY.syokui_nm as syokui_nm,
            TM.web_record_kbn as web_record_kbn,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_telno), '".$password."' ) USING utf8) as torihikisaki_tantosya_telno,
            convert( AES_DECRYPT( UNHEX(SM.shisya_nm), '".$password."' ) USING utf8) as shisya_nm,
            convert( AES_DECRYPT( UNHEX(SM.kaisya_nm), '".$password."' ) USING utf8) as kaisya_nm
            from web_m_torihikisaki as TM
            left Join web_m_shisya as SM on TM.shisya_cd = SM.shisya_cd
            left Join web_m_syokui as SY on TM.syokui_cd = SY.syokui_cd
            where TM.urltoken  = '".$urltoken."'
            ";
        $user = DB::select($sql);

        Log::info(print_r($user, true));

        if (count($user) === 0){
            return view('signup', [
                'login_error' => '1',
                'urltoken' => $urltoken,
            ]);
        }else{
            Log::info(print_r('---', true));
            Log::info(print_r('input_password:'.$input_password, true));
            Log::info(print_r('torihikisaki_web_password:'.$user[0]->torihikisaki_web_password, true));
               if ($user[0]->torihikisaki_web_password == $input_password) {
                $web_password == $user[0]->torihikisaki_web_password;
                $torihikisaki_id = $user[0]->torihikisaki_id;
                $torihikisaki_nm = $user[0]->torihikisaki_nm;
                $torihikisaki_tantosya_email = $user[0]->torihikisaki_tantosya_email;
                $kaisya_nm = $user[0]->kaisya_nm;
                $shisya_nm = $user[0]->shisya_nm;
                $check_password = $cueslib->checkPassword($web_password,$torihikisaki_tantosya_email);
                Log::info(print_r('check_password:'.$check_password, true));
//                $check_password = 1;
                $syokui_sql = "select
                    syokui_cd,
                    syokui_nm
                    from web_m_syokui;
                ";
                $syokuilists = DB::select($syokui_sql);
                session(['id'  => $torihikisaki_id]);
                session(['name'  => $torihikisaki_nm]);
                session(['email' => $torihikisaki_tantosya_email]);
                session(['kaisya_nm' => $kaisya_nm]);
                session(['shisya_nm' => $shisya_nm]);
                if($user[0]->web_record_kbn == 2){

                    if($check_password == 1)
                    {
                        return redirect('/pw_st_edit');
                    }else{
                        return redirect('/home');
                    }
                }else{
                    Log::info(print_r('名前なし', true));
                    return redirect('/register?mode=2');
                }

            }else{
                Log::info(print_r('error', true));

                return view('signup', [
                    'login_error' => '2',
                    'urltoken' => $urltoken,
                ]);

            }
        }
    }

    public function logout(Request $request)
    {
        session()->forget('id');
        session()->forget('name');
        session()->forget('email');
        session()->forget('shisya_nm');
        return redirect(url('/'));
    }

    public function TmpRegister(Request $request)
    {
        $password = config('my-setting.MY_CRYPT_KEY'); //.envファイル:DB_CRYPT_KEY
        Log::info(print_r($request->all(), true));
        $rules = array(
            'inputEmail' => ['required', 'string'],
        );
        $this->validate($request, $rules);
        $cueslib = new CuesLib();
        $now = Carbon::now();
        $host = config('app.url');
        $inputEmail = $request->inputEmail;
        if($inputEmail == "tugi@tugilo.com" || $inputEmail == "tugi.max@gmail.com"|| $inputEmail == "tugi@shoan.co.jp" || $inputEmail == "bugtest@bughaus.jp" || $inputEmail == "mitunami@gmail.com" || $inputEmail == "nakajima@cues-plus.com")
        {
            $mailto = $inputEmail;

        }else{
            $mailto = $inputEmail."@prudential.co.jp";
        }
        Log::info(print_r("mailto:".$mailto, true));
        $urltoken = $request->_token;
        $subject = "仮パスワード発行";
        $m_config_sql = "select * from web_m_config where config_id = 1";
        $configs = DB::select($m_config_sql);
        Log::info(print_r($configs, true));
        $system_year = $configs[0]->system_year;
        $check_sql = "select
            TM.id torihikisaki_id,
            TM.urltoken urltoken,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_web_password), '".$password."' ) USING utf8) as torihikisaki_web_password,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_email), '".$password."' ) USING utf8) as torihikisaki_tantosya_email
            from web_m_torihikisaki as TM
            where convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_email), '".$password."' ) USING utf8) = '".$mailto."'
            ";
        $user = DB::select($check_sql);
        Log::info(print_r($user, true));

        if (count($user) === 0){ //新規登録
            $tmp_passwd = $cueslib->createRandomStr(12);
            $mail_password = $tmp_passwd;
            $mail_token = $urltoken;
            $check_token = "select * from web_m_torihikisaki where urltoken = '".$mail_token."'";
            $c_token = DB::select($check_token);
            if(count($c_token) > 0)
            {
                $mail_token = Str::random(32);;
            }
            $sql = "insert into web_m_torihikisaki
                (
                    web_record_kbn,
                    system_year,
                    gaiji_flg,
                    sakusei_tp,
                    koushin_tp,
                    torihikisaki_tantosya_email,
                    torihikisaki_web_password,
                    urltoken
                ) values (
                    1,
                    '".$system_year."',
                    0,
                    '".$now."',
                    '".$now."',
                    HEX(AES_ENCRYPT( '".$mailto."', '".$password."' )),
                    HEX(AES_ENCRYPT( '".$mail_password."', '".$password."' )),
                    '".$mail_token."'
                );
            ";
            Log::info(print_r("SQL:".$sql, true));
            Log::info(print_r("urltoken:".$mail_token, true));
            $insert_sql = DB::insert($sql);
        }else{ //既存の取引先
            $org_tmp_passwd = $user[0]->torihikisaki_web_password;
            $torihikisaki_tantosya_email = $user[0]->torihikisaki_tantosya_email;
            $org_urltoken = $user[0]->urltoken;
            $check_password = 0;
            Log::info(print_r("org_tmp_passwd:".$org_tmp_passwd, true));
            Log::info(print_r("org_urltoken:".$org_urltoken, true));
            if(empty($org_tmp_passwd))
            {
                $tmp_passwd = $cueslib->createRandomStr(12);
                $mail_password = $tmp_passwd;
            }else{
                $mail_password = $org_tmp_passwd;

            }
            if(empty($org_urltoken))
            {
                $mail_token = $urltoken;
            }else{
                $mail_token = $org_urltoken;

            }
            if (isset($org_tmp_passwd) && isset($torihikisaki_tantosya_email) && !empty($org_urltoken)) {
                $check_password = $cueslib->checkPassword($org_tmp_passwd,$torihikisaki_tantosya_email);
                Log::info(print_r('check_password:'.$check_password, true));
//                $check_password = 1;
                if($check_password == 1)
                {
                    $mail_password = $cueslib->createRandomStr(12);
                    $update_sql = "update  web_m_torihikisaki set
                        web_record_kbn = 1,
                        system_year = '".$system_year."',
                        gaiji_flg = 0 ,
                        sakusei_tp = '".$now."',
                        koushin_tp = '".$now."',
                        torihikisaki_web_password = HEX(AES_ENCRYPT( '".$mail_password."', '".$password."' )),
                        urltoken = '".$mail_token."'
                        where torihikisaki_tantosya_email = HEX(AES_ENCRYPT( '".$mailto."', '".$password."' ))
                    ";
                    Log::info(print_r("update_sql:".$update_sql, true));
                    $updated_sql = DB::update($update_sql);
                }
            }else{
                if(empty($org_tmp_passwd) || empty($org_urltoken))
                {
                    $mail_token = $urltoken;

                    $empty_sql = "update  web_m_torihikisaki set
                        web_record_kbn = 1,
                        system_year = '".$system_year."',
                        gaiji_flg = 0 ,
                        sakusei_tp = '".$now."',
                        koushin_tp = '".$now."',
                        torihikisaki_web_password = HEX(AES_ENCRYPT( '".$mail_password."', '".$password."' )),
                        urltoken = '".$mail_token."'
                        where torihikisaki_tantosya_email = HEX(AES_ENCRYPT( '".$mailto."', '".$password."' ))
                    ";
                    Log::info(print_r("empty_sql:".$empty_sql, true));

                    $updated_sql = DB::update($empty_sql);
                    Log::info(print_r('token or passwd is empty'));

                }
            }
        }
        if($mailto)
        {
            $value = Mail::to($mailto)
                ->send(new VerifyMail($host,$subject, $mail_password, $mail_token));
            Log::info(print_r($value, true));

        }
        return redirect('/signup?urltoken='.$mail_token);
    }

    public function ShowRegister(Request $request)
    {
        Log::info(print_r($request->all(), true));
        $password = config('my-setting.MY_CRYPT_KEY'); //.envファイル:DB_CRYPT_KEY
        $shisya_sql = "select
            shisya_cd,
            convert( AES_DECRYPT( UNHEX(shisya_nm), '".$password."' ) USING utf8) as shisya_nm
            from web_m_shisya
            where web_disp_flg = 1;
        ";
        if($request->mode)
        {
            $mode = $request->mode;
        }else{
            $mode = '';
        }
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
                    order by web_sort asc;
                ";
//                Log::info(print_r($shisya_sql, true));

                $shisyalists = DB::select($shisya_sql);
//                Log::info(print_r($shisyalists, true));
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
        $torihikisaki_email = session('email');
        $user = [];
        $sql = "select
            TM.id as torihikisaki_id,
            TM.lp_cd as lp_cd,
            TM.shisya_cd as shisya_cd,
            TM.syokui_cd as syokui_cd,
            TM.gaiji_flg as gaiji_flg,
            TM.shisya_henkou_flag as shisya_henkou_flag,
            TM.shisya_henkou_dt as shisya_henkou_dt,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_nm), '".$password."' ) USING utf8) as torihikisaki_nm,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_kana), '".$password."' ) USING utf8) as torihikisaki_kana,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_email), '".$password."' ) USING utf8) as torihikisaki_tantosya_email,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_web_password), '".$password."' ) USING utf8) as torihikisaki_web_password,
            convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_telno), '".$password."' ) USING utf8) as torihikisaki_tantosya_telno,
            convert( AES_DECRYPT( UNHEX(SM.shisya_nm), '".$password."' ) USING utf8) as shisya_nm,
            convert( AES_DECRYPT( UNHEX(SM.postno), '".$password."' ) USING utf8) as postno,
            convert( AES_DECRYPT( UNHEX(SM.address1), '".$password."' ) USING utf8) as address1,
            convert( AES_DECRYPT( UNHEX(SM.address2), '".$password."' ) USING utf8) as address2,
            convert( AES_DECRYPT( UNHEX(SM.address3), '".$password."' ) USING utf8) as address3,
            convert( AES_DECRYPT( UNHEX(SM.telno), '".$password."' ) USING utf8) as telno,
            convert( AES_DECRYPT( UNHEX(SM.kaisya_nm), '".$password."' ) USING utf8) as kaisya_nm,
            TM.web_record_kbn as web_record_kbn
            from web_m_torihikisaki as TM
            left Join web_m_shisya as SM on TM.shisya_cd = SM.shisya_cd
            where convert( AES_DECRYPT( UNHEX(TM.torihikisaki_tantosya_email), '".$password."' ) USING utf8) = '".$torihikisaki_email."'
            ";
        $user = DB::select($sql);
        Log::info(print_r($user, true));

        return view('register',[
            'mode' => $mode,
            'user' => $user,
            'shisyas' => $shisyas,
            'syokuilists' => $syokuilists,
        ]);
    }
    public function ConfirmRegister(Request $request)
    {
        $password = config('my-setting.MY_CRYPT_KEY'); //.envファイル:DB_CRYPT_KEY
        Log::info(print_r($request->all(), true));
        $rules = array(
            'lp_cd' => ['required','integer'],
            'inputName' => ['required', 'string'],
            'inputNameKana' => ['required', 'string'],
            'oldCharacterRadios' => ['required'],
            'inputBranch' => ['required'],
            'inputMobile' => ['required', 'string'],
            'inputPosition' => ['required'],
        );

        $this->validate($request, $rules);

        $lp_cd = $request->lp_cd;
        if(session('id'))
        {
            $torihikisaki_id = session('id');

        }else{
            $torihikisaki_id = $request->torihikisaki_id;

        }
        $inputName = $request->inputName;
        $inputNameKana = $request->inputNameKana;
        $oldCharacterRadios = $request->oldCharacterRadios;
        $inputBranch = $request->inputBranch;
        if(session('kaisya_nm'))
        {
            $inputCompany = session('kaisya_nm');

        }else{
            $inputCompany = $request->inputCompany;

        }
        $changeBranchRadios = $request->changeBranchRadios;
        $inputChangeBranch = $request->inputChangeBranch;
        if(session('email'))
        {
            $inputEmail = session('email');

        }else{
            $inputEmail = $request->inputEmail;

        }
        $inputMobile = $request->inputMobile;
        $inputPosition = $request->inputPosition;
        $mode = $request->mode;
        Log::info(print_r('torihikisaki_id:'.$torihikisaki_id, true));
        Log::info(print_r('torihikisaki_mail:'.$inputEmail, true));
        $shokui = WebMSyokui::where('syokui_cd', '=', $inputPosition)->first();

        Log::info(print_r('inputPosition:'.$inputPosition, true));

        if($inputChangeBranch == 1)
        {
            $printChangeBranch = "2021年4月";
        }else if($inputChangeBranch == 2){
            $printChangeBranch = "2021年5月";
        }else if($inputChangeBranch == 3){
            $printChangeBranch = "2021年6月";
        }else if($inputChangeBranch == 4){
            $printChangeBranch = "2021年7月";
        }else if($inputChangeBranch == 5){
            $printChangeBranch = "2021年8月";
        }else if($inputChangeBranch == 6){
            $printChangeBranch = "2021年9月";
        }else if($inputChangeBranch == 7){
            $printChangeBranch = "2021年10月";
        }else if($inputChangeBranch == 8){
            $printChangeBranch = "2021年11月";
        }else if($inputChangeBranch == 9){
            $printChangeBranch = "2021年12月";
        }else if($inputChangeBranch == 10){
            $printChangeBranch = "2022年1月";
        }else if($inputChangeBranch == 11){
            $printChangeBranch = "2022年2月";
        }else if($inputChangeBranch == 12){
            $printChangeBranch = "2022年3月";
        }else if($inputChangeBranch == 13){
            $printChangeBranch = "2022年4月";
        }else{
            $printChangeBranch = "";
        }
        $new_shisya_sql = "select
            shisya_cd,
            convert( AES_DECRYPT( UNHEX(shisya_nm), '".$password."' ) USING utf8) as shisya_nm,
            convert( AES_DECRYPT( UNHEX(postno), '".$password."' ) USING utf8) as postno,
            convert( AES_DECRYPT( UNHEX(address1), '".$password."' ) USING utf8) as address1,
            convert( AES_DECRYPT( UNHEX(address2), '".$password."' ) USING utf8) as address2,
            convert( AES_DECRYPT( UNHEX(address3), '".$password."' ) USING utf8) as address3,
            convert( AES_DECRYPT( UNHEX(telno), '".$password."' ) USING utf8) as telno
            from web_m_shisya
            where shisya_cd = '".$inputBranch."';
        ";
        $new_shisya = DB::select($new_shisya_sql);
        //Log::info(print_r($new_shisya, true));


        $user = [
            'lp_cd' => $lp_cd,
            'torihikisaki_id' => $torihikisaki_id,
            'inputName' => $inputName,
            'inputNameKana' => $inputNameKana,
            'oldCharacterRadios' => $oldCharacterRadios,
            'inputCompany' => $inputCompany,
            'inputBranch' => $inputBranch,
            'changeBranchRadios' => $changeBranchRadios,
            'inputChangeBranch' => $inputChangeBranch,
            'printChangeBranch' => $printChangeBranch,
            'inputMobile' => $inputMobile,
            'inputEmail' => $inputEmail,
            'inputPosition' => $inputPosition,
            'positionName' => $shokui->syokui_nm,
            'mode' => $mode,
        ];
        Log::info(print_r($user, true));

        return view('register_confirm',[
            'new_shisya' => $new_shisya,
            'user' => $user,
        ]);
    }

    public function Register(Request $request)
    {
        $password = config('my-setting.MY_CRYPT_KEY'); //.envファイル:DB_CRYPT_KEY
        Log::info(print_r($request->all(), true));
        $m_config_sql = "select * from web_m_config where config_id = 1";
        $configs = DB::select($m_config_sql);
        Log::info(print_r($configs, true));
        $config_id = $configs[0]->config_id;
        $system_year = $configs[0]->system_year;
        $now = Carbon::now();
        if(session('id'))
        {
            $torihikisaki_id = session('id');

        }else{
            $torihikisaki_id = $request->torihikisaki_id;
        }
        if(session('mail'))
        {
            $torihikisaki_id = session('mail');

        }else{
            $torihikisaki_mail = $request->inputEmail;
        }
        $torihikisaki_mail = session('mail');
        Log::info(print_r('torihikisaki_id:'.$torihikisaki_id, true));
        Log::info(print_r('torihikisaki_mail:'.$torihikisaki_mail, true));
        if($request->lp_cd)
        {
            $lp_cd = $request->lp_cd;

        }else{
            $lp_cd = 0;

        }
        $inputName = $request->inputName;
        $inputNameKana = $request->inputNameKana;
        $inputCompany = $request->inputCompany;
        $oldCharacterRadios = $request->oldCharacterRadios;
        $inputBranch = $request->inputBranch;
        $changeBranchRadios = $request->changeBranchRadios;
        $inputChangeBranch = $request->inputChangeBranch;
        $inputEmail = $request->inputEmail;
        $inputMobile = $request->inputMobile;
        $inputMail = $request->inputMail;
        $inputPosition = $request->inputPosition;
        $mode = $request->mode;
        if($changeBranchRadios == 1)
        {
            if($inputChangeBranch == 1)
            {
                $dataChangeBranch = "2021-04-01";
            }else if($inputChangeBranch == 2){
                $dataChangeBranch = "2021-05-01";
            }else if($inputChangeBranch == 3){
                $dataChangeBranch = "2021-06-01";
            }else if($inputChangeBranch == 4){
                $dataChangeBranch = "2021-07-01";
            }else if($inputChangeBranch == 5){
                $dataChangeBranch = "2021-08-01";
            }else if($inputChangeBranch == 6){
                $dataChangeBranch = "2021-09-01";
            }else if($inputChangeBranch == 7){
                $dataChangeBranch = "2021-10-01";
            }else if($inputChangeBranch == 8){
                $dataChangeBranch = "2021-11-01";
            }else if($inputChangeBranch == 9){
                $dataChangeBranch = "2021-12-01";
            }else if($inputChangeBranch == 10){
                $dataChangeBranch = "2022-01-01";
            }else if($inputChangeBranch == 11){
                $dataChangeBranch = "2022-02-01";
            }else if($inputChangeBranch == 12){
                $dataChangeBranch = "2022-03-01";
            }else if($inputChangeBranch == 13){
                $dataChangeBranch = "2022-04-01";
            }else{
                $dataChangeBranch = NULL;
            }

        }else{
            $dataChangeBranch = NULL;
        }
        if(!$inputChangeBranch){
            $dataChangeBranch = NULL;
        }
        Log::info(print_r('dataChangeBranch:'.$dataChangeBranch, true));

        if($mode == 1)
        {
            if($changeBranchRadios == 1)
            {
                $sql  = "update web_m_torihikisaki set ";
                $sql .= "web_record_kbn = 2, ";
                $sql .= "torihikisaki_nm = HEX(AES_ENCRYPT( '".$inputName."', '".$password."' )), ";
                $sql .= "torihikisaki_kana = HEX(AES_ENCRYPT( '".$inputNameKana."', '".$password."' )), ";
                $sql .= "gaiji_flg = '".$oldCharacterRadios."', ";
                $sql .= "system_year = '".$system_year."', ";
                $sql .= "shisya_cd = '".$inputBranch."', ";
                $sql .= "shisya_henkou_flag = '".$changeBranchRadios."', ";
                if($dataChangeBranch)
                {
                    $sql .= "shisya_henkou_dt = '".$dataChangeBranch."', ";
                }else{
                    $sql .= "shisya_henkou_dt = NULL, ";

                }
                $sql .= "torihikisaki_tantosya_telno = HEX(AES_ENCRYPT( '".$inputMobile."', '".$password."' )), ";
                $sql .= "koushin_tp	 = '".$now."', ";
                $sql .= "syokui_cd = '".$inputPosition."' ";
                $sql .= "where id = '".$torihikisaki_id."'";

            }else{
                $sql = "update web_m_torihikisaki set
                    web_record_kbn = 2,
                    torihikisaki_nm = HEX(AES_ENCRYPT( '".$inputName."', '".$password."' )),
                    torihikisaki_kana = HEX(AES_ENCRYPT( '".$inputNameKana."', '".$password."' )),
                    gaiji_flg = '".$oldCharacterRadios."',
                    shisya_cd = '".$inputBranch."',
                    system_year = '".$system_year."',
                    shisya_henkou_flag = '".$changeBranchRadios."',
                    torihikisaki_tantosya_telno = HEX(AES_ENCRYPT( '".$inputMobile."', '".$password."' )),
                    koushin_tp	 = '".$now."',
                    syokui_cd = '".$inputPosition."'
                    where id = '".$torihikisaki_id."'";

            }

            $update_sql = DB::update($sql);

        }else{
            if($changeBranchRadios == 1)
            {
                $sql = "update web_m_torihikisaki set ";
                $sql .= "web_record_kbn = 2, ";
                $sql .= "lp_cd = '".$lp_cd."', ";
                $sql .= "torihikisaki_nm = HEX(AES_ENCRYPT( '".$inputName."', '".$password."' )), ";
                $sql .= "torihikisaki_kana = HEX(AES_ENCRYPT( '".$inputNameKana."', '".$password."' )), ";
                $sql .= "gaiji_flg = '".$oldCharacterRadios."', ";
                $sql .= "shisya_cd = '".$inputBranch."', ";
                $sql .= "system_year = '".$system_year."', ";
                $sql .= "shisya_henkou_flag = '".$changeBranchRadios."', ";
                if($dataChangeBranch)
                {
                    $sql .= "shisya_henkou_dt = '".$dataChangeBranch."', ";
                }else{
                    $sql .= "shisya_henkou_dt = NULL, ";

                }
                $sql .= "torihikisaki_tantosya_telno = HEX(AES_ENCRYPT( '".$inputMobile."', '".$password."' )), ";
                $sql .= "koushin_tp	 = '".$now."', ";
                $sql .= "syokui_cd = '".$inputPosition."' ";
                $sql .= "where id = '".$torihikisaki_id."'";

            }else{
                $sql = "update web_m_torihikisaki set
                    web_record_kbn = 2,
                    lp_cd = '".$lp_cd."',
                    torihikisaki_nm = HEX(AES_ENCRYPT( '".$inputName."', '".$password."' )),
                    torihikisaki_kana = HEX(AES_ENCRYPT( '".$inputNameKana."', '".$password."' )),
                    gaiji_flg = '".$oldCharacterRadios."',
                    shisya_cd = '".$inputBranch."',
                    system_year = '".$system_year."',
                    shisya_henkou_flag = '".$changeBranchRadios."',
                    torihikisaki_tantosya_telno = HEX(AES_ENCRYPT( '".$inputMobile."', '".$password."' )),
                    koushin_tp	 = '".$now."',
                    syokui_cd = '".$inputPosition."'
                    where id = '".$torihikisaki_id."'";

            }
            $update_sql = DB::update($sql);

        }
        Log::info(print_r('sql:'.$sql, true));
        Log::info(print_r($update_sql, true));
        $shisya_sql = "select
            shisya_cd,
            convert( AES_DECRYPT( UNHEX(shisya_nm), '".$password."' ) USING utf8) as shisya_nm
            from web_m_shisya
            where shisya_cd = '".$inputBranch."';
        ";
        $shisya = DB::select($shisya_sql);
        if($mode == 2)
        {
            session(['id'  => $torihikisaki_id]);
            session(['name'  => $inputName]);
            session(['email' => $inputMail]);
            session(['kaisya_nm' => $kaisya_nm = $inputCompany]);
            session(['shisya_nm' => $shisya_nm = $shisya[0]->shisya_nm]);
            Log::info(print_r('ok', true));

        }else{
            session(['name'  => $inputName]);
            session(['shisya_nm' => $shisya_nm = $shisya[0]->shisya_nm]);
        }
        return redirect('/home');
    }
}
