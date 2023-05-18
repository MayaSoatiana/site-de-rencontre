<?php 
function correspondance($utilisateur,$nom,$mdp){
        for ($i=0; $i < count($utilisateur); $i++) { 
            if ($utilisateur[$i]['pseudo']==$nom && $utilisateur[$i]['mdp']==$mdp) {
                return $utilisateur[$i];
            }
        }
        return 2;
}
function taona($annee){
    $age=2023-$annee;
    return $age;
}

function efa_misy($content,$tab){
     for ($i=0; $i <count($tab); $i++) { 
         if ($content==$tab[$i]) {
            return 1;
         }
     }
     return 0;
}
function getindice($nom,$tab){
	for ($i=0; $i <count($tab) ; $i++) { 
		if ($tab[$i]['pseudo']==$nom) {
			return $i;
		}
	}
}
function interet($tab,$tab1,$indinteret){
	$finaltab=array();
	for ($i=0; $i <count($tab) ; $i++) { 
		if (strcmp($tab[$i]['genre'],$tab1[$indinteret])==0) {
			$finaltab[]=$tab[$i];
		}
	}
	return $finaltab;
}
/*function gettabindice($nvtab,$tab){
	$indice=array();
	for ($j=0; $j < count($nvtab); $j++) { 
		for ($i=0; $i <50 ; $i++) { 
			if (strcmp($nvtab[$j]['pseudo'],$tab[$i]['pseudo'])!=0) {
				$indice[]=$i;
			}
		}
	}
	return $indice;
}

function exist_in_tab($nb,$tab){
	for ($i=0; $i < count($tab); $i++) { 
		if ($nb==$i) {
			return 1;
		}
	}
	return 0;
}*/
function showrandom($tab,$user){
	$nvtab=array();
	shuffle($tab);
	for ($i=0; $i <count($tab); $i++) { 
		if ($i!=$user) {
			$nvtab[]=$tab[$i];
		}	
	}
	return $nvtab;
}
 
function difference_pref($prefuser,$prefdude){
	$difference=0;
	if ($prefuser<$prefdude) {
		$difference=$prefdude-$prefuser;
	}
	elseif ($prefuser>$prefdude) {
		$difference=$prefuser-$prefdude;
	}
	return $difference;
}
 
function taux_de_compatibilité($membres,$user,$dude){
	$somme=0;
	$diff=array();
	$diff[0]=difference_pref($membres[$user]['pref_musique'],$membres[$dude]['pref_musique']);
	$diff[1]=difference_pref($membres[$user]['pref_sports'],$membres[$dude]['pref_sports']);
	$diff[2]=difference_pref($membres[$user]['pref_cuisine'],$membres[$dude]['pref_cuisine']);
	$diff[3]=difference_pref($membres[$user]['pref_voyage'],$membres[$dude]['pref_voyage']);
	$diff[4]=difference_pref($membres[$user]['pref_cinema'],$membres[$dude]['pref_cinema']);
	for ($i=0; $i < 5; $i++) { 
		$somme=$somme+$diff[$i];
	}
	$moyenne=$somme/5;
	return $moyenne;
	
}


function age_R($age1,$age2,$age){
                if ($age1>$age && $age<$age2) {
                    return TRUE;
                }
            };

?>