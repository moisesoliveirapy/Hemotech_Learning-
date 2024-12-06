<?php include "config/cabecalho.php"; ?>

<body>
    <form method="post" enctype="multipart/form-data">

        <!-- Título -->
        <label for="titulo" class="form-label">Título</label>
        <div class="form-floating mb-3">
            <textarea class="form-control" id="titulo" name="titulo" style="height: 100px" required></textarea>
        </div>

        <!-- Tipo de Material -->
        <label class="form-label">Tipo de Material</label>
        <div class="mb-3 form-check">
            <input type="radio" class="form-check-input" id="tipo_pdf" name="tipo" value="pdf" required>
            <label class="form-check-label" for="tipo_pdf">PDF</label>
            <hr>
            <input type="radio" class="form-check-input" id="tipo_video" name="tipo" value="video" required>
            <label class="form-check-label" for="tipo_video">Vídeo</label>
        </div>

        <!-- Categoria -->
        <label class="form-label" for="categoria">Informe a categoria</label>
        <select class="form-select mb-3" name="categoria" id="categoria" required>
            <option value="" disabled selected>Selecione uma categoria</option>
            <option value="Enfermagem">Enfermagem</option>
            <option value="Faturamento">Faturamento</option>
            <option value="Financeiro">Financeiro</option>
            <option value="Sistema de Informação">Sistema de Informação</option>
            <option value="Higienização">Higienização</option>
            <option value="Reuso">Reuso</option>
            <option value="Recepção">Recepção</option>
            <option value="Medicina">Medicina</option>
            <option value="Contabilidade">Contabilidade</option>
            <option value="Administração">Administração</option>
            <option value="Tasy">Tasy</option>
            <option value="Qualiex">Qualiex</option>
            <option value="Neovero">Neovero</option>
            <option value="Weknow">Weknow</option>
        </select>

        <div class="mb-3">
            <label for="pdf" class="form-label">Upload de Arquivo</label>
            <input class="form-control" type="file" id="files" name="files">
        </div>
        <!-- Upload via URL -->
       <!--  <div class="mb-3">
            <label for="arquivo" class="form-label">Upload via URL</label>
            <input class="form-control" type="text" id="arquivo" name="arquivo" placeholder="https://example.com/meuarquivo.pdf" required>
        </div> -->
        

        <!-- Botão de Envio -->
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>

</html>
