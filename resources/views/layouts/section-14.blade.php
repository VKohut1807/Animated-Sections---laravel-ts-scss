@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-14.scss')
@endsection

@section('content')
    @php
        $jsonFilePath = public_path('dataJson/sections/section-14.json');
        $jsonContent = file_exists($jsonFilePath) ? file_get_contents($jsonFilePath) : '{}';
        $dataJson14 = json_decode($jsonContent, true);
    @endphp

    {{ Breadcrumbs::render() }}

    <section style="height: 10rem; background-color: #f3f3da;"></section>

    <section class="section-14">
        <div class="wrapper">
            <div class="content">
                <div class="first-column">
                    <div class="card-box">
                        <h2>
                            {{ $dataJson14[0]['info']['title'] }}
                        </h2>
                        <p>
                            {{ $dataJson14[0]['info']['subtitle'] }}
                        </p>
                    </div>
                </div>
                <div class="second-column">
                    @foreach ($dataJson14 as $key => $card)
                        @if ($key === 0)
                            @continue
                        @endif

                        <div class="card-box">
                            <img src="/images/section-14/{{ $card['image-box']['image-name'] }}"
                                alt="{{ $card['image-box']['alt'] }}" class="image" />
                            <div class="info {{ $card['info']['offset'] ?? '' }}">
                                <h2>
                                    {{ $card['info']['title'] }}
                                </h2>
                                <p>
                                    {!! $card['info']['subtitle'] !!}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section style="height: 40rem; background-color: #f3f3da;"></section>
@endsection
