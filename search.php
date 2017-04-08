
<?php
/*
/*
Template Name: Search Page
*/
?>


<?php get_header(); ?>


<!-- Page Content -->
    <div class="container">

        <div class="row">


            <!-- Blog Entries Column -->
            <div class="col-md-9 noticias">             

                      

                         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                                        
                                 <div class="row">
                                    <div class="col-sm-5">                                        
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumb-noticias', array( 'class' => 'img-responsive' ) ); ?></a>
                                     </div>
                                        <div class="col-sm-7">                                            
                                            <span class="data"><?php echo get_the_date(); ?></span>                                            
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <div class="chamada"><?php the_excerpt(); ?></div>
                                            <div class="leia-mais"><a class="btn" href="<?php the_permalink(); ?>">Leia Mais</a></div>
                                            <div class="compartilhe"><a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Compartilhe</a></div>
                                        </div>                                   
                                </div>                                
                              
                            <?php endwhile; else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
              

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3 sidebar">

                <?php if ( is_active_sidebar( 'lateral' ) ) : ?>                    
                        <?php dynamic_sidebar( 'lateral' ); ?>                    
                <?php endif; ?>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->



<?php get_footer(); ?>

