<!doctype html>
<html lang="en">
    <?php include 'php-includes/head.php'; ?>
    <body>
      <?php include 'php-includes/navigation.php'; ?>
      <main>
        <section class="jumbo-container">
          <picture>
          <img
            sizes="(max-width: 1400px) 100vw"
            srcset="
              img/jumbo/h600_escka9_c_scale,w_200.jpg 200w,
              img/jumbo/h600_escka9_c_scale,w_581.jpg 581w,
              img/jumbo/h600_escka9_c_scale,w_852.jpg 852w,
              img/jumbo/h600_escka9_c_scale,w_1095.jpg 1095w,
              img/jumbo/h600_escka9_c_scale,w_1400.jpg 1400w"
            src="img/jumbo/h600_escka9_c_scale,w_1400.jpg"
            alt="">
          </picture>

          <div class="holo">
            <h2>&hellip;history on two wheels</h2>
          </div>
          <!-- <div class="holo">
            <p class="slogan">
              <span>&hellip;history on</span>
              <span>two wheels</span>
            </p>
          </div> -->
          <div class="customize-tour">
            <a href="customize.php">customize my <span>tour</span></a>
          </div>
        </section>
        <section class="find-tours">
          <h2>Sign up for the upcoming tours</h2>
          <?php include 'php-includes/tours.php'; ?>
          <div class="customize-link">
            <a href="customize-tour.php">&hellip;or customize your own.</a>
          </div>
        </section>
      </main>
      <?php include 'php-includes/footer.php'; ?>
    </body>
</html>
