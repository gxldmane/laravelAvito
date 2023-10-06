@extends('admin.layouts.admin')

@section('content_header')
    <h1>Добавление объявления</h1>
@endsection



@section('content')
    <form action="{{route('ads.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title" class="form-label">Название объявления</label>
        <input type="text" id="inputtitle" class="form-control" aria-describedby="titleHelpBlock" name="title"
               value="{{old('title')}}">
        @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <label for="description" class="form-label">Описание объявления</label>
        <input type="text" id="inputdecription" class="form-control" aria-describedby="descriptionHelpBlock"
               name="description" value="{{old('description')}}">
        @error('title')
        <p> class="text-danger">{{$message}}</p>
        @enderror
        <label for="price" class="form-label">Цена объявления</label>
        <input type="text" id="inputprice" class="form-control" aria-describedby="priceHelpBlock" name="price"
               value="{{old('price')}}">
        @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="mb-3">
            <label for="formFile" class="form-label">Изображения объявления</label>
            <input class="form-control" type="file" id="formFile" name="image" value="{{old('image')}}">
        </div>
        @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <label for="category_id" class="form-label">Категория объявления</label>
        <select class="form-control" id="category" name="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
        <label for="city_id" class="form-label">Город объявления</label>
        <select class="form-control" id="city" name="city_id">
            @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->title}}</option>
            @endforeach
        </select>
        <label for="user_id" class="form-label">Владелец объявления</label>
        <select class="form-control" id="user" name="user_id">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        <button class="btn btn-success">Создать</button>
    </form>

    <a class="btn btn-default" href="{{route('ads.index')}}">Назад</a>
@endsection
