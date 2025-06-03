<?php
$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mess_db";

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

<section>
    <div>
        <div class="rounded-4 px-4 px-md-5 mb-5 anaselmesse" style="padding: 100px 0px;">
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
 <footer class="anaselmesse py-4  mt-auto ">
            <div class=" px-4 ">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy;2025</div></div>
                    <div class="col-auto">
                       
                        <a class="link-light small" target="_blank" href="mailto:anaselmessoual@gmail.com">anaselmessoual@gmail.com</a>
                         <a class="link-light small" target="_blank" href="tel:+212637421688">+212 6374-21688</a>
                    </div>
                </div>
            </div>
        </footer>   
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
    
}
</script>

</body>
</html>
