<script type="text/javascript" language="javascript">
$(document).ready(function()
    {
  
        var $container = $("#loaddiv");
        //$container.load("messenger_data.php");
        var refreshId = setInterval(function()
        {
            //$container.load('dashboard_data.php');
   
        }, 3000);
 
    });
</script>

<div id="loaddiv"> 
	<input type="hidden" value="<?php  echo $todayuser; ?>" name="todaycount" id="todaycount">
	<input type="hidden" value="<?php /* echo $lasstmonthuser;*/ ?>" name="lasstmonthuser" id="lasstmonthuser">
	<input type="hidden" value="<?php /* echo $todayuser_vi;*/ ?>" name="todaycount_vi" id="todaycount_vi">
	
	<input type="hidden" value="<?php /* echo $tisonline;*/ ?>" name="tisonline" id="tisonline">
	<input type="hidden" value="<?php /* echo $toaluser_vi;*/ ?>" name="toaluser_vi" id="toaluser_vi">
	<input type="hidden" value="<?php /* echo $lasstmonthuser_vi;*/ ?>" name="lasstmonthuser_vi" id="lasstmonthuser_vi">

	<input type="hidden" value="<?php /* echo $toaluser;*/ ?>" name="toaluser" id="toaluser">
	<input type="hidden" value="<?php /* echo $inacuser;*/ ?>" name="inacuser" id="inacuser">
	<input type="hidden" value="<?php /* echo $acuser;*/ ?>" name="acuser" id="acuser">
	
	<input type="hidden" value="<?php /* echo $voipc_obj->fun_get_all();*/ ?>" name="tvopic" id="tvopic">
	<input type="hidden" value="<?php /* echo $voipc_obj->fun_get_all('1');*/ ?>" name="tvuser" id="tvuser">
	<input type="hidden" value="<?php /* echo $voipc_obj->fun_get_all('0');*/ ?>" name="tvvist" id="tvvist">
</div><!-- ///loaddiv -->

