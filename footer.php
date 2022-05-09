   <div id="Footer" class="container-fluid bg-grey3">

      <div class="row">

        <div class="container">

          <div class="row">

            <div class="col-md-12 phonenumber">

              <h3><strong>No smartphone?</strong> No problem! Simply dial <a href="#" class="greenTunic"><?= '313-228-3045'; ?></a> to pay using our automated voice system.</h3>

            </div>

          </div>

          <div class="row bg-black">

            <div class="col-md-12">

              <div class="row">

                <div class="col-md-7">

                  <div class="row subnav">

                    <div id="navbar" class="navbar-collapse collapse">

                        <?php

                        $args = array (

                           'menu'       => 'header-menu',

                           'menu_class' => 'nav navbar-nav',

                           'container'  => 'false'

                         );

                        wp_nav_menu( $args );

                        ?>

                      </div>

                    <!--<div class="col-md-4">

                      <a href="works.html">How it works</a>

                    </div>

                    <div class="col-md-4">

                      <a href="payby.html">Pay-By-Plate</a>

                    </div>

                    <div class="col-md-4">

                      <a href="merchants.html">Merchants</a>

                    </div>-->

                  </div>

                  <div class="row assist">

                    

                      <div class="col-md-10"> <p><strong>Need help?</strong> Call 313-925-7860 for assistance.</p></div>

                       

                      

                    <div class="col-md-10">

                      <img src="<?php bloginfo('template_directory' );?>/images/parklogo-white.png">

                    </div>

                  </div>

                </div>

                <div class="col-md-5 visitdetroit">

                  <p><strong>Make the most of your time in Detroit!</strong></p>

                  <a href="<?= 'localhost.com'; ?>" class="blueTunic visitbutton">VisitDetroit.com</a>

                  <ul>

                    <li><a href="#">Privacy Policy</a></li>

                    <li><a href="#">Terms and Conditions</a></li>

                    <!--<li><a href="policy.html">Privacy Policy</a></li>

                    <li><a href="terms.html">Terms and Conditions</a></li>-->

                  </ul>

                </div>

              </div>

              <div class="row">

                <div class="col-md-12">

                  <p class="center-block"><?php echo date('Y'); ?> <?php bloginfo('name' ); ?>. ParkDetroit, the ParkDetroit logo, and other trademarks on this site are trademarks of City of Detroit and may not be used without permission.</p>

                </div>

              </div>

            </div>

          </div> 

        </div>

      </div>

    </div>
    <?php wp_footer(); ?>

  </body>

</html>