<?php

namespace Init;

use Sentgine\Ray\DotEnv;
use Sentgine\Ray\Route;

/**
 * Class Kernel
 * 
 * The Kernel class handles incoming requests and dispatches them to appropriate routes.
 */
class Kernel
{
    /**
     * Handle an incoming request.
     * 
     * @return Response The HTTP response.
     */
    public function handle()
    {
        DotEnv::load(ROOT_PATH . '/.env'); # Load environment variables     

        require_once ROOT_PATH . '/routes/web.php'; # Load Routes

        Route::setNotFoundTemplate('errors/404'); # Set 404 view
        Route::setMethodNotAllowedTemplate('errors/405'); # Set 405 view

        $httpMethod = $_SERVER['REQUEST_METHOD']; # Get the HTTP method
        $uri = $_SERVER['REQUEST_URI']; # Get the request URI

        # Remove query parameters
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }

        $uri = rawurldecode($uri); # Decode percent encoded characters
        Route::dispatch($httpMethod, $uri); # Dispatch the request
    }
}
