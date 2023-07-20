<?php 
    include_once("conexao.php");

    if ($_POST) 
    {   $Id = $_POST['txtID'];
        $nome = $_POST['txtnome'];
        $cpf = $_POST['txtcpf'];
        $nascimento = $_POST['txtdatanas'];
        $genero = $_POST['txtGenero'];
        $login = $_POST['txtlogin'];
        $senha = $_POST['txtsenha'];
        $status = $_POST['txtstatus'];
        $imagem = $_POST['txtimg'];
        $Obs = $_POST['txtObs'];

        try 
        {
            $sql = $conn->prepare("
                update Sesmet set
                nome_Sesmet=:nome_Sesmet,
                nascimento_Sesmet=:nascimento_Sesmet,
                genero_Sesmet=:genero_Sesmet,
                cpf_Sesmet= :cpf_Sesmet,
                login_Sesmet=:login_Sesmet,
                img_Sesmet=:img_Sesmet,
                senha_Sesmet= :senha_Sesmet,
                obs_Sesmet=:obs_Sesmet,
                status_Sesmet=:status_Sesmet
                where Id_Sesmet=:Id_Sesmet
            
            ");

            $sql->execute(Array(
                ':Id_Sesmet'=> $Id, 
                ':nome_Sesmet'=> $nome,
                ':nascimento_Sesmet'=>$nascimento,
                ':genero_Sesmet'=> $genero,
                ':cpf_Sesmet'=> $cpf,
                ':login_Sesmet'=> $login,
                ':img_Sesmet'=> $imagem,
                ':senha_Sesmet'=> $senha,
                ':obs_Sesmet'=> $Obs, 
                ':status_Sesmet'=> $status,
            ));

            if ($sql->rowCount()>=1)
            {
                echo'<script>alert("Dados alterados com sucesso")</script>';
            }
            
        } catch (PDOException $ex) 
        {
            echo $ex->getMessage();
        }
    }
    else
    {
        header('Location:frmSesmet.php');
    }
?>
<hr>
<img src="oks.jfif" alt="">
<button> <a href="frmSesmet.php">Voltar</a> 