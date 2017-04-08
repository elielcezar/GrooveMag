<?php
/*
Template Name: Homepage
*/
//the content of page.php and now you can do what you want.
?>
<?php get_header(); ?>
<!-- destaque -->
<div class="destaque">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              <?php query_posts('posts_per_page=3&cat=-1092,-1104'); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="item">
                        <a href="<?php the_permalink(); ?>">
                            <?php echo get_the_post_thumbnail( $page->ID, 'large' ); ?>
                             <div class="conteudo">
                                <h2><?php the_title(); ?></h2>
                                
                            </div> 
                        </a>   
                    </div>    
              <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
              <?php endif; ?>
          </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
</div>
<div class="principal">
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-sm-9">               
                <div class="noticias">
                  <h3>Notícias</h3>
                  <div class="row">
                        <div class="col-sm-8">
                            <div class="item">
                                <?php query_posts('posts_per_page=1&cat=-1092,-1104'); ?>
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                      
                                         <a href="<?php the_permalink(); ?>">
                                             <?php the_post_thumbnail( 'thumb-noticias', array( 'class' => 'img-responsive' ) ); ?>
                                          </a>
                                      
                                      <div class="chamada">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <div class="intro"><?php the_excerpt(); ?></div>
                                      </div>

                                <?php endwhile; else : ?>
                                      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <?php query_posts('offset=1&posts_per_page=2&cat=-1092,-1104'); ?>
                             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                             <div class="item">
                                  <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'thumb-noticias', array( 'class' => 'img-responsive' ) ); ?>
                                  </a>
                                   <div class="chamada">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <div class="intro"><?php the_excerpt(); ?></div>
                                    </div>
                              </div>
                                <?php endwhile; else : ?>
                                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                              <?php endif; ?>
                        </div>
                   </div>
                </div><!-- noticias -->


                <div class="entrevistas">
                  <h3>Entrevistas</h3>
                   <div class="row">

                    <?php query_posts('posts_per_page=3&cat=1084'); ?>
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

                </div><!-- entrevistas -->


            <div class="banner-home">
                   <?php if ( is_active_sidebar( 'banner-home' ) ) : ?>                    
                          <?php dynamic_sidebar( 'banner-home' ); ?>                    
                  <?php endif; ?>
            </div>



                <div class="features">
                  <h3>Features</h3>
                  <div class="row">
                        <div class="col-sm-8">
                            <div class="item">
                                <?php query_posts('posts_per_page=1&cat=1085'); ?>
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                      
                                         <a href="<?php the_permalink(); ?>">
                                             <?php the_post_thumbnail( 'thumb-noticias', array( 'class' => 'img-responsive' ) ); ?>
                                          </a>
                                      
                                      <div class="chamada">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <div class="intro"><?php the_excerpt(); ?></div>
                                      </div>

                                <?php endwhile; else : ?>
                                      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <?php query_posts('offset=1&posts_per_page=2&cat=1085'); ?>
                             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                             <div class="item">
                                  <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'thumb-noticias', array( 'class' => 'img-responsive' ) ); ?>
                                  </a>
                                   <div class="chamada">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <div class="intro"><?php the_excerpt(); ?></div>
                                      </div>
                              </div>
                                <?php endwhile; else : ?>
                                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                              <?php endif; ?>
                        </div>
                   </div>
                </div><!-- features -->

                <div class="radioshow">
                  <h3>Radioshow</h3>
                   <div class="row">

                      <div id="radioshow-carousel" class="carousel slide" data-ride="carousel">
            
                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                            <div class="item">
                                  <?php query_posts('posts_per_page=2&cat=1104'); ?>
                                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                  
                                  <div class="col-sm-6">     
                                      <div class="item-tv">                           
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

                              <div class="item">
                                  <?php query_posts('posts_per_page=2&cat=1104&offset=2'); ?>
                                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                  
                                  <div class="col-sm-6">     
                                      <div class="item-tv">                           
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

                              <div class="item">
                                  <?php query_posts('posts_per_page=2&cat=1104&offset=4'); ?>
                                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                  
                                  <div class="col-sm-6">     
                                      <div class="item-tv">                           
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

                              <!--div class="item">
                                  <?php query_posts('posts_per_page=2&cat=1104&offset=2'); ?>
                                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                  
                                    <div class="col-sm-6"> 
                                    <div class="item-tv">                               
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

                              <div class="item">
                                  <?php query_posts('posts_per_page=2&cat=1104&offset=4'); ?>
                                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                  
                                    <div class="col-sm-6">  
                                    <div class="item-tv">                              
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
                              </div-->
                          </div>
                          <!-- Left and right controls -->
                          <a class="left carousel-control" href="#radioshow-carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#radioshow-carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>

                      </div>
                      
                     </div>

                  </div><!-- grove tv -->


                <div class="reviews">
                  <h3>Reviews</h3>
                  <div class="row">
                        <div class="col-sm-8">
                            <div class="item">
                                <?php query_posts('posts_per_page=1&cat=1091'); ?>
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                      
                                         <a href="<?php the_permalink(); ?>">
                                             <?php the_post_thumbnail( 'thumb-noticias', array( 'class' => 'img-responsive' ) ); ?>
                                          </a>
                                      
                                      <div class="chamada">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <div class="intro"><?php the_excerpt(); ?></div>
                                      </div>

                                <?php endwhile; else : ?>
                                      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <?php query_posts('offset=1&posts_per_page=2&cat=1091'); ?>
                             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                             <div class="item">
                                  <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'thumb-noticias', array( 'class' => 'img-responsive' ) ); ?>
                                  </a>
                                   <div class="chamada">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <div class="intro"><?php the_excerpt(); ?></div>
                                      </div>
                              </div>
                                <?php endwhile; else : ?>
                                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                              <?php endif; ?>
                        </div>
                   </div>
                </div><!-- features -->




                <div class="groovetv">
                  <h3>Groove TV</h3>
                   <div class="row">

                    <div id="groovetv-carousel" class="carousel slide" data-ride="carousel">
          
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          <div class="item">
                                <?php query_posts('posts_per_page=2&cat=1092'); ?>
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                
                                <div class="col-sm-6">     
                                    <div class="item-tv">                           
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

                            <div class="item">
                                <?php query_posts('posts_per_page=2&cat=1092&offset=2'); ?>
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                
                                  <div class="col-sm-6"> 
                                  <div class="item-tv">                               
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

                            <div class="item">
                                <?php query_posts('posts_per_page=2&cat=1092&offset=4'); ?>
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                
                                  <div class="col-sm-6">  
                                  <div class="item-tv">                              
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
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#groovetv-carousel" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#groovetv-carousel" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>

                    </div>
                    
                   </div>

                </div><!-- grove tv -->

            </div>
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-sm-3 sidebar">
                <?php if ( is_active_sidebar( 'lateral' ) ) : ?>                    
                    <?php dynamic_sidebar( 'lateral' ); ?>                    
                <?php endif; ?>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div><!-- principal -->
<?php get_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function ($) {
    $('.carousel-inner .item:nth-child(1)').addClass('active');
    
    $('.destaque .item img').replaceWith(function(i, v){
        return $('<div/>', {
            style: 'background-image: url('+this.src+')',
            class: 'imagem'
        })
    }) 
 });
    
</script>  
