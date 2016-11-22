<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'news';

    /**
    *    The default primary key for this
    *   model
    *
    *
    */
    protected $primaryKey = 'nw_id';

    public $timestamps = false;

    /*
    
        --  fetching latest news
        --  param returns the apt rows, all in case of no params  
    
    */
    public static function fetchLatestNews( $rowCount = null ){
        
        if( $rowCount == null )
            $i = 5;
        else 
            $i = $rowCount;
        
        return News::select('news.*', 'news_category.nc_id AS cat_id', 'news_category.nc_name AS cat_name', 'news_sub_category.nsc_id AS subcat_id', 'news_sub_category.nsc_name AS subcat_name')->where('news.nw_display_as_slider', '=', '1')->where('news.nw_status', '=', '1')->orderBy('news.nw_date', 'DESC')->leftJoin('news_category', function($join){ $join->on('news.nw_newscat_id', '=', 'news_category.nc_id')->where('news_category.nc_is_active', '=', '1'); })->leftJoin('news_sub_category', function($join){ $join->on('news.nw_news_subcat_id', '=', 'news_sub_category.nsc_id')->where('news_sub_category.nsc_is_active', '=', '1'); })->take($i)->get();

    }

    /*
    
        --  fetching news by id
        --  param returns news data requested  
    
    */
    public static function fetchNewsById( $id ){
        
        return News::select('news.*', 'news_category.nc_id AS cat_id', 'news_category.nc_name AS cat_name', 'news_sub_category.nsc_id AS subcat_id', 'news_sub_category.nsc_name AS subcat_name')->where('news.nw_display_as_slider', '=', '1')->where('news.nw_id', '=', $id)->where('news.nw_status', '=', '1')->orderBy('news.nw_date', 'DESC')->leftJoin('news_category', function($join){ $join->on('news.nw_newscat_id', '=', 'news_category.nc_id')->where('news_category.nc_is_active', '=', '1'); })->leftJoin('news_sub_category', function($join){ $join->on('news.nw_news_subcat_id', '=', 'news_sub_category.nsc_id')->where('news_sub_category.nsc_is_active', '=', '1'); })->get();

    }

    public static function likePost( $postId, $userId ){
        
        //checking if post is already liked or liked in the past
        $sql3 = \DB::table('news_likes')->select('news_like_id')->where('news_post_id', '=', $postId)->where('news_author_id', '=', $userId)->count();

        if( $sql3 > 0 ){
            //post already liked in the past
            //updating the post status to like again
            $sql2 = \DB::table('news_likes')->where('news_post_id', '=', $postId)->where('news_author_id', '=', $userId)->update(['news_like_status' => '1']);
        }
        else{
            //post not liked at all,
            //add a new entry to likes table 
            $sql2 = \DB::table('news_likes')->insert(['news_like_id' => null, 'news_post_id' => $postId, 'news_author_id' => $userId, 'news_like_date' => 'now()', 'news_like_status' => '1']);    
        }

        //updating like count
        //$sql2 = \DB::table('blog_posts')->where('ID', '=', $postId)->update(['likes_count' => 'likes_count+1' ]);
        $sql4 = \DB::select('UPDATE news SET nw_likes_count = nw_likes_count+1 WHERE nw_id = "'. $postId .'"');

        if( $sql4 )
            return 1;
        else
            return 0;
    }

    public static function unlikePost( $postId, $userId ){
        
        $sql2 = \DB::table('news_likes')->where('news_post_id', '=', $postId)->where('news_author_id', '=', $userId)->update(['news_like_status' => '0']);
        //updating like count
        $sql4 = \DB::select('UPDATE news SET nw_likes_count = nw_likes_count-1 WHERE nw_id = "'. $postId .'"');
        //$sql2 = \DB::table('blog_posts')->where('ID', '=', $postId)->update(['likes_count' => 'likes_count-1' ]);

        if( $sql2 ){
            return 3;//3 depicts successful unlike in blog_post_blade.php
        }
        else
            return 0;
    }

    /*
        --  fetching news comments by id
    */
    public static function fetchLikesCount($postId){
        $likesCount = \DB::table('news_likes')->select('news_like_id')->where('news_post_id', '=', $postId)->where('news_like_status', '=', '1')->count();
        return $likesCount;
    }

    public static function fetchCommentsCount($postId){
        $commentsCount = \DB::table('news_comments')->select('news_comment_id')->where('news_comment_id', '=', $postId)->where('news_comment_status', '=', '1')->count();
        return $commentsCount;    
    }

    public static function checkIsPostLikeByLoggedInUser( $postId, $userId ){

        $isPostLiked = \DB::table('news_likes')->select('news_like_id')->where('news_post_ID', '=', $postId)->where('news_author_ID', '=', $userId)->where('news_like_status', '=', '1')->count();
        
        //return 1 if post is liked and 0 otherwise
        if( $isPostLiked > 0 )
            return 1;
        else
            return 0;
    
    }

    public static function fetchPostsCount( $condition ){

        $query = "SELECT * FROM news WHERE news.nw_status != '0' ".$condition."";
        return count(\DB::select($query));

    }

    // #note fetchComments and fetchAllComments together serve the purpose to fetch all the comments and comments on comments, 
    //fetchComments is used to fetch both the comments and comments on comments by changing the arguments
    public static function fetchComments( $postId=null, $commentCommentId=null ){
            
        if($postId == null)
            $query = \DB::table('news_comments')->select('news_comments.*', 'tb_users.avatar as avatar', 'tb_users.first_name as comment_author')->where('news_comments.news_comment_status', '=', '1')->where('news_comments.news_comment_comment_id', '=', '0')->leftJoin('tb_users', function($join){ $join->on('news_comments.news_comment_author_ID', '=', 'tb_users.id'); })->get();

         else if($postId != null && $commentCommentId == null)
            $query = \DB::table('news_comments')->select('news_comments.*', 'tb_users.avatar as avatar', 'tb_users.first_name as comment_author')->where('news_comments.news_comment_status', '!=', '0')->where('news_comments.news_comment_post_id', '=', $postId)->where('news_comments.news_comment_comment_id', '=', '0')->leftJoin('tb_users', function($join){ $join->on('news_comments.news_comment_author_id', '=', 'tb_users.id'); })->get();
        
         else
            $query = \DB::table('news_comments')->select('news_comments.*', 'tb_users.avatar as avatar', 'tb_users.first_name as comment_author')->where('news_comments.news_comment_status', '=', '1')->where('news_comments.news_comment_comment_id', '=', $commentCommentId)->leftJoin('tb_users', function($join){ $join->on('news_comments.news_comment_author_id', '=', 'tb_users.id'); })->get();
             
         return $query;
    }

    public static function fetchAllComments( $postId ){
        $resultArr = array();
        $allComments = News::fetchComments( $postId, null );

        //fetching comments on comments
        foreach ($allComments as $value) {
            $sql = array();
            
            $sql = News::fetchComments( $value->news_comment_post_id, $value->news_comment_id ); 
            $resultArr[] = array(
                    'comments'          =>      $value,
                    'comments_comments' =>      $sql 
            );
            
        }
        //return $allComments;
        //uncomment for testing
        // print_r($resultArr);exit;
        return $resultArr;
    }

    /*
        -- Post comment to news post
    */
    public static function addCommentToNewsPost($postId, $commentedById, $commentContent, $commentCommentId){

        $sql1 = \DB::table('news_comments')->insert(['news_comment_id' => null, 'news_comment_post_id' => $postId, 'news_comment_author_id' => $commentedById, 'news_comment_date' => null, 'news_comment_comment_id' => $commentCommentId, 'news_comment_content' => $commentContent, 'news_comment_status' => '1']);
        
        //updating comment count
        if($sql1)
            $sql2 = \DB::select('UPDATE news SET nw_comments_count = nw_comments_count+1 WHERE nw_id = "'. $postId .'"');
        if( isset($sql2) )
            return 1;
        else 
            return 0;
    }


    /*
    
        --  fetching news by id
        --  param returns news data requested  
    
    */
    // public static function fetchNewsById( $id ){
        
    //     return News::select('news.*', 'news_category.nc_id AS cat_id', 'news_category.nc_name AS cat_name', 'news_sub_category.nsc_id AS subcat_id', 'news_sub_category.nsc_name AS subcat_name')->where('news.nw_display_as_slider', '=', '1')->where('news.nw_id', '=', $id)->where('news.nw_status', '=', '1')->orderBy('news.nw_date', 'DESC')->leftJoin('news_category', function($join){ $join->on('news.nw_newscat_id', '=', 'news_category.nc_id')->where('news_category.nc_is_active', '=', '1'); })->leftJoin('news_sub_category', function($join){ $join->on('news.nw_news_subcat_id', '=', 'news_sub_category.nsc_id')->where('news_sub_category.nsc_is_active', '=', '1'); })->take($i)->get();

    // }

    public static function fetchNewsPosts($postsPerPage, $startFrom, $condition){
        $query = "SELECT news.*, news_category.nc_name as cat_name, news_category.nc_id as cat_id, news_sub_category.nsc_name as subcat_name, news_sub_category.nsc_id as subcat_id FROM news LEFT JOIN news_category ON (news.nw_newscat_id = news_category.nc_id AND news.nw_status = 1 ) LEFT JOIN news_sub_category ON (news.nw_news_subcat_id = news_sub_category.nsc_id AND news_sub_category.nsc_is_active = 1) WHERE news.nw_status = '1' ".$condition." ORDER BY news.nw_date DESC LIMIT ".$postsPerPage." OFFSET ".$startFrom." ";
        //echo $query;exit;
        return \DB::select($query);
    }

    public static function fetchNewsDataForSlider(){

        return News::select('news.*', 'news_category.nc_id AS cat_id', 'news_category.nc_name AS cat_name', 'news_sub_category.nsc_id AS subcat_id', 'news_sub_category.nsc_name AS subcat_name')->where('news.nw_display_as_slider', '=', '1')->where('news.nw_status', '=', '1')->leftJoin('news_category', function($join){ $join->on('news.nw_newscat_id', '=', 'news_category.nc_id')->where('news_category.nc_is_active', '=', '1'); })->leftJoin('news_sub_category', function($join){ $join->on('news.nw_news_subcat_id', '=', 'news_sub_category.nsc_id')->where('news_sub_category.nsc_is_active', '=', '1'); })->get();

    }

    
    public static function deleteCommentFromPost( $commentId ){
        $sql = \DB::table('news_comments')->where('news_comment_id', '=', $commentId)->update(['news_comment_status' => '0']);
        
        if( $sql )
            return 1;
        else
            return 0;
    }


    //fetching news categories and subcategories
    public static function fetchNewsCategoriesAndSubCategories(){

        $categories = \DB::table('news_category')->where('nc_is_active', '=', '1')->get();
        foreach ($categories as $value) {
            $temp = \DB::table('news_sub_category')->where('nsc_is_active', '=', '1')->where('nsc_main_cat_id', '=', $value->nc_id)->get();
            $categoryArr[] = array(
                    'cat_id'        =>      $value->nc_id,
                    'cat_name'      =>      $value->nc_name,
                    'sub_cat'       =>      $temp
                );
        }
        return $categoryArr;

    }

    public static function fetchNewsCat( $catId, $lang_id ){
        $query = \DB::table('news_category')->where('nc_id', '=', $catId)->get();
        $query = @unserialize($query[0]->nc_name);
        return $query[$lang_id];
    }

    public static function fetchNewsSubCat( $subCatId, $lang_id ){
        $query = \DB::table('news_sub_category')->where('nsc_id', '=', $subCatId)->get();
        $query = @unserialize($query[0]->nsc_name);
        return $query[$lang_id];
    }

    /*
        
        --  fetching all news reporters
        
    */
    public static function fetchAllNewsReporters(){
        
        return \DB::table('news_reporters')->select('*', 'news_category.nc_name')->where('news_reporters.rp_status', '=', '1')->leftJoin('news_category', function($join){ $join->on('news_reporters.rp_newscat_id', '=', 'news_category.nc_id'); })->get();

        
    }


}