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
      <span id="name1">&nbsp;Nathan</span>
      <span id="name2">&nbsp;Friedman</span>
   </div>

   <div class="spalte2"></div>
   <div class="spalte3">
     <img src="../material/bilder/portraits/portraitAvishay.jpg" alt="Portrait Avishay" height="100%" width="90.91%">
   </div>
    <div class="spalte4"></div>
    <div class="IE-text de"> 	„Nachts träume ich oft. Immer bin ich an einem Ort und weiß nicht, wie ich 	dort weg komme. Ich laufe dahin und dorthin und komme nicht raus. Nach so 	vielen Jahren, nach 70 Jahren. Das ist nicht einfach. Aber ich lebe! Ich habe 	ein gutes Leben!“</div>
    <div class="IE-text en"> “At night I dream a lot. I always stuck in the same place and I don’t know how to get away from there. I try to walk in different directions but I can’t get out of there. I’ll keep dreaming after so many years. This isn’t easy. But I’ll keep on living! I have a good life!”</div>
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
      <strong>//</strong> &nbsp; Geboren ca. 1933 in Warschau <br>
      <strong>//</strong> &emsp; Er kommt mit seiner Familie im Jahr 1940 ins Warschauer Ghetto. Dort stirbt seine Mutter an Typhus und wird sein Vater verschleppt.<br>
      <strong>//</strong> &emsp; Ihm selbst gelingt die Flucht. Er versteckt sich bis 1944 bei polnischen Familien<br></div>
      <strong>//</strong> &nbsp; Nach einem gescheiterten Versuch (mit dem Schiff „Exodus“) wandert er 1948 in Israel ein. Dort heiratet er seine Frau und gründet eine Familie. <br>
      <strong>//</strong> &nbsp; Nathan starb im Oktober 2017.<br>
    <div class="IE-jahr en">
      <strong>//</strong> &nbsp; Born 1933 in Warsaw, Poland <br>
      <strong>//</strong> &emsp; He comes to the Warsaw Ghetto with his family in 1940. His mother dies 1941 from Typhus. His father disappears one day. <br>
      <strong>//</strong> &emsp; His aunt smuggles him out of the ghetto. During the Holocaust, Nathan is hiding at different Polish people.  <br>
      <strong>//</strong> &nbsp; Nathan goes to Palestine with the Exodus in 1947. The Exodus is sent back to Hamburg. On the 14th of May 1948 Nathan finally arrives in Israel.  <br>
      <strong>//</strong> &nbsp; He gets married and has a family of his own. <br>
      <strong>//</strong> &nbsp; Nathan died in October 2017. <br>
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