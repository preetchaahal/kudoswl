<?php 
Route::get('service', 'HomeController@index');
Route::get('about', 'HomeController@index');
Route::get('contact-us', 'HomeController@index');
Route::get('privacy', 'HomeController@index');
Route::get('toc', 'HomeController@index');
Route::get('backend', 'HomeController@index');
Route::get('videos', 'HomeController@index');
Route::get('blog', 'HomeController@index');
Route::get('blog_post', 'HomeController@index');
Route::get('news', 'HomeController@index');
Route::get('news_details', 'HomeController@index');
Route::get('news_search', 'HomeController@index');
Route::get('lotto/{name?}', 'HomeController@lotto');
Route::get('ads', 'HomeController@index');

//admin routes
Route::get('admin/index', 'AdminController@index');
?>