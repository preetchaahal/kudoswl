<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Socialize;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect ; 

class UserController extends Controller {

	
	protected $layout = "layouts.main";

	public function __construct() {
		parent::__construct();

	} 

	public function getRegister() {
        
		if(CNF_REGIST =='false') :    
			if(\Auth::check()):
				 return Redirect::to('')->with('message',\SiteHelpers::alert('success','Youre already login'));
			else:
				 return Redirect::to('admin/login');
			  endif;
			  
		else :
				
				return view('user.register');  
		 endif ; 
           
	

	}

	// public function testAjaxLogin( Request $request) {
	// 	return json_encode("GR8");
	// }

	public function postRegister( Request $request) {
		
		//custom error messages
		$messages = [
			'captcha'	=>	'Invalid captcha code'
		];

		$rules = array(
			'firstname'=>'required|alpha_num|min:2',
			'lastname'=>'required|alpha_num|min:2',
			'email'=>'required|email|unique:tb_users',
			'username'=>'required|alpha_num|min:2',
			'country'=>'required',
			'password'=>'required|between:6,12|confirmed',
			'password_confirmation'=>'required|between:6,12'
			);	
		if(CNF_RECAPTCHA =='true') $rules['captcha'] = 'required|captcha';
				
		$validator = Validator::make($request->all(), $rules, $messages);

		//checking if username already taken
		if( User::isUsernameAvailable( trim( $request->input('username') ) ) == false  ){

			if($request->ajax() == true ){
				$error = [
						'message'	=>	'Username already taken!'
					];
				return response()->json(['status' => 'error', 'message' => $error]);
			} else {
				return Redirect::to('admin/login')->with( 'message',\SiteHelpers::alert('error','Username already taken!') )->withErrors($validator)->withInput();	
			}
		
		}
		
		if ($validator->passes()) {
			$code = rand(10000,10000000);
			
			$authen = new User;
			$authen->first_name = $request->input('firstname');
			$authen->last_name = $request->input('lastname');
			$authen->email = trim($request->input('email'));
			$authen->activation = $code;
			//$authen->group_id = 3;
			$authen->password = \Hash::make($request->input('password'));
			$authen->country = $request->input('country');
			$authen->username = trim( $request->input('username') );
			$authen->last_login_ip = $_SERVER['REMOTE_ADDR'];

			if(CNF_ACTIVATION == 'auto') { $authen->active = '1'; } else { $authen->active = '0'; }
			$authen->save();
			
			//updating user log table 
			$userData = User::select('*')->where('username', '=', $request->input('username'))->get();
			$userData = $userData[0];
			$userId = $userData->id;
			$loginGeo = User::getLoginGeo();
			$browser = User::getBrowser();
			$os = User::getOs();

			$sql = \DB::table('tbl_login_logs')->insert(
			 			['lg_id' =>	null, 'lg_user_id' => $userId, 'lg_ip_address' => $_SERVER['REMOTE_ADDR'], 'lg_browser' => $browser, 'lg_os' => $os, 'lg_country' => $loginGeo['country'], 'lg_region_name' => $loginGeo['regionName'], 'lg_city' => $loginGeo['city'], 'lg_login_time' => time()  ]
			 		);


			$data = array(
				'firstname'	=> $request->input('firstname') ,
				'lastname'	=> $request->input('lastname') ,
				'email'		=> $request->input('email') ,
				'password'	=> $request->input('password') ,
				'username'	=> $request->input('username') ,
				'country'	=> $request->input('country') ,
				'code'		=> $code
			);
			if(CNF_ACTIVATION == 'confirmation')
			{ 

				$to = $request->input('email');
				$subject = "[ " .CNF_APPNAME." ] REGISTRATION "; 

			
				if(defined('CNF_MAIL') && CNF_MAIL =='swift')
				{ 
					Mail::send('user.emails.registration', $data, function ($message) {
			    		$message->to($to)->subject($subject);
			    	});	

				}  else {
		
					$message = view('user.emails.registration', $data);
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= 'From: '.CNF_APPNAME.' <'.CNF_EMAIL.'>' . "\r\n";
						mail($to, $subject, $message, $headers);	
				}

				$message = "Thanks for registering! . Please check your inbox and follow activation link";
								
			} elseif(CNF_ACTIVATION=='manual') {
				$message = "Thanks for registering! . We will validate you account before your account active";
			} else {
   			 	$message = "Thanks for registering! . Your account is active now ";
				
				//update session data
				\Session::put('a_uid', $userData->id);
				\Session::put('a_eid', $userData->email);
				\Session::put('a_ll', $userData->last_login);
				\Session::put('a_fid', $userData->first_name.' '. $userData->last_name);	
				if(\Session::get('lang') =='')
				{
					\Session::put('lang', CNF_LANG);	
				}
			}	

			if($request->ajax() == true ){
				return response()->json(['status' => 'success', 'url' => url(), 'message' => $message]);
			} else {
				return Redirect::to('admin/login')->with('message',\SiteHelpers::alert('success',$message));
			}

			
		} else {
			if($request->ajax() == true )
			{
				$errors = $validator->errors();
				$errors = json_decode($errors);
				return response()->json(['status' => 'error', 'message' => $errors]);
			} else {
				return Redirect::to('admin/login')->with('message',\SiteHelpers::alert('error','The following errors occurred') )->withErrors($validator)->withInput();	
			}
			
		}
	}
	
