<?php
if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

get_header();

use Shine\Theme\Event;

$model = new Event( get_the_ID() );
?>

<article <?php post_class(); ?>>
	<h1><?php $model->the_title(); ?></h1>

	<div><?php $model->the_content(); ?></div>

	<ul>
		<li>Local: <?php echo esc_html( $model->local ); ?></li>
		<li>Horário: <?php echo esc_html( $model->horario ); ?></li>
	</ul>
</article>

<?php get_footer(); ?>
