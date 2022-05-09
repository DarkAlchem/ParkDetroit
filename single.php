<?php get_header(); ?>
<div class="container-fluid">
      <div class="row" id="blogInfoTop">
              
                      <div class="col-sm-12">
                          <div class="container">
                              <div class="page-header">
                                  <h1><?php wp_title(''); ?></h1><!--post title-->
                                  
                              </div><!--End of Header-->
                          </div>    
                      </div>
         
      </div><!-- End of Row-->
</div>
<div class="container-fluid">
      <div class="row" id="blogInfo">
        <div  class="container">
          <div class="row">
              <div class="col-sm-9" id="postPage">
                     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div id="thumbnailBlog">
                           <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium-thumbnail')?></a><!--post thumbnail-->
                        </div>
                        <?php the_content(); ?><!-- content-->
                        <hr>
                        <p><em><!--post meta data--> 
                                    By <?php the_author(); ?> 
                                    on <?php echo the_time('l, F jS, Y');?>
                                    in <?php the_category( ', ' ); ?>                                   
                                   </em></p>
                        <hr>
                        
                    <?php endwhile; else: ?>
                    <div class="page-header">
                      <h1>Oh no!</h1>
                    </div>
                    <p>No content is appearing for this page!</p>
                  <?php endif; ?>
              </div><!-- End of main Section-->  
              
                    <?php get_sidebar( 'blog' ); ?>
                
            </div>            
          </div>
        </div>
      </div>
    </div>
  

<?php get_footer(); ?>