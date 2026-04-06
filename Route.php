<?php
class Route
{
    static function getRoute($route)
    {
        if($route === '/myserver/get')
            require 'get.php';
        elseif($route === '/myserver/post')
            require 'post.php';
        elseif($route === '/myserver/reg')
            require 'reg.php';
        else
            require '404.php';
    }
}