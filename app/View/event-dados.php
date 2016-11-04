<?php
if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

$local   = get_post_meta( $post->ID, 'event-local', true );
$horario = get_post_meta( $post->ID, 'event-horario', true );
?>

<p>
	<label>Local
		<input type="text"
			   name="event-local"
			   class="large-text"
			   value="<?php echo esc_attr( $local ); ?>" />
	</label>
</p>

<p>
	<label>Horario
		<input type="text"
			   name="event-horario"
			   class="large-text"
			   value="<?php echo esc_attr( $horario ); ?>" />
	</label>
</p>
