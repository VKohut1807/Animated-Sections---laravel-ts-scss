<section class="wrapper mt2 hidden">
    <div class="breadcrumbs">
        <div class="before-items"></div>
        <div class="breadcrumbs-items">
            @unless ($breadcrumbs->isEmpty())
                <div class="home-wrapper">
                    <a href="{{ $breadcrumbs[0]->url }}">
                        @svgPublic('svg/breadcrumbs/breadcrumbs-home-icon.svg', class="home-icon")
                    </a>
                </div>
                <ul class="items-wrapper">
                    @foreach ($breadcrumbs as $key => $breadcrumb)
                        @if ($key > 0)
                            <li class="breadcrumb-item">
                                @svgPublic('svg/breadcrumbs/breadcrumbs-arrow.svg')
                                @if (!is_null($breadcrumb->url) && !$loop->last)
                                    <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                                @else
                                    <span class="active">{{ $breadcrumb->title }}</span>
                                @endif
                            </li>
                        @endif
                    @endforeach
                </ul>
            @endunless
        </div>
        <div class="after-items"></div>
    </div>
</section>
