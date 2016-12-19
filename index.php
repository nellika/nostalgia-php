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
          <ul>
            <li class="logo">
              <a href="#">
                <img src="img/logo.jpg" alt="The first DDR Motorbike Museum in Berlin">
              </a>
            </li>
            <li class="text-menu">
              <div class="">
                <div class="hamburger-menu" aria-label="Menu" role="menuitem" title="Menu" onclick="toggleMenu(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                    <span class="sr-only">Menu</span>
                </div>
                <ul>
                  <li class="text-menu-item"><a href="#">Visit</a></li>
                  <li class="text-menu-item"><a href="#">The museum</a></li>
                  <li class="text-menu-item"><a href="#">About us</a></li>
                  <li class="text-menu-item log-in"><a href="#">Log in</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </header>
      <main>
      </main>

      <script type="text/javascript">
        function toggleMenu(x) {
          x.parentNode.classList.toggle("open");
        }
      </script>
    </body>
</html>
