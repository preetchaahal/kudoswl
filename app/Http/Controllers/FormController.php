<?php  
namespace App\Http\Controllers;

use App\Blog;
use App\News;
use Illuminate\Http\Request;
use Validator, Input, Redirect ;

class FormController extends Controller {

	public function addCommentToBlogPost( Request $request ){
		
		$flag = Blog::addCommentToPost( $request->input('commentPostId'), $request->input('commentedBy'), $request->input('commentContent'), $request->input('commentCommentId') );

		if( $request->ajax() == true ){

			if( $flag == 1 )
            	return 1;
        	else 
            	return 0;
			
		}
		else
		{

			if( $flag == 1 )
            	return Redirect::back()
                            ->with('message', ' Comment Added ');
        	else 
            	return Redirect::back()
                            ->with('message', ' Something went wrong adding comment! ');

		}

	}

	public function deleteCommentFromBlogPost( Request $request ){

		$flag = Blog::deleteCommentFromPost( $request->input('commentId') );

		if( $flag == 1 )
            	return Redirect::back()
                            ->with('message', ' Comment Removed ');
        	else 
            	return Redirect::back()
                            ->with('message', ' Something went wrong removing comment! ');

	}

	public function deleteCommentFromNewsPost( Request $request ){

		$flag = News::deleteCommentFromPost( $request->input('id') );

		if( $flag == 1 )
            	return Redirect::back()
                            ->with('message', ' Comment Removed ');
        	else 
            	return Redirect::back()
                            ->with('message', ' Something went wrong removing comment! ');

	}


}