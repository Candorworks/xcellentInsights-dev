@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(web/images/breadcrums/contact-us.webp);">
        <div class="container pt-5">
            <div class="text-center mt-3">
                <h3 class="breadcrumbs-title text-white">Meet Our Team</h3>
            </div>
        </div>
    </div>
    <div class="team-container mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="team-heading">
                        <h2 class="team-heading-underline" style="color: #00206c">Our Professionals</h2>
                    </div>
                    <p>Xcellent Insights represents an intellectually empowered and rationally driven team of focused
                        individuals, striving to work progressively.</p>
                </div>
                <div class="col-lg-6">
                    <div class="team-heading">
                        <h2 class="team-heading-underline" style="color: #00206c">Join Us</h2>
                    </div>
                    <p>Market Research Future with Xcellent Insights</p>
                    <div class="team-apply-now-btn">
                        <a class="mt-2" href="{{ route('career') }}">Apply Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-4">
                    <div class="team-member-card text-center px-3 py-5">
                        <div class="member-icon-box text-center">
                            <img class="img-fluid" src="{{ asset('web/images/team/img1.png') }}" alt="">
                        </div>
                        <h4>Vipin Unni</h4>
                        <h6>Co-Founder & Director</h6>
                        <div class="member-about-btn">
                            <button class="about-btn">About Me</button>
                            <div class="panel-content-team pt-3">Vipin has experience in working with Market Research, IT
                                Software Product/ Services and B2B services firms. As a Strategic Growth Professional, Vipin
                                has specialization in strategy development planning and project execution across Industry
                                verticals. Vipin holds the ability to understand what customers need and how his support
                                team can help. Identifying customer pain points has never been an easy task. While making
                                assumptions is an easier way out, you need to have enough data to learn what your customers
                                want even before they realize it. Vipin likes assisting his clients with their pain points
                                related to Process / Productivity / Support with the intention of fulfilling a particular
                                need by diagnosing the current state of each client's business using a consultative
                                approach, developing a tailored plan to address their current needs, and create a roadmap
                                for future growth opportunities.</div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 offset-1">
                    <div class="team-member-card text-center px-3 py-5">
                        <div class="member-icon-box">
                            <img class="img-fluid" src="{{ asset('web/images/team/img2.png') }}" alt="">
                        </div>
                        <h4>Atul G</h4>
                        <h6>Digital Marketing Manager</h6>
                        <div class="member-about-btn">
                            <button class="about-btn">About Me</button>
                            <div class="panel-content-team pt-3">Having worked in the B2B and B2C industry for over 11+
                                years,
                                Atul demonstrates his proficiency in digital marketing. He is responsible for planning,
                                executing, and managing the company’s overarching digital marketing strategy. He focuses on
                                branding, along with creating digital presence on various online platforms, by pitching
                                engaging content that drives traffic and adds value to readers. With his expertise in
                                analytical and technical skills, he has the potential to drive the business to the next
                                level. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
