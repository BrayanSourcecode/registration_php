

<?php
if(isset( $_POST)){
    session_start();
    include_once "/wamp64/www/FORMULARIO_REGISTRO/config/conexion.php";
    include_once "/wamp64/www/FORMULARIO_REGISTRO/utils/funciones.php";

    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $error=0;

   if(is_numeric($name) || preg_match("/[0-9 ''()]/",$name)){
    $_SESSION["error_name"]="Nombre Incorrecto Simbolos O Numeros";
    header("location: ../index.php");
    $error++;
   }


   $verificar=ConsultarEmail($con,$email);

   if($verificar){
    $_SESSION["error_email"]="El Correo Ya Existe";
    header("location: ../index.php");
    $error++;
   }


if($error==0){
    $password_segura=password_hash($password,PASSWORD_BCRYPT,["cost"=>4]);
    $sql="INSERT INTO usuarios(usu_name,usu_email,usu_password)
    Values('$name','$email','$password_segura')";

    if(mysqli_query($con,$sql)){
        $_SESSION["registro_exitoso"]="El Usuario Se Registro Con Existo";
        header("location: ../index.php");
        
    }else{
        $_SESSION["registro_fallo"]="Registro Fallo Intentelo De Nuevo";
        header("location: ../index.php");
    }
}



}


