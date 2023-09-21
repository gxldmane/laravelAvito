@extends('admin.layouts.admin')

@section('content_header')
    <h1>Добавление пользователя</h1>
@endsection



@section('content')
    <form action="{{route('users.store')}}" method="post">
        @csrf
        <label for="name" class="form-label">Имя пользователя</label>
        <input type="text" id="name" class="form-control" aria-describedby="titleHelpBlock" name="name"
               value="{{old('name')}}">
        @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <label for="description" class="form-label">Email пользователя</label>
        <input type="text" id="email" class="form-control" aria-describedby="descriptionHelpBlock"
               name="email" value="{{old('email')}}">
        @error('title')
        <p> class="text-danger">{{$message}}</p>
        @enderror
        <label for="city_id" class="form-label">Город пользователя</label>
        <select class="form-control" id="city" name="city_id">
            @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->title}}</option>
            @endforeach
        </select>
        <label for="description" class="form-label">Пароль пользователя</label>
        <input type="text" id="password" class="form-control" aria-describedby="descriptionHelpBlock"
               name="password" value="{{old('password')}}">
        @error('title')
        <p> class="text-danger">{{$message}}</p>
        @enderror
        <button class="btn btn-success">Создать</button>
    </form>

    <a class="btn btn-default" href="{{route('cities.index')}}">Назад</a>
@endsection
