@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
        <div class="container pt-5">
            <div class="text-center mt-3 mb-5">
                <h3 class="breadcrumbs-title fw-bold text-white">
                    Enquire Before Buying
                </h3>
            </div>
        </div>
    </div>

    <div class="enquier-before-buying-container">
        <div class="container">
            <div class="report-desc p-4">
                <div class="row">
                    <div class="col-lg-2 pe-0">
                        <div class="report-img">
                            <img src="{{ asset('web/category/1646668183.webp') }}" alt="Image processing"
                                style="width: 150px; height: 170px;">
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="report-content">
                            <h3 class="mb-3" style="color: #002c60">sample title</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis deserunt iusto cupiditate
                                voluptate rem eum minima cumque voluptatibus harum quaerat officiis soluta nulla, reiciendis
                                amet enim voluptas esse laborum necessitatibus!Eveniet mollitia distinctio, vitae earum
                                officiis nobis. Deleniti voluptates quos corporis tempore magni, beatae minus quo
                                necessitatibus facere voluptatibus dolores error nulla repellat. Temporibus culpa ea ad
                                voluptatum mollitia neque?</p>
                            <div class="report-meta py-2">
                                <div class="row justify-content-center">
                                    <p class="col-lg-2">ID: </p>
                                    <p class="col-lg-2">Published: </p>
                                    <p class="col-lg-2">Pages: </p>
                                    <p class="col-lg-2">Format: </p>
                                    <p class="col-lg-3">Industry: </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div class="row ">

                    {{-- content side of the report --}}
                    <div class="col-lg-9 ">
                        <div class="enquiry-section pb-5">
                            <div class="get-free-pdf p-3 text-center">
                                <h4 class="mt-2 text-white">Get Free PDF Sample</h4>
                            </div>

                            {{-- our clientele section --}}
                            <div class="clientele mt-4 mx-5">
                                <div class="clientele-container">
                                    <div class="text-center">
                                        <p class="m-0">Our Clientele</p>
                                    </div>
                                    <div class="clientele-img ">
                                        <div class="owl-carousel owl-theme py-1" id="client-logo-carousel">
                                            <img src="{{ asset('web/images/home/client-logos/ABB2.webp') }}"
                                                alt="Image Processing">
                                            <img src="{{ asset('web/images/home/client-logos/BASF.webp') }}"
                                                alt="Image Processing">
                                            <img src="{{ asset('web/images/home/client-logos/Bosch.png') }}"
                                                alt="Image Processing">
                                            <img src="{{ asset('web/images/home/client-logos/Dow-1.webp') }}"
                                                alt="Image Processing">
                                            <img src="{{ asset('web/images/home/client-logos/Emerson.webp') }}"
                                                alt="Image Processing">
                                            <img src="{{ asset('web/images/home/client-logos/Fiserv.webp') }}"
                                                alt="Image Processing">
                                            <img src="{{ asset('web/images/home/client-logos/Fujitsu2.webp') }}"
                                                alt="Image Processing">
                                            <img src="{{ asset('web/images/home/client-logos/Harman.webp') }}"
                                                alt="Image Processing">
                                            <img src="{{ asset('web/images/home/client-logos/HP.webp') }}"
                                                alt="Image Processing">
                                            <img src="{{ asset('web/images/home/client-logos/Intel.webp') }}"
                                                alt="Image Processing">
                                            <img src="{{ asset('web/images/home/client-logos/kaneka.png') }}"
                                                alt="Image Processing">
                                            <img src="{{ asset('web/images/home/client-logos/LG.webp') }}"
                                                alt="Image Processing">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- free PDF form --}}
                            <div class="free-pdf-form mx-5">
                                <form id="free-pdf-form" method="post" action="">
                                    @csrf
                                    <div class="row mb-3 mt-4">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="hidden" name="lead_type" value="">
                                                <input type="hidden" name="report_id" value="">
                                                <div class="row">
                                                    <div class="col-lg-6 pe-0">
                                                        <input type="text" class="form-control shadow-inset"
                                                            name="fname" placeholder="First name" required="">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control shadow-inset"
                                                            name="lname" placeholder="Last Name" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control shadow-inset" name="email"
                                                    placeholder="email" required="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <select name="country" class="form-control shadow-inset" required>
                                                <option value="" disabled selected hidden>Select country</option>
                                                {{-- @foreach ($countries as $item)
                                                    <option value="{{ $item->sort_name }}">{{ $item->name }}</option>
                                                @endforeach --}}

                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control shadow-inset" name="number"
                                                    placeholder="Phone No. " required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control shadow-inset" name="job_title"
                                                    placeholder="Job Title" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control shadow-inset" name="company"
                                                    placeholder="company name" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control shadow-inset" name="description" placeholder="Share your Requirements(if any)"
                                                    required=""></textarea>
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
                                                    <input type="tel"
                                                        class="textbox form-control shadow-inset speakWithAnalystValidation"
                                                        name="captchainput" placeholder="Ans"
                                                        style="margin-left: -20px;" />
                                                    <div class="text-danger fail" style="display: none!important; ">
                                                        Validation failed</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="submit-btn mt-4 text-center">
                                            <button type="submit" class="cta-btn px-3"
                                                id="speakWithAnalystSubmitBtn">Submit
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-center mt-3 text-muted">
                                        <small>We ensure complete secrecy of your personal details. <a
                                                href="{{ route('privacy') }}" style="color: #002c60">Privacy
                                                Policy</a></small>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    {{-- discount and price side of the report --}}
                    <div class="col-lg-3">
                        <div class="enquire-before-sidebar ">
                            <div class="check-report-price-enquiry card">
                                <h5 class="card-header text-center py-3" id="headingPrice" style="color: #002c60">
                                    Check Report Price
                                </h5>
                                <div class="p-3">
                                    <div class="form-group individual-report-price  justify-content-around">
                                        <input type="radio" id="single" value="single" name="price"
                                            checked="selected">
                                        <label for="single">Single User License
                                        </label><span>$4000</span>
                                    </div>
                                    <div class="form-group individual-report-price justify-content-around">
                                        <input type="radio" id="multi" value="multi" name="price">
                                        <label for="multi" style="width: 138px;">Multi User License</label>
                                        <span>$6000</span>
                                    </div>
                                    <div class="form-group individual-report-price justify-content-around">
                                        <input type="radio" id="enterprise" value="enterprise" name="price">
                                        <label for="enterprise" style="width: 138px;">Enterprise License
                                        </label><span>$8000</span>
                                    </div>


                                </div>
                                {{-- buy now button --}}
                                <div class="report-buy-now text-center p-3">
                                    <button type="submit">
                                        <i class="fa fa-shopping-cart me-2" aria-hidden="true"></i>
                                        Buy Now
                                    </button>
                                </div>
                            </div>

                            {{-- quick contacts --}}
                            <div class="quick-contact-container mt-5">
                                <div class="quick-contact card">
                                    <h5 class="card-header text-center py-3" id="headingPrice" style="color: #002c60">
                                        Quick Contacts
                                    </h5>
                                    <div class="card-body p-0 text-center" style="box-shadow: none">
                                        <div class="numbers pt-3" style="color: #002c60">
                                            <i class="fa fa-phone fa-xl" aria-hidden="true"></i>
                                            <p>IN: +91 7447700091</p>
                                            <p>US: +1 408 627 7717</p>
                                            <p>UK: +44 208 638 6439</p>
                                        </div>
                                        <div class="email-id pt-2" style="color: #002c60">
                                            <i class="fa fa-at fa-xl" aria-hidden="true"></i>
                                            <p>sales@xcellentinsights.com</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                {{-- client testimonial section --}}
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="card client-testimonials">
                            <div class="card-header client-testimonial-heading text-center">
                                <h4 style="color: #002c60">Our Client's Testimonials</h4>
                            </div>
                            <div class="m-3 card-body owl-carousel owl-theme" id="testi">
                                <div class="individual-testimonial">
                                    <div class="testimonial-content-part">
                                        <div class="icon-part">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        <p class="testimonial-desc">Our organization was interested in learning more about
                                            the market trends for
                                            chemicals domain. We contacted Xcellent Insights and the results did not
                                            disappoint. We got our
                                            queries resolved with better insights from the market perspective. Besides,
                                            their market
                                            intelligence is amicable and worth relying. We would not hesitate to connect
                                            again.</p>
                                        <div class="posted-by">
                                            <div class="user text-center">
                                                <span class="designation">~ Vice President,Food & Beverages Company</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="individual-testimonial">
                                    <div class="testimonial-content-part">
                                        <div class="icon-part">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        <p class="testimonial-desc">Xcellent insights has been proactive and diligent with
                                            our queries. Their
                                            expertise in the market research industry is one that everyone should look for.
                                            Their end-to-end
                                            involvement has been instrumental in achieving the key objectives to amplify our
                                            business goals.</p>
                                        <div class="posted-by">
                                            <div class="user text-center">
                                                <span class="designation">~ Vice President, Marketing, Leading Chemicals &
                                                    Materials Company</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="individual-testimonial">
                                    <div class="testimonial-content-part">
                                        <div class="icon-part">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        <p class="testimonial-desc">Their service was great and I got all my queries
                                            answered in no time. I got
                                            a better report full of information I was looking for. It really helped me
                                            understand the market
                                            scenario and the driving forces.</p>
                                        <div class="posted-by">
                                            <div class="user text-center">
                                                <span class="designation">~ Director of Research & development, Electronics
                                                    &
                                                    Semiconductors Company</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="individual-testimonial">
                                    <div class="testimonial-content-part">
                                        <div class="icon-part">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        <p class="testimonial-desc">I am happy to share my experience with Mona. She was
                                            patient and showed a
                                            better understanding to the details of my query. In fact, she did an excellent
                                            job than expected. We
                                            carried out a project with her and turned out to be pretty well in terms of
                                            gaining the benefits.
                                        <div class="posted-by">
                                            <div class="user text-center">
                                                <span class="designation">~ Product Manager, Heavy Machinery &
                                                    Equipment</span>
                                            </div>
                                        </div>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ url('/web/js/numericaptcha.js') }}"></script>

    {{-- clientele --}}
    <script>
        $(document).ready(function() {
            $('#client-logo-carousel').owlCarousel({
                loop: true,
                items: 5,
                autoplay: true,
                slideTransition: 'linear',
                autoplaySpeed: 5000,
                smartSpeed: 5000,
                dots: false,
            });

            $('#testi').owlCarousel({
                loop: true,
                items: 1,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true
            })
        });
        $('#enquiry-form').on('submit', function() {
            if ($('#enquiry-form').valid()) {
                $('#speakWithAnalystSubmitBtn').prop('disabled', true);
            }
        });
    </script>

    {{-- customer testimonial carousel --}}
    {{-- <script>
        $(document).ready(function() {

        });
    </script> --}}
@endsection
@endsection
