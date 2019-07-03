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
        <img src="/material/bilder/portraits/portraitAvishay.jpg" alt="Portrait Avishay" height="100%" width="90.91%">
      </div>

      <div id="text" class="de">
        >>Ich sage immer, man muss sich um die Lebenden kümmern, nicht um die Toten.<<
      </div>

      <div id="text" class="en">
        >>I always say that you have to focus to the living and not to the dead.<<
      </div>

      <div class="s"></div>
      <div class="s2"></div>
      <div class="s3"></div>
      <div class="s4"></div>

      <div id="year" class="de">
       <strong>// </strong> &nbsp; Geboren am 12.12.1931 in Berlin als Karla Rothstein. <br>
       <strong>// </strong> &emsp; 1939 wird sie zusammen mit ihrer Schwester auf einen Kindertransport nach England geschickt; sie sieht ihre Eltern das letzte Mal. <br>
       <strong>// </strong> &emsp; In England lebt sie in einem Kinderheim in Manchester.  <br>
       <strong>// </strong> &nbsp; Karla wandert 1951 in Israel ein, gründet eine Familie und bekommt zwei Kinder. Sie arbeitet vorwiegend als Krankenschwester. <br>
      </div>

      <div id="year" class="en">
       <strong>// </strong> &nbsp; Born on 12.12.1931 in Berlin as Karla Rothstein <br>
       <strong>// </strong> &emsp; In 1939 she is sent on a Kindertransport to England together with her sister; she sees her parents for the last time. <br>
       <strong>// </strong> &emsp; In England she is sent to a Kinderheim in Manchester <br>
       <strong>// </strong> &emsp; Karla emigrates to Israel in 1951 and marries Abraham Pilpel. They have two sons. <br>
       <strong>// </strong> &nbsp; Karla works as a nurse. She lives in Jerusalem today. <br>
      </div>
    </div>

<!--Bis hier nicht weiter!-->
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