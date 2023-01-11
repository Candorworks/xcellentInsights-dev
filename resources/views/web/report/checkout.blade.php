@extends('web.include.index')

@section('content')
<div class="breadcrums-container py-5" style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.webp);">
    <div class="container pt-5">
        <div class="text-center mt-3 mb-5">
            <h3 class="breadcrumbs-title text-white">
                Checkout
            </h3>
        </div>
    </div>
</div>
<div class="checkout-container">
    <div class="container">
        <div class="report-desc p-4">
            <div class="row">
                <div class="col-lg-2 pe-0">
                    <div class="report-img">
                        <img src="{{ asset('web/' . $report->Category->thumbnail) }}" alt="Image processing" style="width: 150px; height: 170px;">
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="report-content">
                        <h3 class="mb-3" style="color: #002c60">{{ $report->title }}</h3>
                        <p></p>
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

        <div class="checkout-content mt-5">
            <form id="payment-form" class="contact-form" method="post" action="{{ route('web.placeOrder', [$report['id'], $discount_link]) }}">
                @csrf
                <input type="hidden" name="plan" id="plan">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="billing-info">
                            <div class="arrow-right">Billing Information</div>

                            <div class="p-3">
                                <div class="row mb-3 ">
                                    <div class="col-lg-6">
                                        <div class="form-group ss-item-required">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group ss-item-required">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div class="form-group ss-item-required">
                                            <select name="country" class="form-control form-select" onchange="return getStates(this)" required>
                                                <option value="" disabled="" selected="" hidden="">Select
                                                    country</option>
                                                @foreach ($countries as $item)
                                                <option value="{{ $item->name }}">{{ $item->name }}
                                                </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group ss-item-required">
                                            <input type="text" name="number" class="form-control" placeholder="Phone Number" maxlength="12" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div class="form-group ss-item-required">
                                            <input type="text" name="job_title" class="form-control" placeholder="Job Title" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group ss-item-required">
                                            <input type="text" name="company" class="form-control" placeholder="Company Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div class="form-group ss-item-required">
                                            <input type="text" name="address" class="form-control" name="website" placeholder="Address..." />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group ss-item-required">
                                            <input type="text" name="city" class="form-control" placeholder="Town / City" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div class="form-group ss-item-required">
                                            <select name="state" id="states-ids" class="form-control">
                                                <option value="" disabled="" selected="" hidden="">Select
                                                    State</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group ss-item-required">
                                            <input type="text" maxlength="6" name="zip" class="form-control" placeholder="Postcode / zip" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="choose-licence-type">
                            <div class="arrow-right">Choose Licence Type</div>

                            <div class="p-3">
                                <div class="form-group licence-wrap individual-report-price  justify-content-around" divID="lic1">
                                    <input type="radio" id="single" value="single" name="price" checked="selected">
                                    <label for="single">Single User License
                                    </label><span style="color: #002c60">$4000</span>
                                </div>
                                <div class="form-group licence-wrap individual-report-price justify-content-around" divID="lic2">
                                    <input type="radio" id="multi" value="multi" name="price">
                                    <label for="multi" style="width: 138px;">Multi User License</label>
                                    <span style="color: #002c60">$6000</span>
                                </div>
                                <div class="form-group licence-wrap individual-report-price justify-content-around" divID="lic3">
                                    <input type="radio" id="enterprise" value="enterprise" name="price">
                                    <label for="enterprise" style="width: 138px;">Enterprise License
                                    </label><span style="color: #002c60">$8000</span>
                                </div>


                            </div>

                            <div class="p-3">
                                <div class="single-lic licence-wrap-content" id="lic1">
                                    <div class="licence-part py-3 row">
                                        <label class="col-lg-6">Licence -</label>
                                        <span class="col-lg-6 text-end" style="color: #002c60">Single</span>
                                    </div>
                                    <div class="price-part py-3 row">
                                        <label class="col-lg-6">Price -</label>
                                        <span class="col-lg-6 text-end" style="color: #002c60">$4000</span>
                                    </div>
                                </div>
                                <div class="multi-lic licence-wrap-content" id="lic2">
                                    <div class="licence-part py-3 row ">
                                        <label class="col-lg-6">Licence -</label>
                                        <span class="col-lg-6 text-end" style="color: #002c60">Multi</span>
                                    </div>
                                    <div class="price-part py-3 row">
                                        <label class="col-lg-6">Price -</label>
                                        <span class="col-lg-6 text-end" style="color: #002c60">$6000</span>
                                    </div>
                                </div>
                                <div class="enterprise-lic licence-wrap-content" id="lic3">
                                    <div class="licence-part py-3 row">
                                        <label class="col-lg-6">Licence -</label>
                                        <span class="col-lg-6 text-end" style="color: #002c60">Enterprise</span>
                                    </div>
                                    <div class="price-part py-3 row">
                                        <label class="col-lg-6">Price -</label>
                                        <span class="col-lg-6 text-end" style="color: #002c60">$8000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="payment-method">
                            <div class="arrow-right">Payment Method</div>

                            <div class="p-3">
                                <div class="methods">
                                    <div class="debit-credit">
                                        <input type="radio" name="payment_method" id="payment_method_stripe" value="Stripe" checked="default-payment">
                                        <label for="payment_method_stripe" id="debit-credit">Credit / Debit Card <img src="{{ asset('web/images/checkout/credit-card.png') }}" alt="" height="21px"></label>
                                    </div>
                                    <div class="bank-transfer mt-3">
                                        <input type="radio" name="payment_method" id="payment_method_bacs" value="Direct Bank Transfer">
                                        <label for="payment_method_bacs">Direct Bank Transfer <img src="{{ asset('web/images/checkout/direct-bank-transfer.png') }}" alt="" height="21px"></label>

                                    </div>
                                    <div class="ccavenue mt-3">
                                        <input type="radio" name="payment_method" id="payment_method_ccavenue" value="Ccavenue">
                                        <label for="payment_method_ccavenue">HDFC <img src="{{ asset('web/images/checkout/direct-bank-transfer.png') }}" alt="" height="21px"></label>

                                    </div>
                                    <button type="submit" class="checkout-btn btn-block btn mt-4" id="checkout-button">Checkout</button>
                                </div>
                                <div class="we-accept row mt-5 align-items-center pt-3">
                                    <div class="col-lg-4">We Accept</div>
                                    <div class="col-lg-7"><img src="{{ asset('web/images/payment-logos.webp') }}" alt="payment-logo"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://js.stripe.com/v3/"></script>
