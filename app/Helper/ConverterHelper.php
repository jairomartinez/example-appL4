<?php
namespace App\Helper;


class ConverterHelper {


    public static function centigradosAFarenheit($centigrados) {
        if ( is_numeric($centigrados) && $centigrados >= -273.15) {
            return round($centigrados * 1.8 + 32);
        } else {
            return false;
        }
    }

    public static function centigradosAKelvin($centigrados) {
        if ( is_numeric($centigrados) && $centigrados >= -273.15) {
            return round($centigrados + 273.15);
        } else {
            return false;
        }
    }


}