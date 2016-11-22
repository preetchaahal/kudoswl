<style type="text/css">
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
		.simulator .starnum{
			font-size: 1.4em;
		}
		.simstars{
			padding-left: 0px;
			padding-right: 0px;
			min-height: auto !important;
		}
		.table{
			min-height: 320px;
		}
		.simnum ul{
			display: block;
			margin: 10px auto;
			padding: 10px;
			border-radius: 5px;
			border: solid 1px rgba(230, 230, 230, 0.7);
			width: 540px;
		}

		.simstars ul{
			display: block;
			margin: 10px auto;
			padding: 10px 2px;
			border-radius: 5px;
			border: solid 1px rgba(230, 230, 230, 0.7);
			width: auto;
		}
		@media all and (max-width: 768px){
			.simstars ul{
				width: 540px;
			}
		}
		.simnum ul li{
			display: inline-block;
			list-style: none;
			height: 45px;
			margin-top: -5px;
			max-width: 600px;
		}
		.simstars ul li{
			display: inline-block;
			list-style: none;
			margin-top: -5px;
		}
		.simnum ul li .num{
			display: block;
			padding: 10px;
			width: 45px;
			height: 45px;
			font-weight: 800;
		}
		.simstars ul li .starnum{
			display: inline-block;
			padding: 10px;
			width: 45px;
			height: 45px;
			font-weight: 800;
			background-color: transparent;
		}
		/*.simnum ul li:nth-child(3){
			border-bottom: solid 1px rgba(127, 127, 127, 0.3);
		}*/
		.simnum ul li .num:nth-child(2n){
			border-right: solid 1px rgba(127, 127, 127, 0.3);
		}
		/*.simnum ul li .num:nth-child(5){
			border-right: solid 1px rgba(210, 20, 30, 0.5);
		}*/
		.simnum ul li .num:nth-child(10){
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
			/*border: 1px solid rgba(210, 20, 30, 0.8);*/
		}
		.simulator form .selectedbtn{
			color: rgba(210, 20, 30, 1);
			
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
				font-size: 0.8em;
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
			background-color: rgba(210, 20, 30, 1);
			padding: 10px 60px;
			overflow: auto;
		}
		.selectNumsBox h4{
			color: #FFF;
			margin: 0 auto;
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
			padding: 5px 20px;
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
		.selectednums table,
		.selectedstars table{
			width: 100%; 
			text-align: center;
		}
		.selectednums table,
		.selectednums table tr,
		.selectednums table tr td{
			border: none !important;
		}
		.selectednums table tr td,.selectedstars table tr td,
		.selectedstars table tr td,.selectedstars table tr td{
			padding: 5px 7px !important;
			margin: 2px;
			background-color: rgba(210, 20, 30, 1) !important;
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
			padding: 5px 35px;
		}
		.past-results ul li.active a,
		.past-results ul li.active a:hover,
		.past-results ul li.active a:focus{
			color: rgba(210, 20, 30, 1);
		}

		.past-results ul .result-btn1,
		.past-results ul .active .result-btn1{
			font-size: 140% !important;
			font-weight: 800 !important;
		}
		
		.past-results .result-btn2,
		.past-results .result-btn3,
		.past-results .active .result-btn2,
		.past-results .active .result-btn3{
			font-size: 125% !important;
			font-weight: 800 !important;
		}

		.past-results .result-btn4,
		.past-results .result-btn5,
		.past-results .result-btn6,
		.past-results .result-btn7,
		.past-results .result-btn8,
		.past-results .result-btn9,
		.past-results .active .result-btn4,
		.past-results .active .result-btn5,
		.past-results .active .result-btn6,
		.past-results .active .result-btn7,
		.past-results .active .result-btn8,
		.past-results .active .result-btn9{
			font-size: 105% !important;
			font-weight: 800 !important;
		}
		.past-results .result-btn10,
		.past-results .result-btn11,
		.past-results .result-btn12,
		.past-results .result-btn13,
		.past-results .active .result-btn10,
		.past-results .active .result-btn11,
		.past-results .active .result-btn12,
		.past-results .active .result-btn13{
			font-size: 90% !important;
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
		#power-stats .nav-tabs > li a{
			border: none;
			background-color: transparent !important;
			font-weight: 600;
		}
		#power-stats .nav-tabs > li a:hover{
			color: rgba(210, 20, 30, 0.85);
		}
		#power-stats .nav-tabs > li.active > a, 
		#power-stats .nav-tabs > li.active > a:hover, 
		#power-stats .nav-tabs > li.active > a:focus{
			color: rgba(210, 20, 30, 1);
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
			background-color: rgba(240, 20, 30, 1);
		}
		
		.table01-wrap, .table02-wrap, .table03-wrap, .table04-wrap, .table05-wrap, .table06-wrap,
		.table07-wrap, .table08-wrap, .table09-wrap, .table10-wrap, .table11-wrap, .table12-wrap,
		.table13-wrap{
			max-height: 280px !important;
	    	overflow: auto;
	    }
	    .table01-wrap .table tr, .table02-wrap .table tr, .table03-wrap .table tr, .table04-wrap
	    .table tr, .table05-wrap .table tr, .table06-wrap .table tr,.table07-wrap .table tr, .table08-wrap .table tr, .table09-wrap .table tr, .table10-wrap
	    .table tr, .table11-wrap .table tr, .table12-wrap .table tr, .table13-wrap .table tr{
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
	    .euro-top .frame{
	    	padding: 30px;
	    }
	    .euro-top .frame p{
	    	margin-bottom: 5px;
	    	font-weight: 500;
	    }
	    .lotto-title-power{
			background-color: transparent;
			color: #D2141E;
			padding: 20px;
		}
	    .lotto-intro{
	    	padding: 40px;
	    	background-color: #7FC9A3;
	    }
	    .euro-top .frame{
	    	margin-bottom: 15px;
	    }
	    .euro-top.frame p{
	    	margin-bottom: 5px;
	    	font-weight: 500;
	    }
	    #power-stats{
	    	margin-top: 20px;
	    }
	    .power-stats table tr td{
	    	font-size: 120%;
	    }
	    .power-stats table{
	    	background-color: #E6E6E6;
	    	border-radius: 5px;
	    }
	    .power-stats table tr td .num{
	    	padding: 5px 10px;
	    	border-radius: 1px;
	    	display: inline-block;
	    	background-color: rgba(255, 255, 255, 1);
	    	color: rgba(210, 20, 30, 1);
	    	border: solid 1px rgba(210, 20, 30, 1);
	    	font-weight: 800;
	    }
	    .power-stats table tr td .drawnTimes{
	    	padding: 10px;
	    	margin-top: 5px;
	    	display: inline-block;
	    	font-weight: 600;
	    	color: rgba(0, 0, 0, 0.7);
	    }
	    .highlighted{
			padding: 5px;
			background-color: rgba(210, 20, 30, 1);
			color: white;    	
	    }
	    .no-highlighted{
			padding: 5px;
			border: solid 1px rgba(210, 20, 30, 1);    	
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
		    background: #d2141e !important;
		}
		@media (max-width: 768px){
			.selectNumsBox{
				padding: 10px !important;
			}
		}
