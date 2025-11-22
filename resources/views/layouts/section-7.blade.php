@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-7.scss')
@endsection

@section('script')
    @vite('resources/ts/layouts/section-7.ts')
@endsection

@section('content')
    {{ Breadcrumbs::render() }}

    <section style="height: 100rem; background-color: #f3f3da;"></section>

    <section class="section-7">
        <div data-scroll-progress class="circle-box">
            @svgPublic('/svg/section-7/arrow-up.svg', class="icon-arrow")
            @svgPublic('/svg/section-7/circle.svg', class="icon-circle")
        </div>
    </section>
@endsection
