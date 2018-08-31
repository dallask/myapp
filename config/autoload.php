<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 28-Aug-18
 * Time: 09:41
 */

require '../vendor/autoload.php';

set_include_path(__DIR__ . '/../src');

spl_autoload_register(
    function ($class_name) {
        $file_name = get_include_path() . "/" . $class_name . '.php';
        $file_name = str_replace(["\\", "MyApp/"], ["/", ""], $file_name);
        if (file_exists($file_name)) {
            require_once($file_name);
        }
    }
);
