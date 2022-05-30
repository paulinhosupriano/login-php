<?php
require_once('../load.php');

$redirectAuth = '../index.php';

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// verifica existencia de dados.
if (!isset($data)) {
    setMessage("Ops, favor informe os dados.", 'info');
    redirect($redirectAuth);
    exit;
}

// checa se está vazios os campos informados.
if(in_array('',$data)){
    setMessage("Ops, preencha os dados.",'info');
    redirect($redirectAuth);
    exit;
}

// Valida e-mail chegando formado válido email@email.com .
if(!isMail($data['email'])){
    setMessage("Formato inválido",'info');
    redirect($redirectAuth);
    exit;
}

// efetua checagem de autenticação.
if(!auth($data['email'],$data['senha'])){
    setMessage("Dados incorretos",'danger');
    redirect($redirectAuth);
    exit;
}

redirect('../dash.php');
