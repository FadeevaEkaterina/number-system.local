@extends('layouts.app')

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $errors)
            @component('components.error', [
                'title' => 'Ошибка',
                'message' => $errors,
            ])

            @endcomponent
        @endforeach
    @endif
    @isset($result)
        @component('components.result', [
            'title' => 'Результат',
            'message' => $result,
        ])

         @endcomponent
    @endisset

    @include('main')

@endsection
