@extends('layouts.main')
@section('title')
    | Bambini
@endsection

@section('content')

<?php

$productsChildren = array_filter($products, function($product){
    return $product['gender'] === 'children';
});

?>

@forelse ($productsChildren as $productChildren )

<div class="card-container">
    <a href="#">

        <div class="img-card">
            <a href="{{route('productDetail', ['slug'=>$productChildren['slug']])}}">
                <img src="{{$productChildren['img']}}" alt="{{$productChildren['name']}}" class="img-main">
                <img src="{{$productChildren['imgHover']}}" alt="" class="img-hover">
            </a>

            @if ($productChildren['discount'] === true)
                <span class="discount">{{$productChildren['discountPerc']}}</span>
            @endif

            @if ($productChildren['ecological'] === true )
                <span class="ecological">Sostenibilità</span>
            @endif

            <span class="heart"> &hearts;</span>
        </div>
    </a>
</div>

@empty

<div class="pd-container empty">
    <div>
        <img src="img/nada.png" alt="">
    </div>
    <div>
        <h1>Nessun prodotto disponibile al momento</h1>
    </div>
    <div>
        <img src="img/nada.png" alt="">
    </div>
</div>

@endforelse



@endsection
