<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  
<!-- Head -->
<head>
  <title> Popins </title>     
  <?php require('global/template-components/head_general.php'); ?>

</head>
<!-- Head -->
  
<body id="home">
  
<!-- Header header.php / header_connected.php -->
<?php require('global/template-components/header_connected.php'); ?>
<!-- Header -->




<article class="grid-container full special_bg_white annexPage" style="margin-top: 100px; text-align: center;">
 
<a href="#" data-open="popin_don_counterparty">•  Popup 21 - Choisir montant don </a> <br>
<a href="#" data-open="popin_perso_counterparty">•  Popup 22 - Personnaliser contrepartie </a> <br>
<a href="#" data-open="popin_counterparty">•  Popup 23 - Choix contrepartie </a> <br>
<a href="#" data-open="popinSignIn">•  Popin - INSCRIPTION / CONNEXION </a>


</article>


<div class="reveal small" id="popinSignIn" data-reveal>
	<div class="gd-logo"></div>

	<h1 class="title">Financez votre voyage de rêve </h1>

	<div class="content">Vous êtes sur le point de renseigner votre projet sur GlobeDreamers. N’oubliez pas qu’en le déposant, vous avez une chance d'obtenir le soutien financier d'une entreprise, en plus de  celui de votre communauté.</div>

	<h2 class="title_2"> Qui êtes-vous ? </h2>

       <div class="grid-x align-center blockWho">

                 <div class="small-12 medium-4 large-3 cell iconBlock">
             
                  <input type="radio" id="test666" class="radioHidden" name="test3" checked/>
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
	             		<div class="blockFacebook">
	             			<p>OU</p>
           					<a href="#" ><div class="containerFb"><div class="gd-facebook"></div></div></a>
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
	             		<div class="blockFacebook">
	             			<p>OU</p>
           					<a href="#" ><div class="containerFb"><div class="gd-facebook"></div></div></a>
	             		</div>             		
	             	</div>
                </div>
                        
            </div>


  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>





<div class="reveal small popincounterparty" id="popin_don_counterparty" data-reveal>

  <div class="containerCounterParty">

	<div class="gd-logo"></div>

    <h2> Vous avez décidé de contribuer  au projet de martin</h2>

    <h1> DES ENFANTS A TRAVERS LE MONDE</h1>


    <img src="global/images/img_test_contreparties.jpg" class="imgProjet" />


    <div class="bandeau"><div class="gd-reward-bag"></div> CONTREPARTIES</div>

    <div class="title">JE NE VEUX PAS RECEVOIR DE CONTREPARTIES </div>

    <form class="form">

    <div class="blockInput">
    	<div class="containerBlockInput">
    		

            <div class="flexContainer ">
               
                <div class="flexChild">
                 
					<label class="labelCustom" for="price"> Précisez le montant de votre don </label>

                </div>
                  
              

                <div  class="flexChild">
                   
				   
			      <div class="priceInputDiv">  
			      <input type="number" class="priceInput" id="price" placeholder="Montant" />

			      <div class="euroSymbol">
			           €
			      </div>

			      </div>

                </div>
            </div>



    	</div>
	</div>


    <div class="blockInput">
    	<div class="containerBlockInput">


	      <div class="buttonCheck">

	        <input type="checkbox" id="check1" name="check1" />
	        <label for="check1"> Je souhaite afficher le montant de ma contribution  </label>
	        <br />
	        <input type="checkbox" id="check2" name="check2" />
	        <label for="check2"> Je souhaite apparaître dans la liste des donateurs  </label>

	      </div>

       	</div>
	</div>

      <div class="bandeau"><center><button class="buttonSend">Payer</button></center></div>  

 	</form>

  </div>


  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>



<div class="reveal small popincounterparty" id="popin_perso_counterparty" data-reveal>

  <div class="containerCounterParty">

	<div class="gd-logo"></div>

    <h2> Vous avez décidé de contribuer  au projet de martin</h2>

    <h1> DES ENFANTS A TRAVERS LE MONDE</h1>


    <img src="global/images/img_test_contreparties.jpg" class="imgProjet" />


    <div class="bandeau"><div class="gd-reward-bag"></div> CONTREPARTIES</div>

    <div class="title">PROPOSER VOTRE CONTREPARTIE </div>

    <form class="form">

    <div class="blockInput">
    	<div class="containerBlockInput">
    		

            <div class="flexContainer ">
               
                <div class="flexChild">
                 
					<label class="labelCustom" for="price"> Proposez un montant </label>

                </div>
                  
              

                <div  class="flexChild">
                   
				   
      			<div class="priceInputDiv">  
			      <input type="number" class="priceInput" id="price" placeholder="Prix" />

			      <div class="euroSymbol">
			           €
			      </div>

			      </div>
                </div>
            </div>

 


    	</div>
	</div>

    <div class="blockInput">
    	<div class="containerBlockInput">
    		
    		<label class="labelCustom"> Donnez un titre à votre contrepartie <input type="text" onkeyup="countCharTitle(this)" onchange="countCharTitle(this)"/></label>
    		 <span class="textTitleCharacter" > <span name="nbRestantTitle">0</span>/25 caractères </span> 
    	</div>
	</div>


    <div class="blockInput">
    	<div class="containerBlockInput">

    		<label class="labelCustom" > Précisez en quoi consiste la contrepartie <textarea onkeyup="countCharTextarea(this)" onchange="countCharTextarea(this)" ></textarea></label>
			<span class="textTextareaCharacter"> <span name="nbRestantTextarea">0</span>/60 caractères</span>   

    	</div>
	</div>

    <div class="blockInput">
    	<div class="containerBlockInput">


	      <div class="buttonCheck">

	        <input type="checkbox" id="check1" name="check1" />
	        <label for="check1"> Je souhaite afficher le montant de ma contribution  </label>
	        <br />
	        <input type="checkbox" id="check2" name="check2" />
	        <label for="check2"> Je souhaite apparaître dans la liste des donateurs  </label>

	      </div>

       	</div>
	</div>

      <div class="bandeau"><center><button class="buttonSend">Payer</button></center></div>  

 	</form>

  </div>


  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>







