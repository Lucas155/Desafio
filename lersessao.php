<?php

session_start();

$nome = $_SESSION['nome'] ?? 'Zé ninguem';

echo "Olá $nome";
