@extends('admin.layouts.admin')

@section('content_header')
    <h1>Инофрмация о городе</h1>
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
                <th scope="row">{{$city->id}}</th>
                <td>{{$city->title}}</td>
            <tr>
    </table>
    <div>

        <a class="btn btn-default" href="{{route('cities.edit', $city->id)}}">Редактировать</a>
        <form action="{{route('cities.delete', $city->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="Удалить">
        </form>


        <a class="btn btn-default" href="{{route('cities.index')}}">Назад</a>
    </div>
@endsection
