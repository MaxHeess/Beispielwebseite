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
    <title>Hosen</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
<div class="header">
      <img src="images/logo.png">
  
        <h1>Hosen</h1>
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
                        <img src="images/hose1.png" alt="Helm">
                        <ul id="leftmenu2">
                        <div class="overlay">
                          <li class="nav-item dropdown" data-bs-auto-close="true">
                            <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Beschreibung
                            </a>
                            <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                              <li><p>Diese sportliche Motorrad-Hose in Rot und Weiß wurde speziell für extreme Witterungsbedingungen entwickelt. Mit ihrer robusten Bauweise, integrierten Knieprotektoren und Belüftungsschlitzen bietet sie optimale Sicherheit und Komfort auf langen Fahrten durch heiße Gebiete.</p></li>
                              
                                </ul>
                              </li>
                           
                          </li>
                            <p>Preis: 249,99 €</p>
                            <form action="add_to_cart.php" method="post">
                              <input type="hidden" name="helm_name" value="RallyX Pro 500">
                              <input type="hidden" name="helm_price" value="249.99">
                              <input type="hidden" name="helm_image" value="images/hose1.png">

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
                    <h2>RallyX Pro 500</h2>
                </div>
                <div class="helm-item">
                        <img src="images/hose2.png" alt="Helm">
                        <ul id="leftmenu2">
                          <div class="overlay">
                            <li class="nav-item dropdown" data-bs-auto-close="true">
                              <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Beschreibung
                              </a>
                              <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                                <li><p>Eine hochwertige schwarze Lederhose für Biker, die Stil und Schutz kombinieren möchten. Verstärkte Kniebereiche mit Hartschalen-Protektoren, flexible Einsätze für mehr Bewegungsfreiheit und eine klassische Optik machen diese Hose zur perfekten Wahl für Cruiser- und Touring-Fahrer.</p></li>
                                
                                  </ul>
                                </li>
                              
                            </li>
                              <p>Preis: 299,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="ShadowCruze X1">
                                <input type="hidden" name="helm_price" value="299.99">
                                <input type="hidden" name="helm_image" value="images/hose2.png">

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
                    <h2>ShadowCruze X1</h2>
                </div>
                <div class="helm-item">
                  <img src="images/hose3.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese aerodynamische Rennsport-Hose in Weiß mit schwarzen und roten Akzenten ist für Höchstgeschwindigkeiten ausgelegt. Hochwertige Materialien, verstärkte Kniepolster und Stretch-Einsätze sorgen für optimalen Sitz und Schutz auf der Rennstrecke oder sportlichen Landstraßen-Touren.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 279,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Apex GP 900">
                                <input type="hidden" name="helm_price" value="279.99">
                                <input type="hidden" name="helm_image" value="images/hose3.png">

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
                  <h2>Apex GP 900</h2>
                </div>
                <div class="helm-item">
                  <img src="images/hose4.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese robuste Motorrad-Jeans kombiniert lässigen Stil mit optimalem Schutz. Verstärkte Kniepartien mit Protektoren, elastische Einsätze für mehr Bewegungsfreiheit und abriebfestes Material machen sie perfekt für den urbanen Biker-Alltag.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 199,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="DenimX Pro 700">
                                <input type="hidden" name="helm_price" value="199.99">
                                <input type="hidden" name="helm_image" value="images/hose4.png">

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
                  <h2>DenimX Pro 700</h2>
                </div>
                <div class="helm-item">
                  <img src="images/hose5.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese Tarnmuster-Hose ist für Abenteuerfahrer und Offroad-Enthusiasten gemacht. Mit großen Cargo-Taschen, gepolsterten Knieschützern und widerstandsfähigem Material bietet sie hervorragenden Schutz und Funktionalität für anspruchsvolle Touren.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 229,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="CamoGuard X1">
                                <input type="hidden" name="helm_price" value="229.99">
                                <input type="hidden" name="helm_image" value="images/hose5.png">

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
                  <h2>CamoGuard X1</h2>
                </div>
                <div class="helm-item">
                  <img src="images/hose6.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese beige Motorrad-Hose mit Leder- und Riemendetails kombiniert einen rustikalen Look mit moderner Sicherheit. Mit verstärkten Kniebereichen, zusätzlichen Taschen und einem einzigartigen Design ist sie ideal für Biker, die Individualität und Schutz gleichermaßen schätzen.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 249,99 €</p>
                        <form action="add_to_cart.php" method="post">
                          <input type="hidden" name="helm_name" value="Ranger MX 500">
                          <input type="hidden" name="helm_price" value="249.99">
                          <input type="hidden" name="helm_image" value="images/hose6.png">

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
                  <h2>Ranger MX 500</h2>
                </div>
                <div class="helm-item">
                  <img src="images/hose7.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese stilvolle Motorrad-Hose in Grau mit sportlichen Streifen verbindet Retro-Design mit moderner Sicherheit. Mit verstärkten Protektoren, elastischen Einsätzen für hohen Tragekomfort und strapazierfähigem Material ist sie perfekt für Fahrer, die Dynamik und Stil lieben.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 259,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Striker GT 800">
                                <input type="hidden" name="helm_price" value="259.99">
                                <input type="hidden" name="helm_image" value="images/hose7.png">

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
                  <h2>Striker GT 800</h2>
                </div>
                <div class="helm-item">
                  <img src="images/hose8.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese auffällige Rennsport-Hose in Rot und Blau wurde für hohe Geschwindigkeiten entwickelt. Sie bietet verstärkte Knieprotektoren, atmungsaktives Material und eine aerodynamische Passform, die optimalen Schutz auf der Rennstrecke und auf der Straße garantiert.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 289,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Velocity RS 900">
                                <input type="hidden" name="helm_price" value="289.99">
                                <input type="hidden" name="helm_image" value="images/hose8.png">

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
                  <h2>Velocity RS 900</h2>
                </div>
                <div class="helm-item">
                  <img src="images/hose9.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese olivgrüne Cargo-Motorradhose vereint Funktionalität mit robustem Schutz. Mit großen Seitentaschen, gepolsterten Kniebereichen und einem widerstandsfähigen Materialmix ist sie ideal für Tourenfahrer und Offroad-Abenteuer.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 239,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Adventure Camo X2">
                                <input type="hidden" name="helm_price" value="239.99">
                                <input type="hidden" name="helm_image" value="images/hose9.png">

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
                  <h2>Adventure Camo X2</h2>
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