<div class="reveal small popincounterparty" id="popin_counterparty" data-reveal>

  <div class="containerCounterParty">

	<div class="gd-logo"></div>

    <h2> Vous avez décidé de contribuer  au projet de martin</h2>

    <h1> DES ENFANTS A TRAVERS LE MONDE</h1>

    <img src="global/images/img_test_contreparties.jpg" class="imgProjet" />


    <div class="bandeau"><div class="gd-reward-bag"></div> CONTREPARTIES ENTREPRISES</div>



    <label for="test21">
       <div class="grid-x align-justify align-middle blockChoiceCounterparty">
           
           
            <div class="small-1 medium-1 large-2 cell cellRadio">
             
              <input type="radio" class="radioCounterParty" id="test21" name="test2" />
              <span class="customRadio"></span>         
            </div>

            <div class="small-11 medium-11 large-10 cell">

              <div class="titleCounterparty">Pour 10€ ou plus</div>

              <p>
                Un grand merci
                Votre nom au générique du film
              </p>
                              
            </div>
  
                      
        </div>
      </label>

    <label for="test22">
       <div class="grid-x align-justify align-middle blockChoiceCounterparty">
           
           
            <div class="small-1 medium-1 large-2 cell cellRadio">
             
              <input type="radio" class="radioCounterParty" id="test22" name="test2" checked />
              <span class="customRadio"></span>         
            </div>

            <div class="small-11 medium-11 large-10 cell">

              <div class="titleCounterparty">Pour 17€ ou plus</div>

              <p>
                Un super merci<br />
                Votre nom au générique du film<br />
                Et une entrée duo pour l’avant première du film lors des
                projections parisiennes*
                + contreparties précédentes<br />

                <small>*on vous tiendra au courant lors des projections se déroulant
                près de chez vous </small>
              </p>
                              
            </div>
  
                      
        </div>
      </label>


    <label for="test23">
       <div class="grid-x align-justify align-middle blockChoiceCounterparty">
           
           
            <div class="small-1 medium-1 large-2 cell cellRadio">
             
              <input type="radio" class="radioCounterParty" id="test23" name="test2" />
              <span class="customRadio"></span>        
            </div>

            <div class="small-11 medium-11 large-10 cell">

              <div class="titleCounterparty">Pour 25€ ou plus</div>

              <p>

                  Un merci démesuré <br />
                  Votre nom au générique du film<br />
                  Et une version téléchargeable du film en visionnage exclusif
                  (avant son exploitation salle)<br />   
                  + contreparties précédentes

              </p>
                              
            </div>
  
                      
        </div>
      </label>


    <label for="test24">
       <div class="grid-x align-justify align-middle blockChoiceCounterparty">
           
           
            <div class="small-1 medium-1 large-2 cell cellRadio">
             
              <input type="radio" class="radioCounterParty" id="test24" name="test2" />
              <span class="customRadio"></span>         
            </div>

            <div class="small-11 medium-11 large-10 cell">

              <div class="titleCounterparty">Pour 40€ ou plus</div>

              <p>

                Un margistral merci <br />
                Votre nom au générique du film<br />
                Et 2 photos dédicacées de la danseuse du film   <br />
                + contreparties précédentes

              </p>
                              
            </div>
  
                      
        </div>
      </label>

    <label for="test25">
       <div class="grid-x align-justify align-middle blockChoiceCounterparty">
           
           
            <div class="small-1 medium-1 large-2 cell cellRadio">
             
              <input type="radio" class="radioCounterParty" id="test25" name="test2" />
              <span class="customRadio"></span>         
            </div>

            <div class="small-11 medium-11 large-10 cell">

              <div class="titleCounterparty">Pour 50€ ou plus</div>

              <p>

                impressionnant merci<br>
                Votre nom au générique du film

              </p>
                              
            </div>
  
                      
        </div>
      </label>


    <div class="bandeau"><div class="gd-reward-bag"></div> CONTREPARTIES PARTICULIERS</div>

    <label for="test1">
       <div class="grid-x align-justify align-middle blockChoiceCounterparty">
           
           
            <div class="small-1 medium-1 large-2 cell cellRadio">
             
              <input type="radio" class="radioCounterParty" id="test1" name="test1" checked/>
              <span class="customRadio"></span>      
            </div>

            <div class="small-11 medium-11 large-10 cell">

              <div class="titleCounterparty">Pour 10€ ou plus</div>

              <p>
                Un grand merci
                Votre nom au générique du film
              </p>
                              
            </div>
  
                      
        </div>
      </label>

    <label for="test2">
       <div class="grid-x align-justify align-middle blockChoiceCounterparty">
           
           
            <div class="small-1 medium-1 large-2 cell cellRadio">
             
              <input type="radio" class="radioCounterParty" id="test2" name="test1" />
              <span class="customRadio"></span>      
            </div>

            <div class="small-11 medium-11 large-10 cell">

              <div class="titleCounterparty">Pour 17€ ou plus</div>

              <p>
                Un super merci<br />
                Votre nom au générique du film<br />
                Et une entrée duo pour l’avant première du film lors des
                projections parisiennes*
                + contreparties précédentes<br />

                <small>*on vous tiendra au courant lors des projections se déroulant
                près de chez vous </small>
              </p>
                              
            </div>
  
                      
        </div>
      </label>


    <label for="test3">
       <div class="grid-x align-justify align-middle blockChoiceCounterparty">
           
           
            <div class="small-1 medium-1 large-2 cell cellRadio">
             
              <input type="radio" class="radioCounterParty" id="test3" name="test1" />
              <span class="customRadio"></span>      
            </div>

            <div class="small-11 medium-11 large-10 cell">

              <div class="titleCounterparty">Pour 25€ ou plus</div>

              <p>

                  Un merci démesuré <br />
                  Votre nom au générique du film<br />
                  Et une version téléchargeable du film en visionnage exclusif
                  (avant son exploitation salle)<br />   
                  + contreparties précédentes

              </p>
                              
            </div>
  
                      
        </div>
      </label>


    <label for="test4">
       <div class="grid-x align-justify align-middle blockChoiceCounterparty">
           
           
            <div class="small-1 medium-1 large-2 cell cellRadio">
             
              <input type="radio" class="radioCounterParty" id="test4" name="test1" />
              <span class="customRadio"></span>
            </div>

            <div class="small-11 medium-11 large-10 cell">

              <div class="titleCounterparty">Pour 40€ ou plus</div>

              <p>

                Un margistral merci <br />
                Votre nom au générique du film<br />
                Et 2 photos dédicacées de la danseuse du film   <br />
                + contreparties précédentes

              </p>
                              
            </div>
  
                      
        </div>
      </label>

    <label for="test5">
       <div class="grid-x align-justify align-middle blockChoiceCounterparty">
           
           
            <div class="small-1 medium-1 large-2 cell cellRadio">
             
              <input type="radio" class="radioCounterParty" id="test5" name="test1" />
              <span class="customRadio"></span>      
            </div>

            <div class="small-11 medium-11 large-10 cell">

              <div class="titleCounterparty">Pour 50€ ou plus</div>

              <p>

                impressionnant merci<br>
                Votre nom au générique du film

              </p>
                              
            </div>
  
                      
        </div>
      </label>
      <div class="buttonCheck">

        <input type="checkbox" id="check1" name="check1" />
        <label for="check1"> Je souhaite afficher le montant de ma contribution  </label>
        <br />
        <input type="checkbox" id="check2" name="check2" />
        <label for="check2"> Je souhaite apparaître dans la liste des donateurs  </label>

      </div>
      <div class="bandeau"><center><button class="buttonSend">Payer</button></center></div>  

 

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

<script type="text/javascript">
	$(document).ready(function()
{
  $(".containerCounterParty input[type=radio]:checked").each(function() {
        $(this).parent('div').parent('div').css('background-color', 'rgba(24, 147, 165, 0.3)');
   });

}); 

$(".radioCounterParty").change(function() {

  $(".blockChoiceCounterparty").css('background-color', 'white');

  $(".containerCounterParty input[type=radio]:checked").each(function() {
        $(this).parent('div').parent('div').css('background-color', 'rgba(24, 147, 165, 0.3)');
   });

});

      function countCharTitle(val) {
  
        var len = val.value.length;
        if (len > 24) {
          val.value = val.value.substring(0, 24);
          $('[name=nbRestantTitle]').text(len);
        } else {
          $('[name=nbRestantTitle]').text(len);
        }
      };

      function countCharTextarea(val) {
  
        var len = val.value.length;
        if (len > 59) {
          val.value = val.value.substring(0, 59);
          $('[name=nbRestantTextarea]').text(len);
        } else {
          $('[name=nbRestantTextarea]').text(len);
        }
      };


</script>


<!-- Scripts -->
</body>
</html>