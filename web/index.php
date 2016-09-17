<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Project\App;

$app = new App();

Canteen\HTML5\HTML5::useGlobal();

if ( array_key_exists( 'name', $_REQUEST ) && strlen( $_REQUEST['name'] ) > 0 ) {
	echo html( 'html',
		html( 'head', html( 'title', 'Project' ) ) .
		html( 'body',
			$app->getWelcome( urldecode( $_REQUEST['name'] ) ) .
			html(
				'form',
				html( 'input', array( 'type' => 'submit', 'value' => 'Back' ) ),
				array( 'action' => '.', 'method' => 'get' )
			)
		)

	);
	exit;
}

echo html( 'html',
	html( 'head', html( 'title', 'Project' ) ) .
	html( 'body', html(
		'form',
		html( 'label', 'Name:' ) .
		' ' .
		html( 'input', array( 'type' => 'text', 'name' => 'name' ) ) .
		html( 'input', array( 'type' => 'submit', 'value' => 'Submit' ) ),
		array( 'action' => '.', 'method' => 'get' )
	) )
);
