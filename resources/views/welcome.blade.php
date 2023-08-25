@extends('layouts.layout')

@vite(['resources/sass/app.scss',
        'resources/sass/main.scss',
        'resources/js/app.js'])
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">   
            The North's Best Pizzas
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="/pizzas/create"> Order a Pizza</a>
    </div>
</div>
@endsection
