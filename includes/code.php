<?php

    $nota = $_GET['n'] ?? 1;
    $mensagem = "";

    if($nota == 1){
        $mensagem = "You selected 1 out of 5";
    }
    else if($nota == 2){
        $mensagem = "You selected 2 out of 5";
    }
    else if($nota == 3){
        $mensagem = "You selected 3 out of 5";
    }
    else if($nota == 4){
        $mensagem = "You selected 4 out of 5";
    }
    else if($nota == 5){
        $mensagem = "You selected 5 out of 5";
    }