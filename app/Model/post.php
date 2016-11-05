<?php
namespace Shine\Theme;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

class Post
{
	private $id;
	private $title;
	private $content;
	private $excerpt;
	private $cidade;
	private $bairro;
	private $logradouro;
	private $numero;
	private $cep;

	public function __construct( $id = false )
	{
		$this->id = $id;
	}

	public function __get( $prop )
	{
		return $this->_get_property( $prop );
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

	private function _get_property( $prop )
	{
		if ( isset( $this->$prop ) ) {
			return $this->$prop;
		}

		if ( in_array( $prop, array( 'title', 'content', 'excerpt' ), true ) ) {
			$this->$prop = get_post_field( "post_{$prop}", $this->id, 'raw' );
			return $this->$prop;
		}

		$this->$prop = get_post_meta( $this->id, "post-{$prop}", true );
		return $this->$prop;
	}
}
