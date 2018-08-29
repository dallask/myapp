<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 28-Aug-18
 * Time: 13:16
 */

namespace MyApp\Routing;

/**
 * Class Route
 *
 * @package MyApp\Routing
 */
class Route implements RouteInterface
{

    private $regexp;

    private $controller;
    /**
     * Route constructor.
     *
     * @param          $regexp
     * @param callable $controller
     */
    public function __construct($regexp, callable $controller)
    {
        $this->regexp = $regexp;
        $this->controller = $controller;
    }

    /**
     * @param $path
     *
     * @return bool
     */
    public function matches($path)
    {
        return (bool) preg_match($this->regexp, $path);
    }

    public function getController()
    {
        return $this->controller;
    }
}
