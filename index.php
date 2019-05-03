<!DOCTYPE html>

<html class="theme2 height100pc"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="cache-control" content="no-cache">
       <?php  session_start();
	           session_destroy();
			  
	   
	  
                                                          ?>
        <title>SUIVI CLIENT</title>
		
        <link rel="stylesheet" href="ACE3I%20EPaiement_fichiers/screen.css">
        <link rel="stylesheet" href="ACE3I%20EPaiement_fichiers/style.css">
        <link rel="stylesheet" href="ACE3I%20EPaiement_fichiers/persona.css"> 

        
        <script type="text/javascript" src="ACE3I%20EPaiement_fichiers/jquery-1.js"></script>   
        <link rel="stylesheet" href="ACE3I%20EPaiement_fichiers/flaticon.css">  
        <link rel="shortcut icon" type="image/x-icon" href="http://10.12.127.11/img/favi.ico">
    </head>

    <body class="height100pc fondGeometrique">
        
        <div class="clear"></div>



        
    <div class="fondLogins login height100pc">

                <div class="loginNew marginBot20p">
            <header class="header marginBot10p">
                <img src="ACE3I%20EPaiement_fichiers/8002c61c10577ac8a592821d1e50cd58e06aee6e.png" alt="Logo" class="logo floatL">
                <div class="floatR w220">
                    <h1 class="bas">AUTHENTIFICATION</h1>
                </div>
                <div class="clear"></div>
            </header>

            <form  action="" method="post" id="form_login">
                <div class="" style="padding: 0 30px;">
                      
                </div>
                <input style="display: none;" type="text">
                <input style="display: none;" type="password">
                
                <div class="champConnexion">
                    <div class="bordGrisChamp">
                        <label for="username" class="flaticon-black302"></label><input autofocus name="login" placeholder="Votre identifiant" maxlength="20" type="text">
                    </div>
                </div>
                <div class="champConnexion">
                    <div class="bordGrisChamp">
                        <label for="username" class="flaticon-unlock"></label><input  name="password" placeholder="Votre mot de passe" type="password">
                    </div>
                </div>
                
                
                 <div id="butcon">
                    <input value="Se connecter" type="submit" name="submit">
                    <span style="color:red;" ><font size=2><? //php echo $erreur ;?></font></span>
                </div>
                                &nbsp;
								
                            </form>
							
                                            </div>
        <div class="consignes">
            

           
                
            
        </div>
                
    </div>
        
        
</body></html>
<?php
session_start();
	if(isset($_POST['submit'])){ 
	$enter_ok =true;
    require_once("connect.php");
	if (isset($_POST["login"])){
	$login=$_POST['login'];
    
   $pass=md5($_POST['password']);
	

	$str_sql = "SELECT * FROM employe WHERE login='$login' AND password='$pass'";
		$res_qry= mysql_query($str_sql);
	
		if ($res_qry){ 
			if($res_obj = mysql_fetch_object($res_qry)){
					$_SESSION['login'] 		= session_id();
					$_SESSION['login'] 		= $res_obj->login;
					$_SESSION['nom'] 		= $res_obj->nom;
					$_SESSION['profil'] 	= $res_obj->profil;
                      }
		       else  {  
			          
					  $enter_ok=false;}
		}
		else {    print "<p class='excep'> SQL:".$str_sql." <br> Message de MySQL:".mysql_error()."</p>";}
	}

	if ((isset($_SESSION['login']))&&($enter_ok==true)){
		
		
		if($_SESSION['profil']=="admine"){ header("location:admine/acceill_admin.php");}
		else if($_SESSION['profil']=="directeur"){ header("location:directeur/acceill_directeur.php");}
		else { header("location:client/acceill_client.php");}
		
		
	
?>
<?php } else{ 	 ?>
<script type="text/javaScript">alert("login ou password est incorrect")</script>	   <?php } } ?>


