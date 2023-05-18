<?php
function random($nblimite){
    $tab=array();
    for ($i=0; $i <50; $i++) { 
        $hasard=rand(0,$nblimite);
        $tab[]=$hasard;
    }
    return $tab;
}
$pseudo=array('Emily','Emiliana','Rose','Jo','Celine','Sabine','Jean','Jeannette','Jin','Laila','Annicet','Romeo','Gustave','Princia','Rick','Julia','Roni','Steph','Jack','Ced','Anissa','Cedric','Marie','Mimi','Tess','Kim','Annie','Roxanne','Talia','Sin','Laura','Kevin','Tania','Tiss','Victor','Tannis','Rodriguez','King','Sept','Amelie','Ari','Roxie','Annes','Stefie','Rex','Yamie','Jacob','Kimi','Aniesse','Roy');
$email=array('Emily@gmail.com','Emiliana@gmail.com','Rose@gmail.com','Jo@gmail.com','Celine@gmail.com','Sabine@gmail.com','Jean@gmail.com','Jeannette@gmail.com','Jin@gmail.com','Laila@gmail.com','Annicet@gmail.com','Romeo@gmail.com','Gustave@gmail.com','Princia@gmail.com','Rick@gmail.com','Julia@gmail.com','Roni@gmail.com','Steph@gmail.com','Jack@gmail.com','Ced@gmail.com','Anissa@gmail.com','Cedric@gmail.com','Marie@gmail.com','Mimi@gmail.com','Tess@gmail.com','Kim@gmail.com','Annie@gmail.com','Roxanne@gmail.com','Talia@gmail.com','Sin@gmail.com','Laura@gmail.com','Kevin@gmail.com','Tania@gmail.com','Tiss@gmail.com','Victor@gmail.com','Tannis@gmail.com','Rodriguez@gmail.com','King@gmail.com','Sept@gmail.com','Amelie@gmail.com','Ari@gmail.com','Roxie@gmail.com','Annes@gmail.com','Stefie@gmail.com','Rex@gmail.com','Yamie@gmail.com','Jacob@gmail.com','Kimi@gmail.com','Aniesse@gmail.com','Roy@gmail.com');
$mdp=array('Emily0','Emiliana1','Rose2','Jo3','Celine4','Sabine5','Jean6','Jeannette7','Jin8','Laila9','Annicet10','Romeo11','Gustave12','Princia13','Rick14','Julia15','Roni16','Steph17','Jack18','Ced19','Anissa20','Cedric21','Marie22','Mimi23','Tess24','Kim25','Annie26','Roxanne27','Talia28','Sin29','Laura30','Kevin31','Tania32','Tiss33','Victor34','Tannis35','Rodriguez36','King37','Sept38','Amelie39','Ari40','Roxie41','Annes42','Stefie43','Rex44','Yamie45','Jacob46','Kimi47','Aniesse48','Roy49');
$genre=array('femme','femme','femme','homme','femme','femme','homme','femme','homme','femme','homme','homme','homme','femme','homme','femme','homme','femme','homme','homme','femme','homme','femme','femme','femme','femme','femme','femme','femme','femme','femme','homme','femme','femme','homme','femme','homme','homme','homme','femme','femme','femme','femme','femme','homme','femme','homme','femme','femme','homme');
$annee_de_naissance=array(2001,2002,2003,2004,2005,1990,1999,2000,2001,2002,2004,2003,2005,1990,2002,2000,2001,2005,2004,2003,1999,2002,2000,2001,2000,2002,2003,2005,2002,2000,2004,2003,2002,2000,2001,2005,2004,2004,2002,2003,2001,2002,2000,2005,2002,2004,2005,2004,2003,2002,);
$signe_astrologique=array('capricorne','poisson','lion','scorpion','cancer','belier','sagittaire','taureau','gemaux','verseau','balance','vierge','capricorne','poisson','lion','scorpion','cancer','belier','sagittaire','taureau','gemaux','verseau','balance','vierge','capricorne','poisson','lion','scorpion','cancer','belier','sagittaire','taureau','gemaux','verseau','balance','vierge','capricorne','poisson','lion','scorpion','cancer','belier','sagittaire','taureau','gemaux','verseau','balance','vierge','poisson','lion','scorpion','cancer','belier','taureau','gemaux','verseau','balance','vierge',);
$interesse_par=array(0,1,1,2,0,1,2,0,1,1,2,0,2,1,2,0,1,0,2,1,0,2,0,1,0,2,0,2,0,1,0,2,0,2,2,1,2,0,1,2,0,1,0,2,0,1,0,1,2,1,2);
$pref_musique=array(21,85,45,65,25,48,22,66,98,21,85,45,65,25,12,96,55,32,48,75,25,13,36,25,22,11,45,56,2,56,33,12,65,89,74,51,62,35,14,20,48,15,25,55,48,12,10,30,50,48,65,20);
$pref_sports=array(98,90,41,42,55,65,48,75,12,96,55,21,85,45,65,25,21,85,45,65,25,25,13,36,25,22,11,45,56,2,56,65,89,74,51,62,35,14,20,48,15,25,55,48,12,10,30,50,25,22,91);
$pref_cuisine=array(21,85,45,65,25,48,22,66,98,21,85,45,65,25,12,96,55,32,48,75,12,96,55,21,85,45,65,25,21,85,45,65,25,21,85,45,65,25,25,13,36,25,22,11,45,56,2,56,65,52,11,55,2,85,36,485,68);
$pref_voyage=array(21,85,45,65,25,48,25,12,96,55,32,48,75,25,13,36,25,22,25,12,96,55,32,48,75,25,13,36,25,22,13,22,66,98,21,85,45,65,25,12,96,55,32,48,75,12,96,55,21,85,48,13,69,15,15,30);
$pref_cinema=array(5,21,85,45,65,25,25,13,36,25,22,11,45,56,2,56,65,89,74,51,62,35,14,20,48,15,25,55,48,12,10,30,50,25,22,11,52,15,14,84,52,68,56,51,86,54,68,5,86,64,68,56,56,56,51,45,86,30);

for ($i=0; $i < 50; $i++) { 
$membres[]=array(
	'pseudo'=> 
	 $pseudo[$i],
	'email'=> $email[$i],
	'mdp'=>$mdp[$i],
	'genre'=>$genre[$i],
	'annee_de_naissance'=>$annee_de_naissance[$i],
	'signe_astrologique'=>$signe_astrologique[$i],
	'img_profil'=>  $i,
	'img_animal'=>  $i,
	'img_maison'=>  $i,
	'img_telephone'=>   $i,
	'interesse_par'=>$interesse_par[$i],
	'pref_musique'=>$pref_musique[$i],
	'pref_sports'=>$pref_sports[$i],
	'pref_cuisine'=>$pref_cuisine[$i],
	'pref_voyage'=>$pref_voyage[$i],
	'pref_cinema'=> $pref_cinema[$i]);


};
$interesse[]='homme';
$interesse[]='femme';
$interesse[]='les 2';


$signe=array('belier','taureau','gemeaux','cancer','lion','vierge','balance','scorpion','sagittaire','capricorne','verseau','poisson');
?>