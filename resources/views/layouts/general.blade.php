@extends('layouts.html')
@section('css')<link rel="stylesheet" href="{{ asset('css/general.css') }}">@endsection

@section('body')

<main id="main_content">

    @yield('content')

</main>

<nav>
    <ul class="nav">
        <li class="nav-item nav-mobile">
            <blockquote class="blockquote text-secondary mb-5"><?php echo $blockquote; ?></blockquote>
        </li>

        @foreach($general_menu as $menu)
            <?php
                if (substr($menu['link'],0,2) == 'f!') {
                    echo '<li class="nav-item fw-semibold"><a class="nav-link link-dark" onclick="'.substr($menu['link'],2).'();" style="cursor: pointer;">'.$menu['image'].$menu['name'].'</a></li>';
                } else {
                    echo '<li class="nav-item fw-semibold"><a href="'.$menu['link'].'" class="nav-link link-dark">'.$menu['image'].$menu['name'].'</a></li>';
                }
            ?>
        @endforeach

    </ul>
    <div class="nav-mobile">
        <p class="text-muted small">@include('layouts.copyright')</p>
    </div>
</nav>

<div id="logo">
    <a href="/"><img src="{{ asset('images/logo.svg') }}" alt=""></a>
</div>

@endsection

@section('spa')

<div id="search" class="d-flex align-items-center justify-content-center">
    <button type="button" class="btn-close" aria-label="Close" onclick="document.getElementById('search').style.visibility = 'hidden'; document.body.style.overflow = 'visible';"></button>
    <form role="search" class="search-form" onkeypress="if(event.keyCode == 13) { spa_searchResult(); return false; }">
        <input id="search_form" class="form-control form-control-lg shadow-lg rounded" type="search" placeholder="Kaubamärgi otsing..." aria-label="search">
        <?php if(isset($blockquote_search)) echo '<p class="mt-4 ms-3">'.$blockquote_search.'</p>'; ?>
    </form>
</div>

<div id="content">
</div>

@endsection