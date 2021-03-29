<?php

namespace App\Http\Controllers;

use Converter;
use App\Http\Requests\ConverterRequest;

class ConverterController extends Controller
{
    /**
     * Точка входа в приложение
     *
     * @return View представление
     */
    public function index()
    {
        return view('index');
    }
    /**
     * Обработка данных
     *
     * @param Request $request экземпляр текущего HTTP-запроса
     *
     * @return View представление
     */
    public function converter(ConverterRequest $request)
    {
        $number = $request->number;
        $result = Converter::convert9to10($number);
        return view('index', [
            'number' => $number,
            'result' => $result,
        ]);
    }
}
