@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-8.scss')
@endsection

@section('script')
    @vite('resources/ts/layouts/section-8.ts')
@endsection

@section('content')
    @php
        $percent1 = 55;
        $percent2 = 75;
        $percent3 = 92;
    @endphp

    <section style="height: 50rem; background-color: #f3f3da;"></section>

    <section id="section-8" class="section-8">
        <div class="wrapper">
            <div class="group">
                <div class="photo-group">
                    <img data-run-y1 src="/images/section-8/1.webp" alt="person" class="first">
                    <img data-run-y2 src="/images/section-8/2.webp" alt="person" class="second">
                </div>
                <div class="info">
                    <h5>30 years of extensive expertise</h5>
                    <h2>Delivering effective solutions for small businesses.</h2>
                    <div class="percent-group">
                        <div class="percent" data-percentage="{{ $percent1 }}">Financial analysis: {{ $percent1 }}%
                            <div class="line" data-line style="--custom-width: {{ $percent1 }}%;">
                                <div class="line-info">{{ $percent1 }}%</div>
                            </div>
                        </div>
                        <div class="percent" data-percentage="{{ $percent2 }}">Market strategy: {{ $percent2 }}%
                            <div class="line" data-line style="--custom-width: {{ $percent2 }}%;">
                                <div class="line-info">{{ $percent2 }}%</div>
                            </div>
                        </div>
                        <div class="percent" data-percentage="{{ $percent3 }}">Customer engagement: {{ $percent3 }}%
                            <div class="line" data-line style="--custom-width: {{ $percent3 }}%;">
                                <div class="line-info">{{ $percent3 }}%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="height: 50rem; background-color: #f3f3da;"></section>
@endsection
