@extends('admin.layouts.admin')

@section('content_header')
    <h1>Обновление объявления</h1>
@endsection



@section('content')
    <form action="{{route('ads.update', $ad->id)}}" method="post">
        @csrf
        @method('patch')
        <label for="title" class="form-label">Название объявления</label>
        <input type="text" id="inputtitle" class="form-control" aria-describedby="titleHelpBlock" name="title"
               value="{{$ad->title}}">
        @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <label for="description" class="form-label">Описание объявления</label>
        <input type="text" id="inputdecription" class="form-control" aria-describedby="descriptionHelpBlock"
               name="description" value="{{$ad->description}}"
        @error('title')
        <p class=" text-danger">{{$message}}</p>
        @enderror
        <label for="price" class="form-label">Цена объявления</label>
        <input type="text" id="inputprice" class="form-control" aria-describedby="priceHelpBlock" name="price"
               value="{{$ad->price}}"
        @error('title')
        <p class=" text-danger">{{$message}}</p>
        @enderror
        <label for="image" class="form-label">Фото объявления</label>
        <input type="text" id="inputimage" class="form-control" aria-describedby="imageHelpBlock" name="image"
               value="{{$ad->image}}"
        @error('title')
        <p class=" text-danger">{{$message}}</p>
        @enderror
        <label for="category_id" class="form-label">Категория объявления</label>
        <select class="form-control" id="category" name="category_id">
            @foreach($categories as $category)
                <option
                    {{$ad->id === $ad->category->id ? ' selected': ''}}
                    value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
        <label for="city_id" class="form-label">Город объявления</label>
        <select class="form-control" id="city" name="city_id">
            @foreach($cities as $city)
                <option
                    {{$ad->id === $ad->city->id ? ' selected': ''}}
                    value="{{$city->id}}">{{$city->title}}</option>
            @endforeach
        </select>
        <label for="user_id" class="form-label">Владелец объявления</label>
        <select class="form-control" id="user" name="user_id">
            @foreach($users as $user)
                <option
                    {{$ad->id === $ad->user->id ? ' selected': ''}}
                    value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        <button class="btn btn-success">Обновить</button>
    </form>


    <a class="btn btn-default" href="{{route('ads.show', $ad->id)}}">Назад</a>
@endsection
