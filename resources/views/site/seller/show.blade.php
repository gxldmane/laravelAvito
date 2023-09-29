@extends('site.layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- Фото пользователя -->
                <img src="{{$seller->avatar}}" alt="{{ $seller->name }}" class="rounded-circle">
                <!-- Имя пользователя -->
                <h2>{{ $seller->name }}</h2>
                <!-- Адрес электронной почты -->
                <p>Email: {{ $seller->email }}</p>
                <!-- Город -->
                <p>Город: {{ $seller->city->title }}</p>
            </div>
            <div class="col-md-8">
                <!-- Список объявлений пользователя -->
                <h3>Объявления пользователя</h3>
                <div class="row">
                    @foreach($ads as $ad)
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ $ad->image }}" alt="{{ $ad->title }}" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $ad->title }}</h4>
                                    <h5 class="card-text">Цена: {{ $ad->price }} Р</h5>
                                    <p class="card-text">{{ $ad->created_at->format('d.m.Y H:i') }}</p>
                                    <a href="{{ route('product.show', $ad->id) }}" class="btn btn-primary">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Модальное окно для отправки сообщения продавцу -->
    <div class="modal fade" id="sendMessageModal" tabindex="-1" role="dialog" aria-labelledby="sendMessageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sendMessageModalLabel">Написать продавцу</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Форма для отправки сообщения продавцу -->
                    <form action="{{ route('seller.sendMessage', $ad->user->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="message">Сообщение:</label>
                            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
