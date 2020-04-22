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

}
