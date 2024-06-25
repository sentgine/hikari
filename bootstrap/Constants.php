<?php
/*
|--------------------------------------------------------------------------
| Application Paths
|--------------------------------------------------------------------------
|
| This section defines various paths used within the application.
| These paths are essential for organizing code and accessing resources.
|
*/

define('ROOT_PATH', dirname(__DIR__));
define('APP_PATH', ROOT_PATH . '/app');
define('CONSOLE_PATH', ROOT_PATH . '/console');

/*
|--------------------------------------------------------------------------
| Environment Constants
|--------------------------------------------------------------------------
|
| This section defines constants representing different environments
| within the application. These constants are typically used to identify
| the current environment and adjust application behavior accordingly.
|
*/

define('ENV_PROD', 'production');
define('ENV_DEV', 'development');
