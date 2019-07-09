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
            <span id="name1">&nbsp;Karla</span>
            <span id="name2">&nbsp;Pilpel</span> 
         </div> 

         <!--Portrait und Text-->
         <div class="column2"></div>
         <div class="column3">
         <img src="/material/bilder/portraits/portraitKarla.jpg" alt="Portrait Karla" height="100%" width="90.91%">
         </div>
          <div class="column4"></div>
          <div class="ie-text de"> „Ich sage immer, man muss sich um die Lebenden kümmern, nicht um die Toten.“</div>
          <div class="ie-text en"> >>„I always say that you have to focus to the living and not to the dead.“<<</div>
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
            <strong>// &nbsp; 1930er</strong> &nbsp; Kindheit in Berlin <br>
            <strong>// &nbsp; 1939-1945</strong> &emsp; Kinderexil in England <br>
            <strong>// &nbsp; 1950</strong> &emsp; Weg nach Israel <br></div>
          <div class="ie-year en">
            <strong>// &nbsp; 1930s</strong> &nbsp; childhood in Berlin <br>
            <strong>// &nbsp; 1939-1945</strong> &emsp; children exile in England <br>
            <strong>// &nbsp; 1950</strong> &emsp; path towards Israel <br>
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
    <div class="map-background" id="carla-map">
        <div id="video-popup">
          <div id="video-container"></div>
          <button id="video-close"></button>
        </div>
        <!--Die Reihenfolge der Klassen ist wichtig! Immer "map-button sprache name-stationnr-nr" bzw "map-popup sprache name-stationnr-nr"!-->
        <button class="map-button de karla-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla01_sd.mp4', this)"></button>
        <div class="map-popup de karla-station1-1">Karla erzählt von ihren Eltern und ihrem Kindermädchen.</div>

        <button class="map-button de karla-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla02_sd.mp4', this)"></button>
        <div class="map-popup de karla-station1-2">Karla beschreibt die Ereignisse in Berlin im Herbst 1938.</div>

        <button class="map-button de karla-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla03_sd.mp4', this)"></button>
        <div class="map-popup de karla-station1-3">Karla berichtet vom Abschied von ihren Eltern und der Fahrt ins Kinderexil.</div>

        <button class="map-button de karla-station1-4" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
        <div class="map-popup de karla-station1-4">Karla erzählt vom harten Leben in ihrer Pflegefamilie.</div>

        <button class="map-button de karla-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
        <div class="map-popup de karla-station2-1">Karla berichtet von den Umständen ihrer Einwanderung in Israel.</div>

        <button class="map-button de karla-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
        <div class="map-popup de karla-station3-1">Karla beschreibt das anfängliche Leben im Kibbutz.</div>

        <button class="map-button de karla-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
        <div class="map-popup de karla-station3-2">Karla verdeutlicht, wie wichtig es ist, über den Holocaust zu sprechen.</div>

        <button class="map-button de karla-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
        <div class="map-popup de karla-station3-3">Karla berichtet von den Auswirkungen des Holocaust in ihrem Leben.</div>
        


        <button class="map-button en karla-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla01_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station1-1">Karla talks about her parents and her nanny.</div>

        <button class="map-button en karla-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla02_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station1-2">Karla describes the events in Berlin in autumn 1938.</div>

        <button class="map-button en karla-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla03_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station1-3">Karla talks about her parting from her parents and her journey on the Kindertransport.</div>

        <button class="map-button en karla-station1-4" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station1-4">Karla talks about her life in the foster family and the difficulties there. </div>

        <button class="map-button en karla-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station2-1">Karla talks about the circumstances of her immigration to Israel.</div>

        <button class="map-button en karla-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station3-1">Karla describes her first years in a Kibbutz.</div>

        <button class="map-button en karla-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station3-2">Karla emphasizes how important it is to talk about the Holocaust.</div>

        <button class="map-button en karla-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
        <div class="map-popup en karla-station3-3">Karla talks about the impact of  the Holocaust on her own life.</div>
      </div>
    </div>

    <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
    <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>

    <script src="/scripts.js"></script>
      
  </body>

  </html>