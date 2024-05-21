<?php
//selectメニューを作成するClass
namespace App\Libs;

use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;

class CuesLib{

    /**
    * ランダムな文字列を作成する
    *
    * $length : 文字列の長さ
    * $isResembleStr : 似通った文字を使用するか
    * $isBigAlphabet : アルファベット大文字を使用するか
    * $isSmallAlphabet : アルファベット小文字を使用するか
    * $isNumeric : 数字を使用するか
    * $isSymbol : 記号を使用するか
    **/
   function createRandomStr($length) {
       //文字列を生成する
       $createStr = '';
       $ar01 = array('2','3','4','5','6','7','8','9');
       $ar02 = array('a','b','c','d','e','f','g','h','j','k','m','n','p','r','s','t','u','v','x','y','z');
       $ar03 = array('A','B','C','D','E','F','G','H','J','K','M','N','P','R','S','T','U','V','X','Y','Z');
       $ar04 = array('0','1','2');

       for($i = 0; $i <= 2; $i++){
           $key_[0] = $ar01[array_rand($ar01)];
           $key_[1] = $ar02[array_rand($ar02)];
           $key_[2] = $ar03[array_rand($ar03)];
           shuffle($ar04);
           $createStr .= $key_[$ar04[0]] . $key_[$ar04[1]] . $key_[$ar04[2]];
        }
       return $createStr;
   }

   function checkPassword($password, $email){
       $error = 0;
       if(strtoupper($password) == strtoupper(mb_strstr($email, '@', true)))
       {
           $error = 1;
       }
       if(!preg_match("/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i", $password)) {
           $error = 1;
       }
       Log::info(print_r('error:'.$error, true));
       Log::info(print_r('email:'.strtoupper(mb_strstr($email, '@', true)), true));
       return $error;
   }
}
