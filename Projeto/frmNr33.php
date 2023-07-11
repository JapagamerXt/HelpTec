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
        <div class="row">
                <div class="col-sm-4 ">
                    <input type="texto" nome="txtIDNr33" id="txtIDNr33" placeholder="IDNr33" class="form-control">
                </div>
                <div class="col-sm-4">
                    <input type="texto" nome="txtIdPETNr33" id="txtIdPETNr33" placeholder="IdPETNr33" class="form-control">
                </div>
                <div class="col-sm-4">
                    <input type="texto" nome="txtIdOsNr33" id="txtIdOsNr33" placeholder="IdOsNr33" class="form-control">
                </div>
            </div>
            <hr>       


            <div class="row " id="P1">
                <div class="row mt-3 ">
                    <div class="col-sm-12">
                        <p class="h1 text-center font">NR33</p>
                    </div>
                </div>
                <div class="col-sm-12 text-center h3">
                    <p><b>Pergunta 01</b></p>
                </div>
                <div class="row text-center" name="bto01" id="bto01">
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
                        <button onclick="Per2()" class="form-control">Proximo</button>
                    </div>
                </div>
            </div>

            <div class="row " id="P2">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 02</b></p>
                </div>
                <div class="row text-center" name="bto02" id="bto02">
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
                <div class="row text-center" name="bto03" id="bto03">
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
                <div class="row text-center" name="bto04" id="bto04">
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
                <div class="row text-center" name="bto05" id="bto05">
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
                        <button class="form-control" onclick="Per6()">Proximo</button>
                    </div>
                </div>
            </div>

            <div class="row " id="P6">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 05</b></p>
                </div>
                <div class="row text-center" name="bto06" id="bto06">
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
                        <button onclick="Per5()" class="form-control">Anterior</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="form-control" onclick="Per7()">Proximo</button>
                    </div>
                </div>
            </div>

            <div class="row " id="P7">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 05</b></p>
                </div>
                <div class="row text-center" name="bto07" id="bto07">
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
                        <button onclick="Per6()" class="form-control">Anterior</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="form-control" onclick="Per8()">Proximo</button>
                    </div>
                </div>
            </div>

            <div class="row " id="P8">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 05</b></p>
                </div>
                <div class="row text-center" name="bto08" id="bto08">
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
                        <button onclick="Per7()" class="form-control">Anterior</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="form-control" onclick="Per9()">Proximo</button>
                    </div>
                </div>
            </div>

            <div class="row " id="P9">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 05</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" name="bto09" id="bto09">
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
                        <button onclick="Per8()" class="form-control">Anterior</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="form-control" onclick="Per10()">Proximo</button>
                    </div>
                </div>
            </div>

            <div class="row " id="P10">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 05</b></p>
                </div>
                <div class="row text-center" name="bto10" id="bto10">
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
                <hr class="mt-2">
                <div class="row mt-3">
                    <div class="col-sm-6 mt-2">
                        <input type="text" id="txtNomeSuper" name="txtNomeSuper" placeholder="Nome do responsavel">
                    </div>
                    <div class="col-sm-6 mt-2" id="Liberado" name="Liberado">
                        <p><b>Esta apto a continuar com as atividades ?</b></p>
                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                SIM
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                NÃO
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            <button onclick="Per9()" class="form-control btn-outline-danger bto">Voltar</button>
                        </div>
                        <div class="col-sm-1">
                            <button onclick="" class="form-control btn-outline-success bto">Enviar</button>
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
    let P06 = document.getElementById("P6");
    let P07 = document.getElementById("P7");
    let P08 = document.getElementById("P8");
    let P09 = document.getElementById("P9");
    let P10 = document.getElementById("P10");


    function esconder() {
        P01.style.display = 'block';
        P02.style.display = 'none';
        P03.style.display = 'none';
        P04.style.display = 'none';
        P05.style.display = 'none';
        P06.style.display = 'none';
        P07.style.display = 'none';
        P08.style.display = 'none';
        P09.style.display = 'none';
        P10.style.display = 'none';
    }

    function Per2() {
        P01.style.display = 'none';
        P02.style.display = 'block';
        P03.style.display = 'none';
        P04.style.display = 'none';
        P05.style.display = 'none';
        P06.style.display = 'none';
        P07.style.display = 'none';
        P08.style.display = 'none';
        P09.style.display = 'none';
        P10.style.display = 'none';
    }

    function Per3() {
        P01.style.display = 'none';
        P02.style.display = 'none';
        P03.style.display = 'block';
        P04.style.display = 'none';
        P05.style.display = 'none';
        P06.style.display = 'none';
        P07.style.display = 'none';
        P08.style.display = 'none';
        P09.style.display = 'none';
        P10.style.display = 'none';
    }

    function Per4() {
        P01.style.display = 'none';
        P02.style.display = 'none';
        P03.style.display = 'none';
        P04.style.display = 'block';
        P05.style.display = 'none';
        P06.style.display = 'none';
        P07.style.display = 'none';
        P08.style.display = 'none';
        P09.style.display = 'none';
        P10.style.display = 'none';
    }

    function Per5() {
        P01.style.display = 'none';
        P02.style.display = 'none';
        P03.style.display = 'none';
        P04.style.display = 'none';
        P05.style.display = 'block';
        P06.style.display = 'none';
        P07.style.display = 'none';
        P08.style.display = 'none';
        P09.style.display = 'none';
        P10.style.display = 'none';
    }

    function Per6() {
        P01.style.display = 'none';
        P02.style.display = 'none';
        P03.style.display = 'none';
        P04.style.display = 'none';
        P05.style.display = 'none';
        P06.style.display = 'block';
        P07.style.display = 'none';
        P08.style.display = 'none';
        P09.style.display = 'none';
        P10.style.display = 'none';
    }

    function Per7() {
        P01.style.display = 'none';
        P02.style.display = 'none';
        P03.style.display = 'none';
        P04.style.display = 'none';
        P05.style.display = 'none';
        P06.style.display = 'none';
        P07.style.display = 'block';
        P08.style.display = 'none';
        P09.style.display = 'none';
        P10.style.display = 'none';
    }

    function Per8() {
        P01.style.display = 'none';
        P02.style.display = 'none';
        P03.style.display = 'none';
        P04.style.display = 'none';
        P05.style.display = 'none';
        P06.style.display = 'none';
        P07.style.display = 'none';
        P08.style.display = 'block';
        P09.style.display = 'none';
        P10.style.display = 'none';
    }

    function Per9() {
        P01.style.display = 'none';
        P02.style.display = 'none';
        P03.style.display = 'none';
        P04.style.display = 'none';
        P05.style.display = 'none';
        P06.style.display = 'none';
        P07.style.display = 'none';
        P08.style.display = 'none';
        P09.style.display = 'block';
        P10.style.display = 'none';
    }

    function Per10() {
        P01.style.display = 'none';
        P02.style.display = 'none';
        P03.style.display = 'none';
        P04.style.display = 'none';
        P05.style.display = 'none';
        P06.style.display = 'none';
        P07.style.display = 'none';
        P08.style.display = 'none';
        P09.style.display = 'none';
        P10.style.display = 'block';
    }
</script>

</html>