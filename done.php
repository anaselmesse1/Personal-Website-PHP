<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kontaktformular</title>

    <!-- Use only one Bootstrap CSS + JS bundle -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="anas.css" />
   <style>
    html, body {
  height: 100%;
}
body {
  display: flex;
  flex-direction: column;
}
footer {
  margin-top: auto;
}
   </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body class="bg-dark">

<nav class="navbar navbar-expand-lg navbar-dark p-4 anas-nv">
  <div class="container px-5">
    <a class="navbar-brand" href="index.html">MESS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="index.html">Startseite</a></li>
        <li class="nav-item"><a class="nav-link active" href="index.php">Kontaktiere mich</a></li>
        <li class="nav-item"><a class="nav-link" target="_blank" href="https://github.com/anaselmesse1">Github</a></li>
        <li class="nav-item"><a class="nav-link" target="_blank" href="https://www.linkedin.com/in/anas-elmessoual-b477ab368/">LinkedIn</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mehr</a>
          <ul class="dropdown-menu" style="background-color: red;" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" target="_blank" href="mailto:anaselmessoual@gmail.com">Kontakt per E-Mail</a></li>
            <li><a class="dropdown-item" href="tel:+212637421688">Kontakt per Telefon</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" target="_blank" href="https://www.instagram.com/_anaselmesse/#">Instagram</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control rounded-4 me-2" type="search" placeholder="Suche" aria-label="Search" />
        <button class="ncoloroutline ncolor rounded-3 p-2 btn-outline-light" type="submit">Suchen</button>
      </form>
    </div>
  </div>
</nav>

<nav class="navbar navbar-dark bg-dark anaselmessee blu p-4 shadow-lg" >
  <div class="container px-5 d-flex flex-column flex-md-row justify-content-between align-items-center">
    <div class="d-flex align-items-center mb-3 mb-md-0">
      <i class="bi bi-check-circle-fill text-success fs-4 me-2"></i>
      <p class="mb-0 text-success fw-bold animate__animated animate__fadeInDown">
        Nachricht erfolgreich gesendet!
      </p>
    </div>
    <a class="btn btn-outline-success fw-semibold px-4 py-2 ncolor" href="index.html">
      <i class="bi bi-house-door-fill me-2"></i>Zurück zur Startseite
    </a>
  </div>
</nav>
                 
      <footer class="anaselmesse text-white py-4 mt-auto" >
  <div class="container px-4">
    <div class="row align-items-center justify-content-between text-center text-sm-start">
      <!-- Copyright -->
      <div class="col-sm-auto mb-2 mb-sm-0">
        <div class="small">
          &copy; 2025 Anas Elmessoual – Alle Rechte vorbehalten
        </div>
      </div>

      <!-- Kontaktinfos -->
      <div class="col-sm-auto">
        <div class="d-flex flex-column flex-sm-row align-items-center gap-2">
          <a class="link-light small d-flex align-items-center text-decoration-none" href="mailto:anaselmessoual@gmail.com" target="_blank">
            <i class="bi bi-envelope-fill me-2"></i>anaselmessoual@gmail.com
          </a>
          <a class="link-light small d-flex align-items-center text-decoration-none" href="tel:+212637421688" target="_blank">
            <i class="bi bi-telephone-fill me-2"></i>+212 6374-21688
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>

      <script src="https://cdn.jsdelivr.net/npm/three@0.134.0/build/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.halo.min.js"></script>
  <script>
    VANTA.HALO({
      el: "#vanta-bg",
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      baseColor: 0xf70000,
      backgroundColor: 0x000000,
      amplitudeFactor: 1.10,
      xOffset: -0.13,
      yOffset: -0.07,
      size: 1.80
    });
  </script>  

</body>
</html>
