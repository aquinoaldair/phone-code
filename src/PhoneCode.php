<?php

namespace Aquinoaldair\PhoneCode;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;

class PhoneCode
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
     * PhoneCode constructor.
     */
    function __construct()
    {
        $this->result = new Collection();
        $this->data = Config::get('phone-code.data');
    }

    /**
     * @return Collection
     */
    public static function get()
    {
        return (new PhoneCode())->transformArrayToCollection()->result;
    }

    /**
     * @return Collection
     */
    public function getAll(){
        return $this->transformArrayToCollection()->result;
    }

    /**
     * @return PhoneCode
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
}
