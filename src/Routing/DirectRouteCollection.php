<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 30-Aug-18
 * Time: 16:24
 */

namespace MyApp\Routing;

class DirectRouteCollection implements DirectRouteCollectionInterface
{

    /**
     * @var array
     */
    private $routeCollection = [];

    /**
     * @return \MyApp\Routing\ControllerIterator|\Traversable
     */
    public function getIterator()
    {
        return new ControllerIterator($this->routeCollection);
    }

    /**
     * @param \MyApp\Routing\RouteInterface $route
     *
     * @return mixed|void
     */
    public function add(RouteInterface $route)
    {
        $this->routeCollection[] = $route;
    }

    /**
     * @return array
     */
    public function getCollection()
    {
        return $this->routeCollection;
    }
}
