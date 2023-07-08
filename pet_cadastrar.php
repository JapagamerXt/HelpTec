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
    $obspet = $_POST['resp_per36'];
    $statuspet = $_POST['resp_per37'];


 }
 try {
   $sql = $conn->prepare("insert into pet
                           (nome_PET,
                           local_do_espaço_confinado_PET,
                           Espaco_confinado_N_PET,
                           Data_e_Hora_Emissao_PET,
                           Data_e_Hora_termino_PET,
                           trabalho_a_ser_realizado_PET,
                           trabalho_autorizado_PET,
                           Vigia_PET,
                           Equipe_de_resgate_PET,
                           Supervisor_de_entrada_PET,
                           per1_PET,
                           per2_PET,
                           per3_PET,
                           per4_PET,
                           per5_PET,
                           per6_PET,
                           per7_PET,
                           per8_PET,
                           per9_PET,
                           per10_PET,
                           per11_PET,
                           per12a_PET,
                           per12b_PET,
                           per12c_PET,
                           per12d_PET,
                           per12e_PET,
                           per13_PET,
                           per14_PET,
                           per15_PET,
                           per16a_PET,
                           per16b_PET,
                           per16c_PET,
                           per16d_PET,
                           per16e_PET,
                           per17_PET,
                           per18_PET,
                           per19_PET,
                           per20_PET,
                           per21_PET,
                           per22_PET,
                           per23_PET,
                           per24_PET,
                           per25_PET,
                           obs_PET,
                           status_PET
                           )
                           values(
                                    :nome_PET,
                                    :local_do_espaço_confinado_PET,
                                    :Espaco_confinado_N_PET,
                                    :Data_e_Hora_Emissao_PET,
                                    :Data_e_Hora_termino_PET,
                                    :trabalho_a_ser_realizado_PET,
                                    :trabalho_autorizado_PET,
                                    :Vigia_PET,
                                    :Equipe_de_resgate_PET,
                                    :Supervisor_de_entrada_PET,
                                    :per1_PET,
                                    :per2_PET,
                                    :per3_PET,
                                    :per4_PET,
                                    :per5_PET,
                                    :per6_PET,
                                    :per7_PET,
                                    :per8_PET,
                                    :per9_PET,
                                    :per10_PET,
                                    :per11_PET,
                                    :per12a_PET,
                                    :per12b_PET,
                                    :per12c_PET,
                                    :per12d_PET,
                                    :per12e_PET,
                                    :per13_PET,
                                    :per14_PET,
                                    :per15_PET,
                                    :per16a_PET,
                                    :per16b_PET,
                                    :per16c_PET,
                                    :per16d_PET,
                                    :per16e_PET,
                                    :per17_PET,
                                    :per18_PET,
                                    :per19_PET,
                                    :per20_PET,
                                    :per21_PET,
                                    :per22_PET,
                                    :per23_PET,
                                    :per24_PET,
                                    :per25_PET,
                                    :obs_PET,
                                    :status_PET
                                                )");  
                                       $sql->execute(Array(
                                          ':nome_PET' => $nomeempresa,
                                          ':local_do_espaço_confinado_PET' => $espacoconfinado,
                                          ':Espaco_confinado_N_PET' => $numeroespacoconfinado,
                                          ':Data_e_Hora_Emissao_PET' => $datahoraemissao,
                                          ':Data_e_Hora_termino_PET' => $datahoratermino,
                                          ':trabalho_a_ser_realizado_PET' => $trabalhoaserrealizado,
                                          ':trabalho_autorizado_PET' => $trabalhadoresautorizados,
                                          ':Vigia_PET' => $vigia,
                                          ':Equipe_de_resgate_PET' => $equiperesgate,
                                          ':Supervisor_de_entrada_PET' => $supervisordeentrada,
                                          ':per1_PET' => $isolamento,
                                          ':per2_PET' => $oxigenio,
                                          ':per3_PET' => $inflamaveis,
                                          ':per4_PET' => $gases,
                                          ':per5_PET' => $poeira,
                                          ':per6_PET' => $supervisor,
                                          ':per7_PET' => $bloqueios,
                                          ':per8_PET' => $purga,
                                          ':per9_PET' => $ventilacao,
                                          ':per10_PET' => $oxigenio2,
                                          ':per11_PET' => $inflamaveis2,
                                          ':per12a_PET' => $gases2,
                                          ':per12b_PET' => $poeira2,
                                          ':per12c_PET' => $supervisor2,
                                          ':per12d_PET' => $iluminacao,
                                          ':per12e_PET' => $comunicacao,
                                          ':per13_PET' => $regaste,
                                          ':per14_PET' => $movvertical,
                                          ':per15_PET' => $treinamento,
                                          ':per16a_PET' => $equipamentos,
                                          ':per16b_PET' => $monitoramentogases,
                                          ':per16c_PET' => $lanterna,
                                          ':per16d_PET' => $roupasprotecao,
                                          ':per16e_PET' => $extintores,
                                          ':per17_PET' => $capacetes,
                                          ':per18_PET' => $equipamentosprotecao,
                                          ':per19_PET' => $cinturaoseguranca,
                                          ':per20_PET' => $cinturaosegurancaresgate,
                                          ':per21_PET' => $escada,
                                          ':per22_PET' => $equipamentomov,
                                          ':per23_PET' => $equipamentocomunicacao,
                                          ':per24_PET' => $equipamentoresp,
                                          ':per25_PET' => $equipamentoeletrico,
                                          ':obs_PET' => $obspet,
                                          ':status_PET' => $statuspet ,
                                          
                                               
                                       ));
                                       if($sql->rowCount()>=1)
                                       {
                                        
                                           echo '<script> alert("Cadastrado com sucesso")</script>';
                                          
                                       }
                                   
   
                                    } catch (PDOException $ex) {
                                       echo $ex->getMessage();
                                   }
?>