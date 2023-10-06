@extends('site.layouts.site')

@section('title', 'Главная страница')

@section('content')
    <h1>Объявления</h1>
    <div class="row">
        <!-- Фильтры и список объявлений -->
        <div class="col-md-3">
            @include('site.partials.filters')
        </div>
        <div class="col-md-9">
            <div class="row">
                @foreach($ads as $ad)
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('product.show', $ad->id) }}" style="text-decoration: none; color: inherit;">
                            <div class="card">
                                <img
                                    @if($ad->image == null)
                                        src="{{asset('storage/images/placeholder.png')}}" alt="{{$ad->image}}">
                                @elseif($ad->image != null)
                                    src="{{asset('storage/'. $ad->image)}}" alt="{{$ad->image}}">
                                @endif
                                <div class="card-body">
                                    <h4 class="card-title">{{ $ad->title }}</h4>
                                    <h5 class="card-text">Цена: {{ $ad->price }} Р</h5>
                                    @if($ad->created_at != null)
                                        <p class="card-text">{{ $ad->created_at->format('d.m.Y H:i') }}</p>
                                    @endif

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{$ads->links()}}
        </div>
    </div>
@endsection
