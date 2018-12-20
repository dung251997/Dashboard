<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  
<!-- Head -->
<head>
  <title>Accueil</title>     
  <?php require('global/template-components/head_general.php'); ?>

</head>
<!-- Head -->
  
<body id="home">
  
<!-- Header header.php / header_connected.php -->
<?php require('global/template-components/header_connected.php'); ?>
<!-- Header -->


<div id="firstStop"></div>


<article class="grid-container full special_bg_white pageSign">
  <div class="container backgroundWhite">

    <div class="gd-logo"></div>

    <h1 class="title">Financez votre voyage de rêve </h1>

    <div class="content">Vous êtes sur le point de renseigner votre projet sur GlobeDreamers. N’oubliez pas qu’en le déposant, vous avez une chance d'obtenir le soutien financier d'une entreprise, en plus de  celui de votre communauté.</div>

    <h2 class="title_2"> Qui êtes-vous ? </h2>

    <div class="grid-x align-center blockWho">

       <div class="small-12 medium-4 large-3 cell iconBlock">
   
        <input type="radio" id="test666" class="radioHidden" name="test3" checked />
        <label for="test666"><div class="equalHeight"><div class="gd-signup-traveller"></div></div> <p> Un particulier </p> </label>
        
      </div>   
      <div class="small-12 medium-4 large-3 cell iconBlock">
        
        <input type="radio" id="test777" class="radioHidden" name="test3" />
        <label for="test777"><div class="equalHeight"><div class="gd-signup-association"></div></div> <p> Une assocation </p> </label>
        
      </div>
       <div class="small-12 medium-4 large-3 cell iconBlock">
         
        <input type="radio" id="test888" class="radioHidden" name="test3" />
        <label for="test888"><div class="equalHeight"><div class="gd-signup-compagny"></div></div> <p> Une entreprise </p> </label>
        
    
      </div>                   
    </div>


    <div class="grid-x align-center blockSign">

       <div class="small-12 medium-12 large-6 cell signUp">
        <div class="contentSignUp">

        <h2 class="title_2">Inscription </h2>
    
        <form>
          <input type="text" placeholder="Votre prénom">
          <input type="text" placeholder="Votre nom">
          <input type="email" placeholder="Votre e-mail">
          <input type="password" placeholder="Votre mot de passe">
          <input type="submit" value="S'inscrire">
        </form>
          <div class="linkAfterForm">
            En cliquant sur le bouton d’inscription, vous acceptez les <a href="conditions-generales-utilisation">Conditions générales d’utilisation</a> de GlobeDreamers.
          </div>
        <div class="blockFacebook">
          <p>OU</p>
           <a href="#"><div class="containerFb"><div class="gd-facebook"></div></div></a>
        </div>
      </div>

      </div>   
      <div class="small-12 medium-12 large-6 cell signIn">
        
        <div class="contentSignIn">

        <h2 class="title_2">Déja inscrit ? </h2>
    
        <form>
          <input type="email" placeholder="Votre e-mail">
          <input type="password" placeholder="Votre mot de passe">
          <input type="submit" value="Se connecter">
        </form>
        <div class="linkAfterForm">
          <a href="#" data-open="forget-password">Mot de passe oublié ? </a>
        </div>
        <div class="blockFacebook">
          <p>OU</p>
          <a href="#"><div class="containerFb"><div class="gd-facebook"></div></div></a>
        </div>                
      </div>
      </div>
              
    </div>

  </div>
</article>


<div class="reveal small popincounterparty" id="forget-password" data-reveal>

  <div class="containerCounterParty">

  <div class="gd-logo"></div>


    <div class="bandeau"><div class="gd-reward-bag"></div> Mot de passe oublié</div>

    <div class="title">Vous avez oublié votre mot de passe ? </div>

    <form class="form">

    <div class="blockInput">
      <div class="containerBlockInput">
        
        <label class="labelCustom">Adresse e-mail <input type="email" placeholder="Indiquez votre adresse e-mail" ></label>

      </div>
  </div>


      <div class="bandeau"><center><button class="buttonSend">Envoyer</button></center></div>  

  </form>

  </div>


  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>



<a href="#"  ><div class="goToTop" style="display:none;">
<div class="gd-arrow-top"></div>
</div></a>

<a href="#"><div class="needHelp">
<div class="gd-help"></div><div class="textNeedHelp">Besoin d'aide ? </div>
</div></a>

<!-- Contenu -->  

<!-- Footer -->
<?php require('global/template-components/footer.php'); ?>
<!-- Footer -->

<!-- Scripts -->

<?php require('global/template-components/scripts.php'); ?>



 


<!-- Scripts -->
</body>
</html>