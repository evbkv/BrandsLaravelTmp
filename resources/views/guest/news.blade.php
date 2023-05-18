@foreach ($news as $one_news)

<div class="card border-opacity-25 mb-3">
	<img src="{{ asset('images/news/'.$one_news->photo) }}" class="card-img-top" onclick="spa_content({{ $one_news->id }});" style="cursor: pointer;">
	<div class="card-body">
		<h2 class="card-title fw-normal mb-3">{{ $one_news->name }}</h2>
		<p class="card-text mb-2"><?php echo substr($one_news->description, 0, 200); if (strlen($one_news->description) > 200) echo '…'; ?> <span class="link-primary text-decoration-none" onclick="spa_content({{ $one_news->id }});" style="cursor: pointer;">Lugema…</span></p>
		<p class="card-text text-muted small"><span onclick="spa_brand({{ $one_news->brand_id }});" style="cursor: pointer;">{{ $brands[$one_news->brand_id-1]['name'] }}</span> ⋅ {{ date("d.m.Y", strtotime($one_news->created_at)) }}</p>
	</div>
</div>

@endforeach