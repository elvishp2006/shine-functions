<?php
namespace Shine\Theme;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use Shine\Base;

class Post extends Base\Post
{
	protected $cidade;
	protected $bairro;
	protected $logradouro;
	protected $numero;
	protected $cep;

	const POST_TYPE = 'post';
}
