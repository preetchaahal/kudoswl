<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blog_posts';

    /**
    *    The default primary key for this
    *   model
    *
    *
    */
    protected $primaryKey = 'ID';

    public $timestamps = false;

    public function scopeActive($query){
        return $query->where('post_status', '1');
    }

    public function fetchAllCategories($query){
        $categories = $query->table('blog_category')->where('is_active', '=', '1')->get();
        foreach ($categories as $value) {
            $temp = $query->table('blog_sub_category')->where('is_active', '=', '1')->where('main_cat_id', '=', $value->id)->get();
            $categoryArr[] = array(
                    'cat_id'        =>      $value['id'],
                    'cat_name'      =>      $value['name'],
                    'sub_cat'       =>      $temp
                );
        }
        return $categoryArr;
    }

    public static function fetchPostsCount( $condition ){

        $query = "SELECT * FROM blog_posts WHERE post_status != '0' ".$condition."";
        return count(\DB::select($query));
        //return \DB::table('blog_posts')->where('post_status', '!=', '0')->count();
    } 

    public static function fetchPostById( $id ){
        
        return Blog::select('blog_posts.*', 'blog_category.name as cat_name', 'blog_category.id as cat_id', 'blog_sub_category.name as subcat_name', 'blog_sub_category.id as subcat_id')->leftJoin('blog_category', function($join){ $join->on('blog_posts.post_cat', '=', 'blog_category.id')->where('blog_category.is_active', '=', '1'); })->leftJoin('blog_sub_category', function( $join ){ $join->on('blog_posts.post_sub_cat', '=', 'blog_sub_category.id')->where('blog_sub_category.is_active', '=', '1'); } )->where('blog_posts.ID', '=', $id)->get();
    
    }

    public static function fetchBlogPosts($postsPerPage, $startFrom, $condition){
        $query = "SELECT blog_posts.*, blog_category.name as cat_name, blog_category.id as cat_id, blog_sub_category.name as subcat_name, blog_sub_category.id as subcat_id FROM blog_posts LEFT JOIN blog_category ON (blog_posts.post_cat = blog_category.id AND blog_category.is_active = 1 ) LEFT JOIN blog_sub_category ON (blog_posts.post_sub_cat = blog_sub_category.id AND blog_sub_category.is_active = 1) WHERE blog_posts.post_status = '1' ".$condition." ORDER BY blog_posts.post_created_at DESC LIMIT ".$postsPerPage." OFFSET ".$startFrom." ";
        //echo $query;exit;
        return \DB::select($query);
        //return Blog::select('blog_posts.*', 'blog_category.name as cat_name', 'blog_category.id as cat_id', 'blog_sub_category.name as subcat_name', 'blog_sub_category.id as subcat_id')->leftJoin('blog_category', function($join){ $join->on('blog_posts.post_cat', '=', 'blog_category.id')->where('blog_category.is_active', '=', '1'); })->leftJoin('blog_sub_category', function( $join ){ $join->on('blog_posts.post_sub_cat', '=', 'blog_sub_category.id')->where('blog_sub_category.is_active', '=', '1'); } )->where('post_status', '=', '1')->limit($postsPerPage)->offset($startFrom)->orderBy("post_created_at", "desc")->get();
    }

    public static function fetchBlogCategoriesAndSubCategories(){

        $categories = \DB::select("SELECT * FROM blog_category WHERE is_active = '1' ");
        foreach ($categories as $key => $value) {
            $subCategories = \DB::select("SELECT * FROM blog_sub_category WHERE is_active = '1' AND main_cat_id = '".$value->id."' ");
            $blogCategories[] = array(
                    'cat_id'        =>      $value->id,
                    'cat_name'      =>      $value->name,
                    'sub_cat'       =>      $subCategories
                );
        }
        return $blogCategories;
    }

    public static function fetchLikesCount($postId){
        $likesCount = \DB::table('blog_post_likes')->select('like_id')->where('like_post_ID', '=', $postId)->where('like_status', '=', '1')->count();
        return $likesCount;    
    }

    public static function fetchCommentsCount($postId){
        $commentsCount = \DB::table('blog_post_comments')->select('comment_ID')->where('comment_post_ID', '=', $postId)->where('comment_status', '=', '1')->where('comment_comment_id', '=', '0')->count();
        return $commentsCount;    
    }

    public static function fetchPostTags(){
        return Blog::select('post_tags')->where('post_tags', '!=', '')->where('post_status', '=', '1')->get();//"SELECT post_tags FROM blog_posts WHERE post_tags != '' AND post_status = 1");
    }

    public static function checkIsPostLikeByLoggedInUser( $postId, $userId ){
        $isPostLiked = \DB::table('blog_post_likes')->select('like_id')->where('like_post_ID', '=', $postId)->where('like_author_ID', '=', $userId)->where('like_status', '=', '1')->count();
        
        //return 1 if post is liked and 0 otherwise
        if( $isPostLiked > 0 )
            return 1;
        else
            return 0;
    }

    public static function likePost( $postId, $userId ){
        
        //checking if post is already liked or liked in the past
        $sql3 = \DB::table('blog_post_likes')->select('like_id')->where('like_post_ID', '=', $postId)->where('like_author_ID', '=', $userId)->count();

        if( $sql3 > 0 ){
            //post already liked in the past
            //updating the post status to like again
            $sql2 = \DB::table('blog_post_likes')->where('like_post_ID', '=', $postId)->where('like_author_ID', '=', $userId)->update(['like_status' => '1']);
        }
        else{
            //post not liked at all,
            //add a new entry to likes table 
            $sql2 = \DB::table('blog_post_likes')->insert(['like_id' => null, 'like_post_ID' => $postId, 'like_author_ID' => $userId, 'like_date' => 'now()', 'like_status' => '1']);    
        }

        //updating like count
        //$sql2 = \DB::table('blog_posts')->where('ID', '=', $postId)->update(['likes_count' => 'likes_count+1' ]);
        $sql4 = \DB::select('UPDATE blog_posts SET likes_count = likes_count+1 WHERE ID = "'. $postId .'"');

        if( $sql2 )
            return 1;
        else
            return 0;
    }

    public static function unlikePost( $postId, $userId ){
        
        $sql2 = \DB::table('blog_post_likes')->where('like_post_ID', '=', $postId)->where('like_author_ID', '=', $userId)->update(['like_status' => '0']);
        //updating like count
        $sql4 = \DB::select('UPDATE blog_posts SET likes_count = likes_count-1 WHERE ID = "'. $postId .'"');
        //$sql2 = \DB::table('blog_posts')->where('ID', '=', $postId)->update(['likes_count' => 'likes_count-1' ]);

        if( $sql2 ){
            return 3;//3 depicts successful unlike in blog_post_blade.php
        }
        else
            return 0;
    }

    public static function fetchBlogCat( $catId, $lang_id ){
        $query = \DB::table('blog_category')->where('id', '=', $catId)->get();
        $query = unserialize($query[0]->name);
        return $query[$lang_id];
    }

    public static function fetchBlogSubCat( $subCatId, $lang_id ){
        $query = \DB::table('blog_sub_category')->where('id', '=', $subCatId)->get();
        $query = unserialize($query[0]->name);
        return $query[$lang_id];
    }

    // #note fetchComments and fetchAllComments together serve the purpose to fetch all the comments and comments on comments, 
    //fetchComments is used to fetch both the comments and comments on comments by changing the arguments
    public static function fetchComments( $postId=null, $commentCommentId=null ){
            
        if($postId == null)
            $query = \DB::table('blog_post_comments')->select('blog_post_comments.*', 'tb_users.avatar as avatar', 'tb_users.first_name as comment_author')->where('blog_post_comments.comment_status', '=', '1')->where('blog_post_comments.comment_comment_id', '=', '0')->where('blog_post_comments.type', '=', 'blog')->leftJoin('tb_users', function($join){ $join->on('blog_post_comments.comment_author_ID', '=', 'tb_users.id'); })->get();

         else if($postId != null && $commentCommentId == null)
            $query = \DB::table('blog_post_comments')->select('blog_post_comments.*', 'tb_users.avatar as avatar', 'tb_users.first_name as comment_author')->where('blog_post_comments.comment_status', '!=', '0')->where('blog_post_comments.type', '=', 'blog')->where('blog_post_comments.comment_post_ID', '=', $postId)->where('blog_post_comments.comment_comment_id', '=', '0')->leftJoin('tb_users', function($join){ $join->on('blog_post_comments.comment_author_ID', '=', 'tb_users.id'); })->get();
        
         else
            $query = \DB::table('blog_post_comments')->select('blog_post_comments.*', 'tb_users.avatar as avatar', 'tb_users.first_name as comment_author')->where('blog_post_comments.comment_status', '=', '1')->where('blog_post_comments.comment_comment_id', '=', $commentCommentId)->where('blog_post_comments.type', '=', 'blog')->leftJoin('tb_users', function($join){ $join->on('blog_post_comments.comment_author_ID', '=', 'tb_users.id'); })->get();
             
         return $query;
    }

    public static function fetchAllComments( $postId ){
        $resultArr = array();
        $allComments = Blog::fetchComments( $postId, null );

        //fetching comments on comments
        foreach ($allComments as $value) {
            $sql = array();
            
            $sql = Blog::fetchComments( $value->comment_post_ID, $value->comment_ID ); 
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

    public static function addCommentToPost($postId, $commentedById, $commentContent, $commentCommentId){

        $sql1 = \DB::table('blog_post_comments')->insert(['comment_ID' => null, 'comment_post_ID' => $postId, 'comment_author_ID' => $commentedById, 'type' => 'blog', 'comment_date' => null, 'comment_comment_id' => $commentCommentId, 'comment_content' => $commentContent, 'comment_status' => '1']);
        
        //updating comment count
        if($sql1)
            $sql2 = \DB::select('UPDATE blog_posts SET comments_count = comments_count+1 WHERE ID = "'. $postId .'"');
        if( isset($sql2) )
            return 1;
        else 
            return 0;
    }

    public static function deleteCommentFromPost( $commentId ){
        $sql = \DB::table('blog_post_comments')->where('comment_ID', '=', $commentId)->update(['comment_status' => '0']);
        
        //counting comment count on reply comments to update total comments
        
        if( $sql )
            return 1;
        else
            return 0;
    }

}
