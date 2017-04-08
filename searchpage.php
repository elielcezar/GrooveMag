<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>


<!-- Page Content -->
    <div class="container">

        <div class="row">


            <!-- Blog Entries Column -->
            <div class="col-md-8 noticias">               

                        <?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
    foreach($query_args as $key => $string) {
        $query_split = explode("=", $string);
        $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach
} //if

$search = new WP_Query($search_query);
?>
              

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4 sidebar">

                <?php if ( is_active_sidebar( 'lateral' ) ) : ?>                    
                        <?php dynamic_sidebar( 'lateral' ); ?>                    
                <?php endif; ?>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->



<?php get_footer(); ?>

