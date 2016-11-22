<?php
if(isset($_REQUEST["active"]) &&($_REQUEST["active"]!=""))
{
	 $sqlse="SELECT * from tbl_url where url_uniquevalue='".$_REQUEST["active"]."'";
	 //echo $sqlse;
	  $resultse=mysql_query($sqlse);
	 $check = mysql_num_rows($resultse);
	  //echo $check;
	  if($check>0)
	  {
		  if($rowse=mysql_fetch_array($resultse))
		  {
			   $datetime=$rowse["url_date"];
			   $value1=$rowse["url_value1"];
			   $curtime=time();
			   if($rowse["url_reason"]=="ApproveEmail")
				{
					$_SESSION['userid']=$rowse["url_value1"];
					$sqlupdate="delete from tbl_url where url_uniquevalue='".$_REQUEST["active"]."'";
					if(mysql_query($sqlupdate))
					{
						header('Location:'.SITE_URL.'approveemail');
					}
				}
				else
				{
					if(($curtime-$datetime)<3600)
					{				
						if($rowse["url_reason"]=="forgotpassword")
						{
							$_SESSION['userid']=$rowse["url_value1"];
							$sqlupdate="delete from tbl_url where url_uniquevalue='".$_REQUEST["active"]."'";
							if(mysql_query($sqlupdate))
							{
								header('Location:'.SITE_URL.'resetpassword');
							}
						}
						else
						{
								if($rowse["url_reason"]=="changeemail")
								{
									$_SESSION['userid']=$rowse["url_value1"];
									$_SESSION['nemail']=$rowse["url_value2"];
									$sqlupdate="delete from tblurl where url_uniquevalue='".$_REQUEST["active"]."'";
									//$sqlupdate="update tblurl set url_status='1' where url_uniquevalue='".$_REQUEST["active"]."'";
									//echo $sqlupdate;
									if(mysql_query($sqlupdate))
									{
										header('Location:'.SITE_URL.'changeemail');
									}
								}
							
						}
					}	
					else
					{
						$sqlupdate="delete from tblurl where url_uniquevalue='".$_REQUEST["active"]."'";
						//$sqlupdate="update tblurl set url_status='1' where url_uniquevalue='".$_REQUEST["active"]."'";
						//echo $sqlupdate;
						if(mysql_query($sqlupdate))
						{
							header('Location:'.SITE_URL.'');
						}
					}
				}
			}

		}
		else
		{
			header('Location:'.SITE_URL.'expire');
		}	
	}

?>