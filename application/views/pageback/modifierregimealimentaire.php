<main class="main-content  mt-0">
  <div class="page-header min-vh-75">
    <div class="card-body">
  <center><h1>MODIFICATION DE REGIME ALIMENTAIRE</h1></center>
      <form method="post" action="<?php echo site_url() ?>onicontroller/updateregimealimentaire">
        <h4>Les plats</h4>
        <?php for ($i = 0; $i < count($regime); $i++) { ?>
    <div class="input-group">
        <label for="regime<?php echo $regime[$i]['id']; ?>"><?php echo $regime[$i]['nom']; ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" id="regime<?php echo $regime[$i]['id']; ?>" name="regime[]" value="<?php echo $regime[$i]['id']; ?>" <?php if (in_array($regime[$i]['id'], $selected_regimes)) echo 'checked'; ?>>
    </div>
<?php } ?>
        <h4>Nom du régime</h4>
        <div class="mb-3">
          <input type="text" class="form-control" value="<?php echo $regimealimentaire[0]['nomr'] ?>" placeholder="Poids de variation" name="nom" aria-label="Poids de variation" id="nom" aria-describedby="email-addon">
        </div>
        <h4>Duree du régime</h4>
        <div class="mb-3">
          <input type="text" class="form-control" value="<?php echo $regimealimentaire[0]['duree'] ?>" placeholder="Poids de variation" name="duree" aria-label="Poids de variation" id="duree" aria-describedby="email-addon">
        </div>
        <div class="text-center">
          <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">VALIDER</button>
        </div>
        <input type="hidden" value="<?php echo $regimealimentaire[0]['id_regime_alimentaire'] ?>"  name="id" id="id">
      </form>
    </div>
  </div>
</main>