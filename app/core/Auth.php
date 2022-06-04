<?php

namespace Core;

class Auth
{

    public static function auth($login, $password)
    {
        if ($login != AUTENTICATION['email'] || $password != AUTENTICATION['senha']) {
            return false;
        }
        $_SESSION['userlogin']['login'] = AUTENTICATION['login'];
        $_SESSION['userlogin']['senha'] = AUTENTICATION['senha'];
        return true;
    }

    public static function isAuth()
    {
        return (isset($_SESSION['userlogin'])) ? true : false;
    }

    public static function isLogoff()
    {
        $logoff = filter_input(INPUT_GET, 'sair', FILTER_DEFAULT);
        if (isset($logoff)) {
            unset($_SESSION['userlogin']);
            Message::setMessage("Você deslogou com sucesso.");
            Redirect::uri('/index.php');
        }
    }
}
