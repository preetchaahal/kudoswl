<style type="text/css">
@media (max-width: 767px){
	#top-box .top-navbar .not-logged-in-nav .nav > li{
		text-align: center;
		display: inline-block;
		float: right;
	}
	#top-box .top-navbar .not-logged-in-nav .nav > li a {
		    color: white !important;
		    background: rgba(255,255,255,.1);
		    border: 1px solid transparent;
		    -webkit-box-shadow: none;
		    -moz-box-shadow: none;
		    box-shadow: none;
		    font-size: 12px;
		    height: 30px;
		    line-height: 24px;
		    padding: 0 7px;
		    z-index: 2;
		    min-width: 95px;
	}
}

</style>
<div id="top-box">
        <div class="top-box-wrapper">
        <div class="container">
          <div class="row">
			<div class="col-xs-6 col-sm-5">
					  <div class="btn-group language btn-select">
						<a class="btn dropdown-toggle btn-default" role="button" data-toggle="dropdown" href="#">
						  <span class="hidden-xs">Language</span><span class="visible-xs">Lang</span>: English
						  <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						  <li><a href="{{ url() }}/home/lang/1"><img style="padding-top: 0px; margin-top: 0;" src="{{ url() }}/img/language/language1453929470.png" alt="English Langauge">English</a></li>
						  <li><a href="{{ url() }}/home/lang/2"><img style="padding-top: 0px; margin-top: 0;" src="{{ url() }}/img/language/language1453929526.png" alt="">Portuguese</a></li>
						  <li><a href="{{ url() }}/home/lang/3"><img style="padding-top: 0px; margin-top: 0;" src="{{ url() }}/img/language/language1453929567.png" alt="">Spanish</a></li>
						</ul>
					  </div>
					  <!--<div class="btn-group currency btn-select">
						<a class="btn dropdown-toggle btn-default" role="button" data-toggle="dropdown" href="#">
						  <span class="hidden-xs">Currency</span><span class="visible-xs">Curr</span>: USD
						  <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						  <li><a href="#">USD</a></li>
						  <li><a href="#">EUR</a></li>
						  <li><a href="#">GBP</a></li>
						</ul>
					  </div>-->
			</div>
			
			<div class="pull-right col-xs-6 col-sm-7 menu">
				  <div class="navbar navbar-inverse top-navbar top-navbar-right" role="navigation">
					
					<?php //if a user is logged in show the bars instead of just the login 
						//if($loggedin == '1') {
					?>
					<button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".top-navbar .navbar-collapse">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>

					<nav class="collapse collapsing navbar-collapse">
					  <ul class="nav navbar-nav navbar-right">
						<?php 
							 if( $loggedin == 0 )
                          	{ 
                        ?>
                    		<li class="<?php //if($page == "login") echo "active"; ?>">
                      			<a href="{{ url() }}/user/login" ><i class="fa fa-log-in"></i>Login/Register</a>
                    		</li>
                  		<?php } ?>				
						<?php if( $loggedin == '1' ){
						?>
						<li><a href="dashboard.php">My Account</a></li>
						<li>
							<a href="inbox.php"><i class="fa fa-inbox"></i>
								<?php 
									// $queryupcount=$obj_Common->get_query("M_receiver_id='".$_SESSION['useruserid']."' && user_read='0'",'tblmessage','Message_id');
									// $msgCount = mysql_num_rows($queryupcount);
									// echo "( $msgCount ) ";
									// echo $convert_lang['unread_messages'];
							 	?>Inbox </a>
						</li>
						<!--<li><a href="#">My Cart <span class="count">2</span></a></li>
						<li><a href="#">Checkout</a></li>-->
						<li><a href="{{ url() }}/user/logout">Log out <i class="fa fa-sign-out"></i></a></li>
						<?php } ?>
					  </ul>
					</nav>
					<?php  //}// else { 
						//showing the login button for non logged in users
					?>

				  </div>
			</div>
			<div class="clearfix"></div>
        </div><!-- ///row -->
      </div><!-- ///container -->
    </div><!-- //top-box-wrapper -->
</div><!-- #top-box -->