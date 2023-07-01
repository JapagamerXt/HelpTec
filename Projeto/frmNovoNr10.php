<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
</head>

<body onload= "esconder()">
    <form action="" method="post">
        <div class="container form-control">
            <div class="row ">
                <div class="col-sm-12">
                    <p class="h1 text-center font">NR10</p>
                </div>
            </div>
            <div class="row " id="P1">
                <div class="col-sm-12 text-center h3">
                    <p><b>Pergunta 01</b></p>
                </div>
            </div>
            <div class="row text-center">
                <div class="form-chek">
                    <input type="radio" class="form-chek-input " name="bto" id="bto01">
                    <label for="bto01" class="form-chek-lable me-5">
                        SIM
                    </label>

                    <input type="radio" class="form-chek-input" name="bto" id="bto01">
                    <label for="bto01" class="form-chek-lable me-5">
                        NÃO
                    </label>

                    <input type="radio" class="form-chek-input" name="bto" id="bto01">
                    <label for="bto01" class="form-chek-lable me-5">
                        N/D
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <button class="form-control">Anterior</button>
                </div>
                <div class="col-sm-6">
                    <button class="form-control">Proximo</button>
                </div>
            </div>
        </div>
    </form>

    <form action="" method="post">
        <div class="container form-control">
            <div class="row ">
                <div class="col-sm-12">
                    <p class="h1 text-center font">NR10</p>
                </div>
            </div>
            <div class="row " id="P2">
                <div class="col-sm-12 text-center h3">
                    <p><b>Pergunta 01</b></p>
                </div>
            </div>
            <div class="row text-center">
                <div class="form-chek">
                    <input type="radio" class="form-chek-input " name="bto" id="bto01">
                    <label for="bto01" class="form-chek-lable me-5">
                        SIM
                    </label>

                    <input type="radio" class="form-chek-input" name="bto" id="bto01">
                    <label for="bto01" class="form-chek-lable me-5">
                        NÃO
                    </label>

                    <input type="radio" class="form-chek-input" name="bto" id="bto01">
                    <label for="bto01" class="form-chek-lable me-5">
                        N/D
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <button class="form-control">Anterior</button>
                </div>
                <div class="col-sm-6">
                    <button class="form-control">Proximo</button>
                </div>
            </div>
        </div>
    </form>
</body>

<script>
    let P01 = document.getElementById("P1");
    let P02 = document.getElementById("P2");


    function esconder() {
        P01.style.display = "block";
        P02.style.display = "none";
    }

    function esconder() {
        P01.style.display = "none";
        P02.style.display = "block";
    }
</script>

</html>