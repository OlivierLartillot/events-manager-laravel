<?php

namespace App\Helpers;

use App\Event;

class EventsHelper {


    // Formate le prix en fonction de si il est gratuit ou non
    public static function formatPrice(Event $event) {
        if ($event->isFree()) {
            return '<strong>Gratuit</strong>';
        } else {
            // %d => un entier
            // %f => un flottant 
            // y a aussi number_format qui est top !
            return sprintf("%.2f euros" , $event->price);
        }
    }

// formate la date à notre image
    public static function formatDate($date) {
        return $date->format('d/m/y H:i');
    }




} 



