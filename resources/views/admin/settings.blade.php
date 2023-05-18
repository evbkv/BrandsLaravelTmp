@extends('layouts.admin')

@section('title', 'Kabinet / Seaded')

@section('content')

<h2 class="text-secondary fw-normal mb-4">Seaded</h2>
<form action="/cabinet/settings/{{ Auth::user()->id }}" method="POST" class="mb-3">
    {{ csrf_field() }}
    <div class="mb-3">
        <label class="form-label text-muted">Meil</label>
        <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
    </div>
    <div class="mb-3">
        <label class="form-label text-muted">Parool ja parooli kinnitamine</label>
        <div class="input-group">
            <input type="password" class="form-control" name="password">
            <input type="password" class="form-control" name="password_ch">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-5">Salvesta</button>
</form>

@endsection