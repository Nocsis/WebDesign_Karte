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
      <span id="name1">&nbsp;Stefanie</span>
      <span id="name2">&nbsp;Segerman</span>
   </div>

   <div class="spalte2"></div>
   <div class="spalte3">
     <img src="../material/bilder/portraits/portraitAvishay.jpg" alt="Portrait Avishay" height="100%" width="90.91%">
   </div>
    <div class="spalte4"></div>
    <div class="IE-text de"> 	„Es fiel mir nie schwer, darüber zu reden. So ist das Leben - gut und schlecht. Man muss sich ich ihm stellen.“</div>
    <div class="IE-text en"> „I never found it hard to talk about my life. That is life – good and bad. You need to deal with it.“</div>
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
      <strong>//</strong> &nbsp; Stefanie (Steffi) wird am 10.04.1928 in Leipzig in einer Kaufmannsfamilie geboren. <br>
      <strong>//</strong> &emsp; Sie wird mit dem Kindertransport nach England geschickt. Dort kommt sie bei einer liebevollen Familie unter.<br>
      <strong>//</strong> &emsp; Ihr Vater wird im KZ Theresienstadt ermordet und ihre Mutter stirbt dort an Tuberkulose. <br></div>
      <strong>//</strong> &nbsp; 1949 wandert sie in Israel ein. Dort lebt sie im Kibbutz Kfar Blum, wo sie auch heute noch mit Kindern, Enkeln und Urenkeln lebt. <br>
    <div class="IE-jahr en">
      <strong>//</strong> &nbsp; Stefanie (Steffi) was born on 10.04.1928 in Leipzig <br>
      <strong>//</strong> &emsp; Her father is the owner of “Bamberger & Hertz” in Leipzig.  <br>
      <strong>//</strong> &emsp; Steffi is sent on the Kindertransport to England. A lovely family takes care of Steffi.<br>
      <strong>//</strong> &nbsp; Her father is murdered in Theresienstadt and her mother dies from tuberculosis. <br>
      <strong>//</strong> &nbsp; In 1949 she emigrates to Israel. There she goes to Kibbutz Kfar Blum, where she still lives happily with her large family today. <br>
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