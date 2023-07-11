<style>
  .modal {
    display: none;
    /* Cacher le modal par défaut */
    position: fixed;
    /* Position fixe pour le modal */
    z-index: 1;
    /* Assurez-vous que le modal est au-dessus des autres éléments */
    left: 0;
    top: 0;
    width: 50%;
    height: 100%;
    overflow: auto;
    /* Ajoutez un défilement si le contenu du modal est trop grand */
    background-color: rgba(0, 0, 0, 0.5);
    /* Couleur de fond semi-transparente pour l'effet d'ombrage */
  }

  .modal-content {
    background-color: #fefefe;
    margin: 10% auto;
    /* Centrer le modal verticalement et horizontalement */
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
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

<div class="col-6 text-end">
  <a class="btn bg-gradient-dark mb-0" id="btn-open-modal" data-toggle="modal" data-target="#capitale"><i class="fas fa-plus"></i>&nbsp;&nbsp;NOUVEAU PLAT</a>
</div>

<div class="container-fluid py-4">
  <div class="card mb-4">
    <div class="card-header pb-0">
      <h6>LISTE DES PLATS DE REGIMES</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Activite</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Poids de variation</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Objectif</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prix</th>
              <th class="text-secondary opacity-7"></th>
              <th class="text-secondary opacity-7"></th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0; $i < count($regime); $i++) {  ?>
            <tr>
              <td>
                <div class="d-flex px-2 py-1">
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm"><?php echo($regime[$i]['nom']); ?></h6>
                  </div>
                </div>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0"><?php echo($regime[$i]['poidsvariation']); ?></p>
              </td>
              <td>
              <?php $p = ($regime[$i]['idobjectif']);
              if($p == 1){
                ?>
                <p class="text-xs font-weight-bold mb-0">Perte de poids</p>
            <?php } elseif($p == 2){
            ?>
              <p class="text-xs font-weight-bold mb-0">Prise de poids</p>
            <?php } ?>
            </td>
              <td>
                <div class="d-flex px-2 py-1">
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm"><?php echo($regime[$i]['prix']); ?> AR</h6>
                  </div>
                </div>
              </td>
              <td class="align-middle text-center">
                  <button class="btn bg-gradient-dark mb-0"  data-toggle="modal" >
                <a href="<?php echo site_url() ?>onicontroller/modifierregime?idregime=<?php echo($regime[$i]['id']); ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                  Modifier
                </a>
                </button >
              </td>
              <td>
                
      <!-- mahery -->
      <button class="btn bg-gradient-dark mb-0"  data-toggle="modal" >
                      <a href="<?php echo site_url() ?>maherycontroller/composition?idregime=<?php echo($regime[$i]['id']); ?>&nom_regime=<?php echo($regime[$i]['nom']); ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Composition
                      </a>
                  </button >
      <!--  -->
              </td>
                <td class="align-middle">
                  <button class="btn bg-gradient-dark mb-0" id="btn-open-delete" data-toggle="modal" data-target="#delete" >
                    Supprimer
                </button >
                </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</main>



<div class="popup" id="delete-popup">
  <div class="popup-content">
    <h3>PLAT DISPONIBLE</h3>
    <div class="popup-buttons">
      <button class="btn btn-danger" id="btn-close-delete">Close</button>
    </div>
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

<div id="modal" class="modal">
  <div class="modal-content" style="width: 30pc;">
    <span class="close">&times;</span>
    <h2>NOUVEAU REGIME</h2>
    <form method="post" action="<?php echo site_url(); ?>onicontroller/insertion_regime">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom du plat...">
        </div>
      </div>
      <br>
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <select class="form-control"  id="objectif" name="objectif">
            <option value="">Selectionner un objectif...</option>
            <option value="1">Mincir</option>
            <option value="2">Prendre du poids</option>
            <!-- Add more options as needed -->
          </select>
        </div>
      </div>
      <br>
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Poids de variation..." id="poidsvariation"  name="poidsvariation">
        </div>
      </div>
      <br>
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Prix..." id="montant" name="montant">
        </div>
      </div>
      <br>
      <table class="table">
      <thead>
        <tr>
          <th>Composition</th>
          <th>Quantité</th>
        </tr>
      </thead>
      <tbody>
        <?php for ($i = 0; $i < count($composition); $i++) { ?>
          <tr>
            <td><?php echo $composition[$i]['nom']; ?></td>
            <td><input type="text" class="form-control" placeholder="Quantité..." id="composition<?php echo $composition[$i]['id']; ?>" name="composition<?php echo $composition[$i]['id']; ?>"></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <input type="submit" class="form-control" value="Soumettre">
        </div>
      </div>
      <br>
    </form>
  </div>
</div>



<script>
  
  const montant = document.getElementById('montant');
  const composition = document.querySelector('input[id*=composition]');
  const poidsvariation = document.getElementById('poidsvariation');
  composition.addEventListener('input', function() {
    const illegalCharacters = /[-*+!@#$%^&()_+=[azertàçèéyuùiopqsdfghjklmwxcvbn\]{};':"\\|,<>/?]/g;
    if (illegalCharacters.test(this.value)) {
      this.value = this.value.replace(illegalCharacters, '');
    }
  });
  poidsvariation.addEventListener('input', function() {
    const illegalCharacters = /[-*+!@#$%^&()_+=[azertàçèéyuùiopqsdfghjklmwxcvbn\]{};':"\\|,<>/?]/g;
    if (illegalCharacters.test(this.value)) {
      this.value = this.value.replace(illegalCharacters, '');
    }
  });
  montant.addEventListener('input', function() {
    const illegalCharacters = /[-*+!@#$%^&()_+=[azertyàçèéùuiopqsdfghjklmwxcvbn\]{};':"\\|,<>/?]/g;
    if (illegalCharacters.test(this.value)) {
      this.value = this.value.replace(illegalCharacters, '');
    }
  });
  window.addEventListener('load', function() {
    // Récupérer les éléments nécessaires
    var btnOpenModal = document.getElementById("btn-open-modal");
    var modal = document.getElementById("modal");
    var closeModal = document.getElementsByClassName("close")[0];

    // Ouvrir le modal lorsque le bouton est cliqué
    btnOpenModal.addEventListener("click", function() {
      modal.style.display = "block";
    });

    // Fermer le modal lorsque l'icône de fermeture est cliquée
    closeModal.addEventListener("click", function() {
      modal.style.display = "none";
    });

    // Fermer le modal lorsque l'utilisateur clique en dehors du modal
    window.addEventListener("click", function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    });
  });



  
</script>