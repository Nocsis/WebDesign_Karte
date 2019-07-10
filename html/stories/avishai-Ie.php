<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <title>Tor nach Zion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/stylesheet.css">
  </head>

  <body>
      
    <?php include ("../html/header.php"); ?>

      <!--Name-->
      <div class="flex-container2">
        <div class="border-left"></div>
          <div id="ie-name"> 
            <span id="name1">&nbsp;Avishai</span>
            <span id="name2">&nbsp;Golz</span>
            <span class="de"id="name3">&nbsp;über</span>
            <span class="en" id="name3">&nbsp;talking about</span>
            <span class="de"id="name4">&nbsp;seine Mutter</span>
            <span class="en" id="name4">&nbsp;his mother</span> 
         </div> 

         <!--Portrait und Text-->
         <div class="column2"></div>
         <div class="column3">
           <img src="../material/bilder/portraits/portraitAvishay.jpg" alt="Portrait Avishay" height="100%" width="90.91%">
         </div>
          <div class="column4"></div>
          <div class="ie-text de"> >>Wenn du deine Vergangenheit nicht kennst, hast du keine Gegenwart und deine Zukunft ist sehr unklar.<<</div>
          <div class="ie-text en"> >>If you don’t know your past, you don’t have a present and your future is very vague.”<<</div>
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
            <strong>//</strong> &emsp; Geboren am 9.9.1949 in Haifa. <br>
            <strong>//</strong> &emsp; Die Mutter von Avishay Golz, wird als Edith Gutter in Leipzig geboren. Sie wird als junges Mädchen von ihrer Familie in die Schweiz geschickt. Später trifft sich die Familie in Holland wieder. <br>
            <strong>//</strong> &emsp; Edith Gutter wird von einer Bauernfamilie in Holland versteckt und überlebt den Holocaust. Ihre Eltern werden in Sobibor ermordet.<br>
            <strong>//</strong> &emsp; Nach dem Krieg lernt sie ihren Mann kennen und wandert mit ihm in Israel ein.<br>
            <strong>//</strong> &emsp; Avishay Golz lebt heute in Haifa.<br>
          <div class="ie-year en">
            <strong>//</strong> &emsp; Born on 9.9.1949 in Haifa. <br>
            <strong>//</strong> &emsp; The mother of Avishay Golz was born as Edith Gutter in Leipzig. <br>
            <strong>//</strong> &emsp; The grandfather sends Edith to Switzerland. Later she comes to Holland, is hidden by a farming family in rural Holland and survives the Holocaust. The parents of Edith are murdered in Sobibor.<br>
            <strong>//</strong> &emsp; After the war she meets her husband. She follows him to Israel. <br>
            <strong>//</strong> &emsp; Avishay today lives in Haifa. <br>
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
            <div class="map-popup en avishay-station1-1">Avishay talks about the life of his family and their flight from Germany.</div>
            <button class="map-button en avishay-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay02_sd_en.mp4', this)"></button>
            <div class="map-popup en avishay-station2-1">Avishay talks about how his mother and her siblings survived the Holocaust.</div>
            <button class="map-button en avishay-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay03_sd_en.mp4', this)"></button>
            <div class="map-popup en avishay-station3-1">Avishay describes how difficult it has been to talk about what happened during the Holocaust in his family.</div>
            <button class="map-button en avishay-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/avishay04_sd_en.mp4', this)"></button>
            <div class="map-popup en avishay-station3-2">Avishay describes the  common future of Jews and Germans.</div>
          </div>
        </div>
    
        <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
        <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>
    
        <script src="../scripts.js"></script>
      
  </body>

  </html>