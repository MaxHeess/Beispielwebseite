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
    <title>Helme</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
<div class="header">
      <img src="images/logo.png">
  
        <h1>Helme</h1>
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
                        <img src="images/helm1.png" alt="Helm">
                        <ul id="leftmenu2">
                        <div class="overlay">
                          <li class="nav-item dropdown" data-bs-auto-close="true">
                            <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Beschreibung
                            </a>
                            <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                              <li><p>Ein hochmoderner, vollflächiger Helm aus leichtem Carbon-Material mit einer glänzenden Oberfläche. Ideal für Fahrer, die Wert auf Stabilität und Komfort legen.</p></li>
                              <li><p>Highlights:</p>
                                <ul>
                                  <li>Hochwertige Carbon-Schale für geringes Gewicht und hohe Sicherheit.</li>
                                  <li>Optimale Belüftung und Aerodynamik.</li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                            <p>Preis: 320 €</p>
                            <form action="add_to_cart.php" method="post">
                              <input type="hidden" name="helm_name" value="Carbon Pro Full-Face">
                              <input type="hidden" name="helm_price" value="320">
                              <input type="hidden" name="helm_image" value="images/helm1.png">

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
                    <h2>Carbon Pro Full-Face</h2>
                </div>
                <div class="helm-item">
                        <img src="images/helm2.png" alt="Helm">
                        <ul id="leftmenu2">
                          <div class="overlay">
                            <li class="nav-item dropdown" data-bs-auto-close="true">
                              <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Beschreibung
                              </a>
                              <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                                <li><p>Ein robuster Dual-Sport-Helm, perfekt für Offroad-Abenteuer und Straßenfahrten. In mattem Schwarz mit integrierter Sonnenblende.</p></li>
                                <li><p>Highlights:</p>
                                  <ul>
                                    <li>Abnehmbares Visier für flexible Nutzung.</li>
                                    <li>Verstärkte Belüftung für extreme Bedingungen.</li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                              <p>Preis: 250 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Adventure X Dual-Sport">
                                <input type="hidden" name="helm_price" value="250">
                                <input type="hidden" name="helm_image" value="images/helm2.png">

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
                    <h2>Adventure X Dual-Sport</h2>
                </div>
                <div class="helm-item">
                  <img src="images/helm3.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Ein futuristischer modularer Helm mit integrierten LED-Akzenten für bessere Sichtbarkeit bei Nacht. Der Klappmechanismus bietet maximale Flexibilität.</p></li>
                          <li><p>Highlights:</p>
                            <ul>
                              <li>LED-Lichtstreifen für bessere Sichtbarkeit.</li>
                              <li>Modularer Aufbau für offene oder geschlossene Nutzung.</li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                        <p>Preis: 400 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Futuro LED Modular">
                                <input type="hidden" name="helm_price" value="400">
                                <input type="hidden" name="helm_image" value="images/helm3.png">

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
                  <h2>Futuro LED Modular</h2>
                </div>
                <div class="helm-item">
                  <img src="images/helm4.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Dieser robuste Vollvisierhelm in mattem Dunkelgrau mit einem industriellen Look ist perfekt für Fahrer, die Stil und Sicherheit kombinieren möchten. Mit seinem detailreichen Design und verstärkter Außenschale eignet sich der Helm ideal für lange Fahrten oder urbane Abenteuer.</p></li>
                          <li><p>Highlights:</p>
                            <ul>
                              <li>Robuste Schale mit einem markanten, futuristischen Look.</li>
                              <li>Komfortable Polsterung und effektives Belüftungssystem.</li>
                              <li>Klappvisier mit Antibeschlag-Beschichtung.</li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                        <p>Preis: 280 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Shadow Steel Full-Face">
                                <input type="hidden" name="helm_price" value="280">
                                <input type="hidden" name="helm_image" value="images/helm4.png">

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
                  <h2>Shadow Steel Full-Face</h2>
                </div>
                <div class="helm-item">
                  <img src="images/helm5.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Ein Helm, der durch sein sportliches Retro-Design auffällt. Mit den roten und schwarzen Streifen auf glänzender Oberfläche strahlt dieser Helm klassischen Rennsport-Charme aus. Perfekt für Vintage-Motorräder oder Café-Racer-Fans.</p></li>
                          <li><p>Highlights:</p>
                            <ul>
                              <li>Klassisches Design mit moderner Sicherheitstechnik.</li>
                              <li>Hochwertige Lackierung, resistent gegen Kratzer.</li>
                              <li>Antimikrobielles Innenfutter, ideal für lange Fahrten.</li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                        <p>Preis: 220 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Retro Speed Rider">
                                <input type="hidden" name="helm_price" value="220">
                                <input type="hidden" name="helm_image" value="images/helm5.png">

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
                  <h2>Retro Speed Rider</h2>
                </div>
                <div class="helm-item">
                  <img src="images/helm6.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Ein stilvoller, aggressiv designter Vollvisierhelm aus Carbonfaser. Mit roten und weißen Akzenten bietet er einen sportlichen Look, während das ultraleichte Material maximalen Komfort gewährleistet. Ideal für sportliche Fahrer, die Leistung und Design vereinen wollen.</p></li>
                          <li><p>Highlights:</p>
                            <ul>
                              <li>Leichte Carbonfaser-Schale für hohen Tragekomfort.</li>
                              <li>Kratzfestes Visier mit UV-Schutz.</li>
                              <li>Fortschrittliche Belüftung für optimale Luftzirkulation.</li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                        <p>Preis: 340 €</p>
                        <form action="add_to_cart.php" method="post">
                          <input type="hidden" name="helm_name" value="Carbon Striker">
                          <input type="hidden" name="helm_price" value="340">
                          <input type="hidden" name="helm_image" value="images/helm6.png">

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
                  <h2>Carbon Striker</h2>
                </div>
                <div class="helm-item">
                  <img src="images/helm7.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Ein klassisch inspirierter Open-Face-Helm mit italienischen Farbstreifen (Grün, Weiß, Rot). Perfekt für Fahrer von Vintage- oder Café-Racer-Motorrädern, die einen stilvollen Look mit modernem Komfort suchen.</p></li>
                          <li><p>Highlights:</p>
                            <ul>
                              <li>Leichte, langlebige Schale mit Retro-Design.</li>
                              <li>Sonnenschutzvisier, ideal für sonnige Fahrten.</li>
                              <li>Bequemes, herausnehmbares Innenfutter für einfache Reinigung.</li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                        <p>Preis: 200 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Retro Rider Open-Face">
                                <input type="hidden" name="helm_price" value="200">
                                <input type="hidden" name="helm_image" value="images/helm7.png">

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
                  <h2>Retro Rider Open-Face</h2>
                </div>
                <div class="helm-item">
                  <img src="images/helm8.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Ein auffälliger Vollvisierhelm mit künstlerischem Design, inspiriert von Straßenkunst und Graffiti. Der Helm ist für urbane Fahrer konzipiert, die Individualität und Kreativität auf der Straße ausstrahlen wollen.</p></li>
                          <li><p>Highlights:</p>
                            <ul>
                              <li>Bunte grafische Muster mit kratzresistenter Oberfläche.</li>
                              <li>Aerodynamisches Design für stabile Fahrten bei hoher Geschwindigkeit.</li>
                              <li>Integriertes Belüftungssystem für Komfort in jeder Umgebung.</li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                        <p>Preis: 280 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Street Art Full-Face">
                                <input type="hidden" name="helm_price" value="280">
                                <input type="hidden" name="helm_image" value="images/helm8.png">

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
                  <h2>Street Art Full-Face</h2>
                </div>
                <div class="helm-item">
                  <img src="images/helm9.png" alt="Helm">
                  <ul id="leftmenu2">
                    <div class="overlay">
                      <li class="nav-item dropdown" data-bs-auto-close="true">
                        <a class="nav-link dropdown-toggle" href="#" id="motorradDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Beschreibung
                        </a>
                        <ul class="dropdown-menu custom-width-2" aria-labelledby="motorradDropdown2">
                          <li><p>Ein minimalistischer Halbvisierhelm in schlichtem Weiß mit modernen Akzenten. Ideal für Stadtfahrten und entspannte Touren, mit einem klassischen Look, der Funktionalität nicht vernachlässigt.</p></li>
                          <li><p>Highlights:</p>
                            <ul>
                              <li>Halbschalen-Design mit integriertem Sonnenvisier.</li>
                              <li>Lüftungsöffnungen für zusätzliche Belüftung an heißen Tagen.</li>
                              <li>Leicht und kompakt, ideal für den urbanen Einsatz.</li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                        <p>Preis: 150 €</p>
                              <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="helm_name" value="Urban Classic Half Helmet">
                                <input type="hidden" name="helm_price" value="150">
                                <input type="hidden" name="helm_image" value="images/helm9.png">

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
                  <h2>Urban Classic Half Helmet</h2>
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