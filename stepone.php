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


<article class="grid-container full special_bg_white stepPage">

  <div class="containerStep">


    <form>

      <h1> Martin, parlons de votre projet</h1>

      <div class="stepCount">

        <a href="javascript:void(0)" class="stepRound gd-step-round-active">1</a>             
            
        <a href="steptwo.php" class="stepRound stepRoundGlobal">2</a>   

        <a href="stepthree.php" class="stepRound stepRoundGlobal">3</a>   

        <a href="stepfour.php" class="stepRound stepRoundGlobal">4</a>   

      </div>


      <h2> 1 / quel titre souhaitez-vous donner à votre page ?</h2>

      <label> 

        Un titre clair, séduisant et incitatif favorise les dons et l’intérêt des sponsors intéressés par vos valeurs.

        <input type="text" onkeyup="countCharTitle(this)" onchange="countCharTitle(this)" placeholder="Écrivez votre texte ici" maxlength="70" />
        <span class="textTitleCharacter" >Entre 0 et 70 caractères - <span name="nbRestantTitle">70</span> restant(s)</span> 
      </label>


      <h2>2 / quelle(s) ville(s), région(s) ou pays allez-vous découvrir ?</h2>


      <label> Tapez une destination  puis cliquez sur + pour valider.
      <div class="townInputDiv">  
      <input type="text" class="townInput" placeholder="Écrivez votre texte ici" />
      <a href="#" class="addTownLink" >
      <div class="addTown">
        +
      </div>
      </a>
      </div>
      </label>

      <div class="tagTownDiv">
      <div class="tagTown">Dublin <a href="#" >✕</a></div><div class="tagTown">Rome<a href="#">✕</a></div>
      </div>


      <h2> 3 / quelles-sont vos dates de départ et d’arrivée ?</h2>


            <div class="grid-x grid-margin-x align-justify blockDate">
               
                <div class="small-6 medium-6 large-6 cell">
                 
                   <label> Départ le 
                      <div class="dateInputDiv">
                          <input type="text"  class="dateInput1"/>
                           <a href="javascript:void(0)">
                             <div class="selectDate">
                            <div class="gd-calendar"></div>
                            </div>
                          </a>
                      </div>
                      
                        
                   </label>
                </div>
                  
              

                <div class="small-6 medium-6 large-6 cell">
                   
                   <label> Retour le 
                      <div class="dateInputDiv">
                          <input type="text" class="dateInput2"  />
                           <a href="javascript:void(0)">
                             <div class="selectDate">
                            <div class="gd-calendar"></div>
                            </div>
                          </a>
                      </div>
                      
                        
                   </label>
                </div>
            </div>




      <h2> Ces dates sont-elles flexibles ?</h2>



           <div class="grid-x grid-margin-x align-justify blockFlex buttonCheck buttonCheckType2">
              

                <div class="small-6 medium-6 large-6 cell">
                 
                  <input type="radio" id="test1" name="test1" />
                  <label for="test1"><span>Oui</span></label>


                  
                </div>

                <div class="small-6 medium-6 large-6 cell">
                 
                 
                  <input type="radio" id="test2" name="test1" />
                  <label for="test2"><span>Non</span></label>
                  
                </div>
                          
            </div>

           <div class="grid-x grid-margin-x align-justify buttonCheck">
               
                <div class="small-12 medium-4 large-4 cell">
                 
                  <input type="radio" id="test3" name="test2" />
                  <label for="test3"> A une semaine près  </label>
                  
                  
                </div>

                <div class="small-12 medium-4 large-4 cell">
                 
                  
                  <input type="radio" id="test4" name="test2" />
                  <label for="test4"> A un mois près  </label>
                  
                </div>
           
                <div class="small-12 medium-4 large-4 cell">
                  <input type="radio" id="test5" name="test2" />
                  <label for="test5"> A 6 mois près  </label>

                </div>

            </div>











      <h2>4 / Vous souhaitez voyager </h2>

           <div class="grid-x grid-margin-x align-justify blockAlone">
               
                <div class="small-6 medium-6 large-6 cell">
                 
                  <input type="radio" id="test6" class="radioHidden" name="test3" />
                  <label for="test6"> <div class="gd-single-user"></div> <p> Seul </p></label>

                </div>

                <div class="small-6 medium-6 large-6 cell">
                 
                  <input type="radio" id="test7" class="radioHidden" name="test3" />
                  <label for="test7"> <div class="gd-multiple-users"></div> <p> A plusieurs </p> </label>
                  
                </div>
                          
            </div>




      <label>
        Indiquez le nombre total de voyageurs
        <input type="number" class="nbTravallers">

      </label>


      <h2>5 / dans quelle catégorie placez-vous votre  projet ? </h2>


            <div class="grid-x grid-margin-x align-justify blockCategoryStep">
               
                <div class="small-12 medium-4 large-auto cell">

                  <input type="radio" id="test186" class="radioHiddenCat" name="test18" />
                  <label for="test186"> <div class="gd-artistique iconCategory"></div> <p> Artistique </p> </label>
                  
                </div>
                
                <div class="small-12 medium-4 large-auto cell">
                  <input type="radio" id="test185" class="radioHiddenCat" name="test18" />
                  <label for="test185"> <div class="gd-sportif iconCategory"></div> <p> Sportif </p> </label>
                </div>

                <div class="small-12 medium-4 large-auto cell">
                  <input type="radio" id="test184" class="radioHiddenCat" name="test18" />
                  <label for="test184"> <div class="gd-professionnel iconCategory"></div> <p> Professionnel </p> </label>                  
                </div>

                <div class="small-12 medium-4 large-auto cell">
                  <input type="radio" id="test183" class="radioHiddenCat" name="test18" />
                  <label for="test183"> <div class="gd-aventurier iconCategory"></div> <p> Aventurier </p> </label>                   
                </div>
                
                <div class="small-12 medium-4 large-auto cell">
                  <input type="radio" id="test182" class="radioHiddenCat" name="test18" />
                  <label for="test182"> <div class="gd-solidaire iconCategory"></div> <p> Solidaire </p> </label>                   
                </div>

                <div class="small-12 medium-4 large-auto cell">
                  <input type="radio" id="test181" class="radioHiddenCat" name="test18" />
                  <label for="test181"> <div class="gd-eco iconCategory"></div> <p> Eco-responsable </p> </label>                   

                </div>
                
            </div>

      <h2>6 / À combien estimez-vous le budget ? </h2>
      
       <div class="budgetDiv">
          <input type="number" class="budgectInput" />
          <div class="euroSymbol">€</div>
        </div>


           <div class="grid-x grid-margin-x buttonCheck blockIdontKnow">
               
                <div class="cell shrink">
                 
                  <input type="checkbox" id="test8" name="test5" />
                  <label for="test8"> Je ne sais pas encore  </label>
                  
                </div>
           
                <div class="cell shrink">
                 
                   On en reparle plus tard
                  
                </div>     

            </div>





      <h2>7 / résumez brièvement votre projet de voyage </h2>

      <textarea onkeyup="countCharResume(this)" onchange="countCharResume(this)" maxlength="156" placeholder="Écrivez votre texte ici" ></textarea>
      <span class="textTextareaCharacter">Entre 0 et 156 caractères - <span name="nbRestantResume">156</span> restant(s)</span>  </span>





      <h2>8 / Avez-vous des compétences particulières ?</h2>


           <div class="grid-x grid-margin-x align-justify buttonCheck buttonCheckType2 skillBlock">
               
                <div class="small-12 medium-3 large-3 cell">
                 
                  <input type="checkbox" id="test13" name="test7" />
                  <label for="test13"> Photographie  </label>
                  
                </div>

                <div class="small-12 medium-3 large-3 cell">
                  
                  <input type="checkbox" id="test12" name="test7" />
                  <label for="test12"> Captation vidéo  </label>
                  
                </div>
           
                <div class="small-12 medium-3 large-3 cell">
                  <input type="checkbox" id="test11" name="test7" />
                  <label for="test11"> Montage vidéo  </label>

                </div>

                <div class="small-12 medium-3 large-3 cell">
                  <input type="checkbox" id="test10" name="test7" />
                  <label for="test10"> Rédaction  </label>

                </div>

            </div>





      <label> Indiquez une autre compétence
      <div class="skillInputDiv">  
      <input type="text" class="skillInput" placeholder="Écrivez votre texte ici" />
      <a href="#" class="addSkillLink">
      <div class="addSkill">
        +
      </div>
      </a>
      </div>
      </label>

      <div class="tagSkillDiv">
        <div class="tagSkill">Drones<a href="#">✕</a></div>
      </div>


      <center><input type="submit" value="Continuer"></center>

    </form>

  </div>