	public function getActivation( Request $request  ){
		$num = $request->input('code');
		if($num =='')
			return Redirect::to('admin/login')->with('message',\SiteHelpers::alert('error','Invalid Code Activation!'));
		
		$user =  User::where('activation','=',$num)->get();
		if (count($user) >=1)
		{
			\DB::table('tb_users')->where('activation', $num )->update(array('active' => 1,'activation'=>''));
			return Redirect::to('admin/login')->with('message',\SiteHelpers::alert('success','Your account is active now!'));
			
		} else {
			return Redirect::to('admin/login')->with('message',\SiteHelpers::alert('error','Invalid Code Activation!'));
		}
		
		
	
	}

	public function getLogin() {
	
		if(\Auth::check())
		{
			return Redirect::to('admin/login')->with('message',\SiteHelpers::alert('success','Youre already login'));

		} else {
			$this->data['socialize'] =  config('services');
			//send list of countries
			
			$countries = \DB::table('tbl_country')->select('code', 'country_name')->orderby('country_name', 'ASC')->get();
			$this->data['countries'] = $countries;

			return View('admin.login',$this->data);
			
		}	
	}

	public function postSignin( Request $request) {

		//custom error messages
		$messages = [
			'captcha'	=>	'Invalid captcha code'
		];
		
		//rules consist o f the input fileds with corresponding name 
		//attributes to be matched with the db columns
		$rules = array(
			'username'		=>	'required',
			'password'		=>	'required'
		);		

		if(CNF_RECAPTCHA =='true') $rules['captcha'] = 'required|captcha';
		
		$validator = Validator::make(Input::all(), $rules, $messages);
		
		if ($validator->passes()) {	

			$remember = (!is_null($request->get('remember')) ? 'true' : 'false' );
			
			//checking for admin login by group_id = 1|2
			if (\Auth::attempt(array('username'=>$request->input('username'), 'password'=> $request->input('password'), 'group_id'=> '1|2' ), $remember )) {

				if(\Auth::check()){

					$row = User::find(\Auth::user()->id); 
								
					//updating user log table 
					$userId = User::select('id')->where('username', '=', $request->input('username'))->get();
					$userId = $userId[0]->id;
					
					$loginGeo = User::getLoginGeo();
					$browser = User::getBrowser();
					$os = User::getOs();

					// // return json_encode($loginGeo);exit;
					$sql = \DB::table('tbl_login_logs')->insert(
					 			['lg_id' =>	null, 'lg_user_id' => $userId, 'lg_ip_address' => $_SERVER['REMOTE_ADDR'], 'lg_browser' => $browser, 'lg_os' => $os, 'lg_country' => $loginGeo['country'], 'lg_region_name' => $loginGeo['regionName'], 'lg_city' => $loginGeo['city'], 'lg_login_time' => time()  ]
					 		);

					if($row->active =='0')
					{
						// inactive 
						if($request->ajax() == true )
						{
							return response()->json(['status' => 'error', 'message' => 'Your Account is not active']);
						} else {
							\Auth::logout();
							return Redirect::to('admin/login')->with('message', \SiteHelpers::alert('error','Your Account is not active'));
						}
						
					} else if($row->active=='2')
					{

						if($request->ajax() == true )
						{
							return response()->json(['status' => 'error', 'message' => 'Your Account is BLocked']);
						} else {
							// BLocked users
							\Auth::logout();
							return Redirect::to('admin/login')->with('message', \SiteHelpers::alert('error','Your Account is BLocked'));
						}
					} else {

						\DB::table('tb_users')->where('id', '=',$row->id )->update(array('last_login_ip' => $_SERVER['REMOTE_ADDR']));
						\Session::put('a_uid', $row->id);
						\Session::put('a_gid', $row->group_id);
						\Session::put('a_eid', $row->email);
						\Session::put('a_ll', $row->last_login);
						\Session::put('a_fid', $row->first_name.' '. $row->last_name);	
						if(\Session::get('lang') =='')
						{
							\Session::put('lang', CNF_LANG);	
						}

						if($request->ajax() == true )
						{
							if(CNF_FRONT == 'false') :
								return response()->json(['status' => 'success', 'url' => url()]);					
							else :
								return response()->json(['status' => 'success', 'url' => url('admin/index')]);
							endif;	

						} else {
							
							if(CNF_FRONT =='false') :
								return Redirect::to('admin/index');						
							else :
								return Redirect::to('admin/index');
							endif;	

						}

						
											
					}			
					
				}			
				
			} else {

				if($request->ajax() == true )
				{
					$error = [
						'form'	=>	'Invalid username/password combination.'
					];
					return response()->json(['status' => 'error', 'message' => $error]);
				} else {

					return Redirect::to('admin/login')
						->with('message', 'Your username/password combination was incorrect.')
						->withInput();					
				}


			}
		} else {

				if($request->ajax() == true)
				{
					$errors = $validator->errors();
					$errors = json_decode($errors);

					return response()->json(['status' => 'error', 'message' => $errors]);
				} else {

					return Redirect::to('admin/login')
						->with('message', \SiteHelpers::alert('error','The following  errors occurred'))
						->withErrors($validator)->withInput();
				}	
		
		}	
	}

