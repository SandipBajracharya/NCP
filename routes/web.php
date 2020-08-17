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
Route::get('/electioncommittee/chettra/{id}','Pages\ElectionCommitteeController@showChetra')->name('electionCommitteeChetra');


/*  Admin   */
Route::get('/dashboard', function (){
    return view('admin.Dashboard');
})->middleware('auth');

Route::group(['prefix' => 'NCadmin'], function() {
    Auth::routes();
});

//press release
Route::resource('/pressrelease','Admin\PressReleaseController');

//Upcoming Events
Route::resource('/upcomingevents','Admin\UpcomingEventsController');

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

//Online Gallery (Admin)
Route::resource('/admin/onlinegallery','Admin\OnlineGalleryController');
//online gallery (pages)
Route::get('/onlinegallery','Pages\OnlineGalleryController@index')->name('OnlineGallery');
Route::get('/onlinegallery/photos','Pages\OnlineGalleryController@photoGallery')->name('PhotoGallery');
Route::get('/onlinegallery/photos/{id}','Pages\OnlineGalleryController@showPhoto')->name('ShowPhoto');

Route::get('/onlinegallery/videos','Pages\OnlineGalleryController@videoGallery')->name('VideoGallery');
Route::get('/onlinegallery/videos/{id}','Pages\OnlineGalleryController@playVideo')->name('PlayVideo');

Route::get('/onlinegallery/audios','Pages\OnlineGalleryController@audioGallery')->name('AudioGallery');
Route::get('/onlinegallery/audios/{id}','Pages\OnlineGalleryController@playAudio')->name('PlayAudio');

//Election Committee
Route::resource('/admin/electioncommittee','Admin\ElectionCommitteeController');
//member active and inactive
Route::get('/admin/electioncommittee/{id}/active','Admin\PresentStateController@active')->name('Active');
Route::get('/admin/electioncommittee/{id}/inactive','Admin\PresentStateController@inactive')->name('Inactive');

/* Quick Links */
//Party Constitution
Route::resource('/partyconstitution','Admin\PartyConstitutionController');

// });