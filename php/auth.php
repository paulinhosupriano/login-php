<?php

use Core\Auth;
use Core\Mail;
use Core\Message;
use Core\Redirect;

require_once('../load.php');

$redirectAuth = '/';

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// verifica existencia de dados.
if (!isset($data)) {
    Message::setMessage("Ops, favor informe os dados.", 'info');
    Redirect::uri($redirectAuth);
    exit;
}

// checa se está vazios os campos informados.
if(in_array('',$data)){
    Message::setMessage("Ops, preencha os dados.",'info');
    Redirect::uri($redirectAuth);
    exit;
}

// Valida e-mail chegando formado válido email@email.com .
if(!Mail::validate($data['email'])){
    Message::setMessage("Formato inválido",'info');
    Redirect::uri($redirectAuth);
    exit;
}

// efetua checagem de autenticação.
if(!Auth::auth($data['email'],$data['senha'])){
    Message::setMessage("Dados incorretos",'danger');
    Redirect::uri($redirectAuth);
    exit;
}

Redirect::uri('/dash.php');
