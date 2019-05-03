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
                                <div class="subelement on">
                                    <a href="">
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
                                                <div class="subelement">
                                                   
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
										<script language="JavaScript">
function valide(){
var w =document.rapp.Titre.value;
var a =document.rapp.rapport.value;

var x =/^[0-9]+$/;
var v =/^[a-zA-Z]$/;
var h ='';
if (w == h ){
alert ("SVP n'oublier pas le titre du rapport")
  return false;

}
if( a == h){
alert ("SVP le contenus du rapport est vide")
  return false;

}

else{
return true;
}
}</script>
                                      
          

            <table class="listeBfuAttente infoCompte noLeftBorder noGras" width=30%>
                <tbody>
                    
<form method="POST" action="" name="rapp"  onsubmit= "return valide()">
                         
                             <tr><td colspan=3><label for="titre" >Titre</label></td></tr>
						     <tr><td colspan=3><input name="Titre"  type="text"placeholder="Titre du rapport" required autofocus ></td></tr>
							 <tr><td colspan=3><label for="rapport">RAPPORT</label></td></tr>
                             <tr><td colspan=3><textarea method="POST" name="rapport" rows=2 cols=1000 placeholder="Contenus du rapport" ></textarea></td></tr>
                             <tr ><td colspan=3><label for="commentaire"for="titre" >VOTRE COMMENTAIRE</td></tr><tr  height=10px ><td colspan=3></label><textarea  name="commentaire" id="textarea" type="text" size=10 maxlength="500" width=180px height=150px placeholder="Votre commentaire"></textarea>
                             <tr><th><input name="m" value="Enregitrer" type="submit">
                             <input name="k" value="Annuler" type="reset"></th>
                             </tr>
                          </form>
                    
                        
                            </tbody></table>

            
		<?php
		if(isset($_POST['Titre'])){ 
		$titre=$_POST['Titre'];$titre=addslashes($titre);
$rapp=$_POST['rapport'];$rapp=addslashes($rapp);
$comm=$_POST['commentaire'];$comm=addslashes($comm);
$date=date('d-m-Y');
$heur=date('H:i');

$query="select MAX(Id_Rapport) as id from rapport";
$result=mysql_query($query);
if($row=mysql_fetch_array($result)) {
	$id= ++$row["id"];
}
$rs="insert into rapport (Id_Rapport,Id_Employe,auteur,Memo,titre,date,heure) values('".$id."','".$_SESSION['login']."','".$_SESSION['nom']."','".$rapp."','".$titre."','".$date."','".$heur."')";
$req=mysql_query($rs);//die(mysql_error());
        if($req){?><script type='text/javascript'>alert("votre rapport est enregistré")</script>
		<?php 
		  }
		  else{?><script type='text/javascript'>alert("rapport non enregistré")</script><?php
		 
		  }
		  if(!empty($_POST['commentaire'])){$rs1="insert into commentaire(Id_Rapport,Id_Employe,auteur,Memo,datec) values('".$id."','".$_SESSION['login']."','".$_SESSION['nom']."','".$comm."','".$date."')";
                           $req=mysql_query($rs1);}
		}
		?>
        <!-- -->
    <div class="points"></div>
        </div>
        <!--  -->
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

                                              