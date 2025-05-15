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
    <title>Meine Bestellungen</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        table, th, td, caption {
            border: thin solid black;
            }

            table {
            background-color: transparent;
            border-collapse: collapse;
            border-spacing: 30px;  /* Verringert den Abstand zwischen den Zellen */
            table-layout: auto;
            max-width: 80%;  /* Die maximale Breite der Tabelle wird auf 60% gesetzt */
            margin-top: 75px;
            margin-left: auto;
            margin-right: auto;
            }
            th, td {
            font-weight: normal;
            text-align: center;
            padding: 20px;  /* Verringert das Padding in den Zellen */
            font-size: 18px;  /* Reduziert die Schriftgröße für eine schmalere Ansicht */
            }
            th, caption {
            font-weight: bolder;
            font-size: 22px;  /* Verringert die Schriftgröße für Überschriften */
            font-style: italic;
            }
    </style>

    <script>
        function validateForm() {
            const checkboxes = document.querySelectorAll('input[name="stornieren[]"]');
            let isChecked = false;
            
            checkboxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    isChecked = true;
                }
            });

            if (!isChecked) {
                alert("Bitte mindestens eine Bestellung auswählen, um sie zu stornieren.");
                return false;
            }
            return true;
        }
    </script>

</head>
<body>
    <div class="header">
      <img src="images/logo.png">
  
        <h1>Meine Bestellungen</h1>
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
          <div id="right3">
          <?php
        // Datenbankverbindung herstellen
        $servername = 
        $username = 
        $password = 
        $dbname = 

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("SET NAMES 'utf8mb4'");  // Optional: Sicherstellen, dass utf8mb4 verwendet wird
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        // Kunden-ID aus der Session
        $kid = $_SESSION["kunde"];
        
        if (isset($kid)) {
            $stmt = $conn->prepare("SELECT Bestellnr, Datum, Gesamtpreis FROM bestellungen WHERE Kunden_id = :kunde_id");
            $stmt->bindParam(':kunde_id', $kid, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        }

        // Tabelle anzeigen
        if ($result) {
            echo "<form action='storno.php' method='POST' onsubmit='return validateForm()'>";
            echo "<table>";
            echo "<tr><th>Bestellnummer</th>&nbsp;&nbsp;&nbsp;<th>Datum</th>&nbsp;&nbsp;&nbsp;<th>Gesamtpreis</th>&nbsp;&nbsp;&nbsp;<th>Stornieren</th></tr>";
            
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['Bestellnr']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Datum']) . "</td>";
                $formattedPrice = number_format($row['Gesamtpreis'], 2, ',', '.') . " €";
                echo "<td>" . $formattedPrice . "</td>";
                echo "<td><input type='checkbox' name='stornieren[]' value='" . htmlspecialchars($row['Bestellnr']) . "'></td>";
                echo "</tr>";
            }
            
            echo "</table>";
            echo "<br><br>";
            echo "<div style='text-align: center; margin-top: 20px;'>";
            echo "<button type='submit' class='styled-button'>Stornieren</button>";
            echo "</div>";
            echo "</form>";
        } else {
            echo "<h2>Sie haben noch keine Bestellungen.</h2>";
        }
        ?>
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
