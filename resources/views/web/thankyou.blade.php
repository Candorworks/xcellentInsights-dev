@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
        <div class="container pt-5">
            <div class="text-center mt-3">
                <h3 class="breadcrumbs-title text-white">
                    Thank You
                </h3>
                <p class="mt-4 px-5 text-light text-center">
                    @if (isset($categories))
                        {{ $categories->information }}
                    @endif
                </p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">

                <h6 style="color: #002c60">THANK YOU</h6>
                <h2 class="mt-3" style="color: black">Your enquiry has been submitted. Our analyst will be with you
                    shortly!!!</h2>
            </div>
        </div>
    </div>
@endsection
