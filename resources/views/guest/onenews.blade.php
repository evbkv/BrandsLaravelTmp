    <button type="button" class="btn-close" aria-label="Close" onclick="document.getElementById('content').style.visibility = 'hidden'; document.body.style.overflow = 'visible';"></button>
    <div id="content_text">
        <img src="{{ asset('images/news/'.$news->photo) }}" class="img-fluid rounded mb-4" alt="">
        <h1 class="mb-3">{{ $news->name }}</h1>
        <p>{{ $news->description }}</p>
        <p class="card-text text-muted small">{{ $brands[$news->brand_id-1]['name'] }} ⋅ {{ date("d.m.Y", strtotime($news->created_at)) }}</p>
    </div>