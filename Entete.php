<!DOCTYPE html>
<meta charset=utf-8 >
<?php
	      session_start();
		  require_once("connect.php");
		   
	      if(!isset($_SESSION['login'])){
		 ?><script type='text/javascript'>alert("il faut s'authentifier avant de faire cette action !!")</script><?php
		 header("location:index.php");
		 exit;
		  }
		   
						
							
							function barre_navigation ($nb_total,$nb_affichage_par_page,$debut,$nb_liens_dans_la_barre) {

	                            $barre = '';

	                            // on recherche l'URL courante munie de ses paramètre auxquels on ajoute le paramètre 'debut' qui jouera le role du premier élément de notre LIMIT
	                            if ($_SERVER['QUERY_STRING'] == "") {
	                                     $query = $_SERVER['PHP_SELF'].'?debut=';
	                                }
	                         else {
	                                 $tableau = explode ("debut=", $_SERVER['QUERY_STRING']);
	                                 $nb_element = count ($tableau);
	                                 if ($nb_element == 1) {
		                                 $query = $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'].'&debut=';
	                                    }
	                                   else {
		                                       if ($tableau[0] == "") {
		                                          $query = $_SERVER['PHP_SELF'].'?debut=';
		                                            }
		                                        else {
		                                             $query = $_SERVER['PHP_SELF'].'?'.$tableau[0].'debut=';
		                                              }
	                                        }
	                               }

	                                      // on calcul le numéro de la page active
	                                            $page_active = floor(($debut/$nb_affichage_par_page)+1);
	                                         // on calcul le nombre de pages total que va prendre notre affichage
	                                            $nb_pages_total = ceil($nb_total/$nb_affichage_par_page);

	                                     // on calcul le premier numero de la barre qui va s'afficher, ainsi que le dernier ($cpt_deb et $cpt_fin)
	                                      // exemple : 2 3 4 5 6 7 8 9 10 11 << $cpt_deb = 2 et $cpt_fin = 11
	                                if ($nb_liens_dans_la_barre%2==0) {
	                                        $cpt_deb1 = $page_active - ($nb_liens_dans_la_barre/2)+1;
	                                         $cpt_fin1 = $page_active + ($nb_liens_dans_la_barre/2);
	                                        }
	                                else {
	                                     $cpt_deb1 = $page_active - floor(($nb_liens_dans_la_barre/2));
	                                     $cpt_fin1 = $page_active + floor(($nb_liens_dans_la_barre/2));
	                                     }

	                                   if ($cpt_deb1 <= 1) {
	                                      $cpt_deb = 1;
	                                     $cpt_fin = $nb_liens_dans_la_barre;
	                                       }
	                                     elseif ($cpt_deb1>1 && $cpt_fin1<$nb_pages_total) {
	                                      $cpt_deb = $cpt_deb1;
	                                      $cpt_fin = $cpt_fin1;
	                                    }
	                                else {
	                                   $cpt_deb = ($nb_pages_total-$nb_liens_dans_la_barre)+1;
	                                   $cpt_fin = $nb_pages_total;
	                                     }

	                                    if ($nb_pages_total <= $nb_liens_dans_la_barre) {
	                                  $cpt_deb=1;
	                                  $cpt_fin=$nb_pages_total;
	                                        }

	                                 // si le premier numéro qui s'affiche est différent de 1, on affiche << qui sera un lien vers la premiere page
	                               if ($cpt_deb != 1) {
	                                $cible = $query.(0);
	                                          $lien = '<A HREF="'.$cible.'">&lt;&lt;</A>&nbsp;&nbsp;';
	                                           }
	                                 else {
	                                             $lien='';
	                                          }
	                                       $barre .= $lien;

	                         // on affiche tous les liens de notre barre, tout en vérifiant de ne pas mettre de lien pour la page active
	                         for ($cpt = $cpt_deb; $cpt <= $cpt_fin; $cpt++) {
	                                    if ($cpt == $page_active) {
		                                        if ($cpt == $nb_pages_total) {
		                                              $barre .= $cpt;
		                                           }
		                                 else {
		                                    $barre .= $cpt.'&nbsp;-&nbsp;';
		                                   }
	                                     }
	                                  else {
		                                  if ($cpt == $cpt_fin) {
		                                           $barre .= "<A HREF='".$query.(($cpt-1)*$nb_affichage_par_page);
		                                           $barre .= "'>".$cpt."</A>";
		                                          }
		                                 else {

		                                     $barre .= "<A HREF='".$query.(($cpt-1)*$nb_affichage_par_page);
		                                     $barre .= "'>".$cpt."</A>&nbsp;-&nbsp;";
		                                       }
	                                          }
	                                        }

	                      $fin = ($nb_total - ($nb_total % $nb_affichage_par_page));
	                          if (($nb_total % $nb_affichage_par_page) == 0) {
	                                 $fin = $fin - $nb_affichage_par_page;
	                                }

	              // si $cpt_fin ne vaut pas la dernière page de la barre de navigation, on affiche un >> qui sera un lien vers la dernière page de navigation
	                   if ($cpt_fin != $nb_pages_total) {
	                    $cible = $query.$fin;
	                       $lien = '&nbsp;&nbsp;<A HREF="'.$cible.'">&gt;&gt;</A>';
	                     }
	                   else {
	                     $lien='';
	                           }
	                      $barre .= $lien;

	                       return $barre;
                      }
