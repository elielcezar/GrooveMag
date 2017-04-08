
<?php
/*
/*
Template Name: Canal Mega
*/
?>


<?php get_header(); ?>

<div class="principal">

<!-- Page Content -->
    <div class="container">

        

            <!-- Blog Entries Column -->
            <div class="col-sm-9">   


                <?php $thisCat = get_category(get_query_var('cat')); ?>   

                  
                  <div class="row">
                        <div class="col-sm-12">
                           <h1><?php the_title();  ?></h1>
                            
                          
                            <div class="item">

                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                <div class="extras">
                                  <span class="data"><?php the_date('j \d\e  F \d\e Y'); ?></span>
                                  <span class="autor">Escrito por <?php the_author(); ?></span>
                                  <span clasa="editar"><?php edit_post_link('Editar', '<p>', '</p>'); ?></span>
                                </div>
                                      
                                <?php the_content(); ?>

                                <?php endwhile; else : ?>
                                      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                <?php endif; ?>
                            </div>
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
    <!-- /.container -->

</div>


<?php get_footer(); ?>

