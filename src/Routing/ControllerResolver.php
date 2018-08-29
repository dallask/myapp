<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 28-Aug-18
 * Time: 13:13
 */

namespace MyApp\Routing;

use Symfony\Component\HttpFoundation\Request;

/**
 * Class ControllerResolver
 *
 * @package MyApp\Routing
 */
class ControllerResolver implements ControllerResolverInterface
{

    private $routes = [];

    public function __construct(ControllerIterator $iterator)
    {
        $this->routes = $iterator;
    }

    /**
     * @param \MyApp\Routing\RouteInterface $route+
     */
    public function add(RouteInterface $route)
    {
        $this->routes->add($route);
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return callable|false|void
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
