<?php
namespace Shine\Theme;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

class Supports_Controller
{
	public function __construct()
	{
		add_action( 'after_setup_theme', array( &$this, 'add_supports' ) );
	}

	public function add_supports()
	{
		add_theme_support( 'post-thumbnails' );
	}
}
