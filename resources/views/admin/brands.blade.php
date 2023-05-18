@extends('layouts.admin')

@section('title', 'Kabinet / Kaubamärgid')

@section('content')

<h2 class="text-secondary fw-normal mb-4">Kaubamärgid</h2>

<a class="btn btn-outline-secondary btn-sm mb-3" href="/cabinet/brands/add" role="button">Lisa kaubamärk</a>

<select id="brand_heading" class="form-select mb-3" onchange="window.location.href='/cabinet/brands?heading='+document.getElementById('brand_heading').value;">
    <option></option>
@foreach ($headings as $heading)
    <option value="{{ $heading->id }}"<?php if(isset($_GET['heading']) && $_GET['heading'] == $heading->id) echo ' selected'; ?>>{{ $heading->name }}</option>
@endforeach
</select>

<p class="text-secondary small mb-5">
<?php $letters_count = count($letters); ?>
@foreach ($letters as $letter)
    <a href="/cabinet/brands?letter={{ $letter }}" class="text-secondary text-decoration-none text-uppercase">{{ $letter }}</a> ⋅ 
@endforeach
    <a href="/cabinet/brands" class="text-secondary text-decoration-none">kõik</a>
</p>

@foreach ($brands as $brand)

<div class="card border-opacity-25 mb-3">
    <div class="row g-0">
        <div class="col-3">
            <div class="card-body">
                <img src="{{ asset('images/brands/'.$brand->photo) }}" class="img-fluid">
            </div>
        </div>
        <div class="col-9">
            <div class="card-body">
                <p class="card-text mb-2">{{ $brand->description }}</p>
                <p class="card-text text-muted small">{{ $brand->name }} ⋅ <a href="/cabinet/brands/edit/{{ $brand->id }}" class="text-decoration-none">Redigeeri…</a></p>
            </div>
        </div>
    </div>
</div>

@endforeach

{{ $brands->links('layouts.paginate') }}

@endsection