<?php

$project_name = "LPF";

$database_name = "testedb";
$database_url = "localhost";
$database_username = "root";
$database_password = "";

// Definições de rotas
$routes = [
    "/" => "HomeController",
];

// Definições de modelos para migração automatica
$models = [
    "UserModel",
];