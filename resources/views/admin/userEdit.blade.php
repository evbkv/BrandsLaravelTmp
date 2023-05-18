@extends('layouts.admin')

@section('title', 'Kabinet / Kasutajad / Redigeeri')

@section('content')

@if(isset($user))

<h2 class="text-secondary fw-normal mb-4">Redigeeri kasutaja</h2>
<form action="/cabinet/users/{{ $user->id }}" method="POST" class="mb-3">
    {{ csrf_field() }}
    <div class="mb-3">
        <label class="form-label text-muted">Logi</label>
        <input type="text" class="form-control" name="login" value="{{ $user->login }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Meil</label>
        <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Parool ja parooli kinnitamine</label>
        <div class="input-group">
            <input type="password" class="form-control" name="password">
            <input type="password" class="form-control" name="password_ch">
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Roll</label>
        <select class="form-select" name="status" required>
            <option></option>
            @if(Auth::user()->status == 1)<option value="1"<?php if ($user->status == 1) echo ' selected'; ?>>Administraator</option>@endif
            <option value="2"<?php if ($user->status == 2) echo ' selected'; ?>>Juht</option>
            <option value="3"<?php if ($user->status == 3) echo ' selected'; ?>>Moderaator</option>
            <option value="4"<?php if ($user->status == 4) echo ' selected'; ?>>Autor</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mt-5">Salvesta</button>
    <a href="/cabinet/users/delete/{{ $user->id }}" class="btn btn-outline-danger mt-5">Kustuta</a>
</form>

@else

<h2 class="text-secondary fw-normal mb-4">Lisa kasutaja</h2>
<form action="/cabinet/users/0" method="POST" class="mb-3">
    {{ csrf_field() }}
    <div class="mb-3">
        <label class="form-label text-muted">Logi</label>
        <input type="text" class="form-control" name="login" required>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Meil</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Parool ja parooli kinnitamine</label>
        <div class="input-group">
            <input type="password" class="form-control" name="password" required>
            <input type="password" class="form-control" name="password_ch" required>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Roll</label>
        <select class="form-select" name="status" required>
            <option></option>
            @if(Auth::user()->status == 1)<option value="1">Administraator</option>@endif
            <option value="2">Juht</option>
            <option value="3">Moderaator</option>
            <option value="4">Autor</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mt-5">Salvesta</button>
</form>

@endif

@endsection