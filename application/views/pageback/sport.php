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
  <a class="btn bg-gradient-dark mb-0" id="btn-open-modal" data-toggle="modal" data-target="#capitale"><i class="fas fa-plus"></i>&nbsp;&nbsp;NOUVELLE ACTIVITE SPORTIVE</a>
</div>
<div class="container-fluid py-4">
  <div class="card mb-4">
    <div class="card-header pb-0">
      <h6>LISTE DES ACTIVITES SPORTIVES</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Activite</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Poids de variation</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Objectif</th>
              <th class="text-secondary opacity-7"></th>
              <th class="text-secondary opacity-7"></th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0; $i < count($sport); $i++) {  ?>
            <tr>
              <td>
                <div class="d-flex px-2 py-1">
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm"><?php echo($sport[$i]['nom']); ?></h6>
                  </div>
                </div>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0"><?php echo($sport[$i]['poidsvariation']); ?></p>
              </td>
              <td>
              <?php $p = ($sport[$i]['idobjectif']);
              if($p == 1){
                ?>
                <p class="text-xs font-weight-bold mb-0">Perte de poids</p>
            <?php } elseif($p == 2){
            ?>
              <p class="text-xs font-weight-bold mb-0">Prise de poids</p>
            <?php } ?>
            </td>
              <td class="align-middle text-center">
                  <button class="btn bg-gradient-dark mb-0" data-toggle="modal">
                <a href="<?php echo site_url() ?>onicontroller/modifiersport?idsport=<?php echo($sport[$i]['id']); ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                  Modifier
                </a>
                </button >
              </td>
                <td class="align-middle">
                  <button class="btn bg-gradient-dark mb-0" id="btn-open-delete" data-toggle="modal" data-target="#delete" >
                    Supprimer
                </button >
                </td>
            </tr>

            <div id="#capitale<?php echo $sport[$i]['id'];?>" class="modal">
  <div class="modal-content" style="width: 30pc;">
    <span class="close">&times;</span>
    <h2>ACTIVITE SPORTIVE</h2>
    <form method="post" action="<?php echo site_url(); ?>onicontroller/insertion_sport">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de l'activité...">
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
          <input type="submit" class="form-control" value="Soumettre">
        </div>
      </div>
      <br>
    </form>
  </div>
</div>

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
    <h3>SPORT EN ACTIVITE</h3>
    <div class="popup-buttons">
      <button class="btn btn-danger" id="btn-close-delete">Close</button>
    </div>
  </div>
</div>

<div id="modal" class="modal">
  <div class="modal-content" style="width: 30pc;">
    <span class="close">&times;</span>
    <h2>ACTIVITE SPORTIVE</h2>
    <form method="post" action="<?php echo site_url(); ?>onicontroller/insertion_sport">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de l'activité...">
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
          <input type="submit" class="form-control" value="Soumettre">
        </div>
      </div>
      <br>
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
  const poidsvariation = document.getElementById('poidsvariation');
  poidsvariation.addEventListener('input', function() {
    const illegalCharacters = /[-*+!@#$%^&()_+=[azertàçèéyuùiopqsdfghjklmwxcvbn\]{};':"\\|,<>/?]/g;
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