<?php
session_start();  // Sitzung starten

// Datenbankverbindung herstellen
$servername = "db3299.mydbserver.com";
$username = "p683530";
$password = "PaSSw0rd.2025";
$dbname = "usr_p683530_1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->exec("SET NAMES 'utf8mb4'");  // Optional: Sicherstellen, dass utf8mb4 verwendet wird
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$kid = $_SESSION["kunde"];

$stmt= $conn->prepare("SELECT * FROM kunden WHERE Kunden_id=$kid");
$stmt->execute();

$result1 = $stmt->fetchAll(PDO::FETCH_ASSOC)[0]; 

$stmt= $conn->prepare("SELECT Addr_id FROM kunden_addressen WHERE Kunden_id=$kid");
$stmt->execute();

$result2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
if($result2 != [] ){
    $addr = $result2[0]['Addr_id'];
    $stmt= $conn->prepare("SELECT * FROM addressen WHERE Addr_id=$addr");
    $stmt->execute();
    $result3 = $stmt->fetchAll(PDO::FETCH_ASSOC)[0]; 
}else{
    $result3 = array("PLZ"=>"","Wohnort"=>"","Strasse"=>"","Hausnr"=>"");
}

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angaben bearbeiten</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="header">
      <img src="images/logo.png">
  
        <h1>Angaben bearbeiten</h1>
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
          <div id="right2">
          <form method="POST">
            
                <label for="konto">IBAN eingeben:</label><br>
                <input type="text" name="konto" id="konto" value="<?= isset($_POST['konto']) ? htmlspecialchars($_POST['konto']) : htmlspecialchars($result1['iban']) ?>"><br>
            
                <label for="plz">PLZ:</label><br>
                <input type="text" name="plz" id="plz" value="<?= isset($_POST['plz']) ? htmlspecialchars($_POST['plz']) : htmlspecialchars($result3['PLZ']) ?>"><br>
            
                <label for="stadt">Wohnort:</label><br>
                <input type="text" name="stadt" id="stadt" value="<?= isset($_POST['stadt']) ? htmlspecialchars($_POST['stadt']) : htmlspecialchars($result3['Wohnort']) ?>"><br>
          
                <label for="strt">Straße:</label><br>
                <input type="text" name="strt" id="strt" value="<?= isset($_POST['strt']) ? htmlspecialchars($_POST['strt']) : htmlspecialchars($result3['Strasse']) ?>"><br>
            
                <label for="hsnr">Hausnummer:</label><br>
                <input type="text" name="hsnr" id="hsnr" value="<?= isset($_POST['hsnr']) ? htmlspecialchars($_POST['hsnr']) : htmlspecialchars($result3['Hausnr']) ?>"><br>
            
                <label for="tel">Telefonnummer:</label><br>
                <input type="text" name="tel" id="tel" value="<?= isset($_POST['tel']) ? htmlspecialchars($_POST['tel']) : htmlspecialchars($result1['Telefonnr']) ?>"><br><br>
            
            <button type="submit" class="styled-button">Daten speichern</button>
        </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Update Kunden-Daten
        $prep = "UPDATE kunden SET ";
        if (isset($_POST['konto'])) {
            $prep .= "iban = :i, ";
        }
        if (isset($_POST['tel'])) {
            $prep .= "Telefonnr = :t ";
        }
        $prep .= "WHERE kunden_id = $kid";

        $stmt = $conn->prepare($prep);
        if (isset($_POST['konto'])) $stmt->bindParam("i", $_POST['konto']);
        if (isset($_POST['tel'])) $stmt->bindParam("t", $_POST['tel']);
        $stmt->execute();

        // Update oder Insert Adresse
        if ($result2 == []) {
            $prep_addr = "INSERT INTO addressen (PLZ, Wohnort, Strasse, Hausnr) 
                          VALUES (:p, :w, :s, :n)";
        } else {
            $addr = $result2[0]['Addr_id'];
            $prep_addr = "UPDATE addressen 
                          SET PLZ = :p, Wohnort = :w, Strasse = :s, Hausnr = :n
                          WHERE Addr_id = $addr";
        }

        $stmt_addr = $conn->prepare($prep_addr);
        $stmt_addr->bindParam("p", $_POST["plz"]);
        $stmt_addr->bindParam("w", $_POST["stadt"]);
        $stmt_addr->bindParam("s", $_POST["strt"]);
        $stmt_addr->bindParam("n", $_POST["hsnr"]);
        $stmt_addr->execute();

        // Falls eine neue Adresse eingefügt wurde, Beziehung herstellen
        if ($result2 == []) {
            $abfr = $conn->prepare("SELECT LAST_INSERT_ID()");
            $abfr->execute();
            $neu = $abfr->fetchAll(PDO::FETCH_NUM)[0];
            $stmt_kreuz = $conn->prepare("INSERT INTO kunden_addressen (Addr_id, Kunden_id) 
                                          VALUES (:a, :k)");
            $stmt_kreuz->bindParam("a", $neu[0]);
            $stmt_kreuz->bindParam("k", $kid);
            $stmt_kreuz->execute();
        }
        echo "<br><br><p>Daten wurden erfolgreich aktualisiert.</p>";
    }
    
    $conn = null;
    ?>
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