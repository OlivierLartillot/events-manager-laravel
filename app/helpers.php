<?php

// Formate le prix en fonction de si il est gratuit ou non
if (!function_exists('format_price')) {
    function format_price($event) {
        if ($event->isFree()) {
            return '<strong>Gratuit</strong>';
        } else {
            // %d => un entier
            // %f => un flottant 
            // y a aussi number_format qui est top !
            return sprintf("%.2f euros" , $event->price);
        }
    }
}

// formate la date à notre image
if (!function_exists('format_date')) { 
    function format_date($date) {
        return $date->format('d/m/y H:i');
    }
}