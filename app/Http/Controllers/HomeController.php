<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\WebMTorihikisaki;
use App\Models\WebMSyouhinSyubetu;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('login');
    }
    public function home(Request $request)
    {
        Log::info(print_r(session()->all(), true));
        $now = new Carbon('now');
        Log::info(print_r('now:'.$now, true));
        $syouhin_syubetu = WebMSyouhinSyubetu::where('syouhin_syubetu', '=', 1)->first();

        $open_day = new Carbon($syouhin_syubetu->syouhin_syubetu_open_dt);
        Log::info(print_r('open_day:'.$open_day, true));
        $close_day = new Carbon($syouhin_syubetu->syouhin_syubetu_close_dt);
        Log::info(print_r('close_day:'.$close_day, true));
        if($now->format('Y-m-d H:i') >= $open_day->format('Y-m-d H:i') && $now->format('Y-m-d H:i') < $close_day->format('Y-m-d H:i'))
        {
            $open_flg = 1;
        }else{
            $open_flg = 1;
        }
        if($open_flg == 1)
        {

            Log::info(print_r('open_flg:'.$open_flg, true));
            return view('home',[]);

        }else{
            Log::info(print_r('open_flg:'.$open_flg, true));
            return view('home_close',[]);

        }

    }
    public function CalenderIndex(Request $request)
    {
        Log::info(print_r(session()->all(), true));
        $now = new Carbon('now');
        Log::info(print_r('now:'.$now, true));
        /*
        $syouhin_syubetu = WebMSyouhinSyubetu::where('syouhin_syubetu', '=', 1)->first();

        $open_day = new Carbon($syouhin_syubetu->syouhin_syubetu_open_dt);
        Log::info(print_r('open_day:'.$open_day, true));
        $close_day = new Carbon($syouhin_syubetu->syouhin_syubetu_close_dt);
        Log::info(print_r('close_day:'.$close_day, true));
        if($now->format('Y-m-d H:i') >= $open_day->format('Y-m-d H:i') && $now->format('Y-m-d H:i') < $close_day->format('Y-m-d H:i'))
        {
            $open_flg = 1;
        }else{
            $open_flg = 0;
        }
        if($open_flg == 1)
        {

            Log::info(print_r('open_flg:'.$open_flg, true));
            return view('calender',[]);

        }else{
            Log::info(print_r('open_flg:'.$open_flg, true));
            return view('calender',[]);

        }
        */
        return view('calendar.calendar',[]);
    }
}
