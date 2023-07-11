<main class="main-content  mt-0">
  <div class="page-header min-vh-75">
    <div class="card-body">
  <center><h1>MODIFICATION DE PLAT</h1></center>
      <form method="post" action="<?php echo site_url() ?>onicontroller/updateregime">
        <label>Nom du plat</label>
        <div class="mb-3">
          <input type="text" class="form-control" value="<?php echo $regime[0]['nom'] ?>" placeholder="Nom du plat" name="nom" aria-label="Nom du plat" id="nom" aria-describedby="email-addon">
        </div>
        <label>Objectif</label>
        <div class="mb-3">
          <select class="form-control" id="objectif" name="objectif" value="<?php echo $regime[0]['idobjectif'] ?>">
            <option  value="<?php echo $regime[0]['idobjectif'] ?>">Selectionner un objectif...</option>
            <option value="1">Mincir</option>
            <option value="2">Prendre du poids</option>
            <!-- Add more options as needed -->
          </select>
        </div>
        <label>Poids de variation</label>
        <div class="mb-3">
          <input type="text" class="form-control" value="<?php echo $regime[0]['poidsvariation'] ?>" placeholder="Poids de variation" name="poidsvariation" aria-label="Poids de variation" id="poidsvariation" aria-describedby="email-addon">
        </div>
        <label>Prix</label>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Prix" name="prix" aria-label="Prix" value="<?php echo $regime[0]['prix'] ?>" id="prix" aria-describedby="email-addon">
        </div>
        <div class="text-center">
          <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">VALIDER</button>
        </div>
        <input type="hidden" value="<?php echo $regime[0]['id'] ?>" name="id" id="id">
      </form>
    </div>
  </div>
</main>

<script>
  
  const prix = document.getElementById('prix');
  const poidsvariation = document.getElementById('poidsvariation');
  poidsvariation.addEventListener('input', function() {
    const illegalCharacters = /[*+!@#$%^&()_+=[azertàçèéyuùiopqsdfghjklmwxcvbn\]{};':"\\|,<>/?]/g;
    if (illegalCharacters.test(this.value)) {
      this.value = this.value.replace(illegalCharacters, '');
    }
  });
    prix.addEventListener('input', function() {
    const illegalCharacters = /[-*+!@#$%^&()_+=[azertàçèéyuùiopqsdfghjklmwxcvbn\]{};':"\\|,<>/?]/g;
    if (illegalCharacters.test(this.value)) {
      this.value = this.value.replace(illegalCharacters, '');
    }
  });
  </script>