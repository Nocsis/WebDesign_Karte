<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>TITLE HERE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../stylesheet.css">
    <script src="../scripts.js"></script>
  </head>

  <body>
    
    <?php include ("../html/header.php"); ?>

    <div>
    <form  action='" . $_SERVER["SCRIPT_NAME"] . "' method='post'> 
          
       <p> 
          <label> Name: 
            <span class='pflichtfeld'> </span><br> 
            <input type='text' name='name' value='" . $name . "'> 
          </label> 
        </p> 
                          
        <p> 
          <label> E-Mail: 
            <span class='pflichtfeld'> </span><br> 
            <input type='email' name='email' value='" . $email . "'> 
          </label> 
        </p> 
                          
        <p> 
          <label> Betreff: 
            <span class='pflichtfeld'> </span><br> 
            <input type='text' name='betreff' value='" . $betreff . "'> 
          </label> 
        </p> 
                          
        <p> 
          <label> Nachricht: 
            <span class='pflichtfeld'> </span><br> 
            <textarea name='nachricht' cols='40' rows='8'> </textarea> 
          </label> 
        </p> 
                          
         <p> 
           <br> 
           <input type='submit' name='submit' value='Formular absenden'> 
         </p> 
                          
          <p> 
            <small>Bitte alle mit <span class='pflichtfeld'></span> 
            markierten Felder ausfüllen.</small> 
          </p> 
                          
        </form>
        </div>
          <div class="testagain">hallo</div>
  </body>
</html>