<?php

/*
|--------------------------------------------------------------------------
| Application Bootstrap and Execution
|--------------------------------------------------------------------------
|
| This section initializes the application by loading necessary dependencies
| and executing the application's entry point. It includes the autoload
| script to load Composer dependencies and the constants script to define
| application constants. Finally, it instantiates the application class
| and executes the `run` method to start the application.
|
*/

// Include Composer autoload
require_once dirname(__DIR__) . '/vendor/autoload.php';

// Include application constants
require_once dirname(__DIR__) . '/bootstrap/Constants.php';

// Instantiate and run the application
(new Init\Kernel())->handle();
