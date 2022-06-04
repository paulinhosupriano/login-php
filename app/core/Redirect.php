<?php

namespace Core;

class Redirect
{
    public static function uri($uri = null)
    {
        if (is_null($uri)) {
            header('Location: ' . URI);
            exit;
        }
        header('Location: ' . URI . $uri);
    }
}
