<!doctype html>
<html lang="en">
    <!-- include the head -->

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Nostalgia on two wheels...</title>
      <link rel="stylesheet" href="./css/normalize.css" />
      <link rel="stylesheet" href="./css/style.css" />

      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
    <body>
      <header>
        <nav class="flex-nav">
            <div class="logo">
              <a href="#">
                <img
                sizes="(max-width: 1538px) 40vw, 615px"
                srcset="
                img/logo/logo-rethink2-small.png 308w,
                img/logo/logo-rethink2.png 615w"
                src="img/logo/logo-rethink2-small.png,img/logo/logo-rethink2.png"
                alt="The first DDR Motorbike Museum in Berlin">
              </a>
            </div>
            <div class="menu">
              <div class="hamburger-menu" aria-label="Menu" role="menuitem" title="Menu" onclick="toggleMenu(this)">
                  <div class="bar1"></div>
                  <div class="bar2"></div>
                  <div class="bar3"></div>
                  <span class="sr-only">Menu</span>
              </div>
              <ul>
                <li class="menu-item"><a href="#">Visit</a></li>
                <li class="menu-item"><a href="#">The museum</a></li>
                <li class="menu-item"><a href="#">About us</a></li>
                <li class="menu-item contact">
                  <p>Contact us</p>
                  <p>ddr-nostalgia@motorrad.de</p>
                  <p>+66 50 343 343</p>
                  <div class="social-connect">
                    <a href="https://twitter.com/GDR_BikesBerlin"><img src="./img/social/twitter.svg" alt="Check out our Twitter" /></a>
                    <a href="https://www.facebook.com/ErstesBerlinerDDRMotorradmuseum"><img src="./img/social/fb.svg" alt="Visit our Facebook page" /></a>
                  </div>
                </li>
              </div>
            </ul>
        </nav>
      </header>
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

      <script type="text/javascript">
        function toggleMenu(x) {
          x.parentNode.classList.toggle("open");
        }

        function toggleAudio(playButton){
          var audioEl = playButton.previousElementSibling;
          audioEl.parentNode.parentNode.classList.toggle("show-guide");

          if(audioEl.paused){
            audioEl.play();
            // playButton.innerHTML = 'FR';
            playButton.classList.toggle("playing");
          }else{
            audioEl.pause();
            playButton.classList.toggle("paused");
          }
        }


      </script>
    </body>
</html>
