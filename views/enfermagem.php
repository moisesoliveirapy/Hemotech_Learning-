

<?php include "config/cabecalho.php" ?>
<link rel="stylesheet" href="css/style_pag_interna.css">

<?php

require_once "repository/materiaisRepositoryPDO.php";


$materaisRepository = new MateriaisRepositoryPDO();
$materiais = $materaisRepository->listarTodos("Enfermagem");
?>

<body>

  <header>
    <h1>Materiais de Estudo</h1>
    <p>Explore nossos vídeos e PDFs para aprimorar seu conhecimento.</p>
  </header>

  <section class="material-cards">
    <?php foreach($materiais as $material): ?>
      <div class="card">
        <h2><?= htmlspecialchars($material->titulo) ?></h2>
        <!-- Determina o ícone baseado no tipo do material -->
        <img 
          src="<?php 
            if ($material->tipo == "pdf") {
              echo "img/icons/pdf.png";
            } elseif ($material->tipo == "video") {
              echo "img/icons/video.png";
            } else {
              echo "img/icons/img.png";
            }
          ?>" 
          alt="Ícone do Material" 
          class="media" />
        <div class="card-buttons">
          <a href="<?= htmlspecialchars($material->arquivo) ?>" download class="btn">Baixar</a>
          <?php if ($material->tipo === "pdf"): ?>
            <button onclick="abrirModalPDF('<?= htmlspecialchars($material->arquivo) ?>')" class="btn">Ler PDF</button>
          <?php elseif ($material->tipo === "video"): ?>
            <button onclick="assistirVideo('<?= htmlspecialchars($material->arquivo) ?>')" class="btn">Assistir</button>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </section>

  <!-- Modal -->
  <div id="pdfModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="fecharModal()">&times;</span>
      <iframe id="pdfViewer" src="" frameborder="0"></iframe>
    </div>
  </div>

  <?php include "config/footer.php" ?>
</body>

<script>
  // Abre o modal para PDFs
  function abrirModalPDF(caminho) {
    document.getElementById('pdfViewer').src = caminho;
    document.getElementById('pdfModal').style.display = 'block';
  }

  // Abre o modal para vídeos
  function assistirVideo(caminho) {
    const modalContent = document.querySelector('#pdfModal .modal-content');
    modalContent.innerHTML = `
      <span class="close" onclick="fecharModal()">&times;</span>
      <video controls autoplay class="media-player">
        <source src="${caminho}" type="video/mp4">
        Seu navegador não suporta este vídeo.
      </video>`;
    document.getElementById('pdfModal').style.display = 'block';
  }

  // Fecha o modal
  function fecharModal() {
    document.getElementById('pdfModal').style.display = 'none';
    document.getElementById('pdfViewer').src = ""; // Reseta o iframe
    const modalContent = document.querySelector('#pdfModal .modal-content');
    modalContent.innerHTML = `
      <span class="close" onclick="fecharModal()">&times;</span>
      <iframe id="pdfViewer" src="" frameborder="0"></iframe>`;
  }
</script>

</html>
