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

                    header('Location:_sistema.php');
                }
            }
            else
            {
                $sql1 = $conn->query('
                select * from sesmet
                where 
                    usuario_sesmet = "'.$login.'" and
                    senha_sesmet = "'.$senha.'"
                    ');

                if($sql1->rowCount()==1)
                {
                    session_start();
                    
                    foreach ($sql1 as $row) {
                        $_SESSION['idUsuario'] = $row[0];
                        $_SESSION['nomeUsuario'] = $row[1];

                        header('Location:_sistemaFuncionario.php');
                    }
                }
                else
                {
                    $mensagem = 'Erro, usuário ou senha inválido';
                }
            }
        }
         catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }   

    ?>

    <div class="container-fluid border border-danger" style="height: 770px; background-image: linear-gradient(#003b42,#4b7c84);
        justify-content: center; ">

        <div class="container border border-danger" style="height: 770px; justify-content: center; background-image: linear-gradient(#003b42,#4b7c84)">
    
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
                            <div class="col-sm-4 border border-success" style="height: 500px; background-color: #c7ede8; border-radius: 10px;">
                        
                                <div class="col-sm-12 border border-success" style="height: 100px; margin-top:20px; color:#134b53; "><h3 style="margin-top:55px;"><b>Login</b> </h3> </div>
                                <div class="col-sm-12 border border-success" style="height: 55px;"><h6 style="color:#383939;"><b>Digite os dados de acesso nos campos abaixo
                                </b> </h6> </div>
                                <div class="col-sm-12 border border-success" style="height: 25px;"><h6 style="color:#134b53;"><b>Login
                                </b> </h6> </div>
                                <div class="col-sm-12 border border-success" style="height: 50px;">

                                    <form method="post" name="frmLogin" id="frmLogin">

                                        <div class="form-outline">
                                            <input type="text" id="txtLogin" name="txtLogin" class="form-control form-control-lg" placeholder="Digite um login válido" />
                                            <label class="form-label" for="txtLogin"></label>
                                        </div>

                                        <div class="col-sm-12 border border-success" style="height: 25px;"><h6 style="color:#134b53;"><b>Senha
                                        </b> </h6> </div>

                                        <div class="form-outline mb-3" >
                                            <input type="password" id="txtSenha" name="txtSenha" class="form-control form-control-lg"  placeholder="Entre com a senha" />
                                            <label class="form-label" for="txtSenha"></label>
                                            <p style="color: red;text-align: center;"><b><?=$mensagem?></b></p>
                                        </div>

                                        <!-- Linkar com tela de Cadastro de usuário -->
                                        <div class="text-center text-lg-start" style="">
                                            <div class="col-sm-12">
                                                <button class="btn btn-outline-success btn-lg" style="text-align: center;" formaction="_login.php">Login</button>
                                                <p class="small fw-bold mt-2 pt-1 mb-0">Não possue conta?<a href="#!" class="">             Cadastre-se </a></p>
                                            </div>
                                        </div>

                                    </form>
                            
                                </div>
                        
                            </div>

                        <div class="col-sm-4 border border-success" style="height: 500px;"></div>

                
                    </div>

                </div>

            </div>
        
        </div>

    </div>

    <!-- style="" -->
