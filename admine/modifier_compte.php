    <?php include("../Entete.php");
	if(!empty($_GET['var'])){ $var=$_GET['var'];?> <script type='text/javascript'>alert("données n'existe pas") </script> <?php 
	unset($_GET['var']);
	unset($var);
	} 
	// if(isset($_GET['var'])){ ?><!-- <script type='text/javascript'>alert("le rapport est supprimmer")</script> --><?php //}
	?>
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

                            <div class="element on">
                                <div class="subelement">
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
                                <div class="subelement on">
                                    <a href=""> 
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
                                
                                     </nav>
        <div style="width:225px" class="floatL">
            <nav class="subsubmenu">
                <div class="element">
                    <div class="subsub">
                        <div class="subelement ">
                            
                        </div>
                    </div>
                </div> </div>
            </nav>
		</div>
		<script language="JavaScript">
	                                      function valide(){
															 var r1 =document.compte1.nom_mod.value;
															 var s1 =document.compte1.login_mod.value;
															 var h ='';
															 if(r1 == h || s1 == h){
															       alert ("SVP completer la formulaire")
															       return false;    }
															 else{ return true;     }
														    }
		</script>
        <div style="width:915px; background: #fff; margin-bottom: 20px; min-height: 378px; border: 1px solid #ccc;" class="floatL">
            <div class="padding20p">
			    <div class="kendo">
			        <fieldset>
					    <center><legend>nom et login du compte modifier</legend></center>
			            <form name="compte1" method="POST" action="modifier_compte2.php" onsubmit = "return valide()" >
			                <table align="center"  bgcolor=#1a5908 height="50%" width="45%">
                            <tr>
							     <td ><b>Nom:</b></font></td><td><input type="text" name="nom_mod" size="25" maxlength="15" pattern="^[A-Za-z_][ A-Za-z0-9_]{1,30}$"></td>
							</tr>
							<tr>
							     <td><b>login:</b></font></td><td><input type="text" name="login_mod" size="25" maxlength="15"pattern="^[A-Za-z_][ A-Za-z0-9_]{1,30}$"></td>
							</tr>
							<tr>
							     <th colspan="2">
								     <input name="bt" type="submit" value="MODIFIER" >
                                     <input name="bt" type="reset" value="Annuler">
								 </th>
							</tr>
						</table>
					</fieldset>
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
	