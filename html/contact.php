<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Kontakt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../stylesheet.css">
    <script src="../scripts.js"></script>
  </head>

  <body>
    
    <?php include ("../html/header.php"); ?>

    <div class="grid-container">

      <div id="cantact-wrapper">
        <div id="contact-text">
          <h3>Kontaktaufnahme</h3>
          <p>Zur Kontaktaufnahme mit dem Verein „Tor nach Zion e.V.“ nutzen Sie bitte dieses Kontaktformular</p>
        </div>

        <!--Falls das so nicht funtioniert, nimm placeholder in den Textboxen.--> 
        <div id="contact-labels">
          <p>&nbsp;Name</p>
          <p>&nbsp;E-Mail</p>
          <p>&nbsp;Betreff</p>
          <p>&nbsp;Nachricht</p>
        </div>

        <form class="contact-form" action="sendmail.php" method='post'>
          <input id="contact-name" name="name" type="text" tabindex="1" required autofocus>
          <input id="contact-email" name="email" type="email" tabindex="2" required>

          <div id="contact-confirmation">Nachricht gesendet!</div>

          <input id="contact-subject" name="subject" type="text" tabindex="3" required>
          <textarea id="contact-message" name="message" tabindex="4" required></textarea>
          <label for="submit-button">// Senden</label>
          <button name="submit" id="submit-button" type="submit" id="contact-submit" tabindex="5"></button>
        </form>
      </div>
    </div>
  </body>
</html>