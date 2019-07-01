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
        <span class="de" id="name3">
          &nbsp;über
        </span>
        <span class="en" id="name3">
          &nbsp;talking about
        </span>
        <span class="de" id="name4">
          &nbsp;seine Mutter
        </span>
        <span class="en" id="name4">
          &nbsp;his mother
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
      <div class="map-background" id="avishay-map">
        <div id="video-popup">
          <div id="video-container"></div>
          <button id="video-close"></button>
        </div>
        <!--Die Reihenfolge der Klassen ist wichtig! Immer "map-button sprache name-station-nr-nr" bzw "map-popup sprache name-station-nr-nr"!-->
        <button class="map-button de avishay-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay01_sd.mp4', this)"></button>
        <div class="map-popup de avishay-station1-1">Avishay erzählt Zeug. Ist bestimmt ganz interessant.</div>
        <button class="map-button de avishay-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay02_sd.mp4', this)"></button>
        <div class="map-popup de avishay-station1-2">Avishay erzählt mehr Zeug. Bestimmt immernoch ganz interessant.</div>
        <button class="map-button de avishay-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay03_sd.mp4', this)"></button>
        <div class="map-popup de avishay-station2-1">Avishay erzählt noch mehr Zeug. Meh.</div>
        <button class="map-button de avishay-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay04_sd.mp4', this)"></button>
        <div class="map-popup de avishay-station3-1">Avishay erzählt immernoch... Langsam wird's langweilig.</div>
        
        <button class="map-button en avishay-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay01_sd_en.mp4', this)"></button>
        <div class="map-popup en avishay-station1-1">Avishay talks about stuff. It's interesting. Probably.</div>
        <button class="map-button en avishay-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay01_sd_en.mp4', this)"></button>
        <div class="map-popup en avishay-station1-2">Avishay talks about more stuff. It's probably still interesting.</div>
        <button class="map-button en avishay-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay01_sd_en.mp4', this)"></button>
        <div class="map-popup en avishay-station2-1">Avishay talks about even more stuff. Meh.</div>
        <button class="map-button en avishay-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay01_sd_en.mp4', this)"></button>
        <div class="map-popup en avishay-station3-1">Avishay is still talking... It's getting a little annoying.</div>
      </div>
    </div>

    <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
    <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>

    <script src="/scripts.js"></script>
  </body>
  </body>
</html>