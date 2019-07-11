<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <title>Nathan Friedman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/stylesheet.css">
  </head>

  <body>
    <?php include ("../header.php"); ?>

    <div class="grid-container" >

      <div id="name">
        <span id="name1">
          &nbsp;Nathan
        </span>
        <span id="name2">
          &nbsp;Friedman
        </span>
  
      </div>

      <div id="portrait">
        <img src="/material/bilder/portraits/portraitNathan.png" alt="Portrait Nathan">
      </div>

      <div id="text" class="de">
      >>Nachts träume ich oft. Immer bin ich an einem Ort und weiß nicht, wie ich 	dort weg komme. Ich laufe dahin und dorthin und komme nicht raus. Nach so	vielen Jahren, nach 70 Jahren. Das ist nicht einfach. Aber ich lebe! Ich habe	ein gutes Leben!<<
      </div>

      <div id="text" class="en">
      >>At night I dream a lot. I always stuck in the same place and I don't know how to get away from there.
            I try to walk in different directions but I can't get out of there. I'll keep dreaming after so many years.
            This isn't easy. But I'll keep on living! I have a good liefe!<<
      </div>

      <div class="s"></div>
      <div class="s2"></div>
      <div class="s3"></div>
      <div class="s4"></div>

      <div id="year" class="de">
      <ul>
         <li><strong>// </strong> &nbsp;Geboren ca. 1933 in Warschau. <br> </li>
         <li><strong>// </strong> &nbsp;Er kommt mit seiner Familie im Jahr 1940 ins Warschauer Ghetto. Dort stirbt seine Mutter an Typhus und wird sein Vater verschleppt.<br> </li>
         <li><strong>// </strong> &nbsp;Ihm selbst gelingt die Flucht. Er versteckt sich bis 1944 bei polnischen Familien.<br> </li>
         <li><strong>// </strong> &nbsp;Nach einem gescheiterten Versuch (mit dem Schiff „Exodus“) wandert er 1948 in Israel ein. Dort heiratet er seine Frau und gründet eine Familie.<br> </li>
         <li><strong>// </strong> &nbsp;Nathan starb im Oktober 2017.<br> </li>
       </ul>
      </div>

      <div id="year" class="en">
      <ul>
        <li><strong>// </strong> &nbsp;Born 1933 in Warsaw, Poland.<br> </li>
        <li><strong>// </strong> &nbsp;He comes to the Warsaw Ghetto with his family in 1940. His mother dies 1941 from Typhus. His father disappears one day.<br> </li>
        <li><strong>// </strong> &nbsp;His aunt smuggles him out of the ghetto. During the Holocaust, Nathan is hiding at different Polish people.<br> </li>
        <li><strong>// </strong> &nbsp;Nathan goes to Palestine with the Exodus in 1947. The Exodus is sent back to Hamburg. On the 14th of May 1948 Nathan finally arrives in Israel.<br> </li>
        <li><strong>// </strong> &nbsp;He gets married and has a family of his own.<br> </li>
        <li><strong>// </strong> &nbsp;Nathan died in October 2017.<br> </li>
        </ul>
      </div>
    </div>
    
  <div id="section2">
      <div class="map-background" id="nathan-map">
        <div id="video-popup">
          <div id="video-container"></div>
          <button id="video-close"></button>
        </div>
        <!--Die Reihenfolge der Klassen ist wichtig! Immer "map-button sprache name-stationnr-nr" bzw "map-popup sprache name-stationnr-nr"!-->
        <button class="map-button de nathan-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan01_sd.mp4', '/material/videos/nathan01.mp4', this)"></button>
        <div class="map-popup de nathan-station1-1">Nathan beschreibt seine Kindheit im Warschau der Vorkriegszeit.</div>

        <button class="map-button de nathan-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan02_sd.mp4', '/material/videos/nathan02.mp4', this)"></button>
        <div class="map-popup de nathan-station1-2">Nathan erzählt vom Leben der Juden im Warschauer Ghetto.</div>

        <button class="map-button de nathan-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan03_sd.mp4', '/material/videos/nathan03.mp4', this)"></button>
        <div class="map-popup de nathan-station2-1">Nathan flieht aus dem Warschauer Ghetto und versteckt sich bis Kriegsende.</div>

        <button class="map-button de nathan-station2-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan04_sd.mp4', '/material/videos/nathan04.mp4', this)"></button>
        <div class="map-popup de nathan-station2-2">Nathan erlebt auch nach dem Krieg Verfolgung von Juden.</div>

        <button class="map-button de nathan-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan05_sd.mp4', '/material/videos/nathan05.mp4', this)"></button>
        <div class="map-popup de nathan-station3-1">Nathan fährt mit dem Schiff „Exodus“ nach Israel und erlebt  große Schwierigkeiten bei der Einwanderung.</div>

        <button class="map-button de nathan-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan06_sd.mp4', '/material/videos/nathan06.mp4', this)"></button>
        <div class="map-popup de nathan-station3-2">Nathan erzählt von seiner Familie, seiner Frau und seinem Studium in Israel.</div>

        <button class="map-button de nathan-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan07_sd.mp4', '/material/videos/nathan07.mp4', this)"></button>
        <div class="map-popup de nathan-station3-3">Nathan denkt über seine eigene Kindheit und über seine Enkelkinder nach.</div>
        


        <button class="map-button en nathan-station1-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan01_sd_en.mp4', '/material/videos/nathan01_en.mp4', this)"></button>
        <div class="map-popup en nathan-station1-1">Nathan describes his childhood in Warsaw before the war.</div>

        <button class="map-button en nathan-station1-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan02_sd_en.mp4', '/material/videos/nathan02_en.mp4', this)"></button>
        <div class="map-popup en nathan-station1-2">Nathan talks about the life of the Jews in Warsaw Ghetto.</div>

        <button class="map-button en nathan-station2-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan03_sd_en.mp4', '/material/videos/nathan03_en.mp4', this)"></button>
        <div class="map-popup en nathan-station2-1">Nathan flees from the Warsaw Ghetto and hides until the end of the war.</div>

        <button class="map-button en nathan-station2-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan04_sd_en.mp4', '/material/videos/nathan04_en.mp4', this)"></button>
        <div class="map-popup en nathan-station2-2">Nathan speaks about is his experiences of persecution of Jews after the war.</div>

        <button class="map-button en nathan-station3-1" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan05_sd_en.mp4', '/material/videos/nathan05_en.mp4', this)"></button>
        <div class="map-popup en nathan-station3-1">Nathan boards  „Exodus“, the ship that will bring him to Israel and speaks of his difficulties to immigrate to Israel.</div>

        <button class="map-button en nathan-station3-2" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan06_sd_en.mp4', '/material/videos/nathan06_en.mp4', this)"></button>
        <div class="map-popup en nathan-station3-2">Nathan talks about his family, his wife and his studies in Israel.</div>

        <button class="map-button en nathan-station3-3" onmouseover="popupDescription(this)" onmouseout="hideDescription(this)" onclick="popupVideo('/material/videos/nathan07_sd_en.mp4', '/material/videos/nathan07_en.mp4', this)"></button>
        <div class="map-popup en nathan-station3-3">Nathan talks about his own childhood as well as the childhood of his grandchildren.</div>
      </div>
    </div>

  <button class="scroll-button" id="down-button" onclick="scrollToBottom()"></button>
  <button class="scroll-button" id="up-button" onclick="scrollToTop()"></button>

  <script src="/scripts.js"></script>

  </body>
</html>