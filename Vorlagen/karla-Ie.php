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
            <span id="name1">&nbsp;Karla</span>
            <span id="name2">&nbsp;Pilpel</span>
         </div> 

         <!--Portrait und Text-->
         <div class="spalte2"></div>
         <div class="spalte3">
           <img src="../material/bilder/portraits/portraitCarla.jpg" alt="Portrait Karla" height="100%" width="85.91%">
         </div>
          <div class="spalte4"></div>
          <div class="IE-text de"> >>Ich sage immer, man muss sich um die Lebenden kümmern, nicht um die Toten.<<</div>
          <div class="IE-text en"> >>I always say that you have to focus to the living and not to the dead.<<</div>
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
            <strong>// &nbsp; 1930er</strong> &nbsp; Kindheit in der Vorkriegszeit  <br>
            <strong>// &nbsp; 9. 11. 1938</strong> &emsp; Pogromnacht 1938 <br>
            <strong>// &nbsp; 1939</strong> &emsp; Reise ins Kinderexil nach England <br>
			<strong>// &nbsp; 1940-1945</strong> &emsp; Leben im Kinderexil in England <br>
			<strong>// &nbsp; 1945-1952</strong> &emsp; Einwanderung in Israel <br>
			<strong>// &nbsp; 1950er</strong> &emsp; Die ersten Jahre in Israel <br>
			<strong>// &nbsp; 2015</strong> &emsp; Erinnerungen an den Holocaust <br>
			<strong>// &nbsp; 2015</strong> &emsp; Auswirkungen der Geschichte auf das Heute <br></div>
          <div class="IE-jahr en">
            <strong>// &nbsp; 1930s</strong> &nbsp; Childhood on pre-war period <br>
            <strong>// &nbsp; 9. 11. 1938</strong> &emsp; Pogrom night 1938 <br>
            <strong>// &nbsp; 1939</strong> &emsp; Journey to exile in England <br>
			<strong>// &nbsp; 1940-1945</strong> &emsp; Life in children exile in England <br>
			<strong>// &nbsp; 1945-1952</strong> &emsp; Immigration to Israel <br>
			<strong>// &nbsp; 1950s</strong> &emsp; The first years in Israel <br>
			<strong>// &nbsp; 2015</strong> &emsp; Remembering the Holocaust  <br>
			<strong>// &nbsp; 2015</strong> &emsp; Impact of the past on the present <br>
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
            <div class="map-popup de karla-station2-1">Karla berichtet vom Abschied von ihren Eltern und der Fahrt ins Kinderexil.</div>
            <button class="map-button de karla-station2-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
            <div class="map-popup de karla-station2-2">Karla erzählt vom harten Leben in ihrer Pflegefamilie.</div>
			<button class="map-button de karla-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
            <div class="map-popup de karla-station3-1">Karla berichtet von den Umständen ihrer Einwanderung in Israel.</div>
			<button class="map-button de karla-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
            <div class="map-popup de karla-station3-2">Karla beschreibt das anfängliche Leben im Kibbutz.</div>
			<button class="map-button de karla-station4-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
            <div class="map-popup de karla-station4-1">Karla verdeutlicht, wie wichtig es ist, über den Holocaust zu sprechen.</div>
			<button class="map-button de karla-station4-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', this)"></button>
            <div class="map-popup de karla-station4-2">Karla berichtet von den Auswirkungen des Holocaust in ihrem Leben.</div>
            
            <button class="map-button en karla-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla01_sd_en.mp4', this)"></button>
            <div class="map-popup en karla-station1-1">Karla talks about her parents and her nanny.</div>
            <button class="map-button en karla-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla02_sd_en.mp4', this)"></button>
            <div class="map-popup en karla-station1-2">Karla describes the events in Berlin in autumn 1938.</div>
            <button class="map-button en karla-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla03_sd_en.mp4', this)"></button>
            <div class="map-popup en karla-station2-1">Karla talks about her parting from her parents and her journey on the Kindertransport.</div>
            <button class="map-button en karla-station2-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
            <div class="map-popup en karla-station2-2">Karla talks about her life in the foster family and the difficulties there.</div>
			<button class="map-button en karla-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
            <div class="map-popup en karla-station3-1">Karla talks about the circumstances of her immigration to Israel.</div>
			<button class="map-button en karla-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
            <div class="map-popup en karla-station3-2">Karla describes her first years in a Kibbutz.</div>
			<button class="map-button en karla-station4-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
            <div class="map-popup en karla-station4-1">Karla emphasizes how important it is to talk about the Holocaust.</div>
			<button class="map-button en karla-station4-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', this)"></button>
            <div class="map-popup en karla-station4-2">Karla talks about the impact of  the Holocaust on her own life.</div>
          </div>
        </div>
    
        <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
        <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>
    
        <script src="../scripts.js"></script>
      
  </body>

  </html>