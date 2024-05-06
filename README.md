# Laravel Navigation

This package will help you to manage all the navigation on your application.
You can define menu navigation and managing menu items in the config file.

# Installing

# How to use

After publishing the package, you can see an example in the blade files like below:

```
@foreach (\WeProDev\LaraNav\Service\LNavService::getNav('SIDE_NAV') as $item)
    @include(config('laranav.default.directory') . '.layouts.link', ['item' => $item])
@endforeach
```

and in the include file

```
@can($item['permission'] ?? null)
    <li class="nav-item {{ $item['parent_attributes']['class'] ?? '' }}">
        <a class="nav-link {{ $item['attributes']['class'] ?? '' }}"
            @if (!empty($item['children'])) data-bs-toggle="collapse"
                data-toggle="collapse"
                aria-expanded="false"
                aria-controls="{{ $item['url'] }}"
                href="#{{ $item['url'] }}"
            @else
                href="@php match ($item['type']) {
                    'PATH' => url($item['url']),
                    'ROUTE' => route($item['url']),
                    default => $item['url']
                } @endphp"> @endif
            <span class="menu-title">{{ $item['title'] }}</span>

            @if (!empty($item['children']))
                <i class="menu-arrow"></i>
            @endif
            @isset($item['icon'])
                <i class="{{ $item['icon'] }}"></i>
            @endisset
        </a>
        @if (!empty($item['children']))
            <div class="collapse" id="{{ $item['url'] }}">
                <ul class="nav flex-column sub-menu">
                    @foreach ($item['children'] as $child)
                        @include(config('laranav.default.directory') . '.layouts.link', ['item' => $child])
                    @endforeach
                </ul>
            </div>
        @endif
    </li>
@endcan
```

# MIT License

Copyright (c) 2024 LaraNav

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
