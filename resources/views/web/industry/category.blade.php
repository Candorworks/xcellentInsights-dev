@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
        <div class="container pt-5">
            <div class="text-center text-white mt-3">
                <h3 class="breadcrumbs-title fw-bold ">
                    Agriculture
                </h3>
                <p class="mt-4 px-5">Agriculture plays in key role in human existence and is considered to be the backbone of
                    economic system
                    of many developed and developing countries. The agriculture industry has rapidly evolved over the recent
                    years due to rapidly expanding global population and changing climatic conditions and consumer lifestyle
                    patterns. In addition, rapid technological developments, increasing awareness about advanced farming
                    methodologies among local farmers, and growing adoption of precision farming and drones for seeding are
                    boosting the agriculture sector growth. Moreover, manufacturers and farmers are focused on adopting
                    various strategies to cater to rising consumer demand and challenges such as growing demand for organic
                    and sustainable food and increasing food wastage.</p>
            </div>
        </div>
    </div>
    <div class="report-hub-container mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="search-report">
                        <input type="text" class="search-report-input" placeholder="Search Report Title / Keyword">
                        <button class="search-report-submit-btn">Search</button>
                    </div>
                </div>
            </div>
            <div class="row mt-4 justify-content-center ">
                <div class="col-lg-3">
                    <div class="categories-report-hub-page ">
                        <div class="category-sidebar-title p-4">
                            <h5>Industry Vertical</h5>
                        </div>
                        <ul class=" p-0">
                            {{-- @foreach ($results as $result)
                                <li><a href="#">{{ $result->name }}</a></li>
                            @endforeach --}}

                        </ul>
                    </div>
                    <div class="enquiry-now-report-hub text-center p-4 mt-4">
                        <a href="" class="py-2 px-5">ENQUIRY NOW</a>
                    </div>
                </div>
                <div class="col-lg-8">
                </div>
            </div>
        </div>
    </div>
@endsection
