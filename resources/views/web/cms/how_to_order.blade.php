@extends("web.include.index")

@section("content")
   <div class="breadcrums-container py-5" style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
    <div class="container pt-5">
        <div class="text-center mt-3">
            <h3 class="breadcrumbs-title  fw-bold text-white">How to Order</h3>
        </div>
    </div>
   </div>
   <div class="how-to-order-container mt-5">
        <div class="container">
            <div class="row">
        <div class="col-lg-8">
            <div class="order-steps mb-3">
                <h6><strong>Order and Delivery:</strong></h6>
                <p>If you are representing your company, you should be authorized to make the purchase decision. You can place your order through any of the channels.</p>
            </div>
            <div class="order-steps mb-3"><h6><strong>Order by Mail:</strong></h6>
                <p>You can share your order and requirements at support@xcellentinsights.com. Please mention specific details to serve you better. Our executives will revert to you within 24 hours upon receipt of the mail.</p></div>
            <div class="order-steps mb-3"><h6><strong>Order By Call:</strong></h6>
                <p>Call us at +1 408 627 7717 (For International Clients) for USA/Canada. Get in touch with our sales representative to place an order.</p></div>
            <div class="order-steps mb-3"><h6><strong>Online Delivery:</strong></h6>
                <p>Your order will be placed to you within 48 hours upon confirmation of payment and the report will be shared in a PDF format to your email address.</p></div>
            <div class="order-steps mb-3"><h6><strong>Customization:</strong></h6>
                <p>You can make a hassle-free request for report customization during a pre-sales query. However, it will be upon the discretion of the company to accommodate customization request for post-sale assistance.</p></div>
        </div>
        <div class="col-lg-4">
                <div class="faq-sidebar">
                    <div class="row">
                        <div class="col">
                            <div class="sidebar-heading mb-3 pb-3">
                                <h5 style="font-weight: bold;">Related Links</h5>
                            </div>
                            <div class="related-links">
                                <div class="individual-links">
                                    <h6><a href="{{ route('faq') }}">Faq's</a></h6>
                                </div>
                                <div class="individual-links">
                                    <h6><a href="{{ route('order') }}">How To Order</a></h6>
                                </div>
                                <div class="individual-links">
                                    <h6><a href="{{ route('privacy') }}">Privacy Policy</a></h6>
                                </div>
                                <div class="individual-links">
                                    <h6><a href="{{ route('terms') }}">Terms of Use</a></h6>
                                </div>
                                <div class="individual-links">
                                    <h6><a href="{{ route('sitemap') }}">HTML Sitemap</a></h6>
                                </div>
                                <div class="individual-links">
                                    <h6><a href="{{ route('agreement') }}">Purchase & Licensing Agreement</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        </div>
   </div>
@endsection