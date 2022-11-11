<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @include("style")
   <title>Xcellent Insights</title>
</head>
<body>
   <div class="container-fluid pt-3 header-wrapper">
      @include('header')
   </div>
   
   <main>
      @yield("content")
   </main>
   
   <div class="footer-wrapper">
      @include('newsletter')
      @include('footer')
   </div>
   <div class="scrollUp">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
   </div>
   <div class="get-in-touch">
      <a href="#">
      Get in Touch
      </a>
   </div>

   {{-- <div class="modal fade" id="startSelling" tabindex="-1" aria-labelledby="startSellingLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <input type="hidden" name="_token" value="TLc9btQ0HY5Zfgnwj4uxqkiSWeBmjgErJSdXDS6u">            
            <div class="modal-body row p-0">
                <div class="col-md-6 col-sm-12 modalsmdevice">
                    <div class="modalimagehead">
                        <h2 class="modal-title" id="startSellingLabel"></h2>
                    </div>
                    <img src="{{asset("web/images/XI_modal.png")}}" alt="Image Processing" width="100%" class="modalImage img-fluid">
                </div>
                <div class="col-md-6 col-sm-12 requestformbox">
                    <!-- <button type="button" class="btn-close btn-close-dark px-4 modalbutton" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    <form role="form" id="enquiry-form" method="POST" autocomplete="on" action="https://www.xcellentinsights.com/lead/create" onsubmit="return validateBot();">
                        <input type="hidden" name="_token" value="TLc9btQ0HY5Zfgnwj4uxqkiSWeBmjgErJSdXDS6u">                        <!-- <div class="form-group pe-3 ">
                            <input type="text" class="form-control shadow-inset" name="name" placeholder="Enter name" required />
                        </div> -->
                        <div class="form-group">
                            <div class="row pe-3">
                                <div class="col-md-6 pe-0">
                                    <input type="text" class="form-control shadow-inset" name="fname" placeholder="First name" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control shadow-inset" name="lname" placeholder="Last Name" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group pe-3 ">
                            <input type="hidden" name="lead_type" id="lead_type_id" value="">
                            <input type="email" name="email" class="form-control shadow-inset" placeholder="Enter email" required />
                        </div>

                        <div class="form-group pe-3 ">
                            <input type="text" maxlength="12" onkeypress="return isNumber(event)" class="form-control shadow-inset" placeholder="Enter number" name="number" required>
                        </div>
                        <div class="form-group pe-3 ">
                            <input type="text" class="form-control shadow-inset" placeholder="Enter job title" name="job_title">
                        </div>
                        <div class="form-group pe-3 ">
                            <input type="text" class="form-control shadow-inset" placeholder="Enter company name" name="company">
                        </div>
                        <div class="form-group pe-3 ">
                            <textarea class="form-control shadow-inset" maxlength="400" rows="3" placeholder="Do you have any Specific field of Interest? Please suggest us" name="description"></textarea>
                        </div>
                        <div class="mt-3 text-dark pe-3 form-group">
                            We ensure/ offer complete secrecy of your personal details <a href="https://www.xcellentinsights.com/privacy-policy">Privacy</a>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="hidden" name="employee_size" value="9977" id="employee_size">
                                <input type="text" name="department" id="department" value="" style="display: none;">
                            </div>
                        </div>
                        <div class="row form-group my-2">
                            <div class="col-md-12">
                                <p>Are you Human?</p>
                            </div>
                            <div class="col-md-4">
                                <label id="ebcaptchatext"></label>
                            </div>
                            <div class="col-md-4 p-0" style="margin-left: -64px; margin-top: -20px;">
                                <input type="text" class="textbox form-control shadow-inset w-50" id="ebcaptchainput" name="captchainput" placeholder="?" />
                                <div class="text-danger" id="validationfail" style="display:none;">Validation failed</div>
                            </div>
                        </div>

                        <div class="modal-footer pe-3">
                            <button type="button" class="btn bg-grey shadow-soft mr-15 w-25 readon white-btn p-2" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="submitcaptcha1 btn bg-grey shadow-soft w-25 readon white-btn p-2" disabled>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="modal">
   <div class="container">
      <div class="row form-controller">
         <div class="col-lg-6 p-0">
            <div class="modalimagehead">
               <h1 class="modal-title" id="startSellingLabel"></h1>
            </div>
            <img src="{{asset("web/images/XI_modal.png")}}" width="100%" height="100%" alt="Image Processing"  class="modalImage">
         </div>
         <div class="col-lg-6 p-3">
            <form role="form" id="enquiry-form" method="POST" autocomplete="on" action="https://www.xcellentinsights.com/lead/create" onsubmit="return validateBot();">
               <input type="hidden" name="_token" value="TLc9btQ0HY5Zfgnwj4uxqkiSWeBmjgErJSdXDS6u">
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
                     <input type="hidden" name="lead_type" id="lead_type_id" value="">
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
                     We ensure/ offer complete secrecy of your personal details <a href="https://www.xcellentinsights.com/privacy-policy">Privacy</a>
               </div>
               <div class="row form-group my-2 align-items-center">
                  <div class="col-lg-12">
                     <p>Are you Human?</p>
                  </div>
                  <div class="col-lg-4">
                     <label class="speakWithAnalystValidationText"></label>
                  </div>
                  <div class="col-lg-4 mt-1 p-0" style="margin-left: -64px; margin-top: -20px;">
                     <input type="text" class="textbox form-control shadow-inset w-50 speakWithAnalystValidation" name="captchainput" placeholder="?" />
                     <div class="text-danger fail" id="validationfail" style="display:none;">Validation failed</div>
                  </div>
               </div>
               <div class="modal-footer pe-3">
                  <button type="button" class="btn bg-grey mr-15 w-25 white-btn p-2 modalCloseBtn" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="speakWithAnalystSubmitBtn submitcaptcha1 btn bg-grey w-25 white-btn p-2" disabled>Submit</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

   <div class="zsiq_floatmain zsiq_theme1 siq_bR" data-id="zsalesiq" >
      <div id="zsiq_float" class="zsiq_float ">
         <div class="zsiq_flt_rel">
            <em id="zsiq_agtpic" class="zsiq_user siqicon siqico-chat"></em>
            <div id="titlediv" class="zsiq_cnt" style="display: block;">
               <div id="zsiq_maintitle" class="zsiq_ellips" title="We're Online!">We're Online!
                  </div>
                  <p id="zsiq_byline" class="zsiq_ellips" title="How may I help you today?">How may I help you today?</p>
                  <em class="siqico-close"></em>
               </div>
               <em id="zsiq_unreadcnt" class="zsiq_unrdcnt" style="display: none;"></em>
               <em id="zsiq_avcall" class="zsiqmin_unrdcnt zsiq_unrdcnt siqico-mincall" style="display: none;"></em>
            </div>
         </div>
      </div>
</body>
<script src="{{asset('/web/js/script.js')}}"></script>
{{-- <script src="{{asset('/web/js/numericaptcha.js')}}"></script> --}}
<script src="{{url('/web/js/numericaptcha.js')}}"></script>
@yield('script')
</html>