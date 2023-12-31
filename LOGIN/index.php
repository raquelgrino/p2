<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .container {
        text-align: center;
        margin-top: 5%;
        border-radius: 5px;
    }
    body {

        background-color: #F1DBFF;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .form-floating {
        margin: 1%;
        border-radius: 10px;
        border: 1px black;
    }

    input {
        border-radius: 3%;
        border: 3px solid black;
    }

    .btn {
        color: white;
        border: 3px black;
    }
    .boton-enlace{
        color: #fff;       
        text-decoration: none;  
    }
</style>



<body>
    <form method="post" action=>
    <div class="container">
        <img src="careta.png" class="container2" width="120" height="90"><br>
    

    <div class="container w-50 ">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-floating ">
                    <input type="name" class="form-control" id="name" placeholder="name">
                    <label for="floatingUsername">Name</label>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-floating  ">
                    <input type="surname" class="form-control" id="surname" placeholder="surname">
                    <label for="floatingUsername">Surname</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-floating ">
                    <input type="email" class="form-control" id="email" placeholder="email">
                    <label for="floatingUsername">Email</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-floating">
                    <input type="Username" class="form-control" id="username" placeholder="username">
                    <label for="floatingUsername">Username</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-floating">
                    <input type="Password" class="form-control" id="password" placeholder="password">
                    <label for="floatingUsername">password</label>
                </div>
            </div>
        </div>
        <a href="home.html" class="boton-enlace">
            <button type="button" name="registrar" class="btn rounded  mt-5 " style="background-color: #4F2967; color:white;">Create Account</button>
        </a>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    
</form>
    <?php
        require_once ("BL/UsuarisBL.php");
        include("alta.php")


    ?>


</body>
</html>
