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

      <div class="contact-wrapper">
        <div class="contact-text-wrapper">
          <div class="contact-text-spacer">
            <div class="contact-text">
              <h3>Kontaktaufnahme</h3>
              <p>Zur Kontaktaufnahme mit dem Verein „Tor nach Zion e.V.“ nutzen Sie bitte dieses Kontaktformular.</p>
            </div>
          </div>
        </div>

        <form class="contact-form" action="sendmail.php" method='post'>
          <div class="contact-flex-wrapper">
            <div class="contact-confirmation-wrapper">
              <div class="contact-flex-wrapper2">
                <div class="contact-name-wrapper">
                  <div class="contact-name-label contact-label">Name</div>
                  <input class="contact-name" name="name" type="text" tabindex="1" placeholder="Ihr Name..." required autofocus>
                </div>
                <div class="contact-email-wrapper">
                  <div class="contact-email-label contact-label">E-Mail</div>
                  <input class="contact-email" name="email" type="email" tabindex="2" placeholder="Ihre Email-Adresse..." required>
                </div>
              </div>
              <div class="contact-confirmation"><p>Nachricht gesendet!</p></div>
            </div>

            <div class="contact-subject-wrapper">
              <div class="contact-subject-label contact-label">Betreff</div>
              <input class="contact-subject" name="subject" type="text" tabindex="3" placeholder="Betreff der Nachricht..." required>
            </div>
            <div class="contact-message-wrapper">
              <div class="contact-message-label contact-label"></div>
              <textarea class="contact-message" name="message" tabindex="4" placeholder="Ihre Nachricht..." required></textarea>
            </div>
          </div>
          <div class="contact-submit-wrapper">
            <p class="contact-submit-text">// Senden</p>
            <button class="contact-submit" name="submit" type="submit" tabindex="5"></button>
          </div>
        </form>
      </div>
    </div>

    <script src="/scripts.js"></script>
  </body>
</html>