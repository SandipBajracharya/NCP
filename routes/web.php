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
*/

Route::get('/', function () {
    return view('pages.home');
});

Auth::routes();

Route::get('/introduction', 'Pages\IntroductionController@index')->name('introduction');

Route::get('/relatedlinks', 'Pages\RelatedLinksController@index')->name('relatedLinks');

Route::get('/contacts', 'Pages\ContactController@index')->name('contact');

Route::get('/feedback', 'Pages\FeedbackController@showForm')->name('feedback');
Route::post('/feedback', 'Pages\FeedbackController@storeForm');

Route::get('/electioncommittee','Pages\ElectionCommitteeController@showIndex')->name('electionCommittee');
Route::get('/electioncommittee/chetra','Pages\ElectionCommitteeController@showChetra')->name('electionCommitteeChetra');
