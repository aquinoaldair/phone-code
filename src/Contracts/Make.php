<?php


namespace Aquinoaldair\PhoneCode\Contracts;


class Make extends MakeBase
{
    private $prefix = "";

    public function __construct(String $number)
    {
        parent::__construct($number, $this->prefix);
    }
}