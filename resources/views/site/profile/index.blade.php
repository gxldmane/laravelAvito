@extends('layouts.app')

@section('content')
    <div class="profile">
        <div class="profile-header">
            <img src="{{ $user->avatar }}" alt="{{ $user->avatar }}" class="profile-photo">
            <h1>{{ $user->name }}</h1>
        </div>

        <div class="profile-actions">
            <a href="{{ route('ads.create') }}" class="btn btn-primary">Создать объявление</a>
            <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-secondary">Редактировать профиль</a>
            <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

        <div class="profile-ads">
            <h2>Ваши объявления</h2>
            <ul>
                @foreach ($ads as $ad)
                    <li>{{ $ad->title }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
