<?php
namespace Shine\Theme;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

class Images_Controller
{
	public function __construct()
	{
		add_action( 'after_setup_theme', array( &$this, 'add_image_sizes' ) );
	}

	public function add_image_sizes()
	{
		add_image_size( 'homepage-card-full', 450, 450, true );
		add_image_size( 'homepage-card-thumb', 250, 200, true );
	}
}
