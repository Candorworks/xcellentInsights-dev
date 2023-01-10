@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(web/images/breadcrums/contact-us.webp);">
        <div class="container pt-5">
            <div class="text-center mt-3">
                <h3 class="breadcrumbs-title text-white">About Us</h3>
            </div>
        </div>
    </div>
    <div class="about-content mt-5">
        <div class="container">
            <div class="row text-center about-us-content-heading ">
                <h2 style="color: #002c60;">We are a one-stop solution for market research and consulting.</h2>
                <p class="mb-0">
                    Our service portfolio includes a wide range of syndicate and custom research reports driven by market intelligence studies that can help you to add value to your business decisions. You can rely on us for custom research and service, business intelligence, and end-to-end market research solutions.
                </p>
            </div>
            <div class="row about-us-vision justify-content-between align-items-center mb-5">
                <div class="col-lg-6 p-3 about-us-vision-img vision-img-container">
                    <img class="img-fluid about-us-vision-img" src="{{ asset('web/images/about/about-us.webp') }}"
                        alt="">
                </div>
                <div class="col-lg-5 text-end">
                    <div class="vision-content mb-3">
                        <h2 style="color: #002c60; font-weight:300;">
                            Vision
                        </h2>
                        <p>
                            Our aim is to establish excellence in providing the best market research and consulting studies
                            by working with the clients to empower them with actionable insights and creating
                            customer-centric products.
                        </p>
                    </div>
                    <div class="mission-content mt-3">
                        <h2 style="color: #002c60;  font-weight:300;">
                            Mission
                        </h2>
                        <p>
                            To offer quality in our service and showcase expertise by providing customized reports that
                            suits the need of the clients.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row accordion">
                <button class="accordion-btn">We Deliver Actionable Insights</button>
                <div class="col-lg-12 panel">
                    <div class="panel-content">An insight is nothing without an action. Our top client reports offer
                        actionable insights that encourage you to take timely decisions. Xcellent Insights is a leading
                        reseller in the corporate world where insights are gathered through a large pool of market resources
                        to present in an organized manner. </div>
                </div>
                <button class="accordion-btn">Availability of Wide Range of Reports </button>
                <div class="col-lg-12 panel">
                    <div class="panel-content">We work with a plethora of well-known report publishers having in-house
                        research and analysis teams in a standard capacity.</div>
                </div>
                <button class="accordion-btn">Market Excellence</button>
                <div class="col-lg-12 panel">
                    <div class="panel-content">Having a diversified portfolio across several industries the market reports
                        excel in providing an in-depth analysis and covering the latest market and industry trends.</div>
                </div>
                <button class="accordion-btn mb-0">Report Customization</button>
                <div class="col-lg-12 panel">
                    <div class="panel-content">We contain a sizeable data repository with personalization levels to cater to
                        your business needs.</div>
                </div>
            </div>
            <div class="contact-info-wrapper mt-5">
                <div class="row">
                    <h2 class="text-center pb-3 contact-info-heading">Contact Information</h2>
                    <div class="col-lg-3 text-center">
                        <div class="icon-box mb-4">
                            <div class="icon-shape rounded-circle mb-4">
                                <span class="fas fa-map-marker-alt"></span>
                            </div>
                            <h4 class="icon-box-title">Visit us (US)</h4>
                            <span>NY, New York City - Broad Street (HQ)
                                80 Broad Street 5th Floor, <br>
                                New York City 10004</span>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="icon-box mb-4">
                            <div class="icon-shape rounded-circle mb-4">
                                <span class="fas fa-map-marker-alt"></span>
                            </div>
                            <h4 class="icon-box-title">Visit us (India)</h4>
                            <span> 6th Floor, Amar Paradigm Sr No. 110, 11/3, Veerbhadra Nagar Rd, <br>
                                opp. Croma, Baner, Pune, Maharashtra 411045</span>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="icon-box mb-4">
                            <div class="icon-shape rounded-circle mb-4">
                                <span class="fas fa-headphones-alt"></span>
                            </div>
                            <h4 class="icon-box-title">Call</h4>
                            <p>US: +1 408 627 7717</p>
                            <p>UK: +44 208 638 6439</p>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="icon-box mb-4">
                            <div class="icon-shape rounded-circle mb-4">
                                <span class="far fa-paper-plane"></span>
                            </div>
                            <h4 class="icon-box-title">Email</h4>
                            <p>support@xcellentinsights.com</p>
                            <p>info@xcellentinsights.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-parallex">
            <div class="container text-white">
                <div class="row">
                    <div class="col-lg-6">
                        <p>What we do</p>
                        <h2>We Always Provide Best Business Services to Our Customers</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <div class="parallex-icon-box">
                                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                </div>
                                <div class="parallex-content-box">
                                    <h4>Profit Planning</h4>
                                    <p>At vero eos et accusamus etius too odio dignissimos</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="parallex-icon-box">
                                    <i class="fa fa-suitcase" aria-hidden="true"></i>
                                </div>
                                <div class="parallex-content-box">
                                    <h4>Business Analysis</h4>
                                    <p>At vero eos et accusamus etius too odio dignissimos</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="parallex-icon-box">
                                    <i class="fa fa-file" aria-hidden="true"></i>
                                </div>
                                <div class="parallex-content-box">
                                    <h4>Reports Analysis</h4>
                                    <p>At vero eos et accusamus etius too odio dignissimos</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="parallex-icon-box">
                                    <i class="fa fa-file-powerpoint" aria-hidden="true"></i>
                                </div>
                                <div class="parallex-content-box">
                                    <h4>Project Reporting</h4>
                                    <p>At vero eos et accusamus etius too odio dignissimos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="why-choose-us-container text-center mt-5">
                <h2 class="why-choose-us-heading fw-normal" style="color: #002c60">Why Choose Us?</h2>
            </div>
            <div class="row mt-4 why-choose-us-icons-wrapper p-5">
                <div class="col-lg-4 text-center px-4">
                    <div class="why-choose-us-icon-box ">
                        <img src="{{ asset('web/images/about/services-icon.png') }}" width="20%">
                    </div>
                    <h4 style="color: #002c60">Assured Service</h4>
                    <p>Sit back while our sales team is working on your query. We have dedicated account managers to assist
                        you at every stages. We also offer a limited free post-sales service based on your purchase.</p>
                </div>
                <div class="col-lg-4 text-center px-4">
                    <div class="why-choose-us-icon-box">
                        <img src="{{ asset('web/images/about/customer-service.png') }}" width="20%">
                    </div>
                    <h4 style="color: #002c60">Customer Support</h4>
                    <p>We have a dedicated team of service executives working round the clock to handle your queries. Our
                        service executives are able to reach out to you with proper resolutions based on your queries.</p>
                </div>
                <div class="col-lg-4 text-center px-4">
                    <div class="why-choose-us-icon-box">
                        <i class="fas fa-puzzle-piece fa-3x" aria-hidden="true"></i>
                    </div>
                    <h4 style="color: #002c60">Assured Service</h4>
                    <p>Sit back while our sales team is working on your query. We have dedicated account managers to assist
                        you at every stages. We also offer a limited free post-sales service based on your purchase.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
<script type="application/ld+json">
  {
  "@context": "https://schema.org",
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
  "@id": "/about",
  "name": "About Us"
  }
  }
  ]
  }
  </script>
