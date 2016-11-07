<?php
namespace Shine\Base;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

class Post
{
	private $id;
	private $title;
	private $content;
	private $excerpt;

	const POST_TYPE = 'post';

	public function __construct( $id = false )
	{
		$this->id = $id;
	}

	public function __get( $prop )
	{
		if ( isset( $this->$prop ) ) {
			return $this->$prop;
		}

		if ( in_array( $prop, array( 'title', 'content', 'excerpt' ), true ) ) {
			$this->$prop = get_post_field( "post_{$prop}", $this->id, 'raw' );
			return $this->$prop;
		}

		$this->$prop = get_post_meta( $this->id, $this::POST_TYPE . '-' . $prop, true );
		return $this->get_property( $prop );
	}

	public function the_post_thumbnail( $size = 'thumbnail', $attr = array() )
	{
		echo get_the_post_thumbnail( $this->id, $size, $attr );
	}

	public function the_title()
	{
		echo apply_filters( 'the_title', $this->__get( 'title' ) );
	}

	public function the_content()
	{
		echo apply_filters( 'the_content', $this->__get( 'content' ) );
	}

	protected function get_property( $prop )
	{
		return $this->$prop;
	}
}
