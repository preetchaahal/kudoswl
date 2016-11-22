<?php 
namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class DashboardMeta extends Model {

	protected $table = '';
	protected $primaryKey = '';

	public static $lastTwoMonth = '1';//mktime(0, 0, 0, date("m")-2, date("d"),   date("Y"));
	public static $lastMonth = '1';//mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
	public static $currentMonth = '1';//mktime(0, 0, 0, date("m"), date("d"),   date("Y"));
	public static $sart='1';//strtotime(date('d-m-Y'));
	public static $endDate='1';//$sart+86400;

	public function __construct() {
		parent::__construct();
	}

	public static function fetchLastTwoMonthUsers(){

		return \DB::table('tb_users')->select('id')->where( $lastMonth, '>', 'created_at' )->where( $lastTwoMonth, '<=', 'created_at' )->count();

	}

	public static function fetchLastMonthUsers(){

		return \DB::table('tb_users')->select('id')->where( $lastMonth, '<', 'created_at' )->count();

	}

	public static function fetchTodayRegisteredUsers(){

		return \DB::table('tb_users')->select('id')->where( 'created_at', '>=', self::$sart )->where( 'created_at', '<=', self::$endDate )->count();

	}

	public  static function fetchTodayOnline(){

		return \DB::table('tb_users')->select('id')->where( 'is_login', '=', '1' )->count();

	}

	public  static function fetchAllUsers(){

		return \DB::table('tb_users')->select('id')->where( '1', '=', '1' )->count();

	}

	public  static function fetchOnlineUsers(){

		\DB::table('tb_users')->select('id')->where( 'is_login', '=', '1' )->count();

	}

	public static function fetchActiveUsers(){

		return \DB::table('tb_users')->select('id')->where( 'active', '=', '1' )->count();

	}

	public static function fetchInactiveUsers(){
	
		return \DB::table('tb_users')->select('id')->where( 'active', '=', '0' )->count();
	
	}

	public static function fetchDateWiseLastVisitor(){

		return \DB::table('tb_users')->select('id')->where( 'active', '=', '0' )->count();//$obj_Common->get_visitors_country_wise(''.$lastMonth.' > vt_date  && '.$lastTwoMonth.' <= vt_date','tbl_visitors','vt_id');

	}

	public static function fetchDateWiseThisMonthVisitor(){

		$dateWiseThis_vi=$obj_Common->get_visitors_country_wise(''.$lastMonth.' < vt_date  ','tbl_visitors','vt_id');
	
	}

	public static function fetchTodayLastVisitor(){

		return $today_vi=$obj_Common->get_visitors_country_wise(''.self::$sart.' <= vt_date  && '.self::$endDate.' >= vt_date','tbl_visitors','vt_id');

	}

	public static function fetchTotalVisitors(){

		// $total_vi=$obj_Common->get_visitors_country_wise("1=1",'tbl_visitors','vt_id');

	}
	
	public static function fetchTotalQ(){

		//return // $totalq=$obj_Common->get_visitors_country_wise("lg_id!='0'",'tbl_logs',"lg_id");
		// $totalcnt=$totalq->number;

	}	
		
	public static function fetchBrowsers(){

		//return // $browser=$obj_Common->get_query("lg_id!='0'",'tbl_logs',"lg_browser,count(lg_id) as bk","group by lg_browser");

	}

	public static function fetchOs(){

		//return // $ops=$obj_Common->get_query("lg_id!='0'",'tbl_logs',"lg_os,count(lg_id) as ok","group by lg_os");

	}

	public static function fetchTotalLoginTime(){

		// $linTime=$obj_Common->get_sum_of_cnt("lg_logout_time!='0'",'tbl_logs',"lg_login_time");
		// $loginTime=$linTime->cnt;

		// $logoutTime=$loTime->cnt;
		// $subtract= $logoutTime- $loginTime;
		// $time=(int)($subtract/$totalcnt);
		// $avgTime=$obj_Common->time_difference($time);
	
	}
	
	public static function fetchLogoutTime(){

		// $loTime=$obj_Common->get_sum_of_cnt("lg_logout_time!='0'",'tbl_logs',"lg_logout_time");

	}

	public static function fetchNotifications(){

		// $noti=$obj_Common->get_query("nto_read ='0'",'tbl_notification',"*"," order by nto_date DESC limit 5");	
		// while($rownot=mysql_fetch_object($noti)){
		// 	$nameu=$obj_Common->get_field_name("Uid='".$rownot->nto_user_id."'",'tbl_user',"u_username,Uid");
		// 	$arraynotification[$rownot->nto_id]=array("acid"=>$rownot->nto_action_id,"indate"=>$rownot->nto_date,"uname"=>$nameu['u_username'],"uid"=>$nameu['Uid']);
		// }

	}

}