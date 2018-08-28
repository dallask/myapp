<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 28-Aug-18
 * Time: 09:52
 */

namespace MyApp\Routing;

/**
 * Interface RouteInterface
 *
 * @package MyApp\Routing
 */
interface RouteInterface
{

    /**
     * RouteInterface constructor.
     *
     * @param          $regexp
     * @param callable $controller
     */
    public function __construct($regexp, callable $controller);

    /**
     * @param $path
     *
     * @return mixed
     */
    public function matches($path);

    /**
     * @return mixed
     */
    public function getController();
}