	public function getProfile() {
		
		if(!\Auth::check()) return redirect('admin/login');
		
		
		$info =	User::find(\Auth::user()->id);
		$this->data = array(
			'pageTitle'	=> 'My Profile',
			'pageNote'	=> 'View Detail My Info',
			'info'		=> $info,
		);
		return view('user.profile',$this->data);
	}
	
	public function postSaveprofile( Request $request)
	{
		if(!\Auth::check()) return Redirect::to('admin/login');
		$rules = array(
			'first_name'=>'required|alpha_num|min:2',
			'last_name'=>'required|alpha_num|min:2',
			);	
			
		if($request->input('email') != \Session::get('eid'))
		{
			$rules['email'] = 'required|email|unique:tb_users';
		}	

		if(!is_null(Input::file('avatar'))) $rules['avatar'] = 'mimes:jpg,jpeg,png,gif,bmp';

				
		$validator = Validator::make($request->all(), $rules);

		if ($validator->passes()) {
			
			
			if(!is_null(Input::file('avatar')))
			{
				$file = $request->file('avatar'); 
				$destinationPath = './uploads/users/';
				$filename = $file->getClientOriginalName();
				$extension = $file->getClientOriginalExtension(); //if you need extension of the file
				 $newfilename = \Session::get('a_uid').'.'.$extension;
				$uploadSuccess = $request->file('avatar')->move($destinationPath, $newfilename);				 
				if( $uploadSuccess ) {
				    $data['avatar'] = $newfilename; 
				} 
				
			}		
			
			$user = User::find(\Session::get('a_uid'));
			$user->first_name 	= $request->input('first_name');
			$user->last_name 	= $request->input('last_name');
			$user->email 		= $request->input('email');
			if(isset( $data['avatar']))  $user->avatar  = $newfilename; 			
			$user->save();

			$newUser = User::find(\Session::get('a_uid'));

			\Session::put('fid',$newUser->first_name.' '.$newUser->last_name);

			return Redirect::to('user/profile')->with('messagetext','Profile has been saved!')->with('msgstatus','success');
		} else {
			return Redirect::to('user/profile')->with('messagetext','The following errors occurred')->with('msgstatus','error')
			->withErrors($validator)->withInput();
		}	
	
	}
	
	public function postSavepassword( Request $request)
	{
		$rules = array(
			'password'=>'required|between:6,12',
			'password_confirmation'=>'required|between:6,12'
			);		
		$validator = Validator::make($request->all(), $rules);
		if ($validator->passes()) {
			$user = User::find(\Session::get('a_uid'));
			$user->password = \Hash::make($request->input('password'));
			$user->save();

			return Redirect::to('user/profile')->with('message', \SiteHelpers::alert('success','Password has been saved!'));
		} else {
			return Redirect::to('user/profile')->with('message', \SiteHelpers::alert('error','The following errors occurred')
			)->withErrors($validator)->withInput();
		}	
	
	}	
	
	public function getReminder()
	{
	
		return view('user.remind');
	}	

