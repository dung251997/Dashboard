
<?php
$whitelist = array(
    '127.0.0.1',
    '::1'
);

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
$urlLink = "http://html.globedreamers.fr/";
}
else
{
$urlLink = "http://127.0.0.1/Globedreamers/html-v2/";
}
?>




<div class="reveal" id="exampleModal1" data-reveal>


<ul>
	<li><a href="<?php echo $urlLink; ?>index.php"> Home non connecté (100%)</a></li>	
	<li><a href="<?php echo $urlLink; ?>index_connect.php"> Home connecté (100%)</a></li>
	<li><a href="<?php echo $urlLink; ?>stepone.php"> Etape 1 </a></li>	
	<li><a href="<?php echo $urlLink; ?>steptwo.php"> Etape 2 </a></li>	
	<li><a href="<?php echo $urlLink; ?>stepthree.php">Etape 3 </a></li>	
	<li><a href="<?php echo $urlLink; ?>stepfour.php"> Etape 4 </a></li>
	<li><a href="<?php echo $urlLink; ?>stepfive.php"> Etape intermédiaire </a></li>
	<li><a href="<?php echo $urlLink; ?>counterparty.php"> Contreparties</a></li>	
	<li><a href="<?php echo $urlLink; ?>bio.php"> Bio </a></li>	
	<li><a href="<?php echo $urlLink; ?>projet.php"> Projet </a></li>		
	<li><a href="<?php echo $urlLink; ?>explorer-2.php"> Explorer V2 </a></li>		
	<li><a href="<?php echo $urlLink; ?>signin.php"> Inscription / connexion </a></li>		
	<li><a href="<?php echo $urlLink; ?>cookies.php"> Politique des cookies </a></li>		
	<li><a href="<?php echo $urlLink; ?>mentions.php"> Mentions légales </a></li>		
	<li><a href="<?php echo $urlLink; ?>soutenir.php"> Soutenir un projet </a></li>		
	<li><a href="<?php echo $urlLink; ?>popins.php"> Popins </a></li>		
	<li><a href="<?php echo $urlLink; ?>help_reward.php"> Icônes Reward Documentation </a></li>			
</ul>

  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>


</div>

<div style="position:fixed; left:10px; bottom:20px; z-index: 9999; ">
<p><button class="button" data-open="exampleModal1">Naviguer dans le projet</button></p>
</div>

