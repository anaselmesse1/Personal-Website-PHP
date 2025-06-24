<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Erfolgreich gesendet</title>

    <!-- Use only one Bootstrap CSS + JS bundle -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="anas.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
       <style>
        .nav-link, .dropdown-item {
  transition: all 0.3s ease;
}

.nav-link:hover, .dropdown-item:hover {
  transform: translateY(-2px);
  color: #00ffcc !important;
}
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
.carousel-item {
      position: relative;
    }

    .carousel-item img {
      filter: brightness(50%);
      height: 80vh;
      object-fit: cover;
    }

    /* Overlay text */
    .carousel-caption {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      text-shadow: 1px 1px 4px #000;
    }

    .carousel-caption h5 {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .carousel-caption p {
      font-size: 1.2rem;
    }

    /* Indicator buttons */
    .carousel-indicators button {
      background-color: black;
    }

    /* Custom black control buttons with icons */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      display: none;
    }

    .carousel-control-prev::after,
    .carousel-control-next::after {
      font-size: 2rem;
      color: black;
      background-color: white;
      padding: 5px 15px;
      border-radius: 50%;
    }
 .card:hover {
  transform: translateY(-5px);
  box-shadow: 0 0 30px rgba(255, 0, 0, 0.3);
}

    .carousel-control-prev::after {
      content: "⟨";
    }

    .carousel-control-next::after {
      content: "⟩";
    }

    @media (max-width: 768px) {
      .carousel-caption h5 {
        font-size: 1.5rem;
      }

      .carousel-caption p {
        font-size: 1rem;
      }
    }
    *{
     transition: all 0.8s;
}
body{
 justify-content: center; 
}

.anas-sec , .anas-nv  {
     border-radius:25px;
    margin: 8px 20px;
       background-color: rgba(22, 15, 15, 0.411);
      
}
.anaselmesse {
   padding: 8px 50px;
    border-radius:25px;
    margin: 8px 20px;
       background-color: rgba(22, 15, 15, 0.411);
}
.anaselmessee {
    border-radius:25px;
    margin: 8px 20px;
     
}
.blu {
     background-color: rgba(0, 0, 0, 0.411);
     backdrop-filter: blur(50px);
     -wevkit-backdrop-filter: blur(5px);
}
a{
  color: red;
}
.anas-nv:hover , .anas-sec:hover , .anaselmesse:hover {

     background-color: rgba(0, 0, 0, 0.438);
     margin: 8px 20px;
}
.a-t-black {
color: black;
}
.a-t-white {
    color: white;
}
.farbe-red {
 transition: all 0.2s;
    background-color: red; border-radius: 200px; padding: 0px 11px; justify-content:center; margin: auto; color: red;
}
.farbe-red:hover {
    transform : scale(1.4);
    cursor: pointer;
}
.farbe-red:active {
    transform : scale(1.1);
    cursor: pointer;
}
.ncolor{
    background-color: rgb(119, 8, 8);
}



.ncolor {
  --c: #fff;
  /* text color */
  background: linear-gradient(90deg, rgba(218, 191, 191, 0) 33%, #fff5, #0000 67%) var(--_p,100%)/300% no-repeat,
    #b91010;
  /* background color */
  color: #0000;
  border: none;
  transform: perspective(500px) rotateY(calc(20deg*var(--_i,-1)));
  text-shadow: calc(var(--_i,-1)* 0.08em) -.01em 0   var(--c),
    calc(var(--_i,-1)*-0.08em)  .01em 2px #0004;
  
  transition: 0.3s;
  text-decoration: none;
}


.ncolor:hover,
.ncolor:focus-visible {
  --_p: 0%;
  --_i: 1;
  color: white;
}
.ncoloroutline:hover{
    color: red;
}

.dropdown-item:hover{
    color: red;
}
.bgg{
    background-color: rgba(22, 15, 15, 0.411);
    border-radius:25px;
}
.bgg:hover{
     background-color: rgba(0, 0, 0, 0.438);
}

   </style>
</head>
<body class="bg-dark">
   <div id="vanta-bg" style="position: fixed; top:0; left:0; width:100%; height:100%; z-index:-1;"></div>

<!-- NAV -->
    <nav class="navbar anaselmesse navbar-expand-lg p-3" >
  <div class="container px-4">
    <a class="navbar-brand text-white fw-bold fs-3" href="index.html">
      <i data-lucide="command" class="me-2"></i>MESS
    </a>
    
    <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center gap-3">
        <li class="nav-item">
          <a class="nav-link text-white d-flex align-items-center" href="index.html">
            <i data-lucide="home" class="me-1"></i>Startseite
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white d-flex align-items-center" href="index.php">
            <i data-lucide="mail" class="me-1"></i>Kontakt
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white d-flex align-items-center" href="https://github.com/anaselmesse1" target="_blank">
            <i data-lucide="github" class="me-1"></i>Github
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white d-flex align-items-center" href="https://www.linkedin.com/in/anas-elmessoual-b477ab368/" target="_blank">
            <i data-lucide="linkedin" class="me-1"></i>LinkedIn
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
            <i data-lucide="more-horizontal" class="me-1"></i>Mehr
          </a>
          <ul class="dropdown-menu dropdown-menu-end bg-dark border-0 shadow">
            <li>
              <a class="dropdown-item text-white d-flex align-items-center" href="mailto:anaselmessoual@gmail.com">
                <i data-lucide="send" class="me-2"></i>E-Mail
              </a>
            </li>
            <li>
              <a class="dropdown-item text-white d-flex align-items-center" href="tel:+212637421688">
                <i data-lucide="phone" class="me-2"></i>Telefon
              </a>
            </li>
            <li><hr class="dropdown-divider bg-light"></li>
            <li>
              <a class="dropdown-item text-white d-flex align-items-center" href="https://www.instagram.com/_anaselmesse/" target="_blank">
                <i data-lucide="instagram" class="me-2"></i>Instagram
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- NAV-E-->


<nav class="navbar navbar-dark  anaselmessee blu p-4 shadow-lg" >
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
<script src="https://unpkg.com/lucide@latest"></script>

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
          lucide.createIcons();

  </script>  


</body>
</html>
