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
   <div class="zsiq_floatmain zsiq_theme1 siq_bR" data-id="zsalesiq" >
      <div id="zsiq_float" class="zsiq_float ">
         <div class="zsiq_flt_rel">
            <em id="zsiq_agtpic" class="zsiq_user siqicon siqico-chat"></em>
            <div id="titlediv" class="zsiq_cnt" style="display: block;">
               <div id="zsiq_maintitle" class="zsiq_ellips" title="We're Online!">We're Online!
                  </div>
                  <p id="zsiq_byline" class="zsiq_ellips" title="How may I help you today?">How may I help you today?</p>
                  <em class="siqico-close"></em>
               </div>
               <em id="zsiq_unreadcnt" class="zsiq_unrdcnt" style="display: none;"></em>
               <em id="zsiq_avcall" class="zsiqmin_unrdcnt zsiq_unrdcnt siqico-mincall" style="display: none;"></em>
            </div>
         </div>
      </div>
</body>
<script src="{{asset('/web/js/script.js')}}"></script>
@yield('script')
</html>