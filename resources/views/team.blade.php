@extends("index")

@section("content")
   <div class="breadcrums-container py-5" style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
    <div class="container pt-5">
        <div class="text-center mt-3">
            <h3 class="breadcrumbs-title text-white">Meet Our Team</h3>
        </div>
    </div>
   </div>
   <div class="team-container mt-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="team-heading">
                  <h2 class="team-heading-underline" style="color: #00206c">Our Professionals</h2>
               </div>
               <p>Xcellent Insights represents an intellectually empowered and rationally driven team of focused individuals, striving to work progressively.</p>
            </div>
            <div class="col-lg-6">
               <div class="team-heading">
                  <h2 class="team-heading-underline" style="color: #00206c">Join Us</h2>
               </div>
               <p>Market Research Future with Xcellent Insights</p>
               <div class="team-apply-now-btn">
                  <a class="mt-2" href="{{route("career")}}">Apply Now
                  </a>
               </div>
            </div>
         </div>
         <div class="row justify-content-center mt-5">
            <div class="col-lg-4">
               <div class="team-member-card text-center px-3 py-5">
                  <div class="member-icon-box text-center">
                     <img class="img-fluid" src="{{asset("web/images/team/img1.png")}}" alt="">
                  </div>
                 <h4>Vipin Unni</h4>
                 <h6>Co-Founder & Director</h6>
                 <div class="member-about-btn">
                  <button class="about-btn">About Me</button>
                  <div class="panel-content-team">An insight is nothing without an action. Our top client reports offer actionable insights that encourage you to take timely decisions. Xcellent Insights is a leading reseller in the corporate world where insights are gathered through a large pool of market resources to present in an organized manner. </div>
                 </div>
               </div>
               
            </div>
            <div class="col-lg-4 offset-1">
               <div class="team-member-card text-center px-3 py-5">
                 <div class="member-icon-box">
                   <img class="img-fluid" src="{{asset("web/images/team/img2.png")}}" alt="">
                 </div>
                 <h4>Atul G</h4>
                 <h6>Digital Marketing Manager</h6>
                 <div class="member-about-btn">
                  <button class="about-btn">About Me</button>
                  <div class="panel-content-team">An insight is nothing without an action. Our top client reports offer actionable insights that encourage you to take timely decisions. Xcellent Insights is a leading reseller in the corporate world where insights are gathered through a large pool of market resources to present in an organized manner. </div>
                 </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection