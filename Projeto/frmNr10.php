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
    </div>
    <form action="post" style="text-align:center">
        <div class="container form-control">
            <div class="row mt-2">
                <div class="col-sm-2">
                    <input type="texto" nome="txtID" id="txtID" placeholder="ID" class="form-control">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 border border-dark" style="height: 150px;">
                    <label for="text">Informe a sua resposta </label>
                </div>
            </div>            

                    <div class="row mt-2 " style="margin-left: 100px;">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3 p-1" style="height: 150px;">
                            <button type="button" class="btn btn-primary btn-lg" style="width: 250px; height:140px"> <H1>SIM</H1></button>
                        </div>
                        <div class="col-sm-3 p-1 " style="height: 150px;">
                            <button type="button" class="btn btn-primary btn-lg" style="width: 250px; height:140px"> <H1>NÃO</H1></button>
                        </div>
                        <div class="col-sm-3  p-1 " style="height: 150px;">
                            <button type="button" class="btn btn-primary btn-lg" style="width: 250px; height:140px"> <H1>N/D</H1></button>
                        </div>                   
                    </div>

        </div>
    </form>
    <script>
        "../js/bootstrap.js"
    </script>
</body>

</html>