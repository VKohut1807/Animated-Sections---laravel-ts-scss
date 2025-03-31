@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-3.scss')
@endsection

@section('content')
    @php
        $jsonFilePath = public_path('dataJson/sections/section-3.json');
        $jsonContent = file_exists($jsonFilePath) ? file_get_contents($jsonFilePath) : '{}';
        $dataJson3 = json_decode($jsonContent, true);
    @endphp

    <section id="section-3" class="section-3">
        <div class="wrapper">
            <h3>FAQ's</h3>
            <div class="answers">
                @foreach ($dataJson3 as $key => $answer)
                    <div class="answer">
                        <input type="checkbox" id="section4nr{{ $key }}" name="section4nr{{ $key }}">
                        <label for="section4nr{{ $key }}">
                            <h4>{{ $answer['title'] }}</h4>
                            <span class="plus"></span>
                        </label>
                        <div class="descr">
                            @if (isset($answer['descr']))
                                <p>{{ $answer['descr'] }}</p>
                            @endif
                            @if (isset($answer['list']))
                                <ol>
                                    @foreach ($answer['list'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ol>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="info-more">
                <a href="#" class="link">Read More</a>
            </div>
        </div>
    </section>
@endsection
