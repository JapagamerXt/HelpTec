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
        $imagem = $_FILES['txtimg'];
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
                    img_Funicionario,
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
                    :img_Funicionario,
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
                ':img_Funicionario'=> $imagem,
                ':senha_Funcionario'=> $senha,
                ':obs_Funcionario'=> $Obs, 
                ':status_Funcionario'=> $status,


            ));
            if ($sql->rowCount()>=1)
            {
                echo'<script>alert("Cadastro realizado com sucesso")</script>';
                
              
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

    if (isset($_POST['cadastro'])) 
    {           
        if ($_FILES['txtimg']['type'] == 'image/png') 
        {
            $nome_arquivo = md5( $_FILES['txtimg']['name'].rand(1,999)).'png';
            if (isset($_FILES['txtimg'])) 
            {
                move_uploaded_file($_FILES['txtimg']['tmp_name'],'Imagem Funcionario/'.$nome_arquivo);
                echo 'Imagem salva com sucesso!';                
            }

            elseif ($_FILES['txtimg']['type'] == 'image/jpg') 
            {
                $nome_arquivo = md5( $_FILES['txtimg']['name'].rand(1,999)).'jpg';
                if (isset($_FILES['txtimg'])) 
                {
                    move_uploaded_file($_FILES['txtimg']['tmp_name'],'Imagem Funcionario/'.$nome_arquivo);
                    echo 'Imagem salva com sucesso!';                
                }
            } 
            else 
            {
                echo 'Erro ao cadastrar a imagem. Porfavor converter em png ou jpg!';
            }
        }
        
    }
?>
<hr>
<img src="oks.jfif" alt="">
<button> <a href="frmUsuario.php">Voltar</a> 