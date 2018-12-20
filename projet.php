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
<?php require('global/template-components/header.php'); ?>
<!-- Header -->



<div id="firstStop"></div>

<div class="imageBackgroundProject" style="background-image: url('https://placehold.it/1920x800/888');">
  <div class="container">
    <h1 class="textTitle"><p>CECI EST UN TEST DE TITRE </p></h1>
    <div class="date"><p>Date</p></div>
    <h3 class="name"><p>Prénom</p></h3>
  </div>
</div>

<div class="menubio">
  <div class="containerMenubio">
    <div class="profilPicture"><img src="https://placehold.it/150x150/888?text=Profil"/></div>

    <div class="coreMenu">
      <ul>
        <li><a href="bio.php#scroll" >bio</a></li>
        <li class="active"><a href="projet.php#scoll" class="active">mon projet</a></li>
        <li><a href="travelbook.php#scroll">carnet de voyage</a></li>
      </ul>
    </div>

    <div class="buttonRight"><a href="#">JE SOUTIENS</a></div>


  </div>
</div>

<article class="grid-container full special_bg bio">
	
          <div class="grid-container">
            <div class="grid-x grid-margin-x align-center">
               
                <div class="small-12 medium-12 large-3 cell collumn1">
                 
                  <div class="blockProfil block">
                    <div class="title">
                      <div class="gd-user"></div> 
                      <div class="text"> Mon profil </div>
                    </div>

                    <div class="content">
                      <ul>
                        <li>Lieu : nice </li>
                        <li>Âge : 25 ans</li>
                        <li>Profession : coursier</li>
                      </ul>
                    </div>
                    <div class="share">
                        <a href="#"><div class="gd-profil-fb"></div></a>
                        <a href="#"><div class="gd-profil-insta"></div></a>
                        <a href="#"><div class="gd-profil-youtube"></div></a>
                    </div>
                  </div>
                  <div class="blockDream block">
                
                    <div class="title">
                      <div class="gd-star"></div> 
                      <div class="text"> Mes rêves </div>
                    </div>
                    <div class="content buttonCheck">

                      <p>
                        <input type="checkbox" id="test8" name="test5" checked disabled/>
                        <label for="test8"> Nager avec les dauphins </label>
                      </p>
                      <p>
                        <input type="checkbox" id="test8" name="test5" disabled/>
                        <label for="test8"> Nager avec les dauphins </label>
                      </p>
                      <p>
                        <input type="checkbox" id="test8" name="test5" disabled/>
                        <label for="test8"> Nager avec les dauphins </label>
                      </p>
                      <p>
                        <input type="checkbox" id="test8" name="test5" disabled/>
                        <label for="test8"> Nager avec les dauphins </label>
                      </p>
                      <p>
                        <input type="checkbox" id="test8" name="test5" disabled/>
                        <label for="test8"> Nager avec les dauphins </label>
                      </p>

                    </div>

                  </div>
                  <div class="blockGallery block">

                    <div class="title">
                      <div class="gd-photo"></div> 
                      <div class="text"> Gallerie </div>
                    </div>                    
                  <div class="content">


                  <div class="grid-x grid-margin-x align-justify">
                     
                      <div class="small-6 medium-6 large-6 cell">
                          <img src="https://placehold.it/147x98/888?text=icone fleche"/>
                      </div>
                        
                      <div class="small-6 medium-6 large-6 cell">
                          <img src="https://placehold.it/147x98/888?text=icone fleche"/>                         
                      </div>

                      <div class="small-6 medium-6 large-6 cell">
                          <img src="https://placehold.it/147x98/888?text=icone fleche"/>
                      </div>
                        
                      <div class="small-6 medium-6 large-6 cell">
                          <img src="https://placehold.it/147x98/888?text=icone fleche"/>                         
                      </div>                      

                  </div>


                  </div>
                  </div>
                  <div class="blockTravelBook block">
                    
                    <div class="title">
                      <div class="gd-book"></div> 
                      <div class="text"> Carnet de voyage </div>
                    </div>
                    <div class="content">
                      <div class="imageTravelBook">
                        <div class="containerImageTravelBook">
                          <div class="gd-sportif"></div>
                          <div class="text">Créer votre carnet de voyage</div>
                        </div>

                      </div>
                    </div>

                  </div>
                </div>
                  
              
                <div class="small-12 medium-12 large-6 cell collumn2">
                 
                  <div class="blockDescription block">
                    
      
                    <div class="title">
                      <h2 class="text orange"> Des enfants à travers le monde </h2>
                    </div>
                    <div class="content">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 

                    </div>

                  </div>
                  <h3> Projet soutenu par </h3>
                  <div id="carousel" class="owl-carousel carouselSponsorsProjet">
                    <div class="item"><a href=""><img src="https://placehold.it/250X150&amp;text=Pegasi B"></a></div>
                    <div class="item"><a href=""><img src="https://placehold.it/200x200&amp;text=Pegasi B"></a></div>
                    <div class="item"><a href=""><img src="https://placehold.it/250x250&amp;text=Pegasi B"></a></div>
                    <div class="item"><a href=""><img src="https://placehold.it/150X150&amp;text=Pegasi B"></a></div>
                    <div class="item"><a href=""><img src="https://placehold.it/200x200&amp;text=Pegasi B"></a></div>
                    <div class="item"><a href=""><img src="https://placehold.it/350x250&amp;text=Pegasi B"></a></div>
                    <div class="item"><a href=""><img src="https://placehold.it/150X150&amp;text=Pegasi B"></a></div>
                    <div class="item"><a href=""><img src="https://placehold.it/200x200&amp;text=Pegasi B"></a></div>
                    <div class="item"><a href=""><img src="https://placehold.it/250x250&amp;text=Pegasi B"></a></div>
                  </div>

                  <div class="blockGoal block">
                    
                    
                    <div class="title">
                      <div class="text orange"> OBJECTIFS POURSUIVIS </div>
                    </div>
                    <div class="content">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                      </p>
                      <img src="https://placehold.it/800x600/888?text=IMG "/>
                    </div>

                  </div>




                  <div class="blockVideo block">
                    
                    
                    <div class="title">
                      <div class="text orange"> Raisons et motivations </div>
                    </div>
                    <div class="content contentVideo">
                      <div class="gd-video-play"></div>
                      <video>
                        <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type="video/mp4">
                      </video>
                    </div>
                  </div>

                  <div class="blockComment block">
                    
                    
                    <div class="title">
                      <div class="text orange"> Comment réaliser le projet </div>
                    </div>
                    <div class="content">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                      </p>
                    </div>

                  </div>

                  <div class="blockBudgect block">
                    
                    <div class="title">
                      <div class="text orange">Budget </div>
                    </div>
                    <div class="content">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                      </p>
                    </div>

                  </div>


                  <div class="blockMaps block">
                    
                    <div class="title">
                      <div class="text orange"> Feuille de route </div>

                    </div>
                    <div class="content buttonCheck blackLabel">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m32!1m12!1m3!1d2796136.221631531!2d-1.3847262370923124!3d46.812149702139415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m17!3e0!4m3!3m2!1d44.869926199999995!2d-0.6735804999999999!4m5!1s0xd5527e8f751ca81%3A0x796386037b397a89!2sBordeaux!3m2!1d44.837789!2d-0.57918!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.856614!2d2.3522219!5e0!3m2!1sfr!2sfr!4v1531749743361" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
           
                      <div class="grid-x grid-margin-x align-justify align-middle">
                       
                          <div class="small-12 medium-12 large-12 cell">
                            <ul>
                              <li>New York - Etat de New York - Etats unis</li>
                              <li>Oslo</li>
                              <li>Oslo</li>
                            </ul>
                          </div>
                            
                        
                        </div>     



                    </div>


                    


                  </div>

          


                </div>
                  
                <div class="small-12 medium-8 large-3 cell collumn3">
                   
                 
                <div class="blockShare block">

                    <div class="title">
                      <div class="gd-angel"></div> 
                      <div class="text"> Partager </div>
                    </div>                    
                    <div class="content">
                      <div class="share">
                          <a href="#"><div class="gd-profil-fb"></div></a>
                          <a href="#"><div class="gd-profil-insta"></div></a>
                          <a href="#"><div class="gd-profil-youtube"></div></a>
                      </div>                  
                    </div>
                  </div> 

                <div class="blockProjet block">

                    <div class="title">
                      <div class="containerTitle">
                        <div class="grid-x grid-margin-x align-justify align-middle">
                       
                          <div class="small-6 medium-6 large-6 cell">
                             <div class="gd-aventurier"></div>
                          </div>
                            
                          <div class="small-6 medium-6 large-6 cell">
                             Aventurier                 
                          </div>
                        </div>                     

                      </div>  
                    </div>                  
                    <div class="content">

                        <div class="grid-x grid-margin-x align-justify align-middle">
                       
                          <div class="small-6 medium-6 large-6 cell">
                             <div class="gd-tirelire"></div>
                             5800 €<br>
                             Collectés


                          </div>
                            
                          <div class="small-6 medium-6 large-6 cell">
                          <a href="javascript:void(0)" data-open="popinDonator">
                             <div class="gd-group"></div>  
                             29<br>
                             donateurs   
                            </a>            
                          </div>
                        </div>     
                        <div class="grid-x grid-margin-x align-justify align-middle">
                       
                          <div class="small-6 medium-6 large-6 cell">
                             12860 €<br>Objectif
                          </div>
                            
                          <div class="small-6 medium-6 large-6 cell">
                             <div class="gd-days"></div>
                             J-226                 
                          </div>
                        </div>     

                      <div class="progress" role="progressbar" tabindex="0" aria-valuenow="1" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
                      <span class="progress-meter " style="width: 1%">
                        <p class="progress-meter-text if_small_progress">1%</p>
                      </span>
                      
                     </div>

                     <p><a href="#" class="buttonBlock">Je soutiens ce projet</a></p>                  
                    </div>
                  </div> 

                  <div class="blockTravelAnge block">

                    <div class="title">
                      <div class="gd-angel"></div> 
                      <div class="text"> Travel Angel </div>
                    </div>                    
                    <div class="content">
                      <ul>
                        <li>Sponsors</li>
                      </ul>
                     <div class="grid-x grid-margin-x align-justify">
                     
                      <div class="small-6 medium-6 large-6 cell">
                          <img src="https://placehold.it/120x80/888?text=icone fleche"/>
                      </div>
                        
                      <div class="small-6 medium-6 large-6 cell">
                          <img src="https://placehold.it/120x80/888?text=icone fleche"/>                         
                      </div>
                    </div>
                      <ul>
                        <li>Média</li>
                      </ul>
                     <div class="grid-x grid-margin-x align-justify">
                     
                      <div class="small-6 medium-6 large-6 cell">
                          <img src="https://placehold.it/120x80/888?text=icone fleche"/>
                      </div>
                        
                      <div class="small-6 medium-6 large-6 cell">
                          <img src="https://placehold.it/120x80/888?text=icone fleche"/>                         
                      </div>
                    </div>
                      <ul>
                        <li>Associations</li>
                      </ul>
                     <div class="grid-x grid-margin-x align-justify">
                     
                      <div class="small-6 medium-6 large-6 cell">
                          <img src="https://placehold.it/120x80/888?text=icone fleche"/>
                      </div>
                        
                      <div class="small-6 medium-6 large-6 cell">
                          <img src="https://placehold.it/120x80/888?text=icone fleche"/>                         
                      </div>
                    </div>


                    </div>
                  </div>                
                  <div class="blockCounterparty block">

                      <div class="title">
                        <div class="gd-angel"></div> 
                        <div class="text"> Contreparties </div>
                      </div>                    
                      <div class="content">
                        <span>A vous de choisir ⓘ</span>

                        <h3>Contreperties donateurs privé</h3>
                        <div class="counterparty">
                          <div class="container">
                            <strong>Contribution de 10 € ou plus</strong>

                            <div class="titleCounterParty">Une carte postale</div>

                            <p>
                              Je crierai votre nom à l’endroit 
                              le plus haut que je visiterai : 
                              la preuve en vidéo !
                            </p>
                          </div>
                          <div class="grid-x align-justify  endCounterparty">
                             
                              <div class="small-6 medium-6 large-6 cell">
                                 <div class="gd-group"></div>
                                 12 donateurs
                              </div>
                                
                              <div class="small-6 medium-6 large-6 cell">
                                  Quantité : illimité                       
                              </div>
                            </div>
                            <a href="#" class="buttonCounterparty">Je choisis cette récompense</a>
                        </div>
                        <div class="counterparty">
                          <div class="container">
                            <strong>Contribution de 10 € ou plus</strong>

                            <div class="titleCounterParty">Une carte postale</div>

                            <p>
                              Je crierai votre nom à l’endroit 
                              le plus haut que je visiterai : 
                              la preuve en vidéo !
                            </p>
                          </div>
                          <div class="grid-x align-justify  endCounterparty">
                             
                              <div class="small-6 medium-6 large-6 cell">
                                 <div class="gd-group"></div>
                                 12 donateurs
                              </div>
                                
                              <div class="small-6 medium-6 large-6 cell">
                                  Quantité : illimité                       
                              </div>
                            </div>
                            <a href="#" class="buttonCounterparty">Je choisis cette récompense</a>
                        </div>


                      <div class="divLoadMore"><a href="#" class="loadMore">Afficher plus </a></div>  

                      <h3>Contreperties entreprises</h3>
                        <div class="counterparty">
                          <div class="container">
                            <strong>Contribution de 10 € ou plus</strong>

                            <div class="titleCounterParty">Une carte postale</div>

                            <p>
                              Je crierai votre nom à l’endroit 
                              le plus haut que je visiterai : 
                              la preuve en vidéo !
                            </p>
                          </div>
                          <div class="grid-x  align-justify  endCounterparty">
                             
                              <div class="small-6 medium-6 large-6 cell">
                                 <div class="gd-group"></div>
                                 12 donateurs
                              </div>
                                
                              <div class="small-6 medium-6 large-6 cell">
                                  Quantité : illimité                       
                              </div>
                            </div>
                            <a href="#" class="buttonCounterparty">Je choisis cette récompense</a>
                        </div>
                        <div class="counterparty">
                          <div class="container">
                            <strong>Contribution de 10 € ou plus</strong>

                            <div class="titleCounterParty">Une carte postale</div>

                            <p>
                              Je crierai votre nom à l’endroit 
                              le plus haut que je visiterai : 
                              la preuve en vidéo !
                            </p>
                          </div>
                          <div class="grid-x  align-justify  endCounterparty">
                             
                              <div class="small-6 medium-6 large-6 cell">
                                 <div class="gd-group"></div>
                                 12 donateurs
                              </div>
                                
                              <div class="small-6 medium-6 large-6 cell">
                                  Quantité : illimité                       
                              </div>
                            </div>
                            <a href="#" class="buttonCounterparty">Je choisis cette récompense</a>
                        </div>

                      <div class="divLoadMore"><a href="#" class="loadMore">Afficher plus </a></div>  

                      <p><a href="#" class="buttonBlock">Demander une contrepartie</a></p>
                      </div>

                  </div> 

             
                </div>
              </div>
          </div>

