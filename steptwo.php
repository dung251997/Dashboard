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

  <div class="containerStep stepTwo backgroundWhite">


    <form>

      <h1>Martin, complétons à présent votre page projet </h1>

      <div class="stepCount">   
            
        <a href="stepone.php" class="stepRound stepRoundGlobal">1</a>             
            
        <a href="javascript:void(0)" class="stepRound gd-step-round-active">2</a>   

        <a href="stepthree.php" class="stepRound stepRoundGlobal">3</a>   

        <a href="stepfour.php" class="stepRound stepRoundGlobal">4</a>  

      </div>

      <h2> 1 / visuel de présentation du projet</h2>


            <div class="grid-x grid-margin-x align-justify">
               
                <div class="small-12 medium-4 large-8 cell">
                 
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
                  
              

                <div class="small-12 medium-8 large-4 cell">
                   
                <div class="picturePresentationProject"><img src="" id="picturePresentationProject"></div>
                <button class="buttonChange" data-file-input="fileInput" >Modifier</button>
                </div>
            </div>




   <textarea maxlength="156" placeholder="Indiquez la légende de votre visuel de présentation" ></textarea>



      <h2> 2 / titre de votre projet </h2>

      <label> 
        <input type="text" onkeyup="countCharTitle(this)" onchange="countCharTitle(this)" placeholder="Écrivez votre texte ici" maxlength="70" />
        <span class="textTitleCharacter" >Entre 0 et 70 caractères - <span name="nbRestantTitle">70</span> restant(s)</span> 
      </label>




      <h2>3 / bref résumé de votre projet de voyage</h2>

      <textarea onkeyup="countCharResume(this)" onchange="countCharResume(this)" maxlength="156" placeholder="Écrivez votre texte ici" ></textarea>
      <span class="textTextareaCharacter">Entre 0 et 156 caractères - <span name="nbRestantResume">156</span> restant(s)</span>  </span>

      <h2> 4 / présentation détaillée</h2>

      <h4>Objectif(s) poursuivi(s) ?</h4>
      <textarea class="editorHTMLTextarea"></textarea>
      <h4>Pourquoi ?</h4>

      <textarea class="editorHTMLTextarea"></textarea>
      <h4>Comment ?</h4>


      <textarea class="editorHTMLTextarea"></textarea>
      <h4>Vos dépenses ?</h4>      

      <textarea class="editorHTMLTextarea"></textarea>
      <center><input type="submit" value="Continuer"></center>

 <input name="image" type="file" id="upload" onchange="" style="display: none;">

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

  $(".buttonChange").click(function(e) 
    {
      e.preventDefault();
      var fileInput = $(this).attr("data-file-input");
      $("#" + fileInput).trigger('click');

    });


  function addImage()
  {
    $("#test").append('<img src="https://placehold.it/150x150/888?text=icone fleche"/>');
  }


    function previewOnDiv()
    {

    var file = document.querySelector('#fileInput').files[0];
    var reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function () {


      var image = document.getElementById('picturePresentationProject');
      var strImage = reader.result.replace(/^data:image\/[a-z]+;base64,/, "");
      image.src = "data:image/jpeg;base64," + strImage;
       $("#picturePresentationProject").fadeIn();
       var buttonModif = document.querySelectorAll('.buttonChange')[0];
      $(buttonModif).css('visibility', 'visible');
     }

    }

      dropContainer.ondragover = dropContainer.ondragenter = function(evt) {
        evt.preventDefault();
      };

      dropContainer.ondrop = function(evt) {
        // pretty simple -- but not for IE :(
        fileInput.files = evt.dataTransfer.files;
        evt.preventDefault();
      };
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