	public function postRequest( Request $request)
	{

		$rules = array(
			'credit_email'=>'required|email'
		);	
		
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->passes()) {	
	
			$user =  User::where('email','=',$request->input('credit_email'));
			if($user->count() >=1)
			{
				$user = $user->get();
				$user = $user[0];
				$data = array('token'=>$request->input('_token'));	
				$to = $request->input('credit_email');
				$subject = "[ " .CNF_APPNAME." ] REQUEST PASSWORD RESET "; 	

				if(defined('CNF_MAIL') && CNF_MAIL =='swift')
				{ 
					Mail::send('user.emails.auth.reminder', $data, function ($message) {
			    		$message->to($to)->subject($subject);
			    	});	

				}  else {

							
					$message = view('user.emails.auth.reminder', $data);
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= 'From: '.CNF_APPNAME.' <'.CNF_EMAIL.'>' . "\r\n";
						mail($to, $subject, $message, $headers);	
				}					
			
				
				$affectedRows = User::where('email', '=',$user->email)
								->update(array('reminder' => $request->input('_token')));
								
				return Redirect::to('admin/login')->with('message', \SiteHelpers::alert('success','Please check your email'));	
				
			} else {
				return Redirect::to('admin/login?reset')->with('message', \SiteHelpers::alert('error','Cant find email address'));
			}

		}  else {
			return Redirect::to('admin/login?reset')->with('message', \SiteHelpers::alert('error','The following errors occurred')
			)->withErrors($validator)->withInput();
		}	 
	}	
	
	public function getReset( $token = '')
	{
		if(\Auth::check()) return Redirect::to('dashboard');

		$user = User::where('reminder','=',$token);
		if($user->count() >=1)
		{
			$this->data['verCode']= $token;
			return view('user.remind',$this->data);

		} else {
			return Redirect::to('admin/login')->with('message', \SiteHelpers::alert('error','Cant find your reset code'));
		}
		
	}	
	
	public function postDoreset( Request $request , $token = '')
	{
		$rules = array(
			'password'=>'required|alpha_num|between:6,12|confirmed',
			'password_confirmation'=>'required|alpha_num|between:6,12'
			);		
		$validator = Validator::make($request->all(), $rules);
		if ($validator->passes()) {
			
			$user =  User::where('reminder','=',$token);
			if($user->count() >=1)
			{
				$data = $user->get();
				$user = User::find($data[0]->id);
				$user->reminder = '';
				$user->password = \Hash::make($request->input('password'));
				$user->save();			
			}

			return Redirect::to('admin/login')->with('message',\SiteHelpers::alert('success','Password has been saved!'));
		} else {
			return Redirect::to('user/reset/'.$token)->with('message', \SiteHelpers::alert('error','The following errors occurred')
			)->withErrors($validator)->withInput();
		}	
	
	}

	public function logout() {	
		$currentLang = \Session::get('lang');
		
		//updating login log table
		$logId = \DB::table('tbl_login_logs')->select('lg_id')->where('lg_user_id', '=', \Session::get('a_uid') )->orderBy('lg_id', 'desc')->first();
		$log_id = $logId->lg_id;
		$sql = \DB::table('tbl_login_logs')->where('lg_id', $log_id)->update( 
										array('lg_logout_time' => time())
					 				);

		\Auth::logout();
		\Session::flush();
		\Session::put('lang', $currentLang);

		return Redirect::to('admin/login')->with('message', 'Your are now logged out!');
	}

	function getSocialize( $social )
	{
		return Socialize::with($social)->redirect();
	}

	function getAutosocial( $social )
	{
		$user = Socialize::with($social)->user();
		$user =  User::where('email',$user->email)->first();
		return self::autoSignin($user);		
	}


	function autoSignin($user)
	{

		if(is_null($user)){
		  return Redirect::to('admin/login')
				->with('message', \SiteHelpers::alert('error','You have not registered yet '))
				->withInput();
		} else{

		    Auth::login($user);
			if(Auth::check())
			{
				$row = User::find(\Auth::user()->id); 

				if($row->active =='0')
				{
					// inactive 
					Auth::logout();
					return Redirect::to('admin/login')->with('message', \SiteHelpers::alert('error','Your Account is not active'));

				} else if($row->active=='2')
				{
					// BLocked users
					Auth::logout();
					return Redirect::to('admin/login')->with('message', \SiteHelpers::alert('error','Your Account is BLocked'));
				} else {
					Session::put('a_uid', $row->id);
					Session::put('a_gid', $row->group_id);
					Session::put('a_eid', $row->group_email);
					Session::put('a_fid', $row->first_name.' '. $row->last_name);	
					if(CNF_FRONT =='false') :
						return Redirect::to('dashboard');						
					else :
						return Redirect::to('');
					endif;					
					
										
				}
				
				
			}
		}

	}

	
}