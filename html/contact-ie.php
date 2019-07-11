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

      <div class="flex-container11" style="border:1px solid grey">
      <div class="border-left" ></div>
      <div id="ie-name"> </div>
      <div class="column2"></div>
      <div class="column3">
      <h3>Kontaktaufnahme</h3>
          <p>Zur Kontaktaufnahme mit dem Verein „Tor nach Zion e.V.“ nutzen Sie bitte dieses Kontaktformular</p>
          </div>

      </div>
      <!--Name-->
    


        <form  action="sendmail.php" method='post'>

             <div class="flex-container12">
             <div class="border-left"> </div>
             <div class="column1"><span id="ie-name1">&nbsp;Name</span> </div>
             <div class="column2">  </div>
             <div class="column3">
              <input  name="name" type="text" tabindex="1" placeholder="Ihr Name..." required autofocus> </div> </div>


              <div class="flex-container12">
             <div class="border-left"> </div>
             <div class="column1"><span id="ie-name1">&nbsp;E-Mail</span> </div>
             <div class="column2">  </div>
             <div class="column3">
              <input id="contact-email" name="email" type="email" tabindex="2" placeholder="Ihre Email-Adresse..." required> </div> </div>
         
              <div class="flex-container12">
             <div class="border-left"> </div>
             <div class="column1"><span id="ie-name1">&nbsp;Betreff</span> </div>
             <div class="column2">  </div>
             <div class="column3">
          <input id="contact-subject" name="subject" type="text" tabindex="3" placeholder="Betreff der Nachricht..." required> </div> </div>

          <div class="flex-container12">
             <div class="border-left"> </div>
             <div class="column1"><span id="ie-name1">&nbsp;Nachricht</span> </div>
             <div class="column2">  </div>
             <div class="column3">
          <textarea id="contact-message" name="message" tabindex="4" placeholder="Ihre Nachricht..." required></textarea> </div> </div>

          <div id="contact-flex-spacer3">
            <label for="contact-submit">// Senden</label>
            <button name="submit" id="contact-submit" type="submit" tabindex="5"></button>
          </div>
        </form>
      </div>
      

      
      
  </body>

</html>


   
        
  