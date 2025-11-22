@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-10.scss')
@endsection

@section('content')
    @php
        $textButton = str_split('Learn Now');
    @endphp

    {{ Breadcrumbs::render() }}

    <section class="section-10">
        <div class="wrapper">
            <div class="content">
                <img src="/images/section-10/1.webp" alt="image">
                <div class="information">
                    <h2>Welcome to the Great Public Library</h2>
                    <h4>Book order within a minute</h4>
                    <a href="#" class="link">
                        @foreach ($textButton as $letter)
                            <span class="letter">{{ $letter }}</span>
                        @endforeach
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
