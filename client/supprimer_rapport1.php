
<?php  require_once("../connect.php");
				  session_start();
if(empty($_SESSION['login'])){
	header("location:fichier1.php");
}
		  
		 
		  $id=$_GET['Id_Rapport'];
					     $req="delete  FROM `rapport` where Id_Rapport=".$id."";
					     $rs=mysql_query($req);
						 if($rs){ 
						 header("location:supprimer_rapport.php?var=true");}
						 else echo "erreur";
						 ?>