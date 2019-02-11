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
    return view('shared.home');
});

// Screen name = username | count = jumlah tweet
Route::resource('byuser','CrawlUserController');

// q = query | count = jumlah tweet
Route::resource('bykeyword','CrawlKeywordController');

Route::get('/hometimeline', 'SearchTweetController@homeTimeline')->name('hometimeline');

Route::get('/crawluser', function () {
    return view('shared.crawlUser');
})->name('crawluser');

Route::get('/crawlkeyword', function () {
    return view('shared.crawlKeyword');
})->name('crawlkeyword');

Route::get('/howto', function () {
    return view('layouts.howto');
})->name('howto');