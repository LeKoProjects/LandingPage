<?php include 'includes/main.php'; ?>
<body class="portfolio-details-page">
<?php include 'includes/header.php'; ?> 
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Ínicio</a></li>
            <li class="current">Portfolio</li>
          </ol>
        </nav>
        <h1>Saiba Mais</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portifolio1.png" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portifolio2.png" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portifolio3.png" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portifolio4.png" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                <h3>êPRONTUÁRIO</h3>
                <ul>
                    <li><strong>Categoria</strong>: Sistema Web Clínico</li>
                    <li><strong>Empresa</strong>: ETECH</li>
                    <li><strong>Data do Projeto</strong>: 01 Março, 2020</li>
                    <li><strong>URL do Projeto</strong>: <a href="#">www.eprontuario.com</a></li>
                </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                <h2>Sistema Completo de Gestão de Prontuários e Clínicas</h2>
                <p>
                    O êPRONTUÁRIO é uma solução web inovadora desenvolvida para otimizar a gestão de prontuários em clínicas. O sistema oferece uma interface intuitiva, segurança de dados robusta, e funcionalidades avançadas como Business Intelligence (BI), integrações com convênios, e geração de relatórios personalizados. Ideal para clínicas que buscam eficiência e modernização, o êPRONTUÁRIO permite acesso remoto e gestão centralizada, garantindo que todas as operações clínicas sejam realizadas de forma eficiente e segura.
                </p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Portfolio Details Section -->

</main>
<?php include 'includes/footer.php'; ?>
