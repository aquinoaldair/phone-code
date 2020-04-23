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
    public function phone_codes_is_a_collection_from_object()
    {
        $phonecode = new PhoneCode();
        $this->assertIsIterable(
            $phonecode->getAll()
        );
    }

    /** @test */
    public function name_country_is_same_code()
    {
        $this->assertSame(
            "Peru",
            PhoneCode::isCodeOf(51)
        );
    }

    /** @test */
    public function code_is_same_code_of_country()
    {
        $this->assertSame(
            "51",
            PhoneCode::codeOf("Peru")
        );
    }


    /** @test */
    public function code_is_not_same_code_of_country()
    {
        $this->assertNotSame(
            "51",
            PhoneCode::codeOf("Mexico")
        );
    }


    /** @test */
    public function phone_codes_is_a_collection_from_static()
    {
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
