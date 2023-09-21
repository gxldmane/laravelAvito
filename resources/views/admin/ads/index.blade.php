@extends('admin.layouts.admin')

@section('content_header')
    <h1>Объявления</h1>
@endsection



@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Название</th>
            <th scope="col">Описание</th>
            <th scope="col">Цена</th>
            <th scope="col">Фото</th>
            <th scope="col">Cсылка</th>
        </tr>
        </thead>
        @foreach($ads as $ad)
            <tbody>
            <tr>
                <th scope="row">{{$ad->id}}</th>
                <td>{{$ad->title}}</td>
                <td>{{$ad->description}}</td>
                <td>{{$ad->price}}</td>
                <td>{{$ad->image}}</td>
                <td><a href="{{route('ads.show', $ad->id)}}">Ссылка</a></td>
            <tr>
        @endforeach
    </table>
    {{$ads->links()}}
    <div>
        <a class="btn btn-default" href="{{route('ads.create')}}">Добавить объявление</a>
    </div>
@endsection
