<!doctype html>
<html lang="en">
    <!-- include the head -->
    <?php include 'php-includes/head.php' ?>
    <body>
      <header>
        <nav>
          <ul>
            <li>Pricing and Opening hours</li>
            <li>The museum</li>
            <li>About us</li>
            <li class="log-in">Log in</li>
            <li>About us</li>
          </ul>
        </nav>
        <span id="trans" onclick='paulTrans()'>Hi Paul</span>
        <div>Nelllliiiii</div>



      </header>
      <script>
      function paulTrans(){
        var s = document.getElementById('trans');
        s.className = 'newClass';
      }

      </script>
    </body>
</html>
