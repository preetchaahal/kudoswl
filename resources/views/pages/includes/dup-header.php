<!-- nav styling on hover -->
<script src="<?php echo SITE_URL; ?>js/nav-style.js"></script>
<link rel="stylesheet" href="<?php echo SITE_URL; ?>css/nav-style.css" />
<style type="text/css">
/* ///navbar container class fix ends */
.exp-li a{
  font-size: 14px;
}
.exp-li{
  position: relative;
}
.exp-li>ul{
  position: absolute;
  top: 100%;
  min-width: auto;
  padding: 10px;
  background-color: rgba(242, 242, 242, 1);
}
.exp-li:hover ul{
  display: inline-block;
}
.exp-li>ul>li{
  padding: 0px 5px !important;
  display: inline-block;
}
.mega-menu{
  position: absolute;
  left: -60%;
  top: 104%;
  min-width: 100%;
  background-color: transparent;
}
#cssmenu .mega-table{
  height: 100%;
  overflow: hidden;
}
.mega-table>div{
  padding: 40px 10px;
}
.mega-table div a{
  display: inline-flex !important;
}
.mega-table div a img{
  width: 40% !important;
  max-height: 80px;
}
.mega-table a span{
  margin-left: 5px;
  text-align: left;
  font-weight: normal;
  color: #333;
}
.mega-menu .motor,
.mega-menu .lotto,
.mega-menu .ads{
  display: none;
}
.mega-menu div{
  font-size: 100%;
  height: 100%;
}
.mega-menu .text{
  text-align: left;
  line-height: 1.2em;
  font-size: 90%;
}
#cssmenu .exp-li>ul>li>a {
    padding: 5px;
    width: 100px;
}
#cssmenu td img{
  border: inset 2px rgba(99, 99, 99, 0.78);
}
.mega-td-hover{
  cursor: pointer;
  background-color: rgba(55,153, 210, 0.3);
  transition: all 0.3s ease-in;
}
.mega-td-hover a{
  text-decoration: none;
}

/* featured button ribbon shaped */
.header-wrapper{
  position: relative;
}
@media all and (min-width: 1200px){
    .hexagon{
      position: absolute;
      top: 0;
      left: 85%;
    }
    .hexagon a{
      height: 100%;
      width: 100%;
    }
}
@media all and (min-width: 768px) and (max-width: 1199px) {
    header .header-wrapper>.container{
      padding-left: 0;
      padding-right: 0;
      margin-left: 0;
      margin-right: 0; 
    }
    .hexagon{
      position: absolute;
      top: 0;
      left: 90%;
    }
    .hexagon a{
      height: 100%;
      width: 100%;
    }
}


@media only screen and (max-width : 768px) {
    
    .header .right-box {
        display: inline-table;
    }
    .logo-box{
      position: absolute;
    }
    #menu-button{
      margin-top: 30px !important;
    }
    .exp-li a{
      font-size: 14px;
    }
    .exp-li{
      position: relative;
    }
    .exp-li>ul{
      position: absolute;
      top: 100%;
      min-width: auto;
      padding: 10px;
      background-color: rgba(242, 242, 242, 1);
    }
    .exp-li:hover ul{
      display: inline-block;
    }
    .exp-li>ul>li{
      padding: 10px;
      display: inline-block;
    }
    .exp-li>ul>li>a{
      text-transform: uppercase !important;
    }
    .mega-menu{
      z-index: 999999;
      position: absolute;
      top: 101% !important;
      min-width: 100%;
      background-color: rgba(242, 242,242, 1);
    }

}
/* fix for sm devices navbar container class removing width */

@media only screen and (max-width : 768px) {
    .header .right-box-wrapper {
      display: table-row;
    }
    .header>.header-wrapper>.container{
      min-width: 100%;
      padding: 0;
    }
    .header>.header-wrapper>.container>.container-fluid{
      padding: 0;
    }
    #cssmenu ul ul li a {
      width: 140px;
    }
}
/* fix for custom services box on hover */
@media only screen and (max-width : 820px) {
    .mega-menu{
      top: 210%;
    }
    #cssmenu ul ul li a {
        padding: 15px 20px;
        width: auto;
    }
    .header .right-box{
      padding: 0;
    }
}
@media all and (max-width: 991px){
  .header>.header-wrapper>.container{
      min-width: 100%;
      padding: 0;
    }
    .header>.header-wrapper>.container>.container-fluid{
      padding: 0;
    }
}


</style>
<!-- nav styling on hover -->
<script type="text/javascript">
  //fix for full navigation
