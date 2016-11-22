<section id="main">
	<header class="page-header">
		<div class="container">
		  <h4 class="title">Contacts Us</h4>
		</div>	
	</header>
	<div class="container">
	    <div class="row">
	      <div class="content col-sm-12 col-md-12">
			<div class="row">
			  <div class="col-sm-6 col-md-6 contact-info bottom-padding">
				<address>
				  <div class="title">Address</div>
				  49 Abcdef, 2B Ghijjklns, Old New City, Abcd
				</address>
				<div class="row">
				  <address class="col-sm-6 col-md-6">
					<div class="title">Phones</div>
					<div>Support: +777 (100) 1234</div>
					<div>Sales manager: +777 (100) 4321</div>
					<div>Director: +777 (100) 1243</div>
				  </address>
				  <address class="col-sm-6 col-md-6">
					<div class="title">Email Addresses</div>
					<div>Support: <a href="mailto:support@example.com">support@example.com</a></div>
					<div>Sales manager: <a href="mailto:manager@example.com">manager@example.com</a></div>
					<div>Director: <a href="mailto:chief@example.com">chief@example.com</a></div>
				  </address>
				</div>
				<hr>
				<?php 
					//$ourteam=$obj_Common->get_field_name('pg_id=8' ,'tbl_page','pg_description');
					//$desc1 = unserialize($ourteam["pg_description"]);
					//echo $desc1[$_SESSION['langid']];
				?>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess
			  </div>
			  <div class="col-sm-6 col-md-6 bottom-padding">
				<?php 
					//if((isset($_POST['txtact'])) && ($_POST['txtact']=='contact'))
	                    //{
	                    ?>
	                        <!-- <p><strong>Dear User,</strong></p>
	                        <p> -->
	                       <?php //echo $msg;?>
	                        </p>
	                <?php //} else { ?>
						<form id="contactform" name="cntfrm" class="form-box register-form contact-form" method="post">
						  <h3 class="title">Quick Contact</h3>
						  <div id="success"></div>
						  <label>Name<?php //echo $convert_lang['Name'];?><span class="required">*</span></label>
						  <input class="form-control" required name="txtname" type="text" 
						  placeholder="Name<?php //echo $convert_lang['Name'];?>">
						  <label>Email<?php //echo $convert_lang['Email'];?><span class="required">*</span></label>
						  <input class="form-control" required type="email" name="txtemail" placeholder="Email<?php //echo $convert_lang['Email'];?>">
						  <label>Phone<?php //echo $convert_lang['Phone'];?></label>
						  <input class="form-control" required type="text" name="txtcontact" placeholder="Phone<?php //echo $convert_lang['Phone'];?>">
						  <label>Message<?php //echo $convert_lang['Message'];?></label>
						  <textarea class="form-control" required name="txtmessage" 
						  placeholder="Message<?php //echo $convert_lang['Message'];?>"></textarea>
						  <div class="clearfix"></div>
						  <div class="buttons-box clearfix">
							<input type="hidden" id="txtact" name="txtact" value="contact" class="fancyfrmtxt"/>
							<button type="submit" name="butcontact" class="btn btn-default">Submit<?php //echo $convert_lang['Submit'];?></button>
							<span class="required"><b>*</b> Required Field</span>
						  </div><!-- .buttons-box -->
						</form>
				<?php //} ?>
			  </div>
			  <div class="map-box col-sm-12 col-md-12">
				<div
				  style="height: 276px;"
				  class="map-canvas"
				  data-zoom="5"
				  data-lat="-10.1833"
				  data-lng="-48.3333"
				  data-title="Brazil"
				  data-content="Support: +777 (100) 1234<br>
				  Sales manager: +777 (100) 4321<br>
				  Director: +777 (100) 1243"></div>
			  </div>
			</div>
	      </div>
	    </div>
	  </div><!-- .container -->
</section><!-- #main -->