<div id="pdf-content">
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
            <h1 class="text-heading"><b>MoM :</b> Magnifier ou Maigrir </h1>
            <p class="sample-text">
                <b>Nom : </b>
                <?php echo $information[0]['nom'];?> <br><br>
                <b>Poids : </b>
                <?php echo $information[0]['poids'];?> kg<br><br>
                <b>Longueur : </b>
                <?php echo $information[0]['taille']; ?> cm<br><br>
                <b>Genre : </b>
                <?php 
                        if ($information[0]['idgenre'] == 0) {
                            echo 'non specifie';
                        }elseif ($information[0]['idgenre'] == 1) {
                            echo 'homme';
                        }elseif ($information[0]['idgenre'] == 2) {
                            echo 'femme';
                        }
                    ?>
            </p>
        </div>
    </section>


    <div class= "sakafo" style="display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: flex-start;">
    <h1>liste repas</h1>
    <hr>

        <?php for ($i=0; $i < count($repas); $i++) { ?>
        <div>
            <div class="single-card text-center mb-30">
                <!-- <div class="card-top">
                    <img src="" alt="sary">
                </div> -->
                <div class="card-mid">
                    <h4><?php echo $repas[$i]['prix'];?> <span></span></h4>
                </div>
                <div class="card-bottom">
                    <ul>
                        <li>Nom:<?php echo $repas[$i]['nom']?></li>
                        <li>Variation poids <?php echo $repas[$i]['poidsvariation'] ?></li>
                    </ul>
                </div>
            </div>


        </div>
        <?php }?>

    </div>
    <div class= "sakafo" style="display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: flex-start;">
    <h1>liste sport</h1>
    <hr>

        <?php for ($i=0; $i < count($sport); $i++) { ?>
        <div>
            <div class="single-card text-center mb-30">
                <!-- <div class="card-top">
                    <img src="" alt="sary">
                </div> -->
                <div class="card-mid">
                   
                </div>
                <div class="card-bottom">
                    <ul>
                        <li>Type: <?php echo $sport[$i]['nom']?></li>
                        <li>Variation poids : <?php echo $sport[$i]['poidsvariation']?> </li>
                    </ul>
                </div>
            </div>


        </div>
        <?php }?>

    </div>

        <div class="d-flex">
            <div class="mx-auto" onclick="generatePDF()">
                <a href="#" class="genric-btn danger">Exporter</a>
            </div>
        </div>
        <br>
        <div class="d-flex">
            <div class="mx-auto" >
                <a href="<?php echo site_url()?>miradoci/suivre?montant=<?php echo $montant; ?>" class="genric-btn danger">Suivre le regime</a>
            </div>
        </div>
        <br>
        <!-- 
<div id="pdf-content">
        <h1>MoM</h1>

    </div>
    <div><button onclick="generatePDF()">Exporter</button></div> 
 </div> -->