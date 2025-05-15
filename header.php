<?php
header('Content-Type: text/html; charset=utf-8');
if (session_status() == PHP_SESSION_NONE) {
    session_start();  // Sitzung nur starten, wenn keine aktiv ist
}

$session_timeout = 300;

if (isset($_GET['logout'])) {
    session_unset();  // Alle Sitzungsvariablen löschen
    session_destroy();  // Sitzung zerstören
    header("Location: index.php");  // Zurück zur Startseite umleiten
    exit();
}

// Überprüfen, ob der Benutzer inaktiv ist
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $session_timeout)) {
    session_unset();  // Sitzung löschen
    session_destroy();  // Sitzung zerstören
    header("Location: index.php");  // Zur Startseite umleiten
    exit();
}

// Aktualisiere die letzte Aktivitätszeit
$_SESSION['last_activity'] = time();
?>

<?php if (isset($_SESSION["kunde"])): ?>
    <?php
        $servername = 
        $username = 
        $password = 
        $dbname = 
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("SET NAMES 'utf8mb4'");  // Optional: Sicherstellen, dass utf8mb4 verwendet wird
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        // Benutzerdaten abrufen
        $stmt = $conn->prepare("SELECT * FROM `kunden` WHERE Kunden_id = :kunde_id");
        $stmt->bindParam(':kunde_id', $_SESSION["kunde"]);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $vorname = $result["Vorname"];
    ?>
    <div class="user-container">
    <div class="user-info">
        <span>Hallo, <?php echo $vorname; ?></span><br>
        <a href='bestellungen.php'>Meine Bestellungen</a><br>
        <a href='?logout=true'>Abmelden</a>
    </div>
    </div>
    <?php endif; ?>

    <style>
        
    .user-info {
        color: black;
        position: absolute;
        top: 325px; 
        margin-left: 20px;
        text-align: left; 
        font-size: 17px;
    }

    @media (max-width: 1100px) {
        .user-info {
        position: relative;
        top: 0;
        }
    }

    @media (max-width: 820px) {
        .user-info {
        position: relative;
        top: 10px;
        bottom: 0 !important;
        font-size: 15px;
        }
    }

    @media (max-width: 480px) {
        .user-info {
            position: relative;
            top: 0;
            font-size: 12px;
        }
    }
    </style>

    
