<?php


namespace Aquinoaldair\PhoneCode\Contracts;


use Aquinoaldair\PhoneCode\Interfaces\PhoneCodeInterface;
use Aquinoaldair\PhoneCode\PhoneCodeBase;
use Aquinoaldair\PhoneCode\Traits\FindByTrait;

class MakeBase implements PhoneCodeInterface
{
    use FindByTrait;

    private $number;
    private $prefix;
    private $collection;

    public function __construct(String $number, String $prefix)
    {
        $this->number = $number;
        $this->prefix = $prefix;
        $this->collection =  new PhoneCodeBase();
    }

    public function fromName(String $name)
    {
        $result =  $this->findByName($this->collection->get(), $name);
        return $this->returnFormat($result);
    }

    public function fromIso2(String $iso2)
    {
        $result =  $this->findByIso2($this->collection->get(), $iso2);
        return $this->returnFormat($result);
    }

    public function fromIso3(String $iso3)
    {
        $result =  $this->findByIso3($this->collection->get(), $iso3);
        return $this->returnFormat($result);
    }

    private function returnFormat($result){
        return ($result)
            ? sprintf("%s%s%s", $this->prefix, $result->phone_code, $this->number)
            : $result;
    }
}