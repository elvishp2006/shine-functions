<?php
if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
<ul>
	<li>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</li>
</ul>
<?php endwhile; ?>

<?php get_footer(); ?>