<div id="post_grid" class="grid-container otherProjects">
  <h2> Vous pourriez également être intéressés par ces projets....</h2>


  <div class="grid-x grid-margin-x align-center small-up-1 medium-up-2 large-up-3 post_grid_white">
    

    
    <div class="cell pad_cell">
      <div class="callout1">
          <div class="gd-aventurier gd-icon"></div>
            
            <div class="imgGrid" style="background-image: url('global/images/1.jpg');">
              <a href=""><img class="thumb_post" src="global/images/1.jpg" alt="image of a planet called Pegasi B"></a>
            </div>

            <p><a href="" class="lead">The Prologue Project</a></p>
            <a href="" class="author">Frédéric</a>
            
            <div class="progress" role="progressbar" tabindex="0" aria-valuenow="1" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
              <span class="progress-meter " style="width: 1%">
                <p class="progress-meter-text if_small_progress">1%</p>
              </span>
              
           </div>

          <div class="objectif">
            <div class="gd-tirelire"></div><div class="textObjectif">5800 € collectés (objectif : 12860 €)</div>
          </div>

         <div class="more_details grid-container">
          <div class="grid-x align-justify">
              <div class="cell small-4 postGridIconsBottom"><div class="gd-days"></div><div class="textIconsBottom">J-226</div></div>
              <div class="cell small-4 postGridIconsBottom multipleIcon">
            
                  <section><div class="gd-square"></div></section>
                  <section><div class="gd-circle"></div></section>
               
              </div>
              <div class="cell small-4 postGridIconsBottom groupsIcon" ><div class="gd-group"></div><div class="textIconsBottom">29</div></div>
          </div>
        </div>
        
      </div>
    </div>


    <div class="cell pad_cell">
      <div class="callout1">
          <div class="gd-solidaire gd-icon"></div>
            <div class="imgGrid" style="background-image: url('global/images/2.jpg');">
              <a href=""><img class="thumb_post" src="global/images/2.jpg" alt="image of a planet called Pegasi B"></a>
            </div>
          <p><a href="" class="lead">The Prologue Project</a></p>
          <a href="" class="author">Frédéric</a>
          <div class="progress" role="progressbar" tabindex="0" aria-valuenow="20" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
            <span class="progress-meter" style="width: 100%">
              <p class="progress-meter-text">En voyage</p>
            </span>
          
         </div>


         <div class="objectif">
            <div class="gd-tirelire"></div><div class="textObjectif">5800 € collectés (objectif : 12860 €)</div>
          </div>

         <div class="more_details grid-container">
          <div class="grid-x align-justify">
              <div class="cell small-4 postGridIconsBottom"><div class="gd-days"></div><div class="textIconsBottom">J-226</div></div>
              <div class="cell small-4 postGridIconsBottom multipleIcon">
            
                  <section><div class="gd-square"></div></section>
                  <section><div class="gd-triangle"></div></section>

               
              </div>
              <div class="cell small-4 postGridIconsBottom groupsIcon" ><div class="gd-group"></div><div class="textIconsBottom">29</div></div>
          </div>
        </div>
        
      </div>
    </div>


    <div class="cell pad_cell">
      <div class="callout1">
        <div class="gd-eco gd-icon"></div>
            <div class="imgGrid" style="background-image: url('global/images/3.jpg');">
              <a href=""><img class="thumb_post" src="global/images/3.jpg" alt="image of a planet called Pegasi B"></a>
            </div>
        <p><a href="" class="lead">The Prologue Project</a></p>
        <a href="" class="author">Frédéric</a>
        <div class="progress" role="progressbar" tabindex="0" aria-valuenow="20" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
        <span class="progress-meter" style="width: 25%">
        <p class="progress-meter-text">25%</p>
      
       </span>
        
       </div>

         <div class="objectif">
            <div class="gd-tirelire"></div><div class="textObjectif">5800 € collectés (objectif : 12860 €)</div>
          </div>

         <div class="more_details grid-container">
          <div class="grid-x align-justify">
              <div class="cell small-4 postGridIconsBottom"><div class="gd-days"></div><div class="textIconsBottom">J-226</div></div>
              <div class="cell small-4 postGridIconsBottom multipleIcon">
            
                  <section><div class="gd-square"></div></section>
                  <section><div class="gd-triangle"></div></section>
                  <section><div class="gd-circle"></div></section>
               
              </div>
              <div class="cell small-4 postGridIconsBottom groupsIcon" ><div class="gd-group"></div><div class="textIconsBottom">29</div></div>
          </div>
        </div>

      </div>
    </div>


  </div>     
