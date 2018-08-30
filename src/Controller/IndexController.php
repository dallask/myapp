<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 28-Aug-18
 * Time: 13:19
 */

namespace MyApp\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class IndexController
 *
 * @package MyApp\Controller
 */
class IndexController
{

    public static function indexAction()
    {
        return new Response("Hello World!");
    }

    public static function indexActionNew()
    {
        return new Response("Hello World New!");
    }
}
