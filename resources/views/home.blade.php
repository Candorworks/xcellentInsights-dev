@extends("index")
@section("content")
<div class="hero-section">
   <video  class="video-fluid img-fluid" autoplay loop muted>
      <source src="{{ asset('web/videos/slide-02.mp4')}}" type="video/mp4">
   </video>
   <div class="text-section">
      <div class="container">
         <div class="row">
            <div class="col">
               <h1 class="title text-white"><span style="opacity: 0.8; background-color: black;">Industry’s best reports at your<br>fingertips</span></h1>
               <!-- <div class="carousel-caption-2"> -->
               <h4 class="text-white  my-4" style="opacity: 0.8; background-color: black; width: fit-content;">We've got you covered</h4>
               <!-- </div> -->
               <form class="subscribe-form mb-4 pe-5" method="get" action="">
                  <div class="form-group">   
                     <input class="" type="text" autocomplete="off" name="search" placeholder=" Looking for Reports..." autofocus/>
                     <button type="submit"><i class="fas fa-search"></i> </button>
                  </div>
                  <!--  Search -->
               </form>
               <div class="btn-part">
                  <a class="btn get-quote" href="">Get Quote</a>
                  <a class="btn view-report ms-md-2" href="">View Reports</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="welcome-section mt-4">
   <div class="container">
      <div class="row">
         <div class="col welcome-heading text-center mb-5" style="color: #002c60;">
            <h5>Welcome to Xcellent Insights</h5>
            <h2>We are the leading report aggregators</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6">
            <div class="row">
               <div class="col">
                  <p>
                     Our belief is mutual satisfaction as we practice best research methods to satisfy your queries and proceed ahead with the report purchase. At Excellent Insights, we strive to offer our clients the best of our services through market research studies that largely benefits them. We emphasize on assisting the clients to enhance their market position and create potential opportunities for their business.
                  </p>
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-lg-4 report-milestone">
                  <div class="row">
                     <h1 class="fw-bold">20 M</h1>
                  </div>
                  <div class="row">
                     <p style="letter-spacing: 2px; font-weight: 600" >REPORTS</p>
                  </div>
               </div>
               <div class="col-lg-8">
                  <p>
                     Quality-driven research reports with incisive insights enabling you to make better business decisions
                  </p>
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-lg-4 verticals-milestone">
                  <div class="row">
                     <h1 class="fw-bold">100</h1>
                  </div>
                  <div class="row">
                     <p style="letter-spacing: 2px; font-weight: 600" >VERTICALS & SUB VERTICALS</p>
                  </div>
               </div>
               <div class="col-lg-8">
                  <p>
                     Be assured about our consulting services as we understand that every client comes with different needs.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="row">
               <div class="col-lg-6">
                  <div class="row">
                     <div class="col-lg-2">
                        <div class="icon-box">
                           <i class="fas fa-hand-holding-usd"></i>
                        </div>
                     </div>
                     <div class="col-lg-10 ps-4">
                        <h5 style="color: #333;"><b>Accessibility</b></h5>
                        <p >We offer our clients the best of our service and encourage their participation with us in getting them what they want. Client satisfaction is our top priority</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="row">
                     <div class="col-lg-2">
                        <div class="icon-box">
                           <i class="fas fa-cog"></i>
                        </div>
                     </div>
                     <div class="col-lg-10 ps-4">
                        <h5 style="color: #333;"><b>Repository</b></h5>
                        <p>Our repository contains a large database of fact-based reports. Not finding what you want please get in touch and let us know. We'd be happy to assist you on your queries.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mt-5">
               <div class="col-lg-6">
                  <div class="row">
                     <div class="col-lg-2 mr-2">
                        <div class="icon-box">
                           <i class="fas fa-user-tie"></i>
                        </div>
                     </div>
                     <div class="col-lg-10 ps-4">
                        <h5 style="color: #333;"><b>Better Customization</b></h5>
                        <p>You can avail customization before purchasing a report.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="row">
                     <div class="col-lg-2 mr-2">
                        <div class="icon-box">
                           <i class="fas fa-mouse-pointer"></i>
                        </div>
                     </div>
                     <div class="col-lg-10 ps-4">
                        <h5 style="color: #333;"><b>Client Satisfaction</b></h5>
                        <p>We pledge to provide the best service in the information industry.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="customer-testimonials p-4">
   <div class="customer-testimonial-heading text-white text-center">
      <h3>Customer Testimonials</h3>
   </div>
</div>
<div class="services mt-4">
   <div class="container">
      <div class="row">
         <div class="col-lg-4">
            <div class="services-wrap top-selling-reports text-center">
               <div class="row">
                  <div class="icon-box-services col">
                     <img class="light" src="{{ asset('web/icons/services1.png') }}" alt="">
                  </div>
               </div>
               <div class="row">
                  <div class="services-title ">
                     <h6>Top Selling Reports</h6>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="services-wrap latest-report text-center">
               <div class="row">
                  <div class="icon-box-services col">
                     <img class="light" src="{{ asset('web/icons/services2.png') }}" alt="">
                  </div>
               </div>
               <div class="row">
                  <div class="services-title ">
                     <h6>Explore Latest Reports</h6>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="services-wrap verticals text-center">
               <div class="row">
                  <div class="icon-box-services col">
                     <img class="light" src="{{ asset('web/icons/services3.png') }}" alt="">
                  </div>
               </div>
               <div class="row">
                  <div class="services-title ">
                     <h6>Verticals</h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="industry-vertical-wrapper mt-5">
         <div class="row">
            <div class="col-lg-10">
               <div class="industry-vertical-title" style="color: #002c60">
                  <span class="fw-semibold">Industry Reports</span>
                  <h2 class="fw-bold" >Industry Verticals</h2>
               </div>
            </div>
            <div class="col-lg-2">
               <div class="browse-all-btn">
                  <button class="btn" href="">Browse All Verticals</button>
               </div>
            </div>
         </div>
      </div>
      <div class="latest-reports-wrapper mt-5">
         <div class="row">
            <div class="col-lg-10">
               <div class="latest-report-title" style="color: #002c60">
                  <span class="fw-semibold">Industry Reports</span>
                  <h2 class="fw-bold" >Latest Reports</h2>
               </div>
            </div>
            <div class="col-lg-2">
               <div class="browse-all-btn">
                  <button class="btn" href="">Browse All Reports</button>
               </div>
            </div>
         </div>
      </div>
      <div class="top-selling-reports-wrapper mt-5">
         <div class="row">
            <div class="col-lg-10">
               <div class="top-selling-report-title" style="color: #002c60">
                  <span class="fw-semibold">Industry Reports</span>
                  <h2 class="fw-bold" >Top Selling Reports</h2>
               </div>
            </div>
            <div class="col-lg-2">
               <div class="browse-all-btn">
                  <button class="btn" href="">Browse All Reports</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
