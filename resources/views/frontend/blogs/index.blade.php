<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>
    <div id="main">
        @include('frontend.partials.header')
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content d-md-flex justify-content-between align-items-center">
                        <div class="mb-3 mb-md-0">
                            <h2>Blog</h2>
                            <p>Follow our blogs to find out the latest medical news</p>
                        </div>
                        <div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="blog.html">Blog </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Blog Area =================-->
        <section class="blog_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach ($blogs as $blog)
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="/storage/blog/{{ $blog->image }}" alt="">
                                        <a href="#" class="blog_item_date">
                                            <h3>{{ $blog->created_at->format('d') }}</h3>
                                            <p>{{ $blog->created_at->format('M') }}</p>
                                        </a>
                                    </div>

                                    <div class="blog_details">
                                        <a class="d-inline-block" href="{{ route('blogs-front.show', $blog->id) }}">
                                            <h2>{{ $blog->title }}</h2>
                                        </a>

                                        {!! \Illuminate\Support\Str::limit(strip_tags($blog->body), 150, $end = '...')
                                        !!}
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">




                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Recent Post</h3>
                                @foreach ($recent_blogs as $blog)
                                    <div class="media post_item">
                                        <img src="/storage/blog/{{ $blog->image }}" alt="post"
                                            style="max-height: 60px" class="img-fluid">
                                        <div class="media-body">
                                            <a href="{{ route('blogs-front.show', $blog->id) }}">
                                                <h3>
                                                    {!! \Illuminate\Support\Str::limit(strip_tags($blog->title), 20,
                                                    $end = '...') !!}
                                                </h3>
                                            </a>
                                            <p>{{ $blog->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                @endforeach

                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
    </div>
    @include('frontend.partials.footer')
    @include('frontend.partials.scripts')
</body>

</html>
