@extends("index")

@section("content")
   <div class="breadcrums-container py-5" style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
    <div class="container pt-5">
        <div class="text-center mt-3">
            <h3 class="breadcrumbs-title  fw-bold text-white">Report Hub</h3>
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
                    <li><a href="#">Automobile &amp; Transportation</a></li>
                    <li><a href="#">Chemicals &amp; Materials</a></li>
                    <li><a href="#">Consumer Goods</a></li>
                    <li><a href="#">Energy &amp; Power</a></li>
                    <li><a href="#">Electronics &amp; Semiconductor</a></li>
                    <li><a href="#">Food &amp; Beverages</a></li>
                    <li><a href="#">Machinery &amp; Equipment</a></li>
                    <li><a href="#">Pharma &amp; Healthcare</a></li>
                    <li><a href="#">Service &amp; Software</a></li>
                    <li><a href="#">Other</a></li>
                    <li><a href="#">Packaging</a></li>
                    <li><a href="#">IT and Communication</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Medical Devices &amp; Consumables</a></li>
                    <li><a href="#">Agriculture</a></li>
                    <li><a href="#">Medical Care</a></li>
                    </ul>
                </div>
                <div class="enquiry-now-report-hub text-center p-4 mt-4">
                    <a href="" class="py-2 px-5">ENQUIRY NOW</a>
                </div>
            </div>
            <div class="col-lg-8">
                @for ($i=0 ; $i <=5 ; $i++)
                    <div class="individual-report-container p-3">
                    <h5>2023-2028 Global and Regional 2-Chloro-5-trifluoromethylpyridine CAS 52334-81-3 Industry Status and Prospects Professional Market Research Report Standard Version</h5>
                    <p>The global 2-Chloro-5-trifluoromethylpyridine CAS 52334-81-3 market is expected to reach US$ XX Million by 2028, with a CAGR of XX% from 2023 to 2028, based...</p>
                    <div class="report-detail-bar py-2 px-3">
                        <div class="row">
                            <div class="col-lg-4 ">
                                <h6 class="m-0">Report ID: HNY284819</h6>
                            </div>
                            <div class="col-lg-4">
                                <h6 class="m-0">Publish date: Nov 2022</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="m-0">Pages: 160</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="m-0">$ 3500</h6>
                            </div>
                        </div>       
                    </div>
                </div>
                @endfor
                {{-- <div class="individual-report-container p-3">
                    <h5>2023-2028 Global and Regional 2-Chloro-5-trifluoromethylpyridine CAS 52334-81-3 Industry Status and Prospects Professional Market Research Report Standard Version</h5>
                    <p>The global 2-Chloro-5-trifluoromethylpyridine CAS 52334-81-3 market is expected to reach US$ XX Million by 2028, with a CAGR of XX% from 2023 to 2028, based...</p>
                    <div class="report-detail-bar py-2 px-3">
                        <div class="row">
                            <div class="col-lg-4 ">
                                <h6 class="m-0">Report ID: HNY284819</h6>
                            </div>
                            <div class="col-lg-4">
                                <h6 class="m-0">Publish date: Nov 2022</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="m-0">Pages: 160</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="m-0">$ 3500</h6>
                            </div>
                        </div>       
                    </div>
                </div>
                <div class="individual-report-container p-3">
                    <h5>2023-2028 Global and Regional 2-Chloro-5-trifluoromethylpyridine CAS 52334-81-3 Industry Status and Prospects Professional Market Research Report Standard Version</h5>
                    <p>The global 2-Chloro-5-trifluoromethylpyridine CAS 52334-81-3 market is expected to reach US$ XX Million by 2028, with a CAGR of XX% from 2023 to 2028, based...</p>
                    <div class="report-detail-bar p-3">
                        <div class="row">
                            <div class="col-lg-4 ">
                                <h6 class="m-0">Report ID: HNY284819</h6>
                            </div>
                            <div class="col-lg-4">
                                <h6 class="m-0">Publish date: Nov 2022</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="m-0">Pages: 160</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="m-0">$ 3500</h6>
                            </div>
                        </div>       
                    </div>
                </div>
                <div class="individual-report-container p-3">
                    <h5>2023-2028 Global and Regional 2-Chloro-5-trifluoromethylpyridine CAS 52334-81-3 Industry Status and Prospects Professional Market Research Report Standard Version</h5>
                    <p>The global 2-Chloro-5-trifluoromethylpyridine CAS 52334-81-3 market is expected to reach US$ XX Million by 2028, with a CAGR of XX% from 2023 to 2028, based...</p>
                    <div class="report-detail-bar p-3">
                        <div class="row">
                            <div class="col-lg-4 ">
                                <h6 class="m-0">Report ID: HNY284819</h6>
                            </div>
                            <div class="col-lg-4">
                                <h6 class="m-0">Publish date: Nov 2022</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="m-0">Pages: 160</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="m-0">$ 3500</h6>
                            </div>
                        </div>       
                    </div>
                </div>
                <div class="individual-report-container p-3">
                    <h5>2023-2028 Global and Regional 2-Chloro-5-trifluoromethylpyridine CAS 52334-81-3 Industry Status and Prospects Professional Market Research Report Standard Version</h5>
                    <p>The global 2-Chloro-5-trifluoromethylpyridine CAS 52334-81-3 market is expected to reach US$ XX Million by 2028, with a CAGR of XX% from 2023 to 2028, based...</p>
                    <div class="report-detail-bar p-3">
                        <div class="row">
                            <div class="col-lg-4 ">
                                <h6 class="m-0">Report ID: HNY284819</h6>
                            </div>
                            <div class="col-lg-4">
                                <h6 class="m-0">Publish date: Nov 2022</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="m-0">Pages: 160</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="m-0">$ 3500</h6>
                            </div>
                        </div>       
                    </div>
                </div>
                <div class="individual-report-container p-3">
                    <h5>2023-2028 Global and Regional 2-Chloro-5-trifluoromethylpyridine CAS 52334-81-3 Industry Status and Prospects Professional Market Research Report Standard Version</h5>
                    <p>The global 2-Chloro-5-trifluoromethylpyridine CAS 52334-81-3 market is expected to reach US$ XX Million by 2028, with a CAGR of XX% from 2023 to 2028, based...</p>
                    <div class="report-detail-bar p-3">
                        <div class="row">
                            <div class="col-lg-4 ">
                                <h6 class="m-0">Report ID: HNY284819</h6>
                            </div>
                            <div class="col-lg-4">
                                <h6 class="m-0">Publish date: Nov 2022</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="m-0">Pages: 160</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6 class="m-0">$ 3500</h6>
                            </div>
                        </div>       
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
