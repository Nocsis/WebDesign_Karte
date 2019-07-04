<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Josef Aaron</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../stylesheet.css">
    <script src="../scripts.js"></script>
  </head>

  <body>
  <?php include ("../html/header.php"); ?>

<div class="flex-container2">
  <div class="randlinks"></div>
    <div class="spalte1 IE-name"> 
      <span id="name1">&nbsp;Josef</span>
      <span id="name2">&nbsp;Aaron</span>
   </div>

   <div class="spalte2"></div>
   <div class="spalte3">
     <img src="../material/bilder/portraits/portraitJosef.png" alt="Portrait Josef" height="100%" width="90.91%">
   </div>
    <div class="spalte4"></div>
    <div class="IE-text de"> 	„Ich erzähle meine Geschichte. Weiter und weiter und es ist, … es ist schwer. Und es tut weh. Aber ich freue mich heute, dass ich die Geschichte  erzählen und weitergeben kann.“</div>
    <div class="IE-text en"> „I am going on telling my story. It is hard and it hurts. But I am happy that I can tell my story and share it with others.”</div>
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
      <strong>//</strong> &nbsp; Geboren am 5.5.1935 in Frankfurt am Main in einer Familie mit 11 Kindern <br>
      <strong>//</strong> &emsp; 1939 schickt ihn seine Mutter mit zwei Geschwistern nach Frankreich. Dort werden sie an verschiedenen Orten versteckt. <br>
      <strong>//</strong> &emsp; Nach seiner Befreiung wandert er in Israel ein. Er arbeitet lange Zeit als Kellner. <br></div>
      <strong>//</strong> &nbsp; Josef Aaron lebt heute in Jerusalem <br>
    <div class="IE-jahr en">
      <strong>//</strong> &nbsp; Born on 5.5.1935 in Frankfurt am Main in a family of eleven children <br>
      <strong>//</strong> &emsp; In 1939 his mother sends him and two other siblings to France. There they are hidden in different places.<br>
      <strong>//</strong> &emsp; In 1942 the SS finds them and they were brought to Bergen-Belsen.<br>
      <strong>//</strong> &nbsp; After his liberation and lengthy rehabilitation he immigrates to Israel. He works as a waiter.<br>
      <strong>//</strong> &nbsp; Josef Aaron lives in Jerusalem today.<br>
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