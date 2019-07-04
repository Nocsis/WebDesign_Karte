<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <title>Karla Pilpel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/stylesheet.css">
  </head>

  <body>
    <?php include ("../header.php"); ?>

    <div class="grid-container" >

      <div id="name">
        <span id="name1">
          &nbsp;Karla
        </span>
        <span id="name2">
          &nbsp;Pilpel
        </span>
      </div>

      <div id="portrait">
        <img src="/material/bilder/portraits/portraitKarla.jpg" alt="Portrait Karla" height="100%" width="90.91%">
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
    <div class="map-background" id="karla-map">
        <div id="video-popup">
          <div id="video-container"></div>
          <button id="video-close"></button>
        </div>
        <!--Die Reihenfolge der Klassen ist wichtig! Immer "map-button sprache name-stationnr-nr" bzw "map-popup sprache name-stationnr-nr"!-->
        <button class="map-button de karla-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla01_sd.mp4', this)"></button>
        <div class="map-popup de karla-station1-1">Karla erzählt von ihren Eltern und ihrem Kindermädchen.</div>

        <button class="map-button de karla-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla02_sd.mp4', this)"></button>
        <div class="map-popup de karla-station1-2">Karla beschreibt die Ereignisse in Berlin im Herbst 1938.</div>

        <button class="map-button de karla-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla03_sd.mp4', this)"></button>
        <div class="map-popup de karla-station1-3">Karla berichtet vom Abschied von ihren Eltern und der Fahrt ins Kinderexil.</div>

        <button class="map-button de karla-station2-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
        <div class="map-popup de karla-station1-4">Karla erzählt vom harten Leben in ihrer Pflegefamilie.</div>

        <button class="map-button de karla-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
        <div class="map-popup de karla-station2-1">Karla berichtet von den Umständen ihrer Einwanderung in Israel.</div>

        <button class="map-button de karla-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
        <div class="map-popup de karla-station3-1">Karla beschreibt das anfängliche Leben im Kibbutz.</div>

        <button class="map-button de karla-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
        <div class="map-popup de karla-station3-2">Karla verdeutlicht, wie wichtig es ist, über den Holocaust zu sprechen.</div>

        <button class="map-button de karla-station3-4" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
        <div class="map-popup de karla-station3-3">Karla berichtet von den Auswirkungen des Holocaust in ihrem Leben.</div>
        


        <button class="map-button en karla-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla01_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station1-1">Karla talks about her parents and her nanny.</div>

        <button class="map-button en karla-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla02_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station1-2">Karla describes the events in Berlin in autumn 1938.</div>

        <button class="map-button en karla-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla03_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station1-3">Karla talks about her parting from her parents and her journey on the Kindertransport.</div>

        <button class="map-button en karla-station2-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station1-4">Karla talks about her life in the foster family and the difficulties there. </div>

        <button class="map-button en karla-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station2-1">Karla talks about the circumstances of her immigration to Israel.</div>

        <button class="map-button en karla-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station3-1">Karla describes her first years in a Kibbutz.</div>

        <button class="map-button en karla-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station3-2">Karla emphasizes how important it is to talk about the Holocaust.</div>

        <button class="map-button en karla-station3-4" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station3-3">Karla talks about the impact of  the Holocaust on her own life.</div>
      </div>
    </div>

    <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
    <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>

    <script src="/scripts.js"></script>
  </body>
</html>