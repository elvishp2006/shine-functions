<?php
if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

get_header();

use Shine\Theme\Post;

$model = new Post( get_the_ID() );
?>

<article <?php post_class(); ?>>
	<h1><?php $model->the_title(); ?></h1>

	<figure><?php $model->the_post_thumbnail( 'single-featured' ); ?></figure>

	<div><?php $model->the_content(); ?></div>

	<ul>
		<li>Cidade: <?php echo esc_html( $model->cidade ); ?></li>
		<li>Bairro: <?php echo esc_html( $model->bairro ); ?></li>
		<li>Logradouro: <?php echo esc_html( $model->logradouro ); ?></li>
		<li>Número: <?php echo esc_html( $model->numero ); ?></li>
		<li>CEP: <?php echo esc_html( $model->cep ); ?></li>
	</ul>
</article>

<?php get_footer(); ?>
