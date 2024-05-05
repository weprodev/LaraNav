<nav class="sidebar sidebar-offcanvas" id="sidebar laranav-sidebar">
    <ul class="nav">
        @foreach (Config::get('laranav.nav')['SIDE_NAV'] as $item)
            @include(config('laranav.default.directory') . '.layouts.link', ['item' => $item])
        @endforeach
    </ul>
</nav>
