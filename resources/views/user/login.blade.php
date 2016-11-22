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
                      
                      <form style="margin-top: -300px !important; padding-top: 50px !important;" class="form-box login-form form-validator" id="LoginAjax" action="{{ url('userLogin')}}" method="post">
                        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                        <h3 class="title">Login <small>or <a href="#" class="switch-form sing-up">Register</a></small></h3>
                        
                        <div class="form-group">
                          <label>User Name<span class="required">*</span></label>
                          <input class="form-control" type="text" value="" name="username" required>
                        </div><!-- //form-group -->
                          
                        <div class="form-group">
                          <label>Password<span class="required">*</span></label>
                          <input class="form-control" type="password" name="password" required>
                        </div><!-- //form-group -->
                          
                        
                        @if(CNF_RECAPTCHA =='true') 
                          <div class="form-group">
                              <label> Are u human ? {!! captcha_img('flat') !!}</label>
                          </div>   
                          <div class="form-group">
                              <input class="form-control" type="text" name="captcha" placeholder="Type Security Code"  required>
                          </div>
                          <!-- <div class="clr"></div> -->
                          <!--</div><!-- ///form-group -->  
                        @endif
                        
                        <div class="buttons-box clearfix form-group">
                          <span class="required"><b>*</b> Required Field</span><br>
                          <input type="hidden" name="group_id" value="3" />
                          <button type="submit" class="btn ladda-button" id="LoginAjaxBtn" data-style="expand-right"><span class="ladda-label">Login</span></button>
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
                      
                      <form class="form-box register-form form-validator" method="post" action="{{ url('userRegister')}}" id="RegisterAjax">
                        
                        @if(Session::has('message'))
                            {!! Session::get('message') !!}
                          @endif
                        <ul class="parsley-error-list">
                          @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                        <h3 class="title">Register <small>or <a href="#" class="switch-form sing-in">Login</a></small></h3>
                          
                        <div class="form-group">
                          <label>First Name: <span class="required">*</span></label>
                          <input class="form-control" type="text" name="firstname" value="" required>
                        </div><!-- /form-group -->
                          
                        <div class="form-group">
                          <label>Last Name: <span class="required">*</span></label>
                          <input class="form-control" type="text" name="lastname" value="" required>
                        </div><!-- /form-group -->
                          
                        <div class="form-group">
                          <label>Email: <span class="required">*</span></label>
                          <input class="form-control" type="email" name="email" value="" required>
                        </div><!-- /form-group -->

                        <div class="form-group">
                          <label>User Name: <span class="required">*</span></label>
                          <input class="form-control" type="text" name="username" value="" required>
                        </div><!-- /form-group -->

                        <div class="form-group">
                          <label>Password: <span class="required">*</span></label>
                          <input class="form-control" type="password" name="password" required>
                        </div><!-- /form-group -->

                        <div class="form-group">
                          <label>Confirm Password: <span class="required">*</span></label>
                          <input class="form-control" type="password" name="password_confirmation" required>
                        </div><!-- /form-group -->

                        <div class="form-group">
                          <label>Country: <span class="required">*</span></label>
                          <select name="country"  required id="txtcountry" class="form-control">
                              <option value="">Select country</option>
                                <?php
                                    foreach( $countries as $value ){
                                ?>
                                <option value="{{ $value->code }}">{{ $value->country_name }}</option>
                              <?php } ?>
                          </select>
                        </div><!-- /form-group -->
                        
                        <!-- <div class="form-group">
                          <label>Verify code: <span class="required">*</span></label> -->
                          <?php //echo '<img src="" alt="CAPTCHA" class="captcha" />'; ?>
                          
                        <!-- </div> -->
                        @if(CNF_RECAPTCHA =='true') 
                          <div class="form-group">
                              <label> Are u human ? {!! captcha_img() !!} </label>
                          </div>
                          <div class="form-group">  
                              <input type="text" name="captcha" placeholder="Type Security Code" class="form-control" required/>
                              <!-- <div class="clr"></div> -->
                          </div><!-- ///form-group -->  
                        @endif

                        <!-- <div class="form-group">
                          <input type="text" class="form-control" name="regCaptcha" required="required" id="captcha" >
                        </div> --><!-- //form-group -->
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
<script type="text/javascript" src="{{ asset('sximo/js/plugins/jquery.form.js') }}"></script>
<script type="text/javascript">
  //for pop up message
  $(".alert").alert();
  
  //for loading btn 
  //Ladda.bind( 'button[type=submit]' );
</script>
<script type="text/javascript">
  $(document).ready(function(){
    
    var loginOption = { 
          dataType:      'json', 
          beforeSubmit :  loginShowRequest,
          success:       loginShowResponse,
          error: function(e, f, g){
            console.log("error =."+ e + "f=>"+ f +" g>"+ g);
          }
    };

    $('#LoginAjax').ajaxForm(loginOption);

    //for registration form
    var registerOption = { 
          dataType:      'json', 
          beforeSubmit :  registerShowRequest,
          success:       registerShowResponse,
          error: function(e, f, g, h){
            console.log("error =."+ e + "f=>"+ f +" g>"+ g +"h=>"+ h);
          }
    };

    $('#RegisterAjax').ajaxForm(registerOption);

    
  });

function loginShowRequest(formData, jqForm, loginOption){
  var queryString = $.param(formData);
  //alert("About to submit\n"+ queryString);
  //$('.ajaxLoading').show();
  return true;   
}  
function loginShowResponse(responseText, statusText, xhr, $form) {    
  console.log("Data returned after ajax call"+ responseText +" status text"+ statusText +"xhr "+ xhr +"form"+ $form);
  if(responseText.status == 'success')
  {
    Ladda.stopAll();
    window.location.href = responseText.url;  
  } 
  if( responseText.status == 'error' ){
    Ladda.stopAll();
  
    $errors = responseText;
    $.each( $errors.message, function( key, value ) {

        console.log("error "+ key +" => "+ value);
        $('.notification-container').append('<div class="alert alert-danger alert-dismissable ajax-notification" data-time="00:09" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-bell" aria-hidden="true"></i>'+ value +'</div><!--- ///alert -->');
    
    });
    return false;
  } 

}

//ajax request and response functions for register form
function registerShowRequest(formData, jqForm, loginOption){
  var queryString = $.param(formData);
  //alert("About to submit\n"+ queryString);
  //$('.ajaxLoading').show();
  return true;   
}  
function registerShowResponse(responseText, statusText, xhr, $form) {    
  
  //console.log("Data returned after ajax call"+ responseText.status +" status text"+ statusText +"xhr "+ xhr +"form"+ $form);
  if(responseText.status == 'success')
  {
    Ladda.stopAll();
    //console.log("Url returned"+ responseText.url);
    window.location.href = responseText.url;  
  } 
  if( responseText.status == 'error' ){
    Ladda.stopAll();
  
    $errors = responseText;
    $.each( $errors.message, function( key, value ) {

        console.log("error "+ key +" => "+ value);
        $('.notification-container').append('<div class="alert alert-danger alert-dismissable ajax-notification" data-time="00:09" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-bell" aria-hidden="true"></i>'+ value +'</div><!--- ///alert -->');
    
    });
    return false;
  } 

}

</script>
</body>
</html>