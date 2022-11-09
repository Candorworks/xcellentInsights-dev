<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @include("style")
   <title>Xcellent Insights</title>
</head>
<body>
   <div class="container-fluid pt-3 header-wrapper">
      @include('header')
   </div>
   
   <main>
      @yield("content")
   </main>
   
   <div class="footer-wrapper">
      @include('newsletter')
      @include('footer')
   </div>
   <div class="scrollUp">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
   </div>
   <div class="get-in-touch">
      <a href="#">Get in Touch</a>
   </div>
</body>
<script src="{{asset('/web/js/script.js')}}"></script>
@yield('script')
</html>