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
                        <img class="" width="400" height="300"
                            @if($product->image == null)
                                src="{{asset('storage/images/placeholder.png')}}" alt="{{$product->image}}">
                        @elseif($product->image != null)
                            src="{{asset('storage/'. $product->image)}}" alt="{{$product->image}}">
                        @endif
                    </div>
                    <h3>Цена: {{ $product->price }} Р</h3>
                    <div class="ad-description">
                        <h3>Описание:</h3>
                        <p>{{$product->description}}</p>
                        @if($product->created_at != null)
                            <h5>Создано: {{ $product->created_at->format('d.m.Y H:i') }}</h5>
                        @endif


                        <!-- Кнопка "Купить" -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <!-- Фото продавца -->
                <a href="{{ route('seller.show', $seller) }}" style="text-decoration: none; color: inherit;">
                    <div class="seller-image product-img ml-5 h-50">
                        <img width="200" height="200"
                            @if($seller->avatar == null)
                                src="{{ asset('storage/avatars/placeholder.pnh') }}" alt="{{ $seller->avatar }}" class="img-fluid profile-photo">
                        @elseif($seller->avatar != null)
                            src="{{ asset('storage/'. $seller->avatar) }}" alt="{{ $seller->avatar }}" class=" img-fluid rounded-circle profile-photo">
                        @endif
                    </div>
                </a>
                <!-- Имя и информация о продавце -->
                <div class="seller-info ml-5">
                    <h3>{{$seller->name}}</h3>
                    <p>Город: {{$seller->city->title}}</p>
                    <p>Email: {{$seller->email}}</p>
                </div>
                <button class="btn btn-primary ml-5 ">Написать</button>
            </div>
        </div>
    </div>
@endsection

