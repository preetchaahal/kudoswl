<?php //if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
require_once("config/general.php");
require_once("config/class_db.php");
require_once("classes/class_login.php");
require_once("classes/class_common.php");
require_once("classes/class_url.php");
require_once("classes/class_email.php");
require_once("classes/class_users.php");
require_once("classes/class_changepassword.php");
require_once("classes/class_ads.php");
require_once("classes/class_images.php");
require_once("func/captcha.php");
require_once("func/lotto-stats.php");


@session_start();
if($_COOKIE["csid"]=='')
{
	$expire=time()+60*60*24*2;
	$sid = session_id();
	setcookie("csid",$sid, $expire);
	$obj_Common->visitors_insert($sid);
}
else
{
	$sid = $_COOKIE["csid"];
}

?>
<?php

$querylgcomman=$obj_Common->get_query('Lgc_id=1','tbl_language_conv','Lgc_conversion');
if($rwlgc=mysql_fetch_object($querylgcomman))
{
$lgconvrow=unserialize($rwlgc->Lgc_conversion);
}
if(!isset($_SESSION['langid']) && ($_SESSION['langid']==''))
	$_SESSION['langid']=1;

$convert_lang=$lgconvrow[$_SESSION['langid']];
$array=array
(
    '1' => array
        (
            'About' => 'About 1',
            'Contact' => 'Contact 1',
            'News' => 'News 1',
            'Ads' => 'Ads 1',
            'Login' => 'Login 1',
			'Register' => 'Register 1',
            'Inquiry' => 'Inquiry 1',
			'News' => 'News 1',
			'Event' => 'Event 1',
			'Promoters' => 'Promoters 1',
			'Clints' => 'Clints 1',
			'World' => 'World 1',
			'Name' => 'Name 1',
			'Work With Us' => 'Work With Us 1',
			'Meet Us At' => 'Meet Us At 1',
			'Phone' => 'Phone 1',
			'Email' => 'Email 1',
			'Address' => 'Address1',
			'Skype' => 'Skype 1',
			'Password' => 'Password 1',
			'User Name' => 'User Name 1',
			'First Name' => 'First Name 1',
			'Last Name' => 'Last Name 1',
			'Promoters' => 'Promoters 1',
			'Massage' => 'Massage 1',
			'Logout' => 'Logout 1',
			'Welcome' => 'Welcome 1',
			'View' => 'View 1',
			'Inbox' => 'Inbox 1',
			'New' => 'New 1',
			'Add' => 'Add 1',
			'User' => 'User 1',
			'Captcha' => 'Captcha 1',
			'Read' => 'Read 1',
			'Reply' => 'Reply 1',
			'Back' => 'Back 1',
			'Reset' => 'Reset 1',
			'Active ' => 'Active 1',
			'Cancel' => 'Cancel 1',
			'Delete' => 'Delete',
			'Type' => 'Type 1',
			'Status' => 'Status 1',
			'Activate' => 'Activate 1',
			'Change' => 'Change 1',
			'Search' => 'Search 1',
			'Save' => 'Save 1',
			'Select' => 'Select 1',
			'Submit' => 'Submit 1',
			'Go' => 'Go 1',
			'Update' => 'Update 1',
			'Profile' => 'Profile 1',
			'Zipcode' => 'Zipcode 1',
			'Registration Completed' => 'Registration Completed 1',
			'Current' => 'Current 1',
			'Confirm' => 'Confirm 1',
			'Not Match' => 'Not Match 1',
			'Forgot Password' => 'Forgot Password 1',
			'Image' => 'Image 1',
			'Dashboard' => 'Dashboard 1',
			'Title' => 'Title 1',
			'Date' => 'Date 1',
			'Description' => 'Description 1',
			'Action' => 'Action 2',
			'Deactive' => 'Deactive 2',
			'Approve' => 'Approve 2',
			'Pending' => 'Pending 2'
        ),

    '2' => array
        (
           'About' => 'About 2',
            'Contact' => 'Contact 2',
            'News' => 'News 2',
            'Ads' => 'Ads 2',
            'Login' => 'Login 2',
			'Register' => 'Register 2',
            'Inquiry' => 'Inquiry 2',
			'News' => 'News 2',
			'Event' => 'Event 2',
			'Promoters' => 'Promoters 2',
			'Clints' => 'Clints 2',
			'World' => 'World 2',
			'Name' => 'Name 2',
			'Work With Us' => 'Work With Us 2',
			'Meet Us At' => 'Meet Us At 2',
			'Phone' => 'Phone 2',
			'Email' => 'Email 2',
			'Address' => 'Address2',
			'Skype' => 'Skype 2',
			'Password' => 'Password 2',
			'User Name' => 'User Name 2',
			'First Name' => 'First Name 2',
			'Last Name' => 'Last Name 2',
			'Promoters' => 'Promoters 2',
			'Massage' => 'Massage 2',
			'Logout' => 'Logout 2',
			'Welcome' => 'Welcome 2',
			'View' => 'View 2',
			'Inbox' => 'Inbox 2',
			'New' => 'New 2',
			'Add' => 'Add 2',
			'User' => 'User 2',
			'Captcha' => 'Captcha 2',
			'Read' => 'Read 2',
			'Reply' => 'Reply 2',
			'Back' => 'Back 2',
			'Reset' => 'Reset 2',
			'Active ' => 'Active 2',
			'Cancel' => 'Cancel 2',
			'Delete' => 'Delete',
			'Type' => 'Type 2',
			'Status' => 'Status 2',
			'Activate' => 'Activate 2',
			'Change' => 'Change 2',
			'Search' => 'Search 2',
			'Save' => 'Save 2',
			'Select' => 'Select 2',
			'Submit' => 'Submit 2',
			'Go' => 'Go 2',
			'Update' => 'Update 2',
			'Profile' => 'Profile 2',
			'Zipcode' => 'Zipcode 2',
			'Registration Completed' => 'Registration Completed 2',
			'Current' => 'Current 2',
			'Confirm' => 'Confirm 2',
			'Not Match' => 'Not Match 2',
			'Forgot Password' => 'Forgot Password 2',
			'Image' => 'Image 2',
			'Dashboard' => 'Dashboard 2',
			'Title' => 'Title 2',
			'Date' => 'Date 2',
			'Description' => 'Description 2',
			'Action' => 'Action 2',
			'Deactive' => 'Deactive 2',
			'Approve' => 'Approve 2',
			'Pending' => 'Pending 2'
			
			
        )

);
//echo serialize($array);
//echo "<pre>";
//print_r($convert_lang);
//echo "</pre>";
?>