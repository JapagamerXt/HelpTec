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
    
    <!-- Container-fluid borda vermelha -->  <!-- height: 770px; -->
    <div class="container-fluid " style="margin: auto;">

        <!-- Container comum bordar vermelha -->
        <div class="container " style="margin-top: 70px; ;">

            <!-- Row borda verde -->
            <div class="row " >

                <!-- Imagem -->
                <div class="col-sm-8 " style="margin:auto">
                    <!-- Descrição da tela de login -->
                    <div class="col-sm-12 " style="margin:auto; margin-top: 150px;">
                        <h2 style="color:#3b4344">Faça Login</h2>
                        <h3 style="color:#3b4344"> Para entrar para o nosso time</h3>
                    </div>

                    <div class="col-md-12 " style="height:300px; text-align: center;margin-top:20px;">

                        <img src="imagens/login2.png" alt="">

                    </div>
                </div>

                <!-- Login -->

                <div class="col-sm-4 " style="height:770px text-align:center;">

                    <div class="row " style="height:450px; width:300px;margin-top:50px; border-radius: 20px; background-color:#3b4344">

                    <form method="post" name="frmLogin" id="frmLogin">


                        <!-- Email input -->
                        <div class="form-outline mb-4" style="margin-top:80px">
                            <input type="text" id="txtLogin" name="txtLogin" class="form-control form-control-lg" placeholder="Insira o Login" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="txtSenha" name="txtSenha" class="form-control form-control-lg" placeholder="Informe a senha" />
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">

                            <button class="btn bg-dark btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem; width: 270px; color:white" formaction="login.php">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0;" style="color:white">Cadastrar-se<a href="#!" class="link-danger"></a></p>
                        </div>

                    </form>
                                        
                    </div>
            
                </div>

            </div>

        </div>

    </div>
    
</body>
</html>
