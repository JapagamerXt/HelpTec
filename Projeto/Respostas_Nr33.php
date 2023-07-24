<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
</head>
<body>

        <table class='table table-striped text-center text-nowrap'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>ID PET</th>
                    <th scope='col'>ID Ordem de serviço</th>
                    <th scope='col'>1. Isolamento ?</th>
                    <th scope='col'>2. Teste inicial da atmosfera ?</th>
                    <th scope='col'>3. Bloqueios, travamento e etiquetagem ?</th>
                    <th scope='col'>4. Purga e/ou lavagem ?</th>
                    <th scope='col'>5. Ventilação/exaustão – tipo, equipamento e tempo ?</th>
                    <th scope='col'>6. Teste após ventilação e isolamento ?</th>
                    <th scope='col'>7. Iluminação geral ?</th>
                    <th scope='col'>8. Procedimentos de comunicação ?</th>
                    <th scope='col'>9. Procedimentos de resgate ?</th>
                    <th scope='col'>10. Procedimentos e proteção de movimentação vertical ?</th>
                    <th scope='col'> Nome do supervisor responsavel</th>
                    <th scope='col'>Liberação do supervisor</th>
                    <th scope='col'>Foto</th>
                    <th scope='col'>Observação</th>
                    <th scope='col'>Status</th>
                    
                </tr>
            </thead>

            <tbody>
                <?php 
                    include_once("conexao.php");
                    try {
                        $sql = $conn->query('select* from Nr_33 where Id_Nr33');
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
                            echo " <th scope='row'>$row[15]</th>";
                            echo " <th scope='row'>$row[16]</th>";
                            echo " <th scope='row'>$row[18]</th>";
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