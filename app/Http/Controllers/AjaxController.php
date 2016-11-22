<?php  
namespace App\Http\Controllers;

use App\Blog;
use App\News;
use Illuminate\Http\Request;
use Validator, Input, Redirect;

class AjaxController extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function likePost( Request $request ){
		
		/* for debugging */
		//uncomment the below line for debugging
			//echo "gr888";
			//print_r($request);
			//exit;
		/* debugging code ends here */

		//fethcing params from request
		$postId 		= 	$request->input('postId');//$_REQUEST['postId'];
		$likeById 		= 	$request->input('userId');//$_REQUEST['userId'];
		
		$flag = Blog::likePost( $postId, $likeById );
		
		return $flag;
	}

	public function unlikePost(){
		
		/* for debugging */
		//uncomment the below line for debugging
			//echo "gr888";
			//print_r($_REQUEST);
			//exit;
		/* debugging code ends here */

		//fethcing params from request
		$postId 		= 	$_REQUEST['postId'];
		$likeById 		= 	$_REQUEST['userId'];
		
		$flag = Blog::unlikePost( $postId, $likeById );
		return $flag;
	}

	public function addCommentToNewsPost( Request $request ){

		$flag = News::addCommentToNewsPost( $request->input('postId'), $request->input('commentById'), $request->input('comment'), $request->input('commentCommentId') );

		//return $flag;
		
		if( $flag )
			echo 1;
		else
			echo 0;

		if( $flag == 1 )
            return Redirect::back()
                           ->with('message', ' Comment Added ');
        else 
            return Redirect::back()
                           ->with('message', ' Something went wrong adding comment! ');

	}

	public function addCommentToBlogPost( Request $request ){

		$flag = Blog::addCommentToPost( $request->input('commentPostId'), $request->input('commentedBy'), $request->input('commentContent'), $request->input('commentCommentId') );

		if( $flag )
			echo 1;
		else
			echo 0;
		if( $flag == 1 )
            return Redirect::back()
                           ->with('message', ' Comment Added ');
        else 
            return Redirect::back()
                           ->with('message', ' Something went wrong adding comment! ');

	}

	//News likes and comments mgmt
	public function likeNewsPost(){
		
		/* for debugging */
		// uncomment the below line for debugging
			//return "Wow";exit;
		/* debugging code ends here */

		//fethcing params from request
		$postId 		= 	$_REQUEST['postId'];
		$likeById 		= 	$_REQUEST['commentUserId'];
		
		$flag = News::likePost( $postId, $likeById );
		
		return $flag;
	}

	public function unlikeNewsPost(){
		
		/* for debugging */
		//uncomment the below line for debugging
			//echo "gr888";
			//print_r($_REQUEST);
			//exit;
		/* debugging code ends here */

		//fetching params from request
		$postId 		= 	$_REQUEST['postId'];
		$likeById 		= 	$_REQUEST['commentUserId'];
		
		$flag = News::unlikePost( $postId, $likeById );
		
		return $flag;
	}


}