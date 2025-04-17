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
    <title>Jacken</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
<div class="header">
      <img src="images/logo.png">
  
        <h1>Jacken</h1>
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
                        <img src="images/jacke1.png" alt="Helm">
                        <ul id="leftmenu2">
                        <div class="overlay">
                          <li class="nav-item dropdown" data-bs-auto-close="true">
                            <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Beschreibung
                            </a>
                            <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                              <li><p>Diese beige-schwarze Motorradjacke kombiniert klassische Eleganz mit modernen Schutzfunktionen. Die schwarzen Einsätze und gepolsterten Schulterpartien verleihen ihr einen sportlichen Look, während die beige Grundfarbe für einen dezenten Stil sorgt. Ideal für Fahrer, die Wert auf Stil und Funktion legen. Perfekt für Touren in wärmeren Regionen dank der atmungsaktiven Materialien.</p></li>
                              
                                </ul>
                              </li>
                           
                          </li>
                            <p>Preis: 249,99 €</p>
                            <form action="add_to_cart.php" method="post">
                              <input type="hidden" name="helm_name" value="Desert Nomad">
                              <input type="hidden" name="helm_price" value="249.99">
                              <input type="hidden" name="helm_image" value="images/jacke1.png">

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
                    <h2>Desert Nomad</h2>
                </div>
                <div class="helm-item">
                        <img src="images/jacke2.png" alt="Helm">
                        <ul id="leftmenu2">
                          <div class="overlay">
                            <li class="nav-item dropdown" data-bs-auto-close="true">
                              <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Beschreibung
                              </a>
                              <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                                <li><p>Die schwarze Lederjacke mit asymmetrischem Reißverschluss ist ein klassisches Biker-Statement. Gepolsterte Ärmel und Schultern verleihen einen robusten, futuristischen Touch und sorgen gleichzeitig für optimalen Schutz. Die Jacke bietet sowohl stilistische Raffinesse als auch Funktionalität und ist perfekt für leidenschaftliche Fahrer, die den klassischen Rock'n'Roll-Look lieben.</p></li>
                                
                                  </ul>
                                </li>
                              
                            </li>
                              <p>Preis: 329,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Midnight Rider">
                                <input type="hidden" name="helm_price" value="329.99">
                                <input type="hidden" name="helm_image" value="images/jacke2.png">

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
                    <h2>Midnight Rider</h2>
                </div>
                <div class="helm-item">
                  <img src="images/jacke3.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese blau-weiße Jacke mit markantem Schriftzug und sportlichen Streifen ist für Rennsport-Enthusiasten gemacht. Mit ihrer modernen Passform und dem dynamischen Design verbindet sie Stil und Aerodynamik. Die Verstärkungen an Schultern und Ellenbogen bieten optimalen Schutz, während das atmungsaktive Material auch bei längeren Fahrten Komfort garantiert. Perfekt für Fahrer, die Geschwindigkeit und Stil gleichermaßen lieben.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 279,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Speedster Legacy">
                                <input type="hidden" name="helm_price" value="279.99">
                                <input type="hidden" name="helm_image" value="images/jacke3.png">

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
                  <h2>Speedster Legacy</h2>
                </div>
                <div class="helm-item">
                  <img src="images/jacke4.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese stylische Jacke in leuchtendem Orange mit blauen und weißen Akzenten kombiniert den Komfort eines Hoodies mit der Funktionalität einer Motorradjacke. Die integrierte Kapuze und die sportlichen Streifen machen sie zur perfekten Wahl für Stadtfahrer, die auf Stil und Sicherheit setzen. Atmungsaktiv und leicht, ideal für den Alltag.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 199,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Urban Racer">
                                <input type="hidden" name="helm_price" value="199.99">
                                <input type="hidden" name="helm_image" value="images/jacke4.png">

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
                  <h2>Urban Racer</h2>
                </div>
                <div class="helm-item">
                  <img src="images/jacke5.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Ein echtes Kraftpaket: Diese Jacke mit militärisch inspiriertem Design in Olivgrün und Schwarz ist mit gepanzerten Schultern und mehreren Gurten für eine anpassbare Passform ausgestattet. Perfekt für Abenteuer-Enthusiasten, die Wert auf maximalen Schutz und Funktionalität legen.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 349,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Tactical Rider">
                                <input type="hidden" name="helm_price" value="349.99">
                                <input type="hidden" name="helm_image" value="images/jacke5.png">

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
                  <h2>Tactical Rider</h2>
                </div>
                <div class="helm-item">
                  <img src="images/jacke6.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese innovative Jacke kombiniert rote, graue und schwarze Elemente in einem futuristischen Design. Die Schutzweste-Optik sorgt für hohen Aufprallschutz, während das leichte Material für optimale Bewegungsfreiheit sorgt. Ideal für sportliche Fahrer und Fans des Sci-Fi-Looks.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 259,99 €</p>
                        <form action="add_to_cart.php" method="post">
                          <input type="hidden" name="helm_name" value="Red Sentinel">
                          <input type="hidden" name="helm_price" value="259.99">
                          <input type="hidden" name="helm_image" value="images/jacke6.png">

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
                  <h2>Red Sentinel</h2>
                </div>
                <div class="helm-item">
                  <img src="images/jacke7.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Mit ihrem neon-gelben Design und reflektierenden Streifen ist diese Jacke perfekt für maximale Sichtbarkeit im Straßenverkehr. Sie bietet nicht nur Schutz vor Witterungseinflüssen, sondern auch ein hohes Maß an Sicherheit, besonders bei Nacht oder schlechtem Wetter. Ideal für Pendler und Tourenfahrer, die viel Wert auf Sicherheit legen.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 129,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Hi-Vis Defender">
                                <input type="hidden" name="helm_price" value="129.99">
                                <input type="hidden" name="helm_image" value="images/jacke7.png">

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
                  <h2>Hi-Vis Defender</h2>
                </div>
                <div class="helm-item">
                  <img src="images/jacke8.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese sportliche Jacke mit leuchtenden Rot- und Gelbtönen sowie schwarzen Akzenten strahlt Energie und Dynamik aus. Die aerodynamische Passform und die verstärkten Schulter- und Ellbogenbereiche machen sie zur idealen Wahl für sportliche Fahrer. Perfekt für Fans von Geschwindigkeit und auffälligem Design.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 289,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Sunburst Rider">
                                <input type="hidden" name="helm_price" value="289.99">
                                <input type="hidden" name="helm_image" value="images/jacke8.png">

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
                  <h2>Sunburst Rider</h2>
                </div>
                <div class="helm-item">
                  <img src="images/jacke9.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Diese elegante braune Lederjacke mit schwarzen Details und markanten Rippen an den Schultern verbindet Retro-Charme mit moderner Funktionalität. Das hochwertige Leder und die robuste Verarbeitung bieten eine langlebige Lösung für stilbewusste Biker. Perfekt für Fahrer, die klassischen Stil schätzen.</p></li>
                          
                            </ul>
                          </li>
                        
                      </li>
                        <p>Preis: 319,99 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Bronze Maverick">
                                <input type="hidden" name="helm_price" value="319.99">
                                <input type="hidden" name="helm_image" value="images/jacke9.png">

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
                  <h2>Bronze Maverick</h2>
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