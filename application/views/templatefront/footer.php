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
                                 Nous vous remercions pour votre confiance . Stay tuned !

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


<!-- PDF -->
<script src="<?php echo site_url('assets/pdf/html2canvas.min.js');?>"></script>
<script src="<?php echo site_url('assets/pdf/jspdf.plugin.autotable.min.js');?>"></script>
<script src="<?php echo site_url('assets/pdf/jspdf.umd.min.js');?>"></script>


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


<!-- modal -->
<script src="<?php echo site_url('assets/profil/bootstrap-4.1/bootstrap.min.js');?>"></script>
<script src="<?php echo site_url('assets/profil/jquery-3.2.1.min.js');?>"></script>


</body>
</html>


  <!-- Modal -->


  <div class="modal fade" id="gagner" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-body p-4 px-5">
                <div class="main-content text-center">
                    <a href="#" class="close-btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><span class="icon-close2"></span></span>
                    </a>
                    <div class="warp-icon mb-4">
                        <span class="icon-lock2"></span>
                    </div>
                    <form action="<?php echo base_url('miradoci/insert_objectif_client') ?>" method="get">
                        <H5>Gagner du poids</H5>
                        <input type="hidden" name="poids" value="2">
                        <p class="mb-4">Entrer l'estimation du poids que vous aimeriez gagner.</p>
                        <div class="mt-10">
                            <input type="number" name="pese" placeholder="KG" onfocus="this.placeholder = ''" onblur="this.placeholder = 'KG'" required="" class="single-input">
                        </div>
                        <br>
                        <div class="d-flex">
                            <div class="mx-auto">

                                <button type="submit" class="genric-btn primary">Voir suggestion</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="perdre" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-body p-4 px-5">
                <div class="main-content text-center">
                    <a href="#" class="close-btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><span class="icon-close2"></span></span>
                    </a>
                    <div class="warp-icon mb-4">
                        <span class="icon-lock2"></span>
                    </div>
                    <form action="" method="get">
                        <H5>Perdre du poids</H5>
                        <input type="hidden" name="poids" value="1">
                        <p class="mb-4">Entrer l'estimation du poids que vous aimeriez perdre.</p>
                        <div class="mt-10">
                            <input type="number" name="poids" placeholder="KG" onfocus="this.placeholder = ''" onblur="this.placeholder = 'KG'" required="" class="single-input">
                        </div>
                        <br>
                        <div class="d-flex">
                            <div class="mx-auto">
                                <button type="submit" class="genric-btn primary">Voir suggestion</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function generatePDF() {
    // Create a new jsPDF instance
        window.jsPDF = window.jspdf.jsPDF;
        const doc = new jsPDF();

    // Get the content of the PHP page
        const content = document.querySelector('#pdf-content');

    // Generate the PDF using jsPDF
        doc.html(content, {
            callback: function(doc) {
                doc.save('exported_pdf.pdf');
            },
            x:15,
            y:15,
            width:170,
            windowWidth:650
        });

        
    }
</script>

<div class="modal fade" id="capitale" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-body p-4 px-5">
                <div class="main-content text-center">
                    <a href="#" class="close-btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><span class="icon-close2"></span></span>
                    </a>
                    <div class="warp-icon mb-4">
                        <span class="icon-lock2"></span>
                    </div>
                    <h1>Configuration profil</h1>
                    <form action="<?php echo base_url('miradoci/insertion_profil'); ?>" method="post">
                       <h3>Poids</h3>
						<div class="mt-10">
							<input type="text" name="poids" placeholder="Poids  " id="poids"
							onfocus="this.placeholder = ''" onblur="this.placeholder = 'Poids'" required
					    	class="single-input">
						</div>
                        <h3>Longueur</h3>
						<div class="mt-10">
							<input type="text" name="longueur" placeholder="Longueur" id="longueur"
							onfocus="this.placeholder = ''" onblur="this.placeholder = 'Longueur'" required
					    	class="single-input">
						</div>
                        <div class="single-element-widget mt-30">
						<h3 class="mb-30">Genre</h3>
                        <div class="form-check">
                            <input class="form-check-input" value = "2" type="radio" name="idgenre" id="flexRadioDefault1"/>
                            <label class="form-check-label" for="flexRadioDefault1" value = "2"> Femme </label>
                            </div>

                            <div class="form-check">
                            <input class="form-check-input" value = "1" type="radio" name="idgenre" id="flexRadioDefault2" checked/>
                            <label class="form-check-label" for="flexRadioDefault2" value = "1"> Homme </label>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex">
                            <div class="mx-auto">
                                <button type="submit" class="genric-btn primary">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>

    <script>
        const longueur = document.getElementById('longueur');
        const poids = document.getElementById('poids');
        longueur.addEventListener('input', function() {
    const illegalCharacters = /[-*+!@#$%^&()_+=[azertàçèéyuùiopqsdfghjklmwxcvbn\]{};':"\\|,<>/?]/g;
    if (illegalCharacters.test(this.value)) {
      this.value = this.value.replace(illegalCharacters, '');
    }
  });
  poids.addEventListener('input', function() {
    const illegalCharacters = /[-*+!@#$%^&()_+=[azertàçèéyuùiopqsdfghjklmwxcvbn\]{};':"\\|,<>/?]/g;
    if (illegalCharacters.test(this.value)) {
      this.value = this.value.replace(illegalCharacters, '');
    }
  });
    </script>

</body>
</html>

