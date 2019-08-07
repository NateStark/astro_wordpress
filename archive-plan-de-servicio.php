<?php
get_header();

$args = array(
 'post_type'        => 'plan-de-servicio',
'posts_per_page'   => 5,
'category'         => '',
);
$query = new WP_Query( $args ); 
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
$query->the_post(); 

} // end while
} // end if
wp_reset_query();

 get_footer(); 
 echo "hola mundo";
 ?>
