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

      <!--Name-->
      <div class="flex-container2">
        <div class="border-left"></div>
          <div id="ie-name"> 
            <span id="ie-name1">&nbsp;Name</span>
            <span id="ie-name2">&nbsp;E-Mail</span>
            <span class="de"id="ie-name3">&nbsp;Betreff</span>
            <span class="en" id="ie-name3">&nbsp;blubi</span>
            <span class="de"id="ie-name4">&nbsp;Nachricht</span>
            <span class="en" id="ie-name4">&nbsp;yay</span> 
         </div> 

         <!--Portrait und Text-->
         <div class="column2"></div>
         <div class="column3">
            <form  action='" . $_SERVER["SCRIPT_NAME"] . "' method='post'> 
          
       <p> 
            <span class='pflichtfeld'> </span>
            <input type='text' name='name' value='" . $name . "'> 
        </p> 
                          
        <p> 
            <span class='pflichtfeld'> </span>
            <input type='email' name='email' value='" . $email . "'> 
        </p> 
                          
        <p> 
            <span class='pflichtfeld'> </span>
            <input type='text' name='betreff' value='" . $betreff . "'> 
        </p> 
                          
        <p> 
            <span class='pflichtfeld'> </span>
            <textarea name='nachricht' cols='40' rows='8'> </textarea> 
        </p> 
                          
         <p> 
           <br> 
           <input type='submit' name='submit' value='Formular absenden'> 
         </p> 
                          
          <p> 
            <small>Bitte alle mit <span class='pflichtfeld'></span> 
            markierten Felder ausfüllen.</small> 
          </p> 

      
      
  </body>

</html>


   
        
  