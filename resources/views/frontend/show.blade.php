<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>
    <div id="main">
        @include('frontend.partials.header')

        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content d-md-flex justify-content-between align-items-center">
                        <div class="mb-3 mb-md-0">
                            <h2>Product Details</h2>
                            <p>View details for {{ $portfolio->name }}</p>
                        </div>
                        <div class="page_link">
                            <a href="#">Home</a>
                            <a href="#">Product Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="product_image_area">
      <div class="container">
        <div class="row s_product_inner">
          <div class="col-lg-6">
            <div class="s_product_img">
              <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      class="d-block w-100"
                      src="/storage/portfolios/{{ $portfolio->image }}"
                      alt="First slide"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
              <h3>{{ $portfolio->header }}</h3>
              <h2>{{ $portfolio->price }}</h2>
              <ul class="list">
                <li>
                  <a class="active" href="#">
                    <span>Category</span> : {{ $portfolio->type->name }}</a
                  >
                </li>
                <li>
                  <a href="#"> <span>Availibility</span> : In Stock</a>
                </li>
              </ul>
              <p>{{ $portfolio->subheader }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    @include('frontend.partials.footer')
    @include('frontend.partials.scripts')
</body>

</html>
