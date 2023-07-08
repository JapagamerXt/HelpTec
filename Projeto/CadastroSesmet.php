<?php 
    include_once("Conexao.php");

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

            
            ")
            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }



?>