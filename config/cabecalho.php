<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hemotech Learning</title>
  <link rel="stylesheet" href="css/style.css">

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script>
    function abrirModalPDF(url) {
      const modal = document.getElementById("pdfModal");
      const pdfViewer = document.getElementById("pdfViewer");

      pdfViewer.src = url; // Define o PDF no iframe
      modal.style.display = "block"; // Exibe o m odal
    }

    function fecharModal() {
      const modal = document.getElementById("pdfModal");
      const pdfViewer = document.getElementById("pdfViewer");

      modal.style.display = "none"; // Oculta o modal
      pdfViewer.src = ""; // Limpa o src para otimizar o carregamento
    }

    // Fecha o modal ao clicar fora do conteúdo
    window.onclick = function(event) {
      const modal = document.getElementById("pdfModal");
      if (event.target == modal) {
        fecharModal();
      }
    }
  </script>
</head>
<nav class="navbar navbar-expand-lg bg-body-primary">
  <div class="container-fluid">
    <a href="/home"><img class="logo" src="img/csb_completo.svg" alt="Logo" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="/home">Início</a></li>
        <li class="nav-item"><a class="nav-link active" href="/cadastro">Cadastrar</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Categorias</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/enfermagem">Enfermagem</a></li>
            <li><a class="dropdown-item" href="/faturamento">Faturamento</a></li>
            <li><a class="dropdown-item" href="../financeiro.php">Financeiro</a></li>
            <li><a class="dropdown-item" href="../sistema_de_informacao.php">Sistema de Informação</a></li>
            <li><a class="dropdown-item" href="../higienizacao.php">Higienização</a></li>
            <li><a class="dropdown-item" href="../reuso.php">Reuso</a></li>
            <li><a class="dropdown-item" href="../recepcao.php">Recepção</a></li>
            <li><a class="dropdown-item" href="../medicina.php">Medicina</a></li>
            <li><a class="dropdown-item" href="../contabilidade.php">Contabilidade</a></li>
            <li><a class="dropdown-item" href="../administracao.php">Administração</a></li>
            <li><a class="dropdown-item" href="../tasy.php">Tasy</a></li>
            <li><a class="dropdown-item" href="../qualiex.php">Qualiex</a></li>
            <li><a class="dropdown-item" href="../neovero.php">Neovero</a></li>
            <li><a class="dropdown-item" href="../weknow.php">Weknow</a></li>
          </ul>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Principais sistemas</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://tasy.grupocsb.com/#/"  target=”_blank”>Tasy</a></li>
            <li><a class="dropdown-item" href="http://144.22.185.252/#/login/1"  target=”_blank”>Weknow</a></li>
            <li><a class="dropdown-item" href="https://csb.neovero.com/"  target=”_blank”>Neovero</a></li>
            <li><a class="dropdown-item" href="https://grupocsb.tech/index.php?redirect=%2Ffront%2Fticket.php&error=3"  target=”_blank”>GLPI</a></li>
            <li><a class="dropdown-item" href="https://login.qualiex.com/oauth2/authorize?client_id=afac8f21-d5c2-45b2-9495-bb256127f389&redirect_uri=https:%2F%2Fapps1.qualiex.com%2FShared%2FCallback&response_type=code&scope=openid%20profile%20email&state=Lw%3D%3D"  target=”_blank”>Qualiex</a></li>

          </ul>

        </li>
        <li class="nav-item"><a class="nav-link" href="/">Sair</a></li>
      </ul>
    </div>
  </div>
</nav>
