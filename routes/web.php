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

// Route::redirect('/','/en');

// Route::group(['prefix'=>'{language}'], function () {
Route::get('/', 'Pages\HomeController@index')->name('home');

Route::get('/introduction', 'Pages\IntroductionController@index')->name('introduction');

Route::get('/relatedlinks', 'Pages\RelatedLinksController@index')->name('relatedLinks');

Route::get('/contacts', 'Pages\ContactController@index')->name('contact');

Route::get('/electioncommittee','Pages\ElectionCommitteeController@showIndex')->name('electionCommittee');
Route::get('/electioncommittee/chetra','Pages\ElectionCommitteeController@showChetra')->name('electionCommitteeChetra');


/*  Admin   */
Route::get('/dashboard', function (){
    return view('admin.Dashboard');
})->middleware('auth');

Route::group(['prefix' => 'NCadmin'], function() {
    Auth::routes();
});

//press release
Route::resource('/pressrelease','Admin\PressReleaseController');

//introduction
Route::get('/admin/introduction','Admin\IntroductionController@introductionForm')->name('introductionForm');
Route::put('/admin/introduction/{id}','Admin\IntroductionController@storeContent')->name('introductionUpdate');

// Feedback
Route::resource('/feedback','Admin\FeedbackController');

//contact
Route::get('/admin/contacts','Admin\ContactController@contactForm')->name('contactForm');
Route::put('/admin/contacts/{id}','Admin\ContactController@storeContact')->name('contactUpdate');

//District Leaders
Route::get('/admin/leaders','Admin\DistrictLeadersController@showForm')->name('DistrictLeaders');
Route::put('/admin/leaders/{id}','Admin\DistrictLeadersController@storeForm')->name('DistrictLeadersStore');

//Related Links
Route::resource('/admin/relatedlinks','Admin\RelatedLinksController');

//Online Gallery
Route::resource('/admin/onlinegallery','Admin\OnlineGalleryController');

/* Quick Links */
//Party Constitution
Route::resource('/partyconstitution','Admin\PartyConstitutionController');

// });