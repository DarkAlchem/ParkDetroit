<?php get_header(); ?>

<div class="container-fluid">
    <div class="row" id="blogInfoTop">
        <div class="col-sm-12">
                <!--Picture goes here-->
                <div class="page-header">
                      <div  class="container">

                          <h1><?php wp_title(''); ?></h1>

                      </div>

                </div>

        </div>

        

    </div><!-- End of Row-->

</div>

<div class="container-fluid">

      <div class="row" id="blogInfo">

        <div  class="container">

          <div class="row">

              <div class="col-sm-9" id="homePostPage">

                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                <!-- check if the post has a Post Thumbnail assigned to it.-->        

                                <article class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?> "> 

                                    <!-- Thumbnail Feature Picture goes here-->

                                    <div id="thumbnailBlog">

                                       <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium-thumbnail')?></a><!--post thumbnail-->

                                    </div> 

                                    <!-- Feature Picture goes here-->

                                    <!-- rest of info-->

                                    <!--<div id="homeBlog">-->

                                          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                          <p><em><!--The Meta tag Info-->

                                            By <?php the_author(); ?> 

                                            on <?php echo the_time('l, F jS, Y');?>

                                            in <?php the_category( ', ' ); ?>

                                            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>

                                            </em></p>

                                          <hr>

                                            <?php the_excerpt(); ?>

                                    <!--</div>-->

                                </article>

                                <?php endwhile; else: ?>

                                <div class="pagination" id="subfooter">

                                    <ul>

                                        <li class="older"><?php next_posts_link('Older') ?></li>

                                        <li class="older"><?php next_posts_link('Newer') ?></li>

                                    </ul>

                                </div>

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