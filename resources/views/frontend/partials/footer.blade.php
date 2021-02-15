<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 offset-md-2 single-footer-widget">
                <h4>{{ $company_detail->company_name }}</h4>
                <ul>
                    <li><a href="#">{{ $company_detail->address }}</a></li>
                    <li><a href="#">{{ $company_detail->mobile }}</a></li>
                    <li><a href="#">{{ $company_detail->email }} </a></li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-5 single-footer-widget">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{!!  route('products.index') !!} " target="_blank">Products</a></li>
                    <li><a href="{!!  route('contacts.index') !!}" target="_blank">Contact Us</a></li>
                    <li><a href="{!!  route('login') !!}" target="_blank">Staff Login</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom row align-items-center">
            <p class="footer-text m-0 col-lg-8 col-md-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());

                </script> {{ $company_detail->company_name }}. All rights reserved | This template is made with <i class="fa fa-heart-o"
                    aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Sifa</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-md-12 footer-social">
                <a href="http://{{ $company_detail->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="http://{{ $company_detail->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="http://{{ $company_detail->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
