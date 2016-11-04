<?php
namespace Shine\Theme;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use Metaboxes;

class Events_Controller extends Post_Type
{
	public function __construct()
	{
		add_action( 'init', array( &$this, 'register_post_type' ) );
		add_action( 'admin_init', array( &$this, 'register_meta_boxes' ) );
	}

	public function register_post_type()
	{
		register_post_type(
			'event',
			array(
				'public'    => true,
				'menu_icon' => 'dashicons-calendar-alt',
				'label'     => 'Eventos',
				'labels'    => array(
					'name'          => 'Eventos',
					'singular_name' => 'Evento',
				),
			)
		);
	}

	public function register_meta_boxes()
	{
		new Metaboxes(
			array(
				'id'               => 'event-dados',
				'meta_keys'        => array(
					'event-local'   => true,
					'event-horario' => true,
				),
				'post_type'        => 'event',
				'context'          => 'normal',
				'priority'         => 'high',
				'title'            => 'Dados',
				'content_callback' => array( &$this, 'render_content' ),
			)
		);
	}
}
