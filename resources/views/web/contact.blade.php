@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(web/images/breadcrums/contact-us.webp);">
        <div class="container pt-5">
            <div class="text-center mt-3">
                <h3 class="breadcrumbs-title  text-white">Contact Us</h3>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="schedule-call-wrapper p-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-call-heading">
                        <h3>SCHEDULE A FREE CONSULTATION</h3>
                    </div>
                </div>
            </div>
            <div class="row py-5 ">
                <div class="col-lg-3">
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
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-3 icon-wrapper">
                            <img src="{{ asset('web/images/contact/icons/2.png') }}" width="60">
                        </div>
                        <div class="col-lg-9 content-part">
                            <h5 class="title">REPORT CONSULTATION</h5>
                            <p class="desc mb-0">Please let us know if you are looking for a consultation prior to the purchase. Kindly connect with our sales representatives to know more about the report.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
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
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-3 icon-wrapper">
                            <img src="{{asset('web/images/contact/icons/4.png')}}" width="60" alt="">
                        </div>
                        <div class="col-lg-9 content-part">
                            <h5 class="title">Report Customization</h5>
                            <p class="desc mb-0">Are you looking for something that we haven’t covered in the report scope? Feel free to contact us and let you know your specific area of interest. Our team will provide you with custom copy of the report based on your exact needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cotact-form-wrapper p-4  mt-5">
            <div class="pb-4 get-in-touch-heading">
                <h2>Get In Touch Today</h2>
            </div>
            <form id="contact-us-form" class="contact-form" method="post" action="{{ route('lead.create') }}">
                @csrf
                <input type="hidden" name="subject" value="Contact Us">
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control shadow-inset" name="name" placeholder="Full Name"
                                required="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-0">
                            <input type="hidden" name="lead_type" id="lead_type_id" value="4">
                            <input type="email" class="form-control shadow-inset" name="email" placeholder=" E-mail"
                                required="">
                        </div>
                    </div>
                    <div class="col-lg-4">
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
                    <div class="col-lg-4">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control shadow-inset" maxlength="12"
                                onkeypress="return isNumber(event)" name="number" placeholder="Contact Number"
                                required="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control shadow-inset" name="job_title"
                                placeholder=" Job Title" required="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control shadow-inset" name="company"
                                placeholder="Company Name" required="">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
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
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <label class="speakWithAnalystValidationText"></label>
                            </div>
                            <div class="col-lg-4">
                                <input type="tel" class="textbox form-control shadow-inset speakWithAnalystValidation"
                                    name="captchainput" placeholder="Ans" style="margin-left: -40px;" />
                                <div class="text-danger fail" style="display: none!important; ">Validation failed</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <div class="justify-content-end form-group contact-form">
                            <button type="submit" class="btn speakWithAnalystSubmitBtn">Submit Now</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="contact-info-wrapper mt-5">
            <div class="row">
                <h2 class="text-center pb-3 contact-info-heading">Contact Information</h2>
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
                        <p>IN: +91 7447700091</p>
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
        <div class="maps-wrapper">
            <div class="row">
                <div class="col">
                    <div class="p-4 mb-5 location-iframe rounded">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.170181753315!2d73.76966751489346!3d18.56636478738232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x765fc8a2f4c295ab!2sXcellent%20Insights%20LLP!5e0!3m2!1sen!2sin!4v1644659344119!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="{{ url('/web/js/numericaptcha.js') }}"></script>
    <script type="application/ld+json">
  {
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement":
  [
  {
  "@type": "ListItem",
  "position": 1,
  "item":
  {
  "type":"Website",
  "@id": "/",
  "name": "Home"
  }
  },
  {
  "@type": "ListItem",
  "position": 2,
  "item":
  {
  "type":"WebPage",
  "@id": "/contact",
  "name": "Contact Us"
  }
  }
  ]
  }
  </script>
@endsection
