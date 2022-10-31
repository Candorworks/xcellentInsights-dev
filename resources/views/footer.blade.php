<div class="container pt-5">
   <footer class="footer">
      <div class="row">
         <div class="col-lg-4">
            <div class="footer-logo my-4">
               <img src="{{ asset('web/images/logo-white.png') }}" alt="footer-logo" width="120">
            </div>
            <div class="footer-description my-4">
               Xcellent Insights is the collaborator for business reports. We engage in data clustering and aggregation.
            </div>
            <div class="footer-payment my-4">
               <img src="{{ asset('web/images/payment-logos.png') }}" alt="payment-logo">
            </div>
         </div>
         <div class="col-lg-2">
            <h5 class="widget-title">Quick Links</h5>
            <ul class="footer-widget-links ps-0">
               <li><a href="{{route('home')}}"><span>Home</span></a></li>
               <li><a href="{{route('industry')}}"><span>Industry Vertical</span></a></li>
               <li><a href="{{route('report')}}"><span>Report Hub</span></a></li>
               <li><a href="{{route('partner')}}"><span>Partner With Us</span></a></li>
               <li><a href="{{route('about')}}"><span>About Us</span></a></li>
               <li><a href="{{route('contact')}}"><span>Contact Us</span></a></li>
            </ul>
         </div>
         <div class="col-lg-2">
            <h5 class="widget-title">Information</h5>
               <ul class="footer-widget-links ps-0">
                  <li><a href="{{ route('faq') }}"><span>Faq's</span></a></li>
                  <li><a href="{{ route('order') }}"><span>How To Order</span></a></li>
                  <li><a href="{{ route('privacy') }}"><span>Privacy Policy</span></a></li>
                  <li><a href="{{ route('terms') }}"><span>Terms of Use</span></a></li>
                  <li><a href="{{ route('sitemap') }}"><span>HTML Sitemap</span></a></li>
                  <li><a href="{{ route('agreement') }}"><span>Purchase &amp; Licensing      Agreement</span></a></li>
               </ul>
         </div>
         <div class="col-lg-4">
            <h5 class="widget-title">Contact Info</h5>
            <div class="container address-widget ps-0">
               <div class="row">
                  <div class="col-lg-1 px-0">
                     <i class="fa-solid fa-map-location-dot"></i>
                  </div>
                  <div class="col-lg-11 desc">
                     <p>NY, New York City - Broad Street (HQ) <br> 80 Broad Street 5th Floor <br> New York City 10004</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-1 px-0">
                     <i class="fa-solid fa-phone-volume"></i>
                  </div>
                  <div class="col-lg-11 desc">
                     <p>US: +1 408 627 7717</p> 
                     <p>UK: +44 208 638 6439</p>
                  </div>
               </div>
               <div class="row ">
                  <div class="col-lg-1 px-0">
                  <i class="fa-solid fa-envelope"></i>
                  </div>
                  <div class="col-lg-11 desc">
                     <a href="mailto:support@xcellentinsights.com" class="footer-email">support@xcellentinsights.com</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row footer-bottom py-3 ">
         <div class=" col-lg-6 copyright px-0">
            <p>&copy; Copyright <?php echo date("Y"); ?> Xcellent Insights. All Rights Reserved.</p>
         </div>
         <div class="col-lg-6 px-0">
            <ul class="footer-social ">
               <li><a href="https://www.facebook.com/xcellentinsights/" target="_blank" rel="nofollow noopener"><i class="fab fa-facebook"></i></a></li>
               <li><a href="https://twitter.com/XcellentInsight" target="_blank" rel="nofollow noopener"><i class="fab fa-twitter"></i></a></li>
               <li><a href="https://www.pinterest.com/xcellentinsights/" target="_blank" rel="nofollow noopener"><i class="fab fa-pinterest-p"></i></a></li>
               <li><a href="https://www.linkedin.com/company/xcellent-insights" target="_blank" rel="nofollow noopener"><i class="fab fa-linkedin"></i></a></li>
            </ul>
         </div>
      </div>
   </footer>
</div>