  <?php 
       include("../Entete.php"); ?>
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
                                <div class="subelement on">
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
                                <div style="width:190px" class="floatL">
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

                                       
										<script language="JavaScript">
	function valide(){
var w =document.compte.nom.value;
var a =document.compte.prenom.value;
var b =document.compte.login.value;
var c=document.compte.passwd.value;
var k=document.compte.mts.value;
var e =document.compte.type.value;
var r =document.compte.email.value;
var s =document.compte.fonc.value;
var x =/^[0-9]+$/;
var v =/^[a-zA-Z]$/;
var h ='';
if (a == h || b == h || e == h|| w == h|| c == h||e==h||s==h||r==h){
alert ("SVP completer la formulaire")
  return false;

}
if( k == h){
alert ("SVP confirmmer votre mots de passe")
  return false;

}
if( k != c){
alert ("SVP confirmmer le meme mots de passe")
  return false;

}
else{
return true;
}
}</script>
                                   
										
	

                                        &nbsp;<div class="clear"></div>
                                </div>
                                <div style="width:915px; background: #fff; margin-bottom: 20px; min-height: 378px; border: 1px solid #ccc;" class="floatL">
                                  

        <div class="padding20p">

        

        <div class="kendo"> 
            
            <div class="traitvert"></div>
            <form name="compte" method="POST" action="compte.php" onsubmit= "return valide()" enctype="multipart/form-data">

<center><table align="center"  bgcolor=#1a5908 ">
<tr><td ><b>Nom:</b></font></td><td><input type="text" name="nom" size="25" maxlength="30" pattern="^[A-Za-z_][ A-Za-z0-9_]{1,15}$"></td></tr>
<tr><td><b>Prenom:</b></font></td><td><input type="text" name="prenom" size="25" maxlength="30"></td></tr>
<tr><td><b>Login:</b></font></td><td><input type="text" name="login" size="25" maxlength="30"pattern="^[A-Za-z_][ A-Za-z0-9_]{1,15}$"></td></tr>
<tr><td><b>Mots de passe:</b></font></td><td><input type="password" placeholder="8 caractére minimum" name="passwd" size="10" maxlength="25" pattern="(?=^.{8,}$)(?![.\n])(?=.*[a-z0-9]).*$"></td> </tr>
<tr><td><b>Confirme mots de passe:</b></font></td><td><input type="password" name="mts" size="10" maxlength="15"></td></tr>
<tr><td><b>Type profil:</b></font></td><td><select name="type"><option></option>
                                                 <option><b>admine</b></option>
												 <option><b>directeur</b></option>
												 <option><b>chargé client</b></option></select></td></tr>
<tr><td><b>Fonction:</b></font></td><td><input type="text" name="fonc" size="25" maxlength="25"></td></tr>
<tr><td><b>Email:</b></font></td><td><input type="text" name="email" size="25" maxlength="30" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"></td></tr>
<tr><td><b>Num TEL:</b></font></td><td><input type="text" name="tel" size="15" maxlength="15" pattern="^(?:4|2\s?|3\s?)\d{7}$"></td></tr>
<tr><td><b>Num bureau(facultative):</b></font></td><td><input type="text" name="num_br"  maxlength="3"></td></tr>

<br>
<tr><th colspan="2"><input name="bt" type="submit" value="Enregistrer">
<input name="bt" type="reset" value="Annuler"></th></tr>
</table></center>
</center><br><br>
</form>
                    
<?php if(isset($_POST['login'])){
	$nom=addslashes($_POST['nom']);
 $prenom=addslashes($_POST['prenom']);
 $login=addslashes($_POST['login']);
 $email=$_POST['email'];
 
 $pwd=md5($_POST['passwd']);
 $type=addslashes($_POST['type']);
 $num_tel=$_POST['tel'];
 $fonc=addslashes($_POST['fonc']);
 $num_br=$_POST['num_br'];
 /*if(!empty($_FILES['photo']['name'])){$photo=$_FILES['photo']['name'];
 $file_tmp_name=$_FILES['photo']['tmp_name'];
 move_uploaded_file($file_tmp_name,'../images/'.$photo);}
 else{  $photo=""; ?><script type='text/javascript'>alert("photo non existe")</script>
					 <?php }*/
 if(empty($_POST['nom'])  || preg_match("[0-9]",$_POST['nom']) || preg_match("(^[[:blank:]])",$_POST['nom']) ) {
    ?><script type='text/javascript'>alert("Name incorrect")</script>
					 <?php 
     }
	 else if(empty($_POST['email']) OR !preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['email']))
    {  ?><script type='text/javascript'>alert("L'Imail incorrect")</script>
					 <?php  }
	   
	   else{
		   
		   
		    $req1="insert into employe values('".$nom."','".$prenom."','".$login."','".$pwd."','".$type."','".$fonc."','".$email."','".$num_tel."','".$num_br."')";
		    $rs1=mysql_query($req1);
		             if($rs1){?><meta charset="utf-8"><script type='text/javascript'>alert("Votre donnee a ete inserer avec succés")</script>
					 
		  <?php
                        					 }
		             else {?><script type='text/javascript'>alert("Erreur d'insertion aux table employe")</script>
					 <?php }
		   
	  
	   }
}
	 ?>
                    <tr>
                        
                    </tr>
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