@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-11.scss')
@endsection

@section('script')
    @vite('resources/ts/layouts/section-11.ts')
@endsection

@section('content')
    @php
        $textButton = str_split('Learn More');
    @endphp

    {{ Breadcrumbs::render() }}

    <section style="height: 100rem; background-color: #f3f3da;"></section>

    <section data-section-selector class="section-11">
        <img data-image-selector src="/images/section-11/1.webp" alt="image">
        <div class="wrapper">
            <div class="content">
                <div class="information">
                    <h2>About us</h2>
                    <h4>Visit us and see for yourself the exciting atmosphere</h4>
                    <a href="#" class="link">
                        @foreach ($textButton as $letter)
                            <span class="letter">{{ $letter }}</span>
                        @endforeach
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section style="height: 100rem; background-color: #f3f3da;"></section>
@endsection
