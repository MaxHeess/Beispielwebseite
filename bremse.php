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
    <title>Bremsbeläge</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
<div class="header">
      <img src="images/logo.png">
  
        <h1>Bremsbeläge</h1>
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
                        <img src="images/bremse1.png" alt="Helm">
                        <ul id="leftmenu2">
                        <div class="overlay">
                          <li class="nav-item dropdown" data-bs-auto-close="true">
                            <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Beschreibung
                            </a>
                            <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                              <li><p>Diese Bremsbeläge bestehen aus Aramidfasern, Gummi und Harzen. Sie sind besonders weich, erzeugen wenig Bremsgeräusche und schonen die Bremsscheiben. Ideal für Stadtverkehr und Touring.</p></li>
                              
                                </ul>
                              </li>
                           
                          </li>
                            <p>Preis: 29,99 €</p>
                            <form action="add_to_cart2.php" method="post">
                              <input type="hidden" name="helm_name" value="Organische Bremsbeläge">
                              <input type="hidden" name="helm_price" value="29.99">
                              <input type="hidden" name="helm_image" value="images/bremse1.png">

                              <button type="submit" class="styled-button">In den Warenkorb</button>
                            </form>
                        </div>
                        </ul>
                    <h2>Organische Bremsbeläge</h2>
                </div>
                <div class="helm-item">
                        <img src="images/bremse2.png" alt="Helm">
                        <ul id="leftmenu2">
                          <div class="overlay">
                            <li class="nav-item dropdown" data-bs-auto-close="true">
                              <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Beschreibung
                              </a>
                              <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                                <li><p>Gefertigt aus gesintertem Metall (Kupfer- und Eisenpartikel), bieten diese Bremsbeläge eine starke Bremskraft, sind extrem hitzebeständig und haben eine lange Lebensdauer. Perfekt für sportliches Fahren und Offroad-Einsatz.</p></li>
                                
                                  </ul>
                                </li>
                              
                            </li>
                              <p>Preis: 59,99 €</p>
                              <form action="add_to_cart2.php" method="post">
                                <input type="hidden" name="helm_name" value="Sintermetall-Bremsbeläge">
                                <input type="hidden" name="helm_price" value="59.99">
                                <input type="hidden" name="helm_image" value="images/bremse2.png">

                                <button type="submit" class="styled-button">In den Warenkorb</button>
                              </form>
                          </div>
                          </ul>
                    <h2>Sintermetall-Bremsbeläge</h2>
                </div>
                <div class="helm-item">
                  <img src="images/bremse3.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Keramik-Bremsbeläge sind besonders hitzebeständig und erzeugen wenig Bremsstaub. Sie bieten eine ausgezeichnete Bremsleistung und sind ideal für Hochleistungsmotorräder und Rennstrecken.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 89,99 €</p>
                              <form action="add_to_cart2.php" method="post">
                                <input type="hidden" name="helm_name" value="Keramik-Bremsbeläge">
                                <input type="hidden" name="helm_price" value="89.99">
                                <input type="hidden" name="helm_image" value="images/bremse3.png">

                                <button type="submit" class="styled-button">In den Warenkorb</button>
                              </form>
                    </div>
                    </ul>
                  <h2>Keramik-Bremsbeläge</h2>
                </div>
                <div class="helm-item">
                  <img src="images/bremse4.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Eine Mischung aus Metall- und organischen Materialien sorgt für eine gute Bremsleistung bei verschiedenen Wetterbedingungen. Diese Beläge sind langlebig und für Touren- und Straßenmotorräder geeignet.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 44,99 €</p>
                              <form action="add_to_cart2.php" method="post">
                                <input type="hidden" name="helm_name" value="Semi-Metallische Bremsbeläge">
                                <input type="hidden" name="helm_price" value="44.99">
                                <input type="hidden" name="helm_image" value="images/bremse4.png">

                                <button type="submit" class="styled-button">In den Warenkorb</button>
                              </form>
                    </div>
                    </ul>
                  <h2>Semi-Metallische Bremsbeläge</h2>
                </div>
                <div class="helm-item">
                  <img src="images/bremse5.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese Bremsbeläge sind mit Carbonfasern verstärkt und bieten eine exzellente Bremsleistung bei hohen Temperaturen. Sie benötigen eine Aufwärmphase, entfalten dann aber ihre volle Kraft. Perfekt für den Rennsport.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 119,99 €</p>
                              <form action="add_to_cart2.php" method="post">
                                <input type="hidden" name="helm_name" value="Carbon-Bremsbeläge">
                                <input type="hidden" name="helm_price" value="119.99">
                                <input type="hidden" name="helm_image" value="images/bremse5.png">

                                <button type="submit" class="styled-button">In den Warenkorb</button>
                              </form>
                    </div>
                    </ul>
                  <h2>Carbon-Bremsbeläge</h2>
                </div>
                <div class="helm-item">
                  <img src="images/bremse6.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese Bremsbeläge bestehen aus einer Vollmetalllegierung und bieten extreme Haltbarkeit und Bremskraft. Sie sind ideal für schwere Motorräder, Offroad-Fahrzeuge und extreme Bedingungen.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 74,99 €</p>
                              <form action="add_to_cart2.php" method="post">
                                <input type="hidden" name="helm_name" value="Vollmetall-Bremsbeläge">
                                <input type="hidden" name="helm_price" value="74.99">
                                <input type="hidden" name="helm_image" value="images/bremse6.png">

                                <button type="submit" class="styled-button">In den Warenkorb</button>
                              </form>
                    </div>
                    </ul>
                  <h2>Vollmetall-Bremsbeläge</h2>
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