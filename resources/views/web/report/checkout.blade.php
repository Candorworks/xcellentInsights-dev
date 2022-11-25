@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
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
                            <img src="{{ asset('web/' . $report->Category->thumbnail) }}" alt="Image processing"
                                style="width: 150px; height: 170px;">
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
                <div class="row">
                    <div class="col-lg-5">
                        <div class="billing-info">
                            <div class="arrow-right">Billing Information</div>
                            <div class="p-3">
                                <div class="row mb-3 ">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select name="country" class="form-control form-select" required>
                                                <option value="" disabled="" selected="" hidden="">Select
                                                    country</option>
                                                @foreach ($countries as $item)
                                                    <option value="{{ $item->sort_name }}">{{ $item->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-grou">
                                            <input type="text" name="number" class="form-control"
                                                placeholder="Phone Number" maxlength="12" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="job_title" class="form-control"
                                                placeholder="Job Title" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group ss-item-required">
                                            <input type="text" name="company" class="form-control"
                                                placeholder="Company Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control" name="website"
                                                placeholder="Address..." />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="city" class="form-control"
                                                placeholder="Town / City" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select name="state" id="states-ids" class="form-control">
                                                <option value="" disabled="" selected="" hidden="">Select
                                                    State</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" maxlength="6" name="zip" class="form-control"
                                                placeholder="Postcode / zip" />
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
                                <div class="form-group licence-wrap individual-report-price  justify-content-around"
                                    divID="lic1">
                                    <input type="radio" id="single" value="single" name="price"
                                        checked="selected">
                                    <label for="single">Single User License
                                    </label><span style="color: #002c60">$4000</span>
                                </div>
                                <div class="form-group licence-wrap individual-report-price justify-content-around"
                                    divID="lic2">
                                    <input type="radio" id="multi" value="multi" name="price">
                                    <label for="multi" style="width: 138px;">Multi User License</label>
                                    <span style="color: #002c60">$6000</span>
                                </div>
                                <div class="form-group licence-wrap individual-report-price justify-content-around"
                                    divID="lic3">
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
                                        <input type="radio" name="card" id="card" checked="default-payment">
                                        <label for="card" id="debit-credit">Credit / Debit Card <img
                                                src="{{ asset('web/images/checkout/credit-card.png') }}" alt=""
                                                height="21px"></label>
                                    </div>
                                    <div class="bank-transfer mt-3">
                                        <input type="radio" name="card" id="transfer">
                                        <label for="transfer" id="bank-transfer">Direct Bank Transfer <img
                                                src="{{ asset('web/images/checkout/direct-bank-transfer.png') }}"
                                                alt="" height="21px"></label>

                                    </div>
                                    <button type="submit" class="checkout-btn btn-block btn mt-4">Checkout</button>
                                </div>
                                <div class="we-accept row mt-5 align-items-center pt-3">
                                    <div class="col-lg-4">We Accept</div>
                                    <div class="col-lg-7"><img src="{{ asset('web/images/payment-logos.png') }}"
                                            alt="payment-logo"></div>
                                </div>
                            </div>

                        </div>
                    </div>
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
                    </script>
                @endsection
