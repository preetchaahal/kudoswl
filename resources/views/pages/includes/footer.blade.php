<div class="footer-top">
  
  <!-- testimonial -->
  <div class="title-box text-center">
      <h1 class="title">Testimonial</h1>
  </div>
<div class="full-width-box bottom-padding">
    <div class="fwb-bg fwb-blur" data-blur-image="{{ url() }}/images/testimonials-background.jpg" data-blur-amount="3">
    <div class="overlay"></div>
    </div>
    
    <div class="container">
    
    <div class="respond-carousel">
      <div class="carousel-box load" data-carousel-autoplay="true" data-carousel-pagination="true" data-carousel-one="true" data-carousel-nav="fales">
      <div class="row">
        <div class="carousel">
        
          <?php
					
						// switch($_SESSION['langid'])
						// {
						// 	case 1:
						// 		$tst_lang = "eng";
						// 		break;
						// 	case 2:
						// 		$tst_lang = "por";
						// 		break;
						// 	case 3:
						// 		$tst_lang = "spa";
						// 		break;
						// }
							//$im=0;
              //$testmo1=$obj_Common->get_query("tst_status='1'",'tbl_testimonial,tbl_user',"*",'order by tst_date DESC LIMIT 10');
							//$testmo1=$obj_Common->get_query("(tst_language,tst_status) IN (('".$tst_lang."',1))",'tbl_testimonial',"*",'order by tst_date DESC LIMIT 10');
							//$testmo1 = mysql_query("SELECT * FROM tbl_testimonial")
              //if(mysql_num_rows($testmo1) > 0)
              if(isset($testimonials) > 0)
              {
              foreach ($testimonials as $value) {
              
								//$testmo2=$obj_Common->get_query("Uid='".$rowtst1->tst_user_id."'",'tbl_user',"*");
								//$rowtst2 = mysql_fetch_object($testmo2);
                
                $uname = $value->first_name." ". $value->last_name;
                $uimg = $value->profile_image;
                if($uimg == '')
                  $imgpath = "images/user.png";
                else
                  $imgpath = "img/profile/".$uimg;
          ?>

        <div class="respond respond-blockquote border white col-sm-12 col-md-12">
          <div class="description border-white">
          <blockquote><?php echo $value->tst_msg;?>
          </blockquote>
          </div>
          <div class="name">
          <div class="icon">
            <img class="img-circle" src="{{ url() }}/<?php echo $imgpath;?>" alt="">
          </div>
          
          <div style="margin-top: 15px;"><strong><?php echo ($uname != '' && $uname != ' ' ? "$uname" : "Site user");   ?></strong></div>
          <!--<div>Designer, Infostyle</div>-->
          </div>
        </div>
        <?php 
              // $im++;
              }
            }else{
          ?>
          <div class="respond respond-blockquote border white col-sm-12 col-md-12">
            <div class="description border-white">
              <h3>No Testimonials available right now!</h3>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="pagination switches"></div>
      </div>
    </div>
    </div>
  </div><!-- .full-width-box for testimonial -->

  <div class="container">
    <div class="row sidebar">
      <aside class="col-xs-12 col-sm-6 col-md-4 widget social">
        <div class="title-block">
          <h3 class="title">Follow Us</h3>
        </div><!-- //title-block -->
        <p>Follow us in social media</p>
        <div class="row">
          <a class="social-btn btn" href="#">
            <i class="fa fa-facebook"></i>
          </a>
          <a class="social-btn btn" href="#">
            <i class="fa fa-twitter"></i>
          </a>
          <a class="social-btn btn" href="#">
            <i class="fa fa-google-plus"></i>
          </a>
          <a class="btn" href="#">
            <i class="fa fa-linkedin"></i>
          </a>
        </div><!-- //row -->
        <div class="clearfix"></div>
      </aside>

      <!--<aside class="col-xs-12 col-sm-6 col-md-3 widget newsletter">
        <div class="title-block">
          <h3 class="title">Newsletter Signup</h3>
        </div>
        <div>
          <p>Sign up for newsletter</p>
          <div class="clearfix"></div>
          <form>
            <input class="form-control" type="text" placeholder="Name" required >
            <input class="form-control" type="email" placeholder="Email" required >
            <button class="submit"><span class="glyphicon glyphicon-arrow-right"></span></button>
          </form>
        </div>
      </aside><!-- .newsletter -->
  
      <aside class="col-xs-12 col-sm-6 col-md-4 widget links">
        <div class="title-block">
          <h3 class="title">Information</h3>
        </div>
        <nav>
          <ul>
            <li><a href="about_us.php">About us</a></li>
            <!--<li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <!--<li><a href="#">Secure payment</a></li>-->
          </ul>
        </nav>
      </aside>
  
      <aside class="col-xs-12 col-sm-6 col-md-4 widget links">
        <div class="title-block">
          <h3 class="title">My account</h3>
        </div>
        <nav>
          <ul>
            <?php //if( isset($_SESSION['useruserid']) && $_SESSION['useruserid']!='' ){ ?>
                <li><a href="dashboard.php">My account</a></li>
                <!--<li><a href="#">Newsletter</a></li>-->
            <?php //} else {?>
            <!--<li><a href="#">Order History</a></li>
            <li><a href="#">Wish List</a></li>-->
                <li><a href="login.php">Login</a></li>
                <li><a href="login.php">Sign-up</a></li>
            <?php //} ?>
          </ul>
        </nav>
      </aside>
    </div>
  </div>
</div><!-- .footer-top -->
<div class="footer-bottom">
  <div class="container">
    
    <div class="row">
        <div class="copyright col-xs-12 col-sm-3 col-md-3">
          <p>Copyright © www.winnerslearners.com <?php echo date('Y'); ?></p>
        </div><!-- //copyright -->
  
        <div class="phone col-xs-6 col-sm-3 col-md-3">
            <div class="footer-icon">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
              <path fill="#c6c6c6" d="M11.001,0H5C3.896,0,3,0.896,3,2c0,0.273,0,11.727,0,12c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2
              c0-0.273,0-11.727,0-12C13.001,0.896,12.105,0,11.001,0z M8,15c-0.552,0-1-0.447-1-1s0.448-1,1-1s1,0.447,1,1S8.553,15,8,15z
              M11.001,12H5V2h6V12z"></path>
              </svg>
            </div><!-- //footer-icon -->
            <strong class="title">Call Us:</strong> +1 (000) 123-45-67 <br>
            <strong>or</strong> +1 (000) 123-45-67
        </div><!-- ///phone -->
  
      <div class="address col-xs-6 col-sm-3 col-md-3">
          <div class="footer-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
            <g>
            <g>
              <path fill="#c6c6c6" d="M8,16c-0.256,0-0.512-0.098-0.707-0.293C7.077,15.491,2,10.364,2,6c0-3.309,2.691-6,6-6
              c3.309,0,6,2.691,6,6c0,4.364-5.077,9.491-5.293,9.707C8.512,15.902,8.256,16,8,16z M8,2C5.795,2,4,3.794,4,6
              c0,2.496,2.459,5.799,4,7.536c1.541-1.737,4-5.04,4-7.536C12.001,3.794,10.206,2,8,2z"></path>
              </g>
              <g>
              <circle fill="#c6c6c6" cx="8.001" cy="6" r="2"></circle>
              </g>
              </g>
            </svg>
          </div><!-- //footer-icon -->
           <p>49 Zyxwv, 2B Abcdef 5655, Ghihj Tower<br> XYZ Road, 4538FH</p>
      </div>
  
      <div class="col-xs-12 col-sm-3 col-md-3">
        <a href="#" class="up">
            <span class="glyphicon glyphicon-arrow-up"></span>
        </a>
      </div><!-- ///col-xs-12 -->
    </div><!-- //row -->
  
  </div><!-- ///container -->
</div><!-- .footer-bottom -->