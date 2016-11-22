/*
jQuery Flying Popup, by Damian Szewczyk (netkevin)
damian.szewczyk@gmail.com
Version 1.8
Flying Popup plugin for jQuery. Allows to show floating HTML popups that follow page scroll/resize (also static HTML popups can be shown when desired). Popups can fly in from outside of the screen (from every direction)

See example usage in sample.html or run index.html for useful creator

Settings:
name   popup
type   jQuery
param   options                  hash            object containing config options
param   options[width]           int             popup width (0 = get the width from HTML/CSS), can be set in % - it'll take the percentage of current screen width
param   options[height]          int             popup height (0 = get the height from HTML/CSS), can be set in % - it'll take the percentage of current screen height
param   options[starttime]       int             when to show popup (in seconds) 0 to start immediately after firing $("ELEMENT_ID").popup() plugin
param   options[multipages_timer]bool            set to true when you want to use 'starttime' across multiple pages on your website. E.g. you want to show popup after 120 seconds when user is looking through your shop's content on any page
param   options[selfclose]       int             after what time self close popup. 0 - disable feature
param   options[popup_div]      string           id of popup DIV
param   options[overlay_div]    string           id of overlay DIV
param   options[close_id]        string          HTML id of element used to close popup
param   options[overlay]      bool               turn on/off overlay (true/false)
param   options[opacity_level]    float          opacity level of overlay (from 0 to 1)
param   options[overlay_cc]    bool              close popup on overlay click (true/false)
param   options[centered]      bool              center popup vertically and horizontally
param   options[top]          int/string         distance from top to show popup (in px or in percent ie. '20%') - pass 'center' to center vertically - works only for centered=false. Set '100%' to align to bottom
param   options[left]          int/string        distance from left to show popup (in px or in percent ie. '20%') - pass 'center' to center horizontally - works only for centered=false. Set 100% to align right
param   options[setcookie]      bool             use cookie to prevent showing popup multiple times (true / false)
param   options[setcookie_onclose]bool           works for setcookie=true. Cookie is set only when popup is closed by user (true / false)
param   options[cookie_name]    string           name of cookie, that is used
param   options[cookie_timeout]  int             how long should cookie be stored (in days, 0 = current session)
param   options[cookie_timeout_hours]int         how long should cookie be stored (in hours, 0 = current session). You can set both - cookie_timeout and cookie_timeout_hours
param   options[cookie_views]    int             how many times site may be viewed until the popup will be shown again (0 = don't use this)
param   options[floating]      bool              turn on/off floating popup (true/false)
param   options[floating_reaction]int            floating reaction in miliseconds (how quickly start floating after scrolling/resizing the page)
param   options[floating_speed]  int             smaller value = higher speed (by default = 12)
param   options[fly_in]      bool                turn on/off fly-in ads popup (true/false) - works only with floating popups
param   options[fly_from]       string           if fly_in = true, can be 'top-left', 'top-right', 'left', 'right', 'top', 'bottom', 'bottom-left', 'bottom-right' ('top' by default)
param   options[fly_out]      bool               turn on/off fly-out ads popup (true/false) - works only with floating popups
param   options[fly_to]       string             if fly_out = true, can be 'top-left', 'top-right', 'left', 'right', 'top', 'bottom', 'bottom-left', 'bottom-right' ('top' by default)
param   options[popup_appear]    string          how popup appears "show" (default), "fadeIn", "slideDown" (has sense when fly_in = false)
param   options[popup_appear_time]int            time of appearing (number in miliseconds) 0 or empty to show immediately
param   options[popup_disappear] string          how popup disappears "hide" (default), "fadeOut", "slideUp" (works for fly_out = false)
param   options[popup_disappear_time]int         time of disappearing (number in miliseconds) 0 to hide immediately - for fly_out = false
param   options[confirm_close]    bool           show native Javascript confirm box, when user tries to close the popup (default: false)
param   options[confirm_close_text]string        confirm box text (for confirm_close = true)
param   options[disable_on_mobile]    bool       wheteher popup should be disabled on mobile devices (default: false)
param   options[disable_on_desktop]    bool      wheteher popup should be disabled on desktop devices (default: false)
param   options[onOpen]      string/function     callback function fired after popup is shown
param   options[onClosed]      string/function   callback function fired after popup is closed
param   callback          string/function        callback function fired after popup is shown
*/

 (function($) {

   $.fn.popup = function(settings, callback) {
     var config = {
     width         : 0,
     height       : 0,
     starttime        : 0,
     multipages_timer  : false,
     selfclose      : 0,
     popup_div      : 'netkevin-popup',
     overlay_div    : 'netkevin-overlay',
     close_id      : 'baner_close, .netkevin-close',
     overlay      : false,
     opacity_level    : 0.7,
     overlay_cc      : true,
     centered      : true,
     top        : 130,
     left        : 200,
     setcookie       : false,
     setcookie_onclose  : false,
     cookie_name    : 'popup',
     cookie_timeout   : 0,
     cookie_timeout_hours: 0,
     cookie_views    : 0,
     floating      : true,
     floating_reaction  : 700,
     floating_speed   : 12,
     fly_in        : true,
     fly_from      : 'top',
     fly_out       : false,
     fly_to       : 'bottom',
     popup_appear     : 'show',
     popup_appear_time  : 0,
     popup_disappear   : 'hide',
     popup_disappear_time: 0,
     confirm_close    : false,
     confirm_close_text : 'Do you really want to close?',
     disable_on_mobile  : false,
     disable_on_desktop  : false,
     onOpen        : function() {},
     onClosed      : function() {}
  };

  if (settings) $.extend(config, settings);
  /**
   * Detect Mobile Browsers
   * http://detectmobilebrowsers.com/
   * Regex updated: 1 August 2014
   */
  var is_mobile = (function(a){
      return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))
  })(navigator.userAgent||navigator.vendor||window.opera);
  
  //variables used for floating
  var timer;          //timer to fire movePopup()
  var timer_anim = 0;      //timer to fire animatePopup()
  var goal;          //variable to set what is the vertical (top) goal to reach by floating popup
  var goal_left;        //variable to set what is the horizontal (left) goal to reach by floating popup
  var current_position;    //current 'top' position
  var current_position_left;  //current 'left' position
  var last_position;      //previous 'top' position
  var last_position_left;    //previous 'left' position
  var popup_content = '';    //content of popup
  var popup_object;      //jQuery object
  var $popup = $('#'+config.popup_div);    //popup DIV
  var $overlay = $('#'+config.overlay_div);//overlay DIV
  var cookie_timer = 0;
    this.each(function() {
     popup_object = $(this);
     $(this).hide();
     });
    // Check if we can show popup on mobile device
    if(config.disable_on_mobile && is_mobile) {
      return false;
    }
    
    // Check if we can show popup on non-mobile device
    if(config.disable_on_desktop && !is_mobile) {
      return false;
    }

   if (config.starttime == 0) { //start immediately after firing $("ELEMENT_ID").popup()
     setTimeout(function() { show_popup(callback) }, 250);
   } else { //show popup with configured amount of time
    if(config.multipages_timer) { //there is a timer through all pages with a script
      cookie_timer = getCookie("netkevin_cookie_timer");
      if(config.cookie_views > 0) {
        cookieValue = getCookie(config.cookie_name);
        if (cookieValue != "") {
          cookieValue = cookieValue -1;
          if (cookieValue <= 0) {
            setCookie(config.cookie_name, config.cookie_views, config.cookie_timeout, config.cookie_timeout_hours);
            setCookie("netkevin_cookie_timer", config.starttime, 0, 0);
          } else {
            setCookie(config.cookie_name, cookieValue, config.cookie_timeout, config.cookie_timeout_hours);
            return false;
          }
        }
      }
      // Show popup until it's deliberately closed
      if(cookie_timer == -1 && config.setcookie_onclose) {
        show_popup(callback);
        return this;
      }
      if(cookie_timer == -1) return false; //the popup was already shown - don't show again in current session
      if (cookie_timer != "") {
        config.starttime = cookie_timer;
      } else {
        setCookie("netkevin_cookie_timer", config.starttime, 0, 0);
      }
      setInterval(function() {
        c = getCookie("netkevin_cookie_timer");
        if(c >= 0) {
          c = c - 1;
          setCookie("netkevin_cookie_timer", c, 0, 0);
        }
      }, 1000);

    }
     setTimeout(function() { show_popup(callback) }, (config.starttime * 1000));
   }

  return this;

  //main function that shows the popup
   function show_popup(callback) {
    hidePopup(true);

     if (config.setcookie) { //check for cookie if you set "setcookie" to true
      //don't show popup if cookie is set
      cookieValue = getCookie(config.cookie_name);
       if (cookieValue != "") {
        if (config.cookie_views == 0) return false;
        cookieValue = cookieValue -1;
        if (cookieValue <= 0) {
          setCookie(config.cookie_name, config.cookie_views, config.cookie_timeout, config.cookie_timeout_hours);
        } else {
          setCookie(config.cookie_name, cookieValue, config.cookie_timeout, config.cookie_timeout_hours);
          return false;
        }
      }
     }
    //show overlay DIV - please set CSS for it
    if (config.overlay) {
      $("body").prepend('<div id="'+config.overlay_div+'"></div>');
      $overlay = $('#'+config.overlay_div);
      $overlay.css({'opacity': config.opacity_level }); //set opacity
      if(config.overlay_cc){
        //click on overlay = close popup
        $overlay.click(function(){
          //confirm popup closing
          if(config.confirm_close) {
            if(confirm(config.confirm_close_text)) {
              hidePopup();
            }
          } else {
            hidePopup();
          }
        });
      }
      //special treatment for dying IE6
      isIE = !$.support.opacity;
      isIE6 = isIE && typeof document.body.style.maxHeight == "undefined";
      if (isIE6) {
        $(window).bind('resize scroll', function () {
          $overlay.css({width: $(window).width(), height: $(window).height(), top: $(window).scrollTop(), left: $(window).scrollLeft()});
        }).trigger('scroll');
      }
    }

    //show popup DIV - please set CSS for it
    $("body").prepend('<div id="'+config.popup_div+'"></div>');
    // Set dimensions
    popup_object.show();
    popup_object.appendTo('#'+config.popup_div);

    $popup = $('#'+config.popup_div);
    // Set dimensions
    if (config.height > 0) {
        $popup.height(config.height);
        popup_object.css('height', '100%'); // to extend popup content to the selected height
    }
    if (config.width > 0) {
        $popup.width(config.width);
    }
    
    //centering popup vertically
    if(config.centered ) {
      config.top = ( $(window).height() - $popup.outerHeight() ) / 2;
      config.left = ( $(window).width() - $popup.outerWidth() ) / 2;
    } else {
      if (typeof(config.left) == 'string') {
        if (config.left.indexOf('%') != -1) {
          config.left_percent = config.left;
          if(config.left_percent == '100%') { //assume that for 100% popup should be aligned to right
            config.left = $(window).width() - $popup.outerWidth();
          } else {
            config.left = (parseInt(config.left) / 100) * $(window).width();
          }
        } else if(config.left == 'center') { //center horizontally
          config.left_percent = config.left;
          config.left = ( $(window).width() - $popup.outerWidth() ) / 2;
        }
      }
      if (typeof(config.top) == 'string') {
        if (config.top.indexOf('%') != -1) {
          config.top_percent = config.top;
          if(config.top_percent == '100%') { //assume that for 100% popup should be aligned to bottom
            config.top = $(window).height() - $popup.outerHeight();
          } else {
            config.top = (parseInt(config.top) / 100) * $(window).height();
          }
        } else if(config.top == 'center') { //center vertically
          config.top_percent = config.top;
          config.top = ( $(window).height() - $popup.outerHeight() ) / 2;
        }
      }
    }
    config.top = Math.round(config.top);
    config.left = Math.round(config.left);
    
    //fix position on resize
    $(window).resize(
      function() {
        // for width and height set in %
        if (typeof(config.width) == 'string' && config.width.indexOf('%') != -1) {
          $popup.width((parseInt(config.width) / 100) * $(window).width());
        }
        if (typeof(config.height) == 'string' && config.height.indexOf('%') != -1) {
          popup_object.css('height', '100%'); // to extend popup content to the selected height
          $popup.height((parseInt(config.height) / 100) * $(window).height());
        }
        if (config.centered ) {
          config.top = ( $(window).height() - $popup.outerHeight() ) / 2;
          config.left = ( $(window).width() - $popup.outerWidth() ) / 2;
        } else {
          if (config.left_percent != undefined) {
            config.left = config.left_percent;
          }
          if (config.top_percent != undefined) {
            config.top = config.top_percent;
          }
          if (typeof(config.left) == 'string') {
            if (config.left.indexOf('%') != -1) {
              if(config.left_percent == '100%') { //assume that for 100% popup should be aligned to right
                config.left = $(window).width() - $popup.outerWidth();
              } else {
                config.left = (parseInt(config.left) / 100) * $(window).width();
              }
            }  else if(config.left == 'center') {
              config.left_percent = config.left;
              config.left = ( $(window).width() - $popup.outerWidth() ) / 2;
            }
          }
          if (typeof(config.top) == 'string') {
            if (config.top.indexOf('%') != -1) {
              if(config.top_percent == '100%') { //assume that for 100% popup should be aligned to bottom
                config.top = $(window).height() - $popup.outerHeight();
              } else {
                config.top = (parseInt(config.top) / 100) * $(window).height();
              }
            }  else if(config.top == 'center') {
              config.top_percent = config.top;
              config.top = ( $(window).height() - $popup.outerHeight() ) / 2;
            }
          }
        }
        config.top = Math.round(config.top);
        config.left = Math.round(config.left);
        if (!config.floating) {
            var scrollTop = $(window).scrollTop();
            if(window.pageYOffset != undefined && window.pageYOffset > 0) scrollTop = window.pageYOffset;
            $popup.css({'top': (config.top + scrollTop)});
            $popup.css({'left': config.left});
        }
     });
    $(window).resize();
    var scrollTop = $(window).scrollTop();
    if(window.pageYOffset != undefined && window.pageYOffset > 0) scrollTop = window.pageYOffset;
    //var width = ( $(window).width() - $popup.outerWidth() ) / 2;
    //Fly-in popup only for floating popups
    if (config.fly_in && config.floating) { //fly-in popup - by default from top
      switch(config.fly_from) {
        case 'top-left':
          $popup.css("top",  (- $popup.outerHeight() + scrollTop)+"px");
          $popup.css("left", - $popup.outerWidth());
          break;
        case 'top-right':
          $popup.css("top", (- $popup.outerHeight() + scrollTop)+"px");
                    $popup.css("left", $(window).width() + $popup.outerWidth());
          break;
        case 'left':
          $popup.css("top", (config.top + scrollTop)+"px");
          $popup.css("left", - $popup.outerWidth());
          break;
        case 'right':
          $popup.css("top", (config.top + scrollTop)+"px");
                    $popup.css("left", $(window).width() + $popup.outerWidth());
          break;
        case 'bottom':
          $popup.css("top", ($(window).height()+ $(document).scrollTop())+"px");
          $popup.css({'left': Math.round(config.left)});
          break;
        case 'bottom-left':
          $popup.css("top", ($(window).height()+ scrollTop)+"px");
          $popup.css("left", - $popup.outerWidth());
          break;
        case 'bottom-right':
          $popup.css("top", ($(window).height()+ scrollTop)+"px");
                    $popup.css("left", $(window).width() + $popup.outerWidth());
          break;
        default:
          $popup.css("top", (- $popup.outerHeight() + scrollTop)+"px");
          $popup.css({'left': Math.round(config.left)});
      }

    } else { //not fly-in popup
      $popup.css({'left': Math.round(config.left)});
      $popup.css("top", (config.top  + scrollTop)+"px");
    }


    //close popup afer click on "close_id" element
    $('#'+config.close_id).click(
      function() {
        //confirm popup closing
        if(config.confirm_close) {
          if(confirm(config.confirm_close_text)) {
            hidePopup();
          }
        } else {
          hidePopup();
        }
        return false;
      }
    );

    //set floating popup
    if (config.floating) {
      setFloating();
    }

    //how popup should appear
    switch(config.popup_appear) {
      case 'fadeIn':
        $popup.fadeIn(config.popup_appear_time);
        break;
      case 'slideDown':
        $popup.slideDown(config.popup_appear_time);
        break;
      default: //'show' by default
        $popup.show(config.popup_appear_time);
        break;
    }

    
    //enable selfclose
    if(config.selfclose != 0) {
      setTimeout(hidePopup, (config.selfclose * 1000));
    }

    //set cookie that will prevent from showing popup again (if setcookie_onclose = false)
    if(config.setcookie && !config.setcookie_onclose) {
      setCookie(config.cookie_name, config.cookie_views, config.cookie_timeout, config.cookie_timeout_hours);
    }
    //callback function
    if($.isFunction(callback)){
      callback.call(this);
    }
    // onOpen function
    if($.isFunction(config.onOpen)){
      config.onOpen.call(this);
    }
   };

  //hide popup function
  function hidePopup(force_close) {
    if(!force_close && $.isFunction(config.onClosed)){
      config.onClosed.call(this);
    }
    //set cookie that will prevent from showing popup again on popup close (if setcookie_onclose = true)
    if(config.setcookie && config.setcookie_onclose && !force_close) {
      setCookie(config.cookie_name, config.cookie_views, config.cookie_timeout, config.cookie_timeout_hours);
    }
    if(force_close != undefined || config.fly_out == false) {
      if(config.fly_out == false) { //slow disappearing when fly_out disabled
        //how popup should disappear
        switch(config.popup_disappear) {
          case 'fadeOut':
            $popup.fadeOut(config.popup_disappear_time, function(){$popup.children().hide().prependTo("body");$popup.remove();});
            break;
          case 'slideUp':
            $popup.slideUp(config.popup_disappear_time, function(){$popup.children().hide().prependTo("body");$popup.remove();});
            break;
          default: //'hide' by default
            if(config.popup_disappear_time == 0) {
              $popup.hide();
              $popup.children().hide().prependTo("body");
              $popup.remove();
            } else {
              $popup.hide(config.popup_disappear_time, function(){$popup.children().hide().prependTo("body");$popup.remove();});
            }
            break;
        }
      } else {
        $popup.children().hide().prependTo("body");
        $popup.remove();
      }
      if (config.overlay) {
        $overlay.remove();
      }
      if (config.floating) {
        clearInterval(timer);
        clearTimeout(timer_anim);
      }
    } else if(config.fly_out == true) { //popup should fly out of the screen
      if (config.overlay) {
        $overlay.remove();
      }
      switch(config.fly_to) { //direction to fly out of the screen
        case 'top-left':
          config.top = -1.5 * $popup.outerHeight();
          config.left = -1.5 * $popup.outerWidth();
          config.centered = false;
          break;
        case 'top-right':
          config.top = -1.5 * $popup.outerHeight();
          config.left = $(window).width()  + $popup.outerWidth();
          config.centered = false;
          break;
        case 'left':
          config.left = -1.5 * $popup.outerWidth();
          config.centered = false;
          break;
        case 'right':
          config.left = $(window).width()  + $popup.outerWidth();
          config.centered = false;
          break;
        case 'bottom':
          config.top = $(window).height() +  $popup.outerHeight();
          break;
        case 'bottom-left':
          config.top = $(window).height()+  $popup.outerHeight();
          config.left = -1.5 * $popup.outerWidth();
          config.centered = false;
          break;
        case 'bottom-right':
          config.top = $(window).height() + $popup.outerHeight();
          config.left = $(window).width()  +  $popup.outerWidth();
          config.centered = false;
          break;
        default:
          config.top = -1.5 * $popup.outerHeight();
      }
      setTimeout(function(){ hidePopup(true)}, 3000);
    }
  }

   //initiate floating
   function setFloating(){
    setTimeout(movePopup, 10);
     timer = setInterval(movePopup, config.floating_reaction);
   }

   //to float popup with page scrolling/resizing
   function movePopup() {
    var scrollTop = $(window).scrollTop();
    if(window.pageYOffset != undefined && window.pageYOffset > 0) scrollTop = window.pageYOffset;
     goal = Math.round(scrollTop + config.top);
    if (config.centered) {
      goal_left = Math.round(( $(window).width() - $popup.outerWidth() ) / 2);
    } else {
      goal_left = config.left;
    }
     current_position = parseInt($popup.css("top"));
     current_position_left = parseInt($popup.css("left"));
    if((current_position != goal || current_position_left != goal_left) && timer_anim == 0) animatePopup();
   }

  //animating popup - changing horizontal and vertical position
   function animatePopup() {
     current_position = Math.round((config.floating_speed * current_position + goal) / (config.floating_speed+1));
     previous_position_left = current_position_left;
     current_position_left = Math.round((config.floating_speed * current_position_left + goal_left) / (config.floating_speed+1));
     if (current_position != last_position || current_position_left != last_position_left) {
      $popup.css("top", Math.round(current_position)+"px");
      $popup.css("left", Math.round(current_position_left)+"px");

      timer_anim = setTimeout(animatePopup, 20);
      last_position = current_position;
      last_position_left = current_position_left;
    }else if(current_position != goal || current_position_left != goal_left){
      last_position = current_position;
      last_position_left = current_position_left;
      if(current_position > goal) {
        current_position = current_position - 1;
      } else if(current_position < goal) {
        current_position = current_position + 1;
      }
      if(current_position_left > goal_left) {
        current_position_left = current_position_left - 1;
      } else if(current_position_left < goal_left) {
        current_position_left = current_position_left + 1;
      }
      timer_anim = setTimeout(animatePopup, 20);
    } else {
      last_position = current_position = goal;
      last_position_left = current_position_left = goal_left;
      $popup.css("top", Math.round(goal)+"px");
      $popup.css("left", Math.round(goal_left)+"px");
      timer_anim = 0;
    }
   }
   //set cookie
  function setCookie(c_name, value, expiredays, expirehours) {
    var exdate=new Date();
    if(expiredays == 0) expiredays = null;
    exdate.setDate(exdate.getDate()+expiredays);
    if(expirehours == 0) expirehours = null;
    exdate.setHours(exdate.getHours()+expirehours);
    document.cookie=c_name+ "=" +escape(value)+
    ((expirehours==null && expiredays==null) ? "" : ";expires="+exdate.toGMTString())+
    ";path=/";
  };
  //get cookie
  function getCookie(c_name){
    if (document.cookie.length>0){
      c_start=document.cookie.indexOf(c_name + "=");
      if (c_start!=-1) {
        c_start=c_start + c_name.length+1;
        c_end=document.cookie.indexOf(";",c_start);
        if (c_end==-1) c_end=document.cookie.length;
        return unescape(document.cookie.substring(c_start,c_end));
      }
    }
    return "";
  }

   };

 })(jQuery);
