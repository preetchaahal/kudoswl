<style type="text/css" rel="stylesheet">

	/* Center the loader */
	.block-loader{
	  position: absolute;
	  left: 50%;
	  top: 50%;
	  z-index: 1;
	  width: 150px;
	  height: 150px;
	  margin: -75px 0 0 -75px;
	  border: 16px solid #f3f3f3;
	  border-radius: 50%;
	  border-top: 16px solid #3498db;
	  width: 120px;
	  height: 120px;
	  -webkit-animation: spin 2s linear infinite;
	  animation: spin 2s linear infinite;
	}

	@-webkit-keyframes spin {
	  0% { -webkit-transform: rotate(0deg); }
	  100% { -webkit-transform: rotate(360deg); }
	}

	@keyframes spin {
	  0% { transform: rotate(0deg); }
	  100% { transform: rotate(360deg); }
	}



	.simulator .num{
		font-weight: 300;
		font-size: 1.4em;
		margin: 3px;
		min-height: 30px;
		min-width: 30px;
		display: block;
		float: left;
		text-align: center;
		border-radius: 1px;
		background-color: transparent;
	}
	.table{
		min-height: 320px;
	}
	.table ul{
		width: 550px;
		display: block;
		margin: 10px auto;
		padding: 10px;
		border-radius: 5px;
		border: solid 1px rgba(230, 230, 230, 0.7);
	}
	.table ul li{
		display: inline-block;
		list-style: none;
		height: 45px;
		margin-top: -5px;
		max-width: 600px;
	}
	.table ul li .num{
		display: block;
		padding: 10px;
		width: 45px;
		height: 45px;
		font-weight: 800;
	}
	.table ul li:nth-child(3){
		border-bottom: solid 1px rgba(127, 127, 127, 0.3);
	}
	.table ul li .num:nth-child(2n){
		border-right: solid 1px rgba(127, 127, 127, 0.3);
	}
	.table ul li .num:nth-child(5){
		border-right: solid 1px rgba(41, 190, 0, 0.5);
	}
	.table ul li .num:nth-child(10){
		border-right: solid 1px #fff;
	}

	.results>ul>li>a{
		height: 34px;
		padding: 6px 10px;
		font-size: 14px;
		line-height: 1.428571429;
		color: #555555;
		vertical-align: middle;
		background-color: #ffffff;
		background-image: none;
		border: 1px solid #cccccc;
		border-radius: 5px;
		-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		-webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
		transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
		margin: 5px 2px;
	}
	.simulator form .num, .simulator .main-content form .num:visited, .simulator .main-content form .num:active {
		/*border: 1px solid rgba(41, 190, 0, 0.8);*/
	}
	.simulator form .selectedbtn{
		color: rgba(41, 190, 0, 1);
		
	}
	.main-content{
		margin: 0 auto;
	}
	
	@media(max-width: 1000px){
		.simulator .well{
			padding: 20px;
		}
	}
	@media(max-width: 670px){
		.simulator .well{
			padding: 20px;
		}
		.simulator .num{
			min-width: 10px;
			min-height: 10px;
			
		}
		.selectcount h5{
			font-size: 120% !important;
			padding-top: 10px;		
		}
		.selectednums h5{
			padding: 5px;
		}

	}

	@media(max-width: 560px){
		.simulator .num{
			min-width: 10px;
			min-height: 10px;
		}
		.simulator .well{
			padding: 0 !important;
		}
		.selectcount h5{
			font-weight: lighter;
			font-size: 90%;
			padding-top: 10px;		
		}
	}
	@media(max-width: 460px){
		.main-content{
			padding: 2px !important;
		}
		.simulator .num{
			min-width: 10px;
			min-height: 10px;
		}
		.selectcount h5{
			font-size: 80% !important;
			padding-top: 0px;		
		}
		.simulator .well{
			padding: 0 auto !important;
		}
		
	}
	@media(max-width: 400px){
		.main-content{
			padding: 2px !important;
		}
		.simulator .num{
			margin: 0px;
			min-width: 15px;
			min-height: 15px;
		}
		.simulator .well{
			padding: 0 auto !important;
		}
		.selectcount h5{
			font-weight: lighter;
			font-size: 80%;
			padding-top: 10px;		
		}

	}
	.selectNumsBox{
		min-height: 165px;
		background-color: rgba(41, 190, 0, 1);
		padding: 10px 60px;
		overflow: auto;
	}
	.selectNumsBox h4{
		color: #FFF;
		margin: 0 auto;
	}
	.selectNumsBox select{
		color: rgba(26, 26, 26, 1);
		font-size: 14px;
		width: 40px;
		height: 40px;
	}
	.selectNumsBox h4 a{
		color: rgba(255, 255, 255, 0.95);
		text-decoration: underline;
	}
	.selectNumsBox p{
		color: #FFF;
		margin-bottom: 10px;
	}
	.selectednums{
		margin: 0 auto;
		padding: 0 20px;
	}
	.selectednums table{
		width: 50%;
	}
	.numSelected{
		font-weight: 900;
	}
	.selectcount{
		margin-top: 30px;
	}
	.selectcount h5{
		font-weight: bold;
		font-size: 200%;
		padding-top: 10px;
		text-align: center;
	}
	.selectednums table{
		width: 100%; 
		text-align: center;
	}
	.selectednums table,
	.selectednums table tr,
	.selectednums table tr td{
		border: none !important;
	}
	.selectednums table tr td{
		padding: 5px 7px !important;
		margin: 2px;
		background-color: rgba(41, 190, 0, 1) !important;
		display: inline-block;
		color: rgba(255, 255, 255, 0.98);
		font-weight: bold;
		border: solid 2px rgba(255, 255, 255, 0.89) !important;
	}

	.results>ul{
		margin: 0 auto;
		padding: 10px;
	}
	.results ul>li{
		padding: 2px;
	}
	.past-results .result-btn1{
		font-size: 120%;
		font-weight: 800;
	}
	.past-results ul{
		border-radius: 5px;
		padding: 5px;
		border: solid 1px rgba(230, 230, 230, 0.7);
	}
	.past-results hr{
		margin: 15px 5px;
		border-top: 2px solid rgba(0, 0, 0, .1);
	}
	.past-results ul li a:hover{
		background-color: transparent;
	}
	.past-results ul li a{
		border: none !important;
	}
	.past-results ul li.active a,
	.past-results ul li.active a:hover,
	.past-results ul li.active a:focus{
		color: rgba(41, 190, 0, 1);
	}

	.past-results ul .result-btn1,
	.past-results ul .active .result-btn1{
		font-size: 170% !important;
		font-weight: 800 !important;
		
	}
	
	.past-results .result-btn2,
	.past-results .result-btn3,
	.past-results .active .result-btn2,
	.past-results .active .result-btn3{
		font-size: 130% !important;
		font-weight: 800 !important;
	}

	.past-results .result-btn4,
	.past-results .result-btn5,
	.past-results .result-btn6,
	.past-results .active .result-btn4,
	.past-results .active .result-btn5,
	.past-results .active .result-btn6{
		font-size: 100% !important;
		font-weight: 800 !important;
	}
	.past-results ul,
	.past-results ul li{
		display: block !important;
		min-width: 100%;
	}
	.past-results ul li a{
		min-width: 80%;
		margin: 0 auto;
	}
	#mega-stats .nav-tabs > li a{
		border: none;
		background-color: transparent !important;
		font-weight: 600;
	}
	#mega-stats .nav-tabs > li a:hover{
		color: rgba(41, 190, 0, 0.85);
	}
	#mega-stats .nav-tabs > li.active > a, 
	#mega-stats .nav-tabs > li.active > a:hover, 
	#mega-stats .nav-tabs > li.active > a:focus{
		color: rgba(41, 190, 0, 1);
		border: none;
	}
	.results ul>li>a{
		min-width: 140px;
		text-align: center;
		min-height: 60px;
	}
	.form-btns{
		text-align: center;
	}
	.form-btns .action-btn{
		
	}
	.form-btns .action-btn,
	.form-btns .clear-btn{
		background-color: transparent;
		border: solid 2px #FFF;
		font-weight: 600;
	}
	.form-btns button:hover{
		background-color: rgba(36, 168, 0, 1);
	}
	
	.table01-wrap, .table02-wrap, .table03-wrap, .table04-wrap, .table05-wrap, .table06-wrap{
		max-height: 280px !important;
    	overflow: auto;
    }
    .table01-wrap .table tr, .table02-wrap .table tr, .table03-wrap .table tr, .table04-wrap
    .table tr, .table05-wrap .table tr, .table06-wrap .table tr{
    	border-bottom: 2px solid #eeeeee;
    }
    /* Hiding results div default */
    .results{
    	display: none;
    }
    .results .title-box{
    }
    .results .tab-content{
    	margin-bottom: 50px;
    }
    .mega-top .frame{
    	padding: 30px;
    }
    .lotto-title-mega{
		background-color: transparent;
		color: #11584A;
		padding: 20px;
	}
    .lotto-intro{
    	padding: 40px;
    	background-color: #7FC9A3;
    }
    .mega-top .frame{
    	margin-bottom: 15px;
    }
    .mega-top .frame p{
    	margin-bottom: 5px;
    	font-weight: 500;
    }
    #mega-stats{
    	margin-top: 20px;
    }
    .mega-stats table tr td{
    	font-size: 120%;
    }
    .mega-stats table{
    	background-color: #E6E6E6;
    	border-radius: 5px;
    }
    .mega-stats table tr td .num{
    	padding: 5px 10px;
    	border-radius: 1px;
    	display: inline-block;
    	background-color: rgba(255, 255, 255, 1);
    	color: rgba(41, 190, 0, 1);
    	border: solid 1px rgba(41, 190, 0, 1);
    	font-weight: 800;
    }
    .mega-stats table tr td .drawnTimes{
    	padding: 10px;
    	margin-top: 5px;
    	display: inline-block;
    	font-weight: 600;
    	color: rgba(0, 0, 0, 0.7);
    }
    .highlighted{
		padding: 5px;
		background-color: rgba(41, 168, 0, 1);
		color: white;    	
    }
    .no-highlighted{
		padding: 5px;
		border: solid 1px rgba(41, 168, 0, 1);    	
    }
    .buyPro{
    	display: block;
    	border: solid 1px rgba(193, 8, 65, 1);
    	text-align: center;
    	padding: 10px;
    	font-weight: 700;
    	color: rgba(254, 179, 64, 1);
    	border-radius: 5px;
    }
    .bg-error, .bg-danger {
    	background: #29a800 !important;
	}
	@media (max-width: 460px){
		.main-content {
	    	padding: 5px 20px !important;
		}
	}
	@media (max-width: 768px){
		.selectNumsBox{
			padding: 10px !important;
		}
	}
