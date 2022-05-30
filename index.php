<?php require_once('load.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <link rel="stylesheet" href="assets/bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="bgAuth"></div>

    <main class="form-signin w-100 m-auto">
        <form method="post" action="php/auth.php" autocomplete="off">
            <h1 class="h3 mb-3 fw-normal text-center">PAINEL DE ADMINISTRAÇÃO</h1>

            <div class="form-floating">
                <input type="email" name="email" required class="form-control" placeholder="  E-MAIL  ">
                <label>E-mail</label>
            </div>
            <div class="form-floating">
                <input type="password" name="senha" required class="form-control" placeholder="  SENHA  ">
                <label>Senha</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>

            <div class="messageResponse">
                <?php echo getMessage(); ?>
            </div>
            <p class="mt-5 mb-3 text-center">com muito amor - <a href="https://www.facebook.com/paulinhosupriano" target="_blank" class="copyright">paulinhosupriano</a> </p>
        </form>
    </main>
</body>

</html>