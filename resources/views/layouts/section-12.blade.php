@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-12.scss')
@endsection

@section('content')
    {{ Breadcrumbs::render() }}

    <section class="section-12">
        <div class="wrapper">
            <div class="content">
                <img src="/images/section-12/1.webp" alt="background-image" class="background-image">
                <div class="person-box">
                    <img src="/images/section-12/2.webp" alt="person-image" class="person-image">
                </div>
                <div class="info">
                    <h3>Robert Mitchell</h3>

                    <p>Creative, passionate, a lover of fine things, skilled, and meticulous, Robert's guiding principle
                        is
                        the satisfaction of his clients.</p>

                    <p>With 15 years of experience in London’s luxury hotels, a title of World Champion Pastry Chef, a
                        contestant on MasterChef, and recognized expertise in the world of high-end Catering and
                        Banquets,
                        this talented and unique chef has cultivated a taste for precision and excellence.</p>

                    <p>In 2018, the Chef opened the doors to his restaurant "HIDEAWAY," located in the heart of the
                        historic city center of Kensington.</p>

                    <p>His bistro sanctuary has become the best-kept secret everyone shares in West London.</p>

                    <p>His flavorful and refined cuisine always respects the seasons and the ingredients.</p>

                    <p>“No deconstruction in my cooking; I want the customer to rediscover the shape and taste of the
                        product. A return to essentials but with modern cooking techniques and contemporary plating.
                        Tradition and Modernity are not incompatible!”</p>
                    <span class="link-box">Email: <a href="mailto:mitchellconsulting@gimail.com"
                            class="link">mitchellconsulting@gimail.com</a></span>
                </div>
            </div>
        </div>
    </section>
@endsection
