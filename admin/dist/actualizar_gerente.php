<?php
include("../../conexiondb.php");
session_start();
$update_gerente="UPDATE usuarios set nombre_usua='".$_POST['nombre_usua']."',apellidos_usua='".$_POST['apellidos_usua']."',dni_usua=".$_POST['dni_usua'].",fechaNacimiento_usua='".$_POST['fechaNacimiento_usua']."',sexo_usua='".$_POST['sexo_usua']."',telefono_usua=".$_POST['telefono_usua']." where nick_usua='".$_SESSION['nick_usua']."'";

$valores_gerente=mysqli_query($db,$update_gerente);

header("Location: perfil_gerente.php");
?>