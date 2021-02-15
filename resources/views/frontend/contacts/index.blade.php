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
                            <h2>Contact Us</h2>
                            <p>Get in touch for any queries</p>
                        </div>
                        <div class="page_link">
                            <a href="#">Home</a>
                            <a href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <contact-component></contact-component>
                    </div>

                    <div class="col-lg-4">
                        <div class="media contact-info">
                            <div class="media-body">
                                <h3>{{ $company_detail->address }}</h3>
                                <p>Visit us</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <div class="media-body">
                                <h3>{{ $company_detail->mobile }}</h3>
                                <p>Call Us</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <div class="media-body">
                                <h3>{{ $company_detail->email }}</h3>
                                <p>Email Us</p>
                            </div>
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
