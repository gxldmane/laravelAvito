@extends('admin.layouts.admin')

@section('content_header')
    <h1>Обновление пользователя</h1>
@endsection



@section('content')
    <form action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <label for="name" class="form-label">Имя пользователя</label>
        <input type="text" id="name" class="form-control" aria-describedby="titleHelpBlock" name="name"
               value="{{$user->name}}">
        @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <label for="description" class="form-label">Email пользователя</label>
        <input type="text" id="email" class="form-control" aria-describedby="descriptionHelpBlock"
               name="email" value="{{$user->email}}">
        @error('title')
        <p> class="text-danger">{{$message}}</p>
        @enderror
        <label>Текущее изображение пользователя</label>
        <div class="">
            <img class="img-fluid" width="300" height="300" src="{{asset('storage/'. $user->avatar)}}" alt="">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Аватар пользователя</label>
            <input class="form-control" type="file" id="formFile" name="avatar" value="{{asset('storage/'. $user->avatar)}}">
        </div>
        @error('title')
        <p> class="text-danger">{{$message}}</p>
        @enderror
        <label for="city_id" class="form-label">Город пользователя</label>
        <select class="form-control" id="city" name="city_id">
            @foreach($cities as $city)
                <option
                    {{$city->id === $user->city->id ? ' selected': ''}}
                    value="{{$city->id}}">{{$city->title}}</option>
            @endforeach
        </select>
        <label for="description" class="form-label">Пароль пользователя</label>
        <input type="text" id="password" class="form-control" aria-describedby="descriptionHelpBlock"
               name="password" value="{{$user->password}}">
        @error('title')
        <p> class="text-danger">{{$message}}</p>
        @enderror
        <button class="btn btn-success">Обновить</button>
    </form>

    <a class="btn btn-default" href="{{route('users.show', $user->id)}}">Назад</a>
@endsection
