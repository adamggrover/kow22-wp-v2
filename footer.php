</main>
    <!-- FOOTER SECTION-->
    <footer class="container-fluid">
        <div class="footer-content container">
            <div class="row footer-logo">
                <div class="col-md-4">
                    <img src="" alt="Kings Academy Icon" class="footer-icon">
                </div>

            </div>
            <div class="row footer-text">
                <div class="col-md-4 footer-contact footer-column">
                    <p class="mb-3">The Kings of Wessex Academy<br>Station Road, Cheddar<br>Somerset BS27 3AQ</p>
                    <p class="mb-4">Headteacher: Mr David Wiltshire</p>
                    <p><i class="fa-solid fa-phone"></i><span class="footer-spacer"></span>01934 742 608</p>
                    <p><a href="mailto:office@kowessex.co.uk"><i class="fa-solid fa-envelope"></i></i><span class="footer-spacer"></span>Email Us</a></p>
                    <p class="mb-4"><a href="https://www.google.com/maps/dir//The+Kings+of+Wessex+Academy+Station+Rd+Cheddar+BS27+3AQ/@51.2744878,-2.7786577,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x48721dd466cc4fd1:0x35a655c7fba40d1!2m2!1d-2.7786577!2d51.2744878" target="_blank" ><i class="fa-solid fa-location-dot"></i></i><span class="footer-spacer"></span>Get Directions</a></p>

                    <div class="footer-social mb-4"><a href="https://twitter.com/kowessex" target="_blank" ><i class="fa-brands fa-twitter fa-xl"></i></a><span class="footer-spacer"></span><span class="footer-spacer"></span><a href="https://www.facebook.com/kowessex/" target="_blank"><i class="fa-brands fa-facebook-f fa-xl"></i></a></div>

                    <p class="mt-4">A charitable company limited by guarantee<br>
                        Registered in England<br>
                        Company Number 7348580</p>
                    
                </div>
                <div class="col-md-4 footer-links footer-column">
                    <h6 class="footer heading mb-3">Quick Links</h6>
                    <?php wp_nav_menu( array( 'theme_location' => 'quick-links' ) ); ?>
                    
                </div>
                

                <div class="col-md-4 footer-accessability d-flex-column footer-column">
                    <div class="accesability-top">
                        <h6 class="footer heading mb-3">Accessability</h6>
                        <?php wp_nav_menu( array( 'theme_location' => 'accessability' ) ); ?>
                    </div>

                    <a href="https://wessexlearningtrust.co.uk" target="_blank"><img class="wlt-white mb-3 mt-3 img-fluid" src="" alt=""></a>               
                </div>

        </div>
        <div class="footer-bottom text-center">
            <hr class="mt-3">
            <p class="mb-0 mt-4">&#169 2022 Wessex Learning Trust</p>
        </div>
    </footer>
    

  
    <?php

wp_footer();
?>

</body>
</html>
