<?php

namespace App\Http\Controllers\Repo;

use Validator;
use App\Catering;
use App\Contact;
use Illuminate\Support\Facades\Auth;

class Repository
{
    public function __construct(){
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

    public function findContactById($id){
        return Contact::with([])->where('id', $id)->firstOrFail();
    }

    public function findCateringById($id){
        return Catering::with([])->where('id', $id)->firstOrFail();
    }

    public function getAllCatering(){
        return Catering::with([])->get();
    }

    public function getAllContact(){
        return Contact::with([])->get();
    }
    public function storeFormContact($request, $id){
        $result     = ['status' => false, 'message' => ''];
        $validator  = Validator::make($request->all(),
            [
                'full_name'    => 'required|max:50',
                'phone'        => 'required|max:20',
                'email'        => 'required|email'
            ]
        );
        if ($validator->fails()) {
            $result['message'] = $validator->errors()->first();
            return $result;
        }
        $contact        = new Contact();
        if ($id){
            $contact    = $this->findContactById($id);
        }
        $phoneService   = $this->standardPhone($request->phone);
        if (!$phoneService){
            $result['message'] = 'phone number is not valid';
            return $result;
        }
        $contact->full_name = $request->full_name;
        $contact->email     = $request->email;
        $contact->phone     = $request->phone;
        $contact->save();
        $result['status']   = true;
        $result['message']  = $contact;
        return $result;
    }

    public function storeFormCatering($request, $id = null){
        $result     = ['status' => false, 'message' => ''];
        $validator  = Validator::make($request->all(),
            [
                'full_name'    => 'required|max:50',
                'phone'        => 'required|max:20',
                'email'        => 'required|email',
                'message'      => 'required',
            ]
        );
        if ($validator->fails()) {
            $result['message'] = $validator->errors()->first();
            return $result;
        }
        $catering       = new Catering();
        if ($id){
            $catering   = $this->findCateringById($id);
        }
        $phoneService   = $this->standardPhone($request->phone);
        if (!$phoneService){
            $result['message'] = 'phone number is not valid';
            return $result;
        }
        $catering->full_name    = $request->full_name;
        $catering->email        = $request->email;
        $catering->phone        = $request->phone;
        $catering->message      = $request->message;
        $catering->save();
        $result['status']       = true;
        $result['message']      = $catering;
        return $result;
    }

    public function deleteFormContact($id){
        $result = ['status' => false, 'message' => ''];
        if (!$id){
            $result['message'] = 'required params is missing!';
        }
        try {
            $contact    = $this->findContactById($id);
            $deleted    = $contact->delete();
            if ($deleted){
                $contact->deleted_by = Auth::user()->id;
                $contact->save();
                $result['status']   = true;
                $result['message']  = 'deleted!';
                return $result;
            };
        }catch (\Exception $e){
            $result['message'] = $e->getMessage();
            return $result;
        }
    }

    public function deleteFormCatering($id){
        $result = ['status' => false, 'message' => ''];
        if (!$id){
            $result['message'] = 'required params is missing!';
        }
        try {
            $catering   = $this->findCateringById($id);
            $deleted    = $catering->delete();
            if ($deleted){
                $catering->deleted_by = Auth::user()->id;
                $catering->save();
                $result['status']   = true;
                $result['message']  = 'deleted!';
                return $result;
            };
        }catch (\Exception $e){
            $result['message'] = $e->getMessage();
            return $result;
        }
    }
}
