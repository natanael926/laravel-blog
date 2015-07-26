<?php
/**
 * Created by PhpStorm.
 * User: rudysacosta
 * Date: 25/7/15 -30
 * Time: 1:15 PM
 */

namespace App\Core\View;

class Tempate {

    public static function render($file, array $data = array() )
    {
        ob_start();
        extract($data);
        include '../templates/' + $file +'.php';
        return ob_get_clean();
    }

}