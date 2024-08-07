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

        // オープン期間とクローズ期間の日程が入っているすべての商品種別を取得
        $syouhin_syubetus = WebMSyouhinSyubetu::whereNotNull('syouhin_syubetu_open_dt')
            ->whereNotNull('syouhin_syubetu_close_dt')
            ->get();

        $open_syouhin_syubetus = [];

        foreach ($syouhin_syubetus as $syouhin_syubetu) {
            $open_day = new Carbon($syouhin_syubetu->syouhin_syubetu_open_dt);
            $close_day = new Carbon($syouhin_syubetu->syouhin_syubetu_close_dt);

            $image_base_name = '';
            $link = '';
            switch ($syouhin_syubetu->syouhin_syubetu) {
                case 1:
                    $image_base_name = 'home-calendar';
                    $link = '/calendar';
                    break;
                case 2:
                    $image_base_name = 'home-newsletter';
                    $link = '/syouhin/list?syouhin_syubetu=' . $syouhin_syubetu->syouhin_syubetu;
                    break;
                case 3:
                    $image_base_name = 'home-golfball';
                    $link = '/syouhin/list?syouhin_syubetu=' . $syouhin_syubetu->syouhin_syubetu;
                    break;
                default:
                    $image_base_name = 'home-default';
                    $link = '/syouhin/list?syouhin_syubetu=' . $syouhin_syubetu->syouhin_syubetu;
                    break;
            }

            if ($syouhin_syubetu->site_status == 1 && $now->between($open_day, $close_day)) {
                $syouhin_syubetu->open_flg = 1;
                $syouhin_syubetu->image = $image_base_name . '.jpg';
            } else {
                $syouhin_syubetu->open_flg = 0;
                $syouhin_syubetu->image = $image_base_name . '_close.jpg';
            }

            $syouhin_syubetu->link = $link;
            $open_syouhin_syubetus[] = $syouhin_syubetu;
        }

        return view('home', ['syouhin_syubetus' => $open_syouhin_syubetus]);
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
