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
    
    <section id="section-2" class="section-2">
        <div class="sections">
            <div class="hook-open">
                @svg('/svg/section-2/open.svg')
            </div>
            <div data-section2-names class="quick-view">
                @foreach ($routesConfig as $key => $value)
                    <a data-section2-view-name="{{ $value['view-name'] }}" href="{{ route($value['route-name']) }}" class="page-view">
                        <h5>{{ $value['view-name'] }}</h5>
                    </a>
                @endforeach
            </div>
        </div>

        <img data-section2-view id="view-section" class="view-section" src="" alt="">
    </section>
@endsection
