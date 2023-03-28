<?php
// Verifica se o arquivo "data.txt" existe e cria se não existir
if (!file_exists('data/data.txt')) {
  $file = fopen('data/data.txt', 'w');
  fclose($file);
}

// Verifica se a solicitação foi enviada com o método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obtém os dados do formulário
  $name = $_POST['name'];
  $linkedin_url = $_POST['linkedin-url'];
  $github_url = $_POST['github-url'];

  // Cria um array com os dados do formulário
  $data_array = [
    'name' => $name,
    'linkedin_url' => $linkedin_url,
    'github_url' => $github_url
  ];

  // Converte o array em uma string JSON
  $data = json_encode($data_array);

  // Escreve os dados no arquivo "data.txt"
  file_put_contents('data/data.txt', $data);
}
?>
