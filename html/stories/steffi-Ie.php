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
            <span id="name1">&nbsp;Stefanie</span>
            <span id="name2">&nbsp;Segerman</span>
         </div> 

         <!--Portrait und Text-->
         <div class="column2"></div>
         <div class="column3">
         <div class="portrait-ie1">
           <img class="portrait-ie2"src="/material/bilder/portraits/portraitSteffi.png" alt="Portrait Steffi"> </div>
         </div>
          <div class="column4"></div>
          <div class="ie-text de"> >>Es fiel mir nie schwer, darüber zu reden. So ist das Leben - gut und schlecht. Man muss sich ich ihm stellen.<<</div>
          <div class="ie-text en"> >>I never found it hard to talk about my life. That is life – good and bad. You need to deal with it.<<</div>
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
            <li><strong></strong> &nbsp;Stefanie (Steffi) wird am 10.04.1928 in Leipzig in einer Kaufmannsfamilie geboren.<br> </li>
            <li><strong></strong> &nbsp;Sie wird mit dem Kindertransport nach England geschickt. Dort kommt sie bei einer liebevollen Familie unter.<br> </li>
            <li><strong></strong> &nbsp;Ihr Vater wird im KZ Theresienstadt ermordet und ihre Mutter stirbt dort an Tuberkulose.<br> </li>
            <li><strong></strong> &nbsp;1949 wandert sie in Israel ein. Dort lebt sie im Kibbutz Kfar Blum, wo sie auch heute noch mit Kindern, Enkeln und Urenkeln lebt<br> </li>
            </ul>
          </div>
          <div class="ie-year en">
          <ul>
            <li><strong></strong> &nbsp;Stefanie (Steffi) was born on 10.04.1928 in Leipzig.<br> </li>
            <li><strong></strong> &nbsp;Her father is the owner of “Bamberger & Hertz” in Leipzig. <br>  </li>
            <li><strong></strong> &nbsp;Steffi is sent on the Kindertransport to England. A lovely family takes care of Steffi. <br>  </li>
            <li> <strong></strong> &nbsp;Her father is murdered in Theresienstadt and her mother dies from tuberculosis.<br>  </li>
            <li> <strong></strong> &nbsp;In 1949 she emigrates to Israel. There she goes to Kibbutz Kfar Blum, where she still lives happily with her large family today.<br>  </li>
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
      <div class="map-background" id="steffi-map">
        <div id="video-popup">
          <div id="video-container"></div>
          <button id="video-close"></button>
        </div>
        <!--Die Reihenfolge der Klassen ist wichtig! Immer "map-button sprache name-stationnr-nr" bzw "map-popup sprache name-stationnr-nr"!-->
        <button class="map-button de steffi-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi01_sd.mp4', '/material/videos/steffi01.mp4', this)"></button>
        <div class="map-popup de steffi-station1-1">Steffi erzählt von ihrer glücklichen und behüteten Kindheit.</div>

        <button class="map-button de steffi-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi02_sd.mp4', '/material/videos/steffi02.mp4', this)"></button>
        <div class="map-popup de steffi-station1-2">Steffi berichtet von der Zerstörung des Familienbetriebes Bamberger & Hertz.</div>

        <button class="map-button de steffi-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi03_sd.mp4', '/material/videos/steffi03.mp4', this)"></button>
        <div class="map-popup de steffi-station1-3">Steffi erzählt von Kriegsausbruch, Judenverfolgung und dem Kindertransport nach England.</div>

        <button class="map-button de steffi-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi04_sd.mp4', '/material/videos/steffi04.mp4', this)"></button>
        <div class="map-popup de steffi-station2-1">Steffi beschreibt das Schicksal ihrer Eltern.</div>

        <button class="map-button de steffi-station2-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi05_sd.mp4', '/material/videos/steffi05.mp4', this)"></button>
        <div class="map-popup de steffi-station2-2"> Steffi berichtet von der Vorbereitung zur Einwanderung nach Israel.</div>

        <button class="map-button de steffi-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi06_sd.mp4', '/material/videos/steffi06.mp4', this)"></button>
        <div class="map-popup de steffi-station3-1">Steffi beschreibt die ersten Jahre im Kibbutz. Sie arbeitete als Köchin.</div>

        <button class="map-button de steffi-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi07_sd.mp4', '/material/videos/steffi07.mp4', this)"></button>
        <div class="map-popup de steffi-station3-2">Steffi erzählt von ihrem Besuch in Leipzig.</div>

        <button class="map-button de steffi-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi08_sd.mp4', '/material/videos/steffi08.mp4', this)"></button>
        <div class="map-popup de steffi-station3-3">Iftach redet über die  Auswirkungen der Familien-geschichte in der Gegenwart.</div>
        


        <button class="map-button en steffi-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi01_sd_en.mp4', '/material/videos/steffi01_en.mp4', this)"></button>
        <div class="map-popup en steffi-station1-1">Steffi talks about her happy and protected childhood.</div>

        <button class="map-button en steffi-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi02_sd_en.mp4', '/material/videos/steffi02_en.mp4', this)"></button>
        <div class="map-popup en steffi-station1-2">Steffi talks about the destruction of the family business Bamberger & Hertz.</div>

        <button class="map-button en steffi-station1-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi03_sd_en.mp4', '/material/videos/steffi03_en.mp4', this)"></button>
        <div class="map-popup en steffi-station1-3">Steffi speaks about the outbreak of war, persecution of Jews and the Kindertransport to England.</div>

        <button class="map-button en steffi-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi04_sd_en.mp4', '/material/videos/steffi04_en.mp4', this)"></button>
        <div class="map-popup en steffi-station2-1">Steffi describes the fate of her parents.</div>

        <button class="map-button en steffi-station2-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi05_sd_en.mp4', '/material/videos/steffi05_en.mp4', this)"></button>
        <div class="map-popup en steffi-station2-2">Steffi talks about the preparation to immigrate to Israel. </div>

        <button class="map-button en steffi-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi06_sd_en.mp4', '/material/videos/steffi06_en.mp4', this)"></button>
        <div class="map-popup en steffi-station3-1">BSteffi describes her first years in the Kibbutz. She worked as a cook.</div>

        <button class="map-button en steffi-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi07_sd_en.mp4', '/material/videos/steffi07_en.mp4', this)"></button>
        <div class="map-popup en steffi-station3-2">BSteffi talks about her visit to Leipzig.</div>

        <button class="map-button en steffi-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/steffi08_sd_en.mp4', '/material/videos/steffi08_en.mp4', this)"></button>
        <div class="map-popup en steffi-station3-3">Iftach talks about the impact of the family history on the present.</div>
      </div>
    </div>

  <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
  <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>

  <script src="/scripts.js"></script>
      
  </body>

  </html>