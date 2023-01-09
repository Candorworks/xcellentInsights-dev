@extends('web.include.index')

@section('content')
<div class="breadcrums-container py-5" style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url('{{ asset('web/images/breadcrums/contact-us.jpg') }}');">
    <div class="container pt-5">
        <div class="text-center mt-3">
            <h3 class="breadcrumbs-title fw-bold text-white">
                @if (isset($categories))
                {{ $categories->name }}
                @else
                Report Hub
                @endif
            </h3>
            <p class="mt-4 px-5 text-light text-center">
                @if (isset($categories))
                {{ $categories->information }}
                @endif
            </p>
        </div>
    </div>
</div>
</div>
<div class="report-hub-container mt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form method="post" action="{{ route('reportSeacrhByTitle') }}">
                    @csrf
                    <div class="search-report">
                        <input type="text" class="search-report-input" name="homepagesearch" placeholder="Search Report Title / Keyword">
                        <button class="search-report-submit-btn">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4 justify-content-center ">
            <div class="col-lg-3">
                <div class="categories-report-hub-page ">
                    <div class="category-sidebar-title p-4">
                        <h5>Industry Vertical</h5>
                    </div>
                    <ul class=" p-0">
                        @foreach ($results as $result)
                        <li><a href="{{ route('category', ['category_slug' => $result['slug']]) }}">{{ $result->name }}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>

                {{-- calling the modal when clicked on this button --}}
                <div class="enquiry-now-report-hub text-center p-4 mt-4" data-bs-toggle="modal" data-bs-target="#ModalEnquiry">
                    <a href="#" id="enquiry-now" class="py-2 px-5">ENQUIRY NOW</a>
                </div>


            </div>
            <div class="col-lg-8">
                @if ($count == 0)
                    @include('web.include.dataNotFound')
                @else
                    @include('web.report.report_div')
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal-container">
    <div class="modal fade" id="ModalEnquiry" tabindex="-1" aria-labelledby="ModalEnquiryLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 60vw">
            <div class="modal-content">

                <div class="modal-body p-0">
                    <div class="container">
                        <div class="row form-controller">
                            <div class="col-lg-6 p-0">
                                <div class="modalimagehead">
                                    <h1 class="modal-title" id="startSellingLabel">Enquiry Now</h1>
                                </div>
                                <img src="{{ asset('web/images/XI_modal.webp') }}" width="100%" height="100%" alt="Image Processing" class="modalImage">
                            </div>
                            <div class="col-lg-6 p-3">
                                <form role="form" id="enquiry-form" method="POST" autocomplete="on" action="{{ route('lead.create') }}" onsubmit="return validateBot();">
                                    @csrf
                                    <input type="hidden" name="subject" value="Enquire Now">
                                    <div class="form-group pb-3">
                                        <div class="row pe-3">
                                            <div class="col-md-6 pe-0">
                                                <input type="text" class="form-control shadow-inset" name="fname" placeholder="First name" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control shadow-inset" name="lname" placeholder="Last Name" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pb-3 pe-3 ">
                                        <input type="hidden" name="lead_type" id="lead_type_id" value="3">
                                        <input type="email" name="email" class="form-control shadow-inset" placeholder="Enter email" required />
                                    </div>
                                    <div class="form-group pb-3 pe-3 ">
                                        <input type="text" maxlength="12" onkeypress="return isNumber(event)" class="form-control shadow-inset" placeholder="Enter number" name="number" required>
                                    </div>
                                    <div class="form-group pb-3 pe-3 ">
                                        <input type="text" class="form-control shadow-inset" placeholder="Enter job title" name="job_title">
                                    </div>
                                    <div class="form-group pb-3 pe-3 ">
                                        <input type="text" class="form-control shadow-inset" placeholder="Enter company name" name="company">
                                    </div>
                                    <div class="form-group pb-3 pe-3 ">
                                        <textarea class="form-control shadow-inset" maxlength="400" rows="3" placeholder="Do you have any Specific field of Interest? Please suggest us" name="description"></textarea>
                                    </div>
                                    <div class="text-dark pe-3 form-group">
                                        <span> We ensure/ offer complete secrecy of your personal details <a href="{{ route('privacy') }}" style="color: #002c60; text-decoration: none;" target="__blank">
                                                Privacy</a></span>
                                    </div>
                                    <div class="row form-group my-2 align-items-center">
                                        <div class="col-lg-12">
                                            <p>Are you Human?</p>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="speakWithAnalystValidationTextEnquiry"></label>
                                        </div>
                                        <div class="col-lg-4 mt-1 p-0" style="margin-left: -64px; margin-top: -20px;">
                                            <input type="text" class="textbox form-control shadow-inset w-50 speakWithAnalystValidationEnquiry" name="captchainput" placeholder="?" />
                                            <div class="text-danger fail" id="validationfail" style="display:none;">
                                                Validation
                                                failed</div>
                                        </div>
                                    </div>
                                    <div class="modal-footer pe-3">
                                        <button type="button" class="btn bg-grey mr-15 w-25 white-btn p-2 modalCloseBtn" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="speakWithAnalystSubmitBtnEnquiry submitcaptcha1 btn bg-grey w-25 white-btn p-2" disabled style="border: none">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    @endsection
    @section('script')
    {{-- script for 'are you human validation' --}}
    <script src="{{ url('/web/js/numericCaptchaEnquiry.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(window).on('load', function() {
            $('#datanotFoundForm').hide();
            $('#loading_note').show();
        })

        var ENDPOINT = "<?php isset($categories) ? route('category', ['category_slug' => $categories->slug]) : route('report-hub'); ?>";
        var page = 1;
        infiniteLoadMore(page);

        $(window).scroll(function() {
            if ($(window).scrollTop() >= ($(document).height() - $(window).height()) * 0.7) {
                page++;
                infiniteLoadMore(page);
            }
        });

        function infiniteLoadMore(page) {
            $('#loading_note').show();
            $.ajax({
                    url: ENDPOINT + "?page=" + page + "@if(Request::get('search') != '')&search={{Request::get('search')}}@endif",
                    datatype: "html",
                    type: "get",
                    beforeSend: function() {
                        // $('.auto-load').html("Loading...");
                        $('#loading_note').show();
                    }
                })
                .done(function(response) {

                    if (response.length == 0) {

                        $('#loading_note').html("We don't have more data to display :(");
                        $('#datanotFoundForm').show();
                        return;
                    }
                    $('#loading_note').hide();

                    $('#datanotFoundForm').hide();


                    $("#myScroll").append(response);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "item": {
                        "type": "Website",
                        "@id": "/",
                        "name": "Home"
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "item": {
                        "type": "WebPage",
                        "@id": "{{ $seo_id }}",
                        "name": "{{ $seo_name }}"
                    }
                }
            ]
        }
    </script>
    @endsection