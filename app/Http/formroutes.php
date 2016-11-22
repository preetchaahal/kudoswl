<?php 
	Route::post('add_comment_to_blog_post', 'FormController@addCommentToBlogPost');

	//Anchor tag get request
	Route::get('delete_post_comment', 'FormController@deleteCommentFromBlogPost');
	Route::get('delete_news_post_comment', 'FormController@deleteCommentFromNewsPost');
	Route::get('search_news', 'HomeController@index');

	/*	
	/------------------------------------------------------/
	    ----------------Admin login route--------------
	/------------------------------------------------------/
	*/
	Route::get('admin/login', 'Admin\UserController@getLogin');

	Route::post('admin/login', 'Admin\UserController@postSignin');
	Route::get('admin/logout', 'Admin\UserController@logout');
?>