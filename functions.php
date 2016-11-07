<?php
namespace Shine\Theme;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

include 'app/vendor/metaboxes.php';
include 'app/vendor/utils.php';

include 'app/Model/base/post.php';
include 'app/Controller/base/post-type.php';

include 'app/Controller/events.controller.php';
include 'app/Controller/images.controller.php';
include 'app/Controller/posts.controller.php';
include 'app/Controller/supports.controller.php';

class Config
{
	public function __construct()
	{
		new Events_Controller();
		new Images_Controller();
		new Posts_Controller();
		new Supports_Controller();

		add_action( 'wp_enqueue_scripts', array( &$this, 'enqueue_scripts' ) );
	}

	public function enqueue_scripts()
	{
		wp_enqueue_style( 'shine-theme', get_stylesheet_uri() );
	}
}

new Config();
