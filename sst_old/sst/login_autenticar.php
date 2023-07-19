<!-- Alterar -->
<?php

$idUsuarioLogin = '';
$nomeUsuarioLogin = '';
$loginUsuarioLogin = '';
$imgUsuarioLogin = '';

session_start();

if($_SESSION)
{
    if(isset($_SESSION['idUsuario']) && isset($_SESSION['nomeUsuario']))
    {
        $idUsuarioLogin = $_SESSION['idUsuario'];
        $nomeUsuarioLogin = $_SESSION['nomeUsuario'];

    }
    else
    {
        header('Location:login.php');
    }
}
else
{
    header('Location:login.php');
}

?>