</article>



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

  $(".addSkillLink").click(function(e) 
  {
    e.preventDefault();
    var value = $(".skillInput").val();  

    if(value.length == 0)
    {
      alert('Champ vide');
    }
    else
    {
      $(".tagSkillDiv").append('<div class="tagSkill">'+value+'<a href="#">✕</a></div>').fadeIn();
    }
    
      $(".skillInput").val('');

  });


  $(".addTownLink").click(function(e) 
  {
    e.preventDefault();    
    var value = $(".townInput").val(); 

    if(value.length == 0)
    {
      alert('Champ vide');
    }
    else
    {
      $(".tagTownDiv").append('<div class="tagTown">'+value+'<a href="#">✕</a></div>').fadeIn();       
    }

    $(".townInput").val('');

  });



  $(".tagTownDiv a, tagSkillDiv a").click(function(e) 
  {
    e.preventDefault();
    $(this).parent('div').fadeOut();      
  });


  $('.dateInput1, .dateInput2').fdatepicker({
    format: 'dd-mm-yyyy',
    language: 'fr',
    leftArrow:'<<',
    rightArrow:'>>'
  });

  $(".dateInputDiv a").click(function(e) 
  {
       $(this).prev('input').focus();   
  });

  

      function countCharTitle(val) {
  
        var len = val.value.length;
        if (len > 70) {
          val.value = val.value.substring(0, 70);
          $('[name=nbRestantTitle]').text(70 - len);
        } else {
          $('[name=nbRestantTitle]').text(70 - len);
        }
      };

      function countCharResume(val) {
  
        var len = val.value.length;
        if (len > 156) {
          val.value = val.value.substring(0, 156);
          $('[name=nbRestantResume]').text(156 - len);
        } else {
          $('[name=nbRestantResume]').text(156 - len);
        }
      };




</script>

     

<!-- Scripts -->
</body>
</html>