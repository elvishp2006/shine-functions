<?php
namespace Shine\Theme;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

$model = new Event( $post->ID );
?>

<p>
	<label>Local
		<input type="text"
			   name="event-local"
			   class="large-text"
			   value="<?php echo esc_attr( $model->local ); ?>" />
	</label>
</p>

<p>
	<label>Horario
		<input type="text"
			   name="event-horario"
			   class="large-text"
			   value="<?php echo esc_attr( $model->horario ); ?>" />
	</label>
</p>
