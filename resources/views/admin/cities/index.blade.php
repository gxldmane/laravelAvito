@extends('admin.layouts.admin')

@section('content_header')
    <h1>Города</h1>
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
    @foreach($cities as $city)
            <tbody>
            <tr>
                <th scope="row">{{$city->id}}</th>
                <td>{{$city->title}}</td>
                <td><a href="{{route('cities.show', $city->id)}}">Ссылка</a></td>
            <tr>
    @endforeach
    </table>
    {{$cities->links()}}
    <div>
        <a class="btn btn-default" href="{{route('cities.create')}}">Добавить город</a>
    </div>
@endsection