</script>
<header class="header header-two">
  
  <div class="header-wrapper">
    <div class="container">
      <div class="container-fluid">
      
        <div class="col-xs-5 col-sm-2 col-xs-offset-0 col-md-2 logo-box">
          <div class="logo">
            <a href="<?php echo SITE_URL;?>">
              <img src="<?php echo SITE_URL;?>images/logo.png" class="logo-img" alt="Winners Learners logo">
            </a>
          </div><!-- //logo -->
        </div><!-- .logo-box -->

        <div class="col-xs-12 col-sm-10 col-md-10 right-box">
          <div class="right-box-wrapper">

                <nav id='cssmenu'>
                  <ul>
                    <li class="<?php if($page == "index") echo "active"; ?>">
                      <a href="index.php" >Home</a>
                    </li>
                    <li class="has-sub <?php if( $page == "about_us" ) echo "active"; ?>">
                      <a href="about_us.php" >About Us</a>
                    </li>
                    <li class="exp-li">
                        <a href="#">Services</a>
                        <ul>
                            <li><a href="#" data-mega="lotto">Lotto Strategies</a></li>
                            <li><a href="#" data-mega="motor">Motor Vehicle</a></li>
                            <li><a href="ads.php" data-mega="ads">Classified Ads</a></li>
                        </ul>
                        <div class="mega-menu">
                                <div class="mega-table motor">
                                    <div class="row">
                                      <div class="col-sm-4"><img src="#" height="150" width="200"></a></div>
                                      <div class="col-sm-8 text"><b>Motor</b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</div>
                                    </div><!-- //row -->

                                </div><!-- ////.mega-table -->
                                <div class="mega-table ads">
                                    
                                    <div class="row">
                                      <div class="col-sm-4"><img src="#" height="150" width="200"></div>
                                      <div class="col-sm-8 text"><b>Ads</b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                    </div><!-- ///row -->

                                </div><!-- ///.mega-table -->
                                <div class="mega-table lotto">
                                    
                                    <div class="col-sm-4">
                                      <a href="megasena-simulator.php">
                                        <img src="images/lotto/megasena-logo.png">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                      </a>
                                    </div><!-- //col-md-4 -->
                                    <div class="col-sm-4">  
                                        <a href="powerball-simulator.php">
                                          <img src="images/lotto/powerball-logo.png" >
                                          <span><b>Lottos</b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                        </a>
                                    </div><!-- ///col-md-4 -->
                                    <div class="col-sm-4">
                                        <a href="euromillions-simulator.php">
                                          <img src="images/lotto/euromillions-logo.png" >
                                          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                        </a>
                                    </div><!-- ///col-md-4 -->
                                
                                </div><!-- ///.mega-table -->
                            
                        </div><!-- //mega-menu -->
                        
                    </li><!-- //exp-li -->
                    <li class="<?php if($page == "news") echo "active"; ?>">
                      <a href="news.php">Globe News</a>
                    </li>
                    <li class="<?php if($page == "blog") echo "active"; ?>">
                      <a href="blog.php">Blog</a>
                    </li>
                    <li class="<?php if($page == "channel") echo "active"; ?>"><a href="channel.php">Videos</a></li>
                    <li class="<?php if($page == "ads") echo "active"; ?>"><a href="ads.php" >Advertising</a></li>
                    <li class="<?php if($page == "contact_us") echo "active"; ?>"><a href="contact_us.php" >Contact Us</a></li>
                    <!--<li class="<?php //if($page == "quote") echo "active"; ?>"><a href="quote.php">Request a quote!</a></li>-->
                    
                  </ul>
                  
                </nav>
              
            
          </div><!-- /right-box-wrapper -->
        </div><!-- //right-box -->
      </div><!-- //row -->
    </div><!-- //container -->
    
    <div class="hexagon hidden-xs"><a href="#" class="featured-anchor"><img src="images/featured-anchor.png"></a></div>

  </div><!-- //header-wrapper  -->
</header><!-- ///header -->

<script type="text/javascript">
  $(".exp-li>ul>li>a").on("mouseenter", function(){
      //settingthe width of the mega-menu as per the width of ul 
      $(".mega-menu").css('width', 'auto');
      var $this1 = $(this);
      //remove text underline from each nav
      $.each( $('.exp-li>ul>li>a'), function(){
          $(this).css('color', 'rgba(0, 0, 0, 0.78)').css('border-bottom', 'solid 4px transparent');
      });
      //fetch the data-mega of the hovered element
      var divToShow = $(this).attr('data-mega');
      $.each( $('.mega-menu .mega-table'), function(){
          $(this).hide();
          if( $(this).hasClass(divToShow) )
          {  
            $this1.css('color', 'rgba(0, 0, 0, 0.95)').css('border-bottom', 'solid 4px rgb(55,153,210)').css('transition','background-color 0.3s ease-in').css('text-decoration', 'none');
            $(this).show();
          }
      });
  });
  $(".exp-li").on("mouseleave", function(){
      $('.mega-menu .mega-table').hide(); 
  });

  //hide mega-menu on smaller screen devices when button toggled
  $('.exp-li .submenu-opened').on("mouseover", function(){
      //console.log("Clicked");
      $(".mega-menu .mega-table").hide();
  })
  //setting the width of the ul of the exp-li(expanded li) of the mega-menu
  $('.exp-li, .exp-li a').on('mouseover', function(){
      var cummulativeWidthOfLi = 0;
      var cummulativeHeightOfLi = 0;
      $.each($('#cssmenu>ul>li'), function(){
        cummulativeWidthOfLi += $(this).width();
        //cummulativeHeightOfLi += $(this).innerHeight();
      });
      //setting the width to the sidth of the navigation bar
      $(this).find('ul').width(cummulativeWidthOfLi);
      $(this).find('ul').css('padding','40px 0').css('border', 'solid 2px rgba(99, 99, 99, 1)').css('border-radius', '2px');
      //setting the width of the mega-menu to be the width of the navigation
      // here 140 = 120(width of the a tag inside the .exp-li plus the padding left and right of it)
      $('#cssmenu .mega-menu').width(cummulativeWidthOfLi-130).height($('.exp-li ul').height()+80).css('overflow', 'hidden');
  }).on('mouseout', function () {
    //fix of mega-menu displaying bug when hovered once
      $('#cssmenu .mega-menu').height(0);
  });
  //hover background to 2 tds of mega-menu
  $('#cssmenu .mega-table>div').on('mouseover', function(){
      $(this).addClass('mega-td-hover');
  }).on('click', function(){
      //find the href of the anchor tag inside the menu
      location.reload($(this).find('a').attr('href'));
  }).on('mouseout', function(){
      $(this).removeClass('mega-td-hover');
  });

</script>
