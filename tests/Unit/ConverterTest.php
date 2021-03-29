<?php

namespace Tests\Unit;

use Converter;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class for converter test.
 */
class ConverterTest extends TestCase
{
    public function testConvert9to10()
    {
        $this->assertEquals(922, Converter::convert9to10('1234'));
    }
}
