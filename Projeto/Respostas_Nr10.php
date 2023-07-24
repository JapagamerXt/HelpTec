
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Respostas</title>
</head>
<body>
   
        <table class='table table-hover text-nowrap'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>ID APR</th>
                    <th scope='col'>ID Ordem de serviço</th>
                    <th scope='col'>1. Se encontra em condição física, mental e emocional para realizar sua função na tarefa?</th>
                    <th scope='col'>2.Seu tablet e/ou celular está em boas condições de uso e operação?</th>
                    <th scope='col'>3. O veículo encontra-se em boas condições de utilização? Pneus, direção, suspenção, freio, lataria, sinalizações?</th>
                    <th scope='col'>4. O veículo está em local seguro? Estacionado corretamente?</th>
                    <th scope='col'>5. Os EPI(s), EPC(s) e ferramentas/equipamentos são adequados e estão em perfeito estado para execução da tarefa?</th>
                    <th scope='col'>6. Foi verificado a inexistência de cães na residência? Respeitada a distância segura dos portões?</th>
                    <th scope='col'>7. Foram analisadas as condições do terreno pertencente à área de trabalho (obstáculos, desníveis e erosões)?</th>
                    <th scope='col'>Supervisor</th>
                    <th scope='col'>Liberação do dupervisor</th>
                    <th scope='col'>Sertificado</th>
                    <th scope='col'>Observação</th>
                    <th scope='col'>Status</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    include_once("conexao.php");
                    try {
                        $sql = $conn->query('select* from Nr_10 where Id_Nr10');
                        if ($sql->rowCount()>=1) {
                        foreach ($sql as $row) {
                            echo "<tr>";
                            echo "<th scope='row'>$row[0]</th>";
                            echo " <th scope='row'>$row[1]</th>";
                            echo "<th scope='row'>$row[2]</th>";
                            echo "<th scope='row'>$row[3]</th>";
                            echo "<th scope='row'>$row[4]</th>";
                            echo "<th scope='row'>$row[5]</th>";
                            echo " <th scope='row'>$row[6]</th>";
                            echo " <th scope='row'>$row[7]</th>";
                            echo "<th scope='row'>$row[8]</th>";
                            echo "<th scope='row'>$row[9]</th>";
                            echo " <th scope='row'>$row[10]</th>";
                            echo " <th scope='row'>$row[11]</th>";
                            echo " <th scope='row'>$row[12]</th>";
                            echo " <th scope='row'>$row[13]</th>";
                            echo " <th scope='row'>$row[14]</th>";
                            echo "</tr>";
                        }
                        }
                    } catch (\Throwable $th) {
                        
                    }
            

                ?>
            </tbody>
        </table>     

    </div>
                   
    <script src="../js/bootstrap.js"></script>
    
</body>
</html>