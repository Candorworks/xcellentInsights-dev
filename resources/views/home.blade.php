@extends("index")
@section("content")
<div class="slider-section">
   <video  class="video-fluid img-fluid" autoplay loop muted>
      <source src="{{ asset('web/videos/slide-02.mp4')}}" type="video/mp4">
   </video>
</div>
@endsection