<!-- cards -->
<div class="row cards">
            
	<div class="card-container col-lg-3 col-md-6 col-sm-12">
		<div class="card card-red hover">
			<div class="front">        
				<h1>New Users</h1>
			  	<p id="users-count">0</p>
				<span class="fa-stack fa-2x pull-right">
				  <i class="fa fa-circle fa-stack-2x"></i>
				  <i class="fa fa-user fa-stack-1x"></i>
				  <span class="easypiechart" data-percent="100" data-line-width="4" data-size="80" data-line-cap="butt" data-animate="" data-target="#users-count" data-update="" data-bar-color="white" data-scale-color="false" data-track-color="rgba(0, 0, 0, 0.15)"></span>
				</span>
			</div><!-- //front -->
	  		<div class="back">
			    <ul class="inline divided">
			      <li>
			        <h1>Total Users</h1>
			        <p id="tuser12"><?php /* echo $toaluser;*/ ?></p>
			      </li>
			      <li>
			        <h1>Last Month</h1>
			        <p id="lastmonth"><?php /* echo $lasstmonthuser;*/ ?></p>
			      </li>
			    </ul>
	    		<div class="summary negative hide"><?php /* echo $thismuser_pri;*/ ?>% <i class="fa fa-arrow-down"></i> this month</div>
	    		<!-- Button trigger modal -->
	   		</div><!-- ///back -->
		</div><!-- //card card-red -->
	</div><!-- ///card-container -->

	<div class="card-container col-lg-3 col-md-6 col-sm-12">
		<div class="card card-orange hover">
		  	<div class="front">        
			    <h1>Visits</h1>
			    <p id="visits-count">0</p>
			    <span class="fa-stack fa-2x pull-right">
			      <i class="fa fa-circle fa-stack-2x"></i>
			      <i class="fa fa-eye fa-stack-1x"></i>
			      <span class="easypiechart" data-percent="90" data-line-width="4" data-size="80" data-line-cap="butt" data-animate="2000" data-target="#visits-count" data-update="3000" data-bar-color="white" data-scale-color="false" data-track-color="rgba(0, 0, 0, 0.15)"></span>
			    </span>
		  	</div><!-- //front -->
			<div class="back">
			    <ul class="inline divided">
			      <li>
			        <h1>Total Visits</h1>
			        <p id="tvisits"><?php /* echo $toaluser_vi;*/ ?></p>
			      </li>
			      <li>
			        <h1>Last Month</h1>
			        <p id="vislastmonth"><?php /* echo $lasstmonthuser_vi;*/ ?></p>
			      </li>
			    </ul> 
			    <div class="summary negative hide"><?php /* echo $thismvi_pri;*/ ?>% <i class="fa fa-arrow-down"></i> this month</div>
			</div><!---- ///back -->
		</div><!-- //card-orange -->
	</div><!---- //card-container -->

	<div class="card-container col-lg-3 col-md-6 col-sm-12">
        <div class="card card-green hover">
          <div class="front">        
            <h1>Online Users</h1>
              <p id="total-count">0</p>
            <span class="fa-stack fa-2x pull-right">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-user fa-stack-1x"></i>
              <span class="easypiechart" data-percent="100" data-line-width="4" data-size="80" data-line-cap="butt" data-animate="" data-target="#total-count" data-update="" data-bar-color="white" data-scale-color="false" data-track-color="rgba(0, 0, 0, 0.15)"></span>
            </span>
          </div><!--   card-green -->
          <div class="back">
            <ul class="inline divided">
              <li>
                <h1>Active Users</h1>
                <p id="tact"><?php /* echo $acuser;*/ ?></p>
              </li>
              <li>
                <h1>Inactive Users</h1>
                <p id="tinact"><?php /* echo $inacuser;*/ ?></p>
              </li>
            </ul>
            <div class="summary negative hide"><?php /* echo $thismuser_pri;*/ ?>% <i class="fa fa-arrow-down"></i> this month</div>
            <!-- Button trigger modal -->
           
          </div><!-- //back -->
        </div><!-- //card-green -->
    </div><!--- //card-container -->	
				
				
	<div class="card-container col-lg-3 col-md-6 col-sm-12">
		<div class="card card-cyan hover">
		  <div class="front">        
		    <h1>VOIP Clicks (All)</h1>
		      <p id="total-voip">0</p>
		    <span class="fa-stack fa-2x pull-right">
		      <i class="fa fa-circle fa-stack-2x"></i>
		      <i class="fa fa-user fa-stack-1x"></i>
		      <span class="easypiechart" data-percent="100" data-line-width="4" data-size="80" data-line-cap="butt" data-animate="" data-target="#total-voip" data-update="" data-bar-color="white" data-scale-color="false" data-track-color="rgba(0, 0, 0, 0.15)"></span>
		    </span>
		  </div><!-- //front -->
		  <div class="back">
		    <ul class="inline divided">
		      <li>
		        <h1>Total Users</h1>
		        <p id="divtvuser"><?php /* echo $voipc_obj->fun_get_all('1');*/ ?></p>
		      </li>
		      <li>
		        <h1>Total Visitors</h1>
		        <p id="divtvvist"><?php /* echo $voipc_obj->fun_get_all('0');*/ ?></p>
		      </li>
		    </ul>
		    <div class="summary negative hide"><?php /* echo $thismuser_pri;*/ ?>% <i class="fa fa-arrow-down"></i> this month</div>
		    <!-- Button trigger modal -->
		   
		  </div><!--- //back -->
		</div><!-- //card-cyan -->
	</div><!-- //card-container -->	
			
</div><!--- ///row card -->
<!-- /cards -->

