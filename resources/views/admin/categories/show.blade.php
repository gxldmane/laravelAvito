@extends('admin.layouts.admin')

@section('content_header')
    <h1>Информация о категории</h1>
@endsection



@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Название</th>
        </tr>
        </thead>
            <tbody>
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->title}}</td>
            <tr>
    </table>
    <div>

        <a class="btn btn-default" href="{{route('categories.edit', $category->id)}}">Редактировать</a>
        <form action="{{route('categories.delete', $category->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="Удалить">
        </form>


        <a class="btn btn-default" href="{{route('categories.index')}}">Назад</a>
    </div>
@endsection
