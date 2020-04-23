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
        return  $this->getFromBase();
    }

    public function make(String $number){
        return new Make($number);
    }

    public function makeFull(String $number){
        return new MakeFull($number);
    }

    private function getFromBase(){
        return (new PhoneCodeBase())->get();
    }


}
