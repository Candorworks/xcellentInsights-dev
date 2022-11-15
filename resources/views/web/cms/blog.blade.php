@extends("index")

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
            <div class="col-lg-4">
                <a href="{{route("individual-blog")}}" style="text-decoration: none;">
                    <div class="blog-img-box">
                        <img class="img-fluid" src="{{asset("web/images/blog/1.jpg")}}" alt="">
                    </div>
                    <div class="blog-desc-box px-4 py-3">
                        <h6>Pharma & Healthcare</h6>
                        <p>Gluten Free Biscuits Companies Helping Patients with Celiac and Gluten Sensitivity To Enjoy Their Favorite Biscuit Flavors with Gluten Alternatives</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="{{route("individual-blog")}}" style="text-decoration: none;">
                    <div class="blog-img-box">
                        <img class="img-fluid" src="{{asset("web/images/blog/2.jpg")}}" alt="">
                    </div>
                    <div class="blog-desc-box px-4 py-3">
                        <h6>Pharma & Healthcare</h6>
                        <p>Benefits and Harmful Effects of Marijuana: A Recreational and Medical Drug</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
   </div>
@endsection