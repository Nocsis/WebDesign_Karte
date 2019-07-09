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
            <span id="name1">&nbsp;Bella</span>
            <span id="name2">&nbsp;Katz</span>
         </div> 

         <!--Portrait und Text-->
         <div class="spalte2"></div>
         <div class="spalte3">
           <img src="../material/bilder/portraits/portraitBella.jpeg" alt="Portrait Bella" height="100%" width="80.91%">
         </div>
          <div class="spalte4"></div>
          <div class="IE-text de"> >>Ich habe nie gesprochen über die Vergangenheit, nie. Ich könnte gar nicht weiterleben, wenn ich immer nur an die Vergangenheit denken würde.<<</div>
          <div class="IE-text en"> >>I have never spoken about my past. I wouldn’t be able to live if I would always think about my past.<<</div>
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
            <strong>// &nbsp; 1930er</strong> &emsp; Leipzig vor dem Krieg <br>
			<strong>// &nbsp; 1940-1945</strong> &emsp; Exil in der Jugendzeit <br>
			<strong>// &nbsp; 1945-1948</strong> &emsp; Deutschland nach 1945 <br>
			<strong>// &nbsp; 1949</strong> &emsp; Einwanderung nach Israel <br>
			<strong>// &nbsp; 2015</strong> &emsp; Auswirkungen der Vergangenheit (mit Enkel Ron Stern) <br>
			<strong>// &nbsp; 2015</strong> &emsp; Auseinandersetzung mit der Familiengeschichte (mit Enkel Ron Stern) <br></div>
          <div class="IE-jahr en">
            <strong>// &nbsp; 1920s and 1930s</strong> &nbsp; Childhood in Leipzig <br>
            <strong>// &nbsp; 9. 11. 1938</strong> &emsp; Pogrom night 1938 <br>
            <strong>// &nbsp; 1930s</strong> &emsp; Leipzig pre-war period <br>
			<strong>// &nbsp; 1940-1945</strong> &emsp; Exile in her youth <br>
			<strong>// &nbsp; 1945-1948</strong> &emsp; Germany after 1945 <br>
			<strong>// &nbsp; 1949</strong> &emsp; Immigration to Israel <br>
			<strong>// &nbsp; 2015</strong> &emsp; Impact of the past (with grandson Ron Stern) <br>
			<strong>// &nbsp; 2015</strong> &emsp; Analysis of the family history (with grandson Ron Stern) <br>
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
          <div class="map-background" id="bella-map">
            <div id="video-popup">
              <div id="video-container"></div>
              <button id="video-close"></button>
            </div>
            <!--Die Reihenfolge der Klassen ist wichtig! Immer "map-button sprache name-stationnr-nr" bzw "map-popup sprache name-stationnr-nr"!-->
            <button class="map-button de bella-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella01_sd.mp4', this)"></button>
            <div class="map-popup de bella-station1-1">Bella erzählt von ihrer Kindheit in der Vorkriegszeit.</div>
            <button class="map-button de bella-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella02_sd.mp4', this)"></button>
            <div class="map-popup de bella-station1-2">Bella versucht zu verstehen, was eigentlich geschieht.</div>
            <button class="map-button de bella-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella03_sd.mp4', this)"></button>
            <div class="map-popup de bella-station1-3">Bella beschreibt die Umzüge der Nazis und das Verschwinden jüdischer Nachbarn.</div>
            <button class="map-button de bella-station1-4" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
            <div class="map-popup de bella-station1-4">Bella erzählt von ihrer Jugendzeit im Exil.</div>
			<button class="map-button de bella-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
            <div class="map-popup de bella-station2-1">Bella lernt nach Kriegsende ihren Mann kennen. Gemeinsam verlassen sie Deutschland.</div>
			<button class="map-button de bella-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
            <div class="map-popup de bella-station3-1">Bella berichtet voller Humor von der Ankunft in Israel und dem Leben in einfachen Verhältnissen.</div>
			<button class="map-button de bella-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
            <div class="map-popup de bella-station3-2">Gemeinsam mit ihrem Enkel Ron Stern redet Bella über Vergangenheit und Zukunft.</div>
			<button class="map-button de bella-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd.mp4', this)"></button>
            <div class="map-popup de bella-station3-3">Die Erinnerung an die Geschichte ist grundlegend für die Zukunft.</div>
            
            <button class="map-button en bella-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella01_sd_en.mp4', this)"></button>
            <div class="map-popup en bella-station1-1">Childhood pre-war period.</div>
            <button class="map-button en bella-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella02_sd_en.mp4', this)"></button>
            <div class="map-popup en bella-station1-2">Bella understands what is actually happening.</div>
            <button class="map-button en bella-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella03_sd_en.mp4', this)"></button>
            <div class="map-popup en bella-station1-3">Bella describes the Nazi parades as well as the disappearing of Jews.</div>
            <button class="map-button en bella-station1-4" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd_en.mp4', this)"></button>
            <div class="map-popup en bella-station1-4">Bella talks about her youth in exile in Yugoslavia.</div>
			<button class="map-button en bella-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd_en.mp4', this)"></button>
            <div class="map-popup en bella-station2-1">Bella meets her husband, both flee to the western sector and emigrate to Israel.</div>
			<button class="map-button en bella-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd_en.mp4', this)"></button>
            <div class="map-popup en bella-station3-1">Bella talks humorously about her arrival in Israel and the very simple life there.</div>
			<button class="map-button en bella-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd_en.mp4', this)"></button>
            <div class="map-popup en bella-station3-2">Bella and her grandson Ron are speaking about the past and the future.</div>
			<button class="map-button en bella-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/bella04_sd_en.mp4', this)"></button>
            <div class="map-popup en bella-station3-3">Remembering the past is essential for the future.</div>
          </div>
        </div>
    
        <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
        <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>
    
        <script src="../scripts.js"></script>
      
  </body>

  </html>