<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <title>Tor nach Zion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../stylesheet.css">
    <script src="../scripts.js"></script>
  </head>

  <body>
    <?php include ("../html/header.php"); ?>
    
    <div class="grid-container" >
    
      <!--Das &nbsp; vor den Zeilen ist wichtig
          um das Layout der schwarzen Boxen zu erhalten!-->
      <div id="name">
        <span id="vorname">
          &nbsp;Dummy
        </span>
        <span id="nachname">
          &nbsp;Dum
        </span>
      </div>
      
      <div id="bild">
        <img src="../Material/Bilder/portrait-dummy.jpg" alt="portrait-dummy" height="100%" width="90.91%">
      </div>
      
      <div id="text">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
        sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
        accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor 
        sit amet.
      </div>

      <div id="jahr">year here</div>
    </div>

    <div id="section2"><img src="../Material/Bilder/dummy-map.jpg"> </div>

    <button class="scrollButton" id="downButton" onclick="scrollToBottom()"></button>
    <button class="scrollButton" id="upButton" onclick="scrollToTop()"></button>
  </body>

</html>
