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
        >>I have never spoken about my past. I wouldn’t be able to live if I would always think about my past.<<
  </div>

  <div class="s"></div>
      <div class="s2"></div>
      <div class="s3"></div>
      <div class="s4"></div>

  <div id="year" class="de">
       <strong>// </strong> &nbsp; Bella (Zahava) Katz wird am 2.9.1924 in Leipzig als Beate Reichardt geboren. <br>
       <strong>// </strong> &emsp; Mit 17 Jahren schicken ihre Eltern sie erst nach Wien, später nach Prag zum Studium und um sich bei Bekannten zu verstecken. Später flieht sie nach Jugoslawien, wo sie sich bei Bauersfamilien vor den Nazis versteckt. <br>
       <strong>// </strong> &emsp; Nach dem Krieg lernt sie ihren Mann kennen und kehrt mit ihm nach Deutschland zurück. Sie helfen Juden bei der Einwanderung ins britische Mandatsgebiet Palästina. <br>
       <strong>// </strong> &emsp; 1949 wandern sie selbst mit ihrer einjährigen Tochter in Israel ein. <br>
       <strong>// </strong> &nbsp; Ron Stern ist ihr Enkel.<br>
  </div>

  <div id="year" class="en">
       <strong>// </strong> &nbsp; Bella (Zahava) Katz was born on 2.9.1924 in Leipzig as Beate Reichardt.<br>
       <strong>// </strong> &emsp; At the age of 17 her parents send her first to Vienna and later on to Prague to study.<br>
       <strong>// </strong> &emsp; Later she flees to Yugoslavia where she hides with other young Jews at farmers families from the Nazis.<br>
       <strong>// </strong> &emsp; After the war she hitchhikes back to Germany and meets her husband Mandel Katz.<br>
       <strong>// </strong> &emsp; Both flee to the western sector of Germany and help to smuggle Jews to Palestine that belonged at this time to the British Mandate.<br>
       <strong>// </strong> &emsp; In 1949 she emigrates to Israel with her husband and her daughter Lea.<br>
       <strong>// </strong> &emsp; Ron Stern is her grandson.<br>
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
        <div class="map-popup en bella-station1-1">Avishay talks about stuff. It's interesting. Probably.</div>
        <button class="map-button en bella-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella02_sd_en.mp4', this)"></button>
        <div class="map-popup en bella-station2-1">Avishay talks about more stuff. It's probably still interesting.</div>
        <button class="map-button en bella-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella03_sd_en.mp4', this)"></button>
        <div class="map-popup en bella-station3-1">Avishay talks about even more stuff. Meh.</div>
        <button class="map-button en bella-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd_en.mp4', this)"></button>
        <div class="map-popup en bella-station3-2">Avishay is still talking... It's getting a little annoying.</div>
      </div>
    </div>

    <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
    <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>

    <script src="/scripts.js"></script>

  </body>
</html>