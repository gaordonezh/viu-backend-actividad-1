<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title><?= $title ?></title>
  <link href="../../assets/styles/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="../home/"><i class="fa-solid fa-photo-film"></i> Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">WE ARE FREE</li>
          </ul>
          <div class="d-flex">
            <ul class="navbar-nav me-auto">
              <li class="nav-item"><a class="nav-link" href="../series/">Series</a></li>
              <li class="nav-item"><a class="nav-link" href="../directors/">Directores</a></li>
              <li class="nav-item"><a class="nav-link" href="../actors/">Actores</a></li>
              <li class="nav-item"><a class="nav-link" href="../languages/">Idiomas</a></li>
              <li class="nav-item active"><a class="nav-link" href="../platforms/">Plataformas</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main class="container py-4" style="height: calc(100vh - 122px); overflow: auto;">
    <?php include($children) ?>
  </main>
  <footer class="bg-white" style="border: 1px solid transparent">
    <div class="container">
      <p>FOOTER CONTENT Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla saepe amet eius distinctio voluptates illo, totam corporis repellat? Suscipit quas voluptatibus, asperiores eos consequatur explicabo odit excepturi eaque reprehenderit cupiditate.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!-- <script>
    setInterval(() => {
      window.location.reload()
    }, 2000);
  </script> -->
</body>

</html>
