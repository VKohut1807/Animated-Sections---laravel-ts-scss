<div id="nav-drawers-views" class="sections">
    <div class="hook-open">
        @svg('/svg/section-2/open.svg')
    </div>
    <div data-section2-names class="quick-view">
        @foreach ($routesConfig as $key => $value)
            <a data-section2-view-name="{{ $value['view-name'] }}" href="{{ route($value['route-name']) }}"
                class="page-view">
                <h5>{{ $value['view-name'] }}</h5>
            </a>
        @endforeach
    </div>
</div>

<img id="nav-drawers-img" data-section2-view src="" alt="">
