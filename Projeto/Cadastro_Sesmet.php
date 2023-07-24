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
        $imagem = $_FILES['txtimg'];
        $Obs = $_POST['txtObs'];

        try 
        {
            $sql = $conn->prepare("
                insert into Sesmet
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

    if (isset($_POST['Cadastro'])) 
    {           
        if ($_FILES['txtimg']['type'] == 'image/png') 
        {
            $nome_arquivo = md5( $_FILES['txtimg']['name'].rand(1,999)).'png';
            if (isset($_FILES['txtimg'])) 
            {
                move_uploaded_file($_FILES['txtimg']['tmp_name'],'Imagem Sesmet/'.$nome_arquivo);
                echo 'Imagem salva com sucesso!';                
            }

            elseif ($_FILES['txtimg']['type'] == 'image/jpg') 
            {
                $nome_arquivo = md5( $_FILES['txtimg']['name'].rand(1,999)).'jpg';
                if (isset($_FILES['txtimg'])) 
                {
                    move_uploaded_file($_FILES['txtimg']['tmp_name'],'Imagem Sesmet/'.$nome_arquivo);
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
<button> <a href="frmSesmet.php">Voltar</a> 
