<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
*/


/*登録関連*/
Route::get('/', 'LoginController@index');
Route::get('/login', 'LoginController@ShowLoginForm');
Route::get('/signup', 'LoginController@ShowSignUp');
Route::post('/signup', 'LoginController@Signup');
Route::post('/login', 'LoginController@login');
Route::post('/tmp_register', 'LoginController@TmpRegister');
Route::get('/register', 'LoginController@ShowRegister');
Route::post('/register_confirm', 'LoginController@ConfirmRegister');
Route::post('/register', 'LoginController@Register');
/*home*/
Route::get('/home', 'HomeController@home');

/*ユーザー情報関連*/
Route::get('/mypage', 'UserController@ShowMypage');
Route::get('/user_info', 'UserController@ShowUserInfo');
Route::get('/user_edit', 'UserController@EditUser');
Route::get('/pw_edit', 'UserController@ShowEditPassword');
Route::post('/pw_edit', 'UserController@EditPassword');
Route::get('/pw_forget', 'UserController@ForgetPassword');
Route::get('/pw_st_edit', 'UserController@ShowStEditPassword');
Route::post('/pw_st_edit', 'UserController@EditPassword');
Route::get('/userlist', 'AdminController@ListUser');

/*Ajax*/
Route::post('/getAddress', 'AjaxController@GetAddress');

/*注文関連*/
Route::get('/history', 'OrderController@ShowHistory');
Route::get('/syouhin/list', 'SyouhinController@ShowSyouhinlist');
Route::get('/syouhin/detail', 'SyouhinController@ShowSyouhinDetail');
Route::get('/cart/add', 'SyouhinController@CartAdd');
Route::post('/cart/add', 'SyouhinController@CartAdd');
Route::post('/cart/confirm', 'SyouhinController@CartConfirm');
Route::post('/cart/finish', 'SyouhinController@CartFinish');
Route::get('/cart/delete', 'SyouhinController@CartDelete');
Route::get('/cart/show', 'SyouhinController@CartShow');

/*カレンダー関連*/
/*カレンダートップ*/
Route::get('/calendar', 'HomeController@CalenderIndex');
Route::get('/calendar/syouhin/list', 'CalendarSyouhinController@ShowSyouhinlist');
Route::get('/calendar/syouhin/detail', 'CalendarSyouhinController@ShowSyouhinDetail');
Route::get('/calendar/cart/add', 'CalendarSyouhinController@CartAdd');
Route::post('/calendar/cart/add', 'CalendarSyouhinController@CartAdd');
Route::post('/calendar/cart/confirm', 'CalendarSyouhinController@CartConfirm');
Route::post('/calendar/cart/finish', 'CalendarSyouhinController@CartFinish');
Route::get('/calendar/cart/delete', 'CalendarSyouhinController@CartDelete');
Route::get('/calendar/cart/show', 'CalendarSyouhinController@CartShow');

/*faq*/
Route::get('/calendar/faq', 'CalendarStaticController@ShowFaq');
/*privacy*/
Route::get('/calendar/privacy', 'CalendarStaticController@ShowPrivacy');
/*挨拶状*/
Route::get('/calendar/greeting', 'CalendarStaticController@ShowGreeting');
/*発送代行*/
Route::get('/calendar/mail', 'CalendarStaticController@ShowMail');
/*スケジュール*/
Route::get('/calendar/schedule', 'CalendarStaticController@ShowSchedule');
/*私と、保全活動TOP*/
Route::get('/calendar/interview', 'CalendarStaticController@ShowInterview');

/*私と、保全活動詳細*/
Route::get('/calendar/interview/detail', 'CalendarStaticController@ShowInterviewDetail');
