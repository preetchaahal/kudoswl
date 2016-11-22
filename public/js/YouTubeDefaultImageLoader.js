// Load & insert into DOM Youtube iframe_api
/*var tag = document.createElement('script');

tag.src = "http://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

/* Create Player */
/*var player;

function onYouTubeIframeAPIReady() {

  console.log('Api Loaded');

  $(".youtubeVideoLoader").each(function() {
    // Set the BG image from the youtube ID
    $(this).css('background-image', 'url(//i.ytimg.com/vi/' + this.id + '/hqdefault.jpg)');

      // Click the video div
      $(document).delegate('#' + this.id, 'click', function() {
        // Vemos le id del video
        console.log(this.id);

        // Create new instance of player
        player = new YT.Player('videoModalContainer', {
          videoId: this.id,
          width: 1280,
          height: 720,
          events: {
            'onReady': OpenModal,
            'onStateChange': console.log('Changed')
          }
        });

        // Show Modal
        function OpenModal() {
          $("#youtubeModal").modal({backdrop: "static"});
          // Set Highres
          //player.setPlaybackQuality('highres');
          // Play Video
          player.playVideo();
        };
      });// /click

  }); // /each video

  // Add a Lisener to Modal CLose Button
  $('#CloseModalButton').click(function(){
        console.log('Stop Preset');
        player.destroy();
      });
}


*/

// Set the BG image from the youtube ID
$('.images-box').each(function(){
    $(this).css('background-image', 'url(//i.ytimg.com/vi/' + this.id + '/hqdefault.jpg)');
});
autoPlayYouTubeModal();

  //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
  function autoPlayYouTubeModal() {
      var trigger = $("body").find('.images-box"]');
      trigger.click(function () {
          var theModal = $(this).data("target"),
              videoSRC = $(this).attr("data-theVideo"),
              videoSRCauto = videoSRC + "?autoplay=1";
          $(theModal + ' iframe').attr('src', videoSRCauto);
          $(theModal + ' button.close').click(function () {
              $(theModal + ' iframe').attr('src', videoSRC);
          });
          $('.modal').click(function () {
              $(theModal + ' iframe').attr('src', videoSRC);
          });
      });
  }