// Adiciona um listener de eventos ao botão de gerar imagem
document.getElementById("generate-btn").addEventListener("click", function() {
  // Obtém os valores dos campos de input
  var name = document.getElementById("name").value;
  var linkedinUrl = document.getElementById("linkedin-url").value;
  var githubUrl = document.getElementById("github-url").value;

  // Constrói a URL para a página api.php com os parâmetros desejados
  var api_url = "http://localhost/BusinessCardQR/api.php?name=" + encodeURIComponent(name) + "&linkedin=" + encodeURIComponent(linkedinUrl) + "&github=" + encodeURIComponent(githubUrl);

  // Constrói a URL amigável para a página card.php usando o nome do usuário
  var card_url = "http://localhost/BusinessCardQR/" + encodeURIComponent(name);

  // Cria o objeto QRCode e define o conteúdo do código QR
  var qrcode = new QRCode("qrcode");
  qrcode.makeCode(card_url);

  // Define o nome no elemento HTML correspondente
  var nameContainer = document.getElementById("name-container");
  nameContainer.innerHTML = name;

  // Exibe o texto "Scan Me"
  var scanMe = document.getElementById("scan-me");
  scanMe.style.display = "block";
  
  // Adiciona um evento de clique ao elemento do QR Code
  var qrcodeElement = document.getElementById("qrcode");
  qrcodeElement.addEventListener("click", function() {
    // Chama a API e redireciona para a URL amigável
    fetch(api_url).then(function(response) {
      window.location.href = card_url;
    });
  });
});
