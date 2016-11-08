<?php
if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use Shine\Theme\Event;

$model = new Event();
$query = $model->get_query_home( 2 );

if ( ! $query->have_posts() ) {
	return;
}
?>

<h2>Eventos:</h2>

<ul>
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
	<li>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</li>
	<?php endwhile; ?>
</ul>