</style>

<div class="container">
	<div class="col-xs-4">
		<img class=" img-responsive" src="{{ url() }}/images/lotto/powerball-logo.png">
	</div>
	<div class="col-xs-8">
		<h1 class="lotto-title-power">Power Ball</h1>
	</div>
	
</div>

<div class="container">
	<div class="full-width-box">
		<div class="fwb-bg fwb-blur" data-blur-image="{{ url() }}/images/lotto/powerball-bg.png" data-blur-amount="0.8">
		<div class="overlay"></div>
		</div>    
		<div class="container euro-top">
			
			<div class="col-md-5">
				<div class="row  frame frame-border frame-padding">
					<div class="title-box">
						<h2 class="title">Go PRO with Power-ball Pro Generator!</h2>
					</div>
					<div class="container">
					<h6>Choose 5 Numbers and 2 Star Numbers<br>Out of 50 available Numbers 11 Star Numbers<br>And click START to check out the results.</h6>
					<p><a href="#aboutEuromillions" data-scroll>Want to know more about power-ball?</a></p>
					<p>Note: This is a Random Generator, For our <b>Pro Generator</b><br>Please <a href="{{ url() }}/login">login or create a free account</a></p>
					<h6><a <?php if( $loggedin != null ) { ?> data-toggle="tooltip" title="Please register or login to view megasena statistics!" <?php } ?><?php if(isset($loggedInUserId)) { ?> data-scroll href="#power-stats" <?php } ?>>View Power-ball Statistics</a></h6>
					</div>
				</div>
				<div class="row frame frame-border frame-padding">
					<div class="title-box">
						<h2 class="title">Go PRO with Power-ball Pro Generator!</h2>
					</div>
					<p>Buy site credits to access the Pro Generator</p>
					<a href="#" class="btn btn-md btn-info">Buy Credits</a>
				</div>
			</div>
			<div class="col-md-offset-1 col-md-6">
			
				<div class="row">
					
					<div class="col-sm-5 next-draw frame frame-padding frame-border">
							<div class="title-box">
								<h5 class="title">Next Lotto</h5>
							</div>
							<p class="jackpot-amt"></p>
							<p class="jackpot-date"></p>
					</div>
					<div class="col-sm-offset-1 col-sm-6 frame frame-padding frame-border previous-lotto">
							<div class="title-box">
								<h5 class="title">Previous Lotto</h5>
							</div>	
							<p class="jackpot-nums"></p>
							<p class="jackpot-amt"></p>
							<p class="jackpot-date"></p>
					</div>
					
												
				</div><!-- //row frame -->
				<div class="row">
					
					<div class="col-md-5 frame frame-padding frame-border">
						<div class="title-box">
						  <h2 class="title">Total lotto users who won using this website</h2>
						</div>
						<div class="progress progress-striped active" data-appear-progress-animation="100%">
						  <div class="progress-bar progress-bar-success">Mega Sena 0</div>
						</div>
						
						<div class="progress progress-striped active" data-appear-progress-animation="100%">
						  <div class="progress-bar progress-bar-info">Euro Millions 0</div>
						</div>
						
						<div class="progress progress-striped active" data-appear-progress-animation="100%">
						  <div class="progress-bar progress-bar-danger ">Power Ball 0</div>
						</div>
					</div><!-- //col-xs-6 -->

					<div class="col-sm-offset-1 col-sm-6 frame frame-padding frame-border">
						<div class="title-box">
						  <h2 class="title">Total amount the users have won using the generator</h2>
						</div>
						<div class="progress progress-striped active" data-appear-progress-animation="100%">
						  <div class="progress-bar progress-bar-success">Mega Sena 0</div>
						</div>
						
						<div class="progress progress-striped active" data-appear-progress-animation="100%">
						  <div class="progress-bar progress-bar-info">Euro Millions 0</div>
						</div>
						
						<div class="progress progress-striped active" data-appear-progress-animation="100%">
						  <div class="progress-bar progress-bar-danger ">Power Ball 0</div>
						</div>
					</div><!-- //col-xs-6 -->

				
				</div><!-- //frame -->
			
			</div>

		</div><!-- //container -->
	</div><!-- //full-width-box -->

</div><!-- // //container  lotto-intro -->

