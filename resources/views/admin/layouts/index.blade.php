<?php //$login_obj->fun_check_login() ; ?>
<?php //$login_obj->fun_check_rights($r, $page) ; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Section</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link rel="icon" type="image/ico" href="images/favicon.ico" />
    
    <!-- include libraries(jQuery, bootstrap) -->
    <!--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    -->
    <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> -->
    <script   src="{{ url() }}/admin/js/jquery-2.2.4.min.js"   crossorigin="anonymous"></script>
    
    <script src="{{ url() }}/admin/js/jquery-ui.1.11.4.js"></script>

    <!-- Bootstrap -->
    <link href="{{ url() }}/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url() }}/admin/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url() }}/admin/css/animate.min.css">
    <link rel="stylesheet" href="{{ url() }}/admin/css/rickshaw.min.css">
    <link rel="stylesheet" href="{{ url() }}/admin/css/datepicker.css">
    <link rel="stylesheet" href="{{ url() }}/admin/css/bootstrap-checkbox.css">
    <link rel="stylesheet" href="{{ url() }}/admin/css/summernote.css">
    <!--<link rel="stylesheet" href="css/summernote-bs3.css">-->
    <link rel="stylesheet" href="{{ url() }}/admin/css/chosen.min.css">
    <link rel="stylesheet" href="{{ url() }}/admin/css/chosen-bootstrap.css">
    <link rel="stylesheet" href="{{ url() }}/admin/js/plugins/tabdrop/css/tabdrop.css">
    <link rel="stylesheet" href="{{ url() }}/admin/css/morris.css">
    <link href="{{ url() }}/admin/css/minoral.css" rel="stylesheet">

    <!-- ///ladda button animations -->
    <link rel="stylesheet" href="{{ url() }}/css/progressive/ladda.min.css">
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="{{ url() }}/admin/js/bootstrap.min.js"></script>
    <script src="{{ url() }}/admin/js/run_prettify.js"></script>
    <script src="{{ url() }}/admin/js/plugins/jquery.nicescroll.min.js"></script>
    <script src="{{ url() }}/admin/js/plugins/blockui/jquery.blockUI.js"></script>
    <!--<script src="plugins/summernote/js/summernote.js"></script>-->

    <!-- ///ladda buttons for animation on buttons -->
    <script src="{{ url() }}/js/progressive/spin.min.js"></script>
    <script src="{{ url() }}/js/progressive/ladda.min.js"></script>
    

    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
    
    <script src="{{ url() }}/admin/js/minoral.min.js"></script>

    <!-- ////for custome search select box -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <!-- //custom search select box ends here -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script src="{{ url() }}/admin/js/plugins/jquery.easypiechart.min.js"></script>

    <script src="{{ url() }}/admin/js/plugins/jquery.animateNumbers.js"></script>

    <script src="{{ url() }}/admin/js/plugins/flot/jquery.flot.min.js"></script>
    <script src="{{ url() }}/admin/js/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="{{ url() }}/admin/js/plugins/flot/jquery.flot.selection.min.js"></script>
    <script src="{{ url() }}/admin/js/plugins/flot/jquery.flot.animator.min.js"></script>
    <script src="{{ url() }}/admin/js/plugins/flot/jquery.flot.orderBars.js"></script>

    <script src="{{ url() }}/admin/js/plugins/rickshaw/raphael-min.js"></script> 
    <script src="{{ url() }}/admin/js/plugins/rickshaw/d3.v2.js"></script>
    <script src="{{ url() }}/admin/js/plugins/rickshaw/rickshaw.min.js"></script>

    <script src="{{ url() }}/admin/js/plugins/skycons/skycons.js"></script>

    <script src="{{ url() }}/admin/js/plugins/jquery.sparkline.min.js"></script>

    <script src="{{ url() }}/admin/js/plugins/summernote/summernote.min.js"></script>

    <script src="{{ url() }}/admin/js/plugins/chosen/chosen.jquery.min.js"></script>

    <script src="{{ url() }}/admin/js/plugins/tabdrop/bootstrap-tabdrop.min.js"></script>

    <script src="{{ url() }}/admin/js/plugins/morris/morris.min.js"></script>

  </head>
  <body class="brownish-scheme">

   
    <!-- Wrap all page content here -->
    <div id="wrap">

      


      <!-- Make page fluid -->
      <div class="row">
        




        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
          


          <!-- Branding -->
          <div class="navbar-header col-md-2">
            <a class="navbar-brand" href="dashboard.php">
              <strong>ADMIN</strong> 
            </a>
            <div class="sidebar-collapse">
              <a href="#">
                <i class="fa fa-bars"></i>
              </a>
            </div>
          </div>
          <!-- Branding end -->


          <!-- .nav-collapse -->
          <div class="navbar-collapse">
            

            

            <!-- Content collapsing at 768px to sidebar -->
            <div class="collapsing-content">


			<?php //if($_SESSION["u_t"] == "1") {?>

              <!-- Quick Actions -->
              <ul class="nav navbar-nav">
                <li class="divided">
                  <a href="#" class="page-refresh"><i class="fa fa-refresh"></i></a>
                  <span class="divider vertical"></span>
                </li>
               
                <li class="dropdown quick-action notifications">
                  <a class="dropdown-toggle button" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>
                    <span class="overlay-label orange"><?php //echo $totalcntnotif;?></span>
                  </a>
                  <ul class="dropdown-menu wide arrow orange nopadding">
                    <li><h1>You have <strong><?php //echo $totalcntnotif;?></strong> new notifications</h1></li>
  						
                      	<?php
					  //foreach($arraynotification as $valuea){
						  ?>
                    <li>
                      <a href="#">
                        <span class="label label-green"><i class="fa fa-user"></i></span>
                      
                      <?php //echo $notfication[$valuea['acid']];?>
                        <span class="small"><?php
						//$difff=time()-$valuea['indate'];
						//$text=$obj_Common->time_difference($difff);
						//echo $text ;?></span>
                      </a>
                    </li>
					<?php //} ?>
                   <!-- <li>
                      <a href="#">
                        <span class="label label-red"><i class="fa fa-power-off"></i></span>
                        Server down.
                        <span class="small">27 mins</span>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <span class="label label-orange"><i class="fa fa-plus"></i></span>
                        New order.
                        <span class="small">36 mins</span>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <span class="label label-cyan"><i class="fa fa-power-off"></i></span>
                        Server restared.
                        <span class="small">45 mins</span>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <span class="label label-amethyst"><i class="fa fa-power-off"></i></span>
                        Server started.
                        <span class="small">50 mins</span>
                      </a>
                    </li>-->

                     <li><a href="recent_activities.php?s=false">Check all notifications <i class="fa fa-angle-right"></i></a></li>
                  </ul>
                </li>

              </ul>
			  <?php //} ?>
              <!-- Quick Actions end -->





              <!-- Search -->
              <div class="search hide">
                <input type="text" placeholder="&#61442; Search in dashboard...">
              </div>
              <!-- Search end -->





              <!-- User Controls -->
              <div class="user-controls">
                <ul>

                 
                 
                  <li class="dropdown settings">
                    <a class="dropdown-toggle options" data-toggle="dropdown" href="#">
                      <i class="fa fa-cog"></i>
                    </a>
                    
                    <ul class="dropdown-menu arrow">

                       <li>
                        <a href="changepassworrd.php"><i class="fa fa-power-off"></i> Change Password</a>
                      </li>
                         <li>
                        <a href="{{ url() }}/admin/logout"><i class="fa fa-power-off"></i> Logout</a>
                      </li>
                    </ul>
                  </li>

                </ul>
              </div>
              <!-- User Controls end -->

            



            </div>
            <!-- /Content collapsing at 768px to sidebar -->



            <!-- Sidebar -->
            @include('admin.includes.menu')
            <!-- Sidebar end -->





          </div>
          <!--/.nav-collapse -->





        </div>
        <!-- Fixed navbar end -->
        




        
        <!-- Page content -->
        <div id="content" class="col-md-12">

              <!-- <script src="{{ url() }}/../tiny_mce/tiny_mce.js" type="text/javascript"></script>
              <script src="{{ url() }}/../js/tinymice.js" type="text/javascript"> --></script>
                    <!-- breadcrumbs -->
                    <div class="breadcrumbs">
                      <ol class="breadcrumb">
                        <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard.php</a></li>
                        <li><a href="message.php">Message</a></li>
                        <li class="active">Compose</li>
                      </ol>
                    </div>
                    <!-- /breadcrumbs -->


                    <!-- content main container -->
                    <div class="main">

                        @include($pages)


                    </div><!-- //// main -->
          <!-- /content container -->






        </div>
        <!-- Page content end -->






      </div>
      <!-- Make page fluid-->




    </div>
    <!-- Wrap all page content end -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
  <script>
  jQuery(document).ready(function($)
    {

        // var $cntdivinbox = $("#incounter");
        // var refreshId = setInterval(function()
        // {
        //     $cntdivinbox.load('inbox_counter.php');
   
        // }, 5000);
 
    });
  jQuery(document).ready(function($)
    {

        // var $notifi = $("#noti");
        // var refreshId = setInterval(function()
        // {
        //     $notifi.load('notification_data.php');
   
        // }, 5000);
 
    });

//      
    </script>   
    
  </body>
</html>