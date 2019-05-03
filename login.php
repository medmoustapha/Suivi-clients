<?php
session_start();
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
					$_SESSION['prenom'] 		= $res_obj->prenom;
					$_SESSION['profil'] 	= $res_obj->profil;
                      }
		       else  {  
					  $enter_ok=false;}
		}
		
	}

	if ((isset($_SESSION['login']))&&($enter_ok==true)){
		
		
		if($_SESSION['profil']=="admine"){ header("location:admine/acceill_admin.php");}
		else if($_SESSION['profil']=="directeur"){ header("location:directeur/acceill_directeur.php");}
		else { header("location:client/acceill_client.php");}
		
		
	
?>
<?php } else{ header("location:index.php?faux=login ou pwassword incorrect");	}?>