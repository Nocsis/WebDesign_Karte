<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <title>Tor nach Zion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/stylesheet.css">
  </head>

  <body>
      
    <?php include ("../header.php"); ?>

      <!--Name-->
      <div class="flex-container2">
        <div class="border-left"></div>
          <div id="ie-name"> 
            <span id="name1">&nbsp;Josef</span>
            <span id="name2">&nbsp;Aaron</span>
         </div> 

         <!--Portrait und Text-->
         <div class="column2"></div>
         <div class="column3">
         <img src="/material/bilder/portraits/portraitJosef.png" alt="Portrait Avishay" height="100%" width="90.91%">
         </div>
          <div class="column4"></div>
          <div class="ie-text de"> „Ich erzähle meine Geschichte. Weiter und weiter und es ist, … es ist schwer. Und es tut weh. Aber ich freue mich heute, dass ich die Geschichte  erzählen und weitergeben kann.“</div>
          <div class="ie-text en"> „I am going on telling my story. It is hard and it hurts. But I am happy that I can tell my story and share it with others.”</div>
          <div class="border-right"></div>
      </div>

        <div class="flex-container3">
          <div class="blank"></div>
        </div>

        <div class="flex-container4">
          <div class="border-left"></div>
          <div class="line"></div>
          <div class="column4"></div>
          <div class="line2"></div>
          <div class="border-right"></div>
        </div>

        <!--Jahre-->
        <div class="flex-container5">
          <div class="border-left"></div>
          <div class="ie-statement"></div>
          <div class="column4"></div>
          <div class="ie-year de">
          <strong>// </strong> &nbsp; Geboren am 5.5.1935 in Frankfurt am Main in einer Familie mit 11 Kindern. <br>
       <strong>// </strong> &emsp; 1939 schickt ihn seine Mutter mit zwei Geschwistern nach Frankreich. Dort werden sie an verschiedenen Orten versteckt. <br>
       <strong>// </strong> &emsp; 1942 findet sie die SS, die Kinder werden nach Bergen-Belsen gebracht.<br>
       <strong>// </strong> &emsp; Nach seiner Befreiung wandert er in Israel ein. Er arbeitet lange Zeit als Kellner.<br>
       <strong>// </strong> &emsp; Josef Aaron lebt heute in Jerusalem.<br></div>

          <div class="ie-year en">
          <strong>//  </strong> &nbsp; Born on 5.5.1935 in Frankfurt am Main in a family of eleven children <br>
       <strong>//  </strong> &emsp;	In 1939 his mother sends him and two other siblings to France. There they are hidden in different places.  <br>
       <strong>// </strong> &emsp; In 1942 the SS finds them and they were brought to Bergen-Belsen. <br>
       <strong>// </strong> &emsp; After his liberation and lengthy rehabilitation he immigrates to Israel. He works as a waiter. <br>
       <strong>// </strong> &emsp; Josef Aaron lives in Jerusalem today. <br>
          </div>
          <div class="border-right"></div>
        </div>

        <div class="flex-container6">
            <div class="blank"></div>
        </div>
          
        <div class="flex-container7">
          <div class="border-left"></div>
          <div class="line3"></div>
          <div class="column4"> </div>
          <div class="line4"></div>
          <div class="border-right"></div>
        </div>

        <div class="flex-container8">
            <div class="blank"></div>
        </div>

        <div class="flex-container8">
            <div class="blank"></div>
        </div>

        <!--Map und Video Zeug-->  
        <div id="section2">
      <div class="map-background" id="josef-map">
        <div id="video-popup">
          <div id="video-container"></div>
          <button id="video-close"></button>
        </div>
        <!--Die Reihenfolge der Klassen ist wichtig! Immer "map-button sprache name-stationnr-nr" bzw "map-popup sprache name-stationnr-nr"!-->
        <button class="map-button de josef-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef01_sd.mp4', this)"></button>
        <div class="map-popup de josef-station1-1">Josef erzählt von seiner Familie in Frankfurt / Main </div>

        <button class="map-button de josef-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef02_sd.mp4', this)"></button>
        <div class="map-popup de josef-station2-1">Josef berichtet von seiner Mutter und der Rettung dreier Kinder.</div>

        <button class="map-button de josef-station2-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef03_sd.mp4', this)"></button>
        <div class="map-popup de josef-station2-2">Josef beschreibt  den Transport ins KZ Bergen-Belsen.</div>

        <button class="map-button de josef-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
        <div class="map-popup de josef-station3-1">Josef erzählt von seinen schrecklichen Erlebnissen im Konzentrationslager.</div>

        <button class="map-button de josef-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
        <div class="map-popup de bella-station3-2">Josef findet nach seinen traumatischen Erlebnissen langsam zurück ins Leben.</div>

        <button class="map-button de josef-station4-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
        <div class="map-popup de bella-station4-1">Josef berichtet von den schweren Anfangsjahren in Israel.</div>

        <button class="map-button de josef-station4-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
        <div class="map-popup de josef-station4-2">Josef erzählt von seinem Leben in Jerusalem.</div>

        <button class="map-button de josef-station4-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
        <div class="map-popup de josef-station4-3">Josef erinnert sich an seine Mutter und ihr Vermächtnis in seinem Leben</div>
        


        <button class="map-button en josef-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef01_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station1-1">Josef talks about his family in Frankfurt/Main. </div>

        <button class="map-button en josef-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef02_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station2-1">Josef talks about his mother and the rescue of him and his two siblings.</div>

        <button class="map-button en josef-station2-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef03_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station2-2">Josef describes the transport to the concentration camp Bergen-Belsen.</div>

        <button class="map-button en josef-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station3-1">Josef talks about the horrifying experiences in the concentration camp.</div>

        <button class="map-button en josef-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station3-2">Josef finds his way back to life after his very traumatic experiences. </div>

        <button class="map-button en josef-station4-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station-4-1">Josef talks about his first  years in Israel and his hardships.</div>

        <button class="map-button en josef-station4-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station4-2">Josef talks about his life in in Jerusalem.</div>

        <button class="map-button en josef-station4-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
        <div class="map-popup en josef-station4-3">Josef remembers his mother and her legacy in his life</div>
      </div>
    </div>

  <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
  <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>

  <script src="/scripts.js"></script>
      
  </body>

  </html>