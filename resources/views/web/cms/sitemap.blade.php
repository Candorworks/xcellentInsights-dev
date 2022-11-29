@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
        <div class="container pt-5">
            <div class="text-center mt-3">
                <h3 class="breadcrumbs-title  fw-bold text-white">Sitemap</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4 justify-content-center ">
            <div class="col-lg-3">
                <div class="categories-report-hub-page ">
                    <div class="category-sidebar-title p-4">
                        <h5>Industry Vertical</h5>
                    </div>
                    <ul class=" p-0">
                        <li> <a href="{{ route('report-hub') }}">Report</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">

            </div>
        </div>

    </div>
@endsection
