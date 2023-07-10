</main>
<footer>
    <div class="footer-wrappr " data-background="<?php echo site_url('assets/front/img/gallery/footer-bg.png');?>">
        <div class="footer-area footer-padding ">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo mb-25">
                                <a href="index.html"><img src=" <?php echo site_url('assets/front/img/mom.png');?> " alt=""></a>
                            </div>
                            <div class="footer-tittle mb-50">
                            <p>
                                Magnifier Ou Maigrir: <br>
                                Voulez vous perdre ou gagner du poids ? Vous vous n'est pas trompé d'endroit :)
                                Les recettes de grand-mère vous aiderons 
                            </p>

                            </div>
                            <!-- Form -->

                            <!-- social -->
                            <div class="footer-social mt-50">
                                <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.pinterest.fr"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1"></div>

                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact</h4>
                                <ul>
                                    <li><p>mom@gmail.com</p></li>
                                    <li><p>+26134 33 021 81</p></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Developpeur</h4>

                                <ul>
                                    <?php if($developpeur!=null)
                                    {
                                         foreach($developpeur as $dev)
                                         {?>
                                            <li><p><?php echo $dev ;?></p></li>
                                    <?php } 
                                    } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits reservés<i class="fa fa-heart" aria-hidden="true"></i>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="<?php echo site_url('assets/front/js/vendor/modernizr-3.5.0.min.js');?>"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="<?php echo site_url('assets/front/js/vendor/jquery-1.12.4.min.js');?>"></script>
<script src="<?php echo site_url('assets/front/js/popper.min.js');?>"></script>
<script src="<?php echo site_url('assets/front/js/bootstrap.min.js');?>"></script>
<!-- Jquery Mobile Menu -->
<script src="<?php echo site_url('assets/front/js/jquery.slicknav.min.js');?>"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="<?php echo site_url('assets/front/js/owl.carousel.min.js');?>"></script>
<script src="<?php echo site_url('assets/front/js/slick.min.js');?>"></script>
<!-- One Page, Animated-HeadLin -->
<script src="<?php echo site_url('assets/front/js/wow.min.js');?>"></script>
<script src="<?php echo site_url('assets/front/js/animated.headline.js');?>"></script>
<script src="<?php echo site_url('assets/front/js/jquery.magnific-popup.js');?>"></script>

<!-- Date Picker -->
<script src="<?php echo site_url('assets/front/js/gijgo.min.js');?>"></script>

<!-- Video bg -->
<script src="<?php echo site_url('assets/front/js/jquery.vide.js');?>"></script>

<!-- Nice-select, sticky -->
<script src="<?php echo site_url('assets/front/js/jquery.nice-select.min.js');?>"></script>
<script src="<?php echo site_url('assets/front/js/jquery.sticky.js');?>"></script>
<!-- Progress -->
<script src="<?php echo site_url('assets/front/js/jquery.barfiller.js');?>"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="<?php echo site_url('assets/front/js/jquery.counterup.min.js');?>"></script>
<script src="<?php echo site_url('assets/front/js/waypoints.min.js');?>"></script>
<script src="<?php echo site_url('assets/front/js/jquery.countdown.min.js');?>"></script>
<script src="<?php echo site_url('assets/front/js/hover-direction-snake.min.js');?>"></script>

<!-- contact js -->
<script src="<?php echo site_url('assets/front/js/hover-direction-snake.min.js');?>"></script>
<script src="<?php echo site_url('assets/front/js/jquery.form.js');?>"></script>
<script src="<?php echo site_url('assets/front/js/jquery.validate.min.js');?>"></script>
<script src="<?php echo site_url('assets/front/js/mail-script.js');?>"></script>
<script src="<?php echo site_url('assets/front/js/jquery.ajaxchimp.min.js');?>"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="<?php echo site_url('assets/front/js/plugins.js');?>"></script>
<script src="<?php echo site_url('assets/front/js/main.js');?>"></script>

</body>
</html>