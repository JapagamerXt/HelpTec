<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
</head>

<body onload="esconder()">
    <form action="" method="post" onsubmit="return false" name="frmFormularioNr33" id="frmFormularioNr33" enctype="multipart/form-data">
        <div class="container form-control mt-lg-5">


            <div class="row mt-3 ">
                <div class="col-sm-12">
                    <p class="h1 text-center font">NR33</p>
                </div>
            </div>


            <div class="row " id="P1">

                <div class="col-sm-12 text-center h3">
                    <p><b>1. Isolamento ?</b></p>
                </div>
                <div class="row text-center" name="bto01" id="bto01">
                    <div class="form-chek">
                        <input type="radio" class="form-chek-input " name="bto01" id="bto01S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>
                        <input type="radio" class="form-chek-input" name="bto01" id="bto01N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>
                        <input type="radio" class="form-chek-input" name="bto01" id="bto01ND" value="N/D">
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
                    <p><b>2. Teste inicial da atmosfera ?</b></p>
                </div>
                <div class="row text-center" name="bto02" id="bto02">
                    <div class="form-chek">
                        <input type="radio" class="form-chek-input " name="bto02" id="bto02S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto02" id="bto02N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto02" id="bto02ND" value="N/D">
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
                    <p><b>3. Bloqueios, travamento e etiquetagem ?</b></p>
                </div>
                <div class="row text-center" name="bto03" id="bto03">
                    <div class="form-chek">
                        <input type="radio" class="form-chek-input " name="bto03" id="bto03S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto03" id="bto03N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto03" id="bto03ND" value="N/D">
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
                    <p><b>4. Purga e/ou lavagem ?</b></p>
                </div>
                <div class="row text-center" name="bto04" id="bto04">
                    <div class="form-chek">
                        <input type="radio" class="form-chek-input " name="bto04" id="bto04S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto04" id="bto04N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto04" id="bto04ND" value="N/D">
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
                    <p><b>5. Ventilação/exaustão – tipo, equipamento e tempo ?</b></p>
                </div>
                <div class="row text-center" name="bto05" id="bto05">
                    <div class="form-chek">
                        <input type="radio" class="form-chek-input " name="bto05" id="bto05S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto05" id="bto05N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto05" id="bto05ND" value="N/D">
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
                    <p><b>6. Teste após ventilação e isolamento ?</b></p>
                </div>
                <div class="row text-center" name="bto06" id="bto06">
                    <div class="form-chek">
                        <input type="radio" class="form-chek-input " name="bto06" id="bto06S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto06" id="bto06N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto06" id="bto06ND" value="N/D">
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
                    <p><b>7. Iluminação geral ?</b></p>
                </div>
                <div class="row text-center" name="bto07" id="bto07">
                    <div class="form-chek">
                        <input type="radio" class="form-chek-input " name="bto07" id="bto07S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto07" id="bto07N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto07" id="bto07ND" value="N/D">
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
                    <p><b>8. Procedimentos de comunicação ?</b></p>
                </div>
                <div class="row text-center" name="bto08" id="bto08">
                    <div class="form-chek">
                        <input type="radio" class="form-chek-input " name="bto08" id="bto08S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto08" id="bto08N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto08" id="bto08ND" value="N/D">
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
                    <p><b>9. Procedimentos de resgate ?</b></p>
                </div>
                <div class="row text-center">
                    <div class="form-chek" name="bto09" id="bto09">
                        <input type="radio" class="form-chek-input " name="bto09" id="bto09S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto09" id="bto09N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto09" id="bto09ND" value="N/D">
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
                    <p><b>10. Procedimentos e proteção de movimentação vertical ?</b></p>
                </div>
                <div class="row text-center" name="bto10" id="bto10">
                    <div class="form-chek">
                        <input type="radio" class="form-chek-input " name="bto10" id="bto10S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="bto10" id="bto10N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="bto10" id="bto10ND" value="N/D">
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

            <div class="row" id="P11" name="P11">
                <div class="row">
                    <div class="col-sm-4 mt-2">
                        <input type="texto" name="txtIdPETNr33" id="txtIdPETNr33" placeholder="IdPETNr33" class="form-control">
                    </div>
                    <div class="col-sm-4 mt-2">
                        <input type="texto" name="txtIdOsNr33" id="txtIdOsNr33" placeholder="IdOsNr33" class="form-control">
                    </div>
                    <div class="col-sm-4 mt-2" id="Supervisor" name="Supervisor">
                        <input type="text" id="txtSuper" name="txtSuper" placeholder="Nome do responsavel" class="form-control" required>
                    </div>
                </div>
                <hr>

                <div class="col-sm-3 mt-2" id="Liberado" name="Liberado">
                    <p><b>Esta apto a continuar com as atividades ?</b></p>
                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="Permicao" id="Permicao1" value="sim">
                        <label class="form-check-label" for="flexRadioDefault1">
                            SIM
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Permicao" id="Permicao2" value="não">
                        <label class="form-check-label" for="flexRadioDefault2">
                            NÃO
                        </label>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-4 border-border-dark">
                        <label for="status">Status</label>
                        <select name="txtselect" id="txtselect" class="form-control">
                            <option value=""> -- Selecione -- </option>
                            <option value="Ativado">Ativado</option>
                            <option value="Desativado">Desativado</option>
                        </select>
                    </div>

                    <div class="col-sm-4">
                        <label for="img">Imagem</label>
                        <input type="file" name="txtimg" id="txtimg" placeholder="Imagem" class="form-control">
                    </div>

                    <div class="col-sm-4">
                        <label for="OBS">OBS</label>
                        <textarea name="txtObs" id="txtObs" cols="15" rows="5" class="form-control"></textarea>
                    </div>

                </div>


                <div class="row">
                    <div class="col-sm-1" id="cadastrar" name="cadastrar">
                        <button onclick="Per10()" class="form-control btn-outline-danger bto">Voltar</button>
                    </div>
                    <div class="col-sm-1">
                        <button onclick="cadastrar()" name="Enviar" class="form-control btn-outline-success bto">Enviar</button>
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


        P01.style.display = "block";
        P02.style.display = "none";
        P03.style.display = "none";
        P04.style.display = "none";
        P05.style.display = "none";
        P06.style.display = "none";
        P07.style.display = "none";
        P08.style.display = "none";
        P09.style.display = "none";
        P10.style.display = "none";
        P11.style.display = "none";

    }


    function Per2() {
        let text1 = document.getElementById("bto01S");
        let text2 = document.getElementById("bto01N");
        let text3 = document.getElementById("bto01ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = "none";
            P02.style.display = "block";
            P03.style.display = "none";
            P04.style.display = "none";
            P05.style.display = "none";
            P06.style.display = "none";
            P07.style.display = "none";
            P08.style.display = "none";
            P09.style.display = "none";
            P10.style.display = "none";
            P11.style.display = "none";
        }
    }

    function Per3() {
        let text1 = document.getElementById("bto02S");
        let text2 = document.getElementById("bto02N");
        let text3 = document.getElementById("bto02ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = "none";
            P02.style.display = "none";
            P03.style.display = "block";
            P04.style.display = "none";
            P05.style.display = "none";
            P06.style.display = "none";
            P07.style.display = "none";
            P08.style.display = "none";
            P09.style.display = "none";
            P10.style.display = "none";
            P11.style.display = "none";
        }
    }

    function Per4() {
        let text1 = document.getElementById("bto03S");
        let text2 = document.getElementById("bto03N");
        let text3 = document.getElementById("bto03ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = "none";
            P02.style.display = "none";
            P03.style.display = "none";
            P04.style.display = "block";
            P05.style.display = "none";
            P06.style.display = "none";
            P07.style.display = "none";
            P08.style.display = "none";
            P09.style.display = "none";
            P10.style.display = "none";
            P11.style.display = "none";
        }
    }

    function Per5() {
        let text1 = document.getElementById("bto04S");
        let text2 = document.getElementById("bto04N");
        let text3 = document.getElementById("bto04ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = "none";
            P02.style.display = "none";
            P03.style.display = "none";
            P04.style.display = "none";
            P05.style.display = "block";
            P06.style.display = "none";
            P07.style.display = "none";
            P08.style.display = "none";
            P09.style.display = "none";
            P10.style.display = "none";
            P11.style.display = "none";
        }
    }

    function Per6() {
        let text1 = document.getElementById("bto05S");
        let text2 = document.getElementById("bto05N");
        let text3 = document.getElementById("bto05ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = "none";
            P02.style.display = "none";
            P03.style.display = "none";
            P04.style.display = "none";
            P05.style.display = "none";
            P06.style.display = "block";
            P07.style.display = "none";
            P08.style.display = "none";
            P09.style.display = "none";
            P10.style.display = "none";
            P11.style.display = "none";
        }
    }

    function Per7() {
        let text1 = document.getElementById("bto06S");
        let text2 = document.getElementById("bto06N");
        let text3 = document.getElementById("bto06ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = "none";
            P02.style.display = "none";
            P03.style.display = "none";
            P04.style.display = "none";
            P05.style.display = "none";
            P06.style.display = "none";
            P07.style.display = "block";
            P08.style.display = "none";
            P09.style.display = "none";
            P10.style.display = "none";
            P11.style.display = "none";
        }
    }

    function Per8() {
        let text1 = document.getElementById("bto07S");
        let text2 = document.getElementById("bto07N");
        let text3 = document.getElementById("bto07ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = "none";
            P02.style.display = "none";
            P03.style.display = "none";
            P04.style.display = "none";
            P05.style.display = "none";
            P06.style.display = "none";
            P07.style.display = "none";
            P08.style.display = "block";
            P09.style.display = "none";
            P10.style.display = "none";
            P11.style.display = "none";
        }
    }

    function Per9() {
        let text1 = document.getElementById("bto08S");
        let text2 = document.getElementById("bto08N");
        let text3 = document.getElementById("bto08ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = "none";
            P02.style.display = "none";
            P03.style.display = "none";
            P04.style.display = "none";
            P05.style.display = "none";
            P06.style.display = "none";
            P07.style.display = "none";
            P08.style.display = "none";
            P09.style.display = "block";
            P10.style.display = "none";
            P11.style.display = "none";
        }
    }

    function Per10() {
        let text1 = document.getElementById("bto09S");
        let text2 = document.getElementById("bto09N");
        let text3 = document.getElementById("bto09ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = "none";
            P02.style.display = "none";
            P03.style.display = "none";
            P04.style.display = "none";
            P05.style.display = "none";
            P06.style.display = "none";
            P07.style.display = "none";
            P08.style.display = "none";
            P09.style.display = "none";
            P10.style.display = "block";
            P11.style.display = "none";
        }
    }

    function Per11() {
        let text1 = document.getElementById("bto10S");
        let text2 = document.getElementById("bto10N");
        let text3 = document.getElementById("bto10ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = "none";
            P02.style.display = "none";
            P03.style.display = "none";
            P04.style.display = "none";
            P05.style.display = "none";
            P06.style.display = "none";
            P07.style.display = "none";
            P08.style.display = "none";
            P09.style.display = "none";
            P10.style.display = "none";
            P11.style.display = "block";
        }
    }

    function cadastrar() {
        let text1 = document.getElementById("Permicao1");
        let text2 = document.getElementById("Permicao2");
        if (text1.checked == false && text2.checked == false) {
            alert("Campo obrigatorio");
        } else {
            let text = document.getElementById("P11");
            if (text.value == '') {
                alert("Per6, deve ser preenchida");

            } else {
                let form = document.getElementById("frmFormularioNr33")
                form.action = "Cadastro_Nr33.php";
                form.method = "post";
                form.submit();
            }
        }
    }
</script>

</html>