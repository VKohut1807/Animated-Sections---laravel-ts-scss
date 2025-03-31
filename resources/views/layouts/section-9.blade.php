@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-9.scss')
@endsection

@section('content')
    @php
        $jsonFilePath = public_path('dataJson/sections/section-9.json');
        $jsonContent = file_exists($jsonFilePath) ? file_get_contents($jsonFilePath) : '{}';
        $dataJson9 = json_decode($jsonContent, true);
    @endphp

    <section class="section-9">
        <div class="wrapper">
            <div class="group">
                <div class="header">
                    <h2>minju</h2>
                    @svg('/svg/section-9/signature.svg', class="signature")
                </div>
                <div class="gallery" style="--countImage: {{count($dataJson9)}};">
                    @foreach ($dataJson9 as $image)
                        <a href="#" class="link">
                            <img src="/images/section-9/{{ $image['src'] }}" alt="{{ $image['alt'] }}">
                            <div class="info">
                                {{ $image['position'] }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
