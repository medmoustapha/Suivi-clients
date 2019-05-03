<!DOCTYPE html>
<?php 
 include("../Entete.php");
 // if(isset($_GET['var'])){ ?><!-- <script type='text/javascript'>alert("le rapport est supprimmer")</script> <?php //}
		   ?><!--  -->
		   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		   
           <script type="text/javascript">
					function ok(){
					 return(confirm('Confirmez-vous la suppression de cette ligne ?'));
								}
		   </script>                                                             
                                                                                                            
     <section class="conteneur">
                                <nav class="submenu">
                                    <div style="width: 1145px; margin: auto; margin-bottom: 5px;">

                                        <div class=" floatL" style="width: 190px; padding-top: 15px; padding-bottom: 15px;">
                                           
                                        </div>

                                        <div style="width:920px;" class="floatL">
                                        
                                        
                                        <div class="element">
                                <div class="subelement ">
                                    <a href="acceill_client.php">
                                        <img src="ORABANK%20EPaiement_fichiers/xml-bfu.png" alt="">
                                        <span class="flaticon-viewing"> </span>
                                        <h3> RAPPORTS</h3>
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>

                            <div class="element">
                                <div class="subelement ">
                                    <a href="nouveaux_rapport.php">
                                        <img src="ORABANK%20EPaiement_fichiers/xml-acquittement.png" alt="">
                                        <span class="flaticon-viewing"> </span>
                                        <h3>CREER UN RAPPORT</h3>
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>

                            <div class="element">
                                <div class="subelement ">
                                    <a href="modifier_rapport.php"> 
                                        <img src="ORABANK%20EPaiement_fichiers/fact-genere.png" alt="">
                                        <span class="flaticon-verification5"> </span>
                                        <h3>MODIFIER RAPPORT</h3>
                                    </a>
									
                                </div>
								
                                <div class="clear"></div>
                            </div>
							<div class="element">
                                <div class="subelement on">
                                    <a href=""> 
                                        <img src="ORABANK%20EPaiement_fichiers/fact-genere.png" alt="">
                                        <span class="flaticon-verification5"> </span>
                                        <h3>SUPPRIMER RAPPORT</h3>
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
                                                <div class="subelement  ">
                                                   
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
                    <th>Heure</th>
					<th>date</th>
					<th>Supprimer</th>
                </tr>
				
                    
<?php $sql  = "SELECT count(*) FROM rapport where Id_Employe='".$_SESSION['login']."'";
$resultat = mysql_query($sql);
$nb_total = mysql_fetch_array($resultat);
			if (empty($nb_total)||($nb_total = $nb_total[0]) == 0) {
	?> 
											     <script type='text/javascript'>alert("Aucun rapport ajouté")</script>
											<?php
}
else {
if (!isset($_GET['debut'])) $_GET['debut'] = 0;$nb_affichage_par_page = 8;			 
$req="SELECT * FROM `rapport` where Id_Employe='".$_SESSION['login']."' ORDER BY Id_Rapport DESC limit ".$_GET['debut'].", ".$nb_affichage_par_page."";
					     $rs=mysql_query($req);
						 if(!$rs) echo "requete non reconner";
						else {while($a=mysql_fetch_assoc($rs)){print "<tr>";
Print '<td><a href=affich_ajout_comm_client.php?Id_Rapport='.$a['Id_Rapport'].'>'.$a['titre'].'</a></td>';
Print "<td>".$a['heure']."</td>";
Print "<td>".$a['date']."</td>";
Print '<td><centrer><a href=supprimer_rapport1.php?Id_Rapport='.$a['Id_Rapport'].' title="SUPPRIMER" onclick="return ok();"; return(false);><img src="img/trash.png" titre="supprimer" ></a></centrer></td>';




print " </tr>";
							   
                                  
						}            
						}	

							   
                                  
						            
									 
							
						 
						
	 ?> <tr><td colspan =5><?php 	
						 echo barre_navigation($nb_total, $nb_affichage_par_page, $_GET['debut'], 3); } ?></td></tr>
                            </tbody></table>

            <div class="points"></div>
        </div>
        <!--Fin du box compte-->
    </div>

    

                                    <div class="clear"></div>
                                </div>
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