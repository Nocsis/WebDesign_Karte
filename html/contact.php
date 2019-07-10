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

        <form id="contact-form" action="sendmail.php" method='post'>
          <div id="contact-flex-spacer1">
            <div id="contact-flex-spacer2">
              <input id="contact-name" name="name" type="text" tabindex="1" placeholder="Ihr Name..." required autofocus>
              <input id="contact-email" name="email" type="email" tabindex="2" placeholder="Ihre Email-Adresse..." required>
            </div>

            <div id="contact-confirmation"><p>Nachricht gesendet!</p></div>
          </div>

          <input id="contact-subject" name="subject" type="text" tabindex="3" placeholder="Betreff der Nachricht..." required>
          <textarea id="contact-message" name="message" tabindex="4" placeholder="Ihre Nachricht..." required></textarea>
          <div id="contact-flex-spacer3">
            <label for="contact-submit">// Senden</label>
            <button name="submit" id="contact-submit" type="submit" tabindex="5"></button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>