<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/login', [
  'uses' => 'LoginController@index',
  'as' => 'login'
]);
Route::get('/', function () {
    return view('welcome');
});

  Route::get('/student/create', [
    'uses' => 'StudentsController@create',
    'as' => 'student.create'
  ]);
  Route::post('/student/store', [
    'uses' => 'StudentsController@store',
    'as' => 'student.store'
  ]);
Route::get('/requestsubmited', [
  'uses' => 'StudentsController@null',
  'as' => 'null'
]);

Route::get('/home', [
  'uses' => 'HomeController@index',
  'as' => 'home'
]);

Auth::routes();
Route::group(['prefix'=> 'admin', 'middleware' => 'auth'], function(){



    Route::get('/kill/{id}', [
        'uses' => 'StudentsController@kill',
        'as' => 'students.kill'
    ]);


        Route::get('/student/delete/{id}', [
            'uses' => 'StudentsController@destroy',
            'as' => 'student.delete'
            ] );



  Route::get('/students', [
    'uses' => 'StudentsController@index',
    'as' => 'students'
  ]);

  Route::get('/send-accept', [
    'uses' => 'MailController@sendAccept',
    'as' => 'mailacc'
  ]);
  Route::get('/send-emails', [
    'uses' => 'MailController@sendDecline',
    'as' => 'maildec'
  ]);
  Route::get('/send-att', [
    'uses' => 'MailController@sendAttestation',
    'as' => 'mailatt'
  ]);



  });

