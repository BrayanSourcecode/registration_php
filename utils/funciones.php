<?php

function ConsultarEmail($con,$email){

    $sql="SELECT * FROM usuarios WHERE usu_email='$email'";
    if($verifi=mysqli_query($con,$sql)){
        $existe=mysqli_fetch_assoc($verifi);
        return $existe;
    }
    
}