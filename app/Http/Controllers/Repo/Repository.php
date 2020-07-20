<?php

namespace App\Http\Controllers\Repo;

class Repository
{
    public function __construct(){
    }

    public function phoneService($phone = null){
//        $patern = "^(^\+62\s?|^0)(\d{3,4}-?){2}\d{3,4}$";
//        'phone' => 'required|regex:/(01)[0-9]{9}/'
        $patern = "(\+62 ((\d{3}([ -]\d{3,})([- ]\d{4,})?)|(\d+)))|(\(\d+\) \d+)|\d{3}( \d+)+|(\d+[ -]\d+)|\d+";
        return preg_match( $patern, $phone);
    }

    public function standardPhone($phone, $countryId = 'ID'){
        $phoneUtil  = \libphonenumber\PhoneNumberUtil::getInstance();
        try{
            $parsePhone = $phoneUtil->parse($phone, $countryId);
        } catch (\libphonenumber\NumberParseException $e) {
            return false;
        }

        $isValid    = $phoneUtil->isValidNumber($parsePhone);

        if(!$isValid){
            return false;
        }

        try {
            $correctPhone   = $phoneUtil->format($parsePhone, \libphonenumber\PhoneNumberFormat::E164);
        } catch (\libphonenumber\NumberParseException $e) {
            $correctPhone   = false;
        }

        return $correctPhone;
    }

    public function changeCountry($phone = '', $countryId = '', $mobileOnly = true){
        $phoneUtil  = \libphonenumber\PhoneNumberUtil::getInstance();
        try{
            $parsePhone = $phoneUtil->parse($phone, $countryId);
        } catch (\libphonenumber\NumberParseException $e) {
            return false;
        }

        $isValid    = $phoneUtil->isValidNumber($parsePhone);

        if(!$isValid){
            return false;
        }

        if($mobileOnly){
            $isMobile   = $phoneUtil->getNumberType($parsePhone);
            if($isMobile !== 1){
                return false;
            }
        }

        try {
            $correctPhone   = $phoneUtil->format($parsePhone, \libphonenumber\PhoneNumberFormat::E164);
        } catch (\libphonenumber\NumberParseException $e) {
            $correctPhone   = false;
        }

        return $correctPhone;
    }
}
