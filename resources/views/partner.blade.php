@extends("index")

@section("content")
   <div class="breadcrums-container py-5" style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellent-insights/public/web/images/breadcrums/contact-us.jpg);">
    <div class="container pt-5">
        <div class="text-center mt-3">
            <h3 class="breadcrumbs-title  fw-bold text-white">Ready to Become a Partner</h3>
        </div>
    </div>
   </div>
   <div class="partner-content-container mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="heading-partner-with-us">
                    <h3 style="color: #002c60;" class="fw-semibold">Why Partner with Xcellent Insights?</h3>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="desc-heading-partner-with-us text-muted">
                    <h5>Our partnership program allows to you collaborate with us for more business and assists you with more resources. You can route your client queries through us for you to serve your clients better. We have a dedicated partner relationship manager to facilitate partner relations and queries. Welcome to our partnership program!</h5>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                <div class="benefits-of-joining-heading">
                    <h4 style="color: #002c60; font-weight: 600;" >Benefits of Joining the Partner Program</h4>
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center; justify-content: space-between">
            <div class="col-lg-3 partner-card">
                <div class="partner-icon-box mt-5">
                    <img src="{{asset("web/images/partner/1.png")}}" alt="">
                </div>
                <div class="partner-subheading mt-4">
                    <h5>Solution Focused</h5>
                </div>
                <div class="partner-desc mt-4">
                    <p>We have a plethora of resources to cater to client business needs.</p>
                </div>
            </div>
            <div class="col-lg-3 partner-card">
                <div class="partner-icon-box mt-5">
                    <img src="{{asset("web/images/partner/2.png")}}" alt="">
                </div>
                <div class="partner-subheading mt-4">
                    <h5>Customer Oriented</h5>
                </div>
                <div class="partner-desc  mt-4">
                    <p>We have a diverse portfolio of market reports for customers to cater to their needs.</p>
                </div>
            </div>
            <div class="col-lg-3 partner-card">
                <div class="partner-icon-box mt-5">
                    <img src="{{asset("web/images/partner/3.png")}}" alt="">
                </div>
                <div class="partner-subheading mt-4">
                    <h5>Real-Time Insights</h5>
                </div>
                <div class="partner-desc mt-4">
                    <p>Xcellent Insights offers real-time insights that help our clients to plan and map out the right move.</p>
                </div>
            </div>
            <div class="col-lg-3 partner-card">
                <div class="partner-icon-box mt-5">
                    <img src="{{asset("web/images/partner/4.png")}}" alt="">
                </div>
                <div class="partner-subheading mt-4">
                    <h5>The Value Factor</h5>
                </div>
                <div class="partner-desc mt-4">
                    <p>Timing is most important in business and no one understands this much better than us. You can rely on us to get your business done.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5 see-how">
        <div class="row text-center">
            <div class="col py-4">
                <h4>Ready to Partner? See how our Partner Program can help you grow</h4>
            </div>
        </div>
    </div>
   </div>
@endsection