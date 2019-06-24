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
        <span id="name3">
          &nbsp;über
        </span>
        <span id="name4">
          &nbsp;seine Mutter
        </span>
      </div>

      <div id="bild">
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

      <div id="jahr" class="de">
       <strong>// &nbsp; 1930er</strong> &nbsp; Kindheit in Leipzig <br>
       <strong>// &nbsp; 1939</strong> &emsp; Flucht in die Niederlande bei Kriegsausbruch <br>
       <strong>// &nbsp; 1945</strong> &emsp; Weg nach Israel <br>
      </div>

      <div id="jahr" class="en">
       <strong>// &nbsp; 1930ies</strong> &nbsp; childhood in Leipzig <br>
       <strong>// &nbsp; 1939</strong> &emsp; escape to the Netherlands at start of war <br>
       <strong>// &nbsp; 1945</strong> &emsp; path towards Israel <br>
      </div>
    </div>

    <div id="section2">
      <div class="mapBG" id="avishayMap">
        <div id="videoPopup">
          <div id="videoContainer"></div>
          <button id="videoClose"></button>
        </div>
        <button class="mapButton de" id="avishayStation1-1" onclick="popupVideo('/material/videos/avishay01_sd.mp4')"></button>
        <button class="mapButton de" id="avishayStation1-2" onclick="popupVideo('/material/videos/avishay02_sd.mp4')"></button>
        <button class="mapButton de" id="avishayStation2-1" onclick="popupVideo('/material/videos/avishay03_sd.mp4')"></button>
        <button class="mapButton de" id="avishayStation3-1" onclick="popupVideo('/material/videos/avishay04_sd.mp4')"></button>

        <button class="mapButton en" id="avishayStation1-1" onclick="popupVideo('/material/videos/avishay01_sd_en.mp4')"></button>
        <button class="mapButton en" id="avishayStation1-2" onclick="popupVideo('/material/videos/avishay01_sd_en.mp4')"></button>
        <button class="mapButton en" id="avishayStation2-1" onclick="popupVideo('/material/videos/avishay01_sd_en.mp4')"></button>
        <button class="mapButton en" id="avishayStation3-1" onclick="popupVideo('/material/videos/avishay01_sd_en.mp4')"></button>
      </div>
    </div>

    <button class="scrollButton" id="downButton" onclick="scrollToBottom()"></button>
    <button class="scrollButton" id="upButton" onclick="scrollToTop()"></button>

    <script src="/scripts.js"></script>
  </body>
  </body>
</html>