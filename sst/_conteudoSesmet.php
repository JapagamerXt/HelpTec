
<?php
    if(isset($_GET['tela']))
    {
        if($_GET['tela']=='ordens')
        {
            include_once('frmUsuario.php');
        }

        else if($_GET['tela']=='cadUsuario')
        {
            include_once('frmUsuario.php');
        }

    }

    else

    {
        include_once('_home.php');
    }

?>