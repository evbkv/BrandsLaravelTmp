@extends('layouts.admin')

@section('title', 'Kabinet / Uudised')

@section('content')

<h2 class="text-secondary fw-normal mb-4">Uudised</h2>

@if(Auth::user()->status != 3)<a class="btn btn-outline-secondary btn-sm mb-3" href="/cabinet/news/add" role="button">Lisa uudiseid</a>@endif

@foreach ($news as $one_news)

<div class="card border-opacity-25 mb-3">
    <div class="row g-0">
        <div class="col-3">
            <div class="card-body">
                <img src="{{ asset('images/news/'.$one_news->photo) }}" class="img-fluid">
            </div>
        </div>
        <div class="col-9">
            <div class="card-body">
                <h5 class="card-text mb-2"><span class="link-secondary text-decoration-none" onclick="spa_content({{ $one_news->id }});" style="cursor: pointer;">{{ $one_news->name }}</span></h5>
                <p><?php echo substr($one_news->description, 0, 200); if (strlen($one_news->description) > 200) echo '…'; ?></p>
                <p class="card-text text-muted small">{{ $brands[$one_news->brand_id-1]['name'] }} ⋅ {{ date("d.m.Y", strtotime($one_news->created_at)) }} ⋅ <a href="/cabinet/news/edit/{{ $one_news->id }}" class="text-decoration-none">Redigeeri…</a></p>
            </div>
        </div>
    </div>
</div>

@endforeach

{{ $news->links('layouts.paginate') }}

@endsection