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
                        <input type="radio" class="form-chek-input " name="txt01" id="bto01S" value="sim">
                        <label for="bto01S" class="form-chek-lable me-5">
                            SIM
                        </label>
                        <input type="radio" class="form-chek-input" name="txt01" id="bto01N" value="não">
                        <label for="bto01N" class="form-chek-lable me-5">
                            NÃO
                        </label>
                        <input type="radio" class="form-chek-input" name="txt01" id="bto01ND" value="N/D">
                        <label for="bto01ND" class="form-chek-lable me-5">
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
                        <input type="radio" class="form-chek-input " name="Rbto02" id="bto02S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto02" id="bto02N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto02" id="bto02ND" value="N/D">
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
                        <input type="radio" class="form-chek-input " name="Rbto03" id="bto03S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto03" id="bto03N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto03" id="bto03ND" value="N/D">
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
                        <input type="radio" class="form-chek-input " name="Rbto04" id="bto04S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto04" id="bto04N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto04" id="bto04ND" value="N/D">
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
                        <input type="radio" class="form-chek-input " name="Rbto05" id="bto05S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto05" id="bto05N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto05" id="bto05ND" value="N/D">
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
                        <input type="radio" class="form-chek-input " name="Rbto06" id="bto06S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto06" id="bto06N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto06" id="bto06ND" value="N/D">
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
                        <input type="radio" class="form-chek-input " name="Rbto07" id="bto07S" value="sim">
                        <label for="bto01" class="form-chek-lable me-5">
                            SIM
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto07" id="bto07N" value="não">
                        <label for="bto01" class="form-chek-lable me-5">
                            NÃO
                        </label>

                        <input type="radio" class="form-chek-input" name="Rbto07" id="bto07ND" value="N/D">
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

            <div class="row" id="P8" name="P8">
                <div class="row">
                    <div class="col-sm-4 mt-2">
                        <input type="texto" name="txtIdAprNr10" id="txtIdAprNr10" placeholder="IdAprNr10" class="form-control">
                    </div>
                    <div class="col-sm-4 mt-2">
                        <input type="texto" name="txtIdOsNr10" id="txtIdOsNr10" placeholder="IdOsNr10" class="form-control">
                    </div>
                    <div class="col-sm-4 mt-2" id="Supervisor" name="Supervisor">
                        <input type="text" id="txtSuper" name="txtSuper" placeholder="Nome do responsavel"  class="form-control" required>
                    </div>
                </div>

                <div class="row">
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
                </div>

                <div class="col-sm-3">
                    <label for="img">Imagem</label>
                    <input type="file" name="txtimg" id="txtimg" placeholder="Imagem" class="form-control">
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-3">
                        <label for="status">Status</label>
                        <select name="txtselect" id="txtselect" class="form-control">
                            <option value=""> -- Selecione -- </option>
                            <option value="Ativado">Ativado</option>
                            <option value="Desativado">Desativado</option>
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
        let text1 = document.getElementById("bto01S");
        let text2 = document.getElementById("bto01N");
        let text3 = document.getElementById("bto01ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {

            P01.style.display = 'none';
            P02.style.display = 'block';
            P03.style.display = 'none';
            P04.style.display = 'none';
            P05.style.display = 'none';
            P06.style.display = 'none';
            P07.style.display = 'none';
            P08.style.display = 'none';
        }
    }


    function Per3() {
        let text1 = document.getElementById("bto02S");
        let text2 = document.getElementById("bto02N");
        let text3 = document.getElementById("bto02ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = 'none';
            P02.style.display = 'none';
            P03.style.display = 'block';
            P04.style.display = 'none';
            P05.style.display = 'none';
            P06.style.display = 'none';
            P07.style.display = 'none';
            P08.style.display = 'none';
        }
    }

    function Per4() {
        let text1 = document.getElementById("bto03S");
        let text2 = document.getElementById("bto03N");
        let text3 = document.getElementById("bto03ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = 'none';
            P02.style.display = 'none';
            P03.style.display = 'none';
            P04.style.display = 'block';
            P05.style.display = 'none';
            P06.style.display = 'none';
            P07.style.display = 'none';
            P08.style.display = 'none';
        }
    }

    function Per5() {
        let text1 = document.getElementById("bto04S");
        let text2 = document.getElementById("bto04N");
        let text3 = document.getElementById("bto04ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = 'none';
            P02.style.display = 'none';
            P03.style.display = 'none';
            P04.style.display = 'none';
            P05.style.display = 'block';
            P06.style.display = 'none';
            P07.style.display = 'none';
            P08.style.display = 'none';
        }
    }

    function Per6() {
        let text1 = document.getElementById("bto05S");
        let text2 = document.getElementById("bto05N");
        let text3 = document.getElementById("bto05ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = 'none';
            P02.style.display = 'none';
            P03.style.display = 'none';
            P04.style.display = 'none';
            P05.style.display = 'none';
            P06.style.display = 'block';
            P07.style.display = 'none';
            P08.style.display = 'none';
        }
    }

    function Per7() {
        let text1 = document.getElementById("bto06S");
        let text2 = document.getElementById("bto06N");
        let text3 = document.getElementById("bto06ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = 'none';
            P02.style.display = 'none';
            P03.style.display = 'none';
            P04.style.display = 'none';
            P05.style.display = 'none';
            P06.style.display = 'none';
            P07.style.display = 'block';
            P08.style.display = 'none';
        }
    }

    function Per8() {
        let text1 = document.getElementById("bto07S");
        let text2 = document.getElementById("bto07N");
        let text3 = document.getElementById("bto07ND");
        if (text1.checked == false && text2.checked == false && text3.checked == false) {
            alert("Campo obrigatorio");
        } else {
            P01.style.display = 'none';
            P02.style.display = 'none';
            P03.style.display = 'none';
            P04.style.display = 'none';
            P05.style.display = 'none';
            P06.style.display = 'none';
            P07.style.display = 'none';
            P08.style.display = 'block';
        }
    }

    function enviarCa() {
        let text1 = document.getElementById("Permicao1");
        let text2 = document.getElementById("Permicao2");
        if (text1.checked == false && text2.checked == false) {
            alert("Campo obrigatorio");
        } else {
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
    }
</script>

</html>