<?php function currentPosition($validatePath)
{
  return strpos($_SERVER['REQUEST_URI'], $validatePath) ? "text-primary" : "";
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="shortcut icon" href="../../assets/images/films.ico" type="image/x-icon">
  <!--Open Graph-->
  <meta property="og:title" content="Biblioteca de Series">
  <meta property="og:description" content="Actividad 1 - VIU">
  <meta property="og:type" content="website">
  <meta property="og:url" content="url_page">
  <meta property="og:image" content="image_path">
  <!-- Styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="../../assets/styles/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="../home/"><i class="fa-solid fa-film <?= currentPosition("home") ?>" style="font-size: 50px"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
          <div class="navbar-nav me-auto"></div>
          <div class="d-flex">
            <ul class="navbar-nav me-auto">
              <li class="nav-item"><a class="nav-link <?= currentPosition("series") ?>" href="../series/">Series</a></li>
              <li class="nav-item"><a class="nav-link <?= currentPosition("directors") ?>" href="../directors/">Directores</a></li>
              <li class="nav-item"><a class="nav-link <?= currentPosition("actors") ?>" href="../actors/">Actores</a></li>
              <li class="nav-item"><a class="nav-link <?= currentPosition("languages") ?>" href="../languages/">Idiomas</a></li>
              <li class="nav-item"><a class="nav-link <?= currentPosition("platforms") ?>" href="../platforms/">Plataformas</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main class="container py-4" style="height: calc(100vh - 140px); overflow: auto;">
    <?php include($children) ?>
  </main>
  <footer class="bg-white">
    <div class="container pt-3">
      <p class="blockquote h6 m-0">
        Biblioteca de series VIU <code class="text-primary">[ACTIVIDAD 1]</code>
      </p>
      <div class="d-flex">
        <p class="blockquote-footer m-0" style="margin-right: 10px !important">
          <cite>Cristian Camilo Pérez Bohórquez</cite>
        </p>
        <p class="blockquote-footer m-0" style="margin-right: 10px !important">
          <cite>Elkin Omar Jiménez García</cite>
        </p>
        <p class="blockquote-footer m-0">
          <cite>German Aldo Ordoñez Hilario</cite>
        </p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>