</div>

</article>


          <div class="reveal revealDonator" id="popinDonator" data-v-offset="150" data-reveal>
          <div class="blockDonator block">
                    
                    <div class="title">
                      <div class="gd-group"></div> 
                      <div class="text"> Donateurs (29)</div>
                    </div>
                    <div class="content">

                        <div class="grid-x grid-margin-x align-justify align-middle">
                         
                          <div class="small-3 medium-3 large-3 cell img">
                              <img src="https://placehold.it/40x40/888?text=icone fleche"/>
                          </div>
                            
                          <div class="small-6 medium-7 large-7 cell text">
                            <span class="nameCounterparty">Une carte postale</span><br/>
                            Alain Bernard - 22 juin 2017  
                          </div>

                          <div class="small-3 medium-2 large-2 cell price">
                            37 €
                          </div>

                          <div class="small-3 medium-3 large-3 cell img">
                              <img src="https://placehold.it/40x40/888?text=icone fleche"/>
                          </div>
                            
                          <div class="small-6 medium-7 large-7 cell text">
                          <span class="nameCounterparty">Une  vidéo</span><br/>                           
                            Alain Bernard - 22 juin 2017  
                          </div>

                          <div class="small-3 medium-2 large-2 cell price">
                            12 €
                          </div>


                        <div class="small-3 medium-3 large-3 cell img">
                              <img src="https://placehold.it/40x40/888?text=icone fleche"/>
                          </div>
                            
                          <div class="small-6 medium-7 large-7 cell text">
                            <span class="nameCounterparty">Une dédicace dans le livre</span><br/>                            
                            Alain Bernard - 22 juin 2017  
                          </div>

                          <div class="small-3 medium-2 large-2 cell price">
                            9 €
                          </div>

                        <div class="small-3 medium-3 large-3 cell img">
                              <img src="https://placehold.it/40x40/888?text=icone fleche"/>
                          </div>
                            
                          <div class="small-6 medium-7 large-7 cell text">
                            <span class="nameCounterparty">Un souvenir</span><br/>                            
                            Alain Bernard - 22 juin 2017  
                          </div>

                          <div class="small-3 medium-2 large-2 cell price">
                            1 €
                          </div>

                        <div class="small-3 medium-3 large-3 cell img">
                              <img src="https://placehold.it/40x40/888?text=icone fleche"/>
                          </div>
                            
                          <div class="small-6 medium-7 large-7 cell text">
                            <span class="nameCounterparty">Pas de contreparties</span><br/>                            
                            Alain Bernard - 22 juin 2017  
                          </div>

                          <div class="small-3 medium-2 large-2 cell price">
                            28 €
                          </div>

                        <div class="small-3 medium-3 large-3 cell img">
                              <img src="https://placehold.it/40x40/888?text=icone fleche"/>
                          </div>
                            
                          <div class="small-6 medium-7 large-7 cell text">
                          <span class="nameCounterparty">Pas de contreparties</span><br/>                            
                            Alain Bernard - 22 juin 2017  
                          </div>

                          <div class="small-3 medium-2 large-2 cell price">
                            36 €
                          </div>


                        </div>
               
                    </div>                    

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

<a href="#" class="buttonFixedMobile">JE SOUTIENS CE PROJET</a>



<!-- Contenu -->	

<!-- Footer -->
<?php require('global/template-components/footer.php'); ?>
<!-- Footer -->

<!-- Scripts -->
    <?php require('global/template-components/scripts_project.php'); ?>
     

<!-- Scripts -->
</body>
</html>