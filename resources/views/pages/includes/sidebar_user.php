<style type="text/css">
.user-dp{
	background-color: rgba(243, 243, 243, 1);
	position: relative;
	width: 100%;
}
.user-dp a{
	background-color: rgba(243, 243, 243, 1) !important;
}
.user-dp:hover a>img{
	opacity: 0.95;
}
.user-dp>a.change-image{
	padding: 20px !important;
}
.user-dp>a>img{
	max-width: 100% !important;
	margin: 0 auto !important;
}
.user-dp a::before{
	display: none !important;
}	
.change-image{
	cursor: default;
}
.user-dp:hover,
.user-dp:hover .change-image{
	background-color: rgba(243, 243, 243, 1) !important;
}
.change-dp:hover{
	background-color: rgb(230, 230, 230) !important;
	color: rgb(26, 26, 26) !important;
}
</style>
<?php
	//fetching act info abt logged in user
	$q = $obj_Common->get_query("Uid='".$_SESSION['useruserid']."'",'tbl_user', "*");
	$user = mysql_fetch_assoc($q);
?>
<aside class="widget menu">
		  <header>
			<h3 class="title">Welcome <b><?php echo ucfirst($user['u_name']); ?></b></h3>
			<p class="date-time"><?php echo gmdate('D, d M Y h:ia T', time()); ?></p>
		  </header>
		  <nav>
			<ul>
			  <li class="user-dp">
			  	
			  		<a href="#" class="change-image">
			  		<?php
						$queryup = $obj_Common->get_query("Uid='".$_SESSION['useruserid']."'",'tbl_user', "*");
						if( $rowuser = mysql_fetch_object($queryup) )
			  			{
			  				if( $rowuser->u_image == '' )
			  				{
			  					echo "<img src='".SITE_URL."images/user_1.png' class='img-responsive img-circle' />";
			  				}
			  				else
			  				{
			  					echo "<img src='".SITE_URL."img/profile/".$rowuser->u_image."' class='img-responsive img-circle' />";
			  				} 
			  			} 
			  		?>
			  		</a>
			  		<a href="<?php echo SITE_URL; ?>profile_image_update.php" class="change-dp"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Change Picture</a>
                	
			  </li>
			  <li class="<?php if($page == 'dashboard') echo 'active';?>">
				<a href="<?php echo SITE_URL; ?>dashboard.php"><i class="fa fa-tachometer item-icon"></i><?php echo $convert_lang['Dashboard'];?></a>
			  </li>
			  <li class="<?php if($page == 'update-profile') echo 'active';?>">
				<a href="<?php echo SITE_URL; ?>updateprofile.php"><i class="fa fa-user item-icon"></i>
					<?php echo $convert_lang['Update']." ".$convert_lang['Profile'];?>
				</a>
			  </li>
			  <li class="<?php if($page == 'change-password') echo 'active';?>">
				<a href="<?php echo SITE_URL; ?>changepassword.php"><i class="fa fa-key item-icon"></i>
					<?php echo $convert_lang['Change']." ".$convert_lang['Password'];?>
				</a>
			  </li>
			  <li class="<?php if($page == 'inbox') echo 'active';?>">
				<a href="<?php echo SITE_URL;?>inbox.php">
					<i class="fa fa-inbox item-icon"></i><?php echo $convert_lang['Inbox'];?>
				</a>
			  </li>
			  <li class="<?php if($page == 'sent') echo 'active';?>">
				<a href="<?php echo SITE_URL;?>sent.php">
					<i class="fa fa-commenting-o item-icon"></i><?php echo $convert_lang['Sent'].' '.$convert_lang['Message']; ?>
				</a>
			  </li>
			  <li class="<?php if($page == 'compose-message') echo 'active';?>">
				<a href="<?php echo SITE_URL ?>compose.php"><i class="fa fa-pencil-square-o item-icon"></i>
					<?php echo $convert_lang['Compose']." ".$convert_lang['Message'];?>
				</a>
			  </li>
			  <li class="<?php if($page == 'lotto-pro-megasena') echo 'active';?>">
				<a href="<?php echo SITE_URL;?>lotto-pro-megasena.php"><i class="fa fa-industry item-icon"></i>Mega-Sena (PRO Generator)<?php /*echo $convert_lang['Generate']." ".$convert_lang['Lotto']; */?>
				</a>
			  </li>
			  <li class="<?php if($page == 'lotto-pro-euromillions') echo 'active';?>">
				<a href="<?php echo SITE_URL;?>lotto-pro-euromillions.php"><i class="fa fa-industry item-icon"></i>Euro-Millions (PRO Generator)<?php /*echo $convert_lang['Generate']." ".$convert_lang['Lotto']; */?>
				</a>
			  </li>
			  <li class="<?php if($page == 'lotto-pro-powerball') echo 'active';?>">
				<a href="<?php echo SITE_URL;?>lotto-pro-powerball.php"><i class="fa fa-industry item-icon"></i>Power-Ball (PRO Generator)<?php /*echo $convert_lang['Generate']." ".$convert_lang['Lotto']; */?>
				</a>
			  </li>
			  <li>
			  <li class="<?php if($page == 'write-testimonial') echo 'active';?>">
				<a href="<?php echo SITE_URL;?>writetestimonial.php"><i class="fa fa-pencil-square item-icon"></i>Write Testimonial<?php //echo $convert_lang['Write']." ".$convert_lang['Testimonial'];?>
				</a>
			  </li>
			  <li class="<?php if($page == 'link-gen') echo 'active';?>">
				<a href="<?php echo SITE_URL;?>linkgen.php"><i class="fa fa-plus-square-o item-icon"></i>New Link<?php //echo $convert_lang['New']." ".$convert_lang['Link'];?>
				</a>
			  </li>
			  <li class="<?php if($page == 'ads-user') echo 'active';?>">
				<a href="<?php echo SITE_URL;?>adsuser.php"><i class="fa fa-adn item-icon"></i>Ads<?php //echo $convert_lang['Ads'];?>
				</a>
			  </li>
			</ul>
		  </nav>
		</aside><!-- .menu-->

<script type="text/javascript">
	/*var timeHover, $this;
	$('.user-dp').on('mouseenter', function(e){
		$this = $(this);
		timeHover = setTimeout(function(){
			$this.find('.change-dp-btn').removeClass('hidden');
		}, 400);
	})
	.on('mouseleave', function(){
		clearTimeout(timeHover);
		$this.find('.change-dp-btn').addClass('hidden');
	});*/
</script>