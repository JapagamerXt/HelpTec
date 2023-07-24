
<?php
    if(isset($_GET['tela']))
    {

        if($_GET['tela']=='ordens1')
        {
            include_once('ordens1.php');
        }

        if($_GET['tela']=='ordens')
        {
            include_once('frmSesmet.php');
        }

        else if($_GET['tela']=='cadUsuario')
        {
            include_once('frmUsuario.php');
        }

        else if($_GET['tela']=='cadSesmet')
        {
            include_once('frmSesmet.php');
        }


        else if($_GET['tela']=='Nr10')
        {
            include_once('frmNr10.php');
        }

        else if($_GET['tela']=='Nr33')
        {
            include_once('frmNr10.php');
        }


    }

    else

    {
        include_once('_home.php');
    }

?>