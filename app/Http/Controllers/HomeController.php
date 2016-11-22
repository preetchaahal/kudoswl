<?php  
namespace App\Http\Controllers;

use App\Blog;
use App\News;
use App\Lotto;
use Illuminate\Http\Request;
use Mail;
use Validator, Input, Redirect ; 

class HomeController extends Controller {

	public function __construct()
	{
		parent::__construct();

		\App::setLocale(CNF_LANG);
		if (defined('CNF_MULTILANG') && CNF_MULTILANG == '1') {

			$lang = (\Session::get('lang') != "" ? \Session::get('lang') : CNF_LANG);
			\App::setLocale($lang);
		} 

		switch ( \App::getLocale() ) {
			
			case 'en':
				$this->data['lang_id'] = '1';
				break;

			case 'por':
				$this->data['lang_id'] = '2';
				break;
			
			case 'spa':
				$this->data['lang_id'] = '3';
				break;

			default:
				$this->data['lang_id'] = '1';
				break;
		}

		//is user logged in
		if( \Session::get('uid') != '' ){
			$this->data['loggedin'] = 1;
			$this->data['loggedInUserId'] = \Session::get('uid');
		}
		else
			$this->data['loggedin'] = null;

	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index( Request $request ){
		
		if(CNF_FRONT =='false' && $request->segment(1) =='' ) :
			return Redirect::to('dashboard');
		endif; 		
		
		$page = $request->segment(1); 

		//fetching testimonials data for footer
		$testimonials = \DB::table('tbl_testimonial')->leftjoin('tbl_user', 'tbl_testimonial.tst_user_id', '=', 'tbl_user.id')->where('tst_status', '=', '1')->orderBy('tst_date', 'desc')->limit(10)->get();
		$this->data['testimonials'] = $testimonials;

		//fetching videos data for videos page
		if( $page == 'videos' ){
			$videos = \DB::table('channel_videos')->where('status', '!=', '0')->limit(1000)->get();
			
			$total_videos = count($videos);
			$num_rec_per_page = 3;//number of videos to be displayed per page
			$total_pages = ceil($total_videos / $num_rec_per_page);

			if(!isset($_GET['page']) || !( is_numeric($_GET['page']) ) )
				$pageCount = 1;
			else{

				if($_GET['page'] <= $total_pages )
					$pageCount = $_GET['page'];
				else
					$pageCount = 1;
			}

			$start_from = ($pageCount - 1) * $num_rec_per_page;
			$videosArr = \DB::table('channel_videos')->where('status', '=', '1')->limit($num_rec_per_page)->offset($start_from-1)->get();
			
			//send data to videos pae
			$this->data['videos'] = $videosArr;
			$this->data['pageCount'] = $pageCount;
			$this->data['total_pages'] = $total_pages;
			$this->data['num_rec_per_page'] = $num_rec_per_page;
			$this->data['total_videos'] = $total_videos;
		}

		//for blog page
		if( $page == 'blog' || $page == 'blog_post' ){

			$condition = "";
			$subTitle = '';
			if( isset($_REQUEST['cat']) ){
				$condition = "AND blog_posts.post_cat = ". strip_tags($_REQUEST['cat']) ."";
				$subTitle = Blog::fetchBlogCat( $_REQUEST['cat'], \Session::get('uid') );
			}
			if( isset($_REQUEST['subcat']) ){
				$condition = "AND blog_posts.post_sub_cat = '". strip_tags($_REQUEST['subcat']) ."'";
				$subTitle = Blog::fetchBlogSubCat( $_REQUEST['subcat'], \Session::get('uid') );
			}
			if( isset($_REQUEST['blog_search']) ){
				$condition = "AND blog_posts.post_title LIKE '%".$_REQUEST['blog_search']."%' || blog_posts.post_content LIKE '%". $_REQUEST['blog_search'] ."%'";
				$subTitle = strip_tags($_REQUEST['blog_search']);
			}
			if( isset($_REQUEST['searchTag']) ){
				$condition = "AND blog_posts.post_tags LIKE '%".$_REQUEST['searchTag']."%'";
				$subTitle = strip_tags($_REQUEST['searchTag']);
			}

			$totalPosts = Blog::fetchPostsCount( $condition );
			
			$postsPerPage = 5;//number of posts to be displayed per page
			$totalPages = ceil($totalPosts / $postsPerPage);

			if( !isset($_GET['page']) || !( is_numeric($_GET['page']) ) )
				$pageCount = 1;
			else{
				if($_GET['page'] <= $totalPosts )
					$pageCount = $_GET['page'];
				else
					$pageCount = 1;
			}
			$startFrom = ($pageCount-1) * $postsPerPage;
			$blogPosts = Blog::fetchBlogPosts($postsPerPage, $startFrom, $condition);

			//fetching blog categories and subcategories
			$blogCategories = Blog::fetchBlogCategoriesAndSubCategories();
			
			//fetching all tags
			$blogTags = Blog::fetchPostTags();

			$this->data['subTitle'] = $subTitle;
			$this->data['blog'] = $blogPosts;
			$this->data['pageCount'] = $pageCount;
			$this->data['total_pages'] = $totalPages;
			$this->data['total_records'] = $totalPosts;
			$this->data['num_rec_per_page'] = $postsPerPage;
			$this->data['blog_categories'] = $blogCategories;
			$this->data['blog_tags'] = $blogTags;

			//incase of blog_post requested
			if( $page == 'blog_post' ){
				///$postId = $_REQUEST['id'];
				//$id = $request->segment(2);
				//fetching post data by id
				
			}
			

			//$this->data['loggedInUserId'] = is_null( \Session::get('uid') ) ? '': \Session::get('uid');			
			

			$this->data['likes_count'] = 0;
			$this->data['comments_count'] = 0;
			//$postId = null;

			if( isset($_REQUEST['id']) ){
				$postId = $_REQUEST['id'];
				
				$blogPost = Blog::fetchPostById($postId);
				$this->data['post'] = $blogPost;
			
				$this->data['likes_count'] = Blog::fetchLikesCount($blogPost[0]->ID);
				$this->data['comments_count'] = Blog::fetchCommentsCount($blogPost[0]->ID);


				$this->data['postComments'] = Blog::fetchAllComments($postId);
				$this->data['isPostLikedByLoggedInUser'] = Blog::checkIsPostLikeByLoggedInUser( $postId, \Session::get('uid') );
				$this->data['postId'] = $postId;
				
		        //testing
		        // foreach($this->data['postComments'] as $key=>$value)
		        // {
		        //     print_r($value);
		        //     echo "<br><hr>";
		        // }
		        //exit;
				//print_r($this->data['postComments']); exit;
			}

		}

		//for news page
		if( $page == 'news' || $page == 'news_details' || $page == 'news_search' ){

			$displayTitle = '';
			$condition = '';
			//for news search page
			if( $page == 'news_search' ){

				if( isset($_REQUEST['cat']) ){
					$condition = "AND news.nw_newscat_id = ". strip_tags($_REQUEST['cat']) ."";
					$subTitle = "Showing news by category: ". News::fetchNewsCat( $_REQUEST['cat'], \Session::get('uid') );
				}
				if( isset($_REQUEST['subcat']) ){
					$condition = "AND news.nw_news_subcat_id = '". strip_tags($_REQUEST['subcat']) ."'";
					$subTitle = "Showing news by category: ".News::fetchNewsSubCat( $_REQUEST['subcat'], \Session::get('uid') );
				}
				if( isset($_REQUEST['search-string']) ){
					$condition = "AND news.nw_tital LIKE '%".$_REQUEST['search-string']."%' || news.nw_description LIKE '%". $_REQUEST['search-string'] ."%'";
					$subTitle = "Search results for: ".strip_tags($_REQUEST['search-string']);
				}

				$totalPosts = News::fetchPostsCount( $condition );
			
				$postsPerPage = 5;//number of posts to be displayed per page
				$totalPages = ceil($totalPosts / $postsPerPage);

				if( !isset($_GET['page']) || !( is_numeric($_GET['page']) ) )
					$pageCount = 1;
				else{
					if($_GET['page'] <= $totalPosts )
						$pageCount = $_GET['page'];
					else
						$pageCount = 1;
				}
				$startFrom = ($pageCount-1) * $postsPerPage;
				$newsPosts = News::fetchNewsPosts($postsPerPage, $startFrom, $condition);

				$this->data['displayTitle'] = $subTitle;
				$this->data['newsPosts'] = $newsPosts;
				$this->data['startFrom'] = $startFrom;
				$this->data['pageCount'] = $pageCount;
				$this->data['postsPerPage'] = $postsPerPage;
				$this->data['totalPages'] = $totalPages;
				$this->data['totalPosts'] = $totalPosts;
			}

			// data for news_details page
			if( $page == 'news_details' ){
				
				$newsDetails = News::fetchNewsById($request->input('id'));
				$this->data['newsDetails'] 		= 	$newsDetails;	
				$this->data['commentsCount'] 	= 	News::fetchCommentsCount($request->input('id'));
				$this->data['likesCount'] 		= 	News::fetchLikesCount($request->input('id'));
				$this->data['isPostLikedByLoggedInUser'] = News::checkIsPostLikeByLoggedInUser( $request->input('id'), \Session::get('uid') );
				$this->data['postComments'] 	=	News::fetchAllComments($newsDetails[0]->nw_id);
				$this->data['postId'] = $request->input('id');
			}
			else{
				$this->data['newsDataForSlider']	=	News::fetchNewsDataForSlider();
			}
			
			//data for both news home page and news_details page
			$this->data['newsCategories']	=	News::fetchNewsCategoriesAndSubCategories();
			$this->data['newsReporters']	=	News::fetchAllNewsReporters();
			$this->data['latestNews'] 		=	News::fetchLatestNews();
			//print_r($this->data['newsReporters']);exit;
		}//end of if condition for news page

		if($page !='') :
			$content = \DB::table('tb_pages')->where('alias','=',$page)->where('status','=','enable')->get();

			if(count($content) >=1)
			{

				$row = $content[0];
				$this->data['pageTitle'] = $row->title;
				$this->data['pageNote'] = $row->note;
				$this->data['pageMetakey'] = ($row->metakey !='' ? $row->metakey : CNF_METAKEY) ;
				$this->data['pageMetadesc'] = ($row->metadesc !='' ? $row->metadesc : CNF_METADESC) ;

				$this->data['breadcrumb'] = 'active';

				if($row->access !='')
				{
					$access = json_decode($row->access,true)	;	
				} else {
					$access = array();
				}	

				// If guest not allowed 
				if($row->allow_guest !=1)
				{	
					$group_id = \Session::get('gid');				
					$isValid =  (isset($access[$group_id]) && $access[$group_id] == 1 ? 1 : 0 );	
					if($isValid ==0)
					{
						return Redirect::to('')
							->with('message', \SiteHelpers::alert('error',Lang::get('core.note_restric')));				
					}
				}				
				if($row->template =='backend')
				{
					 $page = 'pages.'.$row->filename;
				} else {
					$page = 'layouts.'.CNF_THEME.'.index';
				}
				//print_r($this->data);exit;
				
				$filename = base_path() ."/resources/views/pages/".$row->filename.".blade.php";
				if(file_exists($filename))
				{
					$this->data['pages'] = 'pages.'.$row->filename;
					$this->data['filename'] = $row->filename;
				
					return view($page,$this->data);
				} else {
					return Redirect::to('')
						->with('message', \SiteHelpers::alert('error',\Lang::get('core.note_noexists')));					
				}
				
			} else {
				return Redirect::to('')
					->with('message', \SiteHelpers::alert('error',\Lang::get('core.note_noexists')));	
			}
			
			
		else :

			$sql = \DB::table('tb_pages')->where('default',1)->get();
			if(count($sql)>=1)
			{
				$row = $sql[0];

				$this->data['pageTitle'] 	= $row->title;
				$this->data['pageNote'] 	=  $row->note;
				$this->data['breadcrumb'] 	= 'inactive';	
				$this->data['pageMetakey'] 	=   $row->metakey ;
				$this->data['pageMetadesc'] =  $row->metadesc ;
				$this->data['filename'] 	=  $row->filename;				

				//for the main slider
				$main_slider = \DB::table('tbl_gallery')->where('g_status', '=', '1')->orderBy('g_order','asc')->limit(5)->get();
				$this->data['main_slider'] = $main_slider;

				//for news widget
				$latest_news = \DB::table('news')->where('nw_newscat_id', '!=', '')->orderBy('nw_id','desc')->limit(10)->get();
				$this->data['latest_news'] = $latest_news;

				//for custom content block
				$main_page_content = \DB::table('tbl_main_page_content')->where('is_active', '=', '1')->limit(1)->get();
				$this->data['main_page_content'] = $main_page_content;

				$this->data['pages'] = 'pages.'.$row->filename;	
				$page = 'layouts.'.CNF_THEME.'.index';
				return view($page,$this->data);				

			} else {

				return ' No Default page set up !';
			}

		endif;	

		
	}

	//for lotto pages
	public function lotto( Request $request ){

		$page = $request->segment(1); 

		//checking if name of lotto ispassed along the url
		$lottoNameRqstd = null !== ( $request->segment(2) ) ? $request->segment(2) : '';
		$available_lottos = array("mega-sena", "power-ball", "euro-millions");
		
		if( !in_array($lottoNameRqstd, $available_lottos) )
			return Redirect::back()->with('message', \SiteHelpers::alert('error','Invalid request , Invalid request to view the page !'));
		
		 

		$filename = base_path(). "/resources/views/lotto/". $lottoNameRqstd .".blade.php";
		
		if(!file_exists($filename) ){
			return Redirect::back();
		}
		
		//fetch lotto winners
		$megaWinners = Lotto::fetchMegaSenaLottoWinners();
		$euroWinners = Lotto::fetchEuroMillionsLottoWinners();
		$powerWinners = Lotto::fetchPowerBallLottoWinners();

		$activeLottoUsers = Lotto::fetchAllActiveLottoUsers();

		//sending meta data for all lotto pages
		$this->data['mega_winners'] 	= 	$megaWinners;
		$this->data['euro_winners'] 	= 	$euroWinners;
		$this->data['power_winners'] 	= 	$powerWinners;

		$this->data['mega_stats']		=	Lotto::fetchMegaSenaStats();
		$this->data['power_stats']		=	Lotto::fetchPowerBallStats();

		$this->data['total_lotto_users']		=	Lotto::fetchAllActiveLottoUsers();

		$this->data['pages'] = 'lotto.'.$lottoNameRqstd;
		$this->data['filename'] = $lottoNameRqstd;

		$page = "layouts.".CNF_THEME.".index";
		//$page = $page."/".$lottoNameRqstd;
		
		return view($page,$this->data);

	}


	//checking if page exists in db
	public function checkPageExists( $page ){
		$content = \DB::table('tb_pages')->where('alias','=',$page)->where('status','=','enable')->get();

		if(count($content) >=1){
			}
	}

	public function  getLang($lang='en')
	{
		\Session::put('lang', $lang);
		return  Redirect::back();
	}

	public function  getSkin($skin='sximo')
	{
		\Session::put('themes', $skin);
		return  Redirect::back();
	}		

	public  function  postContact( Request $request)
	{
	
		$this->beforeFilter('csrf', array('on'=>'post'));
		$rules = array(
				'name'		=>'required',
				'subject'	=>'required',
				'message'	=>'required|min:20',
				'sender'	=>'required|email'			
		);
		$validator = Validator::make(Input::all(), $rules);	
		if ($validator->passes()) 
		{
			
			$data = array('name'=>$request->input('name'),'sender'=>$request->input('sender'),'subject'=>$request->input('subject'),'notes'=>$request->input('message')); 
			$message = view('emails.contact', $data); 		
			$data['to'] = CNF_EMAIL;			
			if(defined('CNF_MAIL') && CNF_MAIL =='swift')
			{ 
				Mail::send('user.emails.contact', $data, function ($message) use ($data) {
		    		$message->to($data['to'])->subject($data['subject']);
		    	});	

			}  else {

				$headers  	= 'MIME-Version: 1.0' . "\r\n";
				$headers 	.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers 	.= 'From: '.$request->input('name').' <'.$request->input('sender').'>' . "\r\n";
					//mail($data['to'],$data['subject'], $message, $headers);		
			}


	

			return Redirect::to($request->input('redirect'))->with('message', \SiteHelpers::alert('success','Thank You , Your message has been sent !'));	
				
		} else {
			return Redirect::to($request->input('redirect'))->with('message', \SiteHelpers::alert('error','The following errors occurred'))
			->withErrors($validator)->withInput();
		}		
	}

}
