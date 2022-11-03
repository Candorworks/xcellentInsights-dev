@extends("index")

@section("content")
   <div class="breadcrums-container py-5" style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellent-insights/public/web/images/breadcrums/contact-us.jpg);">
    <div class="container pt-5">
        <div class="text-center mt-3">
            <h3 class="breadcrumbs-title  fw-bold text-white">Contact Us</h3>
        </div>
    </div>
   </div>
   <div class="container mt-5">
      <div class="schedule-call-wrapper p-4">
         <div class="row">
            <div class="col-lg-12">
               <div class="schedule-call-heading">
                  <h3 class="fw-bold">SCHEDULE A FREE CONSULTATION</h3>
               </div>
            </div>
         </div>
         <div class="row py-5 ">
            <div class="col-lg-4">
               <div class="row">
                  <div class="col-lg-3 icon-wrapper">
                     <img src="{{ asset('web/images/contact/icons/1.png') }}" width="60">
                  </div>
                  <div class="col-lg-9 content-part">
                     <h5 class="title">AVAILABLE 24/5</h5>
                     <p class="desc mb-0">You can call us anytime for assistance between Monday and Friday.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="row">
                  <div class="col-lg-3 icon-wrapper">
                     <img src="{{ asset('web/images/contact/icons/2.png') }}" width="60">
                  </div>
                  <div class="col-lg-9 content-part">
                     <h5 class="title">REPORT CONSULTATION</h5>
                     <p class="desc mb-0">Please let us know if you are looking for consultation prior to purchase. Please connect with our sales representative for more details.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="row">
                  <div class="col-lg-3 icon-wrapper">
                     <img src="{{ asset('web/images/contact/icons/3.png') }}" width="60">
                  </div>
                  <div class="col-lg-9 content-part">
                     <h5 class="title">SAMPLE REPORT</h5>
                     <p class="desc mb-0">You can request a sample of the report you wish to buy.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="cotact-form-wrapper p-4  mt-5">
         <div class="pb-4 get-in-touch-heading">
            <h2 class="fw-bold">Get In Touch Today</h2>
         </div>
         <form id="contact-us-form" class="contact-form" method="post" action="">
            @csrf
            <div class="row mb-3">
               <div class="col-md-4">
                     <div class="form-group">
                        <input type="text" class="form-control shadow-inset" name="name" placeholder="Full Name" required="">
                     </div>
               </div>
               <div class="col-md-4">
                     <div class="form-group mb-0">
                        <input type="email" class="form-control shadow-inset" name="email" placeholder=" E-mail" required="">
                     </div>
               </div>
               <div class="col-md-4">
                     <div class="form-group mb-0">
                        <select name="country" class="form-control shadow-inset" required>
                           <option disabled selected>Select country</option>
                           {{-- @foreach ($countries as $item)
                                 <option value="{{ $item->sort_name}}">{{ $item->name}} </option>
                           @endforeach --}}
                           
                        </select>
                     </div>
               </div>
            </div>
            <div class="row mb-3">
               <div class="col-md-4">
                     <div class="form-group mb-0">
                        <input type="text" class="form-control shadow-inset" maxlength="12" onkeypress="return isNumber(event)" name="number" placeholder="Contact Number" required="">
                     </div>
               </div>
               <div class="col-md-4">
                     <div class="form-group mb-0">
                        <input type="text" class="form-control shadow-inset" name="job_title" placeholder=" Job Title" required="">
                     </div>
               </div>
               <div class="col-md-4">
                     <div class="form-group mb-0">
                        <input type="text" class="form-control shadow-inset" name="company" placeholder="Company Name" required="">
                     </div>
               </div>
            </div>
            <div class="row mb-3">
               <div class="col-md-12">
                     <div class="form-group mb-0">
                        <textarea name="description" class="form-control shadow-inset" placeholder="Your Message" required=""></textarea>
                     </div>
               </div>
            </div>
            <div class="row form-group align-items-center">
               <div class="col-lg-6 ">
                  <div class="row">
                     <div class="col">
                        <p>Are you Human?</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-2">
                        <label id="speakWithAnalystValidationText"></label>
                     </div>
                     <div class="col-lg-4">
                        <input type="tel" class="textbox form-control shadow-inset" id="speakWithAnalystValidation" name="captchainput" placeholder="Ans" />
                        <div class="text-danger" id="fail" style="display: none!important;">Validation failed</div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 text-right">
                  <div class="justify-content-end form-group">
                     <button type="submit" class="btn submit-btn">Submit Now</button>
                  </div>
               </div>
               {{-- <div class="col-lg-12 text-right">
               </div> --}}
            </div>
         </form>
      </div>
      <div class="contact-info-wrapper mt-5">
         <div class="row">
            <h2 class="text-center pb-3 contact-info-heading" style="font-weight: lighter;">Contact Information</h2>
            <div class="col-lg-3 text-center">
                <div class="icon-box mb-4">
                    <div class="icon-shape rounded-circle mb-4">
                        <span class="fas fa-map-marker-alt"></span>
                    </div>
                    <h4 class="icon-box-title">Visit us (US)</h4>
                    <span>NY, New York City - Broad Street (HQ)
                                80 Broad Street 5th Floor, <br>
                                New York City 10004</span>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="icon-box mb-4">
                    <div class="icon-shape rounded-circle mb-4">
                        <span class="fas fa-map-marker-alt"></span>
                    </div>
                    <h4 class="icon-box-title">Visit us (India)</h4>
                    <span> 6th Floor, Amar Paradigm Sr No. 110, 11/3, Veerbhadra Nagar Rd, <br>
                            opp. Croma, Baner, Pune, Maharashtra 411045</span>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="icon-box mb-4">
                    <div class="icon-shape rounded-circle mb-4">
                        <span class="fas fa-headphones-alt"></span>
                    </div>
                    <h4 class="icon-box-title">Call</h4>
                    <p>US: +1 408 627 7717</p>
                    <p>UK: +44 208 638 6439</p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="icon-box mb-4">
                    <div class="icon-shape rounded-circle mb-4">
                        <span class="far fa-paper-plane"></span>
                    </div>
                    <h4 class="icon-box-title">Email</h4>
                    <p>support@xcellentinsights.com</p>
                    <p>info@xcellentinsights.com</p>
                </div>
            </div>
        </div>
      </div>
   </div>
   @endsection
   @section('script')
   <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
   <script src="{{url('/web/js/numericaptcha.js')}}"></script>
   @endsection