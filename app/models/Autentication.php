<?php

namespace Models;

use Core\Mail;
use Core\Message;
use Core\Redirect;

class Autentication
{
    public function auth(array $data)
    {

        // verifica existencia de dados.
        if (!isset($data)) {
            Message::setMessage("Ops, favor informe os dados.", 'info');
            return;
        }

        // checa se está vazios os campos informados.
        if (in_array('', $data)) {
            Message::setMessage("Ops, preencha os dados.", 'info');
            return;
        }

        // Valida e-mail chegando formado válido email@email.com .
        if (!Mail::validate($data['email'])) {
            Message::setMessage("Formato inválido", 'info');
            return;
        }

        // efetua checagem de autenticação.
        if ($data['email'] != AUTENTICATION['email'] || $data['senha'] != AUTENTICATION['senha']) {
            Message::setMessage("Dados incorretos", 'danger');
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
}
