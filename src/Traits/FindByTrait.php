<?php


namespace Aquinoaldair\PhoneCode\Traits;


use Illuminate\Support\Collection;

trait FindByTrait
{

    private function findByName(Collection $collection, String $name){
        return $collection->firstWhere('name', ucfirst($name));
    }

    private function findByIso2(Collection $collection, String $iso2){
        return $collection->firstWhere('iso2', strtoupper($iso2));
    }

    private function findByIso3(Collection $collection, String $iso3){
        return $collection->firstWhere('iso3', strtoupper($iso3));
    }
}