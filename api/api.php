<?php
// Permita que o arquivo seja acessado de qualquer origem
header('Content-Type: text/html; charset=utf-8');

if (isset($_GET['name']) && isset($_GET['linkedin']) && isset($_GET['github'])) {
  $name = $_GET['name'];
  $linkedinUrl = $_GET['linkedin'];
  $githubUrl = $_GET['github'];

  // Defina os cookies com os valores de name, linkedin_url e github_url
  setcookie("name", $name, time() + 3600, "/"); // O cookie expira após 1 hora
  setcookie("linkedin_url", $linkedinUrl, time() + 3600, "/");
  setcookie("github_url", $githubUrl, time() + 3600, "/");

//Salve os dados no arquivo 'data.txt' usando o formato JSON no localhost
// $data_array = [
//   'name' => $name,
//   'linkedin_url' => $linkedinUrl,
//   'github_url' => $githubUrl
// ];
// $data = json_encode($data_array);
// $data_file_path = dirname(__FILE__) . '/data/data.txt';
// file_put_contents($data_file_path, $data);

// $data_array = [
//   'name' => $name,
//   'linkedin_url' => $linkedinUrl,
//   'github_url' => $githubUrl
// ];
// $data = json_encode($data_array);
// $data_file_path = dirname(__FILE__) . '/data/data.txt';
// file_put_contents($data_file_path, $data);


  // Redirecione para a página 'card.php' com os parâmetros corretos
  header("Location: card.php?name=$name&linkedin=$linkedinUrl&github=$githubUrl");
  exit();
}
?>

