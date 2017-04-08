
<?php
/*
Template Name: Homepage
*/

//the content of page.php and now you can do what you want.
?>


<?php get_header(); ?>

<div class="principal">

<!-- Page Content -->
    <div class="container">        

            <h1><?php single_cat_title(); ?></h1>


            <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-sm-9">   

                <?php 
                //$query = new WP_Query( 'cat=-3,-8' );
                //$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                //$args = array('posts_per_page' => 25, 'paged' => $paged);
                //query_posts($args); ?>

                <!-- the loop -->
                <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

                <div class="item">
                    <div class="row">
                            <div class="col-sm-4">
                                <div class="imagem">
                                    <a href="<?php the_permalink(); ?>">
                                    <?php
                                      if ( get_the_post_thumbnail( $post_id ) != '' ) {                                        
                                                the_post_thumbnail( 'thumb-noticias', array( 'class' => 'img-responsive' ) );
                                            } else {
                                                echo get_first_image();
                                            }
                                      ?>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                 <div class="data"><?php echo get_the_date(); ?></div>
                                 <div class="intro"><?php echo strip_tags( get_the_excerpt() ); ?></div>
                            </div>
                        </div>  
                    </div>

                <?php endwhile; ?>
                <!-- pagination -->
                <?php wp_pagenavi(); ?>
                <?php else : ?>
                <!-- No posts found -->
                <?php endif; ?>



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

