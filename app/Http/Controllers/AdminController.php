<?php  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\DashboardMeta;
use Mail;
use Validator, Input, Redirect ; 

class AdminController extends Controller {

	public function __construct(){

		parent::__construct();

		\App::setLocale(CNF_LANG);
		if (defined('CNF_MULTILANG') && CNF_MULTILANG == '1') {
			$lang = (\Session::get('lang') != "" ? \Session::get('lang') : CNF_LANG);
			\App::setLocale($lang);
		} 

 		switch ( \App::getLocale() ) {
			
			case 'en':
				$this->data['a_lang_id'] = '1';
				break;

			case 'por':
				$this->data['a_lang_id'] = '2';
				break;
			
			case 'spa':
				$this->data['a_lang_id'] = '3';
				break;

			default:
				$this->data['a_lang_id'] = '1';
				break;
		}

		//is user logged in
		if( \Session::get('a_uid') != '' ){
			$this->data['a_loggedin'] = 1;
			$this->data['a_userId'] = \Session::get('uid');
		}
		else
			$this->data['a_loggedin'] = null;
		
	}

	public function index( Request $request ){
		
		// $pages = "admin.".$page;
		
		// $filename = base_path() ."/resources/views/admin/".$page.".blade.php";
		// if(file_exists($filename))
		// {
		// 	$this->data['pages'] = 'admin.'.$page;
		// 	$this->data['filename'] = $page;
		// 	$pages = "admin.layouts.".$page;
		// 	return view($pages,$this->data);
		// }
		// $this->data['pages'] = 'admin.pages.'.$request->segment(2);
		// return view('admin.layouts.index',$this->data);
		// print_r($this->data);exit;
		//check if user is logged in
		if( $this->data['a_loggedin'] !== null ){
			
			//setting the default layout for all the pages
			$page = 'dashboard';
			if( $request->segment(2) !== null )
				$page = $request->segment(2);

			//adding meta info for dashboard page
			if( $page == 'dashboard' || $page == 'index' ):

				$this->data['todayuser'] = DashboardMeta::fetchTodayRegisteredUsers();

			endif;

			// search for the page show requested admin page	
			$content = \DB::table('tb_pages')->where('alias','=',$page)->where('status','=','enable')->get();


			if(count($content) >=1){
				//if page exists

				$row = $content[0];
				$this->data['pageTitle'] = $row->title;
				$this->data['pageNote'] = $row->note;
				$this->data['pageMetakey'] = ($row->metakey !='' ? $row->metakey : CNF_METAKEY) ;
				$this->data['pageMetadesc'] = ($row->metadesc !='' ? $row->metadesc : CNF_METADESC) ;

				$this->data['breadcrumb'] = 'active';

				if($row->access !='')
				{
					$access = json_decode($row->access,true);	
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
				if($row->template =='backend'){
					$page = 'admin.layouts.index';
				} else {
					$page = 'layouts.'.CNF_THEME.'.index';
				}

				$filename = base_path() ."/resources/views/admin/pages".$page.".blade.php";
				if(file_exists($filename)){
					$this->data['pages'] = 'admin.pages.'.$row->filename;
					$this->data['filename'] = $row->filename;
					
					return view($page,$this->data);
				} else {
					return Redirect::to('')
						->with('message', \SiteHelpers::alert('error',\Lang::get('core.note_noexists')));					
				}

			}else{

				//redirect to dashboard index page

				$sql = \DB::table('tb_pages')->where('default',1)->where('template', 'backend')->get();
				if(count($sql)>=1){

					$row = $sql[0];

					$this->data['pageTitle'] 	= $row->title;
					$this->data['pageNote'] 	=  $row->note;
					$this->data['breadcrumb'] 	= 'inactive';	
					$this->data['pageMetakey'] 	=   $row->metakey ;
					$this->data['pageMetadesc'] =  $row->metadesc ;
					$this->data['filename'] 	=  $row->filename;				

					$this->data['pages'] = 'admin.pages.'.$row->filename;	
					$page = 'admin.layouts.index';
					return view($page,$this->data);				

				} else {

					return ' No Default page set up !';
				}

			}	
				 
		}else{
			//admin not logged in
			//redirect to admin login page
			return view('admin.login', $this->data);
		}

	}

	/*
		Logging in Admin
	*/
		
}