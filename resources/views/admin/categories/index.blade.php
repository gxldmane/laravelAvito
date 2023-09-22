@extends('admin.layouts.admin')

@section('content_header')
    <h1>Категории</h1>
@endsection



@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Название</th>
            <th scope="col">Cсылка</th>
        </tr>
        </thead>
    @foreach($categories as $category)
            <tbody>
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->title}}</td>
                <td><a href="{{route('categories.show', $category->id)}}">Ссылка</a></td>
            <tr>
    @endforeach
    </table>
    {{$categories->links()}}
    <div>
        <a class="btn btn-default" href="{{route('categories.create')}}">Добавить категорию</a>
    </div>
@endsection
