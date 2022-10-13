<?php

namespace App\Helpers;

use App\Event;
use Carbon\Carbon;

class EventsHelper {


    // Formate le prix en fonction de si il est gratuit ou non
    public static function formatPrice(Event $event) {
        if ($event->isFree()) {
            return '<strong>Gratuit</strong>';
        } else {
            // %d => un entier
            // %f => un flottant 
            // y a aussi number_format qui est top !
            // %.2f euros => 10.00 / %.0f euros => 10
            return sprintf("%.0f euros" , $event->price);
        }
    }

// formate la date à notre image
    public static function formatDate(Carbon $date) {
        return $date->format('d/m/y H:i');
    }




} 



