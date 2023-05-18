@extends('layouts.admin')

@section('title', 'Kabinet / Uudised / Redigeeri')

@section('content')

@if(isset($news))

<h2 class="text-secondary fw-normal mb-4">Redigeeri uudiseid</h2>
<form action="/cabinet/news/{{ $news->id }}" method="POST" class="mb-3" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="mb-3">
        <label class="form-label text-muted">Päis</label>
        <input type="text" class="form-control" name="name" value="{{ $news->name }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Tekst</label>
        <textarea class="form-control" name="description" rows="5" required>{{ $news->description }}</textarea>
    </div>
    <div class="mb-3"<?php if(Auth::user()->status == 3) echo ' hidden'; ?>>
        <label class="form-label text-muted">Kaubamärk</label>
        <select class="form-select" name="brand_id" required>
            <option></option>
            @foreach ($brands as $brand)
            @if(Auth::user()->status < 3 || Auth::user()->id == $brand->user_id)
            <option value="{{ $brand->id }}" <?php if($news->brand_id == $brand->id) echo ' selected'; ?>>{{ $brand->name }}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Pilt</label>
        <input class="form-control" type="file" name="photo">
        @if(isset($news->photo))
        <img src="{{ asset('images/news/'.$news->photo) }}" class="img-fluid rounded w-25 mt-2">
        @endif
    </div>
    <div class="mb-3">
        <p class="text-muted small"><?php if(isset($user->login)) echo $user->login.' ⋅ '.date("d.m.Y", strtotime($news->created_at)); ?></p>
    </div>
    <button type="submit" class="btn btn-primary mt-5">Salvesta</button>
    <a href="/cabinet/news/delete/{{ $news->id }}" class="btn btn-outline-danger mt-5">Kustuta</a>
</form>

@else

<h2 class="text-secondary fw-normal mb-4">Lisa uudiseid</h2>
<form action="/cabinet/news/0" method="POST" class="mb-3" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="mb-3">
        <label class="form-label text-muted">Päis</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Tekst</label>
        <textarea class="form-control" name="description" rows="5" required></textarea>
    </div>
    <div class="mb-3"<?php if(Auth::user()->status == 3) echo ' hidden'; ?>>
        <label class="form-label text-muted">Kaubamärk</label>
        <select class="form-select" name="brand_id" required>
            <option></option>
            @foreach ($brands as $brand)
            @if(Auth::user()->status < 3 || Auth::user()->id == $brand->user_id)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Pilt</label>
        <input class="form-control" type="file" name="photo" required>
    </div>
    <button type="submit" class="btn btn-primary mt-5">Salvesta</button>
</form>

@endif

@endsection