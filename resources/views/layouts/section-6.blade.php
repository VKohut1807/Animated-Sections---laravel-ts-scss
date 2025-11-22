@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-6.scss')
@endsection

@section('content')
    {{ Breadcrumbs::render() }}

    <section style="height: 10rem;"></section>

    <section class="section-6">
        <div class="wrapper">
            <div class="group">
                <div class="images">
                    <img src="/images/section-6/1.webp" alt="person">
                    <img src="/images/section-6/2.webp" alt="person">
                    <img src="/images/section-6/3.webp" alt="person">
                </div>
                <p>Save your valuable time and energy by finding a solution quickly.</p>
                <a href="#" class="link">
                    Contact us now
                    @svgPublic('/svg/section-6/mouse-click.svg', class="icon")
                </a>
            </div>
        </div>
    </section>
@endsection
