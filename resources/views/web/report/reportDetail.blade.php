@extends('web.include.index')

@section('content')
<div class="breadcrums-container py-5" style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
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
                        <img src="{{asset('web/'.$report->Category->thumbnail)}}" alt="Image processing" style="width: 150px; height: 170px;">
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="report-content">
                        <h3 class="mb-3" style="color: #002c60">{{$report->title}}</h3>
                        <p>{!! nl2br(str_replace("_x000D_"," ",substr($report->description, 0, 200))) !!}...</p>
                        <div class="report-meta py-2">
                            <div class="row justify-content-center">
                                <p class="col-lg-2">ID: {{$report->unique_id}}</p>
                                <p class="col-lg-2">Published: {{ date('M Y', strtotime($report->publish)) }}</p>
                                <p class="col-lg-2">Pages: {{$report->pages}}</p>
                                <p class="col-lg-2">Format: {{$report->format}}</p>
                                <p class="col-lg-3">Industry: {{$report->Category->name}}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="mt-5">
            <div class="row">
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
                            <p class="menu-content desc" id="menu1">{!!$report->description!!}</p>
                            <p class="menu-content toc" id="menu2">{!!$report->toc!!}</p>
                            <p class="menu-content tables-figures" id="menu3">{!!$report->table_figures!!}</p>
                            <p class="menu-content companies" id="menu4">{!!$report->companies!!}</p>
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
                                                        <input type="text" class="form-control shadow-inset" name="fname" placeholder="First name" required="">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control shadow-inset" name="lname" placeholder="Last Name" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control shadow-inset" name="email" placeholder="email" required="">
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
                                                <input type="number" class="form-control shadow-inset" name="number" placeholder="Phone No. without Country code.." required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control shadow-inset" name="job_title" placeholder="Job Title" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control shadow-inset" name="company" placeholder="company name" required="">
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
                                                <div id="s_i_t_e_k_e_y"></div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="submit-btn mt-4 text-end">
                                            <button type="submit" class="cta-btn px-3" id="speakWithAnalystSubmitBtn">Submit Now</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <p class="menu-content faq" id="menu6">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Exercitationem, reiciendis?</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="report-sidebar p-4">
                        <div class="request-preorder-discount">
                            <div class="row mb-4">
                                <div class="request">
                                    <a href="">
                                        <i class="fas fa-paper-plane mr-5" aria-hidden="true"></i>
                                        <h6>Request Free PDF Sample</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="pre-order">
                                    <a href="">
                                        <i class="fas fa-envelope mr-5" aria-hidden="true"></i>
                                        <h6>Pre-Order Enquiry</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="discount">
                                    <a href="">
                                        <i class="fas fa-tags mr-5" aria-hidden="true"></i>
                                        <h6>Check Today's Discount</h6>
                                    </a>
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
@endsection