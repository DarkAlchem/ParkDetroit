<?php get_header(); ?>

      

    <div class="container-fluid bg-homeHero1">

      <div class="row ">

        <div id="HeroImage">

          <div class="row freedom">

            <div class="col-md-6 col-md-offset-6">

              <div>

                <h1>Freedom to <span id='typed'>Park</span><div class="freedom-underline"></div></h1>

                  

                <a href="#" class="greenTunic"><strong>Discover Detroit</strong> in a whole new way.</a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>



    <div class="container-fluid bg-blue">

      <div class="row" id="HomeInfo3">

        <div  class="container">

          <div class="row">

            <div class="col-md-12">

              <h2>The city of Detroit’s new <strong>PAY-BY-PLATE</strong> on street parking system</h2>

              <h3>now offers you the freedom and flexibility to explore Detroit!</h3>

            </div>

          </div>

        </div>

      </div>

    </div>



    <div class="container-fluid bg-grey1">

      <div class="row" id="HomeInfo4">

        <div  class="container">

          <div class="row">

            <div class="col-md-12">

              <h3>By entering your license plate, you can now:</h3>

            </div>

          </div>

          <div class="row">

            <div class="col-sm-3">

              <p>Use new kiosks to pay with credit, coin or prepaid card</p>

            </div>

            <div class="col-sm-3">

              <p>Use ParkDetroit mobile app to start and extend parking sessions remotely</p>

            </div>

            <div class="col-sm-3">

              <p>Move to additional spaces within the same zone at no additional cost</p>

            </div>

            <div class="col-sm-3">

              <p>Spend less time worrying, and more time exploring!</p>

            </div>

          </div>

        </div>

      </div>

    </div>



    <div class="container-fluid bg-white">

      <div class="row" id="HomeInfo">

        <div  class="container">

          <div class="row">

            <div class="col-sm-6 hidden-xs">

              <img class="iphone-home" src="<?php bloginfo('template_directory' );?>/images/home-iphone.png">

              <a href="http://www.gopassport.com"><img src="<?php bloginfo('template_directory' );?>/images/powered-by-passport-black.png"></a>

            </div>

            <div class="col-sm-6">

              <h2>Parking has never been so easy!</h2>

              <p>Simply download the app and never worry about having to rush back to your car again.</p>

              <div class="home-video"><iframe src="https://player.vimeo.com/video/132119594" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>

              <ul>

                <li><a href="#"><img src="<?php bloginfo('template_directory' );?>/images/googleplay.png"></a></li>

                <li><a href="#"><img src="<?php bloginfo('template_directory' );?>/images/appstore.png"></a></li>

                <li><a href="#" class="blueTunic learn-button">Learn More</a></li>

              </ul>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="container-fluid bg-grey2">

      <div class="row" id="HeroInfo2">

        <div  class="container">

          <div class="row">

            <div class="col-md-6 offset5">

              <h1>Less time <strong>Worrying.</strong><br>

              More time <strong>Experiencing.</strong></h1>



        <div class="blue-underline"></div>

              <h2>Spend your time exploring, not worrying about expiring meters.</h2>

              <a href="#" class="whiteTunic learnzones">Learn how zones make parking simple.</a>

            </div>

          </div>

        </div>

      </div>

    </div>

    <script>

    /* Footer JavaScript*/

       $(function(){



                $("#typed").typed({

                    strings: ["Park.","Explore.", "Roam."],

                    typeSpeed: 50,

                    backDelay: 3000,

                    loop: true,

                    contentType: 'html', // or text

                    // defaults to false for infinite loop

                    loopCount: false,

                    resetCallback: function() { newTyped(); }

                });



                $(".reset").click(function(){

                    $("#typed").typed('reset');

                });

      });

    </script>

<?php get_footer(); ?> 