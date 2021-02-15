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
                            <h2>Blog Details</h2>
                            <p>Read our blogs for the latest medical technology news</p>
                        </div>
                        <div class="page_link">
                            <a href="#">Home</a>
                            <a href="#">Blog </a>
                            <a href="#">Blog Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Blog Area =================-->
        <section class="blog_area single-post-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post">
                            <div class="feature-img">
                                <img class="img-fluid" src="/storage/blog/{{ $blog->image }}" alt="">
                            </div>
                            <div class="blog_details">
                                <h2>{{ $blog->title }}</h2>

                                {!! $blog->body !!} 
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Recent Post</h3>

                                @foreach($recent_blogs as $blog)
                                <div class="media post_item">
                                    <img src="/storage/blog/{{ $blog->image }}" alt="post" style="max-height: 60px" class="img-fluid">
                                    <div class="media-body">
                                        <a href="{{ route('blogs-front.show', $blog->id) }}">
                                            <h3>
                                                {!! \Illuminate\Support\Str::limit(strip_tags($blog->title), 20, $end = '...') !!}
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
    </div>
    @include('frontend.partials.footer')
    @include('frontend.partials.scripts')
</body>

</html>
