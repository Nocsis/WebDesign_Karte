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

<div class="flex-container2">
  <div class="randlinks"></div>
    <div class="spalte1 IE-name"> 
      <span id="name1">&nbsp;Josef</span>
      <span id="name2">&nbsp;Aaron</span>
   </div>

   <div class="spalte2"></div>
   <div class="spalte3">
     <img src="../material/bilder/portraits/portraitAvishay.jpg" alt="Portrait Avishay" height="100%" width="90.91%">
   </div>
    <div class="spalte4"></div>
    <div class="IE-text de"> 	„Ich erzähle meine Geschichte. Weiter und weiter und es ist, … es ist schwer. Und es tut weh. Aber ich freue mich heute, dass ich die Geschichte  erzählen und weitergeben kann.“</div>
    <div class="IE-text en"> „I am going on telling my story. It is hard and it hurts. But I am happy that I can tell my story and share it with others.”</div>
    <div class="randrechts"></div>
</div>

  <div class="flex-container3">
    <div class="leer"></div>
  </div>

  <div class="flex-container4">
    <div class="randlinks"></div>
    <div class="strich"></div>
    <div class="spalte4"></div>
    <div class="strich2"></div>
    <div class="randrechts"></div>
  </div>

  <div class="flex-container5">
    <div class="randlinks"></div>
    <div class="IE-erklärung"></div>
    <div class="spalte4"></div>
    <div class="IE-jahr de">
      <strong>//</strong> &nbsp; Geboren am 5.5.1935 in Frankfurt am Main in einer Familie mit 11 Kindern <br>
      <strong>//</strong> &emsp; 1939 schickt ihn seine Mutter mit zwei Geschwistern nach Frankreich. Dort werden sie an verschiedenen Orten versteckt. <br>
      <strong>//</strong> &emsp; Nach seiner Befreiung wandert er in Israel ein. Er arbeitet lange Zeit als Kellner. <br></div>
      <strong>//</strong> &nbsp; Josef Aaron lebt heute in Jerusalem <br>
    <div class="IE-jahr en">
      <strong>//</strong> &nbsp; Born on 5.5.1935 in Frankfurt am Main in a family of eleven children <br>
      <strong>//</strong> &emsp; In 1939 his mother sends him and two other siblings to France. There they are hidden in different places.<br>
      <strong>//</strong> &emsp; In 1942 the SS finds them and they were brought to Bergen-Belsen.<br>
      <strong>//</strong> &nbsp; After his liberation and lengthy rehabilitation he immigrates to Israel. He works as a waiter.<br>
      <strong>//</strong> &nbsp; Josef Aaron lives in Jerusalem today.<br>
    </div>
    <div class="randrechts"></div>
  </div>


  <div class="flex-container6">
      <div class="leer"></div>
  </div>
    
  <div class="flex-container7">
    <div class="randlinks"></div>
    <div class="strich3"></div>
    <div class="spalte4"> </div>
    <div class="strich4"></div>
    <div class="randrechts"></div>
  </div>

  <div class="flex-container8">
      <div class="leer"></div>
  </div>
    
  <div id="section2">
    <div class="map-background" id="avishay-map">
      <div id="video-popup">
        <div id="video-container"></div>
        <button id="video-close"></button>
      </div>
      <!--Die Reihenfolge der Klassen ist wichtig! Immer "map-button sprache name-stationnr-nr" bzw "map-popup sprache name-stationnr-nr"!-->
      <button class="map-button de avishay-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay01_sd.mp4', this)"></button>
      <div class="map-popup de avishay-station1-1">Avishay erzählt vom Leben seiner Familie und den Beginn ihrer Flucht.</div>
      <button class="map-button de avishay-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay02_sd.mp4', this)"></button>
      <div class="map-popup de avishay-station2-1">Avishay berichtet, wie seine Mutter und ihre Geschwister die Nazizeit überlebt haben.</div>
      <button class="map-button de avishay-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay03_sd.mp4', this)"></button>
      <div class="map-popup de avishay-station3-1">Avishay beschreibt, wie schwierig es in seiner Familie war, über die Erlebnisse im Holocaust zu sprechen.</div>
      <button class="map-button de avishay-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay04_sd.mp4', this)"></button>
      <div class="map-popup de avishay-station3-2">Avishay beschreibt die gemeinsame Zukunft von Juden und Deutschen.</div>
      
      <button class="map-button en avishay-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay01_sd_en.mp4', this)"></button>
      <div class="map-popup en avishay-station1-1">Avishay talks about stuff. It's interesting. Probably.</div>
      <button class="map-button en avishay-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay02_sd_en.mp4', this)"></button>
      <div class="map-popup en avishay-station2-1">Avishay talks about more stuff. It's probably still interesting.</div>
      <button class="map-button en avishay-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay03_sd_en.mp4', this)"></button>
      <div class="map-popup en avishay-station3-1">Avishay talks about even more stuff. Meh.</div>
      <button class="map-button en avishay-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay04_sd_en.mp4', this)"></button>
      <div class="map-popup en avishay-station3-2">Avishay is still talking... It's getting a little annoying.</div>
    </div>
  </div>

  <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
  <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>

  <script src="../scripts.js"></script>

  </body>
</html>