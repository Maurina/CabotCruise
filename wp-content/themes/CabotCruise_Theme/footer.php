</main>



       <footer>

        <div class="footerWrapper">

           <div class="firstBlock">

            <h3>Address:</h3>

              <a href="https://goo.gl/maps/zqzCSM5eo4L2" target="_blank">  <p>Cabot Cruises <br>

               23 South Main St. Suite 16<br>

               Lexington, VA</p></a>

               <h3 class="phone">Phone:</h3>

               <p><a class="number" href="tel:+1-800-555-1234">(800)555-1234</a></p>

               <h3 class="hours">Hours of Operation: </h3>

               <p>Mo-Fr 09:00-16:00</p>

             

            </div><!--end firstBlock-->



            <div class="secondBlock">

                <h3> NewsLetter</h3>

                <p>Subscribe to our email list and stay up-to-date with our hottest offers and latest specials</p>

                

                <form action="#">

                    <div class="newsLetterForm">

                        <input type="text" placeholder="myaddress@gmail.com" name="mail" required class="emailAddress">

                        <input type="submit" value="Subscribe" class="submitButton">

                    </div><!--end newsLetterForm-->

                </form>

            </div><!--end secondBlock-->



            <div class="thirdBlock">

                    <h3>Why Cabot Cruises</h3>

                    <p>Cabot Cruises is a travel agency providing the best cruise deals on our online travel website.  We can help you with all inclusive vacations including discounted cruises.</p>

                    <p>We do not sell trael to residents of Delaware, Iowa, Florida, Hawaii, and Washington state because those states are just weird.  If you are a resident of one of these states, call your congressman and tell them to change the regulations.</p>

                </div>

            </div><!--footerWrapper-->



            <div class="wrapperSocial">

            <div class="socialMedia">

                  

                    <i class="fab fa-facebook-f"></i>

                    <i class="fab fa-instagram"></i>

                    <i class="fab fa-twitter"></i>

                    <i class="fab fa-youtube"></i>

                    <i class="fab fa-linkedin-in"></i>

            </div><!--end socialMedia-->

    </div><!--end wrapperSocial-->

            <div class="copyRight">

                <h5>&copy; 2019 MaurinaDavis.com &bull; login</h5>



            </div><!--end copyRight-->









       </footer>

        

        <script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>

       

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>

    <script>

    

  $(document).ready(function(){

        $('.myslider').slick({

            autoplay:true,

            dots: true,

            arrows: false,

            cssEase: 'ease-out',

            speed: 2000,

            autoplaySpeed: 10000

        });

    });

        </script>

        <script type="application/ld+json">

            {

                "@context": "http://schema.org",

                "@type": "TravelAgency",

                "name": "Cabot Cruises",

                "description": "Cabot Cruises is a travel agency providing the best cruise deals on our online travel website.",

                "openingHours": "Mo-Fr 09:00-16:00",

                "telephone": "+1385551234",

                "faxNumber": "+1385559876",

                "address": {

                    "@type": "PostalAddress",

                    "streetAddress": "23 South Main St. Suite 16",

                    "addressLocality": "Lexington",

                    "addressRegion": "VA"

                },

                "image": "http://fullpath.com/logo1x.png",

                "priceRange": "$500 to $4000"

                }

            

        </script>



    </body>

</html>