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

  <div class="containerStep stepFour backgroundWhite">


    <form >

      <h1>Dernières informations </h1>

      <div class="stepCount">   
        <a href="stepone.php" class="stepRound stepRoundGlobal">1</a>             
             
        <a href="steptwo.php" class="stepRound stepRoundGlobal">2</a>   

        <a href="stepthree.php" class="stepRound stepRoundGlobal">3</a>  
      
        <a href="javascript:void(0)" class="stepRound gd-step-round-active">4</a>  

      </div>

      <h2>1 / vOUS ÊTES </h2>

           <div class="grid-x grid-margin-x align-justify blockAlone">
               
               
                <div class="small-6 medium-6 large-6 cell">
                 
                  <input type="radio" id="test6" class="radioHidden" name="test3" />
                  <label for="test6"> <div class="gd-man"></div> <p> Un homme </p></label>

                </div>

                <div class="small-6 medium-6 large-6 cell">
                 
                  <input type="radio" id="test7" class="radioHidden" name="test3" />
                  <label for="test7"> <div class="gd-woman"></div> <p> Une femme </p> </label>
                  
                </div>
      
                          
            </div>
      <section class="lastStepLabel">
      <div class="grid-x grid-margin-x align-justify ">
               
                <div class="small-12 medium-6 large-6 cell">
                 
                   <label> Nom*
                      <input type="text"/>
                   </label>
                </div>
                  
              
             <div class="small-12 medium-6 large-6 cell">
                 
                   <label> Prénom*
                      <input type="text"/>
                   </label>
                </div>
          </div>


                    <label> Adresse*
                      <input type="text" id="autocomplete" />
                   </label>

      <div class="grid-x grid-margin-x align-justify">
               
                <div class="small-12 medium-6 large-6 cell">
                 
                   <label> Code postal*
                      <input type="text" id="postal_code" />
                   </label>
                </div>
                  
              
             <div class="small-12 medium-6 large-6 cell">
                 
                   <label> Ville*
                      <input type="text"/>
                   </label>
                </div>
            </div>

     <div class="grid-x grid-margin-x align-justify">

                <div class="small-12 medium-6 large-6 cell">
                 
                   <label> Date de naissance*
                      <input type="text" class="dateNaissance" />
                   </label>
                </div>
       
            </div>

      <div class="grid-x grid-margin-x align-justify">

                <div class="small-12 medium-6 large-6 cell">
                 
                   <label> Email*
                      <input type="text"/>
                   </label>
                </div>
       
            </div>

             <h3> Vos réseaux sociaux </h3>


            <div class="grid-x socialGrid">

                <div class="small-2 medium-2 large-1 cell">
                    <div class="gd-social-facebook socialIcon"></div>  
                </div>

                <div class="small-10 medium-6 large-6 cell">
                    <input type="text" class="socialInput" placeholder="Indiquez l'adresse URL de votre page facebook" />
                </div>
         
            </div>

            <div class="grid-x socialGrid">

                <div class="small-2 medium-2 large-1 cell">
                    <div class="gd-social-youtube socialIcon"></div>  
                </div>

                <div class="small-10 medium-6 large-6 cell">
                    <input type="text" class="socialInput" placeholder="Indiquez l'adresse URL de votre page youtube" />
                </div>
         
            </div>


            <div class="grid-x socialGrid">

                <div class="small-2 medium-2 large-1 cell">
                    <div class="gd-social-instagram socialIcon"></div>  
                </div>

                <div class="small-10 medium-6 large-6 cell">
                    <input type="text" class="socialInput" placeholder="Indiquez l'adresse URL de votre page instagram" />
                </div>
         
            </div>

            <div class="grid-x socialGrid">

                <div class="small-2 medium-2 large-1 cell">
                    <div class="gd-social-twitter socialIcon"></div>  
                </div>

                <div class="small-10 medium-6 large-6 cell">
                    <input type="text" class="socialInput" placeholder="Indiquez l'adresse URL de votre page twitter" />
                </div>
         
            </div>

            <div class="grid-x socialGrid">

                <div class="small-2 medium-2 large-1 cell">
                    <div class="gd-social-linked-in socialIcon"></div>  
                </div>

                <div class="small-10 medium-6 large-6 cell">
                    <input type="text" class="socialInput" placeholder="Indiquez l'adresse URL de votre page linked-in" />
                </div>
         
            </div>


             <h3> Une photo de vous pour votre bio </h3>


            <div class="grid-x grid-margin-x align-left">
               
                <div class="small-12 medium-8 large-6 cell">
                 
                <div id="dropContainer" class="dropContainer">
                  <div class="contentDropContainer">

                    <div class="image-upload">
                      <label for="fileInput">
                          <div class="gd-arrow-upload"></div>
                      </label>

                    <input type="file" id="fileInput" onchange="previewOnDiv()"/>
                
                    </div>
                    Glisser et déposer votre photo ici
                  </div>

                  </div>
                </div>
                  
                <div class="small-12 medium-4 large-3 cell">
                   
                <div class="picturePhotoBio"><img src="" id="picturePhotoBio"></div>
                <button class="buttonChange" data-file-input="fileInput" >Modifier</button>
                </div>
            </div>


            <h3>Chargez votre pièce d'identité (CNI, Passeport)</h3>


            <div class="grid-x grid-margin-x align-left">
               
                <div class="small-12 medium-8 large-6 cell">
                 
                <div id="dropContainer2" class="dropContainer">
                  <div class="contentDropContainer">

                    <div class="image-upload">
                      <label for="fileInput2">
                          <div class="gd-arrow-upload"></div>
                      </label>

                    <input type="file" id="fileInput2" onchange="previewOnDiv2()"/>
                
                    </div>
                    Glisser et déposer votre photo ici
                  </div>

                  </div>



                </div>
                  
          
                <div class="small-12 medium-4 large-3 cell">
                   
                <div class="picturePieceIdentite"><img src="" id="picturePieceIdentite"></div>
                <button class="buttonChange" data-file-input="fileInput2" >Modifier</button>
                </div>
            </div>


      <div class="grid-x grid-margin-x align-justify">
               
                <div class="small-12 medium-8 large-8 cell">
                 
                   <label> Renseignez votre iban*
                      <input type="text"/>
                   </label>
                </div>
       
            </div>

      <label>QUI SUIS JE ?</label>

      <textarea class="editorHTMLTextarea"></textarea>


      <label>CE QUE JE CHERCHE AU TRAVERS CE VOYAGE ?</label>

      <textarea class="editorHTMLTextarea"></textarea>

      <label> MES HOBBIES </label>

      <textarea class="editorHTMLTextarea"></textarea>

          </section>



      <center><button class="buttonPrev">Précédent</button><input type="submit" value="Soumettre mon projet"></center>

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
<script src="global/tinymce/tinymce.min.js?apiKey=5wgfeeozsnuhdcu945edamvzsn4p3fn2qsz334l1hhvcjz4o"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6LieXt-WB7qmdk2EcoabB_QvDevRguvk&libraries=places"></script>
<?php require('global/template-components/scripts.php'); ?>

