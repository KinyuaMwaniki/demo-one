<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>
    @include('frontend.partials.header')

    <section class="home_banner_area mb-40">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-12">
                        <p class="sub text-uppercase">{{ $company_detail->company_name }}</p>
                        <h3>
                            @php $count = 0 @endphp
                            @foreach (explode(' ', $company_detail->slogan) as $word)
                                {!! strlen($word) > 4 ? '<span>' . $word . '</span>' : $word !!}
                                @php $count++ @endphp
                                @if ($count % 3 === 0)
                                    <br />
                                @endif
                            @endforeach
                        </h3>
                        <h4>{{ $company_detail->sub_slogan }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-area section_gap_bottom_custom">
        <div class="container">
            <div class="row">
                @foreach ($promises as $promise)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <a href="#" class="title">
                                <i class="fas fa-user"></i>
                                <h3>{{ $promise->header }}</h3>
                            </a>
                            <p>{{ $promise->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="feature_product_area section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>Featured products</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img style="height: 260px" class="img-fluid w-100"
                                    src="/storage/portfolios/{{ $portfolio->image }}" alt="" />
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>{{ $portfolio->header }}</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">KES {{ $portfolio->price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="blog-area section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>Blog</span></h2>
                        <p>Our Latest Posts</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="thumb">
                                <img class="img-fluid" src="/storage/blog/{{ $blog->image }}" alt=""
                                    style="height: 260px">
                            </div>
                            <div class="short_details">
                                <a class="d-block" href="{{ route('blogs-front.show', $blog->id) }}">
                                    <h4>{{ $blog->title }}</h4>
                                </a>
                                <div class="text-wrap">
                                    {!! \Illuminate\Support\Str::limit(strip_tags($blog->body), 150, $end = '...') !!}
                                </div>
                                <a href="{{ route('blogs-front.show', $blog->id) }}" class="blog_btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('frontend.partials.footer')
    @include('frontend.partials.scripts')
</body>

</html>
