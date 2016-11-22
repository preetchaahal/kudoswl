<style type="text/css">
.tp-banner-container {
	width:100%;
	position:relative;
	padding:0;
} 
.tp-banner{
	width:100%;
	position:relative;
}
</style>
<div class="slider rs-slider load">
<div class="tp-banner-container load">
		<div class="tp-banner">
		<ul>
			<?php

				foreach ($main_slider as $k => $v) {
				//{
					$small_obj_arr = unserialize($v->g_small_images);	
			?>
			<!-- SLIDE  -->
			<li data-transition="slotfade-horizontal" slots="1" data-slotamount="1" data-masterspeed="1200" <?php if($v->g_url != "") echo "data-link='".$v->g_url."'"; ?> >
				<!-- MAIN IMAGE -->
				<img src="{{ url() }}/img/gallery/<?php echo $v->g_bg_image;?>" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
				<!-- LAYERS -->
				<!-- LAYER NR. 1 -->

				<?php
					echo '<div class="elements">';
					foreach ($small_obj_arr as $key => $value) 
					
					{
					 		echo '<div class="tp-caption '. $value['caption_incoming_animation'].'"
					 			  data-x="'. $value['data-x'].'"
					 			  data-y="'.$value['data-y'].'"
					 			  data-speed="'.$value['data-speed'].'"
					 			  data-start="'.$value['data-start'].'"
					 			  data-easing="'.$value['data-easing'].'"
					 			  data-endspeed="'.$value['data-end-speed'].'"
					 			  data-endeasing="'.$value['data-end-easing'].'"
					 			  style="'.$value['style'].'">';
					 		if( $value['slide-text'] != "")
					 			echo $value['slide-text'];
					 		if( isset( $value['g_sm_img_active'] ) && $value['g_sm_img_active'] == '1' )
					 			echo '<img src="'. url() .'/img/gallery/'.$value['imgsrc'].'" alt=""></div>';
							
					}
					echo '</div><!-- //elements -->';
						
				?>
				
			</li><?php } ?>
			
		</ul>
	</div>
</div><!-- //bannercontainer -->
</div>
<script type="text/javascript">
	jQuery(document).ready(function() {
		   jQuery('.tp-banner').revolution(
			{
				delay:9000,
				startwidth:1170,
				startheight:500,
				hideThumbs:10,
				navigationType: 'none',
				navigationArrows  : 'solo'
			});
	});
</script>