<script type="text/javascript">

  tinymce.init({
    selector: ".editorHTMLTextarea",
    skin : "globedreamers",
    statusbar: false,
    menubar:false,
    paste_data_images: true,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "template paste textcolor colorpicker textpattern autoresize"
    ],
    toolbar1: "alignleft aligncenter alignright alignjustify outdent indent  | bold italic underline strikethrough forecolor backcolor",
    toolbar2: "print preview insertfile undo redo | image",
    autoresize_bottom_margin: 50,
    plugin_preview_height: 500,
    plugin_preview_width: 1000,
    image_advtab: true,
    file_picker_callback: function(callback, value, meta) {
      if (meta.filetype == 'image') {
        $('#upload').trigger('click');
        $('#upload').on('change', function() {
          var file = this.files[0];
          var reader = new FileReader();
          reader.onload = function(e) {
            callback(e.target.result, {
              alt: ''
            });
          };
          reader.readAsDataURL(file);
        });
      }
    }
  });




$(function(){
  
  var autocomplete;
  var geocoder;
  var input = document.getElementById('autocomplete');
  var options = {types: ['address']};

  autocomplete = new google.maps.places.Autocomplete(input,options);

  
  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    var place = autocomplete.getPlace();
    for (var i = 0; i < place.address_components.length; i++) {
      for (var j = 0; j < place.address_components[i].types.length; j++) {
        if (place.address_components[i].types[j] == "postal_code") {
          document.getElementById('postal_code').innerHTML = place.address_components[i].long_name;

        }
      }
    }
  });
  
  
});

  $('.dateNaissance').fdatepicker({
    format: 'dd-mm-yyyy',
    language: 'fr',
    leftArrow:'<<',
    rightArrow:'>>'
  });


    $(".buttonChange").click(function(e) 
      {
        e.preventDefault();
        var fileInput = $(this).attr("data-file-input");
        $("#" + fileInput).trigger('click');

      });

    function previewOnDiv()
    {

    var file = document.querySelector('#fileInput').files[0];
    var reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function () {


      var image = document.getElementById('picturePhotoBio');
      var strImage = reader.result.replace(/^data:image\/[a-z]+;base64,/, "");
      image.src = "data:image/jpeg;base64," + strImage;
      $("#picturePhotoBio").fadeIn();
      var buttonModif = document.querySelectorAll('.buttonChange')[0];
      $(buttonModif).css({'visibility': 'visible', 'display': 'inline-block'});
 
     }

    }

    function previewOnDiv2()
    {

    var file = document.querySelector('#fileInput2').files[0];
    var reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function () {


      var image = document.getElementById('picturePieceIdentite');
      var strImage = reader.result.replace(/^data:image\/[a-z]+;base64,/, "");
      image.src = "data:image/jpeg;base64," + strImage;
       $("#picturePieceIdentite").fadeIn();
      var buttonModif = document.querySelectorAll('.buttonChange')[1];
      $(buttonModif).css('visibility', 'visible');
 

     }

    }    


      dropContainer.ondragover = dropContainer.ondragenter = function(evt) {
        evt.preventDefault();
      };

      dropContainer.ondrop = function(evt) {
     
        document.querySelectorAll('input[type="file"]')[0].files = evt.dataTransfer.files;
        evt.preventDefault();
      };
  

      dropContainer2.ondragover = dropContainer2.ondragenter = function(evt) {
        evt.preventDefault();
      };

      dropContainer2.ondrop = function(evt) {
        document.querySelectorAll('input[type="file"]')[1].files = evt.dataTransfer.files;

        evt.preventDefault();
      };



</script>

     


<!-- Scripts -->
</body>
</html>