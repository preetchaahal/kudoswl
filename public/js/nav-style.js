(function($) {

  $.fn.menumaker = function(options) {
      
      var cssmenu = $(this), settings = $.extend({
        title: "Menu",
        format: "dropdown",
        sticky: false
      }, options);

      return this.each(function() {
        cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
        /*$(this).find("#menu-button").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('ul');
          if (mainmenu.hasClass('open')) { 
            mainmenu.slideUp(500).removeClass('open');
          }
          else {
            mainmenu.show().addClass('open');
            if (settings.format === "dropdown") {
              mainmenu.find('ul').slideDown(500);//show();
            }
          }
        });*/

        //cssmenu.find('li ul').parent().addClass('has-sub');

        /*multiTg = function() {
          cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
          cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            //show or hide the mega-menu div
            if($(this).siblings('.mega-menu'))
              //console.log("Mega menu found opend");
              $('.mega-menu .table').hide();
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').slideUp(500);//hide();
            }
            else {
              $(this).siblings('ul').addClass('open').slideDown(500);//show();
            }
          });
        };*/

        //if (settings.format === 'multitoggle') multiTg();
        //else cssmenu.addClass('dropdown');

        //if (settings.sticky === true) cssmenu.css('position', 'fixed');

        
      });
  };
})(jQuery);

(function($){
$(document).ready(function(){

  $(document).ready(function() {
      $("#cssmenu").menumaker({
        title: "Menu",
        format: "multitoggle"
      });


      $("#cssmenu").prepend("<div id='menu-line'></div>");

      var foundActive = false, activeElement, linePosition = 0, menuLine = $("#cssmenu #menu-line"), lineWidth, defaultPosition, defaultWidth;

      $("#cssmenu > ul > li").each(function() {
        if ($(this).hasClass('active-link')) {
          activeElement = $(this);
          foundActive = true;
        }
      });

      if (foundActive === false) {
        activeElement = $("#cssmenu > ul > li").first();
      }

      defaultWidth = lineWidth = activeElement.width();

      defaultPosition = linePosition = activeElement.position().left;

      menuLine.css("width", lineWidth);
      menuLine.css("left", linePosition);

      $("#cssmenu > ul > li").hover(function() {
        activeElement = $(this);
        lineWidth = activeElement.width();
        linePosition = activeElement.position().left;
        menuLine.css("width", lineWidth);
        menuLine.css("left", linePosition);
        //display the caret icon upon hover
      }, 
      function() {
        menuLine.css("left", defaultPosition);
        menuLine.css("width", defaultWidth);
      });

});


});
})(jQuery);
//fix for non display of menu when window width between 845px-863px
