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
    <title>Handschuhe</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
<div class="header">
      <img src="images/logo.png">
  
        <h1>Handschuhe</h1>
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
                        <img src="images/handschuhe1.png" alt="Helm">
                        <ul id="leftmenu2">
                        <div class="overlay">
                          <li class="nav-item dropdown" data-bs-auto-close="true">
                            <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Beschreibung
                            </a>
                            <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                              <li><p>Ein sportlicher, weiß-schwarzer Handschuh mit auffälligem Design und robustem Knöchelschutz. Perfekt für schnelle Fahrten.</p></li>
                              
                                </ul>
                              </li>
                           
                          </li>
                            <p>Preis: 79,99 €</p>
                            <form action="add_to_cart.php" method="post">
                              <input type="hidden" name="helm_name" value="White Phantom">
                              <input type="hidden" name="helm_price" value="79.99">
                              <input type="hidden" name="helm_image" value="images/handschuhe1.png">

                              <label for="size">Größe:</label>
                                <select name="helm_size" id="size" required>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select><br><br>

                              <button type="submit" class="styled-button">In den Warenkorb</button>
                            </form>
                        </div>
                        </ul>
                    <h2>White Phantom</h2>
                </div>
                <div class="helm-item">
                        <img src="images/handschuhe2.png" alt="Helm">
                        <ul id="leftmenu2">
                          <div class="overlay">
                            <li class="nav-item dropdown" data-bs-auto-close="true">
                              <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Beschreibung
                              </a>
                              <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                                <li><p>Ein komplett schwarzer, aggressiv gestylter Handschuh mit Carbon-Protektoren — ideal für Sport- und Naked-Bikes.</p></li>
                                
                                  </ul>
                                </li>
                              
                            </li>
                              <p>Preis: 84,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Black Hawk">
                                <input type="hidden" name="helm_price" value="84.99">
                                <input type="hidden" name="helm_image" value="images/handschuhe2.png">

                                <label for="size">Größe:</label>
                                <select name="helm_size" id="size" required>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select><br><br>

                                <button type="submit" class="styled-button">In den Warenkorb</button>
                              </form>
                          </div>
                          </ul>
                    <h2>Black Hawk</h2>
                </div>
                <div class="helm-item">
                  <img src="images/handschuhe3.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Ein markanter, braun-orangener Handschuh mit starken Knöchelschalen und Fingerprotektoren — optimal für Scrambler- und Retro-Fahrer.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 74,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Rust Rebel">
                                <input type="hidden" name="helm_price" value="74.99">
                                <input type="hidden" name="helm_image" value="images/handschuhe3.png">

                                <label for="size">Größe:</label>
                                <select name="helm_size" id="size" required>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select><br><br>

                                <button type="submit" class="styled-button">In den Warenkorb</button>
                              </form>
                    </div>
                    </ul>
                  <h2>Rust Rebel</h2>
                </div>
                <div class="helm-item">
                  <img src="images/handschuhe4.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Ein vintage-inspirierter Handschuh mit Streifenmuster, atmungsaktivem Material und robustem Knöchelschutz. Perfekt für Abenteurer.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 69,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Desert Storm">
                                <input type="hidden" name="helm_price" value="69.99">
                                <input type="hidden" name="helm_image" value="images/handschuhe4.png">

                                <label for="size">Größe:</label>
                                <select name="helm_size" id="size" required>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select><br><br>

                                <button type="submit" class="styled-button">In den Warenkorb</button>
                              </form>
                    </div>
                    </ul>
                  <h2>Desert Storm</h2>
                </div>
                <div class="helm-item">
                  <img src="images/handschuhe5.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Ein klassisch grauer Handschuh mit massiven Protektoren und minimalistischem Look — für Touring und Sicherheit.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 79,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Iron Grip">
                                <input type="hidden" name="helm_price" value="79.99">
                                <input type="hidden" name="helm_image" value="images/handschuhe5.png">

                                <label for="size">Größe:</label>
                                <select name="helm_size" id="size" required>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select><br><br>

                                <button type="submit" class="styled-button">In den Warenkorb</button>
                              </form>
                    </div>
                    </ul>
                  <h2>Iron Grip</h2>
                </div>
                <div class="helm-item">
                  <img src="images/handschuhe6.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Ein moderner Handschuh mit rot-schwarzem Muster, starken Fingerprotektoren und optimaler Belüftung. Ideal für City-Rider.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 76,99 €</p>
                        <form action="add_to_cart.php" method="post">
                          <input type="hidden" name="helm_name" value="Urban Striker">
                          <input type="hidden" name="helm_price" value="76.99">
                          <input type="hidden" name="helm_image" value="images/handschuhe6.png">

                          <label for="size">Größe:</label>
                                <select name="helm_size" id="size" required>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select><br><br>

                          <button type="submit" class="styled-button">In den Warenkorb</button>
                        </form>
                    </div>
                    </ul>
                  <h2>Urban Striker</h2>
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