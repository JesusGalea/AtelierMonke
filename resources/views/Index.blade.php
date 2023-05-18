<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtelierMonke</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap');

        #monke {
            position: absolute;
            right: 0px;
            top: 60px;
            bottom: 0px;
            background-color: black;
            width: 500px;
            height: auto px;
            clear: both;
        }

        #barra {
            font-family: 'Monoton';
            background-color: #3B3B3B;
            color: gold;
            align-content: center;
        }

        body {
            background-color: whitesmoke;
        }

        #newGames {
            background-color: gold;
            float: left;
            margin: 0;
            height: auto;
            width: 80%;
            max-width: 1480px;

        }

        /* Add media query for screens smaller than 1000px */
        @media (max-width: 1000px) {
            #monke {
                display: none;
            }

            #barra ul {
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            #barra li {
                margin: 5px 0;
            }

            #barra form {
                margin: 5px 0;
            }

            nav>ul>li {
                float: left;
            }

            .nav>li {
                position: relative;
            }

            .nav li a {
                color: gold;
                padding: 8px 20px;
                display: block;
            }

            .nav li a:hover {
                color: white;
            }

            .nav li ul {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                min-width: 200px;
                text-align: center;
                background-color: black;
            }

            .nav li:hover>ul {
                display: block;
            }

            .nav li ul li a {
                color: gold;
                padding: 8px 20px;
                display: block;
            }

            .nav li ul li a:hover {
                color: white;
            }

            .nav li ul li ul {
                right: -100%;
                top: 0px;
            }

            button:hover {
                background-color: white;
                color: goldenrod;
            }

            #content {
                width: 100%;
                height: auto;
                margin: 0;
                right: 0;
                font-family: 'Oleo Script';
                font-size: xx-large;
            }


            #newGames {
                width: 50%;

            }


        }

        /* Add media query for screens bigger than 1000px */
        @media (min-width: 1000px) {
            nav>ul>li {
                float: left;
            }

            .nav>li {
                position: relative;
            }

            .nav li a {
                color: gold;
                padding: 8px 20px;
                display: block;
            }

            .nav li a:hover {
                color: white;
            }

            .nav li ul {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                min-width: 200px;
                text-align: left;
                background-color: black;
            }


            .nav li:hover>ul {
                display: block;
            }

            .nav li ul li a {
                color: gold;
                padding: 8px 20px;
                display: block;
            }

            .nav li ul li a:hover {
                color: white;
            }

            .nav li ul li ul {
                right: -100%;
                top: 0px;
            }

            button:hover {
                background-color: white;
                color: goldenrod;
            }

            #content {
                font-family: 'Oleo Script';
                font-size: xx-large;
                text-align: center;
                width: 100%;
                height: auto;
                margin: 0;
                right: 200px;
                position: relative;
            }

            #newGames {
                width: 50%;
            }
        }

        #r,
        #l {

            right: -68%;


        }
    </style>
</head>

<body>

    <div id="barra" class="container-fluid mx-auto" style="border: 1px solid black; padding-top: 5px;">
        <ul class="nav">
            <li><a href="Index.html"><img src="images/tent.png" class="tent" width="40" height="40"></a></li>
            <li>
                <a href="">Videojuegos</a>
                <ul>
                    <li>
                        <form action="" method="get">
                            <input style="background-color:white; font-size: smaller;" type="text" placeholder="Buscar"
                                name="search">
                            <button style="background-color:gold; font-size: smaller; color: black;"
                                type="submit">Buscar</button>
                        </form>
                    </li>
                    <li><a href="Recomendaciones.html" style="font-size: smaller;">Recomendaciones</a></li>
                </ul>
            <li><a href="">Mi &nbsp; lista</a></li>
            <br><br>
            <li id="r"><a href="Registro.html">Resgistro</a></li>
            &nbsp;&nbsp;&nbsp;
            <li id="l"><a href="">Log&nbsp;&nbsp;&nbsp;in</a></li>
            </li>
        </ul>
    </div>
    <div id="monke" class="container-fluid p-5 text-center">
        <img src="images/logo.png" class="monke" width="400" height="400">
    </div>
    <br> <br> <br><br>

    <div id="content" class="col-md-12">
        <div id="newGames"> Videojuegos recientes </div>

    </div>
</body>

</html>