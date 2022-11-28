@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
        <div class="container pt-5">
            <div class="text-center text-white mt-3">
                <h3 class="breadcrumbs-title fw-bold ">{{ $categories->name }}</h3>
                <p class="mt-4 px-5">{{ $categories->information }}</p>
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
                            <input type="text" class="search-report-input" name="homepagesearch"
                                placeholder="Search Report Title / Keyword">
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
                                <li><a
                                        href="{{ route('category', ['category_slug' => $result['slug']]) }}">{{ $result->name }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="enquiry-now-report-hub text-center p-4 mt-4" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <a href="#" id="enquiry-now" class="py-2 px-5">ENQUIRY NOW</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    @foreach ($reports as $report)
                        <div class="individual-report-container p-3 mb-4">
                            <a href="{{ route('report_detail', ['report_slug' => $report['slug']]) }}">
                                <h5>{{ $report->title }}</h5>
                                <p>{!! substr($report->meta_desc, 0, 180) !!}</p>
                                <div class="report-detail-bar py-2 px-3">
                                    <div class="row">
                                        <div class="col-lg-4 ">
                                            <h6 class="m-0">Report ID: {{ $report->unique_id }}</h6>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6 class="m-0">Publish date: {{ date('M Y', strtotime($result->publish)) }}
                                            </h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <h6 class="m-0">Pages: {{ $report->pages }}</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <h6 class="m-0">$ {{ $report->single_price }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
