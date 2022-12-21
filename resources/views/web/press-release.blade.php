@extends('web.include.index')
@section('content')
<link href="{{ asset('admin/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />


<!-- Breadcrumbs Section Start -->
{{-- <div class="rs-breadcrumbs bg-6" style="background-image:url({{AWS3('images/breadcrumbs/6.jpg')}});">
    <div class="container">
        <div class="content-part text-center">
            <h1 class="breadcrumbs-title white-color mb-0">Press Release</h1>
        </div>
    </div>
</div> --}}
<!-- Breadcrumb section End -->


<div class="breadcrums-container py-5"
    style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url({{AWS3('images/breadcrums/6.jpg')}});">
    <div class="container pt-5">
        <div class="text-center mt-3">
            <h3 class="breadcrumbs-title text-white">Press Release</h3>
        </div>
    </div>
</div>

<!-- Main Content Start -->
<div class="container">
    <div class="row">
        @foreach($results as $result)
        <div class="col-12 col-md-6 col-lg-4 my-3">
            <div class="card strategy_box shadow-soft">
                <div class="card-body" style="height:250px;">
                    <h5 class="blueColor">{{$result->title}}</h5>
                    <div class="d-flex justify-content-between">
                        <div>
                            <p><i class="far fa-clock" aria-hidden="true"></i> {{ Carbon\Carbon::parse($result->created_at)->diffForHumans()}} </p>
                        </div>
                        
                        <div>
                            <p><i class="fa {{$result->active == 1 ? 'fa-check text-success' : 'fa-times text-danger' }}" aria-hidden="true"></i> {{$result->active == 1 ?   'Active' :  'Inactive' }} </p>
                            <!-- <i class="fa fa-times" aria-hidden="true"></i> -->
                        </div>
                    </div>
                    <a href="{{ route('press.release.detail', ['slug' => $result['url']]) }}" target="_blank" class="readon shadow-soft mt-3">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script src="{{ asset('admin/datatables/jquery.dataTables.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#PRtable').DataTable();
    });
</script>
@endsection