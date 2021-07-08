<?php

use libraries\DotEnv;

(new DotEnv(__DIR__ . '/.env'))->load();

/** DB Params */
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_USER', $_ENV['DB_USERNAME']);
define('DB_PASS', $_ENV['DB_PASSWORD']);
define('DB_NAME', $_ENV['DB_DATABASE']);

/** App root */
define('APPROOT', dirname(dirname(__FILE__)));

/**URL root */
define('URLROOT', 'http://phpframework.com/public');

/** Site Name */
define('SITENAME', 'MyApp');