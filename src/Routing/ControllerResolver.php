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

    /**
     * @param \MyApp\Routing\RouteInterface $route+
     */
    public function add(RouteInterface $route)
    {
        // TODO: Implement add() method.
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return callable|false|void
     */
    public function getController(Request $request)
    {
        // TODO: Implement getController() method.
    }
}
