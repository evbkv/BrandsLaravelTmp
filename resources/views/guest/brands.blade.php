<select id="brand_heading" class="form-select mb-3" onchange="spa_brands('heading='+document.getElementById('brand_heading').value);">
    <option></option>
@foreach ($headings as $heading)
    <option value="{{ $heading->id }}"<?php if(isset($_GET['heading']) && $_GET['heading'] == $heading->id) echo ' selected'; ?>>{{ $heading->name }}</option>
@endforeach
</select>

<p class="text-secondary small mb-5">
<?php $letters_count = count($letters); ?>
@foreach ($letters as $letter)
    <span class="text-secondary text-decoration-none text-uppercase" style="cursor: pointer;" onclick="spa_brands('letter={{ $letter }}');">{{ $letter }}</span> ⋅ 
@endforeach
    <span class="text-secondary text-decoration-none" style="cursor: pointer;" onclick="spa_brands();">kõik</span>
</p>

@foreach ($brands as $brand)

@include('guest.onebrand')

@endforeach