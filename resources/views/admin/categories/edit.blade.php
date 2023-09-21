@extends('admin.layouts.admin')

@section('content_header')
    <h1>Обновление категории</h1>
@endsection



@section('content')
    <form action="{{route('categories.update', $category->id)}}" method="post">
        @csrf
        @method('patch')
        <label for="category" class="form-label">Название категории</label>
        <input type="text" id="inputcategory" class="form-control" aria-describedby="categoryHelpBlock" name="title" value="{{$category->title}}">
        @error('title')
            <p class="text-danger">{{$message}}</p>
        @enderror
        <div id="categoryHelpBlock" class="form-text">
            Категория не должна быть числом или предложением, только одно слово
        </div>
        <button class="btn btn-success">Обновить</button>
    </form>

    <a class="btn btn-default" href="{{route('categories.show', $category->id)}}">Назад</a>
@endsection
