@extends('layouts.admin')

@section('title', 'Kabinet / Kasutajad')

@section('content')

<h2 class="text-secondary fw-normal mb-4">Kasutajad</h2>

<a class="btn btn-outline-secondary btn-sm mb-3" href="/cabinet/users/add" role="button">Lisa kasutaja</a>

<div class="card border-opacity-25 mb-3">
    <div class="card-body">

    <h5 class="card-text mb-2">Kontroll</h5>

<?php $admins = true; ?>
@foreach ($users as $user)

<?php
    if($user->status == 4 && $admins == true) {
        $admins = false;
        echo '<h5 class="card-text mt-4 mb-2">Autorid</h5>';
    }
?>
        @if(Auth::user()->status == 1 || (Auth::user()->status != 1 && $user->status != 1))
        <p class="card-text text-muted small mb-0"><strong>{{ $user->login }}</strong><?php
        
    switch($user->status) {
        case 1: echo ' ⋅ administraator'; break;
        case 2: echo ' ⋅ juht'; break;
        case 3: echo ' ⋅ moderaator'; break;
    }
        
        ?> ⋅ <a href="/cabinet/users/edit/{{ $user->id }}" class="text-decoration-none">Redigeeri…</a></p>
        @endif

@endforeach

    </div>
</div>

@endsection