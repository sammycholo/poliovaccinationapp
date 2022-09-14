<?php

use App\Helpers\Location;
use App\Http\Controllers\Admin\MapController;
use Illuminate\Support\Facades\Artisan;
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
*/




Route::group(['namespace' => 'App\Http\Controllers'], function () {


    // ////////  Admin Related Routes  ///////////
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.',], function () {
        Route::view('login/', 'admin.login')->name('login');
        Route::post('auth/', 'AuthController@login')->name('auth');

        Route::group(['middleware' => 'auth:admin'], function () {
            Route::view('/dashboard', 'admin.index')->name('dashboard');


            Route::resource('worker', 'WorkerController');
            Route::resource('campaign', 'CampaignController');
            Route::resource('news', 'NewsController');
            Route::resource('complain', 'ComplainController');
            Route::resource('volunteer', 'VolunteerController');
            Route::resource('team', 'TeamController');
            Route::resource('profile', 'ProfileController');
            Route::get('map', 'MapController@vacinatedAreas')->name('vacLocation');
            Route::get('heatMap', 'MapController@heatMapLocations')->name('heatMapLocations');
            Route::post('add/member', 'TeamController@addMembers')->name('addMembers');
            Route::get('applicant/{opp_id}', 'ApplicantController@applicants')->name('applicant');

            Route::get('nonVaccinated/status', 'ReportController@nonVaccinate')->name('nonVaccinated');
            Route::get('vaccinated/status', 'ReportController@vaccinate')->name('vaccinated');
            Route::get('active/compaign', 'ReportController@activeComp')->name('activeComp');
            Route::get('unactive/compaign', 'ReportController@unActiveComp')->name('unActiveComp');

            Route::any('getlocation', 'MapController@GetWorkerLocations')->name('workerlocation');


            Route::get('logout', 'AuthController@logout')->name('logout');
        });
    });

    // ////////  Client Related Routes  ///////////

    Route::group(['prefix' => 'user', 'namespace' => 'User', 'as' => 'user.',], function () {
        Route::post('auth', 'AuthController@login')->name('auth');
        Route::post('register', 'AuthController@register')->name('register');
        Route::group(['middleware' => 'auth'], function () {
            Route::view('dashboard', 'user.index')->name('dashboard');
            Route::get('logout', 'AuthController@logout')->name('logout');

            Route::resource('complain', 'ComplainController');
            Route::resource('profile', 'ProfileController');
            Route::resource('campaign', 'CampaignController');
            Route::get('upcoming/campaign', 'CampaignController@upcoming')->name('upcoming');
            Route::resource('volunteer', 'VolunteerController');
            Route::post('volunteer/apply', 'VolunteerController@apply')->name('apply');
            Route::get('news', 'NewController@index')->name('news');
        });
    });

    // ////////  FRONT Related Routes  ///////////
    Route::group(['namespace' => 'Front', 'as' => 'front.',], function () {
        Route::view('/', 'front.index')->name('index');
        Route::view('login', 'front.login')->name('login');
        Route::view('register', 'front.register')->name('register');

        Route::view('forget', 'front.forget')->name('forget');
        Route::post('send/code', 'ForgetController@sendCode')->name('sendCode');
        Route::post('reset/password', 'ForgetController@resetPassword')->name('resetPassword');
    });
});
