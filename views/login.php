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
      modal.style.display = "block"; // Exibe o modal
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
<script>
    function logar() {
        var login = document.getElementById("Login").value
        var senha = document.getElementById("Senha").value

        if (login == "admin" && senha == "12345") {
            alert("Acesso permitido")
            location.href = "/home";
        } else {
            alert("Senha Incorreta");
        }
    }
</script>


<body id="inicial">
    <div class="login">
        <div class="login-logo">
            <img src="img/csb_completo.svg" alt="Logo">
        </div>
        <div class="form-main">
            <div class="form">
                <h3>Faça login para sua conta da Hemotech Learning</h3>
                <div class="barra">
                    <hr>
                </div>

                <form>
                    <div class="p-3">
                        <label for="exampleInputEmail1" class="form-label">Usuário</label>
                        <input type="text" class="form-control" id="Login" aria-describedby="emailHelp">
                    </div>
                    <div class="p-3">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="Senha">
                    </div>
                    <!--  <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                    <div class="button-nav">
                        <button type="submit" onclick="logar(); return false" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>