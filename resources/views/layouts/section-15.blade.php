@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-15.scss')
@endsection

@section('script')
    @vite('resources/ts/layouts/section-15.ts')
@endsection

@section('content')
    @php

        // remove it! // Only for example: $breadcrumbs is a global variable
        $baseUrl = config('app.url');
        $breadcrumbs = collect([
            [
                'title' => 'Home',
                'url' => $baseUrl,
            ],
            [
                'title' => 'category',
                'url' => $baseUrl . '/category',
            ],
            [
                'title' => 'subcategory',
                'url' => $baseUrl . '/subcategory',
            ],
            [
                'title' => 'section-15',
                'url' => $baseUrl . '/section-15',
            ],
        ]);
        $breadcrumbs = collect($breadcrumbs)->map(function ($item) {
            return (object) $item;
        });
        // remove it! // Only for example

        // install 'diglactic/laravel-breadcrumbs'
        // create file 'config->breadcrumbs.php'
        // create file 'routes->breadcrumbs.php'
        // use '{{ Breadcrumbs::render() }}'' in your view component
    @endphp

    <section class="section-15">
        <div class="before-elements"></div>
        <div data-breadcrumbs-elem class="section-15-elements">
            @unless (empty($breadcrumbs))
                <div class="home-wrapper">
                    <a href="{{ $breadcrumbs[0]->url }}">
                        @svgPublic('svg/section-15/breadcrumbs-home-icon.svg', class="home-icon")
                    </a>
                </div>
                <ul class="elements-wrapper">
                    @foreach ($breadcrumbs as $key => $breadcrumb)
                        @if ($key > 0)
                            <li class="section-15-element">
                                @svgPublic('svg/section-15/breadcrumbs-arrow.svg')
                                @if (!is_null($breadcrumb->url) && !$loop->last)
                                    <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                                @else
                                    <span class="active">{{ $breadcrumb->title }}</span>
                                @endif
                            </li>
                        @endif
                    @endforeach
                </ul>
            @endunless
        </div>
        <div class="after-elements"></div>
    </section>
@endsection