<section id="main" class="container">
				
	<!-- simulator -->
	<div class="container">
		<div class="row simulator main-content">
			<div class="col-md-8">
				<div class="title-box">
					<h1 class="title">Power-ball Simulator:: Give it a try!</h1>
				</div>

				<form method="post" >
				<div class="selectNumsBox">
					<h4 class="text-center">Select your numbers below or Click <a href="#" class="genRandomNumsBtn">Here</a> for random numbers</h4>
					<div class="col-sm-6">
						<p class="text-center">Numbers selected #<span class="numSelected shadow">0</span></p>
						<div class="selectednums text-center">
							<table class="">
			  					<tr></tr>
			  				</table>
			  			</div>
			  		</div>
			  		<div class="col-sm-6">
						<p class="text-center">Selected Power Play Numbers</p>
						<div class="selectedstars text-center" >
			  			<table><tr></tr></table>
			  			</div>
			  		</div>

					<div class="form-btns col-xs-12 text-center">
						<button type="submit" disabled class="action-btn btn btn-sm"  name="submit">START</button>
						<button type="button" name="clear" class="btn btn-sm clear-btn">CLEAR</button>
					</div>
				</div><!-- ///col-xs-12 //select-num-box -->
				
				<div class="col-lg-9 col-xs-12">
					<div class="simnum table table-responsive">
						<ul>
						<li>
						<?php 
							for($i=1; $i<=10; $i++)
							{
								if($i<10)
									echo "<input type='button' value='0".$i."' class='num' />";
								else
									echo "<td><input type='button' value='".$i."' class='num' />";
							}
						?>
						</li><!--//li -->
				
						<li>
							<?php 
								for($i=11; $i<=20; $i++)
									echo "<input type='button' value='".$i."' class='num' />";
							?>
						</li><!-- ///li -->
						<li>
							<?php 
								for($i=21; $i<=30; $i++)
									echo "<input type='button' value='".$i."' class='num' />";
							?>
						</li><!-- ///li -->
						<li>
							<?php 
								for($i=31; $i<=40; $i++)
									echo "<input type='button' value='".$i."' class='num' />";
							?>
						</li><!-- ///tr -->
						<li>
							<?php 
								for($i=41; $i<=50; $i++)
									echo "<input type='button' value='".$i."' class='num' />";
							?>
						</li><!-- ///li -->
						<li>
							<?php 
								for($i=51; $i<=60; $i++)
									echo "<input type='button' value='".$i."' class='num' />";
							?>
						</li><!-- ///li -->
						<li>
							<?php 
								for($i=61; $i<=69; $i++)
									echo "<input type='button' value='".$i."' class='num' />";
								echo "<input type='button' value='' class='num' />";
							?>
						</li><!-- ///li -->
						</ul>
					</div>	<!-- //table simnum -->		
				</div><!-- ///col-lg-9 -->
				<div class="col-lg-3 col-xs-12">
					<div class="simstars table table-responsive">
						<ul>		
							<li>
								<?php 
									for($i=1; $i<=26; $i++)
										if($i >= 10)
										{	
											echo "<input type='button' value='".$i."' class='starnum' />";
										}
										else
										{	echo "<input type='button' value='0".$i."' class='starnum' />";
										}

								?>
							</li><!-- // li -->
							
						</ul>
					</div><!-- //table //simstars -->
				</div><!-- //table -->

				</form>
				<div class="clearfix"></div>
			</div><!-- //col-xs-12 col-md-8 -->	
			
			<div class="col-md-offset-1 col-md-3 past-results">
				<div class="title-box">
					<h1 class="title">Past Results</h1>
				</div>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a class="result-btn1" href="#point01" aria-controls="point01" role="tab" data-toggle="tab">5 + powerball <br>(Results #<span class="point01-num">0</span>)</a></li>
					<div class="clearfix"></div><hr>
					<li role="presentation"><a class="result-btn2" href="#point02" aria-controls="point02" role="tab" data-toggle="tab">5 (Results #<span class="point02-num">0</span>)</a></li>
					
					<li role="presentation"><a class="result-btn3" href="#point03" aria-controls="point03" role="tab" data-toggle="tab">4 + powerball (Result(s) #<span class="point03-num">0</span>)</a></li>
					<div class="clearfix"></div><hr>

					<li role="presentation"><a class="result-btn4" href="#point04" aria-controls="point04" role="tab" data-toggle="tab">4 (Results #<span class="point04-num">0</span>)</a></li>
					
					<li role="presentation"><a class="result-btn5" href="#point05" aria-controls="point05" role="tab" data-toggle="tab">3 + powerball (Results #<span class="point05-num">0</span>)</a></li>
					<li role="presentation"><a class="result-btn6" href="#point06" aria-controls="point06" role="tab" data-toggle="tab">3 + powerball (Results #<span class="point06-num">0</span>)</a></li>									
					<li role="presentation"><a class="result-btn7" href="#point07" aria-controls="point07" role="tab" data-toggle="tab">2 + powerball (Results #<span class="point07-num">0</span>)</a>
					<li role="presentation"><a class="result-btn8" href="#point08" aria-controls="point08" role="tab" data-toggle="tab">1 + powerball (Results #<span class="point08-num">0</span>)</a></li>
					<li role="presentation"><a class="result-btn9" href="#point09" aria-controls="point09" role="tab" data-toggle="tab">0 + powerball (Results #<span class="point09-num">0</span>)</a></li>
					
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
					
					<div role="tabpanel" class="tab-pane active" id="point01">

						<section class="tile">

						   
						  <!--//tile body-->
						  <div style="clear: both"></div>										
						  <div class="tile-body table01-wrap nopadding">
						                    
						    <table class="table table01 table-bordered table-hover table-striped">
						     
						      <thead>
						        <tr>
						          <th>Draw Date</th>
						          <th>Winning Numbers</th>
						          <th>Star Numbers</th>
						          <th>Winning Combination</th>
						          <th>Jackpot ($)</th>
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

						  <div class="tile-body table02-wrap nopadding">
						                    
						    <table class="table table02 table-bordered table-hover table-striped">
						     
						      <thead>
						        <tr>
						          <th>Draw Date</th>
						          <th>Winning Numbers</th>
						          <th>Star Numbers</th>
						          <th>Winning Combination</th>
						          <th>Jackpot ($)</th>
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
						          <th>Winning Numbers</th>
						          <th>Star Numbers</th>
						          <th>Winning Combination</th>
						          <th>Jackpot ($)</th>
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
						          <th>Winning Numbers</th>
						          <th>Star Numbers</th>
						          <th>Winning Combination</th>
						          <th>Jackpot ($)</th>
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
							  <!--//tile body-->

						  <div class="tile-body table05-wrap nopadding">
						                    
						    <table class="table table05 table-bordered table-hover table-striped">
						     
						      <thead>
						        <tr>
						          <th>Draw Date</th>
						          <th>Winning Numbers</th>
						          <th>Star Numbers</th>
						          <th>Winning Combination</th>
						          <th>Jackpot ($)</th>
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
						          <th>Winning Numbers</th>
						          <th>Star Numbers</th>
						          <th>Winning Combination</th>
						          <th>Jackpot ($)</th>
						        </tr>
						      </thead>
						      <tbody></tbody>
						    
						    </table>
						 
						  </div><!-- // tile-body --> 
						</section>
						  <!--// /tile body -->

					</div><!-- ///tab-pane -->
					<div role="tabpanel" class="tab-pane" id="point07">
					
						<section class="tile">

						  <div class="tile-body table07-wrap nopadding">
						                    
						    <table class="table table07 table-bordered table-hover table-striped">
						     
						      <thead>
						        <tr>
						          <th>Draw Date</th>
						          <th>Winning Numbers</th>
						          <th>Star Numbers</th>
						          <th>Winning Combination</th>
						          <th>Jackpot ($)</th>
						        </tr>
						      </thead>
						      <tbody></tbody>
						    
						    </table>
						 
						  </div><!-- // tile-body --> 
						</section>
						  <!--// /tile body -->
					</div><!-- ///tab-pane -->
					<div role="tabpanel" class="tab-pane" id="point08">
					
						<section class="tile">

						  <div class="tile-body table08-wrap nopadding">
						                    
						    <table class="table table08 table-bordered table-hover table-striped">
						     
						      <thead>
						        <tr>
						          <th>Draw Date</th>
						          <th>Winning Numbers</th>
						          <th>Star Numbers</th>
						          <th>Winning Combination</th>
						          <th>Jackpot ($)</th>
						        </tr>
						      </thead>
						      <tbody></tbody>
						    
						    </table>
						 
						  </div><!-- // tile-body --> 
						</section>
						  <!--// /tile body -->
					</div><!-- ///tab-pane -->
					<div role="tabpanel" class="tab-pane" id="point09">
					
						<section class="tile">

						  <div class="tile-body table09-wrap nopadding">
						                    
						    <table class="table table09 table-bordered table-hover table-striped">
						     
						      <thead>
						        <tr>
						          <th>Draw Date</th>
						          <th>Winning Numbers</th>
						          <th>Star Numbers</th>
						          <th>Winning Combination</th>
						          <th>Jackpot ($)</th>
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

	<!-- stats -->

	
		<!-- //lotto stats -->
	<?php if( $loggedin != null ) {?>
	<div class="container" id="power-stats">

		<div class="bottom-padding col-xs-12">
			<div class="title-box">
			  <h2 class="title">Power-ball Stats</h2>
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
				
				<div class="tab-pane active fade in power-stats" id="mostCommon">
					<table class="table">
						
							<?php 
								foreach( $power_stats['most_common_nums'] as $value ){
									if($i% 5 == 0 )
										echo "<tr>";
									echo "<td>";
									echo "<span class='num'>".$value->number."</span><br>";
									echo "<span class='drawnTimes'>Drawn ".$value->frequency." times</span>";
									echo "</td>";
									if(($i+1) % 5 == 0 && $i>0)
										echo "</tr>";
									$i=$i+1;
								}
							?>
							
						
					</table>
				</div><!-- //#mostCommon -->
				
				<div class="tab-pane fade in power-stats" id="leastCommon">
				  <table class="table">
						
							<?php 
								// $rs = $obj_Common->get_query("number != '0'","power_ball_least_common_nums", "*");
								// $i=0;
								// while($row = mysql_fetch_assoc($rs)){
								foreach( $power_stats['least_common_nums'] as $value ){
									if($i% 5 == 0 )
										echo "<tr>";
									echo "<td>";
									echo "<span class='num'>".$value->number."</span><br>";
									echo "<span class='drawnTimes'>Drawn ".$value->frequency." times</span>";
									echo "</td>";
									if(($i+1) % 5 == 0 && $i>0)
										echo "</tr>";
									$i=$i+1;
								}
							?>
							
					</table>
				</div>
				
				<div class="tab-pane fade in power-stats" id="mostOverdue">
				  	<table class="table">
						
							<?php 
								// $rs = $obj_Common->get_query("number != '0'","power_ball_most_overdue", "*");
								// $i=0;
								// while($row = mysql_fetch_assoc($rs)){
								foreach( $power_stats['most_overdue_nums'] as $value ){
									if($i% 5 == 0 )
										echo "<tr>";
									echo "<td>";
									echo "<span class='num'>".$value->number."</span><br>";
									echo "<span class='drawnTimes'>Drawn ".$value->last_drawn." times</span>";
									echo "</td>";
									if(($i+1) % 5 == 0 && $i>0)
										echo "</tr>";
									$i=$i+1;
								}
							?>
							
					</table>
				</div>

				<div class="tab-pane fade in power-stats" id="mostCommonPairs">
				  	<table class="table">
						
							<?php 
								// $rs = $obj_Common->get_query("nums != '0'","power_ball_most_common_pairs", "*");
								// $i=0;
								// while($row = mysql_fetch_assoc($rs)){
							foreach( $power_stats['most_common_pairs'] as $value ){
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

				<div class="tab-pane fade in power-stats" id="mostCommonTriplets">
				  	<table class="table">
						
							<?php 
								// $rs = $obj_Common->get_query("number != '0'","power_ball_most_common_triplets", "*");
								// $i=0;
								// while($row = mysql_fetch_assoc($rs)){
								foreach( $power_stats['most_common_triplets'] as $value ){
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

				<div class="tab-pane fade in power-stats" id="mostCommonQuad">
				  	<table class="table">
						
							<?php 
								// $rs = $obj_Common->get_query("number != '0'","power_ball_most_common_quadruplets", "*");
								// $i=0;
								// while($row = mysql_fetch_assoc($rs)){
								foreach( $power_stats['most_common_quadruplets'] as $value ){
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

	</div><!-- //container power-stats --><?php } ?>

	<div class="clearfix" style="margin-top: 30px;"></div>
	<div class="container">
		<div class="full-width-box padding">
			<div class="fwb-bg bg-error"></div>
			<div class="container" id="aboutEuromillions">
				
					
					<div class="content-box white col-sm-6 col-md-6">
						<h2 class="title light">About Power-ball</h2>
						<p class="description">Powerball is an American interstate lottery game played on Wednesday and Saturday evenings at 10.59pm EST. Known for generating huge jackpots that can sometimes run into ten figures, 44 states and three jurisdictions across the United State participate in Powerball, with winners coming from every corner of the country.</p><p>Players select five main numbers from 1 to 69 and a Powerball number from 1 to 26. To win the jackpot, players must match all five main numbers and the Powerball drawn on the night. Another eight prize tiers are available in each draw, including a prize for matching the Powerball alone. The minimum jackpot is worth $40 million.</p><p>For an additional fee, players can add the supplementary Power Play game to their ticket, which could increase the value of any non-jackpot prizes won. A 2x, 3x, 4x and 5x multiplier can be drawn at random in all games, while a 10x multiplier can come into play when the jackpot is worth $150 million or less</p>
					</div><!-- //content-box -->
					<div class="images-box col-sm-6 col-md-6">
						<img src="{{ url() }}/images/lotto/powerball-bg.png" class="img-responsive img-thumbnail">
					</div><!-- //image-box -->

				
			</div><!-- //container aboutEuromillions -->
		</div><!-- //ful-width-box -->
	</div>

</section>

<script language="javascript">						
	
	/**
		 * Returns a random number between min (inclusive) and max (exclusive)
	 */
	function getRandomArbitrary(min, max) {
	    return Math.floor(Math.random() * (max - min) + min);
	}

	function countNumbersSelected(){
		return($('.simnum .selectedbtn').length);
	}

	function countStarsSelected(){
		return($('.simstars .selectedbtn').length);
	}

	function clearPreviousLotto(){
		$('.simulator .num').removeClass('selectedbtn');
		$('.simulator .starnum').removeClass('selectedbtn');

			btnsSelected = 0;
			starsSelected = 0;
			$('.numSelected').text(btnsSelected);
			$('.starSelected').text(starsSelected);

			ballSelectedArray.length=0;
			starsSelectedArray.length=0;
			//remove all data from the results when clear button clicked
			for(var i=1; i<=10; i++)
			{
				$('#point0'+ i +' section .table tbody').html('');
				$('.point0'+ i +'-num').text("0");
			}
			for(var i=11; i<=13; i++)
			{
				$('#point'+ i +' section .table tbody').html('');
				$('.point'+ i +'-num').text("0");							
			}

			//remove the selected numbers shown
			$('.selectednums table tr').empty();
			$('.selectedstars table tr').empty();

			$('.results').hide();
			//disable action btn
			$('.action-btn').attr('disabled', 'disabled');
			$('.past-results ul li a').each(function(){
				$(this).removeAttr("data-scroll");
			});
	}
	//fetching the values for the upcoming draws
		
		$.getJSON("<?php echo url(); ?>/lotto/json/powerball-archive.json", function(data){
		    		var topElem = data.length-1;
		    		$('.previous-lotto .jackpot-amt').html('$ '+data[topElem]['Jackpot']);
		    		$('.previous-lotto .jackpot-nums').html(data[topElem]['B1']+'-'+data[topElem]['B2']+'-'+data[topElem]['B3']+'-'+data[topElem]['B4']+'-'+data[topElem]['B5']+'-'+data[topElem]['R']+'-'+data[topElem]['Y']);
		    		var date = data[topElem]['Date'];
		    		date += ' UTC +1';
		    		var dateInJavascript = new Date(date);
		    		dateInJavascript.setMinutes(dateInJavascript.getMinutes()+1203); 
		    		var momentDate = moment(dateInJavascript).format('ddd DD MMMM YYYY');
		    		$('.previous-lotto .jackpot-date').html(momentDate);
		    		
		    
		    });

		    $.getJSON("<?php echo url(); ?>/lotto/json/power-ball-upcoming-draw-archive.json", function(data){
		    		var topElem = data.length-1;
		    		$('.next-draw .jackpot-amt').html('$ '+data[topElem]['Jackpot']);
		    		//$('.next-draw li').eq(2).html(data[topElem]['Date']);
		    		
		    		//var  
					var currDate = data[topElem]['Date'];
					//console.log("current date b4 ny processing"+ currDate);
					currDate += ' UTC +1';
					var testDate = new Date(currDate);
					
					//testDate.setHours(testDate.getHours()+25);
					testDate.setMinutes(testDate.getMinutes()+1203);
					//testDate.setSeconds(testDate.getSeconds()+20);

					var momentDate = moment(testDate).format('ddd DD MMMM YYYY');		
					$('.next-draw .jackpot-date').html(momentDate);
					//console.log(momentDate+ "Lotto date");	
					//console.log(currDate +"testDate");
		    		//$('.next-draw .jackpot-date').html(moment(testDate).format('ddd DD-MM-YYYY'));
		    		

					//$('.count-down')
					//	.countdown(momentDate, function(event){
					//		$(this).text(
					//			event.strftime('%Dd %H:%M:%S')
					//			);
					//	});

		    });


	var ballSelectedArray = [];//ball selected array and 
	var starsSelectedArray = [];//stars selected array  stores the
	//list of balls selected, the value of buttons with class selectedbtn
	$(document).ready(function(){
		var btnsSelected=0;
		var starsSelected=0;

		//if random generator is pressed
		$('.genRandomNumsBtn').on('click', function(e){
			e.preventDefault();
			//clearing the previously generated numbers
			clearPreviousLotto();

			var randNums = [];

			randNums[0] = getRandomArbitrary(1, 70);
			do{
				randNums[1] = getRandomArbitrary(1, 70);
			}
			while(randNums[1] == randNums[0]);
			do{
				randNums[2] = getRandomArbitrary(1, 70);
			}
			while(randNums[2] == randNums[1] || randNums[2] == randNums[0]);
			do{
				randNums[3] = getRandomArbitrary(1, 70);
			}
			while(randNums[3] == randNums[2] || randNums[3] == randNums[1] || randNums[3] == randNums[0]);
			do{
				randNums[4] = getRandomArbitrary(1, 70);
			}
			while(randNums[4] == randNums[3] || randNums[4] == randNums[2] || randNums[4] == randNums[1] || randNums[4] == randNums[0]);
			randNums[5] = getRandomArbitrary(1, 27);
			do{
				randNums[6] = getRandomArbitrary(1, 27);
			}
			while(randNums[6] == randNums[5]);
			//show random generated numbers at place
			for(var i=0; i<5; i++)
			{
			$('.simulator form .table ul li .num[value='+("0" + randNums[i]).slice(-2) +']').addClass('selectedbtn');
			$('.numSelected').text('6');
			$('.selectednums table tr').append('<td>'+("0" + randNums[i]).slice(-2)+'</td>');
				$('.form-btns .action-btn').removeAttr('disabled');
				btnsSelected=5;
			}
			//show random generated numbers at place
			for(var i=5; i<7; i++)
			{
			$('.simulator form .table ul li .starnum[value='+("0" + randNums[i]).slice(-2) +']').addClass('selectedbtn');
			$('.starSelected').text('2');
			$('.selectedstars table tr').append('<td>'+("0" + randNums[i]).slice(-2)+'</td>');
				$('.form-btns .action-btn').removeAttr('disabled');
				starsSelected=2;
			}
		});

		$('.simnum .num').on('click', function(){
			var numSelectedVal = $(this).val();//this is the number
			//$('.selectednums').show();
			if( ($(this).hasClass('selectedbtn')) && btnsSelected<=5 )
			{
				$(this).removeClass('selectedbtn');
				btnsSelected--;
				$('.numSelected').text(btnsSelected);
				$('.selectednums table tbody tr td:contains('+numSelectedVal+')').remove();
			}
			else if(btnsSelected<5)
			{
				$(this).addClass('selectedbtn');
				btnsSelected++;							
				$('.numSelected').text(btnsSelected);
				$('.selectednums table tr').append('<td>'+numSelectedVal+'</td>');
			}
			if(btnsSelected == 5 && $('.selectedstars tr td').size() >= 1)
				$('.selectNumsBox .action-btn').removeAttr("disabled");
			else
				$('.selectNumsBox .action-btn').attr("disabled", true);
		});
		$('.simstars .starnum').click(function(){
			var numSelectedVal = $(this).val();//this is the number
			$('.selectedstars').show();
			if( ($(this).hasClass('selectedbtn')) && starsSelected<=2 )
			{
				$(this).removeClass('selectedbtn');
				starsSelected--;
				$('.numSelected').text(btnsSelected);
				$('.selectedstars table tr td:contains('+numSelectedVal+')').remove();
			}
			else if(starsSelected<2)
			{
				$(this).addClass('selectedbtn');
				starsSelected++;						
				$('.numSelected').text(btnsSelected);
				$('.selectedstars table tr').append('<td>'+numSelectedVal+'</td>');
			}
			if(starsSelected >= 1 && $('.selectednums tr td').size() == 5)
				$('.selectNumsBox .action-btn').removeAttr("disabled");
			else
				$('.selectNumsBox .action-btn').attr("disabled", true);

		});

		$('.clear-btn').click(function(){
			btnsSelected = 0;
			starsSelected = 0;
			clearPreviousLotto();
		});
		
	});
	
	

	var fivePlusRed=[];
	var fiveOnly=[];
	var fourPlusRed=[];
	var fourOnly=[];
	var threePlusRed=[];
	var threeOnly=[];
	var twoPlusRed=[];
	var onePlusRed=[];
	var zeroPlusRed=[];
	/*var twoPlus2Star=[];
	var twoPlus1Star=[];
	var onePlus2Star=[];
	var twoNum=[];*/
	var results_i=[];

	//variables to count the number of occurences of digits in result
	var num1count,num2count,num3count,num4count,num5count,num6count;

	$('form').submit(function(event)
	{
		event.preventDefault();
		// Get some values from elements on the page:
		var ballCount = countNumbersSelected();
		var starsCount = countStarsSelected();

		$('#point01 section .table tbody').empty();
		$('#point02 section .table tbody').empty();
		$('#point03 section .table tbody').empty();
		$('#point04 section .table tbody').empty();
		$('#point05 section .table tbody').empty();
		$('#point06 section .table tbody').empty();
		$('#point07 section .table tbody').empty();
		$('#point08 section .table tbody').empty();
		$('#point09 section .table tbody').empty();
		/*$('#point10 section .table tbody').empty();
		$('#point11 section .table tbody').empty();
		$('#point12 section .table tbody').empty();
		$('#point13 section .table tbody').empty();*/

		$('.point01-num').empty();
		$('.point02-num').empty();
		$('.point03-num').empty();
		$('.point04-num').empty();
		$('.point05-num').empty();
		$('.point06-num').empty();
		$('.point07-num').empty();
		$('.point08-num').empty();
		$('.point09-num').empty();
		/*$('.point10-num').empty();
		$('.point11-num').empty();
		$('.point12-num').empty();
		$('.point13-num').empty();*/
		var $form = $( this );
		fivePlusRed.length=fiveOnly.length=fourPlusRed.length=fourOnly.length=threePlusRed.length=threeOnly.length=twoPlusRed.length=onePlusRed.length=zeroPlusRed.length=0;
		//console.log("Ball count="+ballCount);
		
		for(var i=0; i<ballCount; i++)
		{
			ballSelectedArray[i] = parseInt($('.simnum .selectedbtn').eq(i).val());
		}
		for(var i=0; i<starsCount; i++)
		{
			starsSelectedArray[i] = parseInt($('.simstars .selectedbtn').eq(i).val());	
		}
			//add scroliing cpability to points btns
		$('.past-results ul li a').each(function(){
			$(this).attr("data-scroll", "");
		});
		$('.results').show();
			//searching using json
			//this is working fine to search in json file
		var count;
		var match1=starsmatch=0;//initialize match for num and stars count to 0
			
		$.getJSON("<?php echo url(); ?>/lotto/json/powerball-archive.json", function(jsonServerData){

				count = 0;
				$.each(jsonServerData, function(key, value){
					count++;

				});
				
				//var jsonServerData = <?php //include_once("admin/web-scrap/json/euromillions-archive.json"); ?>;
				for(var i=count-1; i>=0; i=i-1)
				{

					match1=starsmatch=0;
					//checking combo for
					if( ($.inArray( jsonServerData[i]["B1"], ballSelectedArray)) >= 0 )
					{
						match1= match1+1;
						//fivePlusRed.push(ballSelectedArray[i]);
						//console.log("Inside frst loop");
					}
					if( ($.inArray(jsonServerData[i]["B2"], ballSelectedArray)) >= 0)
					{
						match1=match1+1;
						//fiveOnly.push(ballSelectedArray[i]);
						//console.log("Inside  loop 2");
					}
					if( ($.inArray(jsonServerData[i]["B3"], ballSelectedArray)) >= 0)
					{
						match1=match1+1;
						//fourPlusRed.push(ballSelectedArray[i]);
						//console.log("Inside  loop 3");
					}
					if( ($.inArray(jsonServerData[i]["B4"], ballSelectedArray)) >= 0)
					{
						match1=match1+1;
						//fourOnly.push(ballSelectedArray[i]);
						//console.log("Inside  loop 4");
					}
					if( ($.inArray(jsonServerData[i]["B5"], ballSelectedArray)) >= 0)
					{
						match1=match1+1;
						//threePlusRed.push(ballSelectedArray[i]);
						//console.log("Inside  loop 5");
					}
					if(($.inArray(jsonServerData[i]["R"], starsSelectedArray)) >=0)
					{
						starsmatch=starsmatch+1;
					}
					if(($.inArray(jsonServerData[i]["Y"], starsSelectedArray)) >=0)
					{
						starsmatch=starsmatch+1;
					}


					//if jackpot, 5 nums and 2 stars matched
					if( (match1 == 5) && (starsmatch > 0) )
						fivePlusRed.push(jsonServerData[i]);
					//if 5 num plus 1 star mathed
					else if( (match1 == 5) && (starsmatch == 0) )
						fiveOnly.push(jsonServerData[i]);
					//if all five nums matched
					else if( (match1 == 4) && (starsmatch >0) )
						fourPlusRed.push(jsonServerData[i]);
					//four plus 2 stars matched
					else if( (match1 == 4) && (starsmatch == 0) )	
						fourOnly.push(jsonServerData[i]);
					//four plus one star
					else if( (match1 == 3) && (starsmatch > 0) )
						threePlusRed.push(jsonServerData[i]);
					//four nums matched
					else if( (match1 == 3) && (starsmatch == 0) )	
						threeOnly.push(jsonServerData[i]);
					//match 3 + 2stars
					else if( (match1 == 2) && (starsmatch > 0) )	
						twoPlusRed.push(jsonServerData[i]);
					//match 3 + 1stars
					else if( (match1 == 1) && (starsmatch > 0) )	
						onePlusRed.push(jsonServerData[i]);
					//match 3 nums
					else if( (match1 == 0) && (starsmatch > 0) )	
						zeroPlusRed.push(jsonServerData[i]);
				

				} //end o for loop -->



			// display output data in table 
			if(fivePlusRed.length > 0)
			{
				
				for(var i=0; i<fivePlusRed.length; i++)
				{
					
					var toAppend = '<tr><td>'+fivePlusRed[i]["Date"]+'</td><td>';
					if($.inArray(fivePlusRed[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fivePlusRed[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(fivePlusRed[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fivePlusRed[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(fivePlusRed[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fivePlusRed[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(fivePlusRed[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fivePlusRed[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(fivePlusRed[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fivePlusRed[i]['B5']).slice(-2)+"</span>";
					toAppend += "</td><td>";								
					if($.inArray(fivePlusRed[i]['R'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fivePlusRed[i]['R']).slice(-2)+"</span>-";
					if($.inArray(fivePlusRed[i]['Y'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fivePlusRed[i]['Y']).slice(-2)+"</span>";
					toAppend += "</td><td>5 + Powerball</td><td>"+fivePlusRed[i]['Jackpot']+"</td></tr>";
					$('#point01 section .table tbody').append(toAppend);
					
				}
				$('.point01-num').text(""+(fivePlusRed.length));
			}
			else
			{	
				$('#point01 section .table tbody').append("<tr><td colspan='5'>No record found! </td></tr>");	
				$('.point01-num').text("0");
			}
			if(fiveOnly.length > 0)
			{
				for(var i=0; i<fiveOnly.length; i++)
				{
					var toAppend = '<tr><td>'+fiveOnly[i]["Date"]+'</td><td>';
					if($.inArray(fiveOnly[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fiveOnly[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(fiveOnly[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fiveOnly[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(fiveOnly[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fiveOnly[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(fiveOnly[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fiveOnly[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(fiveOnly[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fiveOnly[i]['B5']).slice(-2)+"</span>";
					toAppend += "</td><td>";								
					if($.inArray(fiveOnly[i]['R'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fiveOnly[i]['R']).slice(-2)+"</span>-";
					if($.inArray(fiveOnly[i]['Y'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fiveOnly[i]['Y']).slice(-2)+"</span>";
					toAppend += "</td><td>5 + 1</td><td>"+fiveOnly[i]['Jackpot']+"</td></tr>";
					$('#point02 section .table tbody').append(toAppend);
				}
				$('.point02-num').text(""+(fiveOnly.length));
			}
			else
			{
				$('#point02 section .table tbody').append("<tr><td colspan='5'>No record found! </td></tr>");
				$('.point02-num').text("0");
			}

			if(fourPlusRed.length > 0)
			{
				for(var i=0; i<fourPlusRed.length; i++)
				{
					var toAppend = '<tr><td>'+fourPlusRed[i]["Date"]+'</td><td>';
					if($.inArray(fourPlusRed[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fourPlusRed[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(fourPlusRed[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fourPlusRed[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(fourPlusRed[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fourPlusRed[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(fourPlusRed[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fourPlusRed[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(fourPlusRed[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fourPlusRed[i]['B5']).slice(-2)+"</span>";
					toAppend += "</td><td>";								
					if($.inArray(fourPlusRed[i]['R'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fourPlusRed[i]['R']).slice(-2)+"</span>-";
					if($.inArray(fourPlusRed[i]['Y'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fourPlusRed[i]['Y']).slice(-2)+"</span>";
					toAppend += "</td><td>5 + 0</td><td>"+fourPlusRed[i]['Jackpot']+"</td></tr>";
					$('#point03 section .table tbody').append(toAppend);
				}
				$('.point03-num').text(""+(fourPlusRed.length));
			}
			else
			{
				$('#point03 section .table tbody').append("<tr><td colspan='5'>No record found! </td></tr>");
				$('.point03-num').text("0");
			}

			if(fourOnly.length > 0)
			{
				for(var i=0; i<fourOnly.length; i++)
				{
					var toAppend = '<tr><td>'+fourOnly[i]["Date"]+'</td><td>';
					if($.inArray(fourOnly[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fourOnly[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(fourOnly[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fourOnly[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(fourOnly[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fourOnly[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(fourOnly[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fourOnly[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(fourOnly[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fourOnly[i]['B5']).slice(-2)+"</span>";
					toAppend += "</td><td>";								
					if($.inArray(fourOnly[i]['R'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fourOnly[i]['R']).slice(-2)+"</span>-";
					if($.inArray(fourOnly[i]['Y'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + fourOnly[i]['Y']).slice(-2)+"</span>";
					toAppend += "</td><td>4</td><td>"+fourOnly[i]['Jackpot']+"</td></tr>";
					$('#point04 section .table tbody').append(toAppend);
				}
				$('.point04-num').text(""+(fourOnly.length));
			}
			else
			{
				$('#point04 section .table tbody').append("<tr><td colspan='5'>No record found! </td></tr>");
				$('.point04-num').text("0");
			}

			if(threePlusRed.length > 0)
			{
				for(var i=0; i<threePlusRed.length; i++)
				{

					var toAppend = '<tr><td>'+threePlusRed[i]["Date"]+'</td><td>';
					if($.inArray(threePlusRed[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + threePlusRed[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(threePlusRed[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + threePlusRed[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(threePlusRed[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + threePlusRed[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(threePlusRed[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + threePlusRed[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(threePlusRed[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + threePlusRed[i]['B5']).slice(-2)+"</span>";
					toAppend += "</td><td>";								
					if($.inArray(threePlusRed[i]['R'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + threePlusRed[i]['R']).slice(-2)+"</span>-";
					if($.inArray(threePlusRed[i]['Y'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + threePlusRed[i]['Y']).slice(-2)+"</span>";
					toAppend += "</td><td>3 + powerball</td><td>"+threePlusRed[i]['Jackpot']+"</td></tr>";
					$('#point05 section .table tbody').append(toAppend);
				}
				$('.point05-num').text(""+(threePlusRed.length));
			}
			else
			{
				$('#point05 section .table tbody').append("<tr><td colspan='5'>No record found! </td></tr>");
				$('.point05-num').text("0");
			}

			if(threeOnly.length > 0)
			{
				for(var i=0; i<threeOnly.length; i++)
				{
					var toAppend = '<tr><td>'+threeOnly[i]["Date"]+'</td><td>';
					if($.inArray(threeOnly[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + threeOnly[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(threeOnly[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + threeOnly[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(threeOnly[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + threeOnly[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(threeOnly[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + threeOnly[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(threeOnly[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + threeOnly[i]['B5']).slice(-2)+"</span>";
					toAppend += "</td><td>";								
					if($.inArray(threeOnly[i]['R'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + threeOnly[i]['R']).slice(-2)+"</span>-";
					if($.inArray(threeOnly[i]['Y'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + threeOnly[i]['Y']).slice(-2)+"</span>";
					toAppend += "</td><td>3</td><td>"+threeOnly[i]['Jackpot']+"</td></tr>";
					$('#point06 section .table tbody').append(toAppend);
				}
				$('.point06-num').text(""+(threeOnly.length));
			}
			else
			{
				$('#point06 section .table tbody').append("<tr><td colspan='5'>No record found! </td></tr>");
				$('.point06-num').text("0");
			}

			if(twoPlusRed.length > 0)
			{
				for(var i=0; i<twoPlusRed.length; i++)
				{
					var toAppend = '<tr><td>'+twoPlusRed[i]["Date"]+'</td><td>';
					if($.inArray(twoPlusRed[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + twoPlusRed[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(twoPlusRed[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + twoPlusRed[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(twoPlusRed[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + twoPlusRed[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(twoPlusRed[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + twoPlusRed[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(twoPlusRed[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + twoPlusRed[i]['B5']).slice(-2)+"</span>";
					toAppend += "</td><td>";								
					if($.inArray(twoPlusRed[i]['R'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + twoPlusRed[i]['R']).slice(-2)+"</span>-";
					if($.inArray(twoPlusRed[i]['Y'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + twoPlusRed[i]['Y']).slice(-2)+"</span>";
					toAppend += "</td><td>2 + powerball</td><td>"+twoPlusRed[i]['Jackpot']+"</td></tr>";
					$('#point07 section .table tbody').append(toAppend);
				}
				$('.point07-num').text(""+(twoPlusRed.length));
			}
			else
			{
				$('#point07 section .table tbody').append("<tr><td colspan='5'>No record found! </td></tr>");
				$('.point07-num').text("0");
			}

			if(onePlusRed.length > 0)
			{
				for(var i=0; i<onePlusRed.length; i++)
				{
					var toAppend = '<tr><td>'+onePlusRed[i]["Date"]+'</td><td>';
					if($.inArray(onePlusRed[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + onePlusRed[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(onePlusRed[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + onePlusRed[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(onePlusRed[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + onePlusRed[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(onePlusRed[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + onePlusRed[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(onePlusRed[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + onePlusRed[i]['B5']).slice(-2)+"</span>";
					toAppend += "</td><td>";								
					if($.inArray(onePlusRed[i]['R'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + onePlusRed[i]['R']).slice(-2)+"</span>-";
					if($.inArray(onePlusRed[i]['Y'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + onePlusRed[i]['Y']).slice(-2)+"</span>";
					toAppend += "</td><td>1 + powerball</td><td>"+onePlusRed[i]['Jackpot']+"</td></tr>";
					$('#point08 section .table tbody').append(toAppend);
				}
				$('.point08-num').text(""+(onePlusRed.length));
			}
			else
			{
				$('#point08 section .table tbody').append("<tr><td colspan='5'>No record found! </td></tr>");
				$('.point08-num').text("0");
			}

			if(zeroPlusRed.length > 0)
			{
				for(var i=0; i<zeroPlusRed.length; i++)
				{
					var toAppend = '<tr><td>'+zeroPlusRed[i]["Date"]+'</td><td>';
					if($.inArray(zeroPlusRed[i]['B1'], ballSelectedArray) >= 0 )
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + zeroPlusRed[i]['B1']).slice(-2)+"</span>-";
					if($.inArray(zeroPlusRed[i]['B2'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + zeroPlusRed[i]['B2']).slice(-2)+"</span>-";
					if($.inArray(zeroPlusRed[i]['B3'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + zeroPlusRed[i]['B3']).slice(-2)+"</span>-";
					if($.inArray(zeroPlusRed[i]['B4'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + zeroPlusRed[i]['B4']).slice(-2)+"</span>-";
					if($.inArray(zeroPlusRed[i]['B5'], ballSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + zeroPlusRed[i]['B5']).slice(-2)+"</span>";
					toAppend += "</td><td>";								
					if($.inArray(zeroPlusRed[i]['R'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + zeroPlusRed[i]['R']).slice(-2)+"</span>-";
					if($.inArray(zeroPlusRed[i]['Y'], starsSelectedArray) >= 0)
						toAppend += "<span class='highlighted'>";
					else
						toAppend += "<span class ='no-highlighted'>";
					toAppend += ("0" + zeroPlusRed[i]['Y']).slice(-2)+"</span>";
					toAppend += "</td><td>0 + powerball</td><td>"+zeroPlusRed[i]['Jackpot']+"</td></tr>";
					$('#point09 section .table tbody').append(toAppend);
				}
				$('.point09-num').text(""+(zeroPlusRed.length));
			}
			else
			{
				$('#point09 section .table tbody').append("<tr><td colspan='5'>No record found! </td></tr>");
				$('.point09-num').text("0");
			}
			
			
		});							

	}); //form event -->
	
	// line chart 
</script>

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

	Morris.Donut({
		element: 'lotto-users-donut',
  		data: [
    		{label: "Euro-Millions users", value: res.mega},
    		{label: "Euro-millions users", value: res.euro},
    		{label: "Power-ball users", value: res.power}
  		],
  		colors: ['#209869', '#FFD41E', '#003399'],
		resize: true
	});

</script>
<script type="text/javascript">
	//smooth scrollling
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