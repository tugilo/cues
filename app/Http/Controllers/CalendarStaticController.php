<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CalendarStaticController extends Controller
{
    public function __construct()
    {
        $this->middleware('login');
    }
    public function ShowGreeting(Request $request)
    {

        return view('calendar.greeting',[]);
    }
    public function ShowMail(Request $request)
    {

        return view('calendar.mail',[]);
    }
    public function ShowSchedule(Request $request)
    {

        return view('calendar.schedule',[]);
    }
    public function ShowInterview(Request $request)
    {

        return view('calendar.interview',[]);
    }
    public function ShowInterviewDetail(Request $request)
    {

        Log::info(print_r($request->all(), true));
        $vol = $request->vol;
        return view('calendar.interview_'.$vol,[]);
    }
    public function ShowFaq(Request $request)
    {

        return view('calendar.faq',[]);
    }
    public function ShowPrivacy(Request $request)
    {

        return view('calendar.privacy',[]);
    }
}
