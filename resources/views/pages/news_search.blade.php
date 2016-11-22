<?php 
    //$page = "news_search";
   //  if(isset($_REQUEST['search-string']))
   //  {
   //    $displayTitle = "Search results for: ". $_REQUEST['search-string'];
   //    $search_string = $_REQUEST['search-string'];
   //    $news=$obj_Common->get_query("((nw_description LIKE '%".$search_string."%') || (nw_tital LIKE '%".$search_string."%')) && nw_status= '1' ",'tbl_news LEFT JOIN tbl_newscategory ON nw_newscat_id = nc_id',"*",'order by nw_date DESC');
   //  //$comment = $news_obj->fetchAllComments($id);
   //  }
   //  else if(isset($_REQUEST['cat']))
   //  {

   //    $cat = $_REQUEST['cat'];
   //    $news=$obj_Common->get_query("nw_newscat_id = '".$_REQUEST["cat"]."' && nw_status= '1' ",'tbl_news LEFT JOIN tbl_newscategory ON nw_newscat_id = nc_id',"*",'order by nw_date DESC');
   //  //$comment = $news_obj->fetchAllComments($id);
   //    $q = $obj_Common->get_query("nc_id = '".$_REQUEST['cat']."'", "tbl_newscategory", "*");
   //    $rs = mysql_fetch_assoc($q);
   //    $catTitle = unserialize($rs['nc_name']);
   //    $catTitle = $catTitle[$_SESSION['langid']-1];
   //    $displayTitle = "Showing news by category: ".$catTitle;
   //  }
   //  else if(isset($_REQUEST['subcat']))
   //  {

   //    $cat = $_REQUEST['subcat'];
   //    $news=$obj_Common->get_query("nw_news_subcat_id = '".$_REQUEST["subcat"]."' && nw_status= '1' ",'tbl_news LEFT JOIN tbl_news_subcategory ON nw_news_subcat_id = nc_id',"*",'order by nw_date DESC');
   //  //$comment = $news_obj->fetchAllComments($id);
   //    $q = $obj_Common->get_query("nc_id = '".$_REQUEST['subcat']."'", "tbl_news_subcategory", "*");
   //    $rs = mysql_fetch_assoc($q);
   //    $subCatTitle = unserialize($rs['nc_name']);
   //    $subCatTitle = $subCatTitle[$_SESSION['langid']-1];
   //    $displayTitle = "Search news by sub-category: ".$subCatTitle;
   //  }
   //  //fetching all the news records if no category or search is performed
   //  else
   // {
   //    $displayTitle = "Showing all news";
   //    $news=$obj_Common->get_query("nw_status= '1' ",'tbl_news LEFT JOIN tbl_newscategory ON nw_newscat_id = nc_id',"*",'order by nw_date DESC');
   //  //$comment = $news_obj->fetchAllComments($id);
   //  }

