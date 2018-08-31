<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 28-Aug-18
 * Time: 13:25
 */

namespace MyApp\Routing;

/**
 * Class ControllerIterator
 *
 * @package MyApp\Routing
 */
class ControllerIterator implements \Iterator
{
    private $position = 0;
    private $array = [];

    public function __construct($routeCollection)
    {
        $this->position = 0;
        $this->array = $routeCollection;
    }

    public function add($item)
    {
        return $this->array[] = $item;
    }

    public function current()
    {
        return $this->array[$this->position];
    }

    public function next()
    {
        ++$this->position;
    }

    public function key()
    {
        return $this->position;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid()
    {
        return isset($this->array[$this->position]);
    }
}
