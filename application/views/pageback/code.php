<div class="container-fluid py-4">
  <h1 class="font-weight-bolder mb-0">CODES</h1>
  <br>
  <br>
  <div class="row">
  <div class="row col-md-12">
  <h6 class="font-weight-bolder mb-0">LISTE DES CODES UTILISABLES</h6>
  <?php for ($i=0; $i < count($code1); $i++) { ?>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">CODE</p>
                <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php echo($code1[$i]['code']) ?></p>
                <h5 class="font-weight-bolder mb-0">
                  <?php echo($code1[$i]['montant']) ?>
                  <span class="text-success text-sm font-weight-bolder">AR</span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
  <?php } ?>
  </div>
  
  <div class="row col-md-6">
  <h6 class="font-weight-bolder mb-0">CODE DE CREDIT A VALIDER</h6>
  <?php for ($i=0; $i < count($code); $i++) { ?>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">CODE</p>
                <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php echo($code[$i]['code']) ?></p>
                <h5 class="font-weight-bolder mb-0">
                  <?php echo($code[$i]['montant']) ?>
                  <span class="text-success text-sm font-weight-bolder">AR</span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <a href="<?php echo site_url()?>onicontroller/codevalidation?idcode=<?php echo $code[$i]['idcode']; ?>&idutilisateur=<?php echo $code[$i]['idutilisateur']; ?>&montant=<?php echo $code[$i]['montant']; ?>">
              OK
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
  <?php } ?>
  </div>
  <div class="row col-md-6">
  <h6 class="font-weight-bolder mb-0">CODE DE CREDIT NON REUTILISABLES</h6>
  <br>
  <br>
  <?php for ($i=0; $i < count($code11); $i++) { ?>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">CODE</p>
                <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php echo($code11[$i]['code']) ?></p>
                <h5 class="font-weight-bolder mb-0">
                  <?php echo($code11[$i]['montant']) ?>
                  <span class="text-success text-sm font-weight-bolder">AR</span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end" >
            <span class="badge badge-sm bg-gradient-success">V</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
  <?php } ?>
  </div>
  </div>
</div>

</main>
</body>