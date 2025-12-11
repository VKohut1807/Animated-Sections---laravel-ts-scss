<section class="breadcrumbs">
    <div class="before-elements"></div>
    <div data-breadcrumbs-elem class="breadcrumbs-elements">
        @unless ($breadcrumbs->isEmpty())
            <div class="home-wrapper">
                <a href="{{ $breadcrumbs[0]->url }}">
                    @svgPublic('svg/breadcrumbs/breadcrumbs-home-icon.svg', class="home-icon")
                </a>
            </div>
            <ul class="elements-wrapper">
                @foreach ($breadcrumbs as $key => $breadcrumb)
                    @if ($key > 0)
                        <li class="breadcrumb-element">
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
    <div class="after-elements"></div>
</section>
