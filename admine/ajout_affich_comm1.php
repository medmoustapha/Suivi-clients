<?php include("../Entete.php");?>
                            <section class="conteneur">
                                <nav class="submenu">
                                    <div style="width: 1145px; margin: auto; margin-bottom: 5px;">

                                        <div class=" floatL" style="width: 190px; padding-top: 15px; padding-bottom: 15px;">
                                           
                                        </div>

                                        <div style="width:920px;" class="floatL">
                                        
                                        
                                        <div class="element">
                                <div class="subelement on ">
                                    <a href="acceill_admin.php">
                                       <span class="flaticon-viewing"> </span>
                                        <h3> RAPPORTS </h3>
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>

                            <div class="element">
                                <div class="subelement ">
                                    <a href="compte.php">
                                        
                                        <span class="flaticon-viewing"> </span>
                                        <h3>NOUVEAU UTILISATEUR</h3>
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>

                            <div class="element">
                                <div class="subelement ">
                                    <a href="liste.php"> 
                                       
                                        <span class="flaticon-verification5"> </span>
                                        <h3>LISTE  UTILISATEUR</h3>
                                    </a>
									
                                </div>
								
                                <div class="clear"></div>
                            </div>
							<div class="element">
                                <div class="subelement ">
                                    <a href="modifier_compte.php"> 
                                        
                                        <span class="flaticon-verification5"> </span>
                                        <h3>MODIFIER  UTILISATEUR</h3>
                                    </a>
									
                                </div>
								
                                <div class="clear"></div>
                            </div>
							<div class="element">
                                <div class="subelement ">
                                    <a href="supprimer_compte.php"> 
                                        
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

                                       
                                        <div class="clear"></div>
                                </div>
                                <div style="width:915px; background: #fff; margin-bottom: 20px; min-height: 378px; border: 1px solid #ccc;" class="floatL">
                                  

        <div class="padding20p">

        

        <div class="kendo"> 
            
            <div class="traitvert"></div>
            <?php 
														 
$id1=$_GET['Id_Rapport'];
									$query="select MAX(Id) as id from rapport_lu";
$result=mysql_query($query);
if($row=mysql_fetch_array($result)) {
	$id= ++$row["id"];
}					
	$rs1="INSERT INTO `rapport_lu` (`Id`,`Id_Emplye` ,`Id_Rapport`) VALUES ('".$id."','".$_SESSION['login']."','".$id1."')";
		mysql_query($rs1);			
						mysql_free_result($result);
                        						
					     $req="SELECT * FROM `rapport` where Id_Rapport=".$id1." ";
					     $rs=mysql_query($req);
						 
						 while($a=mysql_fetch_assoc($rs)){ 
						 ?>
                   
 <form name="comm" method="POST" action="">
							  <table border=0 selpadding=10 style="width:100%" bgcolor=#1a5908  align ="center" >
							  <tr><td colspan = 3><font size=3pt><?php echo ($a['titre'] ); ?></font></td></tr>
                               <tr><td colspan = 3><textarea method="POST" name="comm" rows=5 cols=100 readonly="try"><?php echo ($a['Memo'] ); ?></textarea></td></tr>
							  <?php 
		$sql  = "SELECT count(*) FROM commentaire where Id_Rapport=".$id1."";
$resultat = mysql_query($sql);
$nb_total = mysql_fetch_array($resultat);
			if (empty($nb_total)||($nb_total = $nb_total[0]) == 0) {
?><tr><td colspan=3>vous<br>
							                         <textarea method="POST" name="comm1" placeholder="Votre commentaire"id="textarea" autofocus></textarea></td></tr>
													<input value="<?php echo ($a['Id_Rapport']);?>" name="idrap"type="hidden">
													<tr> <td><input value="Enregistrer" type="submit"></td></tr>
<?php }
else {
if (!isset($_GET['debut'])) $_GET['debut'] = 0;$nb_affichage_par_page = 4;
							  $rc=mysql_query("SELECT * FROM `commentaire` where Id_Rapport=".$id1." ORDER BY Id_commentaire DESC limit ".$_GET['debut'].", ".$nb_affichage_par_page."  ")or die(mysql_error());
							        
						        while($b=mysql_fetch_assoc($rc)){ ?>
							   <tr><td><?php if($b['auteur']==$_SESSION['nom']){ ?><font style="color:#3F9623"> <?php echo "vous"; ?></font><?php }else { ?><font style="color:#3F9623"><?php echo $b['auteur'];?></font><?php }echo"  commenté le "; echo ($b['datec']);echo"\t";echo ($b['heurec']);?><br>
								<textarea  name="comm2" method="POST"  type="txt" readonly="try"id="textarea"><?php echo ($b['Memo']);?></textarea></td></tr><?php }?>
							  
							    <tr><td colspan=3>vous<br>
							                         <textarea method="POST" name="comm1" placeholder="Votre commentaire"id="textarea" autofocus></textarea></td></tr>
													<input value="<?php echo ($a['Id_Rapport']);?>" name="idrap"type="hidden">
													<tr> <td><input value="Enregistrer" type="submit"></td></tr>
	                       <tr><td colspan =3><?php 	
						 echo barre_navigation($nb_total, $nb_affichage_par_page, $_GET['debut'], 3); mysql_free_result($rc);} ?></td></tr>
                                     
									  
							  </table></form>
						<?php 
						 }
						 if(isset($_POST['idrap'])){$idrapp=$_POST['idrap'];
		  if(!empty($_POST['comm1'])){
			  $com=$_POST['comm1'];$com=addslashes($com);
		  $date=date('d-m-Y');
		  $time=date('H:i');
		  
		  $rs="insert into commentaire(Id_Rapport,Id_Employe,auteur,Memo,datec,heurec) values('".$idrapp."','".$_SESSION['login']."','".$_SESSION['nom']."','".$com."','".$date."','".$time."')";
		  $req=mysql_query($rs);
		  if($req){?><a href=""><script type='text/javascript'>alert("votre commentaire enregistrer")</script>")</a>
		  <script type='text/javascript'>alert("click le titre pour actualiser le page et voir tont commentaire")</script>
		  <?php
		  
		   header("location:affich_ajout_comm.php?Id_Rapport='".$idrapp."'");mysql_free_result($rs);
		  }
		  else{?><script type='text/javascript'>alert("commentaire non enregistrer")</script><?php
		 
		  }
		  }
		  else  {?><script type='text/javascript'>alert("votre commentaire est vide veiller ressayer")</script><?php
		  }
						 }
						 
						 
						 mysql_close($x);?>
						 
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

                        
                            <script src="ORABANK%20EPaiement_fichiers/Chart.js"></script>
                            
                            
                            
                                                
                                        
</body></html>