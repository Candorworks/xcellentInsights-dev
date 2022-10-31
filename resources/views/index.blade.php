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
<script src="{{asset('/web/js/script.js')}}"></script>
</body>
</html>