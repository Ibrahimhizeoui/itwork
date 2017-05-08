<?php 
get_header();

if (have_posts()):
	while (have_posts()): the_post();
?>
<style>
.attachment-banner_image{
width: 100%;
height:530px;
</style>
<?php the_post_thumbnail('banner_image');?>
<div class="container">
	<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
<p><?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
<p>Written by: 
<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></p>
<p>Categories| 
<?php
$categories = get_the_category();
$separator = ',';
$output = '';
if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    }
    echo trim( $output, $separator );
}
 ?>
</p>

<p><?php the_content(); ?></p>
</div>

<?php
    endwhile;
else:
	echo "default";
endif;

get_footer();
?>