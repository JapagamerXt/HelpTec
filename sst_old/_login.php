<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="bootstrap.css">

</head>
<body>

<?php
    $mensagem = "";
    if($_POST)
    {
        include_once('conexao.php');
        $login = $_POST['txtLogin'];
        $senha = $_POST['txtSenha'];
        
        try {
            $sql = $conn->query('
                select * from usuario
                where 
                    usuario_usuario = "'.$login.'" and
                    senha_usuario = "'.$senha.'"
            ');

            if($sql->rowCount()==1)
            {
                session_start();
                
                foreach ($sql as $row) {
                    $_SESSION['idUsuario'] = $row[0];
                    $_SESSION['nomeUsuario'] = $row[1];
                    $_SESSION['loginUsuario'] = $row[4];
                    $_SESSION['imgUsuario'] = $row[6];

                    header('Location:_sistema.php');
                }
            }
            else{
                $mensagem = 'Erro, usuário ou senha inválido';
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    ?>

    <div class="container-fluid border border-danger" style="height: 770px; background-image: linear-gradient(#E8F5C8,#9fA5d5);
        justify-content: center; ">

        <div class="container border border-danger" style="height: 770px; justify-content: center; background-image: linear-gradient(#E8F5C8,#9fA5d5)">
    
            <div class="row border border-success" style="height: 770px">

                <!-- imagem de entrada -->
                <!-- <div class="col-lg-6 border border-success" style="height: 770px; text-align:center; justify-content: center;">
            
                    <img src="img/login.png" alt="" style="justify-content: center;  margin: 100px; justify-content: center;">     
            
                </div> -->

                <!-- Entrada do login -->
                <div class="col-sm-12 border border-primary" style="height: 770px; ">
            
                    <div class="row border border-success" style="height: 500px; margin-top:140px">
                
                        <div class="col-sm-4 border border-success" style="height: 500px;"></div>
                            <!-- Login -->
                            <div class="col-sm-4 border border-success" style="height: 500px; background-color: #343838; border-radius: 10px;">
                        
                                <div class="col-sm-12 border border-success" style="height: 100px; margin-top:20px; color:white; "><h3 style="margin-top:40px;">Login</h3> </div>
                                <div class="col-sm-12 border border-success" style="height: 350px; margin-top:20px"></div>
                        
                            </div>

                        <div class="col-sm-4 border border-success" style="height: 500px;"></div>
                
                    </div>

                </div>

            </div>
        
        </div>

    </div>
    
</body>
</html>