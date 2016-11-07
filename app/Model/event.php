<?php
namespace Shine\Theme;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use WP_Query;
use Shine\Base;

class Event extends Base\Post
{
	protected $local;
	protected $horario;

	const POST_TYPE = 'event';

	public function get_query_home( $quantity )
	{
		return new WP_Query(
			array(
				'posts_per_page' => $quantity,
				'post_type'      => $this::POST_TYPE,
			)
		);
	}
}
