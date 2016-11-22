<?php
/*
	
	Ajax routes

*/

	//User login
	Route::post('userLogin', 'UserController@postSignin');
	//Route::post('userRegister', 'UserController@postCreate');
	Route::post('userRegister', 'UserController@postRegister');

//Blog 
	//like request
	Route::post('likePost', 'AjaxController@likePost');
	Route::post('unlikePost', 'AjaxController@unlikePost');

//News

	//like post
	Route::post('likeNewsPost', 'AjaxController@likeNewsPost');
	Route::post('unlikeNewsPost', 'AjaxController@unlikeNewsPost');

	//comment news post
	Route::post('addCommentToNewsPost', 'AjaxController@addCommentToNewsPost');
?>