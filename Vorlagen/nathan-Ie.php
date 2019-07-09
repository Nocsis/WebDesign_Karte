<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <title>Tor nach Zion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../stylesheet.css">
  </head>

  <body>
      
    <?php include ("../html/header.php"); ?>

      <!--Name-->
      <div class="flex-container2">
        <div class="border-left"></div>
          <div id="ie-name"> 
            <span id="name1">&nbsp;Nathan</span>
            <span id="name2">&nbsp;Friedman</span>
         </div> 

         <!--Portrait und Text-->
         <div class="column2"></div>
         <div class="column3">
           <img src="../material/bilder/portraits/portraitAvishay.jpg" alt="Portrait Avishay" height="100%" width="90.91%">
         </div>
          <div class="column4"></div>
          <div class="ie-text de"> „Nachts träume ich oft. Immer bin ich an einem Ort und weiß nicht, wie ich 	dort weg komme. Ich laufe dahin und dorthin und komme nicht raus. Nach so	vielen Jahren, nach 70 Jahren. Das ist nicht einfach. Aber ich lebe! Ich habe	ein gutes Leben!“</div>
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
          <strong>// </strong> &nbsp; Geboren ca. 1933 in Warschau. <br>
       <strong>// </strong> &emsp; Er kommt mit seiner Familie im Jahr 1940 ins Warschauer Ghetto. Dort stirbt seine Mutter an Typhus und wird sein Vater verschleppt.<br>
       <strong>// </strong> &emsp; Ihm selbst gelingt die Flucht. Er versteckt sich bis 1944 bei polnischen Familien.<br>
       <strong>// </strong> &emsp; Nach einem gescheiterten Versuch (mit dem Schiff „Exodus“) wandert er 1948 in Israel ein. Dort heiratet er seine Frau und gründet eine Familie.<br>
       <strong>// </strong> &emsp; Nathan starb im Oktober 2017.<br></div>

          <div class="ie-year en">
          <strong>//  </strong> &nbsp;	Born 1933 in Warsaw, Poland.<br>
       <strong>//  </strong> &emsp;	He comes to the Warsaw Ghetto with his family in 1940. His mother dies 1941 from Typhus. His father disappears one day.<br>
       <strong>// </strong> &emsp; His aunt smuggles him out of the ghetto. During the Holocaust, Nathan is hiding at different Polish people.<br>
       <strong>// </strong> &emsp; Nathan goes to Palestine with the Exodus in 1947. The Exodus is sent back to Hamburg. On the 14th of May 1948 Nathan finally arrives in Israel.<br>
       <strong>// </strong> &emsp; He gets married and has a family of his own.<br>
       <strong>//  </strong> &nbsp; Nathan died in October 2017.<br>
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

        <!--Map und Video Zeug-->  
        <div id="section2">
      <div class="map-background" id="bella-map">
        <div id="video-popup">
          <div id="video-container"></div>
          <button id="video-close"></button>
        </div>
        <!--Die Reihenfolge der Klassen ist wichtig! Immer "map-button sprache name-stationnr-nr" bzw "map-popup sprache name-stationnr-nr"!-->
        <button class="map-button de nathan-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan01_sd.mp4', this)"></button>
        <div class="map-popup de nathan-station1-1">Nathan beschreibt seine Kindheit 
im Warschau der Vorkriegszeit.

</div>

        <button class="map-button de nathan-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan02_sd.mp4', this)"></button>
        <div class="map-popup de nathan-station1-2">Nathan erzählt vom Leben der Juden im Warschauer Ghetto</div>

        <button class="map-button de nathan-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan03_sd.mp4', this)"></button>
        <div class="map-popup de nathan-station1-3">Nathan flieht aus dem Warschauer Ghetto und versteckt sich bis Kriegsende. </div>

        <button class="map-button de nathan-station1-4" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan04_sd.mp4', this)"></button>
        <div class="map-popup de nathan-station1-4">Nathan erlebt auch nach dem Krieg Verfolgung von Juden.</div>

        <button class="map-button de nathan-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan04_sd.mp4', this)"></button>
        <div class="map-popup de nathan-station2-1">Nathan fährt mit dem Schiff „Exodus“ nach Israel und erlebt  große Schwierigkeiten bei der Einwanderung.</div>

        <button class="map-button de nathan-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan04_sd.mp4', this)"></button>
        <div class="map-popup de nathan-station3-1">Nathan erzählt von seiner Familie, seiner Frau und seinem Studium in Israel.</div>

        <button class="map-button de nathan-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan04_sd.mp4', this)"></button>
        <div class="map-popup de nathan-station3-2">Nathan denkt über seine eigene Kindheit und über seine Enkelkinder nach.</div>
        


        <button class="map-button en nathan-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan01_sd_en.mp4', this)"></button>
        <div class="map-popup en nathan-station1-1">Nathan describes his childhood in Warsaw before the war.</div>

        <button class="map-button en nathan-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan02_sd_en.mp4', this)"></button>
        <div class="map-popup en nathan-station1-2">Nathan talks about the life of the Jews in Warsaw Ghetto.</div>

        <button class="map-button en nathan-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan03_sd_en.mp4', this)"></button>
        <div class="map-popup en nathan-station1-3">Nathan flees from the Warsaw Ghetto and hides until the end of the war. </div>

        <button class="map-button en nathan-station1-4" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan04_sd_en.mp4', this)"></button>
        <div class="map-popup en nathan-station1-4">Nathan speaks about is his experiences of persecution of Jews after the war.</div>

        <button class="map-button en nathan-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan04_sd_en.mp4', this)"></button>
        <div class="map-popup en nathan-station2-1">Nathan boards  „Exodus“, the ship that will bring him to Israel and speaks of his difficulties to immigrate to Israel. </div>

        <button class="map-button en nathan-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan04_sd_en.mp4', this)"></button>
        <div class="map-popup en nathan-station3-1">Nathan talks about his family, his wife and his studies in Israel.</div>

        <button class="map-button en nathan-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan04_sd_en.mp4', this)"></button>
        <div class="map-popup en nathan-station3-2">Nathan talks about his own childhood as well as the childhood of his grandchildren. </div>
      </div>
    </div>

  <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
  <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>

  <script src="../scripts.js"></script>
      
  </body>

  </html>