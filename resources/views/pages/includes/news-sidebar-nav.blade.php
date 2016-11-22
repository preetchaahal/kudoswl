<style type="text/css">
	.inline-search-form{
		position: relative;
	}
	form .search-btn{
	    font-size: 14px;
	    background: none;
	    padding: 10px;
	    color: #ccc;
	    height: 38px;
	    outline: none;
	    padding: 0;
	    position: absolute;
	    right: 20px;
	    top: 1px;
	}
	div.button-list>div.btn-group>ul>li>a:hover{
		background-color: rgb(193, 8, 65);
		color: white;
		transition: all 0.2s ease-in; 
	}
	div.list-tags>a{
		margin: 2px !important;
	}
	div.button-list{
		display: inline-block;
	}

</style>
<aside class="widget list">
	<div class="">
		<form class="inline-search-form" name="search-news" class="" method="GET" action="{{ url() }}/news_search">
        	<div class="form-group">
          		<input class="search-string form-control" type="text" placeholder="Search news here!" name="search-string" maxlength="15">
        		<button class="submit search-btn" value="Search"><span class="glyphicon glyphicon-arrow-right"></span></button>
        	</div>
      	</form>
    </div><!-- // -->
	<div class="title-box">
		<h3 class="title">Categories</h3>
	</div>
	<div>

		<?php
			//$categories = $obj_Common->get_query('is_active != "0"','tbl_newscategory',"*");
			if( count( $newsCategories ) > 0 ):
			//while($result = mysql_fetch_array($categories))
			foreach( $newsCategories as $key => $value )
			{
				$mainCat = unserialize($value['cat_name']);
				$mainCat = $mainCat[$lang_id];
				//$sub_categories = '';
				//$sub_categories = $obj_Common->get_query("is_active != '0' AND main_cat_id = '".$result['nc_id']."'",'tbl_news_subcategory',"*");
			?>
			<div class="button-list">
				<div class="btn-group">
					<a class="btn" href="news_search?cat=<?php echo $value['cat_id']; ?>"><?php echo ucfirst($mainCat); ?></a><?php if( count($value['sub_cat']) > 0) { ?><button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button><?php } ?>
	  		
		  		<?php if( count($value['sub_cat']) > 0 ) { ?>
		  			<ul class="dropdown-menu">
				  	<?php
						
						foreach( $value['sub_cat'] as $v ){
						//while($result = mysql_fetch_array($sub_categories))
						//{
							$subCat = unserialize($v->nsc_name);
							$subCat = $subCat[$lang_id];
					?>
					<li><a href="{{ url() }}/news_search?subcat=<?php echo $v->nsc_id; ?>"><?php echo ucfirst($subCat); ?></a></li>
		  			<?php }//end of foreach ?>
					</ul>
				<?php }//end of if ?>
				</div><!--- ///btn-group -->	
			
			</div><!-- ///button-list -->
			<?php }//end of foreach 
				endif;
			?>
	</div>
</aside>