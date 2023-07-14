<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="estilo.css">

</head>
<body>

    <div class="row border border-danger ">

        <!-- Logo -->
        <div class="col-sm-12 border border-danger" style="height: 80px; margin-top: 20px; text-align: center;">
    
            <img src="img/logo2.png" alt="">
    
        </div>

        <!-- Menu -->

        <!--  -->
        <a href="_sistema.php" style="height: 40px; margin-top: 40px; text-decoration:none; color: white">
            <div class="subMenu"><img src="img/prancheta.png" alt="" style="color:white; text-align:center; ">
             Ordens</div>
        </a>

        <a href="_sistema.php?tela=funcionario" style="height: 40px;  text-decoration:none; color: white">
            <div class="subMenu"><img src="img/func.png" alt="" style="color:white; text-align:center; ">
             Funcionários</div>
        </a>

        <a href="_sistema.php" style="height: 40px;  text-decoration:none; color: white">
            <div class="subMenu"><img src="img/losango.png" alt="" style="color:white; text-align:center; ">
             NRS</div>
        </a>

        <a href="_sistema.php" style="height: 40px;  text-decoration:none; color: white">
            <div class="subMenu"><img src="img/historia.png" alt="" style="color:white; text-align:center; ">
             Histórico</div>
        </a>

        <?php
    
        include_once("_topo.php")

        ?>

    </div>
    
</body>
</html>