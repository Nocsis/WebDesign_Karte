<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <title>Tor nach Zion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/stylesheet.css">
  </head>

  <body>
      
    <?php include ("../header-Ie.php"); ?>

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
         <div class="portrait-ie1">
         <img class="portrait-ie2"src="/material/bilder/portraits/portraitCarla.jpg" alt="Portrait Karla"> </div>
         </div>
          <div class="column4"></div>
          <div class="ie-text de"> >>Ich sage immer, man muss sich um die Lebenden kümmern, nicht um die Toten.<<</div>
          <div class="ie-text en"> >>I always say that you have to focus on the living <br>and not on the dead.<<</div>
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
          <ul>
            <li><strong>  </strong> &nbsp;Geboren am 12.12.1931 in Berlin als Karla Rothstein. <br> </li>
            <li><strong> </strong> &nbsp;1939 wird sie zusammen mit ihrer Schwester auf einen Kindertransport nach England geschickt; sie sieht ihre Eltern das letzte Mal. <br> </li>
            <li><strong>  </strong> &nbsp;In England lebt sie in einem Kinderheim in Manchester. <br> </li>
            <li><strong> </strong> &nbsp;Karla wandert 1951 in Israel ein, gründet eine Familie und bekommt zwei Kinder. Sie arbeitet vorwiegend als Krankenschwester. <br> </li>
         </ul>
          </div>
            
         
          <div class="ie-year en">
          <ul>
           <li><strong></strong> &nbsp;Born on 12.12.1931 in Berlin as Karla Rothstein<br> </li>
           <li><strong> </strong> &nbsp;In 1939 she is sent on a Kindertransport to England together with her sister; she sees her parents for the last time. <br> </li>
           <li><strong> </strong> &nbsp;In England she is sent to a Kinderheim in Manchester.  <br> </li>
           <li><strong></strong> &nbsp;Karla emigrates to Israel in 1951 and marries Abraham Pilpel. They have two sons. Karla works as a nurse. She lives in Jerusalem today.<br> </li>
          </ul>
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
    <div class="map-background" id="karla-map">
        <div id="video-popup">
          <div id="video-container"></div>
          <button id="video-close"></button>
          <button class="video-switch" id="video-switch-sd"></button>
          <button class="video-switch" id="video-switch-hd"></button>
        </div>
<!--Die Reihenfolge der Klassen ist wichtig! Immer "map-button sprache name-stationnr-nr" bzw "map-popup sprache name-stationnr-nr"!-->
<button class="map-button de karla-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla01_sd.mp4', '/material/videos/karla01.mp4', this)"></button>
        <div class="map-popup de karla-station1-1">Karla erzählt von ihren Eltern und ihrem Kindermädchen.</div>

        <button class="map-button de karla-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla02_sd.mp4', '/material/videos/karla02.mp4', this)"></button>
        <div class="map-popup de karla-station1-2">Karla beschreibt die Ereignisse in Berlin im Herbst 1938.</div>

        <button class="map-button de karla-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla03_sd.mp4', '/material/videos/karla03.mp4', this)"></button>
        <div class="map-popup de karla-station2-1">Karla berichtet vom Abschied von ihren Eltern und der Fahrt ins Kinderexil.</div>

        <button class="map-button de karla-station2-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd.mp4', '/material/videos/karla04.mp4', this)"></button>
        <div class="map-popup de karla-station2-2">Karla erzählt vom harten Leben in ihrer Pflegefamilie.</div>

        <button class="map-button de karla-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla05_sd.mp4', '/material/videos/karla05.mp4', this)"></button>
        <div class="map-popup de karla-station3-1">Karla berichtet von den Umständen ihrer Einwanderung in Israel.</div>

        <button class="map-button de karla-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla06_sd.mp4', '/material/videos/karla06.mp4', this)"></button>
        <div class="map-popup de karla-station3-2">Karla beschreibt das anfängliche Leben im Kibbutz.</div>

        <button class="map-button de karla-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla07_sd.mp4', '/material/videos/karla07.mp4', this)"></button>
        <div class="map-popup de karla-station3-3">Karla verdeutlicht, wie wichtig es ist, über den Holocaust zu sprechen.</div>

        <button class="map-button de karla-station3-4" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla08_sd.mp4', '/material/videos/karla08.mp4', this)"></button>
        <div class="map-popup de karla-station3-4">Karla berichtet von den Auswirkungen des Holocaust in ihrem Leben.</div>
        


        <button class="map-button en karla-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla01_sd_en.mp4', '/material/videos/karla01_en.mp4', this)"></button>
        <div class="map-popup en karla-station1-1">Karla talks about her parents and her nanny.</div>

        <button class="map-button en karla-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla02_sd_en.mp4', '/material/videos/karla02_en.mp4', this)"></button>
        <div class="map-popup en karla-station1-2">Karla describes the events in Berlin in autumn 1938.</div>

        <button class="map-button en karla-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla03_sd_en.mp4', '/material/videos/karla03_en.mp4', this)"></button>
        <div class="map-popup en karla-station1-3">Karla talks about her parting from her parents and her journey on the Kindertransport.</div>

        <button class="map-button en karla-station2-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla04_sd_en.mp4', '/material/videos/karla04_en.mp4', this)"></button>
        <div class="map-popup en karla-station1-4">Karla talks about her life in the foster family and the difficulties there.</div>

        <button class="map-button en karla-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla05_sd_en.mp4', '/material/videos/karla05_en.mp4', this)"></button>
        <div class="map-popup en karla-station2-1">Karla talks about the circumstances of her immigration to Israel.</div>

        <button class="map-button en karla-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla06_sd_en.mp4', '/material/videos/karla06_en.mp4', this)"></button>
        <div class="map-popup en karla-station3-1">Karla describes her first years in a Kibbutz.</div>

        <button class="map-button en karla-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla07_sd_en.mp4', '/material/videos/karla07_en.mp4', this)"></button>
        <div class="map-popup en karla-station3-2">Karla emphasizes how important it is to talk about the Holocaust.</div>

        <button class="map-button en karla-station3-4" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/karla08_sd_en.mp4', '/material/videos/karla08_en.mp4', this)"></button>
        <div class="map-popup en karla-station3-3">Karla talks about the impact of  the Holocaust on her own life.</div>
      </div>
    </div>

    <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
    <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>

    <script src="/scripts.js"></script>
      
  </body>

  </html>