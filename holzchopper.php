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
    <title>Holzchopper</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
<div class="header">
      <img src="images/logo.png">
  
        <h1>Holzchopper</h1>
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
            <div class="motorrad-container">
              <img src="images/motorrad.jpg" alt="Holzchopper"><br><br><br><br>
              <h2>Exklusiver Holzchopper</h2><br>
              <p><strong>Beschreibung:</strong></p> 
                  <ul>
                    <li>Dieser einzigartige Holzchopper ist mehr als nur ein Motorrad – es ist ein Kunstwerk.
                    Gefertigt aus hochwertigen Holzmaterialien, bietet dieses Motorrad eine außergewöhnliche Kombination aus Handwerkskunst und Design.
                    Perfekt für Sammler oder als Statement-Stück für Ausstellungen. Nicht für den Straßenverkehr zugelassen.</li>
                  </ul>
              <p><strong>Highlights:</strong></p>
                  <ul>
                    <li>Handgefertigte Konstruktion aus massiven Hölzern.</li>
                    <li>Außergewöhnliches Design mit Fokus auf Ästhetik und Kreativität.</li>
                    <li>Ideal für Ausstellungen oder private Sammlungen.</li>
                  </ul>
                <p><strong>Zielgruppe:</strong></p>
                  <ul>
                    <li>Sammler, Kunstliebhaber, Design-Enthusiasten.</li>
                  </ul>
                <p><strong>Preis:</strong></p>
                  <ul>
                    <li>18.000 € (verhandelbar)</li>
                  </ul>
                <p><strong>Hinweis:</strong></p>
                  <ul>
                    <li>Lieferung inklusive maßgefertigtem Ständer.</li>
                </ul><br>
                <button class="styled-button" onclick="window.location.href='anfrage.php?motorrad=Exklusiver Holzchopper'">Anfragen</button>
          </div>
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