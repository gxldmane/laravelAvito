@extends('layouts.app')

@section('content')
    <div class="profile">
        <div class="profile-header">
            <img
                @if($user->avatar == null)
                    src="{{ asset('storage/avatars/placeholder.pnh') }}" alt="{{ $user->avatar }}" class="profile-photo">
                @elseif($user->avatar != null)
                    src="{{ asset('storage/'. $user->avatar) }}" alt="{{ $user->avatar }}" class="profile-photo">
                @endif
            <h1>Здравствуйте, {{ $user->name }}</h1>
        </div>
        <div class="profile-ads">
            <h2>Ваши объявления</h2>
            <ul>
                @foreach ($ads as $ad)
                    <li>{{ $ad->title }}</li>
                @endforeach
            </ul>
        </div>
        <div class="profile-actions">
            <a href="{{ route('product.create') }}" class="btn btn-primary">Создать объявление</a>
            <a href="{{ route('profile.edit') }}" class="btn btn-secondary">Редактировать профиль</a>
            <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
@endsection
