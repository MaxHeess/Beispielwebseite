<?php
session_start();

// Überprüfung, ob die POST-Daten vorhanden sind
if (isset($_POST['helm_name'], $_POST['helm_price'], $_POST['helm_image'], $_POST['helm_size'])) {
    // Daten aus dem Formular abrufen
    $helm_name = $_POST['helm_name'];
    $helm_price = $_POST['helm_price'];
    $helm_image = $_POST['helm_image'];
    $helm_size = $_POST['helm_size']; // Größe abrufen

    // Sicherstellen, dass der Warenkorb existiert
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Überprüfen, ob der Artikel mit derselben Größe bereits im Warenkorb ist
    $found = false;
    foreach ($_SESSION['cart'] as &$existing_item) {
        if ($existing_item['name'] === $helm_name && $existing_item['size'] === $helm_size) {
            $existing_item['quantity'] += 1; // Menge erhöhen
            $found = true;
            break;
        }
    }
    unset($existing_item); // Referenz entfernen

    // Wenn der Artikel noch nicht im Warenkorb ist, füge ihn hinzu
    if (!$found) {
        $item = array(
            'name' => $helm_name,
            'price' => $helm_price,
            'image' => $helm_image,
            'size' => $helm_size, // Größe hinzufügen
            'quantity' => 1 // Standardmenge auf 1 setzen
        );
        $_SESSION['cart'][] = $item;
    }

    // Erfolgsnachricht
    echo "<script>alert('Der Artikel wurde erfolgreich zum Warenkorb hinzugefügt!'); window.history.back();</script>";
    exit();
} else {
    // Falls Daten fehlen, Fehlerbehandlung
    echo "Fehler: Artikel konnte nicht hinzugefügt werden.";
}
?>