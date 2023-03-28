<?php
phpinfo();
if (isset($_GET['name']) && isset($_GET['linkedin']) && isset($_GET['github'])) {
  $name = $_GET['name'];
  $linkedinUrl = $_GET['linkedin'];
  $githubUrl = $_GET['github'];

  // Salve os dados no arquivo 'data.txt'
  $data_array = [
    'name' => $name,
    'linkedin_url' => $linkedinUrl,
    'github_url' => $githubUrl
  ];
  $data = json_encode($data_array);
  file_put_contents('data/data.txt', $data);

  // Redirecione para a página 'card.php' com os parâmetros corretos
  header("Location: card.php?name=$name&linkedin=$linkedinUrl&github=$githubUrl");
  exit();
}
?>

