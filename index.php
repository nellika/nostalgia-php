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
                <img src="img/logo.jpg" alt="The first DDR Motorbike Museum in Berlin">
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
                    <a href="https://twitter.com/GDR_BikesBerlin">T</a>
                    <a href="https://www.facebook.com/ErstesBerlinerDDRMotorradmuseum">F</a>
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

          </div>
          <div class="holo">

          </div>
        </section>
        <section class="find-tours">
          <article class="tour">
            <div class="">
              <audio preload>
                <source src='audio/0831.ogg'/>
                <source src='audio/0831.mp3'/>
                <div>
                  <a href='audio/0831.ogg'>Download <em>ogg</em> File</a>,
                  <a href='audio/0831.mp3'>Download <em>mp3</em> File</a>
                </div>
              </audio>
              <button onclick="playAudio(this)">Play</button>
            </div>
          </article>
        </section>

      </main>

      <script type="text/javascript">
        function toggleMenu(x) {
          x.parentNode.classList.toggle("open");
        }

        function playAudio(playButton){
          playButton.previousElementSibling.play();
        }

      </script>
    </body>
</html>
