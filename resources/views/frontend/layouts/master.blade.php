<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog | @yield('front_title') </title>
    @include('frontend.layouts.inc.style')
</head>

<body>


  <!-- header-area start -->
    @include('frontend.layouts.inc.header')
  <!-- header-area end -->

    <!-- .breadcumb-area start -->
    @include('frontend.layouts.inc.breadcumb')
    <!-- .breadcumb-area end -->

    <!-- blog-area start -->
    <div class="blog-area">
        @yield('user_content')
    </div>
    <!-- blog-area end -->

    <!-- .footer-area start -->
    @include('frontend.layouts.inc.footer')
    <!-- .footer-area end -->


   @include('frontend.layouts.inc.script')
</body>


<!-- Mirrored from themepresss.com/tf/html/tohoney/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 03:35:41 GMT -->
</html>
