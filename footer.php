<footer class="" style="background-image: url('images/footer-map.png');">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-logo">
                    <a href="index.php">
                        <img src="images/footer-logo.png">
                    </a>
                </div>
                <div class="footer-company-desc">
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. 
                    Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                </div>
                <div class="footer-social-link">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="quick-links">
                    <h4>QUICK LINKS</h4>
                    <ul>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="#">Drawing</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Drawing</a>
                        </li>
                        <li>
                            <a href="#">Construction</a>
                        </li>
                        <li>
                            <a href="#">Construction</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Uses Bricks</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-contact-info">
                    <h4>CONTACT US</h4>
                    <ul>
                        <li>
                            <a href="tel:9999999999"><i class="fa fa-phone" aria-hidden="true"></i> <span>+1234567890</span></a>
                        </li>
                        <li>
                            <a href="mailto:cojaproject@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> <span>cojaproject@gmail.com</span></a>
                        </li>
                        <li>
                            <a href="https://www.google.co.in/maps/place/New+York,+NY,+USA/@40.6976701,-74.2598682,10z/data=!3m1!4b1!4m5!3m4!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!8m2!3d40.7127753!4d-74.0059728?hl=en" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Coja Projects, NY, USA</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="bottom-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright © 2020 Coja Project. All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
         $('.counter-item p').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 1000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
    <script src="js/slick.min.js" type="text/javascript"></script>
    <script type="text/javascript">
	      jQuery(".home-slider").slick({
	        dots: false,
	        slidesToShow: 1,
	        slidesToScroll: 1
	      });
	</script>
    <script type="text/javascript">
          jQuery(".testimonial-wrapper").slick({
            dots: true,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1
          });
    </script>
    <script src="js/lightgallery.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#lightgallery').lightGallery();
        });
    </script>
    <script>
        jQuery(window).scroll(function(){
            var sc=jQuery(window).scrollTop()
            if(sc>150){
                jQuery("#header-scrl").css("top","-150px");
            }
            if(sc>350){
                jQuery("#header-scrl").css("top","0px");jQuery("#header-scrl").addClass("fixed header-scrl-dark")}else{jQuery("#header-scrl").removeClass("fixed header-scrl-dark");
            }
            if(sc<150){
                jQuery("#header-scrl").css("top","0px");
            }
        });
    </script>
  </body>
</html>