@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-3.scss')
@endsection

@section('content')
    @php
        $dataJson3 = [
            [
                'title' => 'Do Slate products require refrigeration?',
                'descr' =>
                    'Nope, our products do NOT require refrigeration. But like most drinks, we recommend drinking them cold for the best taste!',
            ],
            [
                'title' => 'Why is Slate lactose free?',
                'descr' =>
                    'Lactose is a sugar many adults have trouble digesting. Sometimes, natural products in their original form need small adjustments for us to properly digest them. Milk is no different. We peel the skin off of bananas. We take the pit out of avocados. We avoid the seeds in watermelon. Why don’t we remove the lactose from milk? All Slate products are 100% lactose free.',
            ],
            [
                'title' => 'Is Slate all-natural?',
                'descr' =>
                    'YES. Our products use all-natural ingredients. We use a canning pasteurization technique that allows us to deliver products safely to your door without refrigeration.',
            ],
            [
                'title' => 'What’s Slate’s process?',
                'list' => [
                    'We skim our milk, then filter out the natural lactose sugars. This natural process, called ultrafiltration, is how we’re able to boast less sugar and more protein than other milks.',
                    'Our natural ingredients are then blended, canned, and heated (through the retort process) at our production facility.',
                    'Slate milk is shipped to your doorstep to be chugged.',
                ],
            ],
        ];
    @endphp

    {{ Breadcrumbs::render() }}

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
                                <p class="info">{{ $answer['descr'] }}</p>
                            @endif
                            @if (isset($answer['list']))
                                <ol class="list">
                                    @foreach ($answer['list'] as $item)
                                        <li class="el">{{ $item }}</li>
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
