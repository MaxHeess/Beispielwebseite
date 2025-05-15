<?php
session_start();

// Zählen der Artikel im Warenkorb
$item_count = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrierung</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
      #right {
        margin-top: 0;
      }
    </style>

</head>
<body>
<div class="header">
      <img src="images/logo.png">
  
        <h1>Registrierung</h1>
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
                <form method="POST">
                    
                        <label for="Vorname">Vorname:</label><br>
                        <input type="text" name="Vorname" required><br>
                    
                        <label for="Nachname">Nachname:</label><br>
                        <input type="text" name="Nachname" required><br>
                    
                        <label for="Email">E-Mail:</label><br>
                        <input type="email" name="Email" required><br>
                    
                        <label for="pw">Passwort:</label><br>
                        <input type="password" name="pw" required><br><br>
                    
                    <button type="submit" class="styled-button">Registrieren</button>
                </form>
          
          </div>

          <?php
    if(isset($_POST['Nachname'])){

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

        // Überprüfen, ob die E-Mail bereits existiert
        $email = $_POST['Email'];
        $stmt = $conn->prepare("SELECT * FROM kunden WHERE Email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            // E-Mail existiert bereits, Fehlermeldung ausgeben
            $email_error = "Die angegebene E-Mail-Adresse ist bereits registriert.";
        } else {
            // Wenn die E-Mail noch nicht existiert, Benutzer registrieren
            $hash = password_hash($_POST['pw'], PASSWORD_BCRYPT);

            $stmt = $conn->prepare("INSERT INTO kunden (Nachname, Vorname, Email, pwhash) VALUES (:Nn, :Vn, :Em, :hsh)");
            $stmt->bindParam(':Nn', $_POST['Nachname']);
            $stmt->bindParam(':Vn', $_POST['Vorname']);
            $stmt->bindParam(':Em', $_POST['Email']);
            $stmt->bindParam(':hsh', $hash);

          if ($stmt->execute()) {
                $_SESSION['kunde'] = $conn->lastInsertId(); 
                $_SESSION['vorname'] = $_POST['Vorname']; 
                echo "<script>window.location.href='login.php';</script>";
                exit();
          }
        }
        
        $conn = null;
    }
    ?>

    <div id="right">
    <!-- Fehleranzeige für doppelte E-Mail -->
    <?php if (isset($email_error)): ?>
        <h4 style="color: blue; font-weight: bold; text-align: center;"><?php echo $email_error; ?></h4>
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
