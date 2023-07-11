<section class="pricing-card-area fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-tittle text-center mb-90">
                    <h1>MoM : Magnifier ou Maigrir</h1>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                
                </div>

            </div>
        </div>
    </section>
<section class="sample-text-area">
    <div class="container box_1170">
       
        <p class="sample-text">
            <b><H1>Activité : </b> <?php echo $message ?> </H1>
    </div>
</section>
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <?php for ($i=0; $i < count($regime) ; $i++) {  ?>
                    <div class="row">
                        <div class="col-md-3">
                            <img  src="<?php echo site_url('assets/front/img/elements/d.jpg');?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-7 mt-sm-18">
                            <p>
                                <b><h2>Regime :  </b><?php echo $regime[$i]['nom']?></h2>    <br>

                                <b>Durée : </b> <?php echo $regime[$i]['duree'] ?> jours<br> 
                                <b>Prix : </b> <?php echo number_format($regime[$i]['total'], 0, ',', ' ')?> Ariary<br>
                                <b>Variation en poids : </b> <?php echo $regime[$i]['poidsvariation'] ;?> kg<br>

                            </p>
                        </div>
                        <div class="col-md-2 "> 
                            <div class="d-flex">
                                <div class="mx-auto">
                                    <a href="<?php echo base_url('miradoci/redirect_export');?>?objectif=<?php echo $objectif[0]['idobjectif'] ;?>&&montant=<?php echo $regime[$i]['total'] ;?>" class="genric-btn primary">Voir details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
            <?php } ?>
        </div>
    </div>
</div>