<script>
    $(".licence-wrap").on("click", function() {
        $(".licence-wrap-content").hide();

        var divId = $(this).attr("divId");

        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $("#" + divId).hide();
        } else {
            $(".licence-wrap").removeClass("active");
            $(this).addClass("active");
            $("#" + divId).show();
        }
    });

    function getStates(obj) {
        // alert(obj.value);
        var ENDPOINT = "{{ route('web.getstates') }}";
        $.ajax({
                url: ENDPOINT + "?country=" + obj.value,
                datatype: "html",
                type: "get",
                beforeSend: function() {
                    $('.auto-load').html("Loading...");
                    $('.auto-load').show();
                }
            })
            .done(function(response) {

                $("#states-ids").html(response.states);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occured');
            });
    }
</script>

<script type="text/javascript">
    $(document).on('focusout', ":input[name=number]", function(e) {
        if ($(this).val().trim().length <= 0) {
            return;
        }

        var enqDetails = {
            name: $(":input[name=name]").val(),
            email: $(":input[name=email]").val(),
            country_code: $(":input[name=country]").val() !== null ?
                $(":input[name=country]").find('option:selected').text() : '',
            phone_number: $(this).val()
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{route('web.checkout.orderInCart', $report->id)}}",
            type: 'post',
            data: enqDetails,
            complete: function(response) {
                console.log(response)
            }
        });
    })

    var stripe = Stripe("{{ env('STRIPE_KEY') }}");
    $("#checkout-button").addEventListener("click", function(e) {
                var fields = $(".ss-item-required");
                if ($("#payment-form").valid()) {
                    e.preventDefault();
                    var file = new FormData($("#payment-form")[0]);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{route('web.checkout.orderConfirmed', $report->id)}}",
                        type: 'post',
                        data: file,
                        processData: false,
                        contentType: false,
                        complete: function(response) {
                            console.log(response)
                        }
                    })

                    var method = $('input[name="payment_method"]:checked').val();
                    if (method == "Stripe") {
                        var formElem = $("#payment-form");
                        var formdata = formElem.serializeArray();
                        
                        var plan = $('#plan').val();
                        fetch("{{ route('web.stripe.init') }}", {
                                method: "POST",
                                headers: {
                                    'Accept': 'application/json',
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    data: formdata,
                                    report_id: "{{ $report['id'] }}",
                                    plan: plan,
                                    discount_link: "{{ $discount_link }}"
                                })
                            })
                            .then(function(response) {
                                return response.json();
                            })
                            .then(function(session) {
                                return stripe.redirectToCheckout({
                                    sessionId: session.id
                                });
                            })
                            .catch(function(error) {
                                console.error("Error:", error);
                            });
                    } else {
                        $("#payment-form").submit();
                    }
                });


            function licenceChangeTable(plan, plan_price) {
                $('#plan').val(plan);
                // $('#plan_price').val(plan_price);
                var discount_row = @json($discount_row);
                if (Object.keys(discount_row).length === 0) {
                    var discount_price = 0;
                } else {
                    if (discount_row.type == "percent") {
                        var discount_price = ((plan_price * discount_row.discount_value) / 100);
                    } else {
                        var discount_price = discount_row.discount_value;
                    }
                }
                // card card
                var final_price = plan_price - discount_price;
                var plan_display = plan.charAt(0).toUpperCase() + plan.slice(1);
                var html = '<div class="widget widget-licence">\
                            <div class="mb-3 text-center">\
                            <div class="card-body">\
                            <ul class="list-group text-left mx-md-70">\
                            <li class="list-group-item">\
                            <div class="form-check">\
                            <label class="form-check-label">\
                            License - <b>' + plan_display + ' </b>\
                            </label>\
                            </div>\
                            </li>\
                            <li class="list-group-item">\
                            <div class="form-check">\
                            <label class="form-check-label">\
                            Price - <b> $' + plan_price + ' </b>\
                            </label>\
                            </div>\
                            </li>';
                if (discount_price) {
                    html += '<li class="list-group-item">\
                                <div class="form-check">\
                                <label class="form-check-label">\
                                Discount - <b> $' + discount_price + ' </b>\
                                </label>\
                                </div>\
                                </li>';
                }
                html += '</ul>\
                            </div>\
                            </div>\
                            </div>';

                $('#licence_table').html(html);
            }
            $('document').ready(function() {

                if (@json($license) == 'multi') {
                    $("#licenseType2").prop("checked", true);
                    $('#licenseType2').click();

                } else if (@json($license) == 'enterprise') {
                    $("#licenseType3").prop("checked", true);
                    $('#licenseType3').click();
                } else {
                    $("#licenseType1").prop("checked", true);
                    $('#licenseType1').click();
                }

            });

            // $(document).on("click", "#checkout-button", function (e) {

            // });
            $("#payment-form").validate({
                errorClass: "error-class",
                validClass: "valid-class",
                errorElement: "span",
                rules: {
                    name: "required",
                    email: "required",
                    country: "required",
                    number: "required"
                    //    job_title: "required",
                    //    company: "required",
                    //    address: "required",
                    //    city: "required",
                    //    state: "required",
                    // zip: "required",
                },
                messages: {
                    name: "Name is Required",
                    email: "Email is Required",
                    country: "Country is Required",
                    number: "Number is Required"
                    //    job_title: "Job Title is Required",
                    //    company: "Company is Required",
                    //    address: "Address is Required",
                    //    city: "City is Required",
                    //    state: "State is Required",
                    // zip: "Zip code is Required"
                },

                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                },
            });
</script>
@endsection