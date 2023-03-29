# BusinessCardQR

QR Code Image Generator
Este projeto é uma ferramenta simples para gerar códigos QR personalizados com informações de contato. Ele consiste em uma página HTML com um formulário onde o usuário pode inserir seu nome, link do LinkedIn e link do GitHub. Ao clicar no botão "Generate Imagem", um código QR é gerado com as informações inseridas e pode ser salvo pelo usuário para ser compartilhado com outras pessoas.

Tecnologias usadas
Este projeto foi construído usando HTML, CSS e JavaScript para o front-end e PHP para o back-end. Ele também utiliza a biblioteca qrcode.js para a geração dos códigos QR.

Instruções de uso
Para usar esta ferramenta, siga os seguintes passos:

Clone o repositório em sua máquina local.
Certifique-se de que possui um servidor web instalado em sua máquina.

Navegue até o diretório do projeto em seu servidor web.
Abra a página index.html no seu navegador.

Preencha os campos do formulário com suas informações de contato.
Clique no botão "Generate Imagem" para gerar o código QR.

Salve o código QR gerado ou escaneie-o com um aplicativo de leitor de QR para visualizar suas informações de contato.
Arquivos

Este projeto contém os seguintes arquivos:

index.html: a página HTML principal com o formulário e a exibição do código QR gerado.

css/style.css: o arquivo CSS para estilizar a página HTML.
js/main.js: o arquivo JavaScript com o código para gerar o código QR e lidar com eventos na página HTML.

js/qrcode.min.js: a biblioteca qrcode.js para a geração do código QR.
api.php: o arquivo PHP para lidar com as solicitações POST do formulário e salvar os dados do usuário.

card.php: o arquivo PHP para exibir as informações do usuário em uma página de perfil.

Notas adicionais

Este projeto foi construído apenas para fins de demonstração e não foi testado em ambiente de produção. Ele pode conter vulnerabilidades de segurança e outros problemas que não foram abordados aqui. Por favor, use-o com cuidado e por sua própria conta e risco.

PS: Este projeto foi desenvolvido usando o XAMPP, que é um pacote de software livre que contém o Apache, o MySQL e o PHP. Ele pode ser usado para criar um servidor web em seu computador local e, assim, executar este projeto. Portanto, antes de usar este projeto, você deve garantir que tenha instalado e configurado corretamente o XAMPP em seu sistema.


PS_2: 

Você terá que mudar o arquivo main.js, caso queira utilizar localmente

 // Constrói a URL para a página api.php com os parâmetros desejados
  var api_url = "http://localhost/BusinessCardQR/api.php?name=" + encodeURIComponent(name) + "&linkedin=" + encodeURIComponent(linkedinUrl) + "&github=" + encodeURIComponent(githubUrl);

  // Constrói a URL amigável para a página card.php usando o nome do usuário
  var card_url = "http://localhost/BusinessCardQR/" + encodeURIComponent(name);

  E retirar o projeto php da pasta vercel-php e colocar na raiz do projeto.

  Olhar os comentarios do arquivo api.php e card.php para funcionar no localhost da sua máquina.
  
  Pois como estou usando o vercel para hospedar, ele só aceita de forma estática. 
  
  O projeto está públicado: https://business-card-qr.vercel.app/

 Lembrando que o qrcode está clicável, pois ele está salvando o armazenamento do cookie. Se você fizer pelo computador, ele vai gerar e vai mostrar o resultdo.
 Mas caso você faça no computador e dê o scan pelo celular, não vai informações, para isso teria que está em um banco de dados. 
  
