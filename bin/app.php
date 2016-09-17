<?php

/**
 * If this is run via "composer app" then input will be blocked due to:
 *  - https://github.com/composer/composer/issues/3299
 *  - https://github.com/composer/composer/pull/4036
 * Please run it directly
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Project\App;

$app = new App();

echo $app->getWelcome( cli\prompt( 'What is your name?' ) );
