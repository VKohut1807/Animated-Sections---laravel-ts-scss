@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-2.scss')
@endsection

@section('script')
    @vite('resources/ts/layouts/section-2.ts')
@endsection

@section('content')
    @php
        $routesConfig = config('routes-config');
    @endphp

    {{ Breadcrumbs::render() }}

    <section data-section-2-views class="sections">
        <div class="hook-open" data-trigger>
            @svgPublic('/svg/section-2/open.svg')
        </div>
        <div class="quick-view">
            @foreach ($routesConfig as $key => $value)
                <div data-section-name="{{ $value['view-name'] }}" class="page-view">
                    <h5>{{ $value['view-name'] }}</h5>
                    <a href="{{ route($value['route-name']) }}" class="page-link">
                        @svgPublic('/svg/section-2/arrow-right-icon.svg')
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <div data-background-window></div>

    <img data-section-2-image src="" alt="">
@endsection
