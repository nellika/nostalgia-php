<?php
  $tours = array(
            array("date"=>"11.12.", "time"=>"14:00", "guide"=>"Ralf"),
            array("date"=>"11.13.", "time"=>"14:00", "guide"=>"Wolfgang"),
            array("date"=>"11.13.", "time"=>"16:00", "guide"=>"Erik"),
            array("date"=>"11.14.", "time"=>"14:00", "guide"=>"Ralf"),
            array("date"=>"11.14.", "time"=>"16:00", "guide"=>"Franz"),
            array("date"=>"11.15.", "time"=>"14:00", "guide"=>"Ralf"),
            array("date"=>"11.16.", "time"=>"14:00", "guide"=>"Ralf"),
            array("date"=>"11.17.", "time"=>"16:00", "guide"=>"Ralf")
  );

  foreach ($tours as $key => $value) {
    echo '<article class="tour-ribbon">
            <h3 class="tour-date">'.$value["date"].'</h3>
            <span class="ribbon-left"></span>
            <span class="ribbon-right"></span>
            <div class="tour-details">
              <div class="recording">
                <audio preload>
                  <source src="audio/0831.ogg"/>
                  <source src="audio/0831.mp3"/>
                  <div>
                    <a href="audio/0831.og">Download <em>ogg</em> File</a>,
                    <a href="audio/0831.mp3">Download <em>mp3</em> File</a>
                  </div>
                </audio>
                <div class="play-button paused" role="button" onclick="toggleAudio(this)"></div>
              </div>
              <div class="tour-time">'.$value["time"].'</div>
              <div class="guide-name">'.$value["guide"].'</div>
              <div class="tour-enroll"><a href="buy-a-ticket.php"><img src="./img/ticket.png" alt="Buy a ticket" /></a></div>
              <div class="tour-lang">
                <a href="#"><span class="en"><img src="./img/flags/de.png" alt="Tour available in English" /></span></a>
                <a href="#"><span class="de"><img src="./img/flags/gb.png" alt="Tour available in German" /></span></a>
              </div>
            </div>
        </article>';
  }
?>
