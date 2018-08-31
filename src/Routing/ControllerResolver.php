<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 28-Aug-18
 * Time: 13:13
 */

namespace MyApp\Routing;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface as BaseInterface;

/**
 * Class ControllerResolver
 *
 * @package MyApp\Routing
 */
class ControllerResolver implements BaseInterface
{

    private $routes = [];

    public function __construct(DirectRouteCollectionInterface $routesCollection)
    {
        $this->routes = $routesCollection->getCollection();
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return bool|callable|false
     */
    public function getController(Request $request)
    {
        foreach ($this->routes as $route) {
            if ($route->matches($request->getRequestUri())) {
                return $route->getController();
            }
        }

        return false;
    }
}
