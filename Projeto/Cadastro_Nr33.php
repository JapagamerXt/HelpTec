'<?php 
echo "<pre>";
print_r($_POST);
 echo "</pre>";
    include_once("conexao.php");
    
    if ($_POST) 
    {
        $idPET = $_POST['txtIdPETNr33'];
        $idOs = $_POST['txtIdOsNr33'];
        $per1 = $_POST['bto01'];
        $per2 = $_POST['bto02'];
        $per3 = $_POST['bto03'];
        $per4 = $_POST['bto04'];
        $per5 = $_POST['bto05'];
        $per6 = $_POST['bto06'];
        $per7 = $_POST['bto07'];
        $per8 = $_POST['bto08'];
        $per9 = $_POST['bto09'];
        $per10 = $_POST['bto10'];
        $nomeSuper = $_POST['txtSuper'];
        $assina = $_POST['Permicao'];
        $image = $_POST['txtimg'];
        $status = $_POST['txtselect'];
        $Obs = $_POST['txtObs'];
    
        try 
        {
            $sql = $conn->prepare("
                insert into nr_33
                (
                    Id_pet_Nr33,
                    Id_OrdemServico_Nr33,
                    Per1_Nr33,
                    Per2_Nr33,
                    Per3_Nr33,
                    Per4_Nr33,
                    Per5_Nr33,
                    Per6_Nr33,
                    Per7_Nr33,
                    Per8_Nr33,
                    Per9_Nr33,
                    Per10_Nr33,
                    responsavel_Nr33,
                    Assinatura_Nr33,
                    serti_Nr33,
                    obs_Nr33,
                    status_Nr33
                )
                values
                (
                    :Id_pet_Nr33,
                    :Id_OrdemServico_Nr33,
                    :Per1_Nr33,
                    :Per2_Nr33,
                    :Per3_Nr33,
                    :Per4_Nr33,
                    :Per5_Nr33,
                    :Per6_Nr33,
                    :Per7_Nr33,
                    :Per8_Nr33,
                    :Per9_Nr33,
                    :Per10_Nr33,
                    :responsavel_Nr33,
                    :Assinatura_Nr33,
                    :serti_Nr33,
                    :obs_Nr33,
                    :status_Nr33
                )
            ");
            $sql->execute(array(
                ':Id_pet_Nr33'=>$idPET,
                ':Id_OrdemServico_Nr33'=>$idOs,
                ':Per1_Nr33'=>$per1,
                ':Per2_Nr33'=>$per2,
                ':Per3_Nr33'=>$per3,
                ':Per4_Nr33'=>$per4,
                ':Per5_Nr33'=>$per5,
                ':Per6_Nr33'=>$per6,
                ':Per7_Nr33'=>$per7,
                ':Per8_Nr33'=>$per8,
                ':Per9_Nr33'=> $per9,
                ':Per10_Nr33'=>$per10,
                ':responsavel_Nr33'=>$nomeSuper,
                ':Assinatura_Nr33'=> $assina,
                ':serti_Nr33'=>$image,
                ':obs_Nr33'=> $Obs,
                ':status_Nr33'=>$status
            ));

            if ($sql->rowCount()>=1) 
            {
                echo'<script>alert("Cadastro realizado com sucesso")</script>';
                
            }
        
            
        }
        catch (PDOException $ex)
        {

            echo $ex->getMessage();        
        }
    }
    else
    {
        header('Location:frmNr33.php');
    }
    if (isset($_POST['Enviar'])) 
    {           
        if ($_FILES['txtimg']['type'] == 'image/png') 
        {
            $nome_arquivo = md5( $_FILES['txtimg']['name'].rand(1,999)).'png';
            if (isset($_FILES['txtimg'])) 
            {
                move_uploaded_file($_FILES['txtimg']['tmp_name'],'Imagem Nr33/'.$nome_arquivo);
                echo 'Imagem salva com sucesso!';                
            }
  
            elseif ($_FILES['txtimg']['type'] == 'image/jpg') 
            {
                $nome_arquivo = md5( $_FILES['txtimg']['name'].rand(1,999)).'jpg';
                if (isset($_FILES['txtimg'])) 
                {
                    move_uploaded_file($_FILES['txtimg']['tmp_name'],'Imagem Nr33/'.$nome_arquivo);
                    echo 'Imagem salva com sucesso!';                
                }
            } 
            else 
            {
                echo 'Erro ao cadastrar a imagem. Porfavor converter em png ou jpg!';
            }
        }
        
    }

?>
<hr>
<img src="oks.jfif" alt="">
<button> <a href="frmNr33.php">Voltar</a> 