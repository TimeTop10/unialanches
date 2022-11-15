<?php

    try {
        $conn = new PDO('mysql:host=localhost;dbname=cadastro', 'root', ''); //string de conexão        
    } catch (PDOExcection $erro) {
        $erro->getMessage();
    }
    ?>