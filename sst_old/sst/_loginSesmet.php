
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="bootstrap.css">

    <style>

        @media screen and (max-width: 775px) {
        div.example {
            display: none;
        }
        }

    </style>

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
                select * from sesmet
                where 
                    usuario_Sesmet = "'.$login.'" and
                    senha_Sesmet = "'.$senha.'"
            ');

            if($sql->rowCount()==1)
            {
                session_start();
                
                foreach ($sql as $row) {
                    $_SESSION['idUsuario'] = $row[0];
                    $_SESSION['nomeUsuario'] = $row[1];

                    header('Location:_sistemaSesmet.php');
                }
            }

                else
                {
                    $mensagem = 'Erro, usuário ou senha inválido';
                }
            
        }
         catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }   

    ?>

<!-- background-image: linear-gradient(#003b42,#4b7c84) -->

    <div class="container-fluid  " style="height: 770px; background-image: white;
        justify-content: center; ">

        <div class="container" style="height: 770px; justify-content: center; background-image: white;">
    
            <div class="row " style="height: 770px">

                <!-- Entrada do login -->
                <div class="col-sm-12 primary" style="height: 770px; ">
            
                    <div class="row " style="height: 500px; margin-top:140px">
                
                        <div class="col-sm-1 " style="height: 500px;"></div>

                        <!-- iMAGEM -->

                                <div class="col-sm-4 " style="height: 500px;">                        
                                    <img src="img/sesmet.png" style="margin-top: 60px" alt="">
                                </div>

                        <div class="col-sm-1 " style="height: 500px;"></div>
                            <!-- Login -->
                            <div class="col-sm-4 " style="height: 500px; background-color: #c7ede8; border-radius: 10px;">
                        
                                <div class="col-sm-12 " style=" margin-top:20px; color:#134b53; "><h2 style="margin-top:55px;"><b>Login Sesmet</b> </h2> </div>
                                <div class="col-sm-12 " ><h6 style="color:#383939;"><b>Digite os dados de acesso nos campos abaixo
                                </b> </h6> </div>
                                <div class="col-sm-12 " style="height: 25px;"><h6 style="color:#134b53; margin-top: 50px"><b>Login
                                </b> </h6> </div>
                                <div class="col-sm-12 " style="height: 50px;">

                                    <form method="post" name="frmLogin" id="frmLogin">

                                        <div class="form-outline">
                                            <input type="text" id="txtLogin" name="txtLogin" class="form-control form-control-lg" placeholder="Digite um login válido" />
                                            <label class="form-label" for="txtLogin"></label>
                                        </div>

                                        <div class="col-sm-12 " style="height: 25px;"><h6 style="color:#134b53;"><b>Senha
                                        </b> </h6> </div>

                                        <div class="form-outline mb-3" >
                                            <input type="password" id="txtSenha" name="txtSenha" class="form-control form-control-lg"  placeholder="Entre com a senha" />
                                            <label class="form-label" for="txtSenha"></label>
                                            <p style="color: red;text-align: center;"><b><?=$mensagem?></b></p>
                                        </div>

                                        <!-- Linkar com tela de Cadastro de usuário -->
                                        <div class="text-center text-lg-start" style="">
                                            <div class="col-sm-12">
                                                <button class="btn btn-outline-danger btn-lg" style="text-align: center;" formaction="_loginSesmet.php">Login</button>
                                                <p class="small fw-bold mt-2 pt-1 mb-0">Não possue conta?<a href="#!" class="">             Cadastre-se </a></p>
                                            </div>
                                        </div>

                                    </form>
                            
                                </div>
                        
                            </div>

                        <div class="col-sm-2 " ></div>
                
                    </div>

                </div>

            </div>
        
        </div>

    </div>

    <!-- style="" -->
