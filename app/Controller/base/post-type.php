<?php
namespace Shine\Base;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

class Post_Type
{
	public static function render_content( $post, $id )
	{
		$file = TEMPLATEPATH . "/app/View/{$id}.php";

		if ( ! file_exists( $file ) ) {
			echo "<pre>file not exists in View/{$id}.php</pre>";
			return;
		}

		include $file;
	}
}
