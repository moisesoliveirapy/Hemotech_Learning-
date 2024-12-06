<?php include "config/cabecalho.php" ?>

<body>

  <main>
    <div class="carrousel p-3 mb-2 text-white">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/hemotech.png" class="d-block w-100" alt="Slide 1" loading="lazy" />
          </div>
          <div class="carousel-item">
            <img src="img/CSB (1).jpg" class="d-block w-100" alt="Slide 2" loading="lazy" />
          </div>
          <div class="carousel-item">
            <img src="img/capa-rio-vermelho.jpg" class="d-block w-100" alt="Slide 3" loading="lazy" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <section class="text-center">
      <div class="row">
        <div class="col-md-4">
          <div id="cor-card" class="card">
            <img src="img/icons/hands-on-practice.png" class="card-img-top" alt="Card image" loading="lazy" />
            <div class="card-body">
              <h5 class="card-title">Treinamento prático</h5>
              <p class="card-text">Treinamentos práticos são essenciais para absorver melhor o conteúdo.</p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Saber mais</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="img/icons/empty-state-1.png" class="card-img-top" alt="Card image" loading="lazy" />
            <div class="card-body">
              <h5 class="card-title">Desempenho</h5>
              <p class="card-text">Investir no próprio conhecimento é investir no sucesso da empresa.</p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Saber mais</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="img/icons/certificate.png" class="card-img-top" alt="Certification" loading="lazy" />
            <div class="card-body">
              <h5 class="card-title">Qualificação</h5>
              <p class="card-text">A qualificação profissional é a chave para um trabalho de excelência.</p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Saber mais</button>
              <!-- Modal 3-->
              <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Treinamento prático</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">Estudos com treinamentos práticos são uma maneira poderosa de realmente entender e aplicar o conteúdo. Diferente da teoria pura, que pode ser difícil de reter, atividades práticas nos fazem vivenciar e consolidar o conhecimento de forma ativa. Durante um treinamento prático, é possível simular situações reais que ajudam a fixar os conceitos e facilitam o entendimento do que se está aprendendo. Esse método não apenas torna o aprendizado mais dinâmico e interessante, mas também oferece confiança ao aplicar as habilidades adquiridas no cotidiano profissional.</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal 2-->
              <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Desempenho</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">O estudo contínuo e o aprendizado de novas habilidades têm um impacto direto no desempenho profissional, e isso se reflete nos resultados da empresa como um todo. Quando nos dedicamos a estudar e melhorar nossas competências, conseguimos desenvolver uma visão mais estratégica das atividades diárias, além de aumentar nossa capacidade de solucionar problemas e tomar decisões. Esse avanço individual se converte em maior produtividade e resultados mais consistentes, o que beneficia tanto o profissional quanto a empresa.</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal 1-->
              <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Qualificação</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">Estudar e se qualificar são passos essenciais para se destacar e crescer dentro de uma empresa. Quanto mais um profissional se dedica ao aprendizado, mais habilidades e competências ele adquire, o que aumenta significativamente a sua capacidade de atender às demandas do trabalho. A qualificação vai além do conhecimento teórico, pois envolve o desenvolvimento de habilidades práticas e atitudes que tornam o profissional mais preparado para lidar com situações desafiadoras, resolver problemas e tomar decisões assertivas.</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cards p-3">
      <h2>Principais categorias</h2>
      <div class="categorias d-flex justify-content-around">
        <section><img src="img/icons/fat.jpg" alt="Faturamento" loading="lazy" />Faturamento</section>
        <section><img src="img/icons/fin.jpg" alt="Financeiro" loading="lazy" />Financeiro</section>
        <section><img src="img/icons/ti.jpg" alt="TI" loading="lazy" />Tecnologia da Informação</section>
        <section><img src="img/icons/adm.jpg" alt="Administração" loading="lazy" />Administração</section>
      </div>
    </section>
    <section class="cards p-3">
  <h2>Principais sistemas</h2>
  <div class="categorias d-flex justify-content-around">
    <section>
      <a target="_blank" href="https://tasy.grupocsb.com/#/">
        <img src="img/icons/tasy.png" alt="Tasy" loading="lazy" />
      </a>
      Tasy
    </section>
    <section>
      <a target="_blank" href="http://144.22.185.252/#/login/1">
        <img src="img/icons/weknow.png" alt="Weknow" loading="lazy" />
      </a>
      Weknow
    </section>
    <section>
      <a target="_blank" href="https://login.qualiex.com/oauth2/authorize?client_id=afac8f21-d5c2-45b2-9495-bb256127f389&redirect_uri=https:%2F%2Fapps1.qualiex.com%2FShared%2FCallback&response_type=code&scope=openid%20profile%20email&state=Lw%3D%3D">
        <img src="img/icons/qualiex.png" alt="Qualiex" loading="lazy" />
      </a>
      Qualiex
    </section>
    <section>
      <a target="_blank" href="https://csb.neovero.com/">
        <img src="img/icons/neovero.png" alt="Neovero" loading="lazy" />
      </a>
      Neovero
    </section>
    <section>
      <a target="_blank" href="https://grupocsb.tech/index.php?redirect=%2Ffront%2Fticket.php&error=3">
        <img src="img/icons/glpi.png" alt="GLPI" loading="lazy" />
      </a>
      GLPI
    </section>
  </div>
</section>

    <section class="text-image-section">
    </section>
    <section class="text-image-section">
      <div class="text-content">
        <h2>Atividades em grupo</h2>
        <p>Atividades em grupo proporcionam uma excelente oportunidade de aprendizado colaborativo, onde os participantes compartilham conhecimentos, habilidades e perspectivas. Trabalhar em equipe ajuda no desenvolvimento de competências interpessoais como comunicação, escuta ativa, e resolução de conflitos, além de estimular o pensamento criativo e a construção de ideias inovadoras.</p>
      </div>
      <div class="image-content">
        <img src="img/pexels-fauxels-3183197.jpg" alt="Descrição da imagem" loading="lazy">
      </div>
    </section>

    

  </main>
<?php include "config/footer.php" ?>

</body>

</html>