<?php

use Illuminate\Support\Facades\Route;


if(!function_exists('col_active')){
	function col_active($route){
		return Route::is($route) ? 'active' : '';

	}
}

if(!function_exists('nom_route')){
	function nom_route(){
		$nRoute = Route::get('');
		return $nRoute;

	}
}

if(!function_exists('AfficheMois')){
    function AfficheMois($m){
    $t = [
    '01' => "Janvier",
    '02' => "Février",
    '03' => "Mars",
    '04' => "Avril",
    '05' => "Mai",
    '06' => "Juin",
    '07' => "Juillet",
    '08' => "Août",
    '09' => "Septembre",
    '10' => "Octobre",
    '11' => "Novembre",
    '12' => "Décembre",
    ];
    return $t[$m];
  }
}

if(!function_exists('Mois')){
    function Mois(){
    $t = [
    '01' => "Janvier",
    '02' => "Février",
    '03' => "Mars",
    '04' => "Avril",
    '05' => "Mai",
    '06' => "Juin",
    '07' => "Juillet",
    '08' => "Août",
    '09' => "Septembre",
    '10' => "Octobre",
    '11' => "Novembre",
    '12' => "Décembre",
    ];
    foreach ($t as $key => $value) {
        echo "$value";
    }
  }
}

if(!function_exists('AfficheJour')){
    function AfficheJour($m){
    $j = [
    'Mon' => "Lundi",
    'Tue' => "Mardi",
    'Wed' => "Mercredi",
    'Thu' => "Jeudi",
    'Fri' => "Vendredi",
    'Sat' => "Samedi",
    'Sun' => "Dimanche",
    ];
    return $j[$m];
  }
}





if(!function_exists('getRoute')){
	function getRoute($routi){
		return Route::is($routi) ? Route::is($routi) : '';
	}
}

/// cette méthode met les phrases en majuscule 
if(! function_exists('count_number')){
	function count_number($chain, $nombre){
		$plural = 's';
		if($nombre >= 2){
			return $chain.$plural;
		}
		else{
			return $chain;
		}
	}

// cette méthode calcule le poucentage//////////////////
 if(! function_exists('pourcentage')){
 	 function pourcentage($nombreP, $nombre){
 	 	$p = $nombreP * 100/$nombre;
 	 	return $p;
 	 }
 }
// cette affiche l'année scolaire/////////////////////
 function AnneeScolaire(){

        $date=date("Y");
        $date_format=strtotime($date."- 1 years");
        $date_passee=date("Y",$date_format);
        $anne = 'Année - Scolaire';

        return $anne." : ".$date_passee." - ".$date;
    }


function AnneeSco(){

        $date=date("Y");
        $date_format=strtotime($date."- 1 years");
        $date_passee=date("Y",$date_format);

        return  $date_passee." - ".$date;
    }
}

function jourHier($date){

    $date = date("d");
    $date_format = strtotime($date."- 1 day");
    $jour = date("d", $date_format);
    return $jour;
}

function Date_ConvertSqlTab($date_sql) {
        $jour = substr($date_sql, 8, 2);
        $mois = substr($date_sql, 5, 2);
        $annee = substr($date_sql, 0, 4);
        $heure = substr($date_sql, 11, 2);
        $minute = substr($date_sql, 14, 2);
        $seconde = substr($date_sql, 17, 2);
        
        $key = array('annee', 'mois', 'jour', 'heure', 'minute', 'seconde');
        $value = array($annee, $mois, $jour, $heure, $minute, $seconde);
        
        $tab_retour = array_combine($key, $value);
        
        return $tab_retour;
    }

    function AuPluriel($chiffre) {
        if($chiffre>1) {
            return 's';
        };
    }

 function TimeToJourJ($date_sql) {
    $tab_date = Date_ConvertSqlTab($date_sql);
    $mkt_jourj = mktime($tab_date['heure'],
                    $tab_date['minute'],
                    $tab_date['seconde'],
                    $tab_date['mois'],
                    $tab_date['jour'],
                    $tab_date['annee']);

    $mkt_now = time();
    
    $diff = $mkt_jourj - $mkt_now;
    
    $unjour = 3600 * 24;
    
    if($diff>=$unjour) {
        // EN JOUR
        $calcul = $diff / $unjour;
        return 'Il reste <strong>'.ceil($calcul).' jour'.AuPluriel($calcul).
        '</strong>.';

    } elseif($diff<$unjour && $diff>=0 && $diff>=3600) {
        // EN HEURE
        $calcul = $diff / 3600;
        return 'il y a '.ceil($calcul).' heure'.AuPluriel($calcul).
'';

    } elseif($diff<$unjour && $diff>=0 && $diff<3600) {
        // EN MINUTES
        $calcul = $diff / 60;
        return 'il y a '.ceil($calcul).' minute'.AuPluriel($calcul).
'';

    } elseif($diff<0 && abs($diff)<3600) {
        // DEPUIS EN MINUTES
        $calcul = abs($diff) / 60;
        return 'il y a '.ceil($calcul).' minute'.AuPluriel($calcul).
'';

    } elseif($diff<0 && abs($diff)<=3600) {
        // DEPUIS EN HEURES
        $calcul = abs($diff) / 3600;
        return 'il y a '.ceil($calcul).' heure'.AuPluriel($calcul).
'';        

    } else {
        // DEPUIS EN JOUR
        $calcul = abs($diff) / $unjour;
        return 'il y a '.ceil($calcul).' jour'.AuPluriel($calcul).
'';

    };
}