<!-- row -->
<div class="row">

	<!-- col 8 -->
	<div class="col-lg-8 col-md-12 hide">

		<!-- tile -->
		<section class="tile cornered ">

			<!-- tile header -->
			<div class="tile-header color greensea hide">
				<h1 class="big-thin">Statistics</h1>
				<div class="controls">
				  <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
				</div>
			</div>
			<!-- /tile header -->


			<!-- tile widget -->
			<div class="tile-widget color greensea hide">
				<div id="statistics-chart" class="chart statistics" style="height: 250px;"></div>
			</div>
			<!-- /tile widget -->

        </section>
        <!-- /tile -->
   
	</div><!-- ///col-8 hide -->
	<!-- /col 8-->

	<?php /* //$linkright = $login_obj->fun_check_rights("taul1"); if($linkright == '1'){*/ ?>
    <div class="col-lg-8 col-md-12">

        <!-- tile -->
        <section class="tile cornered">
              
			<!-- tile widget -->
			<!-- tile header -->
			<div class="tile-header color greensea">
				<h1 class="big-thin">Total User Access Log</h1>
				<div class="controls">
				  <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
				</div><!-- //controls -->
			</div><!-- //tile-header -->
			<!-- /tile widget -->

			<!-- tile body -->
			<div class="tile-body">
				<div class="row">
				  <ul class="inline">
				    
				    <li class="col-md-4 col-sm-6 col-xs-6">
				      <h5 class="underline">Browser</h5>
				      <ul class="progress-list">
							<?php /* 
				            //while($rowbr=mysql_fetch_object($browser)){
				            */ ?>
				       	<li>
				          	<div class="details">
				            	<div class="title"><?php /* echo $rowbr->lg_browser; */ ?></div>
				          	</div><!-- //details -->
				          	<div class="status pull-right">
				            	<span class="animate-number" data-value="<?php /* echo $rowbr->bk; */ ?>" data-animation-duration="800">0</span>
				          	</div><!-- //status -->
				          	<div class="clearfix"></div>
				          	<div class="progress progress-little no-radius">
				            	<div class="progress-bar progress-bar-amethyst animate-progress-bar" data-percentage="<?php /* echo $rowbr->bk; */ ?>" style="width: 0%;"></div>
				          	</div><!-- ///progress -->
				        </li>
				        <?php /* //} */ ?>     
				       </ul><!-- ///progress-list -->
				    </li>
				    <li class="col-md-4 col-sm-6 col-xs-6">
				      	<h5 class="underline">Operating system</h5>
				      	<ul class="progress-list">
				       	<?php /*
							//while($rowo=mysql_fetch_object($ops)){ 
						*/ ?>
					        <li>
					          <div class="details">
					        	<div class="title"><?php /* echo $rowo->lg_os; */ ?></div>
					          </div><!-- //details -->
					          <div class="status pull-right">
					            <span class="animate-number"  data-value="<?php /* echo $rowo->ok; */ ?>" data-animation-duration="1500">0</span>
					          </div><!-- ///status -->
					          <div class="clearfix"></div>
					          <div class="progress progress-little no-radius" >
					            <div class="progress-bar progress-bar-green animate-progress-bar" data-percentage="<?php /* echo $rowo->ok; */ ?>" style="width: 0%;"></div>
					          </div><!-- //progress -->
					        </li>
				        <?php /* //} */ ?>     
				      	</ul><!--- //progress-list -->
				    </li>
				    <li class="col-md-4 col-sm-6 col-xs-6">
				      	<h5 class="underline">Average Login Time</h5>
				      	<ul class="progress-list">
				     		<li>
				          		<div class="details">
				          		<strong><?php /* echo $avgtime; */ ?></strong>
				          		</div><!-- //details -->
				        	</li>
				         	<li>
					          	<div class="details" style="margin-top:20px;">
					        		<div class="title">Total User Login</div>
					          	</div><!-- //details -->
					          	<div class="status pull-right"  style="margin-top:20px;">
					            	<span class="animate-number"  data-value="<?php /* echo $totalcnt; */ ?>" data-animation-duration="1500">0</span>
					          	</div><!-- //status -->
					        </li>
				      	</ul><!-- //progress-list -->
				    </li>
				  
				  </ul><!-- ///inline -->
				</div><!-- //row -->
			</div>
			<!-- /tile body -->

		</section>
        <!-- /tile -->

		<?php /* //include_once 'includes/lotto-users-played.php'; */ ?>

	</div>
	<!-- /col 8-->
	<?php /* //} */ ?>

	<?php /* //$linkright = $login_obj->fun_check_rights("tus1"); if($linkright == '1'){*/ ?>	 
	<!-- col 4 -->
	<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
    
    	<!-- tile body -->
		<div class="tile-body">
			<div class="row">
		  		<ul class="inline">
		    
		    		<li class="col-md-12 col-sm-12 col-xs-12">
		      		<h5 class="underline">Total Users Statistics</h5>
		      		<ul class="progress-list">
		        		<li>
		          			<div class="details">
					          <?php /* 
							  //$ame=$obj_Common->get_visitors_country_wise("u_country='USA'",'tbl_user','u_country');
							  //$americaper=$obj_Common->get_persent($toaluser,$ame->number);
							  */ ?>
					            <div class="title">USA</div>
					            <div class="description">Visitors from USA</div>
					        </div><!-- //details -->
				          	<div class="status pull-right">
				            	<span class="animate-number"  data-value="<?php /* echo $ame->number;*/ ?>" data-animation-duration="1500">0</span>
				          	</div><!-- ///status -->
		          			<div class="clearfix"></div>
				          	<div class="progress progress-little no-radius" >
				            	<div class="progress-bar progress-bar-green animate-progress-bar" data-percentage="<?php /* echo $americaper;*/ ?>%" style="width: 0%;"></div>
				          	</div><!-- //progress -->
	        			</li>
		        		<li>
			          		<div class="details">
			            	<?php /* 
					  			//$eue=$obj_Common->get_visitors_country_wise("u_country='UK'",'tbl_user','u_country');
					  
							  	//$europeper=$obj_Common->get_persent($toaluser,$eue->number);
							  */ ?>
					            <div class="title">UK</div>
					            <div class="description">Visitors from UK</div>
					        </div><!-- //details -->
		          			<div class="status pull-right">
				            	<span class="animate-number" data-value="<?php /* echo $eue->number;*/ ?>" data-animation-duration="1000">0</span>
				          	</div><!-- //status -->
					        <div class="clearfix"></div>
					        	<div class="progress progress-little no-radius">
		            				<div class="progress-bar progress-bar-cyan animate-progress-bar" data-percentage="<?php /* echo $europeper;*/ ?>%" style="width: 0%;"></div>
		          				</div><!-- //progress -->
		        		</li>
		        		<li>
				          	<div class="details">
				            	<?php /* 
						  		//$ac=$obj_Common->get_visitors_country_wise("u_country='BRA'",'tbl_user','u_country');
						  		//$asiaper=$obj_Common->get_persent($toaluser,$ac->number);
						  		*/ ?>
					            <div class="title">Brazil</div>
					            <div class="description">Visitors from Brazil</div>
					        </div><!-- //details -->
				          	<div class="status pull-right">
				            	<span class="animate-number" data-value="<?php /* echo $ac->number;*/ ?>" data-animation-duration="800">0</span>
				          	</div><!-- ///status -->
		          			<div class="clearfix"></div>
				          	<div class="progress progress-little no-radius">
				            	<div class="progress-bar progress-bar-amethyst animate-progress-bar" data-percentage="<?php /* echo $asiaper;*/ ?>%" style="width: 0%;"></div>
				          	</div><!-- //progress -->
	        			</li>
				        <li>
				        
				          	<div class="details">
						        <?php /* 
								  	//$afrc=$obj_Common->get_visitors_country_wise("u_country='IND'",'tbl_user','u_country');
								  	//$africaper=$obj_Common->get_persent($toaluser,$afrc->number);
								  */ ?>
						            <div class="title">India</div>
						            <div class="description">Visitors from India</div>
						    </div>
				          	<div class="status pull-right">
				            	<span class="animate-number" data-value="<?php /* echo $afrc->number;*/ ?>" data-animation-duration="600">0</span>
				          	</div>
				          	<div class="clearfix"></div>
				          	<div class="progress progress-little no-radius">
				            	<div class="progress-bar progress-bar-orange animate-progress-bar" data-percentage="<?php /* echo $africaper;*/ ?>%" style="width: 0%;"></div>
					        </div>
				        
				        </li>
				 		<li>
		          
		          			<div class="details">
						        <?php /* 
									//$afrc=$obj_Common->get_visitors_country_wise("u_country='ESP'",'tbl_user','u_country');
								  	//$africaper=$obj_Common->get_persent($toaluser,$afrc->number);
								*/ ?>
				            	<div class="title">ESP</div>
				            	<div class="description">Visitors from ESP</div>
		          			</div>
					        <div class="status pull-right">
					           <span class="animate-number" data-value="<?php /* echo $afrc->number;*/ ?>" data-animation-duration="600">0</span>
					        </div>
		          			<div class="clearfix"></div>
		          			<div class="progress progress-little no-radius">
		            			<div class="progress-bar progress-bar-orange animate-progress-bar" data-percentage="<?php /* echo $africaper;*/ ?>%" style="width: 0%;"></div>
		          			</div><!-- //progress -->
		        		
		        		</li>
						<li>

					        <div class="details">
					           <?php /* 
							  //$afrc=$obj_Common->get_visitors_country_wise("u_country='PRT'",'tbl_user','u_country');
							  //$africaper=$obj_Common->get_persent($toaluser,$afrc->number);
							  */ ?>
					          	<div class="title">Portugal</div>
					            <div class="description">Visitors from Portugal</div>
					        </div><!-- //details -->
				          	<div class="status pull-right">
				            	<span class="animate-number" data-value="<?php /* echo $afrc->number;*/ ?>" data-animation-duration="600">0</span>
				          	</div><!-- //status -->
					        <div class="clearfix"></div>
					        <div class="progress progress-little no-radius">
					            <div class="progress-bar progress-bar-orange animate-progress-bar" data-percentage="<?php /* echo $africaper;*/ ?>%" style="width: 0%;"></div>
					        </div><!-- //progress -->
		        		
		        		</li>
		        		<li>
					   
					        <div class="details">
					           <?php /* 
							  //$other=$obj_Common->get_visitors_country_wise("((u_country != 'USA') && (u_country != 'UK') && (u_country != 'ESP') && (u_country != 'PRT') && (u_country != 'IND') && (u_country != 'BRA'))",'tbl_user','u_country');
							  //$otherper=$obj_Common->get_persent($toaluser,$other->number);
							  */ ?>
					          	<div class="title">Other</div>
					        </div><!-- ///details -->
					        <div class="status pull-right">
					            <span class="animate-number" data-value="<?php /* echo $other->number;*/ ?>" data-animation-duration="400">0</span>
					        </div>
					        <div class="clearfix"></div>
					        <div class="progress progress-little no-radius">
					            <div class="progress-bar progress-bar-red animate-progress-bar" data-percentage="<?php /* echo $otherper;*/ ?>%" style="width: 0%;"></div>
					        </div>
		        
		        		</li>       
		      		</ul>
		    		</li>
		  		</ul><!-- ///inline -->
			</div><!-- //row -->
		</div>
        <!-- /tile body -->

        <!-- /tile -->

    </div>
    <!-- /col 4 -->
	<?php /* //} */ ?>

