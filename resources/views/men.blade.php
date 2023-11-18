@extends('layouts.main')
@section('title')
    | Uomo
@endsection

@section('content')

<?php

$productsMale = array_filter($products, function($product){
    return $product['gender'] === 'male';
});

?>

@foreach ($productsMale as $productMale)


<div class="card-container">
    <a href="#">

        <div class="img-card">
            <a href="{{route('productDetail', ['slug'=>$productMale['slug']])}}">
                <img src="{{$productMale['img']}}" alt="{{$productMale['name']}}" class="img-main">
                <img src="{{$productMale['imgHover']}}" alt="" class="img-hover">
            </a>

            @if ($productMale['discount'] === true)
                <span class="discount">{{$productMale['discountPerc']}}</span>
            @endif

            @if ($productMale['ecological'] === true )
                <span class="ecological">Sostenibilità</span>
            @endif

            <span class="heart"> &hearts;</span>
        </div>
    </a>
</div>

@endforeach
@endsection
