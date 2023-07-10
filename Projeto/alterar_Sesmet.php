<?php
    include_once('conexao.php');
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
    try {
        $sql = $conn->prepare("
            update Sesmet set

                Id_Sesmet
                nome_Sesmet

    
        ");
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
    }



?>