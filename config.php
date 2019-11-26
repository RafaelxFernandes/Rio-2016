<?php
    $mysql = new mysqli('localhost', 'root', '', 'bd2019');
    $mysql->set_charset('utf8');

    
    if ($mysql == FALSE) {
        echo "Erro na conexão";
    }
?>