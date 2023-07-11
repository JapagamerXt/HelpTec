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
            <div class="row">
                <div class="col-sm-4 ">
                    <input type="texto" nome="txtIDNr10" id="txtIDNr10" placeholder="IDNr10" class="form-control">
                </div>
                <div class="col-sm-4">
                    <input type="texto" nome="txtIdAprNr10" id="txtIdAprNr10" placeholder="IdAprNr10" class="form-control">
                </div>
                <div class="col-sm-4">
                    <input type="texto" nome="txtIdOsNr10" id="txtIdOsNr10" placeholder="IdOsNr10" class="form-control">
                </div>
            </div>

            <div class="row " id="P1">
                <div class="col-sm-12 text-center h3">
                    <p><b>Pergunta 01</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" id="bto01" name="bto01">
                        <input type="radio" class="form-chek-input " name="bto01S" id="bto01S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>
                        <input type="radio" class="form-chek-input" name="bto01N" id="bto01N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>
                        <input type="radio" class="form-chek-input" name="bto01ND" id="bto01ND">
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
                <div class="row text-center">
                    <div class="form-chek" id="bto02" name="bto02">
                        <input type="radio" class="form-chek-input " name="bto02S" id="bto02S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto02N" id="bto02N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto02ND" id="bto02ND">
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
                    <div class="form-chek" id="bto03" name="bto03">
                        <input type="radio" class="form-chek-input " name="bto03S" id="bto03S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto03N" id="bto03N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto03ND" id="bto03ND">
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
                    <div class="form-chek" id="bto04" name="bto04">
                        <input type="radio" class="form-chek-input " name="bto04S" id="bto04S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto04N" id="bto04N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto04ND" id="bto04ND">
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
                    <div class="form-chek" id="bto05" name="bto05">
                        <input type="radio" class="form-chek-input " name="bto05S" id="bto05S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto05N" id="bto05N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto05ND" id="bto05ND">
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
                    <p><b>Top perguntas 06</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" id="bto06" name="bto06">
                        <input type="radio" class="form-chek-input " name="bto" id="bto06S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto" id="bto06N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto" id="bto06ND">
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
                    <p><b>Top perguntas 07</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" id="bto07" name="bto07">
                        <input type="radio" class="form-chek-input " name="bto07S" id="bto07S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto07N" id="bto07N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto07ND" id="bto07ND">
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
                    <p><b>Top perguntas 08</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" id="bto08" name="bto08">
                        <input type="radio" class="form-chek-input " name="bto08S" id="bto08S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto08N" id="bto08N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto08ND" id="bto08ND">
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
                    <p><b>Top perguntas 09</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" id="bto09" name="bto09">
                        <input type="radio" class="form-chek-input " name="bto09S" id="bto09S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto09N" id="bto09N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto09ND" id="bto09ND">
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
                    <p><b>Top perguntas 10</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" id="bto10" name="bto10">
                        <input type="radio" class="form-chek-input " name="bto10S" id="bto10S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto10N" id="bto10N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto10ND" id="bto10ND">
                        <label for="bto01" class="form-chek-lable me-5">
                            N/D
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <button onclick="Per9()" class="form-control">Anterior</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="form-control" onclick="Per11()">Proximo</button>
                    </div>
                </div>
            </div>

            <div class="row " id="P11">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 11</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" id="bto11" name="bto11">
                        <input type="radio" class="form-chek-input " name="bto11S" id="bto11S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto11N" id="bto11N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto11ND" id="bto11ND">
                        <label for="bto01" class="form-chek-lable me-5">
                            N/D
                        </label>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-sm-6">
                        <button onclick="Per10()" class="form-control">Anterior</button>
                    </div> -->
                    <!-- <div class="col-sm-6">
                        <button class="form-control" onclick="">Proximo</button>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-sm-6 mt-2" id="Supervisor" name="Supervisor">
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
                            <button onclick="" class="form-control btn-outline-success bto">Enviar</button>
                        </div>
                        <div class="col-sm-1">
                            <button onclick="per11()" class="form-control btn-outline-danger bto">Voltar</button>
                        </div>
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
    let P11 = document.getElementById("P11");


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
        P11.style.display = 'none';
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
        P11.style.display = 'none';
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
        P11.style.display = 'none';
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
        P11.style.display = 'none';
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
        P11.style.display = 'none';
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
        P11.style.display = 'none';
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
        P11.style.display = 'none';
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
        P11.style.display = 'none';
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
        P11.style.display = 'none';
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
        P11.style.display = 'none';
    }

    function Per11() {
        P01.style.display = 'none';
        P02.style.display = 'none';
        P03.style.display = 'none';
        P04.style.display = 'none';
        P05.style.display = 'none';
        P06.style.display = 'none';
        P07.style.display = 'none';
        P08.style.display = 'none';
        P09.style.display = 'none';
        P10.style.display = 'none';
        P11.style.display = 'block';
    }
</script>

</html>