<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/functions.js"></script>
    <title>AtelierMonke</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap');

        #monke {
            position: absolute;
            left: 30px;
            top: 10px;


        }

        #content {

            position: absolute;
            right: 550px;
            top: 100px;
            bottom: 70px;
            background-color: black;
            width: 800px;
            height: auto px;
            clear: both;
            color: gold;
            font-family: 'Monoton';
            text-align: justify;

        }

        h2 {
            padding-top: 40px;
        }

        #formulario {
            font-family: 'Oleo Script';
            font-size: larger;
            color: gold;
            text-align: justify;
            padding-left: 120px;

        }

        ul {
            list-style: none;
        }

        input {

            width: 500px;
        }

        #exit {
            position: absolute;
            filter: hue-rotate(50deg) brightness(400%);
            right: 30px;
            top: 10px;
        }

        #enviar {

            width: 100px;
        }

        #send {
            position: absolute;
            bottom: 335px;
            text-align: center;
            left: 170px;
            color: black;

        }

        #show {
            position: absolute;
            left: 395px;

        }

        #prismaticos {
            position: absolute;
            right: 270px;
        }
        #view{
              cursor:pointer;
        }

        a{
            color: white;
        }
    </style>
</head>

<body style="background-color: black;">
    <div id="monke" class="container-fluid">
        <img src="images/logo.png" class="monke" width="80" height="80">
    </div>
    <br> <br> <br><br>

    <div id="content" class="col-md-12">
        <br>
        <h2 style="padding-left:150px;">Log&nbsp;&nbspin</h2>
        <br>
        <form id="formulario">
            <ul>
                <br>
                <li> Usuario<br>
                    <input type="text">
                </li>
                <br>
                <li id="show"> <input type="checkbox" id="view" onclick="showPassword()"><img src="images/show.png"
                        id="prismaticos" width="25" height="25"> </li>
                <li>Contraseña<br>
                    <input type="password" id="password">
                </li>

                <br>

                <li><input id="enviar" src="images/enviar.png" type="image" alt="submit" value="Enviar"></li>
                <div id="send">
                    Enviar</div>
                <br>
                
            </ul>

        </form>

    </div>

    <div id="exit">

        <a href="Index.html"><img src="images/exit.png" width="40" height="40"></a>

    </div>
  
</body>

</html>