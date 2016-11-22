<link rel="stylesheet" href="https://cdn.plyr.io/1.8.8/plyr.css">
<style type="text/css">
	.video-box{
		margin: 0 auto 40px;
	    max-width: 350px;
	    height: auto;
	}
	.gallery h5,
	.main-desc h4{
		margin:0;
		padding: 5px 10px;
	}
	.gallery p,
	.main-desc p{
		padding: 5px 10px;
	}
	.img-thumb:hover{
		cursor: pointer;
	}
	.video-box .fa-icon-wrap{
		position: absolute;
	    top: 35%;
	    left: 40%;
	    background-color: rgb(65, 148, 248);
	    font-size: 4em;
	    border-radius: 5%;
	    height: 40px;
	}
	.video-box .fa-youtube-play{
		position: relative;
		top:-22px;
	}
	.video-box .thumb-play{
		position: absolute;
	    left: 40px;
	    top: 40px;
	    width: 20px;
	    height: 20px;
	    display: block;
	    fill: currentColor;
	} 
	.video-box .plyr__play-large {
		display: block;
		top: 40%;
		left: 50%;
		opacity: 0.9;
	}
	.gallery>.row>div{
		min-height: 375px;
	}
</style>

<section id="main">
  
  <header>
    <div class="container title-box">
      <h1 class="title">Latest video</h1>
    </div>	
  </header>

  	<?php
			if( $pageCount == 1 ){
			$featured_id = $videos[0]->id;
			$title_lang = unserialize($videos[0]->title);
	        $content_lang = unserialize($videos[0]->description);
	?>
	<div class="featured-video container">
		<div class="col-xs-12 col-md-8 col-md-offset-1">
		
		<div class="f-video" data-type="youtube" data-video-id="<?php echo $videos[0]->url; ?>"></div>
		
		</div>
		<div class="col-md-2 main-desc">
			<h4><?php echo $title_lang[1];//echo $title_lang[$_SESSION['langid']-1]; ?></h4>
			<p><?php echo $content_lang[1];//echo $content_lang[$_SESSION['langid']-1]; ?></p>
		</div>
		
	</div>
	<hr>
	<?php } ?>
  <div class="container">
    <div class="row">
      
      <div class="content gallery col-md-12">
		<div class="row">
		  
			<?php
		  	//for pagination 
			//$start_from = ($pageCount-1) * $num_rec_per_page;
			//{
				//$resultset = $obj_Common->get_query("status != 0 ","channel_videos", "*","LIMIT $start_from,$num_rec_per_page");
				//while ( $row = mysql_fetch_array($resultset) )
				//{
				if( $pageCount > 1 )
					$counter = 0;
				else
					$counter = 1; 
				for( $i=$counter; $i<count($videos); $i++ )
				{
					$title_lang = unserialize($videos[$i]->title);
                    $content_lang = unserialize($videos[$i]->description);
			?>

		  <div class="col-sm-4">
			<div class="video-box frame frame-padding frame-shadow-lifted">
			<!--<div class="f-video" data-type="youtube" data-video-id="<?php //echo $row['url']; ?>"><!--</div>-->
				<div class="img-thumb"><img src="http://img.youtube.com/vi/<?php echo $videos[$i]->url; ?>/0.jpg" data-video-id="<?php echo $videos[$i]->url; ?>" data-title="<?php echo ucfirst($title_lang[$lang_id-1]); ?>" data-content="<?php echo ucfirst($content_lang[$lang_id-1]); ?>" class="img img-responsive">
				<!--<span class="fa-icon-wrap"><i class="fa fa-youtube-play"></i></span>-->
				<button type="button" data-plyr="play" class="plyr__play-large" aria-label="Play"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#plyr-play"></use></svg><span class="plyr__sr-only">Play</span></button>
				</div>
				<h5><?php echo ucfirst($title_lang[$lang_id-1]); ?></h5>
				<p><?php echo ucfirst($content_lang[$lang_id-1]); ?></p>
		  	</div>
		  </div><!-- .images-box -->

		  <?php		
				}
			//}
		  ?>
		  <div class="col-sm-12 col-md-12">
			<div class="pagination-box">
			  <ul class="pagination">
				<li <?php if($pageCount==1) echo'class="disabled active"'; ?>>
					<?php echo "<a href='". url('videos') ."?page=1'>"; ?>
					<i class="fa fa-angle-left"></i></a>
				</li>
				<?php 
				for ($i=1; $i<=$total_pages; $i++)
				{ 
	            	if($pageCount==$i)
	            		echo "<li class='disabled active'>";
	            	else
	            		echo "<li>";
	            	echo "<a href='". url('videos') ."?page=".$i."'>".$i."</a></li>"; 
	        	};
	        	?>
				<?php // Goto last page
					echo "<li ";
            		if( ($num_rec_per_page * $pageCount) >= $total_videos) echo "class='disabled active'";
					echo "><a href='". url('videos') ."?page=$total_pages'>
							<i class='fa fa-angle-right'></i></a></li>";
				?>
			  </ul>
			  <i class="pagination-text">Displaying <?php echo ($pageCount-1)*($num_rec_per_page)+1; ?> to <?php  $lowerlimit = $num_rec_per_page * $pageCount; while($lowerlimit > $total_videos) {$lowerlimit--;}; echo $lowerlimit; ?> (of <?php echo $total_videos; ?> videos)</i>
			</div><!-- .pagination-box -->
		  </div>
		
		</div><!-- //row -->
      
      </div><!-- .content -->
    </div><!-- //row -->
  
  </div><!-- .container -->






	
</section>
<script src="https://cdn.plyr.io/1.8.8/plyr.js"></script>
<script>
//initialize the custom youtube player
var player = plyr.setup({
	debug: true,
	title: 'Video'
});
var mainPlayer = player[0].plyr;

//enable clicking fucnitonlaity on thumbnails and playing video in the main player
$('.img-thumb').on("click", function(){
	$('.img-thumb button').each(function(){
		$(this).show(10);
	});
	$(this).find('button').hide(500);
	var videoId = $(this).find('img').attr("data-video-id");
	var videoTitle = $(this).find('img').attr("data-title");
	var videoContent = $(this).attr("data-content");

	mainPlayer.source({
		type: 'video',
		title: "",
		sources: [{
			src: videoId,
			type: 'youtube' 
		}]
	});
	setTimeout(function(){
		mainPlayer.play();
	}, 1000);
	//change the title and desc at the right of the main video player to the once clicked now
	
	$('.featured-video .main-desc h4').html(videoTitle);
	$('.featured-video .main-desc p').html(videoContent);

	setTimeout(function(){
		$('html, body').animate({scrollTop:0}, 'slow');
	}, 1000);
});
</script>