@extends('layouts.admin')

@section('title', 'Kabinet / Kaubamärgid / Redigeeri')

@section('content')

@if(isset($brand))

<h2 class="text-secondary fw-normal mb-4">Redigeeri kaubamärk</h2>
<form action="/cabinet/brands/{{ $brand->id }}" method="POST" class="mb-3" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="mb-3">
        <label class="form-label text-muted">Nimi</label>
        <input type="text" class="form-control" name="name" value="{{ $brand->name }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Kirjeldus</label>
        <textarea class="form-control" name="description" rows="3" required>{{ $brand->description }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Link</label>
        <input type="text" class="form-control" name="link" value="{{ $brand->link }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Pealkiri</label>
        <select class="form-select mb-3" name="heading" required>
            <option></option>
        @foreach ($headings as $heading)
            <option value="{{ $heading->id }}"<?php if ($catalog->heading_id == $heading->id) echo ' selected'; ?>>{{ $heading->name }}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Kasutaja</label>
        <select class="form-select mb-3" name="user_id" required>
            <option></option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}"<?php if ($brand->user_id == $user->id) echo ' selected'; ?>>{{ $user->login }}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Logo</label>
        <input class="form-control" type="file" name="photo">
        @if(isset($brand->photo))
        <img src="{{ asset('images/brands/'.$brand->photo) }}" class="img-fluid rounded w-25 mt-2">
        @endif
    </div>
    <button type="submit" class="btn btn-primary mt-5">Salvesta</button>
    <a href="/cabinet/brands/delete/{{ $brand->id }}" class="btn btn-outline-danger mt-5">Kustuta</a>
</form>

@else

<h2 class="text-secondary fw-normal mb-4">Lisa kaubamärk</h2>
<form action="/cabinet/brands/0" method="POST" class="mb-3" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="mb-3">
        <label class="form-label text-muted">Nimi</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Kirjeldus</label>
        <textarea class="form-control" name="description" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Link</label>
        <input type="text" class="form-control" name="link" required>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Pealkiri</label>
        <select class="form-select mb-3" name="heading" required>
            <option></option>
        @foreach ($headings as $heading)
            <option value="{{ $heading->id }}">{{ $heading->name }}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Kasutaja</label>
        <select class="form-select mb-3" name="user_id" required>
            <option></option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->login }}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Logo</label>
        <input class="form-control" type="file" name="photo" required>
    </div>
    <button type="submit" class="btn btn-primary mt-5">Salvesta</button>
</form>

@endif

@endsection