<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('web/images/favicon.png') }}" type="image/x-icon">
    <title>xcellentinsights</title>

    @include('web.include.style')
</head>

<body>
    <div class="container-fluid pt-3 header-wrapper">
        @include('web.include.header')
    </div>

    <main>
        @yield('content')
    </main>

    <div class="footer-wrapper">
        @include('web.include.newsletter')
        @include('web.include.footer')
    </div>

    {{-- scroll to top --}}
    <div class="scrollUp">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    {{-- get in touch modal --}}
    <div class="get-in-touch" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <a href="#" id="get-in-touch">Get in Touch</a>
    </div>

    <div class="modal-container">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 60vw">
                <div class="modal-content">

                    <div class="modal-body p-0">
                        <div class="container">
                            <div class="row form-controller">
                                <div class="col-lg-6 p-0">
                                    <div class="modalimagehead">
                                        <h1 class="modal-title" id="startSellingLabel">Get In Touch</h1>
                                    </div>
                                    <img src="{{ asset('web/images/XI_modal.webp') }}" width="100%" height="100%"
                                        alt="Image Processing" class="modalImage">
                                </div>
                                <div class="col-lg-6 p-3">
                                    <form role="form" id="enquiry-form" method="POST" action="{{ route('lead.create') }}" autocomplete="on" onsubmit="return validateBot();">
                                    @csrf
                                        <input type="hidden" name="subject" value="Get In Touch">

                                        <div class="form-group pb-3">
                                            <div class="row pe-3">
                                                <div class="col-md-6 pe-0">
                                                    <input type="text" class="form-control shadow-inset"
                                                        name="fname" placeholder="First name" required="">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control shadow-inset"
                                                        name="lname" placeholder="Last Name" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pb-3 pe-3 ">
                                            <input type="hidden" name="lead_type" id="lead_type_id" value="1">
                                            <input type="email" name="email" class="form-control shadow-inset"
                                                placeholder="Enter email" required />
                                        </div>
                                        <div class="form-group pb-3 pe-3 ">
                                            <input type="text" maxlength="12" onkeypress="return isNumber(event)"
                                                class="form-control shadow-inset" placeholder="Enter number"
                                                name="number" required>
                                        </div>
                                        <div class="form-group pb-3 pe-3 ">
                                            <input type="text" class="form-control shadow-inset"
                                                placeholder="Enter job title" name="job_title">
                                        </div>
                                        <div class="form-group pb-3 pe-3 ">
                                            <input type="text" class="form-control shadow-inset"
                                                placeholder="Enter company name" name="company">
                                        </div>
                                        <div class="form-group pb-3 pe-3 ">
                                            <textarea class="form-control shadow-inset" maxlength="400" rows="3"
                                                placeholder="Do you have any Specific field of Interest? Please suggest us" name="description"></textarea>
                                        </div>
                                        <div class="text-dark pe-3 form-group">
                                            <span> We ensure/ offer complete secrecy of your personal details <a
                                                    href="{{ route('privacy') }}"
                                                    style="color: #002c60; text-decoration: none;" target="__blank">
                                                    Privacy</a></span>
                                        </div>
                                        <div class="row form-group my-2 align-items-center">
                                            <div class="col-lg-12">
                                                <p>Are you Human?</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="speakWithAnalystValidationText"></label>
                                            </div>
                                            <div class="col-lg-4 mt-1 p-0"
                                                style="margin-left: -64px; margin-top: -20px;">
                                                <input type="text"
                                                    class="textbox form-control shadow-inset w-50 speakWithAnalystValidation"
                                                    name="captchainput" placeholder="?" />
                                                <div class="text-danger fail" id="validationfail"
                                                    style="display:none;">Validation
                                                    failed</div>
                                            </div>
                                        </div>
                                        <div class="modal-footer pe-3">
                                            <button type="button"
                                                class="btn bg-grey mr-15 w-25 white-btn p-2 modalCloseBtn"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit"
                                                class="speakWithAnalystSubmitBtn submitcaptcha1 btn bg-grey w-25 white-btn p-2"
                                                disabled style="border: none">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

</body>
<script src="{{ asset('/web/js/script.js') }}"></script>
<script src="{{ url('/web/js/numericaptcha.js') }}"></script>
@yield('script')

</html>