</style>
<div class="container">
	<div class="col-xs-4">
		<img class=" img-responsive" src="{{ url() }}/images/lotto/megasena-logo.png">
	</div>
	<div class="col-xs-8">
		<h1 class="lotto-title-mega" >Mega-Sena</h1>
	</div>
	
</div><!-- ///container -->
<div class="container-fluid">
	<div class="full-width-box">
		<div class="fwb-bg fwb-blur" data-blur-image="{{ url() }}/images/lotto/mega-bg-1.png" data-blur-amount="0.8">
		<div class="overlay"></div>
		</div>    
		<div class="container mega-top">
			
			<div class="col-md-5">
				
				<div class="row frame frame-border frame-padding">
					<div class="title-box">
						<h2 class="title">Try your luck with Mega-Sena</h2>
					</div>
					<div class="container">
					<h6>Choose 6-15 Numbers<br>Out of 60 available numbers<br>And click START to check out the results.</h6>
					<p><a href="#aboutMegasena" data-scroll>Want to know more about mega-sena?</a></p>
					<p>Note: This is a Random Generator, For our <b>Pro Generator</b><br>Please <a href="{{ url() }}/login.php">login or create a free account</a></p>
					<h6><a <?php if( $loggedin != null ) { ?>2 data-toggle="tooltip" title="Please register or login to view megasena statistics!" <?php } ?><?php if(isset($loggedInUserId)) { ?> data-scroll href="#mega-stats" <?php } ?>>View Mega-Sena Statistics</a></h6>
					</div>
				</div><!-- ///frame- -->

				<div class="row  frame frame-border frame-padding">
					<div class="title-box">
						<h2 class="title">Go PRO with Mega-sena Pro Generator!</h2>
					</div>
					<p>Buy site credits to access the Pro Generator</p>
					<a href="#" class="btn btn-md btn-info">Buy Credits</a>
				</div>

			</div>
			<div class="col-md-6 col-md-offset-1 next-draw">
			
				<div class="row">
					
					<div class="load col-xs-12 col-md-6 frame frame-padding frame-border ">
							<div class="title-box">
								<h5f class="title">Next Lotto</h5>
							</div>	
							<p class="jackpot-amt"></p>
							<p class="jackpot-date"></p>
					</div>
					<div class="col-xs-12 col-md-5 col-md-offset-1 frame frame-padding frame-border">
							<div class="title-box">
								<h5 class="title">Previous Lotto</h5>
							</div>
							<p class="jackpot-nums"></p>
							<p class="jackpot-amt"></p>
							<p class="jackpot-date"></p>
					</div>
												
				</div><!-- //row frame -->
				<div class="row previous-draw">
					
					<div class="col-xs-12 col-md-6 frame frame-padding frame-border">
						<div class="title-box">
						  <h2 class="title">Total amount the users have won using the generator.</h2>
						</div>
						<?php
							// $megaWonAmt = $powerWonAmt=$euroWonAmt=0;
							// //fetching site winners
							// $qWinners = $obj_Common->get_query("lotto_cat = 'megasena' AND checked = '1' AND winner>3","users_lotto","id,jackpot");
							// $megaWinnersCont=mysql_num_rows($qWinners);
							
							// while ($row = mysql_fetch_assoc($qWinners)) {
							// 	$megaWonAmt += intval( str_replace(',','', $row['jackpot']) ); 
							// }
							

							// $qWinners = $obj_Common->get_query("lotto_cat = 'euromillions'","users_lotto","id,jackpot");
							// $euroWinnersCont = mysql_num_rows($qWinners);
							// while ($row = mysql_fetch_assoc($qWinners)) {
							// 	$euroWonAmt += intval( str_replace(',','', $row['jackpot']) );
							// }

							// $qWinners = $obj_Common->get_query("lotto_cat = 'powerball'","users_lotto","id,jackpot");
							// $powerWinnersCont = mysql_num_rows($qWinners);
							// while ($row = mysql_fetch_assoc($qWinners)) {
							// 	$powerWonAmt += intval( str_replace(',','', $row['jackpot']) ); 
							// }

						?>
						<div class="progress progress-striped active" data-appear-progress-animation="100%">
						  <div class="progress-bar progress-bar-success">Mega Sena R$<?php echo number_format($mega_winners['totalAmountWon']); ?></div>
						</div>
						
						<div class="progress progress-striped active" data-appear-progress-animation="100%">
						  <div class="progress-bar progress-bar-info">Euro Millions €<?php echo number_format($euro_winners['totalAmountWon']); ?></div>
						</div>
						
						<div class="progress progress-striped active" data-appear-progress-animation="100%">
						  <div class="progress-bar progress-bar-danger ">Power Ball $<?php echo number_format($power_winners['totalAmountWon']); ?></div>
						</div>
					</div><!-- //col-xs-6 -->

					<div class="col-xs-12 col-sm-5 col-sm-offset-1 frame frame-padding frame-border">
						<div class="title-box">
						  <h2 class="title">Total lotto users who won using this website</h2>
						</div>
						<div class="progress progress-striped active" data-appear-progress-animation="100%">
						  <div class="progress-bar progress-bar-success">Mega Sena <?php echo $mega_winners['totalWinners']; ?></div>
						</div>
						
						<div class="progress progress-striped active" data-appear-progress-animation="100%">
						  <div class="progress-bar progress-bar-info">Euro Millions <?php echo $euro_winners['totalWinners']; ?></div>
						</div>
						
						<div class="progress progress-striped active" data-appear-progress-animation="100%">
						  <div class="progress-bar progress-bar-danger ">Power Ball <?php echo $power_winners['totalWinners']; ?></div>
						</div>
					</div><!-- //col-xs-6 -->
					
				
				</div><!-- //row previous-draw -->
			
			</div><!-- ///next-draw -->

		</div><!-- //container mega-top -->
	
	</div><!-- //full-width-box -->
