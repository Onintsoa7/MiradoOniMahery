<main>
    <!-- Slider Area Start-->
    <div class="slider-area slider-bg ">
        <!-- Single Slider -->
        <div class="single-slider d-flex align-items-center slider-height3">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-12 ">
                        <div class="hero__caption hero__caption3 text-center">
                            <h1 data-animation="fadeInLeft" data-delay=".6s ">Echange de monnaie</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Shape -->
        <div class="slider-shape d-none d-lg-block">
            <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
        </div>
    </div>

    <section class="button-area">
        <div class="container box_1170 border-top-generic">
            <h3 class="text-heading">Entrer La somme a echanger</h3>
            <div class="button-group-area">
                <?php 
                    if (isset($message)) {?>
                        <h2> <?php echo $message ?></h2>
                   <?php }
                ?>
                <?php for ($i=0; $i < count($code); $i++) { ?>
                    <a data-toggle="modal" data-target="#code<?php echo $code[$i]['idcode'];?>" href="#" class="genric-btn primary">AR <?php  echo number_format($code[$i]['montant'], 0, ',', ' ') ;?></a>
                    <div class="modal fade" id="code<?php echo $code[$i]['idcode'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                        <form action="<?php echo base_url('miradoci/update_code');?>" method="get">
                                            <H5>Code</H5>
                                            <input type="hidden" name="idcode" value="<?php echo $code[$i]['idcode']?>">
                                            <p class="mb-4"><?php echo $code[$i]['code']?></p>
                                            <br>
                                            <div class="d-flex">
                                                <div class="mx-auto">
                                                    <button type="submit" class="genric-btn primary">Demander</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
        
        <!-- End Align Area -->
</main>
