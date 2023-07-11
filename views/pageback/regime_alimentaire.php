
<div class="col-6 text-end">
  <a class="btn bg-gradient-dark mb-0" id="btn-open-modal" data-toggle="modal" data-target="#capitale"><i class="fas fa-plus"></i>&nbsp;&nbsp;NOUVEAU REGIME</a>
</div>

<div class="container-fluid py-4">
  <div class="card mb-4">
    <div class="card-header pb-0">
      <h6>LISTE DES PLATS DE REGIME ALIMENTAIRE</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">REGIME</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DUREE</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PLAT</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PRIX</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity">OBJECTIF</th>
              <th class="text-secondary opacity-7"></th>
              <th class="text-secondary opacity-7"></th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $totalPrix = 0;
            for ($i = 0; $i < count($regime_alimentaire_relation); $i++) {
                  $totalPrix += $regime_alimentaire_relation[$i]['prix'];
              ?>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $regime_alimentaire_relation[$i]['nomr']; ?></h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $regime_alimentaire_relation[$i]['duree']; ?> jours</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $regime_alimentaire_relation[$i]['nom']; ?></h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $regime_alimentaire_relation[$i]['prix']; ?> AR</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <?php 
                  $j = array_search($regime_alimentaire_relation[$i]['id_regime_alimentaire'], array_column($sum_regime, 'idregime'));
                  if ($j !== false) {
                    $prix = $sum_regime[$j]['prix'];
                    $poidsvariation = $sum_regime[$j]['poidsvariation'];
                    
                    // Affichage de poidsvariation et détermination perte/gain de poids
                    echo '<p class="text-xs font-weight-bold mb-0">' . $poidsvariation . '</p>';
                    
                    if ($poidsvariation < 0) {
                      echo '<p class="text-xs font-weight-bold mb-0">Perte de poids</p>';
                    } elseif ($poidsvariation > 0) {
                      echo '<p class="text-xs font-weight-bold mb-0">Gain de poids</p>';
                    }
                  }
                  ?>
                </td>
                <td class="align-middle text-center">
                  <button class="btn bg-gradient-dark mb-0" data-toggle="modal">
                  <a href="<?php echo site_url() ?>onicontroller/modifierregimealimentairerelation?idregimealimentairerelation=<?php echo $regime_alimentaire_relation[$i]['id_regime_alimentaire']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Modifier
                  </a>
                </button >
                </td>
                <td class="align-middle">
                <button class="btn bg-gradient-dark mb-0" id="btn-open-delete" data-toggle="modal" data-target="#delete">
  Supprimer
</button>
                </td>
              </tr> 
            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</main>


<div class="popup" id="delete-popup">
  <div class="popup-content">
    <h3>EN USAGE</h3>
    <div class="popup-buttons">
      <button class="btn btn-danger" id="btn-close-delete">Close</button>
    </div>
  </div>
</div>

<style>
  .modal {
    display: none;
    position: fixed;
    z-index: -5;
    left: -10;
    top: -5;
    width: 100%;
    height: 100%;
    overflow: auto;
  }

  .modal-content {
    position: relative;
    display: flex;
    flex-direction: row;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.75rem;
    outline: 0;
  }

  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  .input-group {
    margin-bottom: 15px;
  }

  label {
    margin-right: 10px;
  }

  .form-control {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  .btn-submit {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .btn-submit:hover {
    background-color: #45a049;
  }
  .popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
  }

  .popup-content {
    background-color: #fff;
    max-width: 400px;
    margin: 100px auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  }

  .popup h3 {
    margin-top: 0;
  }

  .popup-buttons {
    margin-top: 20px;
    text-align: right;
  }

  .btn {
    display: inline-block;
    padding: 8px 12px;
    margin-left: 5px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
  }

  .btn-cancel {
    background-color: #ccc;
  }

  .btn-danger {
    background-color: #ff4c4c;
    color: #fff;
  }
</style>
<div id="modal" class="modal" style="width: 55pc;">
  <div class="modal-content">
    <span class="close">&times;</span>
    <form method="post" action="<?php echo site_url(); ?>onicontroller/insertion_regime_alimentaire">
      <?php for ($i=0; $i < count($regime); $i++) { ?>
      <div class="input-group">
        <label for="regime<?php echo($regime[$i]['id']); ?>"><?php echo($regime[$i]['nom']); ?></label>
        <input type="checkbox" id="regime" name="regime[]" value="<?php echo($regime[$i]['id']); ?>">
      </div>
      <?php } ?>

      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Nom de regime..." id="nom" name="nom">
        </div>
      </div>
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Durée..." id="duree" name="duree">
        </div>
      </div>
      <div class="input-group">
        <input type="submit" class="btn bg-gradient-dark mb-0" value="Soumettre">
      </div>
    </form>
  </div>
</div>

<script>
  window.addEventListener('load', function() {
    var btnOpenDelete = document.getElementById('btn-open-delete');
    var popup = document.getElementById('delete-popup');
    var btnCloseDelete = document.getElementById('btn-close-delete');

    btnOpenDelete.addEventListener('click', function() {
      popup.style.display = 'block';
    });

    btnCloseDelete.addEventListener('click', function() {
      popup.style.display = 'none';
    });
  });
</script>

<script>
  window.addEventListener('load', function() {
    var btnOpenModal = document.getElementById("btn-open-modal");
    var modal = document.getElementById("modal");
    var closeModal = document.getElementsByClassName("close")[0];

    btnOpenModal.addEventListener("click", function() {
      modal.style.display = "block";
    });

    closeModal.addEventListener("click", function() {
      modal.style.display = "none";
    });

    window.addEventListener("click", function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    });
  });
</script>

<script>
  
  const duree = document.getElementById('duree');
  duree.addEventListener('input', function() {
    const illegalCharacters = /[-*+!@#$%^&()_+=[azertyàçèéùuiopqsdfghjklmwxcvbn\]{};':"\\|,<>/?]/g;
    if (illegalCharacters.test(this.value)) {
      this.value = this.value.replace(illegalCharacters, '');
    }
  });



  
</script>