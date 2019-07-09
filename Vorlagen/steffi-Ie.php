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
            <span id="name1">&nbsp;Steffi</span>
            <span id="name2">&nbsp;Segermann</span>
         </div> 

         <!--Portrait und Text-->
         <div class="spalte2"></div>
         <div class="spalte3">
           <img src="../material/bilder/portraits/portraitSteffi.jpeg" alt="Portrait Steffi" height="100%" width="85.91%">
         </div>
          <div class="spalte4"></div>
          <div class="IE-text de"> >>Es fiel mir nie schwer, darüber zu reden. So ist das Leben - gut und schlecht. Man muss sich ich ihm stellen.<<</div>
          <div class="IE-text en"> >>I never found it hard to talk about my life. That is life – good and bad. You need to deal with it.<<</div>
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
            <strong>// &nbsp; 1920er und 1930er</strong> &nbsp; Kindheit in Leipzig <br>
            <strong>// &nbsp; 9. 11. 1938</strong> &emsp; Pogromnacht 1938 <br>
            <strong>// &nbsp; 1939</strong> &emsp; Kindertransport nach England <br>
			<strong>// &nbsp; 1940-1945</strong> &emsp; Kinderexil in England <br>
			<strong>// &nbsp; 1948</strong> &emsp; Nachkriegszeit in England <br>
			<strong>// &nbsp; 1948-1952</strong> &emsp; Die ersten Jahre in Israel <br>
			<strong>// &nbsp; 2015</strong> &emsp; Erinnerungen an die Vergangenheit <br>
			<strong>// &nbsp; 2015</strong> &emsp; Iftach Dahadi (Enkel von Steffi Segermann): Auswirkungen der Geschichte <br></div>
          <div class="IE-jahr en">
            <strong>// &nbsp; 1920s and 1930s</strong> &nbsp; Childhood in Leipzig <br>
            <strong>// &nbsp; 9. 11. 1938</strong> &emsp; Pogrom night 1938 <br>
            <strong>// &nbsp; 1939</strong> &emsp; Kindertransport to England <br>
			<strong>// &nbsp; 1940-1945</strong> &emsp; Exile in England <br>
			<strong>// &nbsp; 1948</strong> &emsp; Post-war period in England <br>
			<strong>// &nbsp; 1948-1952</strong> &emsp; The first years in Israel <br>
			<strong>// &nbsp; 2015</strong> &emsp; Memories of the past <br>
			<strong>// &nbsp; 2015</strong> &emsp; Iftach Dahadi (Enkel of Steffi Segermann): Impact oft he past <br>
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
          <div class="map-background" id="steffi-map">
            <div id="video-popup">
              <div id="video-container"></div>
              <button id="video-close"></button>
            </div>
            <!--Die Reihenfolge der Klassen ist wichtig! Immer "map-button sprache name-stationnr-nr" bzw "map-popup sprache name-stationnr-nr"!-->
            <button class="map-button de steffi-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi01_sd.mp4', this)"></button>
            <div class="map-popup de steffi-station1-1">steffi erzählt von ihrer Kindheit in der Vorkriegszeit.</div>
            <button class="map-button de steffi-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi02_sd.mp4', this)"></button>
            <div class="map-popup de steffi-station1-2">steffi versucht zu verstehen, was eigentlich geschieht.</div>
            <button class="map-button de steffi-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi03_sd.mp4', this)"></button>
            <div class="map-popup de steffi-station1-3">steffi beschreibt die Umzüge der Nazis und das Verschwinden jüdischer Nachbarn.</div>
            <button class="map-button de steffi-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi04_sd.mp4', this)"></button>
            <div class="map-popup de steffi-station2-1">steffi erzählt von ihrer Jugendzeit im Exil.</div>
			<button class="map-button de steffi-station2-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi04_sd.mp4', this)"></button>
            <div class="map-popup de steffi-station2-2">steffi lernt nach Kriegsende ihren Mann kennen. Gemeinsam verlassen sie Deutschland.</div>
			<button class="map-button de steffi-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi04_sd.mp4', this)"></button>
            <div class="map-popup de steffi-station3-1">steffi berichtet voller Humor von der Ankunft in Israel und dem Leben in einfachen Verhältnissen.</div>
			<button class="map-button de steffi-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi04_sd.mp4', this)"></button>
            <div class="map-popup de steffi-station3-2">Gemeinsam mit ihrem Enkel Ron Stern redet steffi über Vergangenheit und Zukunft.</div>
			<button class="map-button de steffi-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi04_sd.mp4', this)"></button>
            <div class="map-popup de steffi-station3-3">Die Erinnerung an die Geschichte ist grundlegend für die Zukunft.</div>
            
            <button class="map-button en steffi-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi01_sd_en.mp4', this)"></button>
            <div class="map-popup en steffi-station1-1">Steffi talks about her happy and protected childhood.</div>
            <button class="map-button en steffi-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi02_sd_en.mp4', this)"></button>
            <div class="map-popup en steffi-station1-2">Steffi talks about the destruction of the family business Bamberger & Hertz.</div>
            <button class="map-button en steffi-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi03_sd_en.mp4', this)"></button>
            <div class="map-popup en steffi-station1-3">Steffi speaks about the outbreak of war, persecution of Jews and the Kindertransport to England.</div>
            <button class="map-button en steffi-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi04_sd_en.mp4', this)"></button>
            <div class="map-popup en steffi-station2-1">Steffi describes the fate of her parents.</div>
			<button class="map-button en steffi-station2-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi04_sd_en.mp4', this)"></button>
            <div class="map-popup en steffi-station2-2">Steffi talks about the preparation to immigrate to Israel.</div>
			<button class="map-button en steffi-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi04_sd_en.mp4', this)"></button>
            <div class="map-popup en steffi-station3-1">Steffi describes her first years in the Kibbutz. She worked as a cook.</div>
			<button class="map-button en steffi-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi04_sd_en.mp4', this)"></button>
            <div class="map-popup en steffi-station3-2">Steffi talks about her visit to Leipzig.</div>
			<button class="map-button en steffi-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi04_sd_en.mp4', this)"></button>
            <div class="map-popup en steffi-station3-3">Iftach talks about the impact of the family history on the present.</div>
          </div>
        </div>
    
        <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
        <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>
    
        <script src="../scripts.js"></script>
      
  </body>

  </html>