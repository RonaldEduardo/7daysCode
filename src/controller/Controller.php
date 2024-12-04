<?php

namespace App\contrller;

class Controller {
  public function handleRequest($request)
  {
    $page = $request['page'] ?? 'login'; // Pega a página da requisição
    $viewFile = VIEW_FOLDER . $page . '.view'; // Define o arquivo da View

    // Verifica se o arquivo existe antes de carregar
    if (file_exists($viewFile)) {
      include $viewFile;
    } else {
      echo "Página não encontrada: " . htmlspecialchars($page);
    }
  }
}
