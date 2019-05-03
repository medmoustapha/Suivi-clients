<?php include("../Entete.php");?>

                            <section class="conteneur">
                                <nav class="submenu">
                                    <div style="width: 1145px; margin: auto; margin-bottom: 5px;">

                                        <div class=" floatL" style="width: 190px; padding-top: 15px; padding-bottom: 15px;">
                                           
                                        </div>

                                        <div style="width:920px;" class="floatL">
                                        
                                        
                                        <div class="element">
                                <div class="subelement">
                                    <a href="acceill_admin.php">
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
                                <div class="subelement on">
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
                                                <div class="subelement">
                                                    <a href="liste.php">
                                                         <img src="ORABANK%20EPaiement_fichiers/xml-attente.png" alt="">
                                                          <h4 align="left"><b> Liste de toute les utilisateurs:</b></h4>
                                                     </a>
                                                </div>
												<div class="subelement">
                                                                <a href="liste_directeur.php">
                                                                    <img src="ORABANK%20EPaiement_fichiers/xml-traite.png" alt="">
                                                                    <h3><span class="flaticon-verification5">LISTE DES DIRECTEURS</span></h3>
                                                                </a>
                                                            </div>
															<div class="subelement">
                                                                <a href="liste_client.php">
                                                                    <img src="ORABANK%20EPaiement_fichiers/xml-traite.png" alt="">
                                                                    <h3><span class="flaticon-verification5">LISTE DES CHARGE CLIENTS</span></h3>
                                                                </a>
                                                            </div>
															<div class="subelement on">
                                                                <a href="">
                                                                    <img src="ORABANK%20EPaiement_fichiers/xml-traite.png" alt="">
                                                                    <h3><span class="flaticon-verification5">LISTE DES ADMINES</span></h3>
                                                                </a>
                                                            </div>
                                                 <div class="clear"></div>
                                             </div>
                                        </div>
                                          <div class="clear"></div>
                                          <div class=" parametrage">
                                             <div class="clear"></div>
                                          </div>
                                     </nav>

                                          
                                        &nbsp;<div class="clear"></div>
                                </div>
                                <div style="width:915px; background: #fff; margin-bottom: 20px; min-height: 378px; border: 1px solid #ccc;" class="floatL">
                                  

								<div class="padding20p">

        

									<div class="kendo"> 
            
										<div class="traitvert"></div>
											<table class="listeBfuAttente infoCompte noLeftBorder noGras">
													<tbody><tr>
																 <th>Nom</th>
																 <th>Prenom</th>
																 <th>Email</th>
																 <th>Profile</th>
																 <th>Num_Telephone</th>
																 <th>Num_Bureau</th>
															</tr>
                    
															<?php  $sql  = 'SELECT count(*) FROM employe where profil="admine"';
						                                           $resultat = mysql_query($sql);
																   $nb_total = mysql_fetch_array($resultat);
			                                                       if (($nb_total = $nb_total[0]) == 0) {
																				  ?> 
																								<script type='text/javascript'>alert("Aucun reponse")</script>
																					<?php
                                                                     }
                                                                    else {
                                                                          if (!isset($_GET['debut'])) $_GET['debut'] = 0;$nb_affichage_par_page = 10;
					 
															 $req="SELECT * FROM `employe`  where profil='admine' limit ".$_GET['debut'].", ".$nb_affichage_par_page."";
															 $rs=mysql_query($req);
															 if($rs){
					     
																	 $rs=mysql_query($req);
						 
																	 while($a=mysql_fetch_assoc($rs)){
																	         print "<tr>";
																				 Print "<td>".$a['nom']."</td>";
																				 Print "<td>".$a['prenom']."</td>";
																				 Print "<td>".$a['email']."</td>";
																				 Print "<td>".$a['profil']."</td>";
																				 Print "<td>".$a['num_tel']."</td>";
																				 Print "<td>".$a['num_br']."</td>";



																			 print " </tr>";
																										}            
																	}
						                                     else {  ?>
						 
																	 <script type='text/javascript'>alert("Erreur de recupperation de donneér")</script>
																	 <script type='text/javascript'>alert("<?php echo mysql_error();?>")</script>
																	 <?php 
																   } ?>
																   <tr><td colspan =6><?php 	
																				echo barre_navigation($nb_total, $nb_affichage_par_page, $_GET['debut'], 3); } ?></td></tr>
                   
                                                    </tbody>
											</table>

                                         <div class="points"></div>
                                     </div>
                                          <!-- -->
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
                            