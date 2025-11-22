@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-5.scss')
@endsection

{{ Breadcrumbs::render() }}

@section('content')
    <section style="height: 10rem;"></section>
    <section class="section-5">
        <div class="group">
            @foreach (range(1, 5) as $item)
                <a href="#" class="link">
                    <span class="word">Right Product</span>
                </a>
                @svgPublic('/svg/section-5/chain.svg', class="chain")
                <a href="#" class="link">
                    <span class="word no-color">Right Customer</span>
                </a>
                @svgPublic('/svg/section-5/chain.svg', class="chain")
                <a href="#" class="link">
                    <span class="word">Right Price</span>
                </a>
                @svgPublic('/svg/section-5/chain.svg', class="chain")
                <a href="#" class="link">
                    <span class="word no-color">Right Quantity</span>
                </a>
                @svgPublic('/svg/section-5/chain.svg', class="chain")
                <a href="#" class="link">
                    <span class="word">Right Condition</span>
                </a>
                @svgPublic('/svg/section-5/chain.svg', class="chain")
                <a href="#" class="link">
                    <span class="word no-color">Right Time</span>
                </a>
                @svgPublic('/svg/section-5/chain.svg', class="chain")
                <a href="#" class="link">
                    <span class="word no-color">Right Place</span>
                </a>
                @svgPublic('/svg/section-5/chain.svg', class="chain")
            @endforeach
        </div>
    </section>
@endsection
