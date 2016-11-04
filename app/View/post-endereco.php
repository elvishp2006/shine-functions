<?php
namespace Shine\Theme;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

$model = new Post( $post->ID );
?>

<p>
	<label>Cidade
		<input type="text"
			   name="post-cidade"
			   class="large-text"
			   value="<?php echo esc_attr( $model->cidade ); ?>" />
	</label>
</p>

<p>
	<label>Bairro
		<input type="text"
			   name="post-bairro"
			   class="large-text"
			   value="<?php echo esc_attr( $model->bairro ); ?>" />
	</label>
</p>

<p>
	<label>Logradouro
		<input type="text"
			   name="post-logradouro"
			   class="large-text"
			   value="<?php echo esc_attr( $model->logradouro ); ?>" />
	</label>
</p>

<p>
	<label>Número
		<input type="text"
			   name="post-numero"
			   class="large-text"
			   value="<?php echo esc_attr( $model->numero ); ?>" />
	</label>
</p>

<p>
	<label>CEP
		<input type="text"
			   name="post-cep"
			   class="large-text"
			   value="<?php echo esc_attr( $model->cep ); ?>" />
	</label>
</p>
