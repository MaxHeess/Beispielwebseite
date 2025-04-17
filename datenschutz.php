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
    <title>Datenschutz</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>

<div class="header">
      <img src="images/logo.png">
  
        <h1>Datenschutz</h1>
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
          <div id="right">
            <h2>I. Informationen über die Verarbeitung Ihrer Daten gemäß Art. 13 der Datenschutz-Grundverordnung (DS-GVO)</h2>
            <h3>1. Verantwortlicher und Datenschutzbeauftragter</h3>

            <p>Verantwortlich für diese Website ist</p>

            <p></p>[Name, Postadresse, E-Mail-Adresse des Verantwortlichen].</p>

            <p>Den Datenschutzbeauftragten erreichen Sie per E-Mail unter</p>

            <p>[E-Mail-Adresse des Datenschutzbeauftragten]</p>

            <p>oder über die Adresse</p>

            <p>[ggf. auch die Postadresse des Datenschutzbeauftragten].</p>
            <h3>2. Daten, die für die Bereitstellung der Website und die Erstellung der Protokolldateien verarbeitet werden</h3>
            <h4>a. Welche Daten werden für welchen Zweck verarbeitet?</h4>

            <p>Bei jedem Zugriff auf Inhalte der Website werden vorübergehend Daten gespeichert, die möglicherweise eine Identifizierung zulassen. Die folgenden Daten werden hierbei erhoben:</p>
            <ul>
                <li>Datum und Uhrzeit des Zugriffs</li>
                <li>IP-Adresse</li>
                <li>Hostname des zugreifenden Rechners</li>
                <li>Website, von der aus die Website aufgerufen wurde</li>
                <li>Websites, die über die Website aufgerufen werden</li>
                <li>Besuchte Seite auf unserer Website</li>
                <li>Meldung, ob der Abruf erfolgreich war</li>
                <li>Übertragene Datenmenge</li>
                <li>Informationen über den Browsertyp und die verwendete Version</li>
                <li>Betriebssystem</li>
            </ul>

            <p>Die vorübergehende Speicherung der Daten ist für den Ablauf eines Websitebesuchs erforderlich, um eine Auslieferung der Website zu ermöglichen. Eine weitere Speicherung in Protokolldateien erfolgt, um die Funktionsfähigkeit der Website und die Sicherheit der informationstechnischen Systeme sicherzustellen. In diesen Zwecken liegt auch unser berechtigtes Interesse an der Datenverarbeitung.</p>
            <h4>b. Auf welcher Rechtsgrundlage werden diese Daten verarbeitet?</h4>

            <p>Die Daten werden auf der Grundlage des Art. 6 Abs. 1 Buchstabe f DS-GVO verarbeitet.</p>
            <h4>c. [Bei Bedarf] Gibt es neben dem Verantwortlichen weitere Empfänger der personenbezogenen Daten?</h4>

            <p>Die Website wird bei [Name, Postadresse, E-Mail-Adresse des Hosters] gehostet. Der Hoster empfängt die oben genannten Daten als Auftragsverarbeiter.</p>
            <h4>d. Wie lange werden die Daten gespeichert?</h4>

            <p>Die Daten werden gelöscht, sobald sie für die Erreichung des Zwecks ihrer Erhebung nicht mehr erforderlich sind. Bei der Bereitstellung der Website ist dies der Fall, wenn die jeweilige Sitzung beendet ist. Die Protokolldateien werden […, maximal bis zu 24 Stunden] direkt und ausschließlich für Administratoren zugänglich aufbewahrt. Danach sind sie nur noch indirekt über die Rekonstruktion von Sicherungsbändern verfügbar und werden nach […, maximal vier Wochen] endgültig gelöscht.</p>
            <h3>3. Betroffenenrechte</h3>
            <h4>a. Recht auf Auskunft</h4>

            <p>Sie können Auskunft nach Art. 15 DS-GVO über Ihre personenbezogenen Daten verlangen, die wir verarbeiten.</p>
            <h4>b. Recht auf Widerspruch:</h4>

            <p>Sie haben ein Recht auf Widerspruch aus besonderen Gründen (siehe unter Punkt II).</p>
            <h4>c. Recht auf Berichtigung</h4>

            <p>Sollten die Sie betreffenden Angaben nicht (mehr) zutreffend sein, können Sie nach Art. 16 DS-GVO eine Berichtigung verlangen. Sollten Ihre Daten unvollständig sein, können Sie eine Vervollständigung verlangen.</p>
            <h4>d. Recht auf Löschung</h4>

            <p>Sie können nach Art. 17 DS-GVO die Löschung Ihrer personenbezogenen Daten verlangen.</p>
            <h4>e. Recht auf Einschränkung der Verarbeitung</h4>

            <p>Sie haben nach Art. 18 DS-GVO das Recht, eine Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</p>
            <h4>f. Recht auf Beschwerde</h4>

            <p>Wenn Sie der Ansicht sind, dass die Verarbeitung Ihrer personenbezogenen Daten gegen Datenschutzrecht verstößt, haben Sie nach Ar. 77 Abs. 1 DS-GVO das Recht, sich bei einer Datenschutzaufsichtsbehörde eigener Wahl zu beschweren. Hierzu gehört auch die für den Verantwortlichen zuständige Datenschutzaufsichtsbehörde: Landesbeauftragte für Datenschutz und Informationsfreiheit Nordrhein-Westfalen, https://www.ldi.nrw.de/kontakt/ihre-beschwerde.</p>
            <h4>g. Recht auf Datenübertragbarkeit</h4>

            <p>Für den Fall, dass die Voraussetzungen des Art. 20 Abs. 1 DS-GVO vorliegen, steht Ihnen das Recht zu, sich Daten, die wir auf Grundlage Ihrer Einwilligung oder in Erfüllung eines Vertrags automatisiert verarbeiten, an sich oder an Dritte aushändigen zu lassen. Die Erfassung der Daten zur Bereitstellung der Website und die Speicherung der Protokolldateien sind für den Betrieb der Internetseite zwingend erforderlich. Sie beruhen daher nicht auf einer Einwilligung nach Art. 6 Abs. 1 Buchstabe a DS-GVO oder auf einem Vertrag nach Art. 6 Abs. 1 Buchstabe b DS-GVO, sondern sind nach Art. 6 Abs. 1 Buchstabe f DS-GVO gerechtfertigt. Die Voraussetzungen des Art. 20 Abs. 1 DS-GVO sind demnach insoweit nicht erfüllt.</p>
            <h2>II. Recht auf Widerspruch gemäß Art. 21 Abs. 1 DS-GVO</h2>

            <p>Sie haben das Recht, aus Gründen, die sich aus Ihrer besonderen Situation ergeben, jederzeit gegen die Verarbeitung Ihrer personenbezogenen Daten, die aufgrund von Artikel 6 Abs. 1 Buchstabe f DS-GVO erfolgt, Widerspruch einzulegen. Der Verantwortliche verarbeitet die personenbezogenen Daten dann nicht mehr, es sei denn, er kann zwingende schutzwürdige Gründe für die Verarbeitung nachweisen, die die Interessen, Rechte und Freiheiten der betroffenen Person überwiegen, oder die Verarbeitung dient der Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen. Die Erfassung der Daten zur Bereitstellung der Website und die Speicherung der Protokolldateien sind für den Betrieb der Internetseite zwingend erforderlich.</p>
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