<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <title>Avishay Golz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/stylesheet.css">
  </head>

  <body>
    <?php include ("../header.php"); ?>

    <div class="grid-container" >

      <div id="name">
        <span id="name1">
          &nbsp;Avishay
        </span>
        <span id="name2">
          &nbsp;Golz
        </span>
      </div>

      <div id="portrait">
        <img src="/material/bilder/portraits/portraitAvishay.jpg" alt="Portrait Avishay" height="100%" width="90.91%">
      </div>

      <div id="text" class="de">
        >>Wenn du deine Vergangenheit nicht kennst, hast du keine Gegenwart und deine Zukunft ist sehr unklar.<<
      </div>

      <div id="text" class="en">
        >>When you don't know your past, you do not have a present and your future is very unclear.<<
      </div>

      <div class="s"></div>
      <div class="s2"></div>
      <div class="s3"></div>
      <div class="s4"></div>

      <div id="year" class="de">
       <strong>// &nbsp; 1930er</strong> &nbsp; Kindheit in Leipzig <br>
       <strong>// &nbsp; 1939</strong> &emsp; Flucht in die Niederlande bei Kriegsausbruch <br>
       <strong>// &nbsp; 1945</strong> &emsp; Weg nach Israel <br>
      </div>

      <div id="year" class="en">
       <strong>// &nbsp; 1930s</strong> &nbsp; childhood in Leipzig <br>
       <strong>// &nbsp; 1939</strong> &emsp; escape to the Netherlands at start of war <br>
       <strong>// &nbsp; 1945</strong> &emsp; path towards Israel <br>
      </div>
    </div>

    <div id="section2">
    <div class="map-background" id="bella-map">
        <div id="video-popup">
          <div id="video-container"></div>
          <button id="video-close"></button>
        </div>
        <!--Die Reihenfolge der Klassen ist wichtig! Immer "map-button sprache name-stationnr-nr" bzw "map-popup sprache name-stationnr-nr"!-->
        <button class="map-button de bella-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella01_sd.mp4', this)"></button>
        <div class="map-popup de bella-station1-1">Bella 1-1</div>

        <button class="map-button de bella-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella02_sd.mp4', this)"></button>
        <div class="map-popup de bella-station1-2">Bella 1-2</div>

        <button class="map-button de bella-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella03_sd.mp4', this)"></button>
        <div class="map-popup de bella-station1-3">Bella 1-3</div>

        <button class="map-button de bella-station1-4" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
        <div class="map-popup de bella-station1-4">Bella 1-4</div>

        <button class="map-button de bella-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
        <div class="map-popup de bella-station2-1">Bella 2-1</div>

        <button class="map-button de bella-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
        <div class="map-popup de bella-station3-1">Bella 3-1</div>

        <button class="map-button de bella-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
        <div class="map-popup de bella-station3-2">Bella 3-2</div>

        <button class="map-button de bella-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
        <div class="map-popup de bella-station3-3">Bella 3-3</div>
        


        <button class="map-button en bella-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella01_sd_en.mp4', this)"></button>
        <div class="map-popup en bella-station1-1">Bella 1-1</div>

        <button class="map-button de bella-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella02_sd_en.mp4', this)"></button>
        <div class="map-popup de bella-station1-2">Bella 1-2</div>

        <button class="map-button de bella-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella03_sd.mp4', this)"></button>
        <div class="map-popup de bella-station1-3">Bella 1-3</div>

        <button class="map-button de bella-station1-4" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
        <div class="map-popup de bella-station1-4">Bella 1-4</div>

        <button class="map-button de bella-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
        <div class="map-popup de bella-station2-1">Bella 2-1</div>

        <button class="map-button de bella-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
        <div class="map-popup de bella-station3-1">Bella 3-1</div>

        <button class="map-button de bella-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
        <div class="map-popup de bella-station3-2">Bella 3-2</div>

        <button class="map-button de bella-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
        <div class="map-popup de bella-station3-3">Bella 3-3</div>
      </div>
    </div>

    <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
    <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>

    <script src="/scripts.js"></script>
  </body>
</html>