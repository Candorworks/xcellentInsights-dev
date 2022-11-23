@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
        <div class="container pt-5">
            <div class="text-center mt-3">
                <h3 class="breadcrumbs-title text-white">Blog Details</h3>
            </div>
        </div>
    </div>
    <div class="blog-container mt-5">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-7 blog-content-container p-5">
                    @if ($blog->image == null)
                        <div class="blog-bg px-3 py-4 m-0"
                            style="background-image: linear-gradient(45deg, rgb(60 59 64 / 34%), rgb(8 83 156 / 51%)),url('{{asset('web/images/blog/5.jpg') }}'); ">
                            <p class="blog-badge mb-3">{{ $blog->category->name }}</p>
                            <h3 class="mb-3 text-light"> {{ $blog->title }}</h3>
                            <div class="text-light pt-2">
                                <i class="fa fa-user fa-2xs" aria-hidden="true"></i>
                                <span class="pe-2"><small>{{ $blog->author }}</small></span>
                                <i class="fa-regular fa-calendar fa-2xs"></i>
                                <span
                                    class="pe-2"><small>{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</small></span>
                                <i class="fa-regular fa-clock fa-2xs"></i>
                                <span><small>5 min read</small></span>
                            </div>
                        </div>
                        <div class="blog-content mt-5">{!! $blog->description !!}</div>
                    @else
                        <div class="blog-bg px-3 py-4 m-0"
                            style="background-image: linear-gradient(45deg, rgb(60 59 64 / 34%), rgb(8 83 156 / 51%)),url('{{ asset('web/'.$blog->image) }}');">
                            <p class="blog-badge mb-3">{{ $blog->category->name }}</p>
                            <h3 class="mb-3 text-light"> {{ $blog->title }}</h3>
                            <div class="text-light pt-2">
                                <i class="fa fa-user fa-2xs" aria-hidden="true"></i>
                                <span class="pe-2"><small>{{ $blog->author }}</small></span>
                                <i class="fa-regular fa-calendar fa-2xs"></i>
                                <span
                                    class="pe-2"><small>{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</small></span>
                                <i class="fa-regular fa-clock fa-2xs"></i>
                                <span><small>5 min read</small></span>
                            </div>
                        </div>
                        <div class="blog-content mt-5">{!! $blog->description !!}</div>
                    @endif
                </div>

                <div class="col-lg-4">
                    <div class="search-box-blog shadow-soft sidebar-search">
                        <form class="search-bar" method="post" action="{{ route('blogSeacrhByTitle') }}">
                            @csrf
                            <input type="text" name="searchtitle" placeholder="Search...">
                            <span>
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </span>
                        </form>
                    </div>
                    <div class="recent-post-container px-5 py-3 mt-4">
                        <div class="recent-post-title">
                            <h5>Recent Post</h5>
                        </div>
                        <div class="recent-posts mt-5">
                            <div class="recent-single-post ">
                                @foreach ($results as $result)
                                    <div class="row pb-4">
                                        <div class="col-lg-5">
                                            <div class="recent-post-img-box">
                                                @if ($result->image == null)
                                                    <img class="img-fluid" src="{{ asset('web/images/blog/5.jpg') }}"
                                                        alt="">
                                                @else
                                                    <img class="img-fluid" src="{{ asset('web/' . $result->image) }}"
                                                        alt="">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="recent-single-post-title">
                                                <a href="{{ route('blog-details', ['blog_slug' => $result['slug']]) }}">
                                                    <p class="mb-0">{{ substr($result->title, 0, 60) }}...</p>
                                                </a>
                                            </div>
                                            <div class="recent-single-post-calender">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <span
                                                    class="pe-2"><small>{{ Carbon\Carbon::parse($result->created_at)->diffForHumans() }}</small></span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="categories-blog-page p-5 mt-5">
                        <div class="category-sidebar-title mb-4">
                            <h5>Categories</h5>
                        </div>
                        <ul class="mt-3 p-0">
                            @foreach ($categories as $category)
                                <li><a href="{{ url('blog/category') }}/{{ $category->slug }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
