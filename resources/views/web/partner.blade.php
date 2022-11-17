@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
        <div class="container pt-5">
            <div class="text-center mt-3">
                <h3 class="breadcrumbs-title text-white">Ready to Become a Partner</h3>
            </div>
        </div>
    </div>
    <div class="partner-content-container mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="heading-partner-with-us">
                        <h3 style="color: #002c60;">Why Partner with Xcellent Insights?</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="desc-heading-partner-with-us text-muted">
                        <h5>Our partnership program allows to you collaborate with us for more business and assists you with
                            more resources. You can route your client queries through us for you to serve your clients
                            better. We have a dedicated partner relationship manager to facilitate partner relations and
                            queries. Welcome to our partnership program!</h5>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="benefits-of-joining-heading">
                        <h4 style="color: #002c60;">Benefits of Joining the Partner Program</h4>
                    </div>
                </div>
            </div>
            <div class="row align-items-center text-center">

                <div class="col-lg-3 p-4">
                    <div class="partner-card">
                        <div class="partner-icon-box ">
                            <img src="{{ asset('web/images/partner/1.png') }}" alt="">
                        </div>
                        <div class="partner-subheading mt-4">
                            <h5>Solution Focused</h5>
                        </div>
                        <div class="partner-desc mt-4">
                            <p>We have a plethora of resources to cater to client business needs.</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 p-4">
                    <div class="partner-card">
                        <div class="partner-icon-box ">
                            <img src="{{ asset('web/images/partner/2.png') }}" alt="">
                        </div>
                        <div class="partner-subheading mt-4">
                            <h5>Customer Oriented</h5>
                        </div>
                        <div class="partner-desc  mt-4">
                            <p>We have a diverse portfolio of market reports for customers to cater to their needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 p-4">
                    <div class="partner-card">
                        <div class="partner-icon-box ">
                            <img src="{{ asset('web/images/partner/3.png') }}" alt="">
                        </div>
                        <div class="partner-subheading mt-4">
                            <h5>Real-Time Insights</h5>
                        </div>
                        <div class="partner-desc mt-4">
                            <p>Xcellent Insights offers real-time insights that help our clients to plan and map out the
                                right
                                move.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 p-4">
                    <div class="partner-card">
                        <div class="partner-icon-box ">
                            <img src="{{ asset('web/images/partner/4.png') }}" alt="">
                        </div>
                        <div class="partner-subheading mt-4">
                            <h5>The Value Factor</h5>
                        </div>
                        <div class="partner-desc mt-4">
                            <p>Timing is most important in business and no one understands this much better than us. You can
                                rely on us to get your business done.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid my-5 see-how">
            <div class="row text-center">
                <div class="col py-4">
                    <h4>Ready to Partner? See how our Partner Program can help you grow</h4>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 p-0 partner-with-us-form">
                    <form id="partner-with-us" class="contact-form" method="post" action="">
                        @csrf
                        <div class="row p-4">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            {{-- <label>Name*</label> --}}
                                            <input type="hidden" name="lead_type" value="">
                                            <!-- <input type="text" class="form-control form-fields" name="name" placeholder="Enter name" /> -->
                                            <div class="row">
                                                <div class="col-md-6 pe-0">
                                                    <input type="text" class="form-control form-fields" name="fname"
                                                        placeholder="First name" required="">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control form-fields" name="lname"
                                                        placeholder="Last Name" required="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            {{-- <label>Email*</label> --}}
                                            <input type="email" class="form-control form-fields" placeholder="Enter email"
                                                name="email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group ">
                                            {{-- <label>Phone Number*</label> --}}
                                            <input type="text" maxlength="12" onkeypress="return isNumber(event)"
                                                class="form-control form-fields" placeholder="Enter number"
                                                name="number" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group ">
                                            {{-- <label>Company Name*</label> --}}
                                            <input type="text" class="form-control form-fields" name="company"
                                                placeholder="Enter company name" />
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            {{-- <label>Company Website*</label> --}}
                                            <input type="text" class="form-control form-fields" name="website"
                                                placeholder="Enter company website" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            {{-- <label>No of reports*</label> --}}
                                            <input type="text" onkeypress="return isNumber(event)" name="reports_no"
                                                class="form-control form-fields" placeholder="Enter no of reports " />
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            {{-- <label>Yearly new publications*</label> --}}
                                            <input type="text" onkeypress="return isNumber(event)"
                                                name="new_publications" class="form-control form-fields"
                                                placeholder="Enter yearly new publications" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            {{-- <label>Descreption*</label> --}}
                                            <textarea name="description" class="form-control form-fields" id="" cols="30" rows="3"
                                                placeholder="Brief company introduction"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 justify-content-between">
                                    <div class="col-lg-8 py-2">
                                        <div class="form-group">
                                            <input type="checkbox" name="terms" />
                                            <span style="padding-left: 10px"> Yes, I have read the <a
                                                    href="{{ route('terms') }}"
                                                    style="color: #002c60; text-decoration: none;">terms of the
                                                    agreement.</a></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="partner-submit-btn text-center">
                                            <button type="submit" class="btn px-5 py1">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 p-0">
                    <div class="partner-contact-text px-5 py-4">
                        <div class="partner-icon">
                            <img src="{{ asset('web/images/partner/signup.png') }}" alt="">
                        </div>
                        <p>Partner with us to grow and expand your business reach. If you are a reseller, channel partner or
                            VAR we would love to talk to you. Drop in your details and our partner relations executive will
                            connect with you sooner.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
