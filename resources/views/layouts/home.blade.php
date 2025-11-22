@extends('app')

@section('styles')
    @vite('resources/scss/layouts/home.scss')
@endsection

@section('script')
    @vite('resources/tsx/home.tsx')
@endsection

@php
    $routesConfig = config('routes-config');
@endphp

@section('content')
    <div id="home-page" class="home-page">
        <div class="wrapper mt2">
            <h1>My sections</h1>
            <section class="home-section">
                @foreach ($routesConfig as $key => $value)
                    <a href="{{ route($value['route-name']) }}" class="page-view">
                        <h5>{{ $value['view-name'] }}</h5>
                        <img src="/images/sections-home/{{ $value['view-name'] }}.webp" alt="">
                    </a>
                @endforeach
            </section>
        </div>
    </div>
@endsection
