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
            <span id="name1">&nbsp;Josef</span>
            <span id="name2">&nbsp;Aaron</span>
         </div> 

         <!--Portrait und Text-->
         <div class="spalte2"></div>
         <div class="spalte3">
           <img src="../material/bilder/portraits/portraitJoseph.png" alt="Portrait Josef" height="100%" width="85.91%">
         </div>
          <div class="spalte4"></div>
          <div class="IE-text de"> >>Ich erzähle meine Geschichte. Weiter und weiter und es ist, … es ist schwer. Und es tut weh. Aber ich freue mich heute, dass ich die Geschichte  erzählen und weitergeben kann.<<</div>
          <div class="IE-text en"> >>I am going on telling my story. It is hard and it hurts. But I am happy that I can tell my story and share it with others.<<</div>
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
            <strong>// &nbsp; 1939-1042</strong> &emsp; Judenverfolgung und Flucht vor den Nazis <br>
            <strong>// &nbsp; 1942</strong> &emsp; Verschleppung ins Konzentrations-lager <br>
			<strong>// &nbsp; 1942-1945</strong> &emsp; Überleben im Konzentrationslager <br>
			<strong>// &nbsp; 1945-1946</strong> &emsp; Rückkehr ins Leben <br>
			<strong>// &nbsp; 1948-1952</strong> &emsp; Die ersten Jahre in Israel <br>
			<strong>// &nbsp; 2015</strong> &emsp; Leben in Israel heute  <br>
			<strong>// &nbsp; 2015</strong> &emsp; Erinnerungen an seine Mutter <br></div>
          <div class="IE-jahr en">
            <strong>// &nbsp; 1930s</strong> &nbsp; Childhood on pre-war period <br>
            <strong>// &nbsp; 1939-1042</strong> &emsp; Persecution of Jews and flight from the Nazi Germany <br>
            <strong>// &nbsp; 1942</strong> &emsp; Cought and brought to the concentration camp <br>
			<strong>// &nbsp; 1942-1945</strong> &emsp; Survival in concentration camp <br>
			<strong>// &nbsp; 1945-1946</strong> &emsp; Back to life <br>
			<strong>// &nbsp; 1948-1952</strong> &emsp; The first years in Israel <br>
			<strong>// &nbsp; 2015</strong> &emsp; Life in Israel today  <br>
			<strong>// &nbsp; 2015</strong> &emsp; Remembering his mother <br>
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
          <div class="map-background" id="josef-map">
            <div id="video-popup">
              <div id="video-container"></div>
              <button id="video-close"></button>
            </div>
            <!--Die Reihenfolge der Klassen ist wichtig! Immer "map-button sprache name-stationnr-nr" bzw "map-popup sprache name-stationnr-nr"!-->
            <button class="map-button de josef-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef01_sd.mp4', this)"></button>
            <div class="map-popup de josef-station1-1">Josef erzählt von seiner Familie in Frankfurt/Main.</div>
            <button class="map-button de josef-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef02_sd.mp4', this)"></button>
            <div class="map-popup de josef-station1-2">Josef berichtet von seiner Mutter und der Rettung dreier Kinder.</div>
            <button class="map-button de josef-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef03_sd.mp4', this)"></button>
            <div class="map-popup de josef-station1-3">Josef beschreibt  den Transport ins KZ Bergen-Belsen.</div>
            <button class="map-button de josef-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
            <div class="map-popup de josef-station2-1">Josef erzählt von seinen schrecklichen Erlebnissen im Konzentrationslager.</div>
			<button class="map-button de josef-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
            <div class="map-popup de josef-station3-1">Josef findet nach seinen traumatischen Erlebnissen langsam zurück ins Leben.</div>
			<button class="map-button de josef-station4-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
            <div class="map-popup de josef-station4-1">Josef berichtet von den schweren Anfangsjahren in Israel.</div>
			<button class="map-button de josef-station4-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
            <div class="map-popup de josef-station4-2">Josef erzählt von seinem Leben in Jerusalem.</div>
			<button class="map-button de josef-station4-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd.mp4', this)"></button>
            <div class="map-popup de josef-station4-3">Josef erinnert sich an seine Mutter und ihr Vermächtnis in seinem Leben.</div>
            
            <button class="map-button en josef-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef01_sd_en.mp4', this)"></button>
            <div class="map-popup en josef-station1-1">Josef talks about his family in Frankfurt/Main.</div>
            <button class="map-button en josef-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef02_sd_en.mp4', this)"></button>
            <div class="map-popup en josef-station1-2">Josef talks about his mother and the rescue of him and his two siblings.</div>
            <button class="map-button en josef-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef03_sd_en.mp4', this)"></button>
            <div class="map-popup en josef-station1-3">Josef describes the transport to the concentration camp Bergen-Belsen.</div>
            <button class="map-button en josef-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
            <div class="map-popup en josef-station2-1">Josef talks about the horrifying experiences in the concentration camp.</div>
			<button class="map-button en josef-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
            <div class="map-popup en josef-station3-1">Josef finds his way back to life after his very traumatic experiences.</div>
			<button class="map-button en josef-station4-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
            <div class="map-popup en josef-station4-1">Josef talks about his first  years in Israel and his hardships.</div>
			<button class="map-button en josef-station4-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
            <div class="map-popup en josef-station4-2">Josef talks about his life in in Jerusalem.</div>
			<button class="map-button en josef-station4-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/josef04_sd_en.mp4', this)"></button>
            <div class="map-popup en josef-station4-3">Josef remembers his mother and her legacy in his life.</div>
          </div>
        </div>
    
        <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
        <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>
    
        <script src="../scripts.js"></script>
      
  </body>

  </html>