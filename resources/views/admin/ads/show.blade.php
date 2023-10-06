@extends('admin.layouts.admin')

@section('content_header')
    <h1>Инофрмация о объявлении</h1>
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
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$ad->id}}</th>
            <td>{{$ad->title}}</td>
            <td>{{$ad->description}}</td>
            <td>{{$ad->price}}</td>
            <td>{{asset($ad->image)}}</td>
        <tr>
    </table>
    <div>

        <a class="btn btn-default" href="{{route('ads.edit', $ad->id)}}">Редактировать</a>
        <form action="{{route('ads.delete', $ad->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="Удалить">
        </form>


        <a class="btn btn-default" href="{{route('ads.index')}}">Назад</a>
    </div>
@endsection
