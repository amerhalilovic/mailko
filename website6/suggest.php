<?php
$people[]= "Amer";
$people[]= "Haris";
$people[]= "Faruk";
$people[]= "Mikail";
$people[]= "Namik";
$people[]= "Admir";
$people[]= "Hanad";
$people[]= "Inas";
$people[]= "Demir";


$q= $_REQUEST['q'];

$suggestion ="";

if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);

    foreach( $people as $person){
        if(stristr($q,substr($person,0,$len))){
            if($suggestion === ""){
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion; ?>