<?php
 include_once('conexao.php');
 echo '<pre>';
 print_r($_POST);
 echo '</pre>';

 try {
   $sql = $conn->query("insert into pet
                           (
                              nome_PET,
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
                           )values(
                              '".$_POST['resp_per01']."',
                              '".$_POST['resp_per02']."',
                              '".$_POST['resp_per03']."',
                              '".$_POST['resp_per04']."',
                              '".$_POST['resp_per05']."',
                              '".$_POST['resp_per06']."',
                              '".$_POST['resp_per07']."',
                              '".$_POST['resp_per08']."',
                              '".$_POST['resp_per09']."',
                              '".$_POST['resp_per10']."',
                              '".$_POST['resp_per11']."',
                              '".$_POST['resp_per12_oxigenio']."',
                              '".$_POST['resp_per12_inflamaveis']."',
                              '".$_POST['resp_per12_gases']."',
                              '".$_POST['resp_per12_poeiras']."',
                              '".$_POST['resp_per12_nome']."',
                              '".$_POST['resp_per13']."',
                              '".$_POST['resp_per14']."',
                              '".$_POST['resp_per15']."',
                              '".$_POST['resp_per16_oxigenio']."',
                              '".$_POST['resp_per16_inflamaveis']."',
                              '".$_POST['resp_per16_gases']."',
                              '".$_POST['resp_per16_poeiras']."',
                              '".$_POST['resp_per16_nome']."',
                              '".$_POST['resp_per17']."',
                              '".$_POST['resp_per18']."',
                              '".$_POST['resp_per19']."',
                              '".$_POST['resp_per20']."',
                              '".$_POST['resp_per21']."',
                              '".$_POST['resp_per22']."',
                              '".$_POST['resp_per23']."',
                              '".$_POST['resp_per24']."',
                              '".$_POST['resp_per25']."',
                              '".$_POST['resp_per26']."',
                              '".$_POST['resp_per27']."',
                              '".$_POST['resp_per28']."',
                              '".$_POST['resp_per29']."',
                              '".$_POST['resp_per30']."',
                              '".$_POST['resp_per31']."',
                              '".$_POST['resp_per32']."',
                              '".$_POST['resp_per33']."',
                              '".$_POST['resp_per34']."',
                              '".$_POST['resp_per35']."',
                              '".$_POST['resp_per36']."',
                              '".$_POST['resp_per37']."'
                           )");  

                          
                           if($sql->rowCount()>=1)
                           {
                              
                                 echo '<script> alert("Cadastrado com sucesso")</script>';
                              
                           }
                        

                        } catch (PDOException $ex) {
                           echo $ex->getMessage();
                        }
?>