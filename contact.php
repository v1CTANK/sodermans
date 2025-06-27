<?php
// contact.php
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Kontakta oss – Södermans TNG</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>
  <nav class="nav container">
    <a href="index.html" class="logo-link"><img src="images/logo.jpg" class="logo" alt="Logotyp"></a>
    <ul class="nav-list" id="nav-list">
      <li><a href="index.html">Hem</a></li>
      <li><a href="tjanster.html">Tjänster</a></li>
      <li><a href="om-oss.html">Om Oss</a></li>
      <li class="dropdown-parent"><a href="contact.php">Kontakt</a>
        <ul class="dropdown"><li><a href="offer.php">Offertförfrågan</a></li></ul>
      </li>
    </ul>
    <button class="nav-toggle" id="nav-toggle">☰</button>
  </nav>
</header>

<div class="form-container">
  <h1>Kontakta oss</h1>
  <form action="contact.php" method="post">
    <label for="name">Namn</label>
    <input type="text" id="name" name="name" required>

    <label for="email">E-post</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Meddelande</label>
    <textarea id="message" name="message" rows="6" required></textarea>

    <button type="submit">Skicka</button>
  </form>
</div>

<footer class="footer">
  <div class="container">
    <p>© 2025 Södermans TNG i Fårbo AB</p>
    <p>Telefon: 070 643 30 05 | <a href="mailto:robert@sodermans.se">robert@sodermans.se</a></p>
    <p>Adress: Strandstigen 1, 572 75 Figeholm | <a href="privacy.html">Integritetspolicy</a> | <a href="terms.html">Villkor</a></p>
  </div>
</footer>
<script src="js/scripts.js"></script>
</body>
</html>