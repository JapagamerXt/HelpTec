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

    <div class="container-fluid border border-success " style="height: 770px; background-color: #eaebeb">

            <div class="row border border-Danger" style="height: 770px">

                <!-- Lateral -->
                <div class="col-sm-2 border border-success bg-secondary" style="height: 770px; background-color: white">
            
                    <?php
                    
                        include_once("_lateral.php")

                    ?>
            
                </div>

                    <!-- Topo -->
                <div class="col-sm-10 border border-danger" style="height: 770px;">

                    <div class="row border border-success" style="height: 80px; background-color: white ">

                    <?php
                    
                    include_once("_topo.php")

                    ?>

                    </div>

                    <!-- Conteúdo -->
                    <div class="row border border-success" style="height: 660px; margin-top:20px; justify-content: center; text-align: center;
                    ">

                        <div class="col-sm-11 border border-danger" style="height: 640px; margin-top: 5px; background-color: white ">

                            <?php
                        
                            include_once("_conteudo.php")

                            ?>

                        </div>
            
                </div>


            </div>

    </div>
    
</body>
</html>