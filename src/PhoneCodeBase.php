<?php


namespace Aquinoaldair\PhoneCode;


use Aquinoaldair\PhoneCode\Traits\FindByTrait;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;

class PhoneCodeBase
{
    use FindByTrait;
    /**
     * @var Collection
     * use for return result
     */
    private  $result;

    /**
     * @var array
     * use for get data from config file
     */
    private  $data;

    /**
     * PhoneCodeBase constructor.
     */
    function __construct()
    {
        $this->result = new Collection();
        $this->data = Config::get('phone-code.data');
    }

    /**
     * @return PhoneCodeBase
     */
    private function transformArrayToCollection(){
        array_map(array($this, 'addArrayItemToCollection'), $this->data);
        return $this;
    }

    /**
     * @param $item
     * @return void
     */
    private function addArrayItemToCollection($item){
        $this->result->push((object) $item);
    }

    /**
     * @return Collection
     */
    public function get(){
        return $this->transformArrayToCollection()->result;
    }

    /**
     * @param String $country
     * @return String
     */
    public function codeOf(String $country){
        $item = $this->findByName($this->get(), $country);
        return ($item) ? $item->phone_code : null;
    }

    /**
     * @param $code
     * @return String
     */
    public function isCodeOf($code){
        $item =  $this->findByCode($this->get(), $code);
        return ($item) ? $item->first()->name : null;
    }
}