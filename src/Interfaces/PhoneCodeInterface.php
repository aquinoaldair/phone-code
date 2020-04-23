<?php


namespace Aquinoaldair\PhoneCode\Interfaces;


use phpDocumentor\Reflection\Types\This;

interface PhoneCodeInterface
{
    public function fromName(String $name);

    public function fromIso2(String $iso2);

    public function fromIso3(String $iso3);
}