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