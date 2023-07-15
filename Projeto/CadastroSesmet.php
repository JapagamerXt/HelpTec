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
        $status = $_POST['txtstatus'];
        $imagem = $_POST['txtimg'];
        $Obs = $_POST['txtObs'];

        try 
        {
            $sql = $conn->prepare("
                insert into sesmet
                (
                    nome_Sesmet,
                    nascimento_Sesmet,
                    genero_Sesmet,
                    cpf_Sesmet,
                    login_Sesmet,
                    img_Sesmet,
                    senha_Sesmet,
                    obs_Sesmet,
                    status_Sesmet
                )
                values
                (
                    :nome_Sesmet,
                    :nascimento_Sesmet,
                    :genero_Sesmet,
                    :cpf_Sesmet,
                    :login_Sesmet,
                    :img_Sesmet,
                    :senha_Sesmet,
                    :obs_Sesmet,
                    :status_Sesmet
                )            
            ");
            $sql->execute(array(
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
                echo'<script>alert("Cadastro realizado com sucesso")</script>';
                header('Location:frmSesmet.php');
              
            }
            
        } catch (PDOException $ex) 
        {
            echo $ex->getMessage();
        }
    }
?>