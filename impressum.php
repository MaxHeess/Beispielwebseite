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
    <title>Impressum</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>

<div class="header">
      <img src="images/logo.png">
  
        <h1>Impressum</h1>
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
          <div id="right">
            <p>Motorcycle Shop GmbH<br>
                Hauptstraße 58<br>
                70711 Stuttgart<br>
                Telefon: +49 (0) 626 553 424 89<br>
                E-Mail: info@motorcycle-shop.de<br>
                Internet: www.motorcycle-shop.de<br>
                Registergericht Stuttgart HR B 208214, UST ID-Nr. DE 815453806, St.-Nr. 64/200/38999 </p>    
                <h3>Persönlich haftende geschäftsführende und vertretungsberechtigte Gesellschafterin:</h3>
                <p>motorcycle-shop GmbH, Sitz: Stuttgart; Stiftungsverzeichnis der rechtsfähigen Stiftungen des bürgerlichen Rechts des Amtes für regionale Landesentwicklung Weser-Ems Nummer 15(034).</p>
                    
                    <h3>Aufsichtsrat:</h3>
                    <p>Peter Müller (Vorsitzender)</p>
                    
                    <h3>Verantwortlich für den Inhalt nach § 18 Abs. 2 MStV:</h3>
                    <p>Hans-Dieter Schmidt</p>
                    
                    <h3>Haftungshinweis:</h3>
                    <p>Trotz sorgfältiger inhaltlicher Kontrolle übernehmen wir keine Haftung für die Inhalte externer Links. Für den Inhalt der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich.
                    
                    <h3>Bildnachweis:</h3>
                    <p>© Motorcycle Shop GmbH; © Fotolia; © Getty Images International; © iStockphoto; © Shutterstock
                    Beschwerden/Streitschlichtung: https://ec.europa.eu/consumers/odr/
                    Für Verbraucherstreitigkeiten mit dem Anbieter ist die Verbraucherstreitbeilegungsstelle „Allgemeine Verbraucherschlichtungsstelle des Zentrums für Schlichtung e.V.“, zuständig. Die Streitbeilegungsstelle hat ihren Sitz hier: Straßburger Straße 8, 77694 Kehl am Rhein, die Webseite finden Sie unter: www.verbraucher-schlichter.de. Wir erklären allerdings, zur Teilnahme an einem Streitbeilegungsverfahren weder bereit noch verpflichtet zu sein. Sollten Sie daher mit einem unserer Angebote nicht zufrieden sein, können Sie uns gerne unter info@motorcycle-shop.de kontaktieren.</p>
                    
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