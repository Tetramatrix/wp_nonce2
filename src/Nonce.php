<?php 

namespace src;

/**
 * Nonce model.
 *
 * @package src
 */
class Nonce {

	/**
	 * @var string
	 */
	private $nonce;

	/**
	 * Constructor. Sets up the properties.
	 *
	 * @param string $nonce Nonce value.
	 */
	public function __construct( $nonce ) {

		$this->nonce = (string) $nonce;
	}

	/**
	 * Returns the nonce value.
	 *
	 * @return string
	 */
	public function get() {

		return $this->nonce;
	}
}
