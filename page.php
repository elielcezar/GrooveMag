<?php
/**
 * The template for displaying all single posts.
 *
 * @package Dyad
 */

get_header(); ?>

	<div class="principal">

	<div class="container">

        <div class="row">
        	 
            <div class="col-md-9">

            

            			<?php while ( have_posts() ) : the_post(); ?> 					

				 					<h1><?php the_title(); ?></h1>

				 		
				                    <div class="conteudo"><?php the_content(); ?></div>

						<?php endwhile; ?>

					

            </div>

            <div class="col-md-3 sidebar">
            	  <?php if ( is_active_sidebar( 'lateral' ) ) : ?>                    
                        <?php dynamic_sidebar( 'lateral' ); ?>                    
                <?php endif; ?>
            </div>

        </div>

    </div>

</div>
	
	
	

<?php get_footer(); ?>