</div>
<!-- /row -->

<div class="row">

	<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

		<!-- tile body -->
		<div class="tile-body">
			<div class="row">

			</div>
		</div>
	</div><!-- ///col-lg-4 -->

</div>
<!-- /row -->

<?php /* //if($_SESSION["u_t"] == "1") {*/ ?>
<!-- row -->
<div class="row">
	<!-- col 8 -->
    <div class="col-md-8">
                
        <!-- tile -->
        <section class="tile">


			<!-- tile header -->
			<div class="tile-header transparent">               
				<h1><strong>Front Page</strong> Content</h1>
			</div>
			<!-- /tile header -->

			<!-- tile body -->
			<div class="tile-body tab-content">
			<!-- Tab panes -->

			    
			    <form id="mainBlockForm" action="<?php /* echo $_SERVER['PHP_SELF']; */ ?>" method="POST" class="form-horizontal" >
			    <?php /*
			        // $sqllg1="select * from tbl_language order by Lg_title";
			        // $resutllg=mysql_query($sqllg1);
			        // $numrow=mysql_num_rows($resutllg);
			        
			        // while($row = mysql_fetch_array($resutllg))
			        //   $langNames[] = $row['Lg_title'];//$db_obj->fetch_array($resutllg);

			        //   //fetching custom html content by admin
			        //   $q2 = "SELECT * FROM tbl_main_page_content";
			        //   $r2 = mysql_query($q2);
			        //   $rs2 = mysql_fetch_assoc($r2);
			        //   $title_lang = unserialize($rs2['heading']);
			        //   $content_lang = unserialize($rs2['content']);
			        //   for($i=0; $i<count($title_lang); $i++)
			      //{*/ ?>


			    	<fieldset class="row">
					    <h2><?php /* echo $langNames[$i];*/ ?></h2>
					    
					    <div class="form-group col-sm-12">
					        <label class="control-label col-sm-4">Main Block Title</label>
					        <div class="col-xs-6">
					          <input type="text" class="form-control" name="mainBlockTitle[]" value="<?php /* echo $title_lang[$i]; */ ?>">
					      </div>
					    </div><!-- //form-group -->
					    <div class="form-group col-sm-12">
					      <label class="control-label col-sm-4">Main Block Content</label>
					      <div class="col-xs-6">
					          <textarea name="mainBlockContent[]" cols="90" rows="15" class="form-control" style="resize: vertical;" ><?php /* echo $content_lang[$i]; */ ?></textarea>
					          
					      </div>
					    </div><!-- //form-group -->
			      	</fieldset>
			      	<?php /* //} */ ?>

				    <div class="form-group col-sm-12">
				      	<label class="control-label col-sm-4">Main Block Status</label>
				      	<div class="col-xs-6">
					        <select name="is_active">
					          <option value="1" <?php /* if($rs2['is_active'] == '1') echo "selected"; */ ?>>Show</option>
					          <option value="0" <?php /* if($rs2['is_active'] == '0') echo "selected"; */ ?>>Hide</option>
					        </select>                              
				      	</div>
					</div><!-- //form-group -->
			    
			    	<div class="form-group">
			        	<div class="col-xs-6 col-xs-push-4">
			          		<input type="submit"  class=" btn btn-info" name="postbtn" value="Post content">
			        	</div>
			    	</div><!-- //form-group -->
			  	</form>

				<?php /* //require_once("notification_data.php") ; */ ?>

			</div>
      		<!-- /tile body -->


        </section>
        <!-- /tile -->



        <!-- tile -->
        <section class="tile">

			<!-- tile header -->
			<div class="tile-header transparent">               
				<h1><strong>Recent</strong> Activity</h1>
				<div class="controls">
				  <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
				  <a href="#" class="remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<!-- /tile header -->

			<!-- tile body -->
			<div class="tile-body tab-content nopadding" id="noti">
				<!-- Tab panes -->
				<?php /* //require_once("notification_data.php") ; */ ?>
			</div>
			<!-- /tile body -->

        </section>
        <!-- /tile -->


	</div>
	<!-- /col-md-8 -->

