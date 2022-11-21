@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
        <div class="container pt-5">
            <div class="text-center text-white mt-3">
                <h3 class="breadcrumbs-title fw-bold ">{{$categories->name}}</h3>
                <p class="mt-4 px-5">{{$categories->information}}</p>
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
                            @foreach ($results as $result)
                                <li><a href="{{ route('category', ['category_slug' => $result['slug']]) }}">{{ $result->name }}</a></li>
                            @endforeach 

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