?>
<style type="text/css">
  .ln-side{
    padding-left: 5px;
    padding-right: 5px;
  }
  .ln-side li{
    display: inline-block;
    padding: 2px;
  }
  .ln-side>h6{
    margin-bottom: 1px;
  }
  .frame>.title-box h1{
    padding: 10px;
  }
  .commentlist li .description{
    min-height: 40px;
    height: auto;
  }
  .comments-link i{
    margin: 0 5px;
  }
  .like-thumb{
    color: rgb(193, 8, 65);
  }
  .comments-num{
    cursor: default;
  }
  .comments-link .likeBtn:hover{
    text-decoration: none;
  }
  .comment_comment{
    list-style: none;
    padding-left: 20%;
  }
  .remove-comment-btn:hover{
    text-decoration: none;
  }
  .search{
		float: right;
	}
	form .search-string{
		position: relative;
	}
	form .search-icon{
		position: absolute;
		right: 0;
	}
	form .search-icon{
		top: 10;
		right: 10;
		bottom: 0;
	}
  article>.entry-content div>a>img{
      /*max-height: 200px;
      width: 100%;*/
  }
  div>a>img{
      /*max-height: 100px;
      min-width: 100%;*/
  }
  .ln-meta-date{
    font-size: 80%;
  }
  .ln-wrap .frame hr{
    margin: 20px 0;
  }
  </style>
  <!-- //facebook share button -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1676034339325749";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!-- //facebook share -->

      <section id="main">
          
          <div class="container">
        
            <div class="title-box">
              <h1 class="title"><?php echo $displayTitle; ?></h1>
            </div><!-- //title-box -->
          </div><!-- //container -->  
            
  			<div class="container">
  				<div class="content blog col-lg-8">
					<?php
						if(count($newsPosts) == 0)
						{
							//do something when no record found in news search
							echo "<article class='post'><h2 class='entry-title'>";
							echo "No matches found!";
							echo "</h2></article>";
						}
						else
					    {
					    	// while($rownews=mysql_fetch_assoc($news))
                foreach( $newsPosts as $val )
					    	{
								  $desc = @unserialize(htmlspecialchars_decode(stripslashes($val->nw_description)));
					    		$tit = @unserialize($val->nw_tital);
					    		//$rowcat=$obj_Common->get_field_name("nc_id='".$val->nw_newscat_id']."'" ,'tbl_newscategory','*');
                  //$rowSubCat=$obj_Common->get_field_name("nc_id='".$val->nw_news_subcat_id']."'" ,'tbl_news_subcategory','*');
					    		//$newsContent[] = $rownews;
					    	//}
					    	//$comment = $news_obj->fetchAllComments($id);
					  	//}					
					?>
					<article class="post">
					  
					  <div class="entry-content">
					  	<div class="col-md-6">
                <a href="news_details.php?nc_id=<?php echo $val->nw_id; ?>" class="img-fluid-wrap">
                  <img src="<?php echo ($val->nw_image != "" ? "img/news/".$val->nw_image."" : "images/no_image_available.png"); ?>" class="img-thumbnail img-fluid" >
                </a>      
              </div>
              <div class="col-md-6">
                <h4 class=""><a style="color: <?php echo ($val->nw_color != '' ? $val->nw_color : ''); ?>;" href="{{ url() }}/news_details?id=<?php echo $val->nw_id; ?>"><?php echo ucfirst(strip_tags($tit[$lang_id])); ?></a></h4>
                <p class="descriptions"><?php
  							$string = strip_tags($desc[$lang_id]);
  							if (strlen($string) > 200) {
  							    $stringCut = substr($string, 0, 200);
  							    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'......'; 
  								}
  							echo $string;
  							?>
  						  </p>
                <footer class="">
                  <span class="autor-name"><i class="fa fa-user"></i> <?php echo ucfirst($val->nw_user_type); ?></span>,
                  <span class="time"><i class="fa fa-calendar"></i> <?php echo date("d M, Y H:i a",$val->nw_date); ?></span>
                  <span class="separator">|</span>
                  <?php
                    $mainCat = @unserialize($val->cat_name);
                    $mainCat = $mainCat[$lang_id-1];
                    $subCat = @unserialize($val->subcat_name);
                    $subCat = $subCat[$lang_id-1];
                  ?>
                  <span class="meta"><a class="btn btn-sm" href="{{ url() }}/news_search?cat=<?php echo $val->cat_id; ?>"><?php echo ($mainCat != ""? ucfirst($mainCat) : "Uncategorized"); ?></a></span>
                  <?php if ( isset($subCat) != '' ){ ?>
                    <span class="meta"><a class="btn btn-sm" href="news_search?subcat=<?php echo $val->subcat_id; ?>" style="background-color: <?php echo ($val->nw_color != '' ? $val->nw_color : ''); ?>;"><?php echo ucfirst($subCat); ?></a></span>
                  <?php } ?>
                  <!--<span class="comments-link pull-right">
                    <a href="#">3 comment(s)</a>
                  </span>-->
              </footer>
              </div><!-- //col-md-7 -->
					    <div class="clearfix"></div>
              
            
            </div><!-- //entry-content -->
					  
					</article><!-- .post -->
					<?php } } ?>
  				</div><!-- //content -->
  			   
          <div class="col-lg-4 ln-wrap">
              
            <div id="sidebar" class="sidebar bottom-padding">
              @include('pages.includes.news-sidebar-nav')
              <?php //require_once ('includes/news-sidebar-nav.php'); ?>      
            </div><!-- #sidebar -->  

            <div class="frame frame-border bottom-padding">
              <div class="title-box">
                <h1 class="title">Latest News</h1>
              </div>
              <?php
                
                //while($row = mysql_fetch_assoc($rst))
                foreach( $latestNews as $k => $v )
                {

                  // if($iteration == 1)
                  // {
              ?>
              <div class="col-sm-6">
                <a href="news_details.php?id=<?php echo $v->nw_id; ?>" class="img-fluid-wrap"><img src="<?php echo ($v->nw_image != '' ?"img/news/$v->nw_image" : "images/no_image_available.png"); ?>" height="200" width="300" class="img-fluid img-thumbnail"></a>
              </div>
              <div class="col-sm-6 ln-side">
                <h6><a style="color: <?php echo ($v->nw_color != '' ? $v->nw_color : ''); ?>;" href="news_details.php?nc_id=<?php echo $v->nw_id; ?>" class="ln-main-title"><?php $title = @unserialize($v->nw_tital); echo ucfirst(strip_tags($title[$lang_id])); ?></a></h6>
                
              <?php
                $mainCat = unserialize($v->cat_name);
                $mainCat = $mainCat[$lang_id-1];

                $subCat = unserialize($v->subcat_name);
                $subCat = $subCat[$lang_id-1];
              ?>   
                  <li class="ln-meta-date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php $time = $v->nw_date; echo date("M d,Y",$time); ?></li><div class="clearfix"></div>
                  <li class="ln-meta-cat"><a href="news_search?cat=<?php echo $v->cat_id; ?>" class="btn btn-sm"><?php echo ($mainCat != "" ? $mainCat : "Uncategorized"); ?></a></li>
                  <?php if( isset($subCat) != "" ){ ?>
                    <li class="ln-meta-cat"><a href="news_search?subcat=<?php echo $v->subcat_id; ?>" class="btn btn-sm" style="background-color: <?php echo ($v->nw_color != '' ? $v->nw_color : ''); ?>;"><?php echo $subCat; ?></a></li>
                  <?php } ?>
                  
              </div><!-- //ln-side -->
              <div class="clearfix"></div>
              <?php 
                
               } ?>
            </div>
              

          </div><!-- ///col-sm-4 -->

          
        </div><!-- //row -->

        </div><!-- //container -->
      </section>