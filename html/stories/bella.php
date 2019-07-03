<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Bella Katz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/stylesheet.css">
    
  </head>

  <body>
    
  <?php include ("../header.php"); ?>

  <div class="grid-container" >

  <div id="name">
    <span id="name1">
      &nbsp;Bella
    </span>
    <span id="name2">
      &nbsp;Katz
    </span> 
  </div>

  <div id="portrait">
        <img src="/material/bilder/portraits/portraitBella.jpeg" alt="Portrait Bella" height="100%" width="90.91%">
  </div>

  <div id="text" class="de">
        >>Ich habe nie gesprochen über die Vergangenheit,nie. Ich könnte gar nicht weiterleben, wenn ich immer nur an die Vergangenheit denken würde.<<
  </div>

  <div id="text" class="en">
        >>I never talked about the past, never. I could not live on anymore if I would always think of the past.<<
  </div>

  <div class="s"></div>
      <div class="s2"></div>
      <div class="s3"></div>
      <div class="s4"></div>

  <div id="year" class="de">
       <strong>// &nbsp; 1930er</strong> &nbsp; Kindheit in Leipzig <br>
       <strong>// &nbsp; 1940-1945</strong> &emsp; Exil in Jugoslavien <br>
       <strong>// &nbsp; 1945</strong> &emsp; Rückkehr nach Leipzig <br>
       <strong>// &nbsp; 1948</strong> &emsp; Weg nach Israel <br>
  </div>

  <div id="year" class="en">
       <strong>// &nbsp; 1930s</strong> &nbsp; childhood in Leipzig <br>
       <strong>// &nbsp; 1940-1945</strong> &emsp; exile in Yugoslavia <br>
       <strong>// &nbsp; 1945</strong> &emsp; return to Leipzig <br>
       <strong>// &nbsp; 1948</strong> &emsp; path towards Israel <br>
  </div>
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

    <script src="/scripts.js"></script>

  </body>
</html>