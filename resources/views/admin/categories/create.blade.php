@extends('admin.layouts.admin')

@section('content_header')
    <h1>Добавление категории</h1>
@endsection



@section('content')
    <form action="{{route('categories.store')}}" method="post">
        @csrf
        <label for="category" class="form-label">Название категории</label>
        <input type="text" id="inputcategory" class="form-control" aria-describedby="categoryHelpBlock" name="title">
        @error('title')
            <p class="text-danger">{{$message}}</p>
        @enderror
        <div id="categoryHelpBlock" class="form-text">
            Категория не должна быть числом или предложением, только одно слово
        </div>
        <button class="btn btn-success">Создать</button>
    </form>

    <a class="btn btn-default" href="{{route('categories.index')}}">Назад</a>
@endsection
