<div data-nav-drawers-views class="sections">
    <div class="hook-open" data-click>
        @svgPublic('/svg/section-2/open.svg')
    </div>
    <div class="quick-view">
        @foreach ($routesConfig as $key => $value)
            <div data-name="{{ $value['view-name'] }}" href="{{ route($value['route-name']) }}" class="page-view">
                <h5>{{ $value['view-name'] }}</h5>
            </div>
        @endforeach
    </div>
</div>

<div data-background-window></div>

<img data-nav-drawers-image src="" alt="">
