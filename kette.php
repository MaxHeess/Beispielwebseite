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
    <title>Kette</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
<div class="header">
      <img src="images/logo.png">
  
        <h1>Kette</h1>
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
          <div class="helm-grid">
                <div class="helm-item">
                        <img src="images/kette1.png" alt="Helm">
                        <ul id="leftmenu2">
                        <div class="overlay">
                          <li class="nav-item dropdown" data-bs-auto-close="true">
                            <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Beschreibung
                            </a>
                            <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                              <li><p>Diese extra verstärkte X-Ring-Kette von DID ist speziell für leistungsstarke Motorräder konzipiert. Sie bietet eine hohe Zugfestigkeit von 4.720 kg und zeichnet sich durch ihre Langlebigkeit sowie eine ansprechende schwarze Optik aus.</p></li>
                              
                                </ul>
                              </li>
                           
                          </li>
                            <p>Preis: 114,99 €</p>
                            <form action="add_to_cart2.php" method="post">
                              <input type="hidden" name="helm_name" value="DID 525ZVM-X (Schwarz)">
                              <input type="hidden" name="helm_price" value="114.99">
                              <input type="hidden" name="helm_image" value="images/kette1.png">

                              <button type="submit" class="styled-button">In den Warenkorb</button>
                            </form>
                        </div>
                        </ul>
                    <h2>DID 525ZVM-X (Schwarz)</h2>
                </div>
                <div class="helm-item">
                        <img src="images/kette2.png" alt="Helm">
                        <ul id="leftmenu2">
                          <div class="overlay">
                            <li class="nav-item dropdown" data-bs-auto-close="true">
                              <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Beschreibung
                              </a>
                              <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                                <li><p>Diese hochwertige X-Ring-Kette eignet sich ideal für Motorräder mit großem Hubraum. Sie verfügt über eine Zugfestigkeit von 4.720 kg und besticht durch ihre goldene Farbgebung, die nicht nur optisch ansprechend ist, sondern auch Korrosionsschutz bietet.</p></li>
                                
                                  </ul>
                                </li>
                              
                            </li>
                              <p>Preis: 119,99 €</p>
                              <form action="add_to_cart2.php" method="post">
                                <input type="hidden" name="helm_name" value="DID 530ZVM-X (Gold)">
                                <input type="hidden" name="helm_price" value="119.99">
                                <input type="hidden" name="helm_image" value="images/kette2.png">

                                <button type="submit" class="styled-button">In den Warenkorb</button>
                              </form>
                          </div>
                          </ul>
                    <h2>DID 530ZVM-X (Gold)</h2>
                </div>
                <div class="helm-item">
                  <img src="images/kette3.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese verstärkte X-Ring-Kette ist für Motorräder mit hoher Leistung ausgelegt. Sie bietet eine Zugfestigkeit von 4.720 kg und kommt in einer eleganten silbernen Ausführung, die sowohl Stil als auch Schutz vor Korrosion gewährleistet.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 104,99 €</p>
                              <form action="add_to_cart2.php" method="post">
                                <input type="hidden" name="helm_name" value="DID 525ZVM-X (Silber)">
                                <input type="hidden" name="helm_price" value="104.99">
                                <input type="hidden" name="helm_image" value="images/kette3.png">

                                <button type="submit" class="styled-button">In den Warenkorb</button>
                              </form>
                    </div>
                    </ul>
                  <h2>DID 525ZVM-X (Silber)</h2>
                </div>
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