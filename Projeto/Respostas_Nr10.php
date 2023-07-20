<?php 
     include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Respostas</title>
</head>
<body>
    <?php 
    
        
       $resp_Nr10 = "SELECT * FROM Nr_10 ";
       if ($reso=mysqli_query($conn, $sql)) {
        
       };
   

    ?>

    <!-- <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        <th scope="col">Handle</th>
        <th scope="col">Handle</th>
        <th scope="col">Handle</th>
        <th scope="col">Handle</th>
        <th scope="col">Handle</th>
        <th scope="col">Handle</th>
        <th scope="col">Handle</th>
        <th scope="col">Handle</th>

        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody>
    </table> -->
    
    <script src="../js/bootstrap.js"></script>
    
</body>
</html>