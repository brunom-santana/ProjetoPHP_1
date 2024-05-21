<?php
    $banco = new mysqli("localhost", "root", "", "projeto", 3306);
    if($banco->connect_errno){
        echo "erro ao conectar banco de dados";
    }
?>