?>
<html class="theme2"><head>
                            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                            <title>Suivi clients</title>

                            <link rel="stylesheet" href="ORABANK%20EPaiement_fichiers/screen.css">
                            <link rel="stylesheet" href="ORABANK%20EPaiement_fichiers/style.css">
                            <link rel="stylesheet" href="ORABANK%20EPaiement_fichiers/print.css" media="print">
                            <link rel="stylesheet" href="ORABANK%20EPaiement_fichiers/persona.css"> 
                            <link rel="stylesheet" href="ORABANK%20EPaiement_fichiers/jquery.css">       
                            <link rel="shortcut icon" type="image/x-icon" href="http://10.12.127.11/img/favi.ico">
                            <link rel="stylesheet" href="ORABANK%20EPaiement_fichiers/jquery-ui-1.css" type="text/css"> 
                                                        <link rel="stylesheet" href="ORABANK%20EPaiement_fichiers/flaticon.css">       

                            <script type="text/javascript" src="ORABANK%20EPaiement_fichiers/jquery-1.js"></script>    
                            <script src="ORABANK%20EPaiement_fichiers/jquery-ui.js"></script>
                            <script type="text/javascript" src="ORABANK%20EPaiement_fichiers/jquery_007.js"></script>
                            <script src="ORABANK%20EPaiement_fichiers/jquery-ui-1.js"></script>        
                            <script src="ORABANK%20EPaiement_fichiers/jquery_006.js"></script>
                            <script src="ORABANK%20EPaiement_fichiers/jquery-ui-timepicker-addon.js"></script>
                            <script src="ORABANK%20EPaiement_fichiers/jquery_004.js"></script>
                            <script src="ORABANK%20EPaiement_fichiers/jquery.js"></script>
                            <script src="ORABANK%20EPaiement_fichiers/jquery_005.js"></script>
                            <script src="ORABANK%20EPaiement_fichiers/jquery_003.js"></script>
                            <script src="ORABANK%20EPaiement_fichiers/format.js"></script>
                            <script src="ORABANK%20EPaiement_fichiers/jquery_002.js"></script>

                            <!-- highchart js -->
                            <script src="ORABANK%20EPaiement_fichiers/highcharts.js"></script>
                            <script src="ORABANK%20EPaiement_fichiers/highcharts-3d.js"></script>

                           
                            
                                                 <script type='text/javascript'>
 function Supp(link){
    if(confirm('Confirmez-vous la suppression de cette ligne ?')){
     document.location.href = link;
    }
	else return false;
   }

 function Mod(link){
    if(confirm('Confirmez-vous l\'edition de demende ?')){
     document.location.href = link;
    }
	
   }	
   		</script>                      
                            <script type="text/javascript">
                                function date(id)
                                {
                                     date = new Date;
                                     annee = date.getFullYear();
                                     moi = date.getMonth();
                                    mois = new Array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
                                    j = date.getDate();
                                    jour = date.getDay();
                                    jours = new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

                                    resultat = '' + jours[jour] + ' ' + j + ' ' + mois[moi] + ' ' + annee;

                                    document.getElementById(id).innerHTML = resultat;
                                   // setTimeout('date("' + id + '");', '1000');
                                    return true;
                                }

                                function heure(id)
                                {
                                    date = new Date;
                                    j = date.getDate();
                                    jour = date.getDay();
                                    jours = new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
                                    h = date.getHours();
                                    if (h < 10)
                                    {
                                        h = "0" + h;
                                    }
                                    m = date.getMinutes();
                                    if (m < 10)
                                    {
                                        m = "0" + m;
                                    }
                                    s = date.getSeconds();
                                    if (s < 10)
                                    {
                                        s = "0" + s;
                                    }
                                    resultat = '' + h + ':' + m + ':' + s;

                                    document.getElementById(id).innerHTML = resultat;
                                    setTimeout('heure("' + id + '");', '1000');
                                    return true;
                                }

                                function thousands(that, container) {
                                    var j = 0;
                                    var temp = "";
                                    var sep = " ";
                                    var what = that.replace(/ /g, "");

                                    for (i = what.length; i > -1; i--) {
                                        temp = what.charAt(i) + temp;
                                        if (i > 0 && j == 3) {
                                            temp = sep + temp;
                                            j = 0;
                                        }
                                        j++;
                                    }
                                    that.value = temp;
                                    document.getElementById(container).value = temp;
                                }

                                function formater(variable) {
                                    var j = 0;
                                    var temp = "";
                                    var sep = " ";
                                    //console.log(variable) ;
                                       if(variable === null ||  variable ==='')
                                    {
                                        variable = 0 ;
                                    }
                                    
                                    if(variable !== null ||  variable !=='')
                                    {
                                        for (i = variable.toString().length; i > -1; i--) {
                                            temp = variable.toString().charAt(i) + temp;
                                            if (i > 0 && j == 3) {
                                                temp = sep + temp;
                                                j = 0;
                                            }
                                            j++;
                                        }
                                        return temp;
                                    }else
                                     return 0;
                                }
                                

                                function sousTotal(idmonnaie, valeurmonnaie) {
                                    var  nbre = $("#nb" + idmonnaie).val();
                                    var resultat = 0;
                                    var j = 0;
                                    var temp = "";
                                    var sep = " ";
                                    var ttal = 0;
                                    if (isNaN(nbre) || (nbre == "")) {
                                        nbre = 0;
                                        resultat = 0;
                                        temp = 0;

                                        ttal = 0;
                                    } else {
                                        nbre = parseFloat(nbre);
                                        resultat = parseFloat(nbre) * parseFloat(valeurmonnaie);

                                        for (i = resultat.toString().length; i > -1; i--) {
                                            temp = resultat.toString().charAt(i) + temp;
                                            if (i > 0 && j == 3) {
                                                temp = sep + temp;
                                                j = 0;
                                            }
                                            j++;
                                        }
                                    }

                                    $('#tp' + idmonnaie).val(resultat);
                                    $('#st' + idmonnaie).html(temp);

                                    $('.somTotal').val(ttal);
                                    for (var i = 1; i < 20; i++) {
                                        if (isNaN($('#tp' + i).val()) || ($('#tp' + i).val() == "")) {
                                            $('#tp' + i).val(0);
                                        } else {
                                            ttal = parseInt(ttal) + parseInt($('#tp' + i).val());
                                        }
                                    }
                                    $('.somTotal').val(ttal);
                                    $('.somTotalt').html(formater(ttal));
                                }

                                function sousTotal2(idmonnaie, valeurmonnaie) {
                                    nbre = $("#nbr" + idmonnaie).val();
                                    var resultat = 0;
                                    var j = 0;
                                    var temp = "";
                                    var sep = " ";
                                    var ttal = 0;
                                    if (isNaN(nbre) || (nbre == "")) {
                                        nbre = 0;
                                        resultat = 0;
                                        temp = 0;

                                        ttal = 0;
                                    } else {
                                        nbre = parseFloat(nbre);
                                        resultat = parseFloat(nbre) * parseFloat(valeurmonnaie);

                                        for (i = resultat.toString().length; i > -1; i--) {
                                            temp = resultat.toString().charAt(i) + temp;
                                            if (i > 0 && j == 3) {
                                                temp = sep + temp;
                                                j = 0;
                                            }
                                            j++;
                                        }
                                    }

                                    $('#tpr' + idmonnaie).val(resultat);
                                    $('#str' + idmonnaie).html(temp);

                                    $('.somTotal2').val(ttal);
                                    for (var i = 1; i < 20; i++) {
                                        if (isNaN($('#tpr' + i).val()) || ($('#tpr' + i).val() == "")) {
                                            $('#tpr' + i).val(0);
                                        } else {
                                            ttal = parseInt(ttal) + parseInt($('#tpr' + i).val());
                                        }
                                    }
                                    $('.somTotal2').val(ttal);
                                    $('.somTotalt2').html(formater(ttal));
                                }

                                function sousTotalR(idmonnaie, valeurmonnaie) {
                                    nbre = $("#nbr" + idmonnaie).val();
                                    var resultat = 0;
                                    var j = 0;
                                    var temp = "";
                                    var sep = " ";

                                    if (isNaN(nbre) || (nbre == "")) {
                                        nbre = 0;
                                        resultat = 0;
                                        temp = 0;
                                    } else {
                                        nbre = parseFloat(nbre);
                                        resultat = parseFloat(nbre) * parseFloat(valeurmonnaie);

                                        for (i = resultat.toString().length; i > -1; i--) {
                                            temp = resultat.toString().charAt(i) + temp;
                                            if (i > 0 && j == 3) {
                                                temp = sep + temp;
                                                j = 0;
                                            }
                                            j++;
                                        }
                                    }
                                    $('#tpr' + idmonnaie).val(resultat);
                                    $('#str' + idmonnaie).html(temp);

                                }

                                function affichercacher(checkBoxID) {

                                    var baliseChoix = document.getElementById(checkBoxID);

                                    if (baliseChoix.style.display == "none") {
                                        baliseChoix.style.display = "block";
                                    }
                                    else {
                                        baliseChoix.style.display = "none";
                                    }
                                }
                            </script>
                        <script type="text/javascript">

