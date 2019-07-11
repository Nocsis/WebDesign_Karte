<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <title>Tor nach Zion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../stylesheet.css">
  </head>

  <body>
      
    <?php include ("../html/header.php"); ?>

    <div class="border-left">
    <div class="contact-wrapper de">
        <div class="contact-text-wrapper">
          <div class="contact-text-spacer"> </div>
          <div class="contact-text">
            <h3>Kontaktaufnahme</h3>
            <p>Zur Kontaktaufnahme mit dem Verein „Tor nach Zion e.V.“ nutzen Sie bitte dieses Kontaktformular.</p>
          </div>
        </div>

        <form class="contact-form" action="sendmail.php" method='post'>
          <div class="contact-flex-wrapper">
            <div class="contact-confirmation-wrapper">
              <div class="contact-flex-wrapper2">
                <div class="contact-name-wrapper">
                  <div class="contact-name-label contact-label">
                    <div class="contact-label-text">&nbsp;Name</div>
                  </div>
                  <input class="contact-name" name="name" type="text" tabindex="1" required autofocus>
                </div>
                <div class="contact-email-wrapper">
                  <div class="contact-email-label contact-label">
                    <div class="contact-label-text">&nbsp;E-Mail</div>
                  </div>
                  <input class="contact-email" name="email" type="email" tabindex="2" required>
                </div>
              </div>
              <div class="contact-confirmation"><p>Nachricht gesendet!</p></div>
            </div>

            <div class="contact-subject-wrapper">
              <div class="contact-subject-label contact-label">
                <div class="contact-label-text">&nbsp;Betreff</div>
              </div>
              <input class="contact-subject" name="subject" type="text" tabindex="3" required>
            </div>
            <div class="contact-message-wrapper">
              <div class="contact-message-label contact-label">
                <div class="contact-label-text">&nbsp;Nachricht</div>
              </div>
              <textarea class="contact-message" name="message" tabindex="4" required></textarea>
            </div>
          </div>
          <div class="contact-submit-wrapper">
            <p class="contact-submit-text">// Senden</p>
            <button class="contact-submit" name="submit" type="submit" tabindex="5"></button>
          </div>
        </form>
      </div>

      <div class="contact-wrapper en">
        <div class="contact-text-wrapper">
          <div class="contact-text-spacer"> </div>
          <div class="contact-text">
            <h3>Contact</h3>
            <p>To contact "Tor nach Zion e.V." please use this contact form.</p>
          </div>
        </div>

        <form class="contact-form" action="sendmail.php" method='post'>
          <div class="contact-flex-wrapper">
            <div class="contact-confirmation-wrapper">
              <div class="contact-flex-wrapper2">
                <div class="contact-name-wrapper">
                  <div class="contact-name-label contact-label">
                    <div class="contact-label-text">&nbsp;Name</div>
                  </div>
                  <input class="contact-name" name="name" type="text" tabindex="1" required autofocus>
                </div>
                <div class="contact-email-wrapper">
                  <div class="contact-email-label contact-label">
                    <div class="contact-label-text">&nbsp;E-Mail</div>
                  </div>
                  <input class="contact-email" name="email" type="email" tabindex="2" required>
                </div>
              </div>
              <div class="contact-confirmation"><p>Message sent!</p></div>
            </div>

            <div class="contact-subject-wrapper">
              <div class="contact-subject-label contact-label">
                <div class="contact-label-text">&nbsp;Subject</div>
              </div>
              <input class="contact-subject" name="subject" type="text" tabindex="3" required>
            </div>
            <div class="contact-message-wrapper">
              <div class="contact-message-label contact-label">
                <div class="contact-label-text">&nbsp;Message</div>
              </div>
              <textarea class="contact-message" name="message" tabindex="4" required></textarea>
            </div>
          </div>
          <div class="contact-submit-wrapper">
            <p class="contact-submit-text">// Submit</p>
            <button class="contact-submit" name="submit" type="submit" tabindex="5"></button>
          </div>
        </form>
      </div>
      
    


  

      
      
  </body>

</html>


   
        
  