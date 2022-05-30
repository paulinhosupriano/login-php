<?php
require_once('../load.php');

$redirectAuth = '../index.php';

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// verifica se existe dados.
if (!isset($data)) {
    setMessage("Ops, favor informe os dados.", 'info');
    redirect($redirectAuth);
    exit;
}

// verifica se existe dados.
if(in_array('',$data)){
    setMessage("Ops, preencha os dados.",'info');
    redirect($redirectAuth);
    exit;
}

// Verifica se existe e-mail.
if(!isMail($data['email'])){
    setMessage("Formato inválido",'info');
    redirect($redirectAuth);
    exit;
}

// validar e-mail.
if(!auth($data['email'],$data['senha'])){
    setMessage("Dados incorretos",'danger');
    redirect($redirectAuth);
    exit;
}

redirect('../dash.php');