</div><!-- //lotto-intro -->
<section id="main" class="container">
	
	<div class="container">
		<div class="row simulator main-content">
			
			<div class="col-xs-12 col-md-7">
				<div class="title-box">
					<h1 class="title">Mega-Sena Simulator:: Give it a try!</h1>
				</div>
				
				<form method="post" onsubmit="return checkLottery()" action="/" >
				<div class="col-xs-12 selectNumsBox">
					<h4 class="text-center">Select your numbers below or select <select><?php for($i=6; $i<=15; $i++) echo "<option value=".$i.">".$i."</option>"; ?></select> and click <a href="#" class="genRandomNumsBtn">here</a> for random numbers</h4>
					<p class="text-center">Numbers selected #<span class="numSelected shadow">0</span></p>
					<div class="selectednums text-center col-sm-8">
						<table class="">
		  					<tr></tr>
		  				</table>
		  			</div>
					<div class="form-btns col-sm-14 text-center">
						<button type="submit" disabled class="action-btn btn btn-sm"  name="submit">START</button>
						<button type="button" name="clear" class="btn btn-sm clear-btn">CLEAR</button>
					</div>
				</div><!-- ///col-xs-12 -->
				
				<div class="clearfix"></div>
				<div class="table table-responsive">			
					<ul>
						<li>	
						<?php 
							echo "<input class='num' type='button' value='60' />";
							for($i=1; $i<=9; $i++)
							{
								echo "<input class='num' type='button' value='0".$i."' />";
							}
						?>
						</li>

						<li>
						<?php 
							for($i=10; $i<=19; $i++)
								echo "<input class='num' type='button' value='".$i."'  />";
						?>
						</li>
						<li>
						<?php 
							for($i=20; $i<=29; $i++)
								echo "<input class='num' type='button' value='".$i."' />";
						?>
						</li>
						<li>
						<?php 
							for($i=30; $i<=39; $i++)
								echo "<input class='num' type='button' value='".$i."' />";
						?>
						</li>
						<li>
						<?php 
							for($i=40; $i<=49; $i++)
								echo "<input class='num' type='button' value='".$i."'  />";
						?>
						</li>
						<li>
						<?php 
							for($i=50; $i<=59; $i++)
								echo "<input class='num' type='button' value='".$i."' />";
						?>
						</li>
					</ul><!-- //colxs-12 -->
				</div><!-- //table-responsive -->
				
				
				</form>

			</div><!-- ///col-xs-12 -->
			<div class="col-xs-12 col-md-offset-1 col-md-4 past-results">
				<div class="title-box">
					<h1 class="title">Past Results</h1>
				</div>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation"><a class="result-btn1" href="#point06" aria-controls="point06" role="tab" data-toggle="tab">06 Points (Results #<span class="point06-num">0</span>)</a></li>
					<div class="clearfix"></div><hr>
					<li role="presentation"><a class="result-btn2" href="#point05" aria-controls="point05" role="tab" data-toggle="tab">05 Points (Results #<span class="point05-num">0</span>)</a></li>
					
					<li role="presentation"><a class="result-btn3" href="#point04" aria-controls="point04" role="tab" data-toggle="tab">04 Points (Results #<span class="point04-num">0</span>)</a></li>
					<div class="clearfix"></div><hr>

					<li role="presentation"><a class="result-btn4" href="#point03" aria-controls="point03" role="tab" data-toggle="tab">03 Points (Results #<span class="point03-num">0</span>)</a></li>
					
					<li role="presentation"><a class="result-btn5" href="#point02" aria-controls="point02" role="tab" data-toggle="tab">02 Points (Results #<span class="point02-num">0</span>)</a></li>
					<li role="presentation" class="active"><a class="result-btn6" href="#point01" aria-controls="point01" role="tab" data-toggle="tab">01 Points (Results #<span class="point01-num">0</span>)</a>

					</li>
					
				</ul>
			</div><!-- //col-xs-12 col-md-5 -->				
			
		</div><!-- //row simulator -->
		<div class="row result-block">
	
			<div class="col-xs-12 results">
				<div class="title-box">
					<h4 class="title">Prize(s) Found</h4>
				</div>

					<!-- Tab panes -->
				<div class="tab-content">
					<div style="clear: both;"></div>
					<div role="tabpanel" class="tab-pane active" id="point01">

						<section class="tile">

						   
						  <!--//tile body-->
						  <div style="clear: both"></div>										
						  <div class="tile-body table01-wrap nopadding">
						                    
						    <table class="table table01 table-bordered table-hover table-striped">
						     
						      <thead>
						        <tr>
						          <th>Draw Date</th>
						          <th>Winning Score</th>
						          <th>Points</th>
						          <th>Jackpot R($)</th>
						        </tr>
						      </thead>
						      <tbody></tbody>
						    
						    </table>
						 
						  </div><!-- // tile-body --> 
						</section>
						  <!--// /tile body -->
						 
					</div><!-- ////tab-pane -->

					<div role="tabpanel" class="tab-pane" id="point02">
					
						<section class="tile">

						  <!--//tile body-->
						  <div class="tile-body">
						    
						  </div><!--- // tile body -->

						  <div class="tile-body table02-wrap nopadding">
						                    
						    <table class="table table02 table-bordered table-hover table-striped">
						     
						      <thead>
						        <tr>
						          <th>Draw Date</th>
						          <th>Winning Score</th>
						          <th>Points</th>
						          <th>Jackpot R($)</th>
						        </tr>
						      </thead>
						      <tbody></tbody>
						    
						    </table>
						 
						  </div><!-- // tile-body --> 
						</section>
						  <!--// /tile body -->
					</div><!-- ///tab-pane -->
					<div role="tabpanel" class="tab-pane" id="point03">
						
						<section class="tile">
						  <div class="tile-body table03-wrap nopadding">
						                    
						    <table class="table table03 table-bordered table-hover table-striped">
						     
						      <thead>
						        <tr>
						          <th>Draw Date</th>
						          <th>Winning Score</th>
						          <th>Points</th>
						          <th>Jackpot R($)</th>
						        </tr>
						      </thead>
						      <tbody></tbody>
						    
						    </table>
						 
						  </div><!-- // tile-body --> 
						</section>
						  <!--// /tile body -->

					</div><!-- ///tab-pane -->							
					<div role="tabpanel" class="tab-pane" id="point04">
						
						<section class="tile">

						  <div class="tile-body table04-wrap nopadding">
						                    
						    <table class="table table04 table-bordered table-hover table-striped">
						     
						      <thead>
						        <tr>
						          <th>Draw Date</th>
						          <th>Winning Score</th>
						          <th>Points</th>
						          <th>Jackpot R($)</th>
						        </tr>
						      </thead>
						      <tbody></tbody>
						    
						    </table>
						 
						  </div><!-- // tile-body --> 
						</section>
						  <!--// /tile body -->

					</div><!-- ///tab-pane -->
					<div role="tabpanel" class="tab-pane" id="point05">
					
						<section class="tile">

						  <div class="tile-body table05-wrap nopadding">
						                    
						    <table class="table table05 table-bordered table-hover table-striped">
						     
						      <thead>
						        <tr>
						          <th>Draw Date</th>
						          <th>Winning Score</th>
						          <th>Points</th>
						          <th>Jackpot R($)</th>
						        </tr>
						      </thead>
						      <tbody></tbody>
						    
						    </table>
						 
						  </div><!-- // tile-body --> 
						</section>
						  <!--// /tile body -->
					</div><!-- ///tab-pane -->							
					<div role="tabpanel" class="tab-pane" id="point06">
					
						<section class="tile">
						 
						  <div class="tile-body table06-wrap nopadding">
						                    
						    <table class="table table06 table-bordered table-hover table-striped">
						     
						      <thead>
						        <tr>
						          <th>Draw Date</th>
						          <th>Winning Score</th>
						          <th>Points</th>
						          <th>Jackpot R($)</th>
						        </tr>
						      </thead>
						      <tbody></tbody>
						    
						    </table>
						 
						  </div><!-- // tile-body --> 
						</section>
						  <!--// /tile body -->

					</div><!-- ///tab-pane -->

				</div><!-- ///tab-content -->

			</div><!-- ///results -->

		</div><!-- ///result-block -->

	</div><!-- ///container -->	

	<!-- ////simulator -->
	<!-- //lotto stats -->
	<?php if( $loggedin != null ) {?>
	<div class="container" id="mega-stats">

		<div class="bottom-padding col-xs-12">
			<div class="title-box">
			  <h2 class="title">Mega-Sena Stats</h2>
			</div>
			
			<div class="tabs">
			  <ul class="nav nav-tabs">
				<li class="active">
				  <a href="#mostCommon" data-toggle="tab">Most Common Numbers</a>
				</li>
				<li>
				  <a href="#leastCommon" data-toggle="tab">Least Common Numbers</a>
				</li>
				<li>
				  <a href="#mostOverdue" data-toggle="tab">Most Overdue Numbers</a>
				</li>
				<li>
				  <a href="#mostCommonPairs" data-toggle="tab">Most Common Pairs</a>
				</li>
				<li>
				  <a href="#mostCommonTriplets" data-toggle="tab">Most Common Triplets</a>
				</li>
				<li>
				  <a href="#mostCommonQuad" data-toggle="tab">Most Common Quadruplets</a>
				</li>
			  </ul>
			  <div class="tab-content">
				
				<div class="tab-pane active fade in mega-stats" id="mostCommon">
					<table class="table">
						
							<?php 
								// $rs = $obj_Common->get_query("number != '0'","mega_sena_common_nums", "*");
								// $i=0;
								//while($row = mysql_fetch_assoc($rs)){
								foreach( $mega_stats['most_common_nums'] as $value ){
									if($i% 5 == 0 )
										echo "<tr>";
									echo "<td>";
									echo "<span class='num'>".$value->number."</span><br>";
									echo "<span class='drawnTimes'>Drawn ".$value->drawn_time." times</span>";
									echo "</td>";
									if(($i+1) % 5 == 0 && $i>0)
										echo "</tr>";
									$i=$i+1;
								}
							?>
							
						
					</table>
				</div><!-- //#mostCommon -->
				
				<div class="tab-pane fade in mega-stats" id="leastCommon">
				  <table class="table">
						
							<?php 
								// $rs = $obj_Common->get_query("number != '0'","mega_sena_least_common_nums", "*");
								// $i=0;
								//while($row = mysql_fetch_assoc($rs)){
								foreach( $mega_stats['least_common_nums'] as $value ){
									if($i% 5 == 0 )
										echo "<tr>";
									echo "<td>";
									echo "<span class='num'>".$value->number."</span><br>";
									echo "<span class='drawnTimes'>Drawn ".$value->drawn_time." times</span>";
									echo "</td>";
									if(($i+1) % 5 == 0 && $i>0)
										echo "</tr>";
									$i=$i+1;
								}
							?>
							
					</table>
				</div>
				
				<div class="tab-pane fade in mega-stats" id="mostOverdue">
				  	<table class="table">
						
							<?php 
								// $rs = $obj_Common->get_query("number != '0'","mega_sena_most_overdue", "*");
								// $i=0;
								// while($row = mysql_fetch_assoc($rs)){
								foreach( $mega_stats['most_common_nums'] as $value ){
									if($i% 5 == 0 )
										echo "<tr>";
									echo "<td>";
									echo "<span class='num'>".$value->number."</span><br>";
									echo "<span class='drawnTimes'>Last drawn<br>".$value->last_drawn." <br>days ago</span>";
									echo "</td>";
									if(($i+1) % 5 == 0 && $i>0)
										echo "</tr>";
									$i=$i+1;
								}
							?>
							
					</table>
				</div>

				<div class="tab-pane fade in mega-stats" id="mostCommonPairs">
				  	<table class="table">
						
							<?php 
								// $rs = $obj_Common->get_query("nums != '0'","mega_sena_most_common_pairs", "*");
								// $i=0;
								// while($row = mysql_fetch_assoc($rs)){
								foreach( $mega_stats['most_common_pairs'] as $value ){
									$nums[] = array();
									$nums = explode(',', $value->number);
									if($i% 5 == 0 )
										echo "<tr>";
									echo "<td>";
									echo "<span class='num'>".$nums[0]."</span><span class='num'>".$nums[1]."</span><br>";
									echo "<span class='drawnTimes'>Drawn ".$value->frequency." times</span>";
									echo "</td>";
									if(($i+1) % 5 == 0 && $i>0)
										echo "</tr>";
									$i=$i+1;
								}
							?>
							
					</table>
				</div>

				<div class="tab-pane fade in mega-stats" id="mostCommonTriplets">
				  	<table class="table">
						
							<?php 
								// $rs = $obj_Common->get_query("number != '0'","mega_sena_most_common_triplets", "*");
								// $i=0;
								// while($row = mysql_fetch_assoc($rs)){
								foreach( $mega_stats['most_common_triplets'] as $value ){
									$nums[] = array();
									$nums = explode(',', $value->number);
									if($i% 5 == 0 )
										echo "<tr>";
									echo "<td>";
									echo "<span class='num'>".$nums[0]."</span><span class='num'>".$nums[1]."</span><span class='num'>".$nums[2]."</span><br>";
									echo "<span class='drawnTimes'>Drawn ".$value->frequency." times</span>";
									echo "</td>";
									if(($i+1) % 5 == 0 && $i>0)
										echo "</tr>";
									$i=$i+1;
								}
							?>
							
					</table>
				</div>

				<div class="tab-pane fade in mega-stats" id="mostCommonQuad">
				  	<table class="table">
						
							<?php 
								// $rs = $obj_Common->get_query("number != '0'","mega_sena_most_common_quadruplets", "*");
								// $i=0;
								// while($row = mysql_fetch_assoc($rs)){
								foreach( $mega_stats['most_common_quadruplets'] as $value ){
									$nums[] = array();
										$nums = explode(',', $value->number);
									if($i% 5 == 0 )
										echo "<tr>";
									echo "<td>";
									echo "<span class='num'>".$nums[0]."</span><span class='num'>".$nums[1]."</span><span class='num'>".$nums[2]."</span><span class='num'>".$nums[3]."</span><br>";
									echo "<span class='drawnTimes'>Drawn ".$value->frequency." times</span>";
									echo "</td>";
									if(($i+1) % 5 == 0 && $i>0)
										echo "</tr>";
									$i=$i+1;
								}
							?>
							
					</table>
				</div>
			  
			  </div>
			</div>
		  </div>

	</div><!-- //container mega-stats -->
	<?php } ?>
	<div class="clearfix" style="margin-top: 30px;"></div>
	<div class="container">
		<div class="full-width-box padding">
			<div class="fwb-bg bg-error"></div>
			<div class="container" id="aboutMegasena">
				
					
					<div class="content-box white col-sm-6 col-md-6">
						<h2 class="title light">About Mega-Sena</h2>
						<p class="description">Launched in Brazil in March 1996, Mega Sena is one of South America’s largest lottery games, offering players the chance to win millions of reals twice a week. Operated by Caixa Econômica Federal, one of the biggest banks in Brazil, Mega Sena has seen its jackpot reach nine figures on several occasions. The largest Mega Sena jackpot on record was worth R$263.2 million and was split between four winners on Wednesday 31st December 2014 as part of the Mega da Virada draw. The largest Mega Sena prize won a by a single ticket holder was scooped on Wednesday 25th November 2015 and was worth R$205.3 million.</p>
					</div><!-- //content-box -->
					<div class="images-box col-sm-6 col-md-6">
						<img src="{{ url() }}/images/lotto/mega-bg-1.png" class="img-responsive img-thumbnail">
					</div><!-- //image-box -->

				
			</div><!-- //container aboutMegasena -->
		</div><!-- //ful-width-box -->
	</div>
</section>
<script language="javascript" src="{{ url() }}/js/admin/plugins/flot/jquery.flot.min.js"></script>	
<script language="javascript" src="{{ url() }}/js/admin/plugins/graphtable/jquery.graphTable-0.3.js"></script>

<script src="{{ url() }}/js/admin/plugins/rickshaw/raphael-min.js"></script>					
<script language="javascript" src="{{ url() }}/js/admin/plugins/morris/morris.min.js"></script>	<script type="text/javascript" src="{{ url() }}/js/flipclock.min.js"></script>
<script src="{{ url() }}/js/moment.js"></script>
<script src="{{ url() }}/js/moment-timezone.js"></script>	
<script language="javascript">	

/**
	 * Returns a random number between min (inclusive) and max (exclusive)
 */
	function getRandomArbitrary(min, max) {
	    return Math.floor(Math.random() * (max - min) + min);
	}

	function checkLottery(){
		var flag = countNumbersSelected();
		if(flag > 0)
			return true;
			//console.log("between 6 and 15 ")
		else
			return false;
			//console.log("Less than 6");
	}
	
	function countNumbersSelected(){
		return($('.selectedbtn').length);
	}

	function clearPreviousLotto(){
		$('.simulator .num').removeClass('selectedbtn');
			btnsSelected = 0;
			$('.numSelected').text(btnsSelected);
			ballSelectedArray.length=0;
			//remove all data from the results when clear button clicked
			$('#point01 section .table tbody').html('');
			$('#point02 section .table tbody').html('');
			$('#point03 section .table tbody').html('');
			$('#point04 section .table tbody').html('');
			$('#point05 section .table tbody').html('');
			$('#point06 section .table tbody').html('');
			$('.point01-num').text("0");
			$('.point02-num').text("0");
			$('.point03-num').text("0");
			$('.point04-num').text("0");
			$('.point05-num').text("0");
			$('.point06-num').text("0");
			//remove the selected numbers shown
			$('.selectednums table tr').empty();
			$('.results').hide();
			//disable action btn
			$('.action-btn').attr('disabled', 'disabled');
			$('.past-results ul li a').each(function(){
				$(this).removeAttr("data-scroll");
			});
	}

	var ballSelectedArray = [];//ball selected array stores the 
	//list of balls selected, the value of buttons with class selectedbtn
	$(document).ready(function(){
		
		$("body").tooltip({ selector: '[data-toggle=tooltip]' });

		$.getJSON("<?php echo url(); ?>/lotto/json/mega-sena-upcoming-draw-archive.json", function(data){
	    		var topElem = data.length-1;

	    		$('.next-draw .row .frame').eq(0).find('.jackpot-amt').html(data[topElem]['Jackpot']);
	    		
	    		data[topElem]['Date'] += ' UTC -3';
	    		var testDate = new Date(data[topElem]['Date']);
	    		testDate.setMinutes(testDate.getMinutes()+(1230) );

	    		var momentDate = moment(testDate).format('YYYY/MM/DD HH:mm:ss');
	    		$('.next-draw .row .frame').eq(0).find('.jackpot-date').html(moment(testDate).format('ddd DD MMMM YYYY'));
	    		
	    });

	    $.getJSON("<?php echo url(); ?>/lotto/json/mega-sena-archive.json", function(data){
	    		var topElem = data.length-1;
	    		$('.next-draw .row .frame').eq(1).find('.jackpot-nums').html(data[topElem]['B1']+'-'+data[topElem]['B2']+'-'+data[topElem]['B3']+'-'+data[topElem]['B4']+'-'+data[topElem]['B5']+'-'+data[topElem]['B6']);
	    		$('.next-draw .row .frame').eq(1).find('.jackpot-amt').html('R$ '+data[topElem]['Jackpot']);
	    		//$('.next-draw .row .frame').eq(1).find('.jackpot-date').html(data[topElem]['Date']);
	    		 
	    		var currDate = data[topElem]['Date'];
	    		currDate += ' UTC -3';
				var testDate = new Date(currDate);
	    		//testDate.setHours(testDate.getHours()+21);
				testDate.setMinutes(testDate.getMinutes()+(1230) );
				//testDate.setSeconds(testDate.getSeconds()+20);

				var momentDate = moment(testDate).format('YYYY/MM/DD HH:mm:ss');		
			
	    		$('.next-draw .row .frame .jackpot-date').eq(1).html(moment(testDate).format('ddd DD MMMM YYYY'));
	    });

		var btnsSelected=0;

		//if random generator is pressed
		$('.genRandomNumsBtn').on('click', function(e){
			e.preventDefault();
			//clearing the previously generated numbers
			clearPreviousLotto();

			//$('form .table').addClass('block-loader');
			setTimeout(function(){

				var numsToGenerate = $('.selectNumsBox select option:selected').val();
				//console.log("Option selected="+ numsToGenerate);
				var randNums = [];
				var genNums = [];
				randNums[0] = getRandomArbitrary(1, 61);
				genNums[0] = randNums[0];
				for (var i=1; i<numsToGenerate; i++)
				{
					do{
						randNums[i] = getRandomArbitrary(1, 61);
					}while( $.inArray(randNums[i], genNums) > -1 )
					
					genNums[i] = randNums[i];

				}
				
				//show random generated numbers at place
				for(var i=0; i<numsToGenerate; i++)
				{
				$('.simulator form .table ul li .num[value='+("0" + randNums[i]).slice(-2) +']').addClass('selectedbtn');
				$('.numSelected').text(numsToGenerate);
				$('.selectednums table tr').append('<td>'+("0" + randNums[i]).slice(-2)+'</td>');
					$('.form-btns .action-btn').removeAttr('disabled');
					btnsSelected=numsToGenerate;
				}
				//$('form .table').removeClass('block-loader');

			}, 5000);
			

		});


		$('.simulator .num').click(function(){

			var numSelectedVal = $(this).val();//this is the number selected by user
			
			if( ($(this).hasClass('selectedbtn')) && btnsSelected<=15 )
			{
				$(this).removeClass('selectedbtn');
				btnsSelected--;
				$('.numSelected').text(btnsSelected);
				$('.selectednums table tr td:contains('+numSelectedVal+')').remove();
			}
			else if(btnsSelected<15)
			{
				$(this).addClass('selectedbtn');
				btnsSelected++;							
				$('.numSelected').text(btnsSelected);
				$('.selectednums table tr').append('<td>'+numSelectedVal+'</td>');
			}
			//disable or enable action btn
			if(btnsSelected >5)
				$('.action-btn').removeAttr('disabled');
			else
				$('.action-btn').attr('disabled', 'disabled');
		});
		$('.clear-btn').click(function(){
			clearPreviousLotto();
		});
	});
	
	

	var combo1=[];
	var combo2=[];
	var combo3=[];
	var combo4=[];
	var combo5=[];
	var combo6=[];
	var results_i=[];

	//variables to count the number of occurences of digits in result
	var num1count,num2count,num3count,num4count,num5count,num6count;

	$('form').submit(function(event)
	{
		event.preventDefault();
		// Get some values from elements on the page:
		
		var ballCount = countNumbersSelected();
		$('#point01 section .table tbody').empty();
		$('#point02 section .table tbody').empty();
		$('#point03 section .table tbody').empty();
		$('#point04 section .table tbody').empty();
		$('#point05 section .table tbody').empty();
		$('#point06 section .table tbody').empty();
		$('.point01-num').empty();
		$('.point02-num').empty();
		$('.point03-num').empty();
		$('.point04-num').empty();
		$('.point05-num').empty();
		$('.point06-num').empty();
		var $form = $( this );
		combo1.length=combo2.length=combo3.length=combo4.length=combo5.length=combo6.length=0;
		//console.log("Ball count="+ballCount);
		if(ballCount < 6)
		{
			alert('Select between 6 and 15 numbers');
		}
		else
		{
			//add scroliing cpability to points btns
			$('.past-results ul li a').each(function(){
				$(this).attr("data-scroll", "");
			});
			$('.results').show();
			

			for(var i=0; i<ballCount; i++)
			{
				ballSelectedArray[i] = parseInt($('.selectedbtn').eq(i).val());
			}

			//searching using json
			//this is working fine to search in json file
			var match1;
			var count;
			$.getJSON("{{ url() }}/lotto/json/mega-sena-archive.json", function(jsonServerData){

				count = 0;
				$.each(jsonServerData, function(key, value){
					count++;
				});

				for(var i=count-1; i>=0; i=i-1)
				{
					match1=0;
			
					if( ($.inArray( jsonServerData[i]["B1"], 
						ballSelectedArray)) >= 0 )
					{
						match1= match1+1;
					}
					if( ($.inArray( jsonServerData[i]["B2"], ballSelectedArray)) >= 0 )
					{
						match1= match1+1;
					}

					if( ($.inArray( jsonServerData[i]["B3"], ballSelectedArray)) >= 0 )
					{
						match1= match1+1;
					}
					if( ($.inArray( jsonServerData[i]["B4"], ballSelectedArray)) >= 0 )
					{
						match1= match1+1;
					}
					if( ($.inArray( jsonServerData[i]["B5"], ballSelectedArray)) >= 0 )
					{
						match1= match1+1;
					}
					if( ($.inArray( jsonServerData[i]["B6"], ballSelectedArray)) >= 0 )
					{
						match1= match1+1;
					}
					if(match1 == 1)
						combo1.push(jsonServerData[i]);
					if(match1==2)
						combo2.push(jsonServerData[i]);
					if(match1==3)
						combo3.push(jsonServerData[i]);
					if(match1==4)	
						combo4.push(jsonServerData[i]);
					if(match1==5)
						combo5.push(jsonServerData[i]);
					if(match1==6)	
						combo6.push(jsonServerData[i]);
				
				
					

				}//for loop ends

			// display output data in table 
			if(combo1.length > 0)
			{
				for(var i=0; i<combo1.length; i++)
				{
					//$('#point01 section .table tbody').append("<tr><td>"+combo1[i]['Date']+"</td><td>"+combo1[i]['B1']+"</span>-"+combo1[i]['B2']+"-"+combo1[i]['B3']+"-"+combo1[i]['B4']+"-"+combo1[i]['B5']+"-"+combo1[i]['B6']+"</td><td>01</td><td>"+combo1[i]['Jackpot']+"</td></tr>");
					var toAppend = '<tr><td>'+combo1[i]["Date"]+'</td><td>';
					if($.inArray(combo1[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo1[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(combo1[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo1[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(combo1[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo1[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(combo1[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo1[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(combo1[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo1[i]['B5']).slice(-2)+"</span>-";
					if($.inArray(combo1[i]['B6'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo1[i]['B6']).slice(-2)+"</span></td><td>01</td><td>"+combo1[i]['Jackpot']+"</td></tr>";
					$('#point01 section .table tbody').append(toAppend);
				}
				$('.point01-num').text(""+(combo1.length));
				
			}
			else
			{	
				$('#point01 section .table tbody').append("<tr><td colspan='4'>No record found! </td></tr>");	
				$('.point01-num').text("0");
			}
			if(combo2.length > 0)
			{
				for(var i=0; i<combo2.length; i++)
				{
					//$('#point02 section .table tbody').append("<tr><td"++">"+combo2[i]['Date']+"</td><td>"+combo2[i]['B1']+"-"+combo2[i]['B2']+"-"+combo2[i]['B3']+"-"+combo2[i]['B4']+"-"+combo2[i]['B5']+"-"+combo2[i]['B6']+"</td><td>02</td><td>"+combo2[i]['Jackpot']+"</td></tr>");
					var toAppend = '<tr><td>'+combo2[i]["Date"]+'</td><td>';
					if($.inArray(combo2[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo2[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(combo2[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo2[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(combo2[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo2[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(combo2[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo2[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(combo2[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo2[i]['B5']).slice(-2)+"</span>-";
					if($.inArray(combo2[i]['B6'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo2[i]['B6']).slice(-2)+"</span></td><td>02</td><td>"+combo2[i]['Jackpot']+"</td></tr>";
					$('#point02 section .table tbody').append(toAppend);
				}
				$('.point02-num').text(""+(combo2.length));
			}
			else
			{
				$('#point02 section .table tbody').append("<tr><td colspan='4'>No record found! </td></tr>");
				$('.point02-num').text("0");
			}

			if(combo3.length > 0)
			{
				for(var i=0; i<combo3.length; i++)
				{
					//$('#point03 section .table tbody').append("<tr><td>"+combo3[i]['Date']+"</td><td>"+combo3[i]['B1']+"-"+combo3[i]['B2']+"-"+combo3[i]['B3']+"-"+combo3[i]['B4']+"-"+combo3[i]['B5']+"-"+combo3[i]['B6']+"</td><td>03</td><td>"+combo3[i]['Jackpot']+"</td></tr>");
					var toAppend = '<tr><td>'+combo3[i]["Date"]+'</td><td>';
					if($.inArray(combo3[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo3[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(combo3[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo3[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(combo3[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo3[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(combo3[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo3[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(combo3[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo3[i]['B5']).slice(-2)+"</span>-";
					if($.inArray(combo3[i]['B6'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo3[i]['B6']).slice(-2)+"</span></td><td>03</td><td>"+combo3[i]['Jackpot']+"</td></tr>";
					$('#point03 section .table tbody').append(toAppend);
				}
				$('.point03-num').text(""+(combo3.length));
			}
			else
			{
				$('#point03 section .table tbody').append("<tr><td colspan='4'>No record found! </td></tr>");
				$('.point03-num').text("0");
			}

			if(combo4.length > 0)
			{
				for(var i=0; i<combo4.length; i++)
				{
					//$('#point04 section .table tbody').append("<tr><td>"+combo4[i]['Date']+"</td><td>"+combo4[i]['B1']+"-"+combo4[i]['B2']+"-"+combo4[i]['B3']+"-"+combo4[i]['B4']+"-"+combo4[i]['B5']+"-"+combo4[i]['B6']+"</td><td>04</td><td>"+combo4[i]['Jackpot']+"</td></tr>");
					var toAppend = '<tr><td>'+combo4[i]["Date"]+'</td><td>';
					if($.inArray(combo4[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo4[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(combo4[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo4[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(combo4[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo4[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(combo4[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo4[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(combo4[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo4[i]['B5']).slice(-2)+"</span>-";
					if($.inArray(combo4[i]['B6'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo4[i]['B6']).slice(-2)+"</span></td><td>04</td><td>"+combo4[i]['Jackpot']+"</td></tr>";
					$('#point04 section .table tbody').append(toAppend);
				}
				$('.point04-num').text(""+(combo4.length));
			}
			else
			{
				$('#point04 section .table tbody').append("<tr><td colspan='4'>No record found! </td></tr>");
				$('.point04-num').text("0");
			}

			if(combo5.length > 0)
			{
				for(var i=0; i<combo5.length; i++)
				{
					//$('#point05 section .table tbody').append("<tr><td>"+combo5[i]['Date']+"</td><td>"+combo5[i]['B1']+"-"+combo5[i]['B2']+"-"+combo5[i]['B3']+"-"+combo5[i]['B4']+"-"+combo5[i]['B5']+"-"+combo5[i]['B6']+"</td><td>05</td><td>"+combo5[i]['Jackpot']+"</td></tr>");
					var toAppend = '<tr><td>'+combo5[i]["Date"]+'</td><td>';
					if($.inArray(combo5[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo5[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(combo5[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo5[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(combo5[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo5[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(combo5[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo5[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(combo5[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo5[i]['B5']).slice(-2)+"</span>-";
					if($.inArray(combo5[i]['B6'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo5[i]['B6']).slice(-2)+"</span></td><td>05</td><td>"+combo5[i]['Jackpot']+"</td></tr>";
					$('#point05 section .table tbody').append(toAppend);
				}
				$('.point05-num').text(""+(combo5.length));
			}
			else
			{
				$('#point05 section .table tbody').append("<tr><td colspan='4'>No record found! </td></tr>");
				$('.point05-num').text("0");
			}

			if(combo6.length > 0)
			{
				for(var i=0; i<combo6.length; i++)
				{
					//$('#point06 section .table tbody').append("<tr><td>"+combo6[i]['Date']+"</td><td>"+combo6[i]['B1']+"-"+combo6[i]['B2']+"-"+combo6[i]['B3']+"-"+combo6[i]['B4']+"-"+combo6[i]['B5']+"-"+combo6[i]['B6']+"</td><td>06</td><td>"+combo6[i]['Jackpot']+"</td></tr>");
					var toAppend = '<tr><td>'+combo6[i]["Date"]+'</td><td>';
					if($.inArray(combo6[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo6[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(combo6[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo6[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(combo6[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo6[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(combo6[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo6[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(combo6[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo6[i]['B5']).slice(-2)+"</span>-";
					if($.inArray(combo6[i]['B6'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + combo6[i]['B6']).slice(-2)+"</span></td><td>06</td><td>"+combo6[i]['Jackpot']+"</td></tr>";
					$('#point06 section .table tbody').append(toAppend);
				}
				$('.point06-num').text(""+(combo6.length));
			}
			else
			{
				$('#point06 section .table tbody').append("<tr><td colspan='4'>No record found! </td></tr>");
				$('.point06-num').text("0");
			}
		});
			

		} ///main else -->
		

	});<!-- //form event -->
	
	// line chart 
</script>
<?php
	//fetching the total winners of lotto using the site
	// $megaWinCount = 0;//number of megasena winners count 
	// $euroWinCount = 0;//number of megasena winners count 
	// $powerWinCount = 0;//number of megasena winners count 

	// global $obj_Common;
	// $query1 = "SELECT DISTINCT(user_id) FROM users_lotto WHERE draw_date != '0' AND lotto_cat = 'megasena'";
	// $result1 = mysql_query($query1);
	// while($row1 = mysql_fetch_row($result1))
	// 	$megaWinCount ++;

	// $query2 = "SELECT DISTINCT(user_id) FROM users_lotto WHERE draw_date != 0 AND lotto_cat = 'euromillions'";
	// $result2 = mysql_query($query2);
	// while($row2 = mysql_fetch_row($result2))
	// 	$euroWinCount ++;

	// $query3 = "SELECT DISTINCT(user_id) FROM users_lotto WHERE draw_date != 0 AND lotto_cat = 'powerball'";
	// $result3 = mysql_query($query3);
	// while($row3 = mysql_fetch_row($result3))
	// 	$powerWinCount ++;
?>
<script type="text/javascript">
	Morris.Donut({
  		element: 'lotto-winners-donut',
	  	data: [
	    	{label: "Mega-sena winners", value: <?php echo $mega_winners['totalWinners']; ?>},
	    	{label: "Euro-millions winners", value: <?php echo $euro_winners['totalWinners']; ?>},
	    	{label: "Power-ball winners", value: <?php echo $power_winners['totalWinners']; ?>}
	  	],
	  	colors: ['#209869', '#FFD41E', '#003399'],
	  	resize: true
	});
</script>

<!-- //fetching site lotto users -->
<script type="text/javascript">
	  $.ajax({
	    type:   "POST",
	     url:   "<?php echo url(); ?>/handlers/lotto-stats-handler.php",
	    data:   {
	        rqst: "totalLottoUsers" 
	    }
	  }).done(function(data){
	  		res = jQuery.parseJSON(data);
	  		Morris.Donut({
		  		element: 'lotto-users-donut',
			  	data: [
			    	{label: "Mega-sena users", value: <?php echo $total_lotto_users['mega']; ?>},
			    	{label: "Euro-millions users", value: <?php echo $total_lotto_users['euro']; ?>res.euro},
			    	{label: "Power-ball users", value: res.power}
			  	],
			  	colors: ['#209869', '#FFD41E', '#003399'],
				resize: true
			});
	  });

	//enable smooth scroll
	smoothScroll.init({
	    selector: '[data-scroll]', // Selector for links (must be a valid CSS selector)
	    //selectorHeader: '[data-scroll-header]', // Selector for fixed headers (must be a valid CSS selector)
	    speed: 1000, // Integer. How fast to complete the scroll in milliseconds
	    easing: 'easeInOutCubic', // Easing pattern to use
	    offset: 100 // Integer. How far to offset the scrolling anchor location in pixels
	    //updateURL: true, // Boolean. If true, update the URL hash on scroll
	    //callback: function ( anchor, toggle ) {} // Function to run after scrolling
	}); 
</script>
<!-- //lotto srcipt ends -->