<?php
class Route
{
    static function getRoute($route)
    {
        if($route === '/myserver2/get')
            require 'get.php';
        elseif($route === '/myserver2/post')
            require 'post.php';
        elseif($route === '/myserver2/reg')
            require 'reg.php';
        elseif($route === '/myserver2/vacancy')
            require 'vacancy.php';
        else
            require '404.php';
    }
}