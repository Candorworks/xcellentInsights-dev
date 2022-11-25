@extends('web.include.index')

@section('content')
    <style>
        .footer-newsletter {
            display: block;
        }
    </style>
    <div class="hero-section">
        <video class="video-fluid" autoplay loop muted style="height: auto; width: 100%" <source
            src="{{ asset('web/videos/slide-02.mp4') }}" type="video/mp4">
        </video>
        <div class="text-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="title text-white"><span>Industry’s best
                                reports at your<br>fingertips</span></h1>
                        <!-- <div class="carousel-caption-2"> -->
                        <h4 class="text-white my-4">
                            We've got you covered</h4>
                        <!-- </div> -->
                        <form class="subscribe-form mb-4 pe-5" method="post" action="{{ route('reportSeacrhByTitle') }}">
                            @csrf
                            <div class="form-group">
                                <input class="" type="text" autocomplete="off" name="homepagesearch"
                                    placeholder=" Looking for Reports..." autofocus />
                                <button type="submit"><i class="fas fa-search"></i> </button>
                            </div>
                            <!--  Search -->
                        </form>
                        <div class="btn-part">
                            <a class="btn get-quote" href="{{ route('contact') }}">Get Quote</a>
                            <a class="btn view-report ms-md-2" href="{{ route('report') }}">View Reports</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- welcome section --}}
    <div class="welcome-section my-4">
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
                                Our belief is mutual satisfaction as we practice best research methods to satisfy your
                                queries and proceed ahead with the report purchase. At Excellent Insights, we strive to
                                offer our clients the best of our services through market research studies that largely
                                benefits them. We emphasize on assisting the clients to enhance their market position and
                                create potential opportunities for their business.
                            </p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 report-milestone">
                            <div class="row">
                                <h1 class="rs-count mil-20">20</h1>
                            </div>
                            <div class="row">
                                <p style="letter-spacing: 2px; font-weight: 600">REPORTS</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <p>
                                Quality-driven research reports with incisive insights enabling you to make better business
                                decisions
                            </p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 verticals-milestone">
                            <div class="row">
                                <h1 class="rs-count">100</h1>
                            </div>
                            <div class="row">
                                <p style="letter-spacing: 2px; font-weight: 600">VERTICALS & SUB VERTICALS</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <p>
                                Be assured about our consulting services as we understand that every client comes with
                                different needs.
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
                                    <p>We offer our clients the best of our service and encourage their participation with
                                        us in getting them what they want. Client satisfaction is our top priority</p>
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
                                    <p>Our repository contains a large database of fact-based reports. Not finding what you
                                        want please get in touch and let us know. We'd be happy to assist you on your
                                        queries.</p>
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

    {{-- customer testimonial section --}}
    <div class="customer-testimonials p-4">
        <div class="customer-testimonial-heading text-white text-center mb-4 ">
            <h3>Customer Testimonials</h3>
        </div>
        <div class="container owl-carousel owl-theme" id="testi">
            <div class="individual-testimonial">
                <div class="testimonial-content-part">
                    <div class="icon-part">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <p class="testimonial-desc">Our organization was interested in learning more about the market trends for
                        chemicals domain. We contacted Xcellent Insights and the results did not disappoint. We got our
                        queries resolved with better insights from the market perspective. Besides, their market
                        intelligence is amicable and worth relying. We would not hesitate to connect again.</p>
                </div>
                <div class="posted-by">
                    <div class="user">
                        <h5 class="name">Vice President</h5>
                        <span class="designation"> Food & Beverages Company</span>
                    </div>
                </div>
            </div>
            <div class="individual-testimonial">
                <div class="testimonial-content-part">
                    <div class="icon-part">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <p class="testimonial-desc">Xcellent insights has been proactive and diligent with our queries. Their
                        expertise in the market research industry is one that everyone should look for. Their end-to-end
                        involvement has been instrumental in achieving the key objectives to amplify our business goals.</p>
                </div>
                <div class="posted-by">
                    <div class="user">
                        <h5 class="name">Vice President, Marketing</h5>
                        <span class="designation"> Leading Chemicals & Materials Company</span>
                    </div>
                </div>
            </div>
            <div class="individual-testimonial">
                <div class="testimonial-content-part">
                    <div class="icon-part">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <p class="testimonial-desc">Their service was great and I got all my queries answered in no time. I got
                        a better report full of information I was looking for. It really helped me understand the market
                        scenario and the driving forces.</p>
                </div>
                <div class="posted-by">
                    <div class="user">
                        <h5 class="name">Director of Research & development</h5>
                        <span class="designation">Electronics & Semiconductors Company</span>
                    </div>
                </div>
            </div>
            <div class="individual-testimonial">
                <div class="testimonial-content-part">
                    <div class="icon-part">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <p class="testimonial-desc">I am happy to share my experience with Mona. She was patient and showed a
                        better understanding to the details of my query. In fact, she did an excellent job than expected. We
                        carried out a project with her and turned out to be pretty well in terms of gaining the benefits.
                    </p>
                </div>
                <div class="posted-by">
                    <div class="user">
                        <h5 class="name">Product Manager</h5>
                        <span class="designation">Heavy Machinery & Equipment</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- services section --}}
    <div class="services mt-4 px-5">
        <div class="container">
            <div class="row">
                {{-- top selling report card --}}
                <div class="col-lg-4">
                    <div class="services-wrap active top-selling-reports text-center" divId="card1">
                        <div class="row">
                            <div class="icon-box-services col">
                                <img class="light" src="{{ asset('web/icons/services1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="services-title">
                                <h6>Top Selling Reports</h6>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- latest report card --}}
                <div class="col-lg-4">
                    <div class="services-wrap latest-report text-center" divId="card2">
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

                {{-- vertical card --}}
                <div class="col-lg-4">
                    <div class="services-wrap verticals text-center" divId="card3">
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

            {{-- top selling section --}}
            <div class="services-wrap-content top-selling-reports-wrapper mt-5" id="card1">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="top-selling-report-title" style="color: #002c60">
                            <span class="">Industry Reports</span>
                            <h2 class="">Top Selling Reports</h2>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="browse-all-btn">
                            <a class="btn" href="{{ route('report') }}">Browse All Reports</a>
                        </div>
                    </div>
                </div>

                {{-- top selling report carousel --}}
                <div class="top-selling-reports-content mt-5">
                    <div class="row">
                        <div class="col">
                            <div class="owl-carousel" id="topSellingReport">
                                @foreach ($reports as $report)
                                    <div class="top-selling-report-card ms-1">
                                        <div class="top-selling-img-part">
                                            <img src="{{ asset('web/' . $report->Category->thumbnail) }}">
                                        </div>
                                        <div class="top-selling-content-part p-3">
                                            <a
                                                href="{{ route('category', ['category_slug' => $report->Category->slug]) }}">
                                                <p class="text-uppercase mb-0 mt-3">{{ $report->Category->name }}</p>
                                            </a>
                                            <p class="my-4">
                                                <strong><a
                                                        href="{{ route('report_detail', ['report_slug' => $report['slug']]) }}">{!! substr($report->meta_title, 0, 90) !!}</a></strong>
                                            </p>
                                            <div class="arrow-to-page">
                                                <a
                                                    href="{{ route('report_detail', ['report_slug' => $report['slug']]) }}">
                                                    <i class="fa-solid fa-arrow-right text-white"></i>
                                                </a>
                                            </div>
                                            <div class="top-selling-report-meta" style="font-size: 14px">
                                                <div class="date-price">
                                                    <p class="mb-0">
                                                        <i class="far fa-clock" aria-hidden="true"></i>
                                                        {{ date('M Y', strtotime($report->publish)) }}
                                                    </p>
                                                    <p class="mb-0">
                                                        <i class="fa fa-credit-card" aria-hidden="true"></i> USD
                                                        {{ $report->single_price }}
                                                    </p>
                                                </div>
                                                <div class="page-format">
                                                    <p class="mb-0">
                                                        <strong>Pages : </strong> {{ $report->pages }}
                                                    </p>
                                                    <p class="mb-0">
                                                        <strong>Format : </strong> {{ $report->format }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- latest report section --}}
            <div class="services-wrap-content latest-reports-wrapper mt-5" id="card2">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="latest-report-title" style="color: #002c60">
                            <span class="">Industry Reports</span>
                            <h2 class="">Latest Reports</h2>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="browse-all-btn">
                            <a class="btn" href="{{ route('report') }}">Browse All Reports</a>
                        </div>
                    </div>
                </div>

                {{-- latest report carousel --}}
                <div class="latest-reports-content mt-5">
                    <div class="row">
                        <div class="col">
                            <div class="owl-carousel " id="latestReport">
                                @foreach ($reports as $report)
                                    <div class="top-selling-report-card ms-1">
                                        <div class="top-selling-img-part">
                                            <img src="{{ asset('web/' . $report->Category->thumbnail) }}">
                                        </div>
                                        <div class="top-selling-content-part p-3">
                                            <a
                                                href="{{ route('category', ['category_slug' => $report->Category->slug]) }}">
                                                <p class="text-uppercase mb-0 mt-3">{{ $report->Category->name }}</p>
                                            </a>
                                            <p class="my-4">
                                                <strong><a
                                                        href="{{ route('report_detail', ['report_slug' => $report['slug']]) }}">{!! substr($report->meta_title, 0, 90) !!}</a></strong>
                                            </p>
                                            <div class="arrow-to-page">
                                                <a
                                                    href="{{ route('report_detail', ['report_slug' => $report['slug']]) }}">
                                                    <i class="fa-solid fa-arrow-right text-white"></i>
                                                </a>
                                            </div>
                                            <div class="top-selling-report-meta" style="font-size: 14px">
                                                <div class="date-price">
                                                    <p class="mb-0">
                                                        <i class="far fa-clock" aria-hidden="true"></i>
                                                        {{ date('M Y', strtotime($report->publish)) }}
                                                    </p>
                                                    <p class="mb-0">
                                                        <i class="fa fa-credit-card" aria-hidden="true"></i> USD
                                                        {{ $report->single_price }}
                                                    </p>
                                                </div>
                                                <div class="page-format">
                                                    <p class="mb-0">
                                                        <strong>Pages : </strong> {{ $report->pages }}
                                                    </p>
                                                    <p class="mb-0">
                                                        <strong>Format : </strong> {{ $report->format }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- vertical section --}}
            <div class="services-wrap-content industry-vertical-wrapper mt-5" id="card3">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="industry-vertical-title" style="color: #002c60">
                            <span class="">Industry Reports</span>
                            <h2 class="">Industry Verticals</h2>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="browse-all-btn">
                            <a class="btn" href="{{ route('industry') }}">Browse All Verticals</a>
                        </div>
                    </div>
                </div>


                <div class="services-content-wrapper mt-5">
                    <div class="row justify-content-between">

                        {{-- individual vertical --}}
                        @foreach ($results as $result)
                            <div class="col-lg-3 services-card mx-3">
                                <a href="#">
                                    <div class="industry_verticle_category">
                                        <div class="row">
                                            <div class="icon-box-verticals">
                                                <span class="strategy-box">
                                                    <i class="{{ $result->icon }}" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="verticals-heading">
                                                <h5>{{ $result->name }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- our clientele section --}}
    <div class="clientele mt-4">
        <div class="container ">
            <div class="row">
                <div class="col">
                    <div class="card client-logos">
                        <div class="card-header text-center">
                            <h4 class="m-0" style="color: #002c60">Our Clientele</h4>
                        </div>
                        <div class="card-body">
                            <div class="owl-carousel owl-theme" id="client-logo-carousel">
                                <img src="{{ asset('web/images/home/client-logos/ABB2.webp') }}" alt="Image Processing">
                                <img src="{{ asset('web/images/home/client-logos/BASF.webp') }}" alt="Image Processing">
                                <img src="{{ asset('web/images/home/client-logos/Bosch.png') }}" alt="Image Processing">
                                <img src="{{ asset('web/images/home/client-logos/Dow-1.webp') }}" alt="Image Processing">
                                <img src="{{ asset('web/images/home/client-logos/Emerson.webp') }}"
                                    alt="Image Processing">
                                <img src="{{ asset('web/images/home/client-logos/Fiserv.webp') }}"
                                    alt="Image Processing">
                                <img src="{{ asset('web/images/home/client-logos/Fujitsu2.webp') }}"
                                    alt="Image Processing">
                                <img src="{{ asset('web/images/home/client-logos/Harman.webp') }}"
                                    alt="Image Processing">
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
    </div>


@section('script')
    @yield('script')
    <script src="{{ asset('/web/js/homePageToggle.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- customer testimonial carousel --}}
    <script>
        $(document).ready(function() {
            $('#testi').owlCarousel({
                loop: true,
                items: 2,
                margin: 30,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true
            })
        });
    </script>

    {{-- home page counter --}}
    <script>
        $(document).ready(function() {
            var counter = $('.rs-count');
            setTimeout(() => {
                if (counter.length) {
                    $('.rs-count').counterUp({
                        delay: 20,
                        time: 1500
                    });
                }
            }, 1000);

        });
    </script>

    {{-- top selling carousel --}}
    <script>
        $(document).ready(function() {
            $('#topSellingReport').owlCarousel({
                items: 3,
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true
            });
            $('#latestReport').owlCarousel({
                items: 3,
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true
            });
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

    {{-- hide search bar on home page --}}
    <script>
        $(document).ready(function() {
            $('#search-bar').hide();
        })
    </script>
@endsection
@endsection