var tab = ["images/images(1).jpg", "images/images(2).jpg","images/images(4).jpg","images/images(5).jpg","images/images(5).jpg","images/images(6).jpg","images/images(7).jpg","images/images(8).jpg","images/images(9).jpg","images/images(10).jpg","images/images(11).jpg"];
var secondes = 10;
var numero = -1;
var
aleatoire = false;

function changerImage () {
if (aleatoire) {
var n = numero;
while (n == numero) {
n = Math.floor(Math.random() *
tab.length);
}
numero = n;
}
else {
numero++;
if (numero >= tab.length) numero =0;
}
document.getElementById('3').src =
tab[numero];
setTimeout("changerImage();", secondes*200);
}
                        
                        
                            </script>                                                                      
                                                  </head>                                                          
                                                
                                                <body class="body2">
                                                        <header class="headerMenu">
                                <div id="logouser">
                                    <div class="logo floatL">
                                        <div class="floatL logo2" style="max-width: 200px;border: 1px solid #fff"><img src="ORABANK%20EPaiement_fichiers/orabank.jpg" alt="ORABANK  EPaiement"></div>
                                    </div>
                                        
                                <div class="logo floatL"style="width:60%">
   
                                    <center> <span>
<center>
                                       <font align=center color=white size=7pt>Suivi Clients</font>	
                                       <script type="text/javascript">
                                       

                                        changerImage()


							           </script></center>
								    </span></center>
                                </div>
							   <div class="user floatR ">
	                                        <div class=" boxDatetime  aligndroite">
                                                   <div><span class="dateheure ">DATE :</span> <span class=""><span id="date">Vendredi 11 Decembre 2015</span><script type="text/javascript">window.onload = date('date');</script></span> </div>
                                                    <div><span class="dateheure ">HEURE :</span> <span class=""><span id="heure">10:25:52</span><script type="text/javascript">window.onload = heure('heure');</script></span></div>
                                            </div>
                                             <div class="deconnexion" style=""><a href="../index.php" style=" color:#fff;"><i class="flaticon-power19"></i><span style="font-size: 20px;">Déconnexion</span></a></div>
											  <div class="deconnexion"></div>
											  <div class="clear"><br><?php print '<b>';echo $_SESSION['profil'];echo "  ".$_SESSION['nom'];print '</b>';?></div>
                                  </div>
                                    <div class="clear"></div>
                                </div>
                            </header>
                            
                            <!--Fin du header-->