@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Вы авторизовались!</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @can('view', auth()->user())
                            <a class="btn btn-danger" href="{{route('admin.main.index')}}">Админка</a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
