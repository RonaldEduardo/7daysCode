<?php

use App\contrller\Controller;



$request = $_GET['page'] ?? 'login'; // Determina a página solicitada
$controller = new Controller(); // Instancia o controller

// Passa a página para o controller processar
$controller->handleRequest(['page' => $request]);
