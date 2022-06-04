<?php

namespace Controller;

use Core\masterController;
use Core\Message;
use Core\Redirect;
use Models\Autentication;

class Dash extends masterController
{
    public function __construct()
    {
        parent::__construct();

        if (!Autentication::isAuth()) {
            Message::setMessage("Favor identifique-se.", 'warning');
            Redirect::uri('/');
            return;
        }
    }

    public function index()
    {
        echo $this->render('dash.html', []);
    }

    public function logoff()
    {
        unset($_SESSION['userlogin']);
        Message::setMessage("Você deslogou com sucesso.");
        Redirect::uri('/');
    }
}
