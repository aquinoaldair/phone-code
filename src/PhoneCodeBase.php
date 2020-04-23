<?php


namespace Aquinoaldair\PhoneCode;


use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;

class PhoneCodeBase
{
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

    public function get(){
        return $this->transformArrayToCollection()->result;
    }
}