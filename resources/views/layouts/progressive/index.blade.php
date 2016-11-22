<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Winners and Learners :: Win or learn, try not to lose ::</title>
  <meta name="keywords" content="Winners Learners, Megasena simulator, Powerball simulator, Euro-millions simulator, lotto generator">
  <meta name="description" content="Winners Learners: Play and win excitingly, using a bunch of ways, like playing lottories like Mega-sena, Power-ball, Euro-millions etc.">
  <meta name="author" content="">
  <style type="text/css">
    .tp-bgimg{
      -webkit-transform-origin: 100% 0;
      -moz-transform-origin: 100% 0;
      -ms-transform-origin: 100% 0;
      -o-transform-origin: 100% 0;
      transform-origin: 100% 0;
      -webkit-animation: all 20000ms linear 0s infinite alternate;
      animation: all 20000ms linear 0s infinite alternate;
    }
  </style>
  @include('pages.includes.page-includes')
<!-- REVOLUTION BANNER CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="{{ url() }}/rs-plugin/css/settings.css" media="screen" />
<!-- //styling for slider -->
<!-- //including js files -->
  
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
    <script src="{{ url() }}/js/progressive/jquery.selectBox.min.js"></script>
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

<!-- /////js files -->
</head>
<body class="fixed-header hidden-top">
  <div class="page-box">
    <div class="page-box-content">
      @include('pages.includes.user-top-nav')
      @include('pages.includes.header') 
        
      @include($pages)

    </div><!-- //page-box-content -->
  
  </div><!-- ///page-box -->
  <div class="clearfix"></div>
  <footer id="footer">
      @include('pages.includes.footer')
  </footer>

</body>
</html>