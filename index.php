<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php __DIR__ ?>./public/css/styles.css">
    <link rel="stylesheet" href="<?php __DIR__ ?>./public/css/responsive.css">
    <title>Formulario Registro</title>
</head>

<body>
    <section class="section">
        <div class="section__registro">
            <form class="section__formulario" action="<?php __DIR__?>./backend/registro.php" method="POST">
            <?php echo isset($_SESSION["registro_exitoso"]) ? "<div class='alerta alerta--green'>".$_SESSION["registro_exitoso"].'</div>':""; ?>
                <div class="section__titulo">
                    <h1>Hello!</h1>
                    <h3>Create you account</h3>
                </div>
                <div class="section__campo">
                    <img class="section__icono" src="<?php __DIR__ ?>./public/img/user.svg" alt="">
                    <input class="section__input" type="text" name="name" placeholder="name" required>
                </div>
                <?php echo isset($_SESSION["error_name"]) ? "<div class='alerta'>".$_SESSION["error_name"].'</div>':""; ?>
                <div class="section__campo">
                    <img class="section__icono" src="<?php __DIR__ ?>./public/img/email.svg" alt="">
                    <input class="section__input" type="text" name="email" placeholder="Email" required>
                </div>
                <?php echo isset($_SESSION["error_email"]) ? "<div class='alerta'>".$_SESSION["error_email"].'</div>':""; ?>
                <div class="section__campo">
                    <img class="section__icono" src="<?php __DIR__ ?>./public/img/lock.svg" alt="">
                    <input class="section__input" type="password" name="password" placeholder="Password" required>
                </div>
               

                <input class="section__registrarse" type="submit" value="sing in">


            </form>

        </div>

        <div class="section__portada">

        </div>
    </section>

</body>

</html>

<?php unset($_SESSION["registro_exitoso"]);
unset($_SESSION["error_name"]);
unset($_SESSION["error_email"]);?>