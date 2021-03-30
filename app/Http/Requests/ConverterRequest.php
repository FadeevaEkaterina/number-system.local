<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConverterRequest extends FormRequest
{
    /**
     * Определить авторизован ли пользователь делать такой запрос.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Получить правила валидации, применимые к запросу.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'number' => 'required|nine_digit_number_system',
        ];
    }

    /**
     * Получить сообщение для определенных правил проверки.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'number.required' => 'Необходимо ввести девятиричное число',
            'number.nine_digit_number_system' => 'Девятиричное число должно содержать только цифры 0, 1, 2, 3, 4, 5, 6, 7, 8',
        ];
    }
}
