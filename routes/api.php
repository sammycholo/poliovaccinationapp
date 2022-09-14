<?php

use App\Http\Controllers\Api\ComplainController;
use App\Http\Controllers\Api\Worker\SearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['namespace' => 'App\Http\Controllers\Api'], function () {
    Route::group(['prefix' => 'user', 'namespace' => 'User',], function () {
    
        Route::any('register','AuthController@register');
        Route::any('login','AuthController@login');

        Route::group(['middleware' => 'auth:api'], function () {
        
        Route::any('register/complain', 'ComplainController@regComplain');
        Route::any('view/campaign', 'CampaignController@campaign');
        Route::any('view/news', 'NewsController@news');        
        Route::any('volunteer/oppurtunities', 'VolunteerController@allOppurtunies');        
        Route::any('apply/oppurtunities', 'VolunteerController@applyOppurtunity'); 
        
        Route::any('add/record', 'RecordController@addRecord');
        Route::any('view/records', 'RecordController@allRecords');
        

    });
    });

    Route::group(['prefix' => 'worker', 'namespace' => 'Worker',], function () {

        Route::any('login','AuthController@login');
        Route::group(['middleware' => 'auth:worker-api'], function () {

            Route::any('cnic/search', 'SearchController@search');
            Route::any('vac/status', 'RecordController@vacStatus'); 
            Route::any('add/record', 'RecordController@addRecord');
            Route::any('get/record', 'RecordController@getRecords');
            Route::any('update/location', 'LocationController@updateLocation');
            Route::any('view/team', 'TeamController@viewTeam');
        });

    });
});



