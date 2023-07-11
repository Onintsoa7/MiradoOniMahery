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
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N°</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nom utilisateur</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact</th>
              <th class="text-secondary opacity-7"></th>
              <th class="text-secondary opacity-7"></th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0; $i < count($utilisateurs); $i++) {  ?>
            <tr>
              <td>
                <div class="d-flex px-2 py-1">
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm"><?php echo($utilisateurs[$i]['id']); ?></h6>
                  </div>
                </div>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0"><?php echo($utilisateurs[$i]['nom']); ?></p>
              </td>
              <td>
                <div class="d-flex px-2 py-1">
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm"><?php echo($utilisateurs[$i]['email']); ?></h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex px-2 py-1">
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm"><?php echo($utilisateurs[$i]['contact']); ?></h6>
                  </div>
                </div>
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
