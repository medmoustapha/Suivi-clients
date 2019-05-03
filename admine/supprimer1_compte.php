<?php 
require_once("../connect.php");
		  session_start();
if(empty($_SESSION['login'])){
	header("location:fichier1.php");
}
		  
		  
		  $id=$_GET['login'];
		  
					     $req="delete FROM `employe` where login='".$id."'";
					     $rs=mysql_query($req);
						 if($rs){ 
						 mysql_free_result($rs);
						 header("location:supprimer_compte.php?var=true");}
						 else {echo "erreur de suppression";}
						 
mysql_close($x);
						 ?>