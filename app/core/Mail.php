<?php

namespace Core;

class Mail
{
    public static function validate($mail)
    {
        return (filter_var($mail, FILTER_VALIDATE_EMAIL)) ? true : false;
    }
}
