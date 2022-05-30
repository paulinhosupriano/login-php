<?php
function auth($login, $password)
{
    if ($login != AUTENTICATION['email'] || $password != AUTENTICATION['senha']) {
        return false;
    }
    $_SESSION['userlogin']['login'] = AUTENTICATION['login'];
    $_SESSION['userlogin']['senha'] = AUTENTICATION['senha'];
    return true;
}

function isAuth()
{
    return (isset($_SESSION['userlogin'])) ? true : false;
}

function isLogoff()
{
    $logoff = filter_input(INPUT_GET, 'sair', FILTER_DEFAULT);
    if (isset($logoff)) {
        unset($_SESSION['userlogin']);
        setMessage("Você deslogou com sucesso.");
        redirect('index.php');
    }
}
