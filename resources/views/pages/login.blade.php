<?php
$page = "login";
?>
<?php

      //$msg = '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$msg.'</div>';
      //$notificationMsg = '<div class="alert alert-danger alert-dismissable notification" data-time="00:09" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-bell" aria-hidden="true"></i>'.$msg.'</div>';
      //$cap = 'Eq';

    //$cap = '';
    //$loginCaptchaError='<div class="alert alert-warning alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Incorrect captcha code.</strong></div>'; 
    //$notificationMsg = '<div class="alert alert-warning alert-dismissable notification" data-time="00:09" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-bell" aria-hidden="true"></i>Incorrect captcha code.</div>';

      //$notificationMsg = '<div class="alert alert-success alert-dismissable notification" data-time="00:09" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-bell" aria-hidden="true"></i>A verification email has been sent to your email addresses. Please follow the instructions to confirm your email address.</div>';
      //@header('Location:'.SITE_URL.'index.php?msg=verifyEmail');
    
    
      //$notificationMsg = '<div class="alert alert-warning alert-dismissable notification" data-time="00:09" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-bell" aria-hidden="true"></i>User Name already registered.</div>';
  
      //$regCaptchaError='<div class="alert alert-warning alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Incorrect captcha code.</strong></div>'; 
    //$notificationMsg = '<div class="alert alert-warning alert-dismissable notification" data-time="00:09" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-bell" aria-hidden="true"></i>Incorrect captcha code.</div>';

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Winners and Learners :: Win or learn, try not to lose ::</title>
<meta name="keywords" content="Winners Learners, Megasena simulator, Powerball simulator, Euro-millions simulator, lotto generator">
<meta name="description" content="Winners Learners: Play and win excitingly, using a bunch of ways, like playing lottories like Mega-sena, Power-ball, Euro-millions etc.">
<meta name="author" content="">

@include('pages.includes.page-includes')

<style type="text/css">
  .page-login-promo .back-end-recover-form{
    top: -25% !important;
  }
  .notification-container{
      position: fixed;
      bottom: 5%;
      left: 5%;
      width: 90%;
      z-index: 999;
    }
    .notification{
      width: auto;
      margin-bottom: 5px;
      clear: right;
      z-index: 999;
    }
</style>
</head>
<body class="page-login-promo blur-page" data-blur-image="{{ url() }}/img/gallery/1454369986.jpg" data-blur-amount="1">
    <div class="page-box">  
      @include('pages.includes.header')
      
      <section id="main">
        <div class="container login-register">
          <div class="row">
            <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
              <div data-appear-animation="bounceInDown">
                <div class="rotation">
                  
                  <div class="front-end">
                    <div class="form-content">
                      
                      <form style="margin-top: -300px !important; padding-top: 50px !important;" class="form-box login-form form-validator" method="post">
                        <h3 class="title">Login <small>or <a href="#" class="switch-form sing-up">Register</a></small></h3>
                        
                        <div class="form-group">
                          <label>User Name<span class="required">*</span></label>
                          <input class="form-control" type="text" value="" name="username" required>
                        </div><!-- //form-group -->
                          
                        <div class="form-group">
                          <label>Password<span class="required">*</span></label>
                          <input class="form-control" type="password" name="password" required>
                        </div><!-- //form-group -->
                          
                        <div class="form-group">
                          <label>Enter code: <span class="required">*</span></label>
                            <?php echo '<img src="" alt="CAPTCHA" class="captcha" />'; ?>
                            
                        </div><!-- //form-group -->
                        <div class="form-group">
                          <input type="text" class="form-control" name="captcha" required="required" id="captcha" >
                        </div><!-- ///form-group -->

                        <div class="buttons-box clearfix form-group">
                          <span class="required"><b>*</b> Required Field</span><br>
                          <button type="submit" class="btn" name="loginBtn">Login</button>
                          <!--<button type="button" class="btn"><i class="fa fa-facebook"></i> Login with Facebook</button>-->
                          <a href="#" class="switch-form forgot">Forgot Password</a>
                          
                        </div><!-- //buttons-box -->
                      
                      </form><!-- .form-box -->
                    </div><!-- //form-content -->
                  </div><!-- .front-end -->
          
                  <div class="back-end">
                    <div class="form-content">
                      <?php /*if(isset($regMsg) && ($regMsg == '0'))
                            { echo "<strong>User Name already registered<strong>"; 
                            }
                        */
                      ?>
                      
                      <form class="form-box register-form form-validator" method="post" >
                        
                        <h3 class="title">Register <small>or <a href="#" class="switch-form sing-in">Login</a></small></h3>
                          
                        <div class="form-group">
                          <label>First Name: <span class="required">*</span></label>
                          <input class="form-control" type="text" name="regFirstName" value="" required>
                        </div><!-- /form-group -->
                          
                        <div class="form-group">
                          <label>Last Name: <span class="required">*</span></label>
                          <input class="form-control" type="text" name="regLastName" value="" required>
                        </div><!-- /form-group -->
                          
                        <div class="form-group">
                          <label>Email: <span class="required">*</span></label>
                          <input class="form-control" type="email" name="regEmail" value="" required>
                        </div><!-- /form-group -->

                        <div class="form-group">
                          <label>User Name: <span class="required">*</span></label>
                          <input class="form-control" type="text" name="regUserName" value="" required>
                        </div><!-- /form-group -->

                        <div class="form-group">
                          <label>Password: <span class="required">*</span></label>
                          <input class="form-control" type="password" name="regPass" required>
                        </div><!-- /form-group -->

                        <div class="form-group">
                          <label>Country: <span class="required">*</span></label>
                          <select name="regCountry"  required id="txtcountry" class="form-control">
                              <option value="">Select country</option>
                                <?php
                                    //$resultcountry=$obj_Common->get_query('1=1','tbl_country','code,country_name','order by country_name ASC');
                                    //while($rowc=mysql_fetch_object($resultcountry))
                                    //{
                                ?>
                              <option value="">Some country
                              </option>
                          </select>
                        </div><!-- /form-group -->
                        
                        <div class="form-group">
                          <label>Verify code: <span class="required">*</span></label>
                          <?php echo '<img src="" alt="CAPTCHA" class="captcha" />'; ?>
                          
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="regCaptcha" required="required" id="captcha" >
                        </div><!-- //form-group -->
                        <!--<div class="form-group">
                          <label class="checkbox">
                            <input type="checkbox"> Sign Up for Newsletter
                          </label>
                        </div><!-- /form-group -->
                    
                        <div class="buttons-box clearfix">
                          <input type="hidden" name="act" value="register" />
                          <button type="submit" name="regBtn" class="btn btn-default">Submit</button>
                          <span class="required"><b>*</b> Required Field</span>
                        </div><!-- /form-group -->
                    
                      </form><!-- .form-box -->
                    </div><!-- //form-content -->
                  </div><!-- .back-end -->
          
                  <div class="back-end back-end-recover-form">
                    
                    <div class="form-content">
                      <form class="form-box forgot-form form-validator">
                        
                        <h3 class="title">Retrieve your password here</h3>
                        <p>Please enter your email address below. You will receive a link to reset your password.</p>
                      
                        <div class="form-group">
                          <label>Email Address <span class="required">*</span></label>
                          <input class="form-control" type="email" name="Email Register" required>
                        </div><!-- /form-group -->
                
                        <div class="buttons-box clearfix">
                          <button class="btn btn-default">Submit</button>
                          <button class="btn btn-border btn-inverse switch-form sing-in"><i class="fa fa-long-arrow-left"></i> Back to Login</button>
                          <span class="required"><b>*</b> Required Field</span>
                        </div><!-- //buttons-box -->
                      
                      </form><!-- .form-box -->
                    </div><!-- //form-content -->
                  </div><!-- .back-end -->
                
                </div><!-- //rotations -->
              </div><!-- ///data-appear-animation -->
            </div><!-- ///col-sm-8 -->
          </div><!-- ///row -->
        </div><!-- .container -->
      </section><!-- #main -->
    </div><!-- ///page-box -->

    <div class="notification-container">
    </div>
