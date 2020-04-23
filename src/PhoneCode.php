<?php

namespace Aquinoaldair\PhoneCode;
use Aquinoaldair\PhoneCode\Contracts\Make;
use Aquinoaldair\PhoneCode\Contracts\MakeFull;

class PhoneCode
{

    public static function get(){
        return  (new PhoneCodeBase())->get();
    }

    public function getAll(){
        return  (new PhoneCodeBase())->get();
    }

    public static function codeOf(String $country){
        return  (new PhoneCodeBase())->codeOf($country);
    }

    public static function isCodeOf($code){
        return  (new PhoneCodeBase())->isCodeOf($code);
    }

    public function make(String $number){
        return new Make($number);
    }

    public function makeFull(String $number){
        return new MakeFull($number);
    }



}
