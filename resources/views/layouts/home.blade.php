@extends('app')

@section('styles')
    @vite('resources/scss/layouts/home.scss')
@endsection

@section('script')
    @vite('resources/tsx/home.tsx')
@endsection

@section('content')
    <div class="home-page">
        <div class="wrapper">
            <section id="home-page"></section>
        </div>
    </div>
@endsection
