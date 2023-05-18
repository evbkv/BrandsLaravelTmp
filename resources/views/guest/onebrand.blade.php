<div class="card border-opacity-25 mb-3">
    <div class="row g-0">
        <div class="col-3">
            <div class="card-body">
                <img src="{{ asset('images/brands/'.$brand->photo) }}" class="img-fluid" onclick="spa_brand({{ $brand->id }});" style="cursor: pointer;">
            </div>
        </div>
        <div class="col-9">
            <div class="card-body">
                <p class="card-text mb-2">{{ $brand->description }}</p>
                <p class="card-text text-muted small"><span onclick="spa_brand({{ $brand->id }});" style="cursor: pointer;">{{ $brand->name }}</span> ⋅ <a href="{{ $brand->link }}" target="_blank" class="text-decoration-none"><?php echo substr($brand->link, 8, strlen($brand->link)-9); ?></a></p>
            </div>
        </div>
    </div>
</div>