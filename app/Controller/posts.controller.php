<?php
namespace Shine\Theme;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use Shine\Base;
use Metaboxes;

include __DIR__ . '/../Model/post.php';

class Posts_Controller extends Base\Post_Type
{
	public function __construct()
	{
		add_action( 'admin_init', array( &$this, 'register_meta_boxes' ) );
	}

	public function register_meta_boxes()
	{
		new Metaboxes(
			array(
				'id'               => 'post-endereco',
				'meta_keys'        => array(
					'post-cidade'     => true,
					'post-bairro'     => true,
					'post-logradouro' => true,
					'post-numero'     => true,
					'post-cep'        => true,
				),
				'post_type'        => Post::POST_TYPE,
				'context'          => 'normal',
				'priority'         => 'high',
				'title'            => 'Endereço',
				'content_callback' => array( &$this, 'render_content' ),
			)
		);
	}
}
