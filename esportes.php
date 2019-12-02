<?php

    require "config.php";
    include "Esporte.php";

    $esporte = new Esporte($mysql);
    $esportes = $esporte->exibirTodos();

?>

<!DOCTYPE HTML>
<!-- Bianca, parte essencial desse trabalho. Sem ela eu não teria feito nada. -->
<html>
    <head>
        <meta charset="utf8">
        <title>
            Rio 2016
        </title>
    </head>

    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #ffffff;
        }

        li {
            float: right;
            padding-left: 3%;
            padding-right: 2%;
            margin-left: 4%;
        }

        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover{
            background-color: green;
            color: white;
        }

    </style>

    <header style="height: 150%;"> 
        <div style="background-color:white">
    
            <a href="home.html">
                <img src="logo.jpg" style="height: 10vh;
                margin-left: 2%;
                position: absolute">
            </a>
            
            <ul style="color: black;
            font-family: 'Saira', sans-serif;
            font-size: 32px; 
            margin-top: 2vw;
            margin-left: 5vw;
            margin-right: 5vw;
            margin-top: -2vw;
            list-style-type: none;
            margin: 0;
            padding: 0;
            right: 0;">
                <li>
                    <a>
                        Esportes
                    </a>
                </li>
                <li>
                    <a>
                        Atletas
                    </a>
                </li>
                <li>
                    <a>
                        Países
                    </a>
                </li>
                <li>
                    <a>
                        Eventos
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <body style="background-color: white;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: 'Saira', sans-serif;
    padding-top: 2%;
    margin: 0%">

        <div style="background-color: #0087C6;
        padding-top: 2%;
        padding-bottom: 2%;
        margin-top:2%;
        color: white;
        font-size: 42px;
        font-weight: 1000;">

            <p style="text-align: center;">Esportes</p>

        </div>

        <div style="padding-top: 5%;
        font-size: 26px;
        margin-right: 15%;">
        
                <ul>
                <?php foreach ($esportes as $esporte) : ?>
                    <a>
                        <li><?php echo $esporte['nome']; ?></li>
                    </a>

                    <?php endforeach; ?>
                   
                </ul>

        </div>

    </body>
</html>