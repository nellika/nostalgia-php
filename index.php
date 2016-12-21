<!doctype html>
<html lang="en">
    <?php include 'php-includes/head.php'; ?>
    <body>
      <?php include 'php-includes/navigation.php'; ?>
      <main>
        <section class="jumbo-container">
          <img sizes="(max-width: 3500px) 40vw, 1400px"
                srcset="
                img/Pitty_Entire_elcdax_c_scale,w_397.jpg 397w,
                img/Pitty_Entire_elcdax_c_scale,w_744.jpg 744w,
                img/Pitty_Entire_elcdax_c_scale,w_992.jpg 992w,
                img/Pitty_Entire_elcdax_c_scale,w_1225.jpg 1225w,
                img/Pitty_Entire_elcdax_c_scale,w_1400.jpg 1400w"
                src="img/Pitty_Entire_elcdax_c_scale,w_1400.jpg"
                alt="">
          <div class="holo">
            <h2>Search for the perfect</h2>
          </div>
          <div class="holo">
            <p class="slogan">
              <span>&hellip;history on</span>
              <span>two wheels</span>
            </p>
          </div>
          <div class="customize-tour">
            <a href="customize-tour.php">customize my <span>tour</span></a>
          </div>
        </section>
        <section class="find-tours">
          <h2>Sign up for the upcoming tours</h2>
          <article class="tour-ribbon">
              <h3 class="tour-date">11.12.</h3>
              <span class="ribbon-left"></span>
              <span class="ribbon-right"></span>
              <div class="tour-details">
                <div class="recording">
                  <audio preload>
                    <source src='audio/0831.ogg'/>
                    <source src='audio/0831.mp3'/>
                    <div>
                      <a href='audio/0831.ogg'>Download <em>ogg</em> File</a>,
                      <a href='audio/0831.mp3'>Download <em>mp3</em> File</a>
                    </div>
                  </audio>
                  <div class="play-button" role="button" onclick="toggleAudio(this)"></div>
                </div>
                <div class="tour-time">14:00</div>
                <div class="guide-name">Ralf</div>
                <div class="tour-enroll"><a href="buy-a-ticket.php"><img src="./img/ticket.png" alt="Buy a ticket" /></a></div>
                <div class="tour-lang">
                  <a href="#"><span class="en"><img src="./img/flags/de.png" alt="Tour available in English" /></span></a>
                  <a href="#"><span class="de"><img src="./img/flags/gb.png" alt="Tour available in German" /></span></a>
                </div>
              </div>
          </article>
        </section>
      </main>
    </body>
</html>
