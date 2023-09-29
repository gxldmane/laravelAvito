@extends('site.layouts.site')

@section('title', $product->title)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Заголовок объявления -->
                <h1>{{$product->title}}</h1>
                <h5>Категория: {{$product->category->title }}</h5>
                <!-- Фото и описание объявления -->
                <div class="ad-details">
                    <div class="ad-image">
                        <img src="{{$product->image}}" alt="{{$product->image}}">
                    </div>
                    <h3>Цена: {{ $product->price }} Р</h3>
                    <div class="ad-description">
                        <h3>Описание:</h3>
                        <p>{{$product->description}}</p>
                        <h5>Создано: {{ $product->created_at->format('d.m.Y H:i') }}</h5>

                        <!-- Кнопка "Купить" -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Фото продавца -->
                <a href="{{ route('seller.show', $seller) }}" style="text-decoration: none; color: inherit;">
                    <div class="seller-image product-img mb-2">
                        <img src="{{$seller->avatar}}" alt="Фото продавца" class="rounded-circle">
                    </div>
                </a>
                <!-- Имя и информация о продавце -->
                <div class="seller-info">
                    <h3>{{$seller->name}}</h3>
                    <p>Город: {{$seller->city->title}}</p>
                    <p>Email: {{$seller->email}}</p>
                </div>
                <button class="btn btn-primary">Написать</button>
            </div>
        </div>
    </div>
@endsection

