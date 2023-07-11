<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url('./assets/login_front/style.css');?>" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="<?php echo base_url('Welcome/login')?>" class="sign-in-form" method="post">
            <!-- CONNEXIONNNNN -->
          <h2 class="title">Connexion</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="nom" placeholder="Nom ou adresse e-mail" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name = "mdp" placeholder="Mot de passe" />
          </div>
          <input type="submit" value="Se connecter" class="btn solid"/>
          <p class="social-text"></p>
          <!--  ----------------- -->
        </form>
        <form action="<?php echo base_url('Welcome/inscription');  ?>" class="sign-up-form" method="post">
            <!-- INSCRIPTIOn -->
          <h2 class="title">Inscription</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nom" name= "nom"/>
          </div>
          <div class="input-field">
            <i class="fas fa-phone"></i>
            <input type="text" placeholder="Contact" name = "contact" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email"  name = "mail"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mot de passe" name= "pass" />
          </div>
          <input type="submit" class="btn" value="S'enregistrer" />
          <p class="social-text"></p>
          <!-- -------------------- -->
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Nouveau Ici ?</h3>
          <p> 
            Devenez l'un des nôtres et découvrez une communauté dévouée qui partage votre passion pour une alimentation consciente. Rencontrez des chefs talentueux, des nutritionnistes 
            experts et des amateurs de cuisine créatifs qui sont tous réunis par l'amour de la nourriture saine et savoureuse. Notre réseau est un espace d'échange, 
            de partage et de soutien mutuel où vous pourrez poser des questions, trouver de l'inspiration et célébrer vos succès. Ensemble, nous briserons les barrières
            des régimes restrictifs et favoriserons une approche positive et holistique de l'alimentation. Rejoignez-nous et faites partie d'une communauté dynamique et
            bienveillante qui vous accompagnera dans votre voyage vers une vie nourrie de santé et de bonheur.
          </p>
          <button class="btn transparent" id="sign-up-btn">
            S'enregistrer
          </button>
        </div>
        <img src="<?php echo base_url('./assets/login_front/img/32002.svg');?>" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Un de nous ?</h3>
          <p>
            "Plongez dans l'univers étonnant du régime alimentaire où chaque bouchée est une découverte vers une santé optimale.
             Explorez les secrets d'une alimentation équilibrée, des recettes délicieuses et les bienfaits insoupçonnés des aliments. Rejoignez 
             cette aventure culinaire où nous repoussons les limites pour une vie plus saine. Ensemble, explorons les trésors de la nature, des
              superaliments aux herbes médicinales, et partageons nos connaissances 
            pour une vitalité renouvelée. Préparez-vous à révolutionner votre approche alimentaire pour une transformation profonde, physique et mentale."
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Se connecter
          </button>
        </div>
        <img src="<?php echo base_url('./assets/login_front/img/1975689.svg'); ?>" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="<?php echo base_url('./assets/login_front/app.js')?>"></script>
</body>

</html>