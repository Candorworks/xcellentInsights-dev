@extends('web.include.index')
@section('content')
{{-- <!-- Breadcrumbs Section Start -->
<div class="rs-breadcrumbs bg-6" style="background-image:url({{AWS3('images/breadcrumbs/6.jpg')}});">
    <div class="container">
        <div class="content-part text-center">
            <h1 class="breadcrumbs-title white-color mb-0">Press Release Details</h1>
        </div>
    </div>
</div> --}}

<div class="breadcrums-container py-5"
    style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url({{AWS3('images/breadcrums/6.jpg')}});">
    <div class="container pt-5">
        <div class="text-center mt-3">
            <h3 class="breadcrumbs-title text-white">Press Release Details</h3>
        </div>
    </div>
</div>
<!-- Breadcrumb section End -->

<!-- Main Content Start -->
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 shadow-soft p-5 offset-2">
            <div class="row p-0 m-0">
                <div class="col-md-12 py-4">
                    <h1 class="mb-3 "> {{ $results->title }}</h1>
                    <div class=" pt-2">
                        <i class="fa-regular fa-calendar fa-2xs"></i>
                        <span class="pe-2"><small>{{ Carbon\Carbon::parse($results->created_at)->diffForHumans()}}</small></span>
                        <i class="fa-regular fa-clock fa-2xs"></i>
                        <span class="pe-2"><small>5 min read</small></span>
                        @if(($results->active)==1)
                        <i class="fa fa-check text-success fa-2xs" aria-hidden="true"></i>
                        <span><small>Active</small></span>
                        @else
                        <i class="fa fa-times text-danger fa-2xs" aria-hidden="true"></i>
                        <span class="pe-2"><small>Inactive</small></span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="my-2">{!! $results->pr !!}</div>
        </div>

    </div>

    @endsection
    @section('page-script')


    @endsection