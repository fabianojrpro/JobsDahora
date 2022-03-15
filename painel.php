<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Fabiano Junior">
    <link rel="icon" href="images/procurando-emprego.png">
    <title>Jobs Dahora</title>
 
    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

     #imagem-carrosel{
      filter: brightness(50%);
     }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <img class="img-fluid m-2" src="images/procurando-emprego.png" width="45" height="45">
      <a class="navbar-brand m-2 text-warning text-uppercase" href="#">Jobs Dahora</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse m-2" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perfil.php">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formacoes.php">Formações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cursos.php">Cursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="curriculo.php">Currículo</a>
          </li>

        </ul>
        <a href="logout.php" class="btn btn-danger">Sair</a>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img id="imagem-carrosel" src="images/imagem01.jpg" alt="Foto de trabalho" />

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Cadastre suas formações</h1>
            <p>Mantenha seu cadastro com suas formações atualizadas.</p>
            <p><a class="btn btn-lg btn-primary" href="cadastrar-formacao.php">Cadastrar Formação</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img id="imagem-carrosel" src="images/imagem02.jpg" alt="Foto de trabalho" />

        <div class="container">
          <div class="carousel-caption">
            <h1>Cadastre seus cursos</h1>
            <p>Mantenha seu cadastro com seus cursos atualizados.</p>
            <p><a class="btn btn-lg btn-primary" href="cadastrar-curso.php">Cadastrar Curso</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img id="imagem-carrosel" src="images/imagem03.jpg" alt="Foto de trabalho" />

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Atualize sempre seu perfil</h1>
            <p>Deixe os seus dados pessoais e de contato sempre atualizados.</p>
            <p><a class="btn btn-lg btn-primary" href="perfil.php">Atualizar perfil</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        
        <h2 class="text-dark">Cadastro de Formações</h2>
        <img class="img-fluid" src="images/formacao.jpg" width="150" height="150">
        <p class="text-dark">Cadastre as suas formações no link abaixo.</p>
        <p><a class="btn btn-primary" href="cadastrar-formacao.php">Cadastrar Formações &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        
        <h2 class="text-dark">Cadastro de Cursos</h2>
        <img class="img-fluid" src="images/certificado.jpg" width="150" height="150">
        <p class="text-dark">Cadastre seus cursos no link abaixo.</p>
        <p><a class="btn btn-primary" href="cadastrar-curso.php">Cadastrar Cursos &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        
        <h2 class="text-dark">Configurações</h2>
        <img class="img-fluid" src="images/engrenagem2.jpg" width="150" height="150">
        <p class="text-dark" >Altere as configurações da sua conta.</p>
        <p><a class="btn btn-primary" href="configuracoes.php">Configurar &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Ir para o topo</a></p>
    <p>&copy; 2022 Fabiano Junior &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
  </footer>
</main>


    <script src="assets/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