<script src="{{ url() }}/js/progressive/price-regulator/jshashtable-2.1_src.js"></script>
<script src="{{ url() }}/js/progressive/price-regulator/jquery.numberformatter-1.2.3.js"></script>
<script src="{{ url() }}/js/progressive/price-regulator/tmpl.js"></script>
<script src="{{ url() }}/js/progressive/price-regulator/jquery.dependClass-0.1.js"></script>
<script src="{{ url() }}/js/progressive/price-regulator/draggable-0.1.js"></script>
<script src="{{ url() }}/js/progressive/price-regulator/jquery.slider.js"></script>
<script src="{{ url() }}/js/progressive/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="{{ url() }}/js/progressive/jquery.touchSwipe.min.js"></script>
<script src="{{ url() }}/js/progressive/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="{{ url() }}/js/progressive/jquery.imagesloaded.min.js"></script>
<script src="{{ url() }}/js/progressive/jquery.appear.js"></script>
<script src="{{ url() }}/js/progressive/jquery.sparkline.min.js"></script>
<script src="{{ url() }}/js/progressive/jquery.easypiechart.min.js"></script>
<script src="{{ url() }}/js/progressive/jquery.easing.1.3.js"></script>
<script src="{{ url() }}/js/progressive/jquery.fancybox.pack.js"></script>
<script src="{{ url() }}/js/progressive/isotope.pkgd.min.js"></script>
<script src="{{ url() }}/js/progressive/jquery.knob.js"></script>
<script src="{{ url() }}/js/progressive/jquery.stellar.min.js"></script>
<script src="{{ url() }}/js/progressive/jquery.royalslider.min.js"></script>
<script src="{{ url() }}/js/progressive/jquery.tubular.1.0.js"></script>
<script src="{{ url() }}/js/progressive/SmoothScroll.js"></script>
<script src="{{ url() }}/js/progressive/country.js"></script>
<script src="{{ url() }}/js/progressive/spin.min.js"></script>
<script src="{{ url() }}/js/progressive/ladda.min.js"></script>
<script src="{{ url() }}/js/progressive/masonry.pkgd.min.js"></script>
<script src="{{ url() }}/js/progressive/morris.min.js"></script>
<script src="{{ url() }}/js/progressive/raphael.min.js"></script>
<script src="{{ url() }}/js/progressive/video.js"></script>
<script src="{{ url() }}/js/progressive/pixastic.custom.js"></script>
<script src="{{ url() }}/js/progressive/livicons-1.3.min.js"></script>
<script src="{{ url() }}/js/progressive/layerslider/greensock.js"></script>
<script src="{{ url() }}/js/progressive/revolution/jquery.themepunch.plugins.min.js"></script>
<script src="{{ url() }}/js/progressive/revolution/jquery.themepunch.revolution.min.js"></script>
<script src="{{ url() }}/js/progressive/bootstrapValidator.min.js"></script>
<script src="{{ url() }}/js/progressive/bootstrap-datepicker.js"></script>
<script src="{{ url() }}/js/progressive/jplayer/jquery.jplayer.min.js"></script>
<script src="{{ url() }}/js/progressive/jplayer/jplayer.playlist.min.js"></script>
<script src="{{ url() }}/js/progressive/jquery.scrollbar.min.js"></script>
<script src="{{ url() }}/js/progressive/main.js"></script>
<script type="text/javascript">
  $(".alert").alert();
</script>
</body>
</html>