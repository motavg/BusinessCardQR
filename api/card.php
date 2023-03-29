<?php
// Permita que o arquivo seja acessado de qualquer origem
header('Content-Type: text/html; charset=utf-8');

// $data_file_path = dirname(__FILE__) . '/data/data.txt';
// $data = json_decode(file_get_contents($data_file_path), true);

// Para usar no localhost
// $name = rawurldecode($_GET['name']);
// $linkedinUrl = isset($data['linkedin_url']) ? $data['linkedin_url'] : '';
// $githubUrl = isset($data['github_url']) ? $data['github_url'] : '';

// Usar no vercel
$name = isset($_COOKIE['name']) ? $_COOKIE['name'] : '';
$linkedinUrl = isset($_COOKIE['linkedin_url']) ? $_COOKIE['linkedin_url'] : '';
$githubUrl = isset($_COOKIE['github_url']) ? $_COOKIE['github_url'] : '';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/card.css">
  
  <title>Perfil de <?php echo $name; ?></title>
</head>
<body>
  <div class="card">
    <h2>Hello, my name is <?php echo $name; ?></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada tellus nulla, vitae tincidunt justo ultrices eget. Duis mollis, mauris eget molestie rutrum, ex enim pellentesque sapien, et semper nisi risus at nunc. Integer lacinia aliquam sapien, sit amet feugiat massa accumsan sit amet.</p>
    <a href="<?php echo $linkedinUrl; ?>" target="_blank"><button>LinkedIn</button></a>
    <a href="<?php echo $githubUrl; ?>" target="_blank"><button>GitHub</button></a>
  </div>
</body>
</html>
