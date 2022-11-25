@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
        <div class="container pt-5">
            <div class="text-center mt-3 mb-5">
                <h3 class="breadcrumbs-title fw-bold text-white">
                    Report Detail
                </h3>
            </div>
        </div>
    </div>

    <div class="report-container mt-n5">
        <div class="container">

            <div class="report-desc p-4">
                <div class="row">
                    <div class="col-lg-2 pe-0">
                        <div class="report-img">
                            <img src="{{ asset('web/' . $report->Category->thumbnail) }}" alt="Image processing"
                                style="width: 150px; height: 170px;">
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="report-content">
                            <h3 class="mb-3" style="color: #002c60">{{ $report->title }}</h3>
                            <p>{!! nl2br(str_replace('_x000D_', ' ', substr($report->description, 0, 200))) !!}...</p>
                            <div class="report-meta py-2">
                                <div class="row justify-content-center">
                                    <p class="col-lg-2">ID: {{ $report->unique_id }}</p>
                                    <p class="col-lg-2">Published: {{ date('M Y', strtotime($report->publish)) }}</p>
                                    <p class="col-lg-2">Pages: {{ $report->pages }}</p>
                                    <p class="col-lg-2">Format: {{ $report->format }}</p>
                                    <p class="col-lg-3">Industry: {{ $report->Category->name }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-5">
                <div class="row">

                    {{-- content side of the report --}}
                    <div class="col-lg-9">
                        <div class="report-content-container p-4">
                            <div class="report-content-menu-container">
                                <div class="row text-center px-4">
                                    <div class="col-lg-2 report-content-menu active" divId="menu1">
                                        <h6>Description</h6>
                                    </div>
                                    <div class="col-lg-1 report-content-menu" divId="menu2">
                                        <h6>TOC</h6>
                                    </div>
                                    <div class="col-lg-2 report-content-menu" divId="menu3">
                                        <h6>Tables &
                                            Figures</h6>
                                    </div>
                                    <div class="col-lg-2 report-content-menu" divId="menu4">
                                        <h6>Companies</h6>
                                    </div>
                                    <div class="col-lg-3 report-content-menu" divId="menu5">
                                        <h6>Speak with
                                            Analyst</h6>
                                    </div>
                                    <div class="col-lg-2 report-content-menu" divId="menu6">
                                        <h6>FAQ</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="report-content px-4 mt-4">
                                <p class="menu-content desc" id="menu1">{!! $report->description !!}</p>
                                <p class="menu-content toc" id="menu2">{!! $report->toc !!}</p>
                                <p class="menu-content tables-figures" id="menu3">{!! $report->table_figures !!}</p>
                                <p class="menu-content companies" id="menu4">{!! $report->companies !!}</p>

                                {{-- speak with analyst form --}}
                                <div class="menu-content speak-with-analyst" id="menu5">
                                    <form id="speak-with-analyst-form" method="post" action="">
                                        @csrf
                                        <h3 style="color: #002c60">Speak with Analyst</h3>
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
                                                    @foreach ($countries as $item)
                                                        <option value="{{ $item->sort_name }}">{{ $item->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="number" class="form-control shadow-inset" name="number"
                                                        placeholder="Phone No. without Country code.." required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control shadow-inset"
                                                        name="job_title" placeholder="Job Title" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control shadow-inset"
                                                        name="company" placeholder="company name" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea class="form-control shadow-inset" name="description" placeholder="Your Message Here" required=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <div class="form-group mt-3">

                                                    <div class="g-recaptcha"
                                                        data-sitekey="6Lf4uisjAAAAALKzirLZbJrXDevMeUHE85YWOqKe"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 ">
                                            <div class="submit-btn mt-4 text-end">
                                                <button type="submit" class="cta-btn px-3"
                                                    id="speakWithAnalystSubmitBtn">Submit Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="menu-content faq" id="menu6">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Which regions are covered in the market report?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse "
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">The market research report includes specific
                                                    segments by region (country), i.e.
                                                    North America, Europe, Asia Pacific,
                                                    South America, Middle East and Africa
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="true"
                                                    aria-controls="collapseTwo">
                                                    What are the benefits of the market analysis report?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse "
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">The market report provides global companies
                                                    with an opportunity to enter new
                                                    markets, invest in new sectors, analyze
                                                    consumer reactions, investigate global competition, and ultimately make
                                                    smart investments.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="true"
                                                    aria-controls="collapseThree">
                                                    What are the Recent Developments and Latest Happenings in Industry?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse "
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">This report covers the latest market
                                                    developments in terms of acquisitions,
                                                    growth strategies, joint ventures and
                                                    collaborations, new product launches, and more on industry.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="true"
                                                    aria-controls="collapseFour">
                                                    Can I get customise market report?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse "
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">We can provide customization on reports prior
                                                    to the sale. If you need
                                                    customization we request you to provide specific
                                                    details on customization prior to the dispatch. This is because we move
                                                    fast with your queries as it
                                                    requires a lot of
                                                    diligence. There will be additional charges for customization once the
                                                    report is dispatched to you and
                                                    will be treated
                                                    as post-sales query.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFive" aria-expanded="true"
                                                    aria-controls="collapseFive">
                                                    How can I get the market sample report?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse "
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">Requesting a Sample copy of the report from
                                                    Xcellent Insights is hassle-free!
                                                    You can either request it from the report
                                                    page or call our sales Executive at US: +1 408 627 7717 /UK: +44 208 638
                                                    6439 and share/discuss your
                                                    requirements. Our
                                                    Team will share the sample copy of the report with you within 12 Working
                                                    Hours / Shortly.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSix" aria-expanded="true"
                                                    aria-controls="collapseSix">
                                                    How can I purchase this market report?
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse collapse "
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">Ordering a report from Xcellent Insights is
                                                    hassle-free! You can select a
                                                    licence type that suits your requirement and
                                                    proceed to checkout. It will redirect you to the payment gateway with a
                                                    list of payment options. Be rest
                                                    assured that we
                                                    do not store the payment details. Once we receive the payment, a
                                                    confirmation email will be sent on your
                                                    registered mail
                                                    id with details on the report delivery timeline. You can also get your
                                                    order placed through our business
                                                    development
                                                    executives and they will guide you thoroughly.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSeven" aria-expanded="true"
                                                    aria-controls="collapseSeven">
                                                    Why Should You Buy This Report from Xcellent Insights?
                                                </button>
                                            </h2>
                                            <div id="collapseSeven" class="accordion-collapse collapse "
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul
                                                        style="list-style-type: disc !important; padding-left:1em !important; margin-left:1em;">
                                                        <li> You should buy this report from Xcellent Insights for a better
                                                            clarity on market scenarios. </li>
                                                        <li> The market report has been prepared using a pragmatic approach
                                                            to suit your needs. </li>
                                                        <li> We have an extensive library of reports that can help you
                                                            understand the market landscape and
                                                            make informed
                                                            decisions about your business. </li>
                                                        <li> Additionally, the reports are written by experienced analysts
                                                            who have a deep understanding of
                                                            the market and
                                                            the latest trends.</li>
                                                        <li> Besides, customization is a value-added service if you decide
                                                            to opt.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- discount and price side of the report --}}
                    <div class="col-lg-3">
                        <div class="report-sidebar p-4">
                            <div class="request-preorder-discount">
                                <div class="row mb-4">

                                    <a href="" class="request blink">
                                        <i class="fas fa-paper-plane mr-5" aria-hidden="true"></i>
                                        <h6>Request Free PDF Sample</h6>
                                    </a>

                                </div>
                                <div class="row mb-4">

                                    <a href="" class="pre-order">
                                        <i class="fas fa-envelope mr-5" aria-hidden="true"></i>
                                        <h6>Pre-Order Enquiry</h6>
                                    </a>

                                </div>
                                <div class="row">

                                    <a href="" class="discount">
                                        <i class="fas fa-tags mr-5" aria-hidden="true"></i>
                                        <h6>Check Today's Discount</h6>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="check-report-price mt-5">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingPrice">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsePrice"
                                            aria-expanded="true" aria-controls="collapsePrice">
                                            Check Report Price
                                        </button>
                                    </h2>
                                    <div id="collapsePrice" class="accordion-collapse collapse"
                                        aria-labelledby="headingPrice" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-group individual-report-price  justify-content-around">
                                                <input type="radio" id="single" value="single" name="price1"
                                                    checked="selected">
                                                <label for="single">Single User License </label><span>$4000</span>
                                            </div>
                                            <div class="form-group individual-report-price justify-content-around">
                                                <input type="radio" id="multi" value="multi" name="price1">
                                                <label for="multi" style="width: 138px;">Multi User License</label>
                                                <span>$6000</span>
                                            </div>
                                            <div class="form-group individual-report-price justify-content-around">
                                                <input type="radio" id="enterprise" value="enterprise" name="price1">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="why-choose-us mt-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h6 class="m-0">Why Choose Us</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul>
                                    <li class="reason-to-choose-us">Extensive Library of Reports.</li>
                                    <li class="reason-to-choose-us">Identify the clients' needs.</li>
                                    <li class="reason-to-choose-us">Pragmatic Research Approach.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul>
                                    <li class="reason-to-choose-us">Clarity on Market Scenarios.</li>
                                    <li class="reason-to-choose-us">Tailor-Made Solutions.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul>
                                    <li class="reason-to-choose-us">Expert Analysts Team.</li>
                                    <li class="reason-to-choose-us">Competitive and Fair Prices.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="clientele mt-5">
                <div class="card client-logos">
                    <div class="card-header text-center">
                        <h6 class="m-0">Clientele</h6>
                    </div>
                    <div class="card-body">
                        <div class="owl-carousel owl-theme" id="client-logo-carousel">
                            <img src="{{ asset('web/images/home/client-logos/ABB2.webp') }}" alt="Image Processing">
                            <img src="{{ asset('web/images/home/client-logos/BASF.webp') }}" alt="Image Processing">
                            <img src="{{ asset('web/images/home/client-logos/Bosch.png') }}" alt="Image Processing">
                            <img src="{{ asset('web/images/home/client-logos/Dow-1.webp') }}" alt="Image Processing">
                            <img src="{{ asset('web/images/home/client-logos/Emerson.webp') }}" alt="Image Processing">
                            <img src="{{ asset('web/images/home/client-logos/Fiserv.webp') }}" alt="Image Processing">
                            <img src="{{ asset('web/images/home/client-logos/Fujitsu2.webp') }}" alt="Image Processing">
                            <img src="{{ asset('web/images/home/client-logos/Harman.webp') }}" alt="Image Processing">
                            <img src="{{ asset('web/images/home/client-logos/HP.webp') }}" alt="Image Processing">
                            <img src="{{ asset('web/images/home/client-logos/Intel.webp') }}" alt="Image Processing">
                            <img src="{{ asset('web/images/home/client-logos/kaneka.png') }}" alt="Image Processing">
                            <img src="{{ asset('web/images/home/client-logos/LG.webp') }}" alt="Image Processing">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    {{-- report tab switching logic --}}
    <script>
        $(".report-content-menu").on("click", function() {
            $(".menu-content").hide();

            var divId = $(this).attr("divId");

            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $("#" + divId).hide();
            } else {
                $(".report-content-menu").removeClass("active");
                $(this).addClass("active");
                $("#" + divId).show();
            }
        });
    </script>

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
                center: true,
                dots: false,
                autoplayHoverPause: true
            });

            $('#client-logo-carousel').trigger('play.owl.autoplay', [2000]);

            function setSpeed() {
                $('#client-logo-carousel').trigger('play.owl.autoplay', [5000]);
            }
            setTimeout(setSpeed, 0);
        });
    </script>
    <script>
        $("#speak-with-analyst-form").validate({
            errorClass: "error-class",
            validClass: "valid-class",
            errorElement: "span",
            rules: {
                fname: "required",
                lname: "required",
                company: "required",
                email: "required",
                number: {
                    required: true,
                    number: true
                },
                description: "required",
                job_title: "required",
                country: "required"
            },
            messages: {
                fname: "First Name is required",
                lname: "Last Name is required",
                company: "Company is required",
                email: "Email is required",
                number: {
                    required: "Number is required",
                    number: "Please enter numbers only"
                },
                description: "Description is required",
                job_title: "Job Title is required",
                country: "Country is required"
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },
            submitHandler: function(form) {
                var v = grecaptcha.getResponse();
                if (v.length == 0) {
                    alert('Please verify that you are not a robot.');
                    return false;
                } else {
                    form.submit();
                    return true;
                }
            }
        });
    </script>
@endsection
