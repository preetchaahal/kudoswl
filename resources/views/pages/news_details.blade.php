<meta name="csrf_token" value="{{ csrf_token() }}">
<style type="text/css">
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
  .entry-meta{
    padding-top: 10px;
  }
  .entry-meta ul{
    display: inline-block;
    list-style: none;
  }
  .entry-meta span,
  .entry-meta a{
    margin-right: 5px;
  }
  .ln-side li{
    display: inline-block;
    padding: 2px;
  }

  hr{
    margin: 20px 0;
  }
  .ln-side>h6{
    margin-bottom: 10px;
  }
  .featured-img>img{
      /*max-height: 400px;
      min-width: 100%;*/
  }
  .ln-img-thumb-wrap>a>img{
    /*max-height: 100px;
    width: 100%;*/
  }
  </style>
</head>

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
          <div class="col-sm-12 col-lg-8">

              
              <div class="">
                <?php 
                    if($newsDetails[0]->nw_image) 
                      $path = url() ."img/news/".$newsDetails[0]->nw_image;
                      echo '<div class="col-xs-12 featured-img img-fluid-wrap"><img src="'.($newsDetails[0]->nw_image != "" ? $path : "images/no_image_available.png").'" class="img-fluid" ></div>'; 
                    
                    $desc1 = @unserialize(htmlspecialchars_decode(stripslashes($newsDetails[0]->nw_description)));
                    $tit1 = @unserialize($newsDetails[0]->nw_tital);

                    $currCatName = @unserialize($newsDetails[0]->cat_name);
                    $currCatName = $currCatName[$lang_id];
                    $currCatId   = $newsDetails[0]->nw_newscat_id;
                    
                    $subCat = @unserialize($newsDetails[0]->subcat_name);
                    $subCat = $subCat[$lang_id];
                ?>
                
              </div>
              <div class="clearfix" style="margin-bottom: 15px;"></div>
              <div>
                <?php echo $desc1[$lang_id]; ?>
              </div>
              <div style="clear: both;"></div>
              <footer class="entry-meta">
                <span class="fa fa-user">&nbsp;</span><span class="autor-name"><?php echo $newsDetails[0]->nw_user_type; ?></span>
                <a href="{{ url() }}/news_search?cat=<?php echo ($currCatId != "" ? $currCatId : "0"); ?>" class="btn btn-sm"><span class="ln-meta-cat"><?php echo $currCatName; ?></span></a>
                <?php
                  $subCat = @unserialize($newsDetails[0]->subcat_name);
                  $subCat = $subCat[$lang_id];
                if( $subCat != '' ){ ?>
                <a href="{{ url() }}/news_search?subcat=<?php echo $newsDetails[0]->nw_news_subcat_id; ?>" class="btn btn-sm" style="background-color: <?php echo $newsDetails[0]->color; ?>"><span class="ln-meta-cat"><?php echo $subCat; ?></span></a>
                <?php } ?>
                <span class="fa fa-calendar">&nbsp; <?php echo date('Y, M d',$newsDetails[0]->nw_date); ?></span>
                <!--<span class="separator">|</span>
                <span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>-->
                <span class="comments-link pull-right">
                  <?php //checking if the post is liked by the loggged in user
                    //fetching comment count and likes count
                    $comments_count = $newsDetails[0]->nw_comments_count;
                    $likes_count = $newsDetails[0]->nw_likes_count; 
                    if( $isPostLikedByLoggedInUser == 1 )
                      //$likedAlready = $news_obj->checkIsPostLikeByLoggedinUser($id, $_SESSION['useruserid'], $_SESSION['username'] );
                  ?>
                  <div class="fb-share-button" data-href="{{ url() }}/news_details?id=<?php echo $newsDetails[0]->nw_id; ?>" data-layout="button_count"></div>
                    <a <?php if( $loggedin != null ) echo "href='#'"; if($loggedin == null) echo 'disabled'; else echo 'class="likeBtn"'; if($isPostLikedByLoggedInUser == 1 ) echo "data-like = '1'"; else echo "data-like= '0'"; ?> ><i class="like-nums"><?php echo $likes_count; ?></i><i class="<?php if($isPostLikedByLoggedInUser == 1) echo 'like-thumb'; ?> glyphicon glyphicon-thumbs-up"></i><!--<span class="separator">|</span>--></a>
                    <i class="comment-nums"><?php echo $comments_count; ?></i><i class="glyphicon glyphicon-comment"></i>
                </span>
              </footer>
              <div style="clear: both"></div>
              <?php if(count($postComments) > 0 && $loggedin != null ){?>
              <h3 class="title slim" style="margin-top: 20px;">Comments</h3>
                <ul class="commentlist">
                 <?php foreach($postComments as $key=>$value) {?>
                  <li>
                    <?php //fetching comment avatar image
                        $avatar = $value['comments']->avatar;//$blog_obj->fetchCommentAvatar($comment[$key]['news_author_id']);
                    ?><input type="hidden" class="comment-id" name="comment-id-hidden" value="<?php echo $value['comments']->news_comment_id; ?>"></input>
                    <img class="avatar" width="84" height="84" src="<?php echo url()."img/profile/".$avatar; ?>" alt="">
                    
                    <div class="meta">
                      <span><?php //echo $value['comments']->news_comment_author; ?></span>, 
                      <span class="time"><?php echo date("F d, Y, h:m:A",strtotime($value['comments']->news_comment_date)); ?></span>
                      <?php
                        //print_r($_SESSION);
                        if($value['comments']->news_comment_author_id == $loggedInUserId){?>
                        <a onclick="return confirm('Are you sure');" href="{{ url() }}/delete_news_post_comment?id=<?php echo $value['comments']->news_comment_id; ?>&type=news_post" class="remove-comment-btn pull-right glyphicon glyphicon-remove"></a>
                      <?php } ?>
                    </div>

                    <p class="description">
                      <?php echo $value['comments']->news_comment_content; ?>
                    </p>
                    <div class="row">
                    <?php //checking for comments to a given comment 
                    //$comment_comment = $news_obj->fetchAllComments($comment[$key]['news_post_id'], $comment[$key]['news_comment_id'] );
                    if( count( $value['comments_comments'] ) > 0 ){
                    echo "<ul class='comment_comment'>";
                    foreach ($value['comments_comments'] as $val) {
                    ?>
                    <li>
                      <?php //fetching comment avatar image for comment replies
                          $avatar = $val->avatar;//$blog_obj->fetchCommentAvatar($comment_comment[$key]['news_author_id']);
                      ?>
                      <img class="avatar" width="84" height="84" src="<?php echo url() ."img/profile/".$avatar; ?>" alt="">
                      <div class="meta">
                        <span><?php //echo $val->news_comment_author; ?></span>, 
                        <span class="time"><?php echo date("F d, Y, h:m:A",strtotime($val->news_comment_date)); ?></span>
                      </div>
                      <p class="description">
                        <?php echo $val->news_comment_content; ?>
                      </p>
                    </li>
                    <?php } echo "</ul>"; }//end of outer if ?>
                    <div style="clear: both"></div>
                    <div class="col-sm-10 col-sm-push-2">
                      <a href="#" class="btn reply-btn btn-sm">Reply</a>
                      </div>
                    </li>
                  </li>
                 <?php }//end of foreach ?>
                </ul>
                <?php }//end of outer if ?>

              <div class="clearfix"></div>
              <?php if( isset($loggedInUserId) ) {?>
              <div class="col-sm-12">
                <h3 class="title slim" style="margin-top: 20px;">Leave a Comment</h3>
                <form class="comments-form" method="post" action="<?php echo url();?>/addCommentToNewsPost">
                  <input type="hidden" name="commentById" value="<?php echo $loggedInUserId; ?>" ></input>
                  <input type="hidden" name="postId" value="<?php echo $postId; ?>" ></input>
                  <input type="hidden" name="commentCommentId" value="<?php //echo $_REQUEST['nc_id']; ?>" ></input>
                  <label>Comment: </label>
                  <div class="row">
                    <div class="comment-box col-sm-10 col-md-10">
                      <textarea class="form-control" name="comment"></textarea>
                      <!--<i>Note: HTML is not translated!</i>-->
                    </div><!-- //comment-box -->
                  </div><!-- //row -->

                  <div class="clearfix"></div>
                  <div class="button-set">
                  <!--<span class="required pull-right"><b>*</b> Required Field</span>-->
                  <button class="btn btn-default" type="submit" name="commentBtn">Submit</button>
                  </div><!-- /button-set -->
                </form>
              </div><!-- //col-sm-8 -->
              <?php } ?>
            
          </div><!-- //col-sm-8-->

          <div class="col-sm-12 col-lg-4 ln-wrap">

            <div id="sidebar" class=" sidebar bottom-padding">
                @include('pages.includes.news-sidebar-nav')
            </div><!-- #sidebar -->

            <div class="frame frame-border bottom-padding">
              <div class="title-box">
                <h1 class="title">Latest News</h1>
              </div>
                <?php
                  //$rst = mysql_query("SELECT *,tnCat.nc_id AS tnCatId, tnCat.nc_name AS tnCatName,tnSubCat.nc_id AS tnSubCatId, tnSubCat.nc_name AS tnSubCatName FROM tbl_news LEFT JOIN tbl_newscategory tnCat ON nw_newscat_id = tnCat.nc_id LEFT JOIN tbl_news_subcategory tnSubCat ON nw_news_subcat_id = tnSubCat.nc_id WHERE nw_status = '1' ORDER BY nw_date DESC LIMIT 4");
              
                  $iteration = 1;
              
                  foreach( $latestNews as $k => $v )
                  {
                    $mainCat = @unserialize($v->cat_name);
                    $mainCat = $mainCat[$lang_id];

                    $subCat = @unserialize($v->subcat_name);
                    $subCat = $subCat[$lang_id];
                ?>
                <div class="col-sm-6 ln-img-thumb-wrap">
                  <a href="{{ url() }}/news_details?id=<?php echo $v->nw_id; ?>" class="ln-main-title img-fluid-wrap"><img src="<?php echo ($v->nw_image != '' ?"img/news/$v->nw_image" : "images/no_image_available.png"); ?>" class="img-responsive img-thumbnail img-fluid"></a>
                </div>
                <div class="col-sm-6 ln-side">
                  <h6><a style="color: <?php echo ($v->nw_color != '' ? $v->nw_color : ''); ?>;" href="{{ url() }}/news_details?id=<?php echo $v->nw_id; ?>" class="ln-main-title"><?php $title = @unserialize($v->nw_tital); echo ucfirst($title[$lang_id]); ?></a></h6>
            
                    <li class="ln-meta-cat"><a href="{{ url() }}/news_search?cat=<?php echo $v->nw_newscat_id; ?>" class="btn btn-sm"><?php echo ($mainCat != "" ? $mainCat : "Uncategorized"); ?></a></li>
                    <?php if( isset($subCat) != "" ){ ?>
                      <li class="ln-meta-cat"><a href="news_search?subcat=<?php echo $v->nw_news_subcat_id; ?>" class="btn btn-sm" style="background-color: <?php echo ($v->nw_color != '' ? $v->nw_color : ''); ?>;"><?php echo ($subCat != '' ? $subCat: "Uncategorized" ); ?></a></li>    
                    <?php } ?>
                    <li class="ln-meta-date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php $time = $v->nw_date; echo date("M d,Y",$time); ?></li>
            
                </div><!-- //ln-side -->
                <div class="clearfix"></div>
                <?php 
                  if($iteration <4 )
                    echo "<hr>";
                  else
                    echo "<br>";
                  $iteration++;
                } ?>
            </div><!-- ///frame-->

          </div><!-- ///col-lg-4 -->

          <div class="clearfix"></div>
        
        </div><!-- ///container -->
      </section>
 
