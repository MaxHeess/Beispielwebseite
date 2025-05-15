<?php
session_start();

// Zählen der Artikel im Warenkorb
$item_count = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

$session_timeout = 300;

if (isset($_GET['logout'])) {
    session_unset();  // Alle Sitzungsvariablen löschen
    session_destroy();  // Sitzung zerstören
    header("Location: index.php");  // Zurück zur Startseite umleiten
    exit();
}

// Überprüfen, ob der Benutzer inaktiv ist
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $session_timeout)) {
    session_unset();  // Sitzung löschen
    session_destroy();  // Sitzung zerstören
    header("Location: index.php");  // Zur Startseite umleiten
    exit();
}

// Aktualisiere die letzte Aktivitätszeit
$_SESSION['last_activity'] = time();

// Wenn das Formular abgeschickt wurde, den Login-Prozess starten
if(isset($_POST['email'])){
    $servername = 
    $username = 
    $password = 
    $dbname = 

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET NAMES 'utf8mb4'");  // Optional: Sicherstellen, dass utf8mb4 verwendet wird
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $email = $_POST["email"];
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Überprüfen, ob die E-Mail in der Datenbank existiert
    $stmt = $conn->prepare("SELECT * FROM `kunden` WHERE Email=:email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Wenn der Benutzer nicht existiert
    if (!$result) {
        $login_error = "Die angegebene E-Mail-Adresse existiert nicht.";
    } else {
        // Passwort prüfen
        $hash = $result["pwhash"];
        
        if(password_verify($_POST['pw'], $hash)){
            // Einloggen
            $_SESSION['kunde'] = $result['Kunden_id'];
        } else {
            $login_error = 'Falsches Passwort.';
        }
    }
    
    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmelden</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
    
<div class="header">
      <img src="images/logo.png">
  
        <h1>Anmelden</h1>
    </div>

    <?php include 'header.php'; ?>
    

    <div id="menu">

        <div id="left2">
        <ul id="leftmenu">
              <li><a href="index.php">Startseite</a></li>
              <li><a href="motorrad.php">Motorräder</a></li>
              <!-- Dropdown für Zubehör & Ersatzteile -->
              <li class="nav-item dropdown" data-bs-auto-close="true">
                <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Zubehör & <br>Ersatzteile
                </a>
                <ul class="dropdown-menu custom-width-1" aria-labelledby="motorradDropdown">
                  <li><a class="dropdown-item" href="helme.php">Helme</a></li>
                  <li class="dropdown-submenu position-relative">
                    <a class="dropdown-item dropdown-toggle" href="#">Bekleidung</a>
                    <ul class="dropdown-menu submenu">
                      <li><a class="dropdown-item" href="jacken.php">Jacken</a></li>
                      <li><a class="dropdown-item" href="hosen.php">Hosen</a></li>
                      <li><a class="dropdown-item" href="schuhe.php">Schuhe</a></li>
                      <li><a class="dropdown-item" href="handschuhe.php">Handschuhe</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu position-relative">
                    <a class="dropdown-item dropdown-toggle" href="#">Ersatzteile</a>
                    <ul class="dropdown-menu submenu">
                      <li><a class="dropdown-item" href="auspuff.php">Auspuffanlage</a></li>
                      <li><a class="dropdown-item" href="bremse.php">Bremsbeläge</a></li>
                      <li><a class="dropdown-item" href="kerze.php">Zündkerzen</a></li>
                      <li><a class="dropdown-item" href="kette.php">Kette</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
    
              <li><a href="kontakt.php">Kontakt</a></li>
              <div class="icons">
                <a href="login.php" class="account-icon">
                  <img src="images/konto.png" alt="Mein Konto">
                </a>
                <a href="warenkorb.php" class="cart-icon">
                  <img src="images/shop.png" alt="Warenkorb">
                  <!-- Wenn der Warenkorb Artikel enthält, zeige die Anzahl -->
                  <?php if ($item_count > 0): ?>
                    <div class="cart-count"><?php echo $item_count; ?></div>
                  <?php endif; ?>
                </a>
                  </div>
            </ul>
          </div>
          <div id="right2">
            <?php
            if (isset($_SESSION["kunde"])) {
              echo "<h2 style='margin-right: 100px;'>Willkommen, " . htmlspecialchars($vorname) . "! <br> Du hast dich erfolgreich eingeloggt.</h2><br>";
                echo "<button class='styled-button' style='margin-right: 100px;' onclick=\"window.location.href='angaben.php';\">Angaben vervollständigen</button>";
              } else {
                echo "";
            }
            ?>
            
            <?php
            // Login-Fehler anzeigen, falls vorhanden
            if (isset($login_error)) {
                echo '<h4 style="color: blue; font-weight: bold;">' . $login_error . '</h4>';
            }
            ?>

            <?php if (!isset($_SESSION["kunde"])): ?>
            <form action="" method="POST">
          
                  <label for="email">E-Mail:</label><br>
                  <input type="email" id="email" name="email" required><br>
                  <label for="password">Passwort:</label><br>
                  <input type="password" id="password" name="pw" required><br><br>
              
                  <a href='account.php'>Passwort vergessen?</a><br><br>
                  <button type="submit" class="styled-button">Anmelden</button><br><br>
            </form>
          <p>Neu hier?</p>
          <button class="styled-button" onclick="window.location.href='register.php';">Registrieren</button>
          <?php endif; ?>
          </div>
          <div id="footer">
        <div class="text-center">
            <a href="https://www.facebook.com/?locale=de_DE" target="_blank"><img src="images/facebook_icon.png" alt="Facebook"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="images/instagram_icon.png" alt="Instaram"></a>
            <a href="https://x.com/?lang=de&mx=2" target="_blank"><img src="images/x_icon.png" alt="X" target="_blank"></a>
            <div id="copyright">&copy; 2025 Motorcycle Shop&nbsp;&nbsp;&nbsp;<a href="impressum.php">Impressum</a>&nbsp;&nbsp;&nbsp;<a href="datenschutz.php">Datenschutz</a></li></div>
          </div>
    </div>
    </div>
    
</body>
</html>
