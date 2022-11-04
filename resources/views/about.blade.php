@extends("index")

@section("content")
   <div class="breadcrums-container py-5" style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellent-insights/public/web/images/breadcrums/contact-us.jpg);">
    <div class="container pt-5">
        <div class="text-center mt-3">
            <h3 class="breadcrumbs-title  fw-bold text-white">About Us</h3>
        </div>
    </div>
   </div>
   <div class="about-content mt-5">
        <div class="container">
            <div class="row text-center about-us-content-heading">
                <h2 class="fw-bold" style="color: #002c60;">We are a one-stop solution for market research and consulting.</h2>
                <p class="mb-0">
                    Our service portfolio include syndicate and customized research reports driven by market intelligence studies that helps you add value to your business decisions. You can rely on us for custom research and service, business intelligence, and end-to-end market research solutions. 
                </p>
            </div>
            <div class="row about-us-vision justify-content-between align-items-center mb-5">
                <div class="col-lg-6 p-3 about-us-vision-img vision-img-container">
                   <img class="img-fluid about-us-vision-img" src="{{asset("web/images/about/about-us.jpg")}}" alt="">
                </div>
                <div class="col-lg-5 text-end">
                    <div class="vision-content mb-3">
                        <h2 style="color: #002c60">
                        Vision
                        </h2>
                    <p>
                        Our aim is to establish excellence in providing the best market research and consulting studies by working with the clients to empower them with actionable insights and creating customer-centric products.
                    </p>
                    </div>
                    <div class="mission-content mt-3">
                        <h2  style="color: #002c60">
                        Mission
                    </h2>
                    <p>
                        To offer quality in our service and showcase expertise by providing customized reports that suits the need of the clients.
                    </p>
                    </div>
                </div>
            </div>
            <div class="row accordion">
                <button class="accordion-btn">We Deliver Actionable Insights</button>
                <div class="col-lg-12 panel">
                    <div class="panel-content">An insight is nothing without an action. Our top client reports offer actionable insights that encourage you to take timely decisions. Xcellent Insights is a leading reseller in the corporate world where insights are gathered through a large pool of market resources to present in an organized manner. </div>
                </div>
                <button class="accordion-btn">Availability of Wide Range of Reports </button>
                <div class="col-lg-12 panel">
                    <div class="panel-content" >We work with a plethora of well-known report publishers having in-house research and analysis teams in a standard capacity.</div>
                </div>
                <button class="accordion-btn">Market Excellence</button>
                <div class="col-lg-12 panel">
                    <div class="panel-content">Having a diversified portfolio across several industries the market reports excel in providing an in-depth analysis and covering the latest market and industry trends.</div>
                </div>
                <button class="accordion-btn mb-0">Report Customization</button>
                <div class="col-lg-12 panel">
                    <div class="panel-content">We contain a sizeable data repository with personalization levels to cater to your business needs.</div>
                </div>
            </div>
        </div>
    </div>
@endsection