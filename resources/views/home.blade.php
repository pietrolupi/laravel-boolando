@extends('layouts.main')

@section('title')
    | Homepage
@endsection

@section('content')


        @foreach ($products as $product)
            <div class="card-container">
                <a href="#">

                    <div class="img-card">
                        <a href="{{route('productDetail', ['slug'=>$product['slug']])}}">
                            <img src="{{$product['img']}}" alt="{{$product['name']}}" class="img-main">
                            <img src="{{$product['imgHover']}}" alt="" class="img-hover">
                        </a>

                        @if ($product['discount'] === true)
                            <span class="discount">{{$product['discountPerc']}}</span>
                        @endif

                        @if ($product['ecological'] === true )
                            <span class="ecological">Sostenibilità</span>
                        @endif

                        <span class="heart"> &hearts;</span>
                    </div>
                </a>
            </div>
        @endforeach


@endsection
