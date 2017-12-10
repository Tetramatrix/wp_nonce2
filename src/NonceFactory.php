<?php

namespace src;

use src\Nonce;

/**
 * Factor for nonce objects.
 *
 * @package src
 */
class NonceFactory {

	/**
	 * Creates and returns a new nonce instance for the given nonce context.
	 *
	 * @param Context $context Nonce context object.
	 *
	 * @return Nonce
	 */
	public function create( Context $context ) {

		$nonce = wp_create_nonce( $context->get_action() );

		return new Nonce( $nonce );
	}
}