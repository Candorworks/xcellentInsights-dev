@extends("web.include.index")

@section("content")
   <div class="breadcrums-container py-5" style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
    <div class="container pt-5">
        <div class="text-center mt-3">
            <h3 class="breadcrumbs-title  text-white">Blogs</h3>
        </div>
    </div>
   </div>
   <div class="blog-content mt-5">
    <div class="container">
        <div class="row" >
            @foreach($results as $result)
            <div class="col-lg-4">
                <a href="{{route('blog-details')}}" style="text-decoration: none;">
                    <div class="blog-img-box">
                        @if(($result->image)==null)
                        <img class="img-fluid" src="{{asset('web/images/blog/5.jpg')}}" alt="Image Processing" style="height:250px; width:415.99px;">
                        @else
                        <img class="img-fluid" src="{{asset('web/'.$result->image)}}" alt="Image Processing" style="height:250px; width:415.99px;">
                        @endif
                    </div>
                    <div class="blog-desc-box px-4 py-3">
                        <h6>{{$result->Category->name}}</h6>
                        <p>{{$result->title}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
   </div>
@endsection