<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'CandidateController@dashboard']);
//Olevels first sitting
Route::get('/olevels', ['as' => 'olevels', 'uses' => 'CandidateController@olevels']);
Route::post('/examType', 'CandidateController@storeExamType');
Route::post('/olevels', 'CandidateController@storeOLevelGrade');
Route::post('/first_result', 'CandidateController@uploadFirstSitting');

Route::post('/second_result', 'CandidateController@uploadFirstSitting');
//O'Levels Second sitting
Route::get('/second_sitting', ['as' => 'second_sitting', 'uses' => 'CandidateController@second_sitting']);
Route::post('/exam_type', 'CandidateController@storeSecondExamType');
Route::post('/second_sitting', 'CandidateController@storesSecondSitting');
Route::post('/second_result', 'CandidateController@uploadSecondSitting');
//Jamb
Route::get('jamb', ['as' => 'jamb', 'uses' => 'CandidateController@jamb']);
Route::post('jamb', 'CandidateController@createJambScore');
Route::post('jambResult', 'CandidateController@uploadJambResult');
Route::get('/photo', ['as' => 'photo', 'uses' => 'CandidateController@photo']);
//Course
Route::get('course', ['as' => 'course', 'uses' => 'CandidateController@course']);
Route::post('select_course_ajax', ['as'=>'select-ajax','uses'=>'CandidateController@select_course_ajax']);
Route::post('course', 'CandidateController@createCourse');
//Photography
Route::post('/photo', 'CandidateController@uploadPhoto');
//Payment
Route::get('/payment', ['as' => 'payment', 'uses' => 'CandidateController@payment']);
Route::get('/pay', ['as' => 'pay', 'uses' => 'PaymentController@pay']);
Route::post('/teller', ['as' => 'teller', 'uses' => 'CandidateController@uploadTeller']);
Route::post('/pay', ['as' => 'pay', 'uses' => 'PaymentController@redirectToGateway']);
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');