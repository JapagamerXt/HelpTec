<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
</head>

<body onload="esconder()">
    <form action="" method="post" onsubmit="return false" id="frmFormulario" name="frmFormulario">
        <div class="container form-control">
            <div class="row">
                <div class="col-sm-4 ">
                    <input type="texto" name="txtIDNr10" id="txtIDNr10" placeholder="IDNr10" class="form-control">
                </div>
                <div class="col-sm-4">
                    <input type="texto" name="txtIdAprNr10" id="txtIdAprNr10" placeholder="IdAprNr10" class="form-control">
                </div>
                <div class="col-sm-4">
                    <input type="texto" name="txtIdOsNr10" id="txtIdOsNr10" placeholder="IdOsNr10" class="form-control">
                </div>
            </div>
            <hr>

            <div class="row mt-3">
                <div class="col-sm-12">
                    <p class="h1 text-center font">NR10</p>
                </div>
            </div>


            <div class="row " id="P1" name="P1">
                <div class="col-sm-12 text-center h3">
                    <p><b>Pergunta 01</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" id="bto01" name="bto01">
                        <input type="radio" class="form-chek-input " name="txt01" id="bto01">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>
                        <input type="radio" class="form-chek-input" name="txt01" id="bto01N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>
                        <input type="radio" class="form-chek-input" name="txt01" id="bto01ND">
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

            <div class="row " id="P2" name="P2">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 02</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" id="bto02" name="bto02">
                        <input type="radio" class="form-chek-input " name="Rbto02" id="bto02S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto02" id="bto02N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto02" id="bto02ND">
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

            <div class="row " id="P3" name="P3">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 03</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" id="bto03" name="Rbto03">
                        <input type="radio" class="form-chek-input " name="Rbto03" id="bto03S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto03" id="bto03N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto03" id="bto03ND">
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

            <div class="row " id="P4" name="P4">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 04</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" id="bto04" name="bto04">
                        <input type="radio" class="form-chek-input " name="Rbto04" id="bto04S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto04" id="bto04N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto04" id="bto04ND">
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

            <div class="row " id="P5" name="P5">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 05</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" id="bto05" name="bto05">
                        <input type="radio" class="form-chek-input " name="Rbto05" id="bto05S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto05" id="bto05N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto05" id="bto05ND">
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

            <div class="row " id="P6" name="P6">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 06</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" id="bto06" name="bto06">
                        <input type="radio" class="form-chek-input " name="Rbto06" id="bto06S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto06" id="bto06N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto06" id="bto06ND">
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

            <div class="row " id="P7" name="P7">
                <div class="col-sm-12 text-center h3">
                    <p><b>Top perguntas 07</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" id="bto07" name="bto07">
                        <input type="radio" class="form-chek-input " name="Rbto07" id="bto07S">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto07" id="bto07N">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto07" id="bto07ND">
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

            <div class="row" id="P8" name="P8" >
                <div class="col-sm-6 mt-2" id="Supervisor" name="Supervisor">
                    <input type="text" id="txtSuper" name="txtSuper" placeholder="Nome do responsavel">
                </div>
                <div class="col-sm-3 mt-2" id="Liberado" name="Liberado">
                    <p><b>Esta apto a continuar com as atividades ?</b></p>
                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="Permicao" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            SIM
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Permicao" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            NÃO
                        </label>
                    </div>
                </div>

                <div class="col-sm-3">
                    <label for="img">Imagem</label>
                    <input type="file" name="txtimg" id="txtimg" placeholder="Imagem" class="form-control">
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <label for="status">Status</label>
                        <select name="txtselect" id="txtselect" class="form-control">
                            <option value=""></option>
                            <option value="1">Ativado</option>
                            <option value="2">Desativado</option>
                        </select>
                    </div>
                    <div class="col-sm-9">
                        <label for="OBS">OBS</label>
                        <textarea name="txtObs" id="txtObs" cols="15" rows="5" class="form-control"></textarea>
                    </div>

                </div>


                <div class="row">
                    <div class="col-sm-1" id="cadastrar" name="cadastrar">
                        <button onclick="Per7()" class="form-control btn-outline-danger bto">Voltar</button>
                    </div>
                    <div class="col-sm-1">
                        <button onclick="enviarCa()" class="form-control btn-outline-success bto">Enviar</button>
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



    function esconder() {
        P01.style.display = 'block';
        P02.style.display = 'none';
        P03.style.display = 'none';
        P04.style.display = 'none';
        P05.style.display = 'none';
        P06.style.display = 'none';
        P07.style.display = 'none';
        P08.style.display = 'none';
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
    }

    function enviarCa() {
        let text = document.getElementById("P8");
        if (text.value == '') {
            alert("Per6, preencha os campos obrigatórios");
        } else {
            let form = document.getElementById("frmFormulario");
            form.action = "Cadastro_Nr10.php";
            form.method = "post";
            form.submit();
        }
    }
</script>

</html>