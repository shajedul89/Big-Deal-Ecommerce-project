<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.pixelstrap.com/bigdeal/html/layout-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 12:25:37 GMT -->
<head>
    @include('frontend.layout.header')
</head>
<body class="bg-light">

<!-- loader start -->
{{-- @include('frontend.layout.partials.preloader') --}}
<!-- loader end -->

<!--header start-->
<header>
@include('frontend.layout.page-header')
</header>
<!--header end-->

@section('page-content')
@show


<!--footer start-->

@include('frontend.layout.footer')
<!--footer end-->


<!-- tap to top -->
@include('frontend.layout.partials.tab-top-button')
<!-- tap to top End -->

<!-- Add to cart bar -->

<!-- Add to cart bar end-->

<!--Newsletter modal popup start-->
{{-- @include('frontend.layout.partials.newsletter') --}}
<!--Newsletter Modal popup end-->



<!-- add to  setting bar  start-->

<!-- Add to setting bar end-->

 <!-- notification product -->
 
{{-- @include('frontend.layout.partials.notification') --}}

  <!-- notification product -->


<!-- latest jquery-->

</body>

<!-- Mirrored from themes.pixelstrap.com/bigdeal/html/layout-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 12:30:55 GMT -->
</html>
