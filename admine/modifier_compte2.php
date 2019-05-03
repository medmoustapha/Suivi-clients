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
                                        <img src="ORABANK%20EPaiement_fichiers/xml-bfu.png" >
                                        <span class="flaticon-viewing"> </span>
                                        <h3><img src="ORABANK%20EPaiement_fichiers/xml-bfu.png" > RAPPORTS</h3>
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

                                       
										
	

                                        &nbsp;<div class="clear"></div>
                                </div>
                                <div style="width:915px; background: #fff; margin-bottom: 20px; min-height: 378px; border: 1px solid #ccc;" class="floatL">
                                  

        <div class="padding20p">

        

        <div class="kendo"> 
		<script language="JavaScript">
	function valide(){

var c=document.compte.passwd.value;
var k=document.compte.pass.value;

if( k != c){
alert ("SVP confirmmer le meme mots de passe")
  return false;

}
else{
return true;
}
}</script>
            <?php 
if(isset($_POST['login_mod'])){
$nom1=$_POST['nom_mod'];
 $login1=$_POST['login_mod'];?>
 <div class="traitvert"></div>
			<fieldset><center><legend>nom et login de compte modifier</legend></center>
			<form name="compte1" method="POST" action="modifier_compte2.php" >
			<table align="center"  bgcolor=#1a5908 height="50%" width="45%">
<tr><td ><b>Nom:</b></font></td><td><input type="text" name="nom_mod" size="25" maxlength="15" value="<?php echo $nom1;?>"></td></tr>
<tr><td><b>login:</b></font></td><td><input type="text" name="login_mod" size="25" maxlength="15"value="<?php echo $login1;?>"></td></tr>
<tr><th colspan="2"><input name="bt" type="submit" value="MODIFIER">
<input name="bt" type="reset" value="Annuler"></th></tr>
</table></fieldset>
<?php 
 
 $req="SELECT * FROM `employe` where login='".$login1."'";
 
					     $rs=mysql_query($req);
						 $c=mysql_fetch_assoc($rs);
						 if(!isset($rs)|| empty($c['login'])){ header("location:modifier_compte.php?var=true"); exit ;}
						 else{$req="SELECT * FROM `employe` where login='".$login1."'";
 
					     $rs=mysql_query($req);
							 while($b=mysql_fetch_assoc($rs)){$pwd=$b['password'];
    ?>
      
            <fieldset><center><legend><b>Vos données</b></legend></center>
			<form name="compte" method="POST" action="" onsubmit= "return valide()">

<center><table align="center"  bgcolor=#1a5908 height="50%" width="45%">
<tr><td ><b>Nom:</b></font></td><td><input type="text" name="nom" size="25" maxlength="15" value="<?php echo ($b['nom']);?>"></td></tr>
<tr><td><b>Prenom:</b></font></td><td><input type="text" name="prenom" size="25" maxlength="15"value="<?php echo ($b['prenom']);?>"></td></tr>
<tr><td><b>Login:</b></font></td><td><input type="text" name="login" size="25" maxlength="15"value="<?php echo ($b['login']);?>"></td></tr>
<tr><td><b>Mots de passe:</b></font></td><td><input type="password" name="passwd" size="10" maxlength="15"  placeholder="<?php echo "************";?>"></td></tr>


<tr><td><b>Type profil:</b></font></td><td><select name="type"><option value="<?php echo ($b['profil']);?>"><?php echo ($b['profil']);?></option>
                                                 <option><b>admine</b></option>
												 <option><b>directeur</b></option>
												 <option><b>chargé client</b></option></select></td></tr>
<tr><td><b>Fonction:</b></font></td><td><input type="text" name="fonc" size="25" maxlength="25"value="<?php echo ($b['fonction']);?>"></td></tr>
<tr><td><b>Email:</b></font></td><td><input type="text" name="email" size="25" maxlength="30"value="<?php echo ($b['email']);?>"></td></tr>
<tr><td><b>Num TEL:</b></font></td><td><input type="text" name="tel" size="15" maxlength="15"value="<?php echo ($b['num_tel']);?>"></td></tr>
<tr><td><b>Num bureau(facultative):</b></font></td><td><input type="text" name="num_br" size="5" maxlength="15"value="<?php echo ($b['num_br']);?>"></td></tr>
<br>
<tr><th colspan="2"><input name="bt" type="submit" value="MODIFIER">
<input name="bt" type="reset" value="Annuler"></th></tr>
</center>
</center><br><br>
</form></fieldset>
                    
						 <?php }
						 
 if(isset($_POST['login'])){
	
 $nom=addslashes($_POST['nom']);
 $prenom=addslashes($_POST['prenom']);
 $login=addslashes($_POST['login']);
 $email=$_POST['email'];
if(!empty($_POST['passwd'])){ $pwd=md5($_POST['passwd']);}
 //$pwd=md5($pwd);
 $type=$_POST['type'];
 $num_tel=$_POST['tel'];
 $fonc=$_POST['fonc'];
 $num_br=$_POST['num_br'];
 if(empty($_POST['nom'])  || preg_match("[0-9]",$_POST['nom']) || preg_match("(^[[:blank:]])",$_POST['nom']) ) {
    ?><script type='text/javascript'>alert("Name incorrect")</script>
					 <?php 
     }
	 else if(empty($_POST['email']) OR !preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['email']))
    {  ?><script type='text/javascript'>alert("L'Imail incorrect")</script>
					 <?php  }
	   
	   else{
		    $req2=mysql_query("UPDATE `employe` SET `nom`= '".$nom."',`prenom`='".$prenom."',`login`='".$login."',`password`='".$pwd."',`profil`='".$type."',`fonction`='".$fonc."',`email`='".$email."',`num_tel`='".$num_tel."',`num_br`='".$num_br."' WHERE `login` = '".$login1."'")or die(mysql_error());
			
		   
		             if($req2){?><meta charset="utf-8"><script type='text/javascript'>alert("Vos données est bien modifier")</script>
					 
		  <?php
                        					 }
		             else {?><script type='text/javascript'>alert("Erreur de  modification aux table employe")</script>
					 <?php }
		   
	  
	   }
}
mysql_free_result($rs);
}} 
mysql_close($x);?>
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