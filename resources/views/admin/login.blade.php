@extends('layouts.html')

@section('title', 'Logi sisse')
@section('css')<link rel="stylesheet" href="{{ asset('css/login.css') }}" />@endsection

@section('body')
<main class="form-signin w-100 m-auto text-center">
    <form action="/login" method="POST">
        {{ csrf_field() }}
        <img class="mb-4" src="{{ asset('images/logo.svg') }}" alt="">
        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Login" name="login">
            <label for="floatingInput">Logi</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Parool</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted small">@include('layouts.copyright')</p>
    </form>
</main>
@endsection