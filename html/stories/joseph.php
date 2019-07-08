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
      <div class="map-background" id="josef-map">
        <div id="video-popup">
          <div id="video-container"></div>
          <button id="video-close"></button>
        </div>
        <!--Die Reihenfolge der Klassen ist wichtig! Immer "map-button sprache name-stationnr-nr" bzw "map-popup sprache name-stationnr-nr"!-->
        <button class="map-button de josef-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef01_sd.mp4', this)"></button>
        <div class="map-popup de josef-station1-1"Josef erzählt von seiner Familie in Frankfurt / Main </div>

        <button class="map-button de josef-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef02_sd.mp4', this)"></button>
        <div class="map-popup de josef-station1-2"Josef berichtet von seiner Mutter und der Rettung dreier Kinder.</div>

        <button class="map-button de josef-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef03_sd.mp4', this)"></button>
        <div class="map-popup de josef-station1-3">Josef beschreibt  den Transport ins KZ Bergen-Belsen.</div>

        <button class="map-button de josef-station1-4" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
        <div class="map-popup de josef-station1-4">Josef erzählt von seinen schrecklichen Erlebnissen im Konzentrationslager.</div>

        <button class="map-button de josef-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
        <div class="map-popup de bella-station2-1">Josef findet nach seinen traumatischen Erlebnissen langsam zurück ins Leben.</div>

        <button class="map-button de josef-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
        <div class="map-popup de bella-station3-1">Josef berichtet von den schweren Anfangsjahren in Israel.</div>

        <button class="map-button de josef-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
        <div class="map-popup de josef-station3-2">Josef erzählt von seinem Leben in Jerusalem.</div>

        <button class="map-button de josef-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
        <div class="map-popup de josef-station3-3"Josef erinnert sich an seine Mutter und ihr Vermächtnis in seinem Leben</div>
        


        <button class="map-button en josef-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef01_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station1-1">Josef talks about his family in Frankfurt/Main. </div>

        <button class="map-button en josef-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef02_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station1-2">Josef talks about his mother and the rescue of him and his two siblings.</div>

        <button class="map-button en josef-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef03_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station1-3">Josef describes the transport to the concentration camp Bergen-Belsen.</div>

        <button class="map-button en josef-station1-4" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station1-4">Josef talks about the horrifying experiences in the concentration camp.</div>

        <button class="map-button en josef-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station2-1">Josef finds his way back to life after his very traumatic experiences. </div>

        <button class="map-button en josef-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station3-1">Josef talks about his first  years in Israel and his hardships.</div>

        <button class="map-button en josef-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station3-2">Josef talks about his life in in Jerusalem.</div>

        <button class="map-button en josef-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station3-3">Josef remembers his mother and her legacy in his life</div>
      </div>
    </div>

  <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
  <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>

  <script src="../scripts.js"></script>

  </body>
</html>