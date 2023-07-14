<? php
 include_once('conexao.php');
 
 $sql = $conn->query("insert into apr
                      ( setor_apr,
					    grau_de_risco,
						data_apr,
						equipamento_apr,
						atividades_apr,
						riscos_apr,
						prevencao_perdas_apr,
						obs_apr,
						status_apr)
						values(
						'".$_POST['setor_apr']."',
						'".$_POST['grau_risco_apr']."',
						'".$_POST['data_apr']."',
						'".$_POST['equipamento_apr']."',
						'".$_POST['atividades_apr']."',
						'".$_POST['risco_apr']."',
						'".$_POST['prev_apr']."',
						'".$_POST['obs_apr']."',
						'".$_POST['status_apr']."',
						)"
					);
                  
				  if($sql->rowCount()>=1)
                           {
                              
                                 echo '<script> alert("Cadastrado com sucesso")</script>';
                              
                           }
                        

                        } catch (PDOException $ex) {
                           echo $ex->getMessage();
                        }


?>