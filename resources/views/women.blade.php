@extends('layouts.main')
@section('title')
    | Donna
@endsection

@section('content')

<?php

$productsFemale = array_filter($products, function($product){
    return $product['gender'] === 'female';
});

?>

@foreach ($productsFemale as $productFemale)


<div class="card-container">
    <a href="#">

        <div class="img-card">
            <a href="{{route('productDetail', ['slug'=>$productFemale['slug']])}}">
                <img src="{{$productFemale['img']}}" alt="{{$productFemale['name']}}" class="img-main">
                <img src="{{$productFemale['imgHover']}}" alt="" class="img-hover">
            </a>

            @if ($productFemale['discount'] === true)
                <span class="discount">{{$productFemale['discountPerc']}}</span>
            @endif

            @if ($productFemale['ecological'] === true )
                <span class="ecological">Sostenibilità</span>
            @endif

            <span class="heart"> &hearts;</span>
        </div>
    </a>
</div>

@endforeach

@endsection
