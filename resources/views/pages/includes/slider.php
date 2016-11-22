    <!--slider start-->
			<div class="col-md-12 col-sm-12 col-xs-12" style="background-color:#fff;">
            	<div class="row">
                    	
                            	<ul class="bxslider">
                                <?php
									$sliderqu=$obj_Common->get_query('g_status="1"','tbl_gallery',"*");
									while($rowslider=mysql_fetch_object($sliderqu))
									{
									?>
                               <img src="<?php echo SITE_URL;?>img/gallery/<?php echo $rowslider->g_image;?>" title="<?php echo $rowslider->g_title;?>" />
                                  <?php
									}
									?>
                                </ul>
                           
                  </div>
            </div>	
            
            			<!--slider end-->
                        
                        <div class="clearfix"></div>