<script language="javascript">
  $(document).ready(function(){

    $.ajaxSetup({
          headers: { 'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content') }
    });

    var urlForQuery;

    $('.likeBtn').click(function(e){
      e.preventDefault();
      var $thisBtn = $(this);
      console.log("data like =0"+ $thisBtn.attr('data-like'));
      if ( $thisBtn.attr('data-like') == '0' )
        urlForQuery = 'likeNewsPost';
      else
        urlForQuery = 'unlikeNewsPost';

      $.ajax({
        url: urlForQuery,
        type: "POST",
        statusCode: {
          404: function(){
            alert("Unable to process the like request!");
          }
        },
        data: { 
            like: "1", 
            postId: "<?php echo $postId; ?>",
            commentUserId: "<?php echo $loggedInUserId; ?>"
            //userName: "<?php //echo $_SESSION['username']; ?>"
        }
      })
      .done(function(data){
        //console.log("data sample is="+data);
        if(data != 3)//successfully liked
        {
          var likesValue = $('.like-nums').text();
          likesValue++;
          $('.like-nums').text(likesValue);
          $('.likeBtn .glyphicon-thumbs-up').addClass('like-thumb');
          
          //update btn data-attr to '1' to send unlike request if pressed again
          $thisBtn.attr('data-like', '1');
        }
        else if(data == 3)//updating the like count, unliking the post
        {
          var likesValue = $('.like-nums').text();
          likesValue--;
          $('.like-nums').text(likesValue);
          $('.likeBtn .glyphicon-thumbs-up').removeClass('like-thumb'); 
          
          //update btn data-attr to '1' to send unlike request if pressed again
          $thisBtn.attr('data-like', '0');
        }
      })
      .error(function(e){
        console.log("Error in ajax requst"+ e);
      });
    });
    
    // script for replying to a comment
    $('.reply-btn').on('click', function(e){
      e.preventDefault();
      var id = $(this).parent().parent().parent().find('input[type="hidden"][name="comment-id-hidden"]').val();
      //console.log($(this).parent().parent().find('.comment-id').val());
      //var id=$(this).parent().find('input:hidden').val();
      $(this).parent().append("<div class='row comment-reply-box'><div class='col-sm-6 col-sm-push-1'><form action='#' method='post'><input type='hidden' class='comment-id' value='"+id+"'><input type='text' class='form-control' required><button type='button' class='btn btn-xs'>Submit</button></form></div></div>");

      $('.comment-reply-box div form button').on('click',function(e){
      var form_data = {
        'commentCommentId' : $(this).parent().find('input:hidden').val(),
        'comment'      : $(this).parent().find('input:text').val(),
        'postId'       : "<?php echo $postId; ?>",
        'commentById'  : "<?php echo $loggedInUserId; ?>"
        //'userName'       : "<?php //echo $_SESSION['username']; ?>"
      };
      $.ajax({
        url: "<?php echo url(); ?>/addCommentToNewsPost",
        statusCode: {
          404: function(){
            alert("Unable to post comment right now!");
          }
        },
        type: "POST",
        data: form_data
      })
      .done(function(data){
        location.reload();
        // if(data == 1)//successfully posted comment  
        // {
        //   location.reload();
          // }
        //do some stuff here to add new comment at appropriate place
      });
    });

    });
  });

</script>