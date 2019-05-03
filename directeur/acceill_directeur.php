<!DOCTYPE html>
<?php
	   include("../Entete.php");  ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	echo 'Aucune réponse trouvée';
}
else {
if (!isset($_GET['debut'])) $_GET['debut'] = 0;$nb_affichage_par_page = 10;

$req="SELECT Id_Rapport FROM `rapport` where rapport.Id_rapport NOT IN (select Id_Rapport from rapport_lu where `Id_Emplye` = '".$_SESSION['login']."' AND rapport.Id_rapport = rapport_lu.Id_Rapport ) order by Id_Rapport DESC ";
					     
					     $rs=mysql_query($req);
						 
						$b=mysql_fetch_array($rs);
$req="SELECT * FROM `rapport` ORDER BY Id_Rapport DESC limit ".$_GET['debut'].", ".$nb_affichage_par_page."";
					     
					    $rs1=mysql_query($req);
						 if($rs1){
						while($a=mysql_fetch_assoc($rs1)){ 
							print "<tr>";
							$req12="SELECT Id_Rapport FROM `rapport` where rapport.Id_rapport IN (select Id_Rapport from rapport_lu where `Id_Emplye` = '".$_SESSION['login']."' AND rapport_lu.Id_Rapport ='".$a['Id_Rapport']."')";
							$rs12=mysql_query($req12);
							$b12=mysql_fetch_array($rs12);

if(empty($b12)){ Print '<td><a href=ajout_affiche_comm.php?Id_Rapport='.$a['Id_Rapport'].'>'.$a['titre'].'</a></font></td>';
}
else { Print '<td><a href=ajout_affiche_comm1.php?Id_Rapport='.$a['Id_Rapport'].'>'.$a['titre'].'</a></font></td>';
}


Print "<td>".$a['auteur']."</td>";
Print "<td>".$a['heure']."</td>";
Print "<td>".$a['date']."</td>";
//if(!empty($b) && in_array($a['Id_Rapport'],$b)){Print '<td><a href=ajout_affich_comm1.php?Id_Rapport='.$a['Id_Rapport'].' title="Rapport Non Lu"><img src="img/message.png" width=16px height=16px ></a></td>';



if(empty($b12)){Print '<td><a href=ajout_affiche_comm.php?Id_Rapport='.$a['Id_Rapport'].' title="Rapport Non Lu"><img src="img/message.png" width=16px height=16px ></a></td>';
}
else{
print '<td><a href=ajout_affiche_comm1.php?Id_Rapport='.$a['Id_Rapport'].' title="Rapport Deja Lu"><img src="img/message_lu.png" width=16px height=16px></a></td>';
}
print " </tr>";

							   
                                  
						}       }   
									 
					
						
	 ?>
	 <tr><td colspan =5><?php 	
						 echo barre_navigation($nb_total, $nb_affichage_par_page, $_GET['debut'], 3); } ?></td></tr>
                            </tbody></table>

            <div class="points"></div>
        </div>
        
    </div>
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