<?php
session_start();
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
    header('Location: warenkorb.php');
    exit();
}
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

    <style>
      body {
        text-align: center;
        padding-top: 100px;
      }
    </style>

  </head>
  <body>

<?php

if (!isset($_SESSION['kunde'])) {
  echo "<br><br><a href='login.php' >Bitte zuerst anmelden</a>";
}else {

      
$servername = "db3299.mydbserver.com";
$username = "p683530";
$password = "PaSSw0rd.2025";
$dbname = "usr_p683530_1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES 'utf8mb4'");
} catch(PDOException $e) {
    echo "Verbindung fehlgeschlagen: " . $e->getMessage();
    exit();
}

$kid = $_SESSION['kunde']; // Kunden-ID aus der Session
$datum = date('Y-m-d H:i:s'); // Aktuelles Datum und Uhrzeit
$total_price = 0;

// Berechne den Gesamtpreis
foreach ($_SESSION['cart'] as $item) {
    $total_price += $item['price'] * $item['quantity'];
}

// Bestellung in der Tabelle `bestellungen` speichern
$stmt = $conn->prepare("INSERT INTO bestellungen (Kunden_id, Gesamtpreis, Datum) VALUES (:k, :p, :d)");
$stmt->bindParam(':k', $kid);
$stmt->bindParam(':p', $total_price);
$stmt->bindParam(':d', $datum);
$stmt->execute();

// Bestell-ID der letzten eingefügten Bestellung
$bestellnr = $conn->lastInsertId();

// Bestellposten in der Tabelle `bestellposten` speichern
foreach ($_SESSION['cart'] as $item) {
    $stmt = $conn->prepare("INSERT INTO bestellposten (Bestellnr, Kunden_id, Produkt, Preis, Menge, Größe) VALUES (:b, :k, :p, :pr, :m, :f)");
    $stmt->bindParam(':b', $bestellnr);
    $stmt->bindParam(':k', $kid);
    $stmt->bindParam(':p', $item['name']);
    $stmt->bindParam(':pr', $item['price']);
    $stmt->bindParam(':m', $item['quantity']);

    $size = isset($item['size']) ? $item['size'] : NULL;
    $stmt->bindParam(':f', $size, PDO::PARAM_STR);

    $stmt->execute();
}

// Leere den Warenkorb nach der Bestellung
$_SESSION['cart'] = [];

echo "<h2>Vielen Dank für Ihre Bestellung!</h2>";
echo "<p>Ihre Bestellnummer lautet: " . $bestellnr . "</p>";
echo "<p>Der Gesamtbetrag ist: " . number_format($total_price, 2, ',', '.') . " €</p>";
echo "<a href='index.php'>Zurück zum Shop</a>";
}
?>

</body>
</html>