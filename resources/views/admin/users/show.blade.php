@extends('admin.layouts.admin')

@section('content_header')
    <h1>Инофрмация о пользователе</h1>
@endsection



@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Имя</th>
            <th scope="col">Email</th>
            <th scope="col">Город</th>
            <th scope="col">Аватар</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$user->name}}</th>
            <td>{{$user->email}}</td>
            <td>{{$user->city->title}}</td>
            <td>{{$user->avatar}}</td>
        <tr>
    </table>
    <div>

        <a class="btn btn-default" href="{{route('users.edit', $user->id)}}">Редактировать</a>
        <form action="{{route('users.delete', $user->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="Удалить">
        </form>


        <a class="btn btn-default" href="{{route('users.index')}}">Назад</a>
    </div>
@endsection
