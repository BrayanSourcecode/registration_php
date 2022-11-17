<?php

$con=mysqli_connect("localhost","root","","registro");

if(mysqli_connect_error()){
    echo"Mensaje:".mysqli_connect_error();
}

