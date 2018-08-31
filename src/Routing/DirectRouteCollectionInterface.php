<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 30-Aug-18
 * Time: 15:24
 */

namespace MyApp\Routing;

/**
 * Interface DirectRouteCollectionInterface
 *
 * @package MyApp\Routing\
 */
interface DirectRouteCollectionInterface extends \IteratorAggregate
{

    /**
     * @param \MyApp\Routing\RouteInterface $route
     *
     * @return mixed
     */
    public function add(RouteInterface $route);

    public function getCollection();
}
