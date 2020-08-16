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

// ROUTES MASTER
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/index', 'HomeController@index');

Route::get('/contact', function () {
    return view('contact');
});

// ROUTES PERTANYAAN
Route::resource('questions', 'QuestionController');

// ROUTES JAWABAN
Route::get('/jawaban/{id_pertanyaan}/tambah', 'AnswerController@create');

Route::post('/jawaban', 'AnswerController@store');
Route::get('/jawaban', 'AnswerController@index');

Route::get('/jawaban/{id_jawaban}/edit', 'AnswerController@edit');
Route::put('/jawaban/{id_jawaban}', 'AnswerController@update');

Route::delete('/jawaban/{id_jawaban}', 'AnswerController@destroy');

// ROUTES COMMENTS
Route::resource('questionComments', 'QuestionCommentController');
Route::resource('answerComments', 'AnswerCommentController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', function() {
    Auth::logout();
    return redirect('/login');
});