</div>
<!-- /row -->

<?php /* //} */ ?>
<script>
    $(function(){
      // Initialize card flip
      $('.card.hover').hover(function(){
        $(this).addClass('flip');
      },function(){
        $(this).removeClass('flip');
      });

      // Make card front & back side same

      $('.card').each(function() {
        var front = $('.card .front');
        var back = $('.card .back');
        var frontH = front.height();
        var backH = back.height();

        

        if (backH > frontH) {
          front.height(backH - 8);
        }
      });

      // Initialize tabDrop
      $('.tabdrop').tabdrop({text: '<i class="fa fa-th-list"></i>'});
      
      //generate pie charts
      $('.easypiechart').easyPieChart();

      //generate actual pie charts
      $('.pie-chart').easyPieChart();

      //animate numbers on cards
      $("#users-count").animateNumbers(document.getElementById('todaycount').value);
	  $("#total-count").animateNumbers(document.getElementById('tisonline').value);
	   $("#visits-count").animateNumbers(document.getElementById('todaycount_vi').value);
	   
	     $("#tuser12").animateNumbers(document.getElementById('toaluser').value);
	  $("#lastmonth").animateNumbers(document.getElementById('lasstmonthuser').value);
	   $("#tvisits").animateNumbers(document.getElementById('toaluser_vi').value);
	   
	   $("#vislastmonth").animateNumbers(document.getElementById('lasstmonthuser_vi').value);
	  $("#tact").animateNumbers(document.getElementById('acuser').value);
	   $("#tinact").animateNumbers(document.getElementById('inacuser').value);
	   
	    $("#total-voip").animateNumbers(document.getElementById('tvopic').value);
		$("#divtvuser").animateNumbers(document.getElementById('tvuser').value);
		$("#divtvvist").animateNumbers(document.getElementById('tvvist').value);
	   
      $("#orders-count").animateNumbers(Math.round( Math.random() * 100 ));
      $("#sales-count").animateNumbers(Math.round( Math.random() * 10000 ));
     

      //animate numbers with class .animate-number with data-value attribute
      $(".animate-number").each(function() {
        var value = $(this).data('value');
        var duration = $(this).data('animation-duration');

        $(this).animateNumbers(value, true, duration, "linear");
      });

      //animate progress bars
      $('.animate-progress-bar').each(function(){
        var progress =  $(this).data('percentage');

        $(this).css('width', progress);
      })

      //update instance every 5 sec
      window.setInterval(function() {

        //animate numbers on cards
         $("#users-count").animateNumbers(document.getElementById('todaycount').value);
	  $("#total-count").animateNumbers(document.getElementById('tisonline').value);
	   $("#visits-count").animateNumbers(document.getElementById('todaycount_vi').value);
	   
	     $("#tuser12").animateNumbers(document.getElementById('toaluser').value);
	  $("#lastmonth").animateNumbers(document.getElementById('lasstmonthuser').value);
	   $("#tvisits").animateNumbers(document.getElementById('toaluser_vi').value);
	   
	   $("#vislastmonth").animateNumbers(document.getElementById('lasstmonthuser_vi').value);
	  $("#tact").animateNumbers(document.getElementById('acuser').value);
	   $("#tinact").animateNumbers(document.getElementById('inacuser').value);
	    $("#total-voip").animateNumbers(document.getElementById('tvopic').value);
		$("#divtvuser").animateNumbers(document.getElementById('tvuser').value);
		$("#divtvvist").animateNumbers(document.getElementById('tvvist').value);
	   
        $( '#orders-count' ).animateNumbers( Math.round( Math.random() * 100 ) );
        $( '#sales-count' ).animateNumbers( Math.round( Math.random() * 10000 ) );

        //refresh every pie chart
        $('.easypiechart').each(function() {
          $(this).data('easyPieChart').update(Math.floor(100*Math.random()));
        });

      }, 5000*2);
      
      //server load rickshaw chart
      var graph;

      var seriesData = [ [], []];
      var random = new Rickshaw.Fixtures.RandomData(50);

      for (var i = 0; i < 50; i++) {
        random.addData(seriesData);
      }

      graph = new Rickshaw.Graph( {
        element: document.querySelector("#serverload-chart"),
        height: 150,
        renderer: 'area',
        series: [
          {
            data: seriesData[0],
            color: '#1693A5',
            name:'File Server'
          },{
            data: seriesData[1],
            color: '#e2e2e2',
            name:'Mail Server'
          }
        ]
      } );

      var hoverDetail = new Rickshaw.Graph.HoverDetail( {
        graph: graph,
      });

      setInterval( function() {
        random.removeData(seriesData);
        random.addData(seriesData);
        graph.update();

      },1000);

      //sparkline charts
      $('#projectbar1').sparkline('html', {type: 'bar', barColor: '#22beef', barWidth: 4, height: 20});
      $('#projectbar2').sparkline('html', {type: 'bar', barColor: '#cd97eb', barWidth: 4, height: 20});
      $('#projectbar3').sparkline('html', {type: 'bar', barColor: '#a2d200', barWidth: 4, height: 20});
      $('#projectbar4').sparkline('html', {type: 'bar', barColor: '#ffc100', barWidth: 4, height: 20});
      $('#projectbar5').sparkline('html', {type: 'bar', barColor: '#ff4a43', barWidth: 4, height: 20});
      $('#projectbar6').sparkline('html', {type: 'bar', barColor: '#a2d200', barWidth: 4, height: 20});

      //todo's
       $('#todolist li label').click(function() {
        $(this).toggleClass('done');
      });

      //load wysiwyg editor
      $('#quick-message-content').summernote({
        height: 158   //set editable area's height
      });

      //multiselect input
      $(".chosen-select").chosen({disable_search_threshold: 10});

      // Morris donut chart
      Morris.Donut({
        element: 'morris-donut-example',
        data: [
          {label: "Download Sales", value: 12},
          {label: "In-Store Sales", value: 30},
          {label: "Mail-Order Sales", value: 20}
        ],
        colors: ['#00a3d8', '#2fbbe8', '#72cae7']
      });

    })
    
    $('#mainBlockForm').submit(function(event){
     if(!confirm("Are you sure you want to change the main page block?")){
        event.preventDefault();
      }
    });

    </script>