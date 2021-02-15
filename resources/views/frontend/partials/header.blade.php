<header class="header_area">
    <div class="top_menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="float-left">
                        <p>{{ $company_detail->company_name }}</p>
                        <p>{{ $company_detail->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light w-100">
                <a class="navbar-brand logo_h" href="{!!  route('landing') !!}">
                    <img src="/storage/logo/{{ $company_detail->logo }}" class="img-fluid" style="height: 50px"
                        alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                    <div class="row w-100 mr-0">
                        <div class="col-lg-8 pr-0">
                            <ul class="nav navbar-nav center_nav pull-right">
                                <li class="{{ Request::is('/') ? 'nav-item active' : 'nav-item' }}">
                                    <a class="nav-link" href="{!!  route('landing') !!}">Home</a>
                                </li>
                                <li class="{{ Request::is('products-list') ? 'nav-item active' : 'nav-item' }}">
                                    <a class="nav-link" href="{!!  route('products.index') !!}">Our Products</a>
                                </li>
                                <li class="{{ Request::is('blogs-front-list') ? 'nav-item active' : 'nav-item' }}">
                                    <a class="nav-link" href="{!!  route('blogs-front.index') !!}">Blog</a>
                                </li>
                                <li class="{{ Request::is('contacts') ? 'nav-item active' : 'nav-item' }}">
                                    <a class="nav-link" href="{!!  route('contacts.index') !!}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
