<?php
/**
 * Калькулятор
 *
 * PHP version 7
 *
 * @category Laravel
 * @package  App
 * @author   Student <student@example.com>
 * @license  htto://unlicense.org/ Unlicense
 * @link     http://php.net
 */


namespace App\Services;

/**
 * Класс Проебразование
 */
class Converter
{
    /**
     * Преобразование числа из девятиричной системы в десятеричную
     *
     * @param integer $num число
     *
     * @return integer преобразование
     */
    public function convert9to10($num)
    {
        $result = 0;
        $index = 0;
        $len = strlen($num)-1;
        do {
            $result = $result + (int)$num[$index]*(9**($len- $index));
            $index = $index + 1;
        } while ($index <= $len);
        return $result;
    }
}
