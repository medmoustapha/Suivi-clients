<!DOCTYPE html>
<?php
	     include("../Entete.php"); 
						
							?>

                            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                            <section class="conteneur">
                                <nav class="submenu">
                                    <div style="width: 1145px; margin: auto; margin-bottom: 5px;">

                                        <div class=" floatL" style="width: 190px; padding-top: 15px; padding-bottom: 15px;">
                                           
                                        </div>

                                        <div style="width:920px;" class="floatL">
                                        
                                        
                                        <div class="element">
                                <div class="subelement">
                                    <a href="acceill_client.php">
                                        <img src="ORABANK%20EPaiement_fichiers/xml-bfu.png" alt="">
                                        <span class="flaticon-viewing"> </span>
                                        <h3> RAPPORTS</h3>
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>

                            <div class="element">
                                <div class="subelement">
                                    <a href="nouveaux_rapport.php">
                                        <img src="ORABANK%20EPaiement_fichiers/xml-acquittement.png" alt="">
                                        <span class="flaticon-viewing"> </span>
                                        <h3>CREER  UN RAPPORT</h3>
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>

                            <div class="element">
                                <div class="subelement on">
                                    <a href="modifier_rapport.php"> 
                                        <img src="ORABANK%20EPaiement_fichiers/fact-genere.png" alt="">
                                        <span class="flaticon-verification5"> </span>
                                        <h3>MODIFIER RAPPORT</h3>
                                    </a>
									
                                </div>
								
                                <div class="clear"></div>
                            </div>
							<div class="element">
                                <div class="subelement ">
                                    <a href="supprimer_rapport.php"> 
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

                                       
										<script language="JavaScript">
function valide(){
var w =document.compte.titre.value;
var a =document.compte.comm.value;

var x =/^[0-9]+$/;
var v =/^[a-zA-Z]$/;
var h ='';
if (w == h ){
alert ("SVP n'oublier pas le titre du rapport")
  return false;

}
if( a == h){
alert ("SVP le contenus du rapport est effacer")
  return false;

}

else{
return true;
}
}</script>
<script type="text/javascript">
function ok(){
  return(confirm('Confirmer la modification ?'));
}
</script>
                                        <div class="clear"></div>
                                </div>
                                <div style="width:915px; background: #fff; margin-bottom: 20px; min-height: 378px; border: 1px solid #ccc;" class="floatL">
                                  

        <div class="padding20p">

        

        <div class="kendo"> 
          
            <div class="traitvert"></div>
            <?php 

$id=$_GET['Id_Rapport'];
 
 $req="SELECT * FROM `rapport` where Id_Rapport='".$id."'";
 
					     $rs=mysql_query($req);
						 while($b=mysql_fetch_assoc($rs)){
    ?>
      
            <fieldset><center><legend><b>rapport modifier</b></legend></center>
			<form name="compte" method="POST" action="" onsubmit= "return valide()">

<table border=0 selpadding=10  style="width:100%"bgcolor=#1a5908 align ="center" color="white"><tbody>
							  <tr><td colspan=3 ><input type="text" name="titre"value="<?php echo ($b['titre'] ); ?>"pattern="^[A-Za-z_][ A-Za-z0-9_]{1,15}$"></td></tr>
                               <tr><td colspan =3 ><textarea method="POST" name="comm"  ><?php echo ($b['Memo'] ); ?></textarea></td></tr>
							    
							  <tr><td colspan=3> vous:</td>
		</tr>
							   <tr><td colspan=3>
							                         <textarea method="POST" name="comm1" placeholder="Votre commentaire" id="textarea"size=100% pattern="^[A-Za-z_][ A-Za-z_]{1,1000000}$"></textarea></td></tr>
						<tr> <input value="<?php echo ($b['Id_Rapport']);?>" name="idrap"type="hidden">
													 <td colspan=3><input value="Enregistrer" type="submit" onclick="return ok();"></form></td>
							   </tr>
							   									 
							  </tbody>
						 <?php 
} ?>

                    
						 </table></form></fieldset>
						 	  </tbody>
						 <?php 

	if(isset($_POST['titre'])|| isset($_POST['comm'])){ 
		
		  $memo=$_POST['comm'];
		  $titre=$_POST['titre'];
		  $id=$_POST['idrap'];



$mod=mysql_query("UPDATE `orabank`.`rapport` SET `Memo` = '".$memo."',`titre` = '".$titre."' WHERE Id_Rapport =".$id."");
		  if($mod){
			  ?><script type='text/javascript'> alert("Rpport bien modifié")</script>
	
		   <?php
		  if(!empty($_POST['comm1'])){
			  $com=$_POST['comm1'];
		      $date=date('d-m-Y');
		      $heur=date('H:i');
		  $rs="insert into commentaire(Id_Rapport,Id_Employe,auteur,Memo,datec) values('".$id."','".$_SESSION['login']."','".$_SESSION['nom']."','".$com."','".$date."')";
		  $req=mysql_query($rs);
		  if($req){?><script type='text/javascript'>alert("votre commentaire a été enregistré")</script>
	
		   <?php
		  
		 
		  }
		  
		  }
		  //header("location:modifier_complet.php");
		  }
		  else echo "erreur";
		  
} ?>

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