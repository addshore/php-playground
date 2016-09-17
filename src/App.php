<?php

namespace Project;

class App {

	/**
	 * @param string $name
	 *
	 * @return string
	 */
	public function getWelcome( $name = null ) {
		if( !$name || !is_string( $name ) || strlen( $name ) === 0 ) {
			$name = 'Unknown User';
		}
		return "Welcome $name";
	}

}
