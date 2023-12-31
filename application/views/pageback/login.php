<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href=<?php echo base_url('assets/img/apple-icon.png') ?>>
  <link rel="icon" type="image/png" href=<?php echo base_url('assets/img/favicon.png') ?>>
  <title>
    MOM: Magnifier ou Maigrir
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href=<?php echo base_url('assets/back/css/nucleo-icons.css') ?> rel="stylesheet" />
  <link href=<?php echo base_url('assets/back/css/nucleo-svg.css') ?> rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href=<?php echo base_url('assets/back/css/nucleo-svg.css') ?> />
  <!-- CSS Files -->
  <link id="pagestyle" href=<?php echo base_url('assets/back/css/soft-ui-dashboard.css') ?> rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent" style="width: 40pc;">
                  <h3 class="font-weight-bolder text-info text-gradient">ADMINISTRATION</h3>
                  <p class="mb-0">Veuillez vous identifier</p>
                </div>
                <div class="card-body">
                  <form method="post" action="<?php echo site_url() ?>onicontroller/verify_login">
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Email/Nom" name="nom" aria-label="Email/Nom" id="nom" aria-describedby="email-addon">
                    </div>
                    <label>Mot de passe</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Mot de passe" aria-label="Mot de passe" name="mdp" id="mdp" aria-describedby="password-addon">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">S' IDENTIFIER</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src=<?php echo base_url('assets/back/js/core/popper.min.js') ?>></script>
  <script src=<?php echo base_url('assets/back/js/core/bootstrap.min.js') ?>></script>
  <script src=<?php echo base_url('assets/back/js/plugins/perfect-scrollbar.min.js') ?>></script>
  <script src=<?php echo base_url('assets/back/js/plugins/smooth-scrollbar.min.js') ?>></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src=https://buttons.github.io/buttons.js></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src=<?php echo base_url('assets/back/js/soft-ui-dashboard.js.map') ?>></script>
</body>

</html>