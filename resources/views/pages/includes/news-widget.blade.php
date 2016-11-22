<div class="banner-set load bottom-padding full-width-box">
		<div class="container">
			<div class="title-box text-center">
			  <h1 class="title">Latest NEWS out there!</h1>
			</div>
		  <div class="banners">
		  	<?php
	                //$newstitle=$obj_Common->get_query("nw_newscat_id!=''",'tbl_news',"nw_id,nw_tital,nw_image,nw_description",'order by nw_id DESC LIMIT 10 ');
	                //while($rownewsti=mysql_fetch_object($newstitle))
	                foreach ($latest_news as $key => $value){
	                	$title = @unserialize($value->nw_tital);
						$desc  = @unserialize(htmlspecialchars_decode(stripslashes($value->nw_description)));
	          ?>

			<a href="news_details.php?nc_id=<?php echo $value->nw_id;?>" class="banner">
			  <img src="{{ url() }}/img/news/<?php echo $value->nw_image; ?>" width="253" height="158" alt="">
			  <h2 class="title"><?php echo ucfirst($title[1]); ?></h2>
			  <div class="description">
				  	<p class="descriptions">
				  	<?php
						$string = strip_tags($desc[1]);
						if (strlen($string) > 400) {
						$stringCut = substr($string, 0, 400);
						$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'......'; 
							}
						echo $string;
						?>
			  </div>
			</a><?php } ?>			
		  </div><!-- .banners -->
		  <div class="clearfix"></div>
		</div>
		<div class="nav-box">
		  <div class="container">
			<a class="prev" href="#"><span class="glyphicon glyphicon-arrow-left"></span></a>
			<div class="pagination switches"></div>
			<a class="next" href="#"><span class="glyphicon glyphicon-arrow-right"></span></a>	
		  </div>
		</div>
	  </div><!-- .banner-set -->