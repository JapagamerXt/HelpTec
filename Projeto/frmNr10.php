<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="CSS.CSS">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center" style="font-size: 40px;">
                <p><B>Nr10</B></p>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row mt-2">
            <div class="col-sm-2">
                <input type="texto" nome="txtID" id="txtID" placeholder="ID" class="form-control">
            </div>
        </div>
        <!-- 
        <div class="row">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                    </li>
                    
                    <li class="page-item"><a class="page-link" href="Pergunta1_Nr10.php">1</a>
                    </li>

                    <li class="page-item active">
                        <a class="page-link" href="#">2 <span class="sr-only"></span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Próximo</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div> -->

        <div="container">
            <!-- adding button and heading to show the digits -->
            <!--increment() and decrement() functions on button click-->
            <button onclick="Anterior()">Anterior</button>
            <h2 id="counting"></h2>
            <button onclick="Proximo()">Proximo</button>
    </div>

    <script>
        //initialising a variable name data

        var cont = 0;

        //printing default value of data that is 0 in h2 tag
        document.getElementById("counting").innerText = cont;

        //creation of increment function
        function Anterior() {
            cont = cont - 1;
            document.getElementById("counting").innerText = cont;
        }
        //creation of decrement function
        function Proximo() {
            cont = cont + 1;
            document.getElementById("counting").innerText = cont;
        }
    </script>
</body>

</html>