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
        <div class="randlinks"></div>
          <div id="IE-name"> 
            <span id="name1">&nbsp;Avishai</span>
            <span id="name2">&nbsp;Golz</span>
            <span class="de"id="name3">&nbsp;über</span>
            <span class="en" id="name3">&nbsp;talking about</span>
            <span class="de"id="name4">&nbsp;seine Mutter</span>
            <span class="en" id="name4">&nbsp;his mother</span> 
         </div> 

         <!--Portrait und Text-->
         <div class="spalte2"></div>
         <div class="spalte3">
           <img src="../material/bilder/portraits/portraitAvishay.jpg" alt="Portrait Avishay" height="100%" width="90.91%">
         </div>
          <div class="spalte4"></div>
          <div class="IE-text de"> >>Wenn du deine Vergangenheit nicht kennst, hast du keine Gegenwart und deine Zukunft ist sehr unklar.<<</div>
          <div class="IE-text en"> >>When you don't know your past, you do not have a present and your future is very unclear.<<</div>
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

        <!--Jahre-->
        <div class="flex-container5">
          <div class="randlinks"></div>
          <div class="IE-erklärung"></div>
          <div class="spalte4"></div>
          <div class="IE-jahr de">
            <strong>// &nbsp; 1930er</strong> &nbsp; Kindheit in Leipzig <br>
            <strong>// &nbsp; 1939</strong> &emsp; Flucht in die Niederlande bei Kriegsausbruch <br>
            <strong>// &nbsp; 1945</strong> &emsp; Weg nach Israel <br></div>
          <div class="IE-jahr en">
            <strong>// &nbsp; 1930s</strong> &nbsp; childhood in Leipzig <br>
            <strong>// &nbsp; 1939</strong> &emsp; escape to the Netherlands at start of war <br>
            <strong>// &nbsp; 1945</strong> &emsp; path towards Israel <br>
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
    
        <script src="../scripts.js"></script>
      
  </body>

  </html>