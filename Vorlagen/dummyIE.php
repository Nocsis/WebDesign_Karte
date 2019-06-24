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

      <div class="flex-container2">
          <div class="randlinks"></div>
          <div id="name">
          <div class="spalte1"> <span id="name1">
            &nbsp;Blubi
          </span>
          <span id="name2">
            &nbsp;Blub
          </span>
          <span id="name3">
            &nbsp;über
          </span>
          <span id="name4">
            &nbsp;seine Mutter
          </span></div> </div>
          <div class="spalte2"></div>
          <div class="spalte3">
              <img src="../material/bilder/portrait-dummy.jpg" alt="portrait-dummy" height="100%" width="90.91%">
          </div>
          <div class="spalte4"></div>
          <div class="IE-text de"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
              sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
              sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
              no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
              sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
              accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
              sit amet.</div>
            
            <div class="IE-text en"> english text here</div>

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

        <div class="flex-container5">
          <div class="randlinks"></div>
          <div class="IE-erklärung"></div>
          <div class="spalte4"></div>
          <div class="IE-jahr">year here</div>
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
          
        <div id="section2">
            <div class="mapBG" id="dummyMap">
              <div id="videoPopup">
                <div id="videoContainer"></div>
                <button id="videoClose"></button>
              </div>
              <button class="mapButton de" id="dummyStation1-1" onclick="popupVideo('../material/videos/avishay01_sd.mp4')"></button>
              <button class="mapButton de" id="dummyStation1-2"></button>
              <button class="mapButton de" id="dummyStation2-1"></button>
      
              <button class="mapButton en" id="dummyStation1-1" onclick="popupVideo('../material/videos/avishay01_sd_en.mp4')"></button>
              <button class="mapButton en" id="dummyStation1-2"></button>
              <button class="mapButton en" id="dummyStation2-1"></button>
            </div>
          </div>
      
          <button class="scrollButton" id="downButton" onclick="scrollToBottom()"></button>
          <button class="scrollButton" id="upButton" onclick="scrollToTop()"></button>
        
          <script src="../scripts.js"></script>
      
  </body>

  </html>