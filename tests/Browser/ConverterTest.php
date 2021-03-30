<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ConverterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testOpenApplication()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertTitle('Системы счисления')
                ->assertSee('Системы счисления')
                ->assertEnabled('number')
                ->assertSee('Преобразовать')
                ->assertSee('О программе')
                ->visit('/about')
                ->assertSee('Перейти к конвертеру');
        });
    }
    public function testRequired()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('number', '')
                ->press('operation')
                ->assertSee('Ошибка! Необходимо ввести девятиричное число');
        });
    }
    public function testNineDigitNumber()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('number', '123456789')
                ->press('operation')
                ->assertSee('Ошибка! Девятиричное число должно содержать только цифры 0, 1, 2, 3, 4, 5, 6, 7, 8');
        });
    }
}
