<?php
 include_once('conexao.php');
 if($_POST){
    $nomeempresa = $_POST['resp_per01'];
    $espacoconfinado = $_POST['resp_per02'];
    $numeroespacoconfinado = $_POST['resp_per03'];
    $datahoraemissao = $_POST['resp_per04'];
    $datahoratermino = $_POST['resp_per05'];
    $trabalhoaserrealizado = $_POST['resp_per06'];
    $trabalhadoresautorizados = $_POST['resp_per07'];
    $vigia = $_POST['resp_per08'];
    $equiperesgate =$_POST['resp_per09'];
    $supervisordeentrada = $_POST['resp_per10'];
    $isolamento = $_POST['resp_per11'];
    $oxigenio = $_POST['resp_per12_oxigenio'];
    $inflamaveis = $_POST['resp_per12_inflamaveis'];
    $gases = $_POST['resp_per12_gases'];
    $poeira = $_POST['resp_per12_poeiras'];
    $supervisor = $_POST['resp_per12_nome'];
    $bloqueios = $_POST['resp_per13'];
    $purga = $_POST['resp_per14'];
    $ventilacao = $_POST['resp_per15'];
    $oxigenio2 = $_POST['resp_per16_oxigenio'];
    $inflamaveis2 = $_POST['resp_per16_inflamaveis'];
    $gases2 = $_POST['resp_per16_gases'];
    $poeira2 = $_POST['resp_per16_poeiras'];
    $supervisor2 = $_POST['resp_per16_nome'];
    $iluminacao = $_POST['resp_per17'];
    $comunicacao = $_POST['resp_per18'];
    $regaste = $_POST['resp_per19'];
    $movvertical = $_POST['resp_per20'];
    $treinamento = $_POST['resp_per21'];
    $equipamentos = $_POST['resp_per22'];
    $monitoramentogases = $_POST['resp_per23'];
    $lanterna = $_POST['resp_per24'];
    $roupasprotecao = $_POST['resp_per25'];
    $extintores = $_POST['resp_per26'];
    $capacetes = $_POST['resp_per27'];
    $equipamentosprotecao = $_POST['resp_per28'];
    $cinturaoseguranca = $_POST['resp_per29'];
    $cinturaosegurancaresgate = $_POST['resp_per30'];
    $escada = $_POST['resp_per31'];
    $equipamentomov = $_POST['resp_per32'];
    $equipamentocomunicacao = $_POST['resp_per33'];
    $equipamentoresp = $_POST['resp_per34'];
    $equipamentoeletrico = $_POST['resp_per35'];



 }
?>