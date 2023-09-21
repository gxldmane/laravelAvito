@extends('admin.layouts.admin')

@section('content_header')
    <h1>Добавление города</h1>
@endsection



@section('content')
    <form action="{{route('cities.store')}}" method="post">
        @csrf
        <label for="city" class="form-label">Название категории</label>
        <input type="text" id="inputcategory" class="form-control" aria-describedby="citiesHelpBlock" name="title">
        @error('title')
            <p class="text-danger">{{$message}}</p>
        @enderror
        <div id="categoryHelpBlock" class="form-text">
            Название города не должно быть числом или предложением, только одно слово
        </div>
        <button class="btn btn-success">Создать</button>
    </form>

    <a class="btn btn-default" href="{{route('cities.index')}}">Назад</a>
@endsection
