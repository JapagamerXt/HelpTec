<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
</head>

<body onload="esconder()">
    <form action="" method="post" onsubmit="return false">
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
                        <button onclick= "Per2()" class="form-control">Proximo</button>
                    </div>
                </div>
            </div>

            <div class="row " id="P2">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 02</b></p>
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
                        <button onclick="esconder()" class="form-control">Anterior</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="form-control" onclick="Per3()">Proximo</button>
                    </div>
                </div>
            </div>

            <div class="row " id="P3">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 03</b></p>
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
                        <button onclick="Per2()" class="form-control">Anterior</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="form-control" onclick="Per4()">Proximo</button>
                    </div>
                </div>
            </div>

            <div class="row " id="P4">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 04</b></p>
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
                        <button onclick="Per3()" class="form-control">Anterior</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="form-control" onclick="Per5()">Proximo</button>
                    </div>
                </div>
            </div>

            <div class="row " id="P5">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 05</b></p>
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
                        <button onclick="Per4()" class="form-control">Anterior</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="form-control" onclick="">Proximo</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

<script>
    let P01 = document.getElementById("P1");
    let P02 = document.getElementById("P2");
    let P03 = document.getElementById("P3");
    let P04 = document.getElementById("P4");
    let P05 = document.getElementById("P5");


    function esconder() {
        P01.style.display = 'block';
        P02.style.display = 'none';
        P03.style.display = 'none';
        P04.style.display = 'none';
        P05.style.display = 'none';
    }  

    function Per2() { 
        P01.style.display = 'none';
        P02.style.display = 'block';
        P03.style.display = 'none';
        P04.style.display = 'none';
        P05.style.display = 'none';
    }

    function Per3() { 
        P01.style.display = 'none';
        P02.style.display = 'none';
        P03.style.display = 'block';
        P04.style.display = 'none';
        P05.style.display = 'none';
    }

    function Per4() { 
        P01.style.display = 'none';
        P02.style.display = 'none';
        P03.style.display = 'none';
        P04.style.display = 'block';
        P05.style.display = 'none';
    }
    function Per5() { 
        P01.style.display = 'none';
        P02.style.display = 'none';
        P03.style.display = 'none';
        P04.style.display = 'none';
        P05.style.display = 'block';
    }
</script>

</html>