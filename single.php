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

				<?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive' ) ); ?>

				<h1><?php the_title(); ?></h1>
					
				<div class="extras">
					<span class="data"><?php the_date('j \d\e  F \d\e Y'); ?></span>
					<span class="autor">Escrito por <?php the_author(); ?></span>
					<span clasa="editar"><?php edit_post_link('Editar', '<p>', '</p>'); ?></span>
				</div>
	            <div class="conteudo"><?php the_content(); ?></div>

	            <div class="tags">
	            	 <?php the_tags( '', '', '' ); ?> 
	            </div>
				<?php endwhile; ?>


        <div class="banner-home">
                   <?php if ( is_active_sidebar( 'banner-home' ) ) : ?>                    
                          <?php dynamic_sidebar( 'banner-home' ); ?>                    
                  <?php endif; ?>
            </div>


				 <div class="veja-mais">
                  <h3>Confira Também</h3>
                   <div class="row">

                    <?php query_posts('posts_per_page=2&cat=-1092,-1104'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                      <div class="col-sm-6">
                        <div class="item">
                             <a href="<?php the_permalink(); ?>">
                                 <?php
                                      the_post_thumbnail( 'thumb-noticias', array( 'class' => 'img-responsive' ) );
                                  ?>
                              </a>
                              <div class="chamada">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <div class="intro"><?php the_excerpt(); ?></div>
                              </div>
                        </div>
                      </div>
                      <?php endwhile; else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                       <?php endif; ?>
                   </div>
          </div><!-- entrevistas -->

          <div class="ouca-tambem">
                  <h3>Ouça Também</h3>
                   <div class="row">

                    <?php query_posts('posts_per_page=2&cat=1104'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                      <div class="col-sm-6">
                        <div class="item">                           
                                           <a href="<?php the_permalink(); ?>">
                                               <?php
                                                    the_post_thumbnail( 'thumb-noticias', array( 'class' => 'img-responsive' ) );
                                                ?>
                                            </a>
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                      </div>
                      </div>
                      <?php endwhile; else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                       <?php endif; ?>
                   </div>
          </div><!-- entrevistas -->


					
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
