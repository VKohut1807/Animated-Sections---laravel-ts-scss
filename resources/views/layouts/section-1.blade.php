@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-1.scss')
@endsection

@section('content')
    @php
        $jsonFilePath = public_path('dataJson/sections/section-1.json');
        $jsonContent = file_exists($jsonFilePath) ? file_get_contents($jsonFilePath) : '{}';
        $dataJson1 = json_decode($jsonContent, true);
    @endphp

    {{ Breadcrumbs::render() }}

    <section class="section-1">
        <div class="wrapper">
            <div class="section-up">
                <h3>How to Apply</h3>
                <a href="#" class="right">
                    <span class="text">View All Requirements</span>
                    @svgPublic('/svg/section-1/arrow-right-icon.svg')
                </a>
            </div>
            <div class="section-down">
                @foreach ($dataJson1 as $elem)
                    <a href="#" class="block">
                        @if ($elem['number'] == 1)
                            @svgPublic('/svg/section-1/bulb-icon.svg')
                        @elseif ($elem['number'] == 2)
                            @svgPublic('/svg/section-1/hat-icon.svg')
                        @elseif ($elem['number'] == 3)
                            @svgPublic('/svg/section-1/id-card-icon.svg')
                        @else
                            @svgPublic('/svg/section-1/medal-icon.svg')
                        @endif
                        <h4>{{ $elem['name'] }}</h4>
                        <p>{{ $elem['descr'] }}</p>
                        <h2>{{ $elem['number'] }}</h2>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
