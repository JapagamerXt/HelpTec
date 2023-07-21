
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Respostas</title>
</head>
<body>
    <div class="container">
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>1</th>
                    <th scope='col'>2</th>
                    <th scope='col'>3</th>
                    <th scope='col'>4</th>
                    <th scope='col'>5</th>
                    <th scope='col'>6</th>
                    <th scope='col'>7</th>
                    <th scope='col'>8</th>
                    <th scope='col'>9</th>
                    <th scope='col'>10</th>
                    <th scope='col'>11</th>
                    <th scope='col'>12</th>
                    <th scope='col'>13</th>
                    <th scope='col'>14</th>
                    <th scope='col'>15</th>
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