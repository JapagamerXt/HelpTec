
<?php
    if(isset($_GET['tela']))
    {
        if($_GET['tela']=='ordens')
        {
            include_once('frmSesmet.php');
        }

        else if($_GET['tela']=='funcionario')
        {
            include_once('_funcionario.php');
        }

        else if($_GET['tela']=='produto')
        {
            include_once('frm_produto.php');
        }

        else if($_GET['tela']=='historico')
        {
            include_once('frm_historico.php');
        }

        else if($_GET['tela']=='sair')
        {
            include_once('_home.php');
        }

    }

    else

    {
        include_once('_home.php');
    }

?>