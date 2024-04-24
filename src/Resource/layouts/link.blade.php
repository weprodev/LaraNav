<li class="{{ $item['parent_attributes']['class'] }}">
    <a class="{{ $item['attributes']['class'] }}" {{ !empty($item['children']) ? 'data-toggle="collapse"' : '' }}
        href="@php match ($item['type']) {
                'PATH' => url($item['url']),
                'FULL_URL' => $item['url'],
                'ROUTE' => route($item['url']),
                default => '#' .$item['url']
            } @endphp"
        aria-expanded="false" aria-controls="{{ $item['url'] }}">
        {{ $item['title'] }}
    </a>
    @if (!empty($item['children']))
        <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                @foreach ($item['children'] as $child)
                    @include(config('laranav.default.directory') . '.layouts.link', ['item' => $child])
                @endforeach
            </ul>
        </div>
    @endif
</li>
