<?php 
    include_once("conexao.php");

    if ($_POST) 
    {
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
                insert into Funcionario
                (
                    nome_Funcionario,
                    nascimento_Funcionario,
                    genero_Funcionario,
                    cpf_Funcionario,
                    login_Funcionario,
                    img_Funcionario,
                    senha_Funcionario,
                    obs_Funcionario,
                    status_Funcionario
                )
                values
                (
                    :nome_Funcionario,
                    :nascimento_Funcionario,
                    :genero_Funcionario,
                    :cpf_Funcionario,
                    :login_Funcionario,
                    :img_Funcionario,
                    :senha_Funcionario,
                    :obs_Funcionario,
                    :status_Funcionario
                )            
            ");
            $sql->execute(array(
                ':nome_Funcionario'=> $nome,
                ':nascimento_Funcionario'=>$nascimento,
                ':genero_Funcionario'=> $genero,
                ':cpf_Funcionario'=> $cpf,
                ':login_Funcionario'=> $login,
                ':img_Funcionario'=> $imagem,
                ':senha_Funcionario'=> $senha,
                ':obs_Funcionario'=> $Obs, 
                ':status_Funcionario'=> $status,


            ));
            if ($sql->rowCount()>=1)
            {
                echo'<script>alert("Cadastro realizado com sucesso")</script>';
                header('Location:frmUsuario.php');
              
            }
            
        } catch (PDOException $ex) 
        {
            echo $ex->getMessage();
        }
    }
?>