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
    <title>Motorcycle Shop</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  
  </head>
  <body>
  
  <div class="header">
      <img src="images/logo.png">
      
    </div>

    <?php include 'header.php'; ?>
    
    <video class="background-video" autoplay loop muted playsinline>
      <source src="images/video.mp4" type="video/mp4">
    </video>

    

    <div id="menu">
      <div id="left">
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
        <h2>Willkommen beim Motorcycle Shop!</h2>
        <p>Wir freuen uns, dich in unserem Motorradshop begrüßen zu dürfen – deinem ultimativen Partner für alles rund ums Motorradfahren! Ob du ein begeisterter Biker, ein technikaffiner Tüftler oder ein Neuling auf zwei Rädern bist, wir bieten dir eine breite Auswahl an hochwertigen Produkten und Dienstleistungen, die perfekt auf deine Bedürfnisse abgestimmt sind.</p>
        <p><strong>Was dich bei uns erwartet:</strong></p>
        <ul>
          <li><strong>Motorräder:</strong> Von modernen Sportbikes bis hin zu klassischen Cruisern – bei uns findest du dein Traum-Motorrad.</li><br>
          <li><strong>Zubehör & Ersatzteile:</strong> Entdecke unser Sortiment an originalen und kompatiblen Teilen, Helmen, Kleidung und mehr.</li><br>
          <li><strong>Professioneller Service:</strong> Unsere Experten stehen dir mit Wartung, Reparaturen und technischen Upgrades zur Seite.</li><br>
          <li><strong>Kompetente Beratung:</strong> Wir helfen dir dabei, die richtige Ausstattung und das perfekte Motorrad zu finden.</li><br>
        </ul>
        <p><strong>Warum wir?</strong></p>
        <p>Bei uns steht deine Leidenschaft im Mittelpunkt. Wir legen großen Wert auf Qualität, persönliche Beratung und faire Preise. Unser Ziel ist es, dir das bestmögliche Fahrerlebnis zu bieten – ob auf der Straße, der Rennstrecke oder im Gelände.<br><br>
          Besuche uns online oder vor Ort und entdecke, was den Motorcycle Shop so besonders macht. Dein nächstes Abenteuer auf zwei Rädern beginnt hier!</p>

        <div id="abo">
          <h1>Abonniere uns</h1>
          <p>Abonniere unseren Newsletter, um die neuesten Geschichten in deinem Postfach zu erhalten.</p>
        </div>
        <form action="anfrage_verarbeiten.php" method="POST">
          <input type="email" id="email" name="email" placeholder="Gib deine E-Mail-Adresse ein ..." required>
          <button type="submit" class="styled-button">Abonnieren</button>
        </form>
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