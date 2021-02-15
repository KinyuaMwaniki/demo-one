<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>
    <div id="main">
        @include('frontend.partials.header')
        <products-component
            :all-products="{{ json_encode($portfolios) }}"
            :types="{{ json_encode($types) }}">
        </products-component>
    </div>
        @include('frontend.partials.footer')
        @include('frontend.partials.scripts')
</body>

</html>
