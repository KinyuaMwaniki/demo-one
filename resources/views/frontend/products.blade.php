<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>
    <div id="main">

        @include('frontend.partials.header')
    
        <!--================Category Product Area =================-->
    
        <products-component
            :all-products="{{ json_encode($portfolios) }}">
        </products-component>
        
        <!--================End Category Product Area =================-->
    
    </div>
        @include('frontend.partials.footer')
        @include('frontend.partials.scripts')
</body>

</html>
