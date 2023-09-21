@extends('admin.layouts.admin')

@section('content_header')
    <h1>Обновление города</h1>
@endsection



@section('content')
    <form action="{{route('cities.update', $city->id)}}" method="post">
        @csrf
        @method('patch')
        <label for="city" class="form-label">Название города</label>
        <input type="text" id="inputcity" class="form-control" aria-describedby="cityHelpBlock" name="title" value="{{$city->title}}">
        @error('title')
            <p class="text-danger">{{$message}}</p>
        @enderror
        <div id="categoryHelpBlock" class="form-text">
            Название города не должно быть числом или предложением, только одно слово
        </div>
        <button class="btn btn-success">Обновить</button>
    </form>

    <a class="btn btn-default" href="{{route('cities.show', $city->id)}}">Назад</a>
@endsection
