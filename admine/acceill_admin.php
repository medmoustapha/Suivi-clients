<?php 
       include("../Entete.php"); ?>
                            <section class="conteneur">
                                <nav class="submenu">
								
                                    <div style="width: 1145px; margin: auto; margin-bottom: 5px;">

                                        <div class=" floatL" style="width: 190px; padding-top: 15px; padding-bottom: 15px;">
                                           
                                        </div>

                                        <div style="width:920px;" class="floatL">
                                        
                                
                                        
                                        <div class="element">
                                <div class="subelement on ">
								
                                    <a href="">
                                        <img src="ORABANK%20EPaiement_fichiers/xml-bfu.png" alt="">
                                        <span class="flaticon-viewing"> </span>
                                        <h3> RAPPORTS</h3>
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>

                            <div class="element">
                                <div class="subelement ">
                                    <a href="compte.php">
                                        <img src="ORABANK%20EPaiement_fichiers/xml-acquittement.png" alt="">
                                        <span class="flaticon-viewing"> </span>
                                        <h3>NOUVEAU UTILISATEUR</h3>
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>

                            <div class="element">
                                <div class="subelement ">
                                    <a href="liste.php"> 
                                        <img src="ORABANK%20EPaiement_fichiers/fact-genere.png" alt="">
                                        <span class="flaticon-verification5"> </span>
                                        <h3>LISTE  UTILISATEUR</h3>
                                    </a>
									
                                </div>
								
                                <div class="clear"></div>
                            </div>
							<div class="element">
                                <div class="subelement ">
                                    <a href="modifier_compte.php"> 
                                        <img src="ORABANK%20EPaiement_fichiers/fact-genere.png" alt="">
                                        <span class="flaticon-verification5"> </span>
                                        <h3>MODIFIER  UTILISATEUR</h3>
                                    </a>
									
                                </div>
								
                                <div class="clear"></div>
                            </div>
							<div class="element">
                                <div class="subelement ">
                                    <a href="supprimer_compte.php"> 
                                        <img src="ORABANK%20EPaiement_fichiers/fact-genere.png" alt="">
                                        <span class="flaticon-verification5"> </span>
                                        <h3>SUPPRIMER UTILISATEUR</h3>
                                    </a>
									
                                </div>
								
                                <div class="clear"></div>
                            </div>
							<div class="clear"></div>
                             </div>   
							  <div class="clear"></div>
                              </div>
                              </nav>
                               <div class="clear"></div>
                                <div style="width:225px" class="floatL">
                                    <nav class="subsubmenu">
                                       <div class="element">
                                            <div class="subsub">
                                                <div class="subelement ">
                                                    
                                                </div>
                                                 <div class="clear"></div>
                                             </div>
                                        </div>
                                          <div class="clear"></div>
                                          <div class=" parametrage">
                                             <div class="clear"></div>
                                            </div>
                                     </nav>
								</div>
                                <div style="width:915px; background: #fff; margin-bottom: 20px; min-height: 378px; border: 1px solid #ccc;" class="floatL">
                                  

        <div class="padding20p">

        

        <div class="kendo"> 
          
            <div class="traitvert"></div>
            <table class="listeBfuAttente infoCompte noLeftBorder noGras">
                <tbody><tr>
                    <th>Titre</th>
                    <th>Auteur</th>
					<th>Heure</th>
					<th>date</th>
					<th>Situation</th>
                </tr>
                    
<?php $sql  = 'SELECT count(*) FROM rapport';
$resultat = mysql_query($sql);
$nb_total = mysql_fetch_array($resultat);
			if (($nb_total = $nb_total[0]) == 0) {
	?> 
											     <script type='text/javascript'>alert("Aucun rapport ajouté")</script>
											<?php
}
else {
if (!isset($_GET['debut'])) $_GET['debut'] = 0;$nb_affichage_par_page = 10;


$req="SELECT * FROM `rapport` ORDER BY Id_Rapport DESC limit ".$_GET['debut'].", ".$nb_affichage_par_page."";
					     
					    $rs1=mysql_query($req);
						 if($rs1){
						while($a=mysql_fetch_assoc($rs1)){ 
							print "<tr>";
							$req12="SELECT Id_Rapport FROM `rapport` where rapport.Id_rapport IN (select Id_Rapport from rapport_lu where `Id_Emplye` = '".$_SESSION['login']."' AND rapport_lu.Id_Rapport ='".$a['Id_Rapport']."')";
							$rs12=mysql_query($req12);
							$b12=mysql_fetch_array($rs12);

if(empty($b12)){ Print '<td><b><a href=ajout_affich_comm1.php?Id_Rapport='.$a['Id_Rapport'].'>'.$a['titre'].'</a></b></td>';
}
else { Print '<td><b><a href=affich_ajout_comm.php?Id_Rapport='.$a['Id_Rapport'].'>'.$a['titre'].'</a></b></td>';
}


Print "<td>".$a['auteur']."</td>";
Print "<td>".$a['heure']."</td>";
Print "<td>".$a['date']."</td>";
//(!empty($b) && in_array($a['Id_Rapport'],$b)){Print '<td><a href=ajout_affich_comm1.php?Id_Rapport='.$a['Id_Rapport'].' title="Rapport Non Lu"><img src="img/message.png" width=16px height=16px ></a></td>';



if(empty($b12)){Print '<td><a href=ajout_affich_comm1.php?Id_Rapport='.$a['Id_Rapport'].' title="Rapport Non Lu"><img src="img/message.png" width=16px height=16px ></a></td>';
}
else{
print '<td><a href=affich_ajout_comm.php?Id_Rapport='.$a['Id_Rapport'].' title="Rapport Deja Lu"><img src="img/message_lu.png" width=16px height=16px></a></td>';
}
print " </tr>";

							   
                                  
						}  mysql_free_result($rs12);     }   
									 
					mysql_free_result($rs1);
	 ?>
	 <tr><td colspan =5><?php 	
						 echo barre_navigation($nb_total, $nb_affichage_par_page, $_GET['debut'], 3); } ?></td></tr>
                    
                            </tbody></table>

            <div class="points"></div>
        </div>
        <!--Fin du box compte-->
    </div>

    

                                    
                                </div>
								<?php //include("../pied_page.php");
								mysql_close($x)
								?>
                                <div class="clear"></div>
                                <div id="process_tpl" style="display:none">
                                    <div id="process_tpl_texte"></div>
                                    <div id="loading_container" style="text-align: center">
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </section>
                            <!--fin section-->

                                              

    </div>
                                    
</body></html>