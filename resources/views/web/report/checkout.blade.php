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
    <div class="checkout-container mt-5">
        <div class="container">
            <div class="report-desc p-4">
                <div class="row">
                    <div class="col-lg-2 pe-0">
                        <div class="report-img">
                            <img src="{{ asset('web/category/1646668183.webp') }}" alt="Image processing"
                                style="width: 150px; height: 170px;">
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="report-content">
                            <h3 class="mb-3" style="color: #002c60">site title</h3>
                            <p></p>
                            <div class="report-meta py-2">
                                <div class="row justify-content-center">
                                    <p class="col-lg-2">ID: </p>
                                    <p class="col-lg-2">Published: </p>
                                    <p class="col-lg-2">Pages: </p>
                                    <p class="col-lg-2">Format: </p>
                                    <p class="col-lg-3">Industry: </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="checkout-content">

            </div>
        </div>
    </div>
@endsection
