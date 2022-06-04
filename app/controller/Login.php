<?php

namespace Controller;

use Core\masterController;
use Core\Message;
use Core\Redirect;
use Models\Autentication;

class Login extends masterController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $message = Message::getMessage();
        echo $this->render('index.html', ['message'=>$message]);
    }

    public function auth(array $data)
    {
        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $autentication = (new Autentication);
        if(!$autentication->auth($data)){
            Redirect::uri('/');
            return false;
        }
        Redirect::uri('/dash');
    }

}
