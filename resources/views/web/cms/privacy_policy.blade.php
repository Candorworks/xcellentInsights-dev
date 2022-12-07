@extends('web.include.index')

@section('content')
    <div class="breadcrums-container py-5"
        style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(web/images/breadcrums/contact-us.jpg);">
        <div class="container pt-5">
            <div class="text-center mt-3">
                <h3 class="breadcrumbs-title  fw-bold text-white">Privacy Policy</h3>
            </div>
        </div>
    </div>
    <div class="privacy-page-container mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h3 class="privacy-heading" style="color: #002c60; font-weight: bold;">Privacy Policy</h3>
                    <ul>
                        <li>
                            <p>Xcellent Insights LLP (“us,” “we,” or “Company”) is committed to respecting the privacy
                                rights of its customers, visitors, and other users of the Company Website (the “Site”).</p>
                        </li>
                        <li>
                            <p>We created this Website Privacy Policy (this “policy”) to give you confidence as you visit
                                and use the Site, and to demonstrate our commitment to fair information practices and the
                                protection of privacy. This Policy is only applicable to the Site, and not to any other
                                websites that you may be able to access from the Site, each of which may have data
                                collection and use practices and policies that differ materially from this policy.</p>
                        </li>
                        <li>
                            <p>We are a general audience site, and do not direct any of our content specifically at children
                                under 13 years of age. We understand and are committed to respecting the sensitive nature of
                                children’s privacy online. If we learn or have reason to suspect that a Site user is under
                                age 13, we will promptly delete any personal information in that user’s account.</p>
                        </li>
                        <li>
                            <p>In operating the Site, Company may include registration, online surveys, and other online
                                forms that ask users to provide their names, e-mail addresses, and other contact
                                information, as well as the following categories of information contact information, such as
                                your name, address, phone, email and other similar information.</p>
                        </li>
                        <li>
                            <p>Our servers automatically recognize visitors’ domain names and IP addresses (the number
                                assigned to computers on the Internet). No personal information about you is revealed in
                                this process. The Site may also gather anonymous “traffic data” that does not personally
                                identify you, but that may be helpful for marketing purposes or for improving the services
                                we offer.</p>
                        </li>
                        <li>
                            <p>From time to time, we may use the standard “cookies” feature of major browser applications
                                that allows us to store a small piece of data on your computer about your visit to our Web
                                site. We do not set any personally identifiable information in cookies, nor do we employ any
                                data capture mechanisms on our website other than cookies. Cookies help us learn which areas
                                of our site are useful and which areas need improvement. You can choose whether to accept
                                cookies by changing the settings on your browser. However, if you choose to disable this
                                function, your experience at our Web site may be diminished and some features may not work
                                as they were intended.</p>
                        </li>
                        <li>
                            <p>We will not share your personal information with any third parties without your consent,
                                except as necessary to provide you with the services offered by us or to comply with the
                                law. We may use your personal information to verify your identity, to check your
                                qualifications, or to follow up with transactions initiated on the Site. We may also use
                                your contact information to inform you of any changes to the Site, or to send you additional
                                information about Company. If you give your permission during the account registration
                                process, we may share your contact information with our business partners or other companies
                                so that they may send you promotional materials.</p>
                        </li>
                        <li>
                            <p>We may use cookies to deliver content specific to your interests, to save your password so
                                you don’t have to re-enter it each time you visit our site, or for other purposes.
                                Promotions or advertisements displayed on our site may contain cookies. We do not have
                                access to or control over information collected by outside advertisers on our site.</p>
                        </li>
                        <li>
                            <p>In order to accommodate changes in our business, we may sell or buy portions of our company
                                or other companies or assets, including the information collected through this Web site. If
                                Company or substantially all of its assets are acquired, customer information will be one of
                                the assets transferred to the acquirer.</p>
                        </li>
                        <li>
                            <p>The Site has security measures in place to prevent the loss, misuse, and alteration of the
                                information that we obtain from you, but we make no assurances about our ability to prevent
                                any such loss, misuse, to you or to any third party arising out of any such loss, misuse, or
                                alteration.</p>
                        </li>
                        <li>
                            <p>The Site may include interactive forums such as message boards and chat rooms. Please
                                remember that any information that is disclosed in these areas becomes public information
                                and you should exercise caution when deciding to disclose your personal information.</p>
                        </li>
                        <li>
                            <p>The Site may contain links to other websites. If you choose to visit other websites, we are
                                not responsible for the privacy practices or content of those other websites, and it is your
                                responsibility to review the privacy policies at those websites to confirm that you
                                understand and agree with their policies.</p>
                        </li>
                        <li>
                            <p>If you have any questions about this Policy, our practices related to this Site, or if you
                                would like to have us remove your information from our database please contact us at the
                                following support@xcellentinsights.com</p>
                        </li>
                        <li>
                            <p>We reserve the right, at any time, to add to, change, update, or modify this Policy, simply
                                by posting such change, update, or modification on the Site and without any other notice to
                                you. Any such change, update, or modification will be effective immediately upon posting on
                                the Site. It is your responsibility to review this Policy from time to time to ensure that
                                you continue to agree with all of its terms.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="faq-sidebar">
                        <div class="row">
                            <div class="col">
                                <div class="sidebar-heading mb-3 pb-3">
                                    <h5>Related Links</h5>
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
                                        <h6><a href="{{ route('puchase-license-agreement') }}">Purchase & Licensing
                                                Agreement</a></h6>
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
