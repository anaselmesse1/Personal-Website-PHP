<?php
$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "sql113.infinityfree.com";
    $username = "if0_39149589";
    $password = "6GugtharsJV9DD";
    $dbname = "if0_39149589_mess_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        $errorMessage = "Verbindung fehlgeschlagen: " . $conn->connect_error;
    } else {
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $phone = trim($_POST["phone"]);
        $message = trim($_POST["message"]);

        if (empty($name) || empty($email) || empty($phone) || empty($message)) {
            $errorMessage = "Bitte füllen Sie alle Felder aus.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMessage = "Bitte geben Sie eine gültige E-Mail-Adresse ein.";
        } elseif (!preg_match('/^\d+$/', $phone)) {
            $errorMessage = "Telefonnummer darf nur Zahlen enthalten.";
        } else {
            $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $phone, $message);

            if ($stmt->execute()) {
                // Redirect to the same page with success query param to prevent resubmission
                header("Location: done.php");
                exit();
            } else {
                $errorMessage = "❌ Fehler beim Senden: " . $stmt->error;
            }
            $stmt->close();
        }
        $conn->close();
    }
}

// Check for success in GET after redirect
if (isset($_GET['success']) && $_GET['success'] == 1) {
    $successMessage = "✔️ Nachricht erfolgreich gesendet!";
}
?>


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
     .nav-link, .dropdown-item {
  transition: all 0.3s ease;
}

.nav-link:hover, .dropdown-item:hover {
  transform: translateY(-2px);
  color: #00ffcc !important;
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


<section>
    <div>
        <div class="rounded-4 px-4 px-md-5 mb-5 anaselmesse blur" style="padding: 100px 0px;">
            <div class="text-center mb-5">
                <div class="ncolor feature p-3 px-4 bg-gradient text-white rounded-3 mb-3" style="background-color: red; width: max-content; margin: auto;">
                    <i class="bi bi-envelope fs-4"></i>
                </div>
                <h1 class="fw-bolder" style="color: white;">Kontakt aufnehmen</h1>
                <p class="lead fw-normal mb-0" style="color: rgb(209, 203, 203);">Wir freuen uns darauf, von Ihnen zu hören!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">

                    <form method="POST" action="index.php" class="needs-validation" novalidate>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Name" required
                                   value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                            <label for="name">Vollständiger Name</label>
                            <div class="invalid-feedback">→ Ein Name ist erforderlich.</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required
                                   value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                            <label for="email">E-Mail-Adresse</label>
                            <div class="invalid-feedback">→ Eine E-Mail-Adresse ist erforderlich.</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="1234567890" required
                                   value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
                            <label for="phone">Telefonnummer</label>
                            <div class="invalid-feedback">→ Telefonnummer ist erforderlich.</div>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message" placeholder="Nachricht..." style="height: 10rem;" required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                            <label for="message">Nachricht</label>
                            <div class="invalid-feedback">→ Eine Nachricht ist erforderlich.</div>
                        </div>
<div id="idk">
      
</div>
             

                        <div class="d-grid">
                            <button onclick="tt()"  class="btn btn-danger btn-lg" id="submitButton" type="submit" disabled>Absenden</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
   
             <!-- Footer-->
              
       <footer class="anaselmesse py-4 mt-auto" >
  <div class="container px-4">
    <div class="row align-items-center justify-content-between text-center text-sm-start">
      <!-- Copyright -->
      <div class="col-sm-auto mb-2 mb-sm-0">
        <div class="small text-white">
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
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('.needs-validation');
    const button = document.getElementById('submitButton');

    // Validation rules as in your original JS
    const fields = [
        {
            input: document.getElementById('name'),
            validate: val => /^[A-Za-zÄÖÜäöüß\s\-]+$/.test(val.trim())
        },
        {
            input: document.getElementById('email'),
            validate: val => /^\S+@\S+\.\S+$/.test(val.trim())
        },
        {
            input: document.getElementById('phone'),
            validate: val => /^\d+$/.test(val.trim())
        },
        {
            input: document.getElementById('message'),
            validate: val => val.trim().length > 0
        }
    ];

    function validateField(field) {
        const val = field.input.value;
        if (!field.validate(val)) {
            field.input.classList.add('is-invalid');
            field.input.classList.remove('is-valid');
            return false;
        } else {
            field.input.classList.remove('is-invalid');
            field.input.classList.add('is-valid');
            return true;
        }
    }

    function validateForm() {
        let allValid = true;
        fields.forEach(field => {
            if (!validateField(field)) allValid = false;
        });
        button.disabled = !allValid;
        return allValid;
    }

    form.addEventListener('input', validateForm);

    form.addEventListener('submit', function (event) {
        if (!validateForm()) {
            event.preventDefault();
            event.stopPropagation();
        }
    });
});

function tt() {
    document.getElementById('idk').innerHTML =`<div id="successMessage" class="alert alert-success alert-dismissible fade show" role="alert" style="display:none; font-weight: 600; font-size: 1.2rem;">
  <span style="font-size: 1.5rem; margin-right: 0.5rem;">✔️</span> Nachricht erfolgreich gesendet!
  <button type="button" class="btn-close" aria-label="Close" onclick="document.getElementById('successMessage').style.display='none';"></button>
</div>`
    
} ; 
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
