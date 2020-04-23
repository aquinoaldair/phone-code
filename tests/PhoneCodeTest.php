<?php

namespace Aquinoaldair\PhoneCode\Tests;

use Aquinoaldair\PhoneCode\PhoneCode;
use Orchestra\Testbench\TestCase;
use Aquinoaldair\PhoneCode\PhoneCodeServiceProvider;

class PhoneCodeTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PhoneCodeServiceProvider::class];
    }


    /** @test */
    public function phone_codes_is_a_collection()
    {
        $phonecode =  new PhoneCode();

        $items = $phonecode->getAll();

        dd($items->firstWhere('name', 'Mexico'));

        $this->assertIsIterable(
            PhoneCode::get()
        );
    }

    /** @test */
    public function phone_codes_contains_a_specific_item(){
        $this->assertTrue(
            PhoneCode::get()->contains('nombre', "México")
        );
    }

    /** @test */
    public function mexico_phone_code_is_same_from_name(){
        $phone = "522281694542";
        
        $phonecode = new PhoneCode();

        $this->assertSame(
            $phone,
            $phonecode->make("2281694542")->fromName('Mexico')
        );
    }

    /** @test */
    public function full_mexico_phone_code_is_same_from_name(){
        $phone = "+522281694542";

        $phonecode = new PhoneCode();


        $this->assertSame(
            $phone,
            $phonecode->makeFull("2281694542")->fromName('Mexico')
        );
    }


    /** @test */
    public function mexico_phone_code_is_same_from_iso2(){
        $phone = "522281694542";

        $phonecode = new PhoneCode();

        $this->assertSame(
            $phone,
            $phonecode->make("2281694542")->fromIso2('mx')
        );
    }

    /** @test */
    public function full_mexico_phone_code_is_same_from_iso2(){
        $phone = "+522281694542";

        $phonecode = new PhoneCode();

        $this->assertSame(
            $phone,
            $phonecode->makeFull("2281694542")->fromIso2('mx')
        );
    }


    /** @test */
    public function mexico_phone_code_is_same_from_iso3(){
        $phone = "522281694542";

        $phonecode = new PhoneCode();

        $this->assertSame(
            $phone,
            $phonecode->make("2281694542")->fromIso3('mex')
        );
    }

    /** @test */
    public function full_mexico_phone_code_is_same_from_iso3(){
        $phone = "+522281694542";

        $phonecode = new PhoneCode();

        $this->assertSame(
            $phone,
            $phonecode->makeFull("2281694542")->fromIso3('MEX')
        );
    }

}
