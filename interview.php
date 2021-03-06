
<?php
/*
/*
Template Name: Interview
*/
?>


<?php get_header(); ?>

<div class="principal">

<!-- Page Content -->
    <div class="container">

        

            <h1>Interview</h1>

            <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-sm-9">   


                  
                  <div class="row">
                        <div class="col-sm-12">
                            <div class="item">
                                <?php query_posts('posts_per_page=1&cat=1096'); ?>
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                      
                                <?php the_content(); ?>

                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                       
                   </div>


                   <div class="mais-videos">
                      
                      <div class="row">

                          <?php query_posts('posts_per_page=24&cat=1096&offset=1'); ?>
                          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="col-sm-4">
                              <div class="item">
                                   <a href="<?php the_permalink(); ?>">
                                       <?php
                                            the_post_thumbnail( 'thumb-quadrado', array( 'class' => 'img-responsive' ) );
                                        ?>
                                    </a>
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <div class="intro"><?php the_excerpt(); ?></div>
                              </div>
                            </div>
                            <?php endwhile; else : ?>
                                  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                             <?php endif; ?>

                       </div>

                  </div>

            </div>

             <!-- Blog Sidebar Widgets Column -->
            <div class="col-sm-3 sidebar">

                <?php if ( is_active_sidebar( 'lateral' ) ) : ?>                    
                    <?php dynamic_sidebar( 'lateral' ); ?>                    
                <?php endif; ?>

            </div>

        </div>

        
    </div>
    <!-- /.container -->

</div>


<?php get_footer(); ?>

