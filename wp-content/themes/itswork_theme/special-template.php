<?php 
/*
Template Name: Special Layout
*/
get_header();
if (have_posts()):
	while (have_posts()): the_post();
?>
<h1><?php the_title();?></h1>
<?php
    endwhile;
else:
	echo "default";
endif;

get_footer();
?>