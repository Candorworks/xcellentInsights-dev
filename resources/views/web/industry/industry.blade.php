@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(web/images/breadcrums/contact-us.webp);">
        <div class="container pt-5">
            <div class="text-center mt-3">
                <h3 class="breadcrumbs-title  fw-bold text-white">Industry Vertical</h3>
            </div>
        </div>
    </div>
    <div class="all-verticals-container mt-5">
        <div class="container">
            <div class="row">
                @foreach ($results as $result)
                    <div class="col-lg-3 mb-4">
                        <a href="{{ route('category', ['category_slug' => $result['slug']]) }}">
                            <img src="{{ asset('web/' . $result->thumbnail) }}" alt="{{ $result->name }}"
                                style="height:210px; width: 270px;">
                        </a>
                        <div class="industryIcon">
                            <i class="{{ $result->icon }}"></i>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="application/ld+json">
  {
  "@context": "http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement":
  [
  {
  "@type": "ListItem",
  "position": 1,
  "item":
  {
  "type":"Website",
  "@id": "/",
  "name": "Home"
  }
  },
  {
  "@type": "ListItem",
  "position": 2,
  "item":
  {
  "type":"WebPage",
  "@id": "/industry-vertical",
  "name": "Industry Verticals"
  }
  }
  ]
  }
  </script>
@endsection
