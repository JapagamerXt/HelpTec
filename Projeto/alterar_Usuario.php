<?php 
    include_once("Conexao.php");

    if ($_POST) 
    {   
        $Id = $_POST['txtID'];
        $nome = $_POST['txtnome'];
        $cpf = $_POST['txtcpf'];
        $nascimento = $_POST['txtdatanas'];
        $genero = $_POST['txtGenero'];
        $login = $_POST['txtlogin'];
        $senha = $_POST['txtsenha'];
        $status = $_POST['txtselect'];
        $imagem = $_POST['txtimg'];
        $Obs = $_POST['txtObs'];

        try 
        {
            $sql = $conn->prepare("
                upadate Funcionario set
                nome_Funcionario= :nome_Funcionario,
                nascimento_Funcionario=:nascimento_Funcionario,
                genero_Funcionario=:genero_Funcionario,
                cpf_Funcionario=:cpf_Funcionario,
                login_Funcionario=:login_Funcionario,
                img_Funicionario=:img_Funicionario,
                senha_Funcionario=:senha_Funcionario,
                obs_Funcionario= :obs_Funcionario,
                status_Funcionario=:status_Funcionario
                where Id_Funcionario=:Id_Funcionario   
            ");

            $sql->execute(array(
                ':Id_Funcionario'=>$Id,
                ':nome_Funcionario'=> $nome,
                ':nascimento_Funcionario'=>$nascimento,
                ':genero_Funcionario'=> $genero,
                ':cpf_Funcionario'=> $cpf,
                ':login_Funcionario'=> $login,
                ':img_Funicionario'=> $imagem,
                ':senha_Funcionario'=> $senha,
                ':obs_Funcionario'=> $Obs, 
                ':status_Funcionario'=> $status,
            ));

            if ($sql->rowCount()>=1)
            {
                echo'<script>alert("Dados alterado com sucesso")</script>';
               
              
            }
            
        } catch (PDOException $ex) 
        {
            echo $ex->getMessage();
        }
    }
    else
    {
        header('Location:frmUsuario.php');
    }
?>
<hr>
<img src="oks.jfif" alt="">
<button> <a href="frmUsuario.php">Voltar</a> 