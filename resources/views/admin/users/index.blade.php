@extends('admin.layouts.admin')

@section('content_header')
    <h1>Пользователи</h1>
@endsection



@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Имя</th>
            <th scope="col">Email</th>
            <th scope="col">Город</th>
            <th scope="col">Аватар</th>
            <th scope="col">Количество объявлении</th>
            <th scope="col">Ссылка</th>
        </tr>
        </thead>
    @foreach($users as $user)
            <tbody>
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->city->title}}</td>
                <td>{{$user->avatar}}</td>
                <td>{{$user->ads->count()}}</td>
                <td><a href="{{route('users.show', $user->id)}}">Ссылка</a></td>
            <tr>
    @endforeach
    </table>
    {{$users->links()}}
    <div>
        <a class="btn btn-default" href="{{route('users.create')}}">Добавить пользователя</a>
    </div>
@endsection
