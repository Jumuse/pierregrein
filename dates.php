<?php


function dateToFrench($date, $format) 
{
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date))));
};

$weekHours = "12h-14h & 19h-22h";
$wednesday = "le restaurant est fermé";
$saturdayHours = "19h - 23h";
$sundayHours = "12h - 14h";

function retrieveDate() {
    $date = date('l');
    $dayOfWeek = date('w', strtotime($date));
    global $weekHours, $wednesday, $saturdayHours, $sundayHours;

    if ($dayOfWeek == 1 || $dayOfWeek == 2 || $dayOfWeek == 4 || $dayOfWeek == 5) 
    {
    echo "le restaurant est ouvert de ". $weekHours;
    } else if ($dayOfWeek == 6) 
    {
    echo "le restaurant est ouvert de ". $saturdayHours;
    } else if ($dayOfWeek == 0) 
    {
            echo "le restaurant est ouvert de ". $sundayHours;
    } else if ($dayOfWeek == 3) 
    {
        echo $wednesday;
    }
};
