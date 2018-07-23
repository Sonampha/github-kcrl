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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@About');

Route::get('/search-flight', 'PagesController@SearchFlight');

Route::get('/kc-route/cambodia', 'CambodiaRouteController@index');
Route::get('/kc-route/thailand', 'ThailandRouteController@index');
Route::get('/kc-route/vietnam', 'VietnamRouteController@index');
Route::get('/kc-route/lao', 'LaoRouteController@index');
Route::get('/kc-route/myanmar', 'MyanmarRouteController@index');
Route::get('/kc-route/malaysia', 'MalaysiaRouteController@index');
Route::get('/kc-route/singapore', 'SingaporeRouteController@index');
Route::get('/kc-route/indonesia', 'IndonesiaRouteController@index');
Route::get('/kc-route/philippines', 'PhilippinesRouteController@index');
Route::get('/kc-route/hongkong', 'HongkongRouteController@index');
Route::get('/kc-route/taipei', 'TaipeiRouteController@index');

Route::get('/about-us', 'PagesController@AboutUs');
Route::get('/about-us/information-for-investors', 'PagesController@InfoForInvestors');

Route::get('/careers', 'PagesController@Careers');
Route::get('/careers/why-join-us', 'PagesController@WhyJoinUs');

Route::get('/travel-info', 'PagesController@TravelInfo');
Route::get('/travel-info/baggage/checked-baggage', 'PagesController@CheckedBaggage');
Route::get('/travel-info/baggage/carry-on-baggage', 'PagesController@CarryOneBaggage');
Route::get('/travel-info/baggage/restricted-items', 'PagesController@RestrictedItems');

Route::get('/plan-travel/excess-baggage', 'PagesController@ExcessBaggage');

Route::get('/travel-info/charges-and-changes/cancellation-and-refund', 'PagesController@CancelAndRefund');
Route::get('/travel-info/charges-and-changes/taxes-and-services-fee', 'PagesController@TaxesAndServicesFee');

Route::get('/faqs', 'PagesController@faqs');
Route::get('/terms-conditions', 'PagesController@TermsConditions');
Route::get('/terms-conditions/particular-expressions', 'PagesController@Expressions');
Route::get('/terms-conditions/applicability', 'PagesController@Applicability');
Route::get('/terms-conditions/tickets', 'PagesController@Tickets');


Route::get('/index2', function () {
    return view('pages/index2');
});

Route::get('/index3', function () {
    return view('pages/index3');
});

Route::get('/index4', function () {
    return view('pages/index4');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::post('/contact',[
    'uses' => 'ContactController@sendEmail',
    'as' => 'message.send'
]);

Route::get('/contact',[
    'uses' => 'ContactController@index'
]);

Route::get('/contact2', function () {
    return view('pages/contact2');
});

Route::get('/about-profile', function () {
    return view('pages/about-profile');
});

Route::get('/about-history', function () {
    return view('pages/about-history');
});

Route::get('/about-report', function () {
    return view('pages/about-report');
});

Route::get('/about-team', function () {
    return view('pages/about-team');
});

Route::get('/about-support', function () {
    return view('pages/about-support');
});

Route::get('/error-404', function () {
    return view('pages/error-404');
});

Route::get('/coming-soon', function () {
    return view('pages/coming-soon');
});

Route::get('/blog', function () {
    return view('pages/blog');
});

Route::get('/blog2', function () {
    return view('pages/blog2');
});

Route::get('/single-blog', function () {
    return view('pages/single-blog');
});

Route::get('/single-blog', function () {
    return view('pages/single-blog');
});

Route::get('/service', function () {
    return view('pages/service');
});

Route::get('/service2', function () {
    return view('pages/service2');
});

Route::get('/service3', function () {
    return view('pages/service3');
});

Route::get('/service-detail', function () {
    return view('pages/service-detail');
});

Route::get('/all-contents', function () {
    return view('pages/all-contents');
});

Route::get('/sampletab', function () {
    return view('pages/sampletab');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
