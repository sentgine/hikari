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

        if (is_env_dev()) {
            \Symfony\Component\ErrorHandler\Debug::enable(); # Enable debug mode
        }

        $route = new Route(); # Instantiate route class
        require_once ROOT_PATH . '/routes/web.php'; # Load Routes

        $route->setNotFoundTemplate('errors/404'); # Set 404 view
        $route->setMethodNotAllowedTemplate('errors/405'); # Set 405 view

        $httpMethod = $_SERVER['REQUEST_METHOD']; # Get the HTTP method
        $uri = $_SERVER['REQUEST_URI']; #Get the request URI

        # Remove query parameters
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }

        $uri = rawurldecode($uri);  # Decode percent encoded characters
        $route->dispatch($httpMethod, $uri); # Dispatch the request
    }
}
