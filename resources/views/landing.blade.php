<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AIMS Healthcare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>

    {{-- Banner --}}
    <section class="hero position-relative text-white">
        <div class="overlay"></div>

        <div class="container position-relative z-1 pb-5 mb-5">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <img src="{{ asset('assets/images/logo.png') }}" alt="AIMS Logo" class="logo" />
                <img src="{{ asset('assets/images/call.png') }}" alt="Call Icon" class="logo" />
            </div>

            <div class="hero-content text-center text-md-start">
                <div class="hero-text">
                    <h1 class="display-5 fw-bold pt-4">Dubai’s Most<br>Convenient Lab Test<br>Service At Your Door</h1>
                    <ul class="features list-unstyled mt-4">
                        <li class="mb-2">+ Hassle-free Home Sample Collection</li>
                        <li>+ Available Anytime, Anywhere in Dubai</li>
                    </ul>
                    <a href="#" class="btn btn-light text-danger fw-bold px-4 py-2 mt-4">BOOK NOW</a>
                </div>
            </div>
        </div>
    </section>

    {{-- 2 --}}
    <section cπlass="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 mt-4 mt-md-0 text-center text-md-start">
                    <h2 class="fw-bold mb-3">Accurate Lab Results from<br>the Comfort of Your Home</h2>
                    <p class="text-muted">
                        Skip the hassle of lab visits with AIMS Healthcare’s convenient home blood testing service.
                        Our expert DHA-licensed professionals will visit you at a scheduled time, often within 30
                        minutes,
                        to collect accurate samples and deliver reliable results right to your doorstep.
                        Book your appointment today for seamless, hassle-free testing at home!
                    </p>
                    <div class="book-btn">
                        <a href="#" class="btn px-4 py-2 fw-bold">BOOK NOW</a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/images/doc-team.png') }}" alt="Doctors"
                        class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </section>

    {{-- 3 --}}
    <section class="lab-test-section text-white pb-5">

        <div class="lab-test-background py-5">
            <div class="container text-center mb-5 pb-5">
                <h2 class="fw-bold mb-2">Discover a Range of Lab Test Options</h2>
                <p class="lead">Our skilled medical team ensures accurate lab results and fast reporting for your
                    convenience and peace of mind.</p>
            </div>
        </div>

        <div class="container position-relative z-1">
            <div class="row g-4">
                {{-- Food Intolerance Test --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center p-4 h-100 bg-transparent">
                        <img src="{{ asset('assets/images/section3/food1.png') }}" alt="Food Intolerance Test"
                            class="mb-3" style="height: 78px;">
                        <h5 class="fw-semibold mb-2">Food Intolerance Test</h5>
                        <p class="small">Identifies foods that cause headaches or fatigue, helping you improve your
                            diet.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2 px-3 learn-button">
                            Learn More <span class="arrow-icon">→</span>
                        </a>

                    </div>
                </div>

                {{-- Beta HCG Test --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center p-4 h-100 bg-transparent">
                        <img src="{{ asset('assets/images/section3/beta2.png') }}" alt="Beta HCG Test" class="mb-3"
                            style="height: 78px;">
                        <h5 class="fw-semibold mb-2">Beta HCG Test</h5>
                        <p class="small">Measures hCG to confirm pregnancy, monitor progress, or detect certain medical
                            conditions.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2 px-3 learn-button">
                            Learn More <span class="arrow-icon">→</span>
                        </a>
                    </div>
                </div>

                {{-- Liver Function Test --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center p-4 h-100 bg-transparent">
                        <img src="{{ asset('assets/images/section3/liver3.png') }}" alt="Liver Function Test"
                            class="mb-3" style="height: 78px;">
                        <h5 class="fw-semibold mb-2">Liver Function Test</h5>
                        <p class="small">Assesses enzyme levels and health markers for liver performance and wellness.
                        </p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2 px-3 learn-button">
                            Learn More <span class="arrow-icon">→</span>
                        </a>
                    </div>
                </div>

                {{-- Vitamin and Mineral Test --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center p-4 h-100 bg-transparent">
                        <img src="{{ asset('assets/images/section3/mineral4.png') }}" alt="Vitamin and Mineral Test"
                            class="mb-3" style="height: 78px;">
                        <h5 class="fw-semibold mb-2">Vitamin and Mineral Test</h5>
                        <p class="small">Checks nutrient levels to identify deficiencies impacting health, immunity,
                            and energy.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2 px-3 learn-button">
                            Learn More <span class="arrow-icon">→</span>
                        </a>
                    </div>
                </div>

                {{-- Full Body Check-Up --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center p-4 h-100 bg-transparent">
                        <img src="{{ asset('assets/images/section3/fullbody5.png') }}" alt="Full Body Check-Up"
                            class="mb-3" style="height: 78px;">
                        <h5 class="fw-semibold mb-2">Full Body Check-Up</h5>
                        <p class="small">Comprehensive screening to detect health risks early and monitor overall
                            wellness.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2 px-3 learn-button">
                            Learn More <span class="arrow-icon">→</span>
                        </a>
                    </div>
                </div>

                {{-- Thyroid Test --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center p-4 h-100 bg-transparent">
                        <img src="{{ asset('assets/images/section3/thyroid6.png') }}" alt="Thyroid Test"
                            class="mb-3" style="height: 78px;">
                        <h5 class="fw-semibold mb-2">Thyroid Test</h5>
                        <p class="small">Measures hormone levels to detect thyroid disorders that impact metabolism
                            and energy.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2 px-3 learn-button">
                            Learn More <span class="arrow-icon">→</span>
                        </a>
                    </div>
                </div>

                {{-- Hormones Test --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center p-4 h-100 bg-transparent">
                        <img src="{{ asset('assets/images/section3/harmones7.png') }}" alt="Hormones Test"
                            class="mb-3" style="height: 78px;">
                        <h5 class="fw-semibold mb-2">Hormones Test</h5>
                        <p class="small">Analyzes hormonal balance to help understand stress, metabolism, and
                            reproductive health.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2 px-3 learn-button">
                            Learn More <span class="arrow-icon">→</span>
                        </a>
                    </div>
                </div>

                {{-- Kidney Function Test --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center p-4 h-100 bg-transparent">
                        <img src="{{ asset('assets/images/section3/kidney8.png') }}" alt="Kidney Function Test"
                            class="mb-3" style="height: 78px;">
                        <h5 class="fw-semibold mb-2">Kidney Function Test</h5>
                        <p class="small">Evaluates waste removal and hydration balance by testing kidney health
                            markers.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2 px-3 learn-button">
                            Learn More <span class="arrow-icon">→</span>
                        </a>
                    </div>
                </div>

                {{-- DNA Test --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center p-4 h-100 bg-transparent">
                        <img src="{{ asset('assets/images/section3/dna9.png') }}" alt="DNA Test" class="mb-3"
                            style="height: 78px;">
                        <h5 class="fw-semibold mb-2">DNA Test</h5>
                        <p class="small">Unlock insights into your ancestry, health risks, and genetic wellness
                            profile.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2 px-3 learn-button">
                            Learn More <span class="arrow-icon">→</span>
                        </a>
                    </div>
                </div>

                {{-- HIV Test --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center p-4 h-100 bg-transparent">
                        <img src="{{ asset('assets/images/section3/hiv10.png') }}" alt="HIV Test" class="mb-3"
                            style="height: 78px;">
                        <h5 class="fw-semibold mb-2">HIV Test</h5>
                        <p class="small">Detects HIV antibodies or antigens in your blood for early and confidential
                            diagnosis.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2 px-3 learn-button">
                            Learn More <span class="arrow-icon">→</span>
                        </a>
                    </div>
                </div>

                {{-- STD Test --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center p-4 h-100 bg-transparent">
                        <img src="{{ asset('assets/images/section3/std11.png') }}" alt="STD Test" class="mb-3"
                            style="height: 78px;">
                        <h5 class="fw-semibold mb-2">STD Test</h5>
                        <p class="small">Comprehensive testing for common STDs from the privacy of your home.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2 px-3 learn-button">
                            Learn More <span class="arrow-icon">→</span>
                        </a>
                    </div>
                </div>

                {{-- NIPT Test --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center p-4 h-100 bg-transparent">
                        <img src="{{ asset('assets/images/section3/nipt12.png') }}" alt="NIPT Test" class="mb-3"
                            style="height: 78px;">
                        <h5 class="fw-semibold mb-2">NIPT Test</h5>
                        <p class="small">Safe, non-invasive prenatal test that analyzes fetal DNA to screen for
                            genetic conditions.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2 px-3 learn-button">
                            Learn More <span class="arrow-icon">→</span>
                        </a>
                    </div>
                </div>

                {{-- Covid PCR Test --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center p-4 h-100 bg-transparent">
                        <img src="{{ asset('assets/images/section3/covid13.png') }}" alt="Covid PCR Test"
                            class="mb-3" style="height: 78px;">
                        <h5 class="fw-semibold mb-2">Covid PCR Test</h5>
                        <p class="small">Get accurate COVID-19 detection from the comfort of your home using a nasal
                            swab.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2 px-3 learn-button">
                            Learn More <span class="arrow-icon">→</span>
                        </a>
                    </div>
                </div>

                {{-- Semen Analysis --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="text-center p-4 h-100 bg-transparent">
                        <img src="{{ asset('assets/images/section3/semen14.png') }}" alt="Semen Analysis"
                            class="mb-3" style="height: 78px;">
                        <h5 class="fw-semibold mb-2">Semen Analysis</h5>
                        <p class="small">Evaluates sperm health for fertility concerns — easy and discreet sample
                            collection.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2 px-3 learn-button">
                            Learn More <span class="arrow-icon">→</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#" class="btn btn-light text-danger fw-bold px-4 py-2 ">BOOK NOW</a>
            </div>
        </div>

    </section>

    <!-- HTML Structure -->
    <section class="why-choose-section py-5 text-center">
        <div class="container">
            <h2 class="fw-bold mb-5">Why Choose <span class="text-danger">Aims?</span></h2>

            <div class="choose-wrapper position-relative mx-auto">
                <div class="benefits-container">
                    <!-- Left Column Benefits (Desktop) / Top Benefits (Mobile) -->
                    <div class="benefits-column benefits-left">
                        <div class="choose-box choose-1">
                            <div class="text-start">
                                <h6 class="fw-bold">Convenience</h6>
                                <p class="small">Skip travel and long waits—get lab tests done at home, saving time
                                    and effort.</p>
                            </div>
                            <div class="choose-icon bg-danger">
                                <img src="/assets/images/con.png" alt="Convenience" />
                            </div>
                        </div>

                        <div class="choose-box choose-2">
                            <div class="text-start">
                                <h6 class="fw-bold">Privacy</h6>
                                <p class="small">Enjoy secure, comfortable testing with complete confidentiality.</p>
                            </div>
                            <div class="choose-icon">
                                <img src="/assets/images/privacy.png" alt="Privacy" />
                            </div>
                        </div>

                        <div class="choose-box choose-3">
                            <div class="text-start">
                                <h6 class="fw-bold">Professional Service</h6>
                                <p class="small">Certified professionals ensure accurate, reliable sample collection.
                                </p>
                            </div>
                            <div class="choose-icon">
                                <img src="/assets/images/pro-service.png" alt="Professional Service" />
                            </div>
                        </div>
                    </div>

                    <!-- Center Image -->
                    <div class="choose-circle-container">
                        <div class="choose-circl  mx-auto">
                            <img src="/assets/images/oval-lady.png" alt="Technician"
                                class="img-fluid rounded-cirle" />
                        </div>
                    </div>

                    <!-- Right Column Benefits (Desktop) / Bottom Benefits (Mobile) -->
                    <div class="benefits-column benefits-right">
                        <div class="choose-box choose-4">
                            <div class="choose-icon">
                                <img src="/assets/images/reduced.png" alt="Reduced Exposure" />
                            </div>
                            <div class="text-start">
                                <h6 class="fw-bold">Reduced Exposure</h6>
                                <p class="small">Avoid crowded facilities, lowering the risk of illness.</p>
                            </div>
                        </div>

                        <div class="choose-box choose-5">
                            <div class="choose-icon">
                                <img src="/assets/images/custom-tests.png" alt="Customizable" />
                            </div>
                            <div class="text-start">
                                <h6 class="fw-bold">Customizable Tests</h6>
                                <p class="small">Choose tests tailored to your specific health needs.</p>
                            </div>
                        </div>

                        <div class="choose-box choose-6">
                            <div class="choose-icon">
                                <img src="/assets/images/fast-resilts.png" alt="Fast Results" />
                            </div>
                            <div class="text-start">
                                <h6 class="fw-bold">Fast Results</h6>
                                <p class="small">Streamlined processes deliver quicker results than traditional
                                    methods.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 5 --}}
    <section style="background-color: #e8e9eb" class="how-it-works">
        <div class="container">
            <h6>How It Works</h6>
            <h2>Get Started with <span style="color: #96050F">3 Easy Steps</span></h2>

            <div class="steps-wrapper">
                <!-- Step 1 -->
                <div class="how-step">
                    <div>
                        <div class="icon-wrapper">
                            <img src="/assets/images/steps/appointment.png" alt="Step 1">
                        </div>
                        <h5>Book Your Appointment</h5>
                        <p>Call or WhatsApp us at <br><strong>+97145810811</strong> to schedule your confidential
                            testing session.</p>
                        <div class="arrow d-md-none">⌄</div>
                    </div>
                    <div class="arrow d-none d-md-block">›</div>
                </div>

                <!-- Step 2 -->
                <div class="how-step">
                    <div class="icon-wrapper">
                        <img src="/assets/images/steps/location.png" alt="Step 2">
                    </div>
                    <h5>Share Your Location</h5>
                    <p>Enjoy a seamless booking experience by sharing your location with us.</p>
                    <div class="arrow d-md-none">⌄</div>
                    <div class="arrow d-none d-md-block">›</div>
                </div>

                <!-- Step 3 -->
                <div class="how-step">
                    <div class="icon-wrapper">
                        <img src="/assets/images/steps/time.png" alt="Step 3">
                    </div>
                    <h5>At Your Place in 30 Minutes</h5>
                    <p>Our DHA-licensed medical professionals will arrive discreetly at your preferred time.</p>
                </div>
            </div>

            <div class="text-center book-btn">
                <a href="#" class="btn fw-bold">BOOK NOW</a>
            </div>
        </div>
    </section>

    {{-- review --}}
    <section style="background-color: #e8e9eb" class="review-section py-5 text-center">
        <div class="container container-review">
            <h2 class="fw-bold mb-5">Our Patient Reviews</h2>

            <div class="review-slider position-relative">
                <!-- Review Card -->
                <div class="review-card mx-auto position-relative">
                    <div class="review-img-wrapper">
                        <img src="/assets/images/user.png" alt="User" />
                    </div>
                    <p class="review-text">
                        "The service was incredibly efficient. I booked my blood test at home online, and within 30
                        minutes, a professional arrived at my home. Blood analysis at home was seamless, and the results
                        were quick. The whole process was smooth and hassle-free."
                    </p>
                    <h6 class="review-author">Lovely Razon</h6>
                    <div class="review-stars">⭐⭐⭐⭐⭐</div>
                </div>

                <button class="review-nav2 prev-btn">
                    <img src="assets/images/arrow_back.png" alt="Previous">
                </button>
                <button class="review-nav next-btn">
                    <img src="assets/images/arrow_forward.png" alt="Next">
                </button>
            </div>

            <!-- Mobile Nav Buttons -->
            <div class="review-mobile-nav mt-4 d-md-none justify-content-between">
                <button class="review-nav2">
                    <img src="assets/images/arrow_back.png" alt="Previous">
                </button>
                <button class="review-nav">
                    <img src="assets/images/arrow_forward.png" alt="Next">
                </button>
            </div>
        </div>
    </section>

    {{-- faq --}}
    <section style="background-color: #e8e9eb" class="faq-section">
        <div class="container">
            <h2><span style="color: #96031a;">Frequently</span> Asked Questions</h2>

            <div class="faq-grid">
                <!-- Column 1 -->
                <div class="faq-column">
                    <div class="faq">
                        <input type="checkbox" id="faq1">
                        <label for="faq1">
                            <p class="faq-heading">What are the privacy and safety measures taken for home lab tests?
                            </p>
                            <span class="faq-toggle">+</span>
                            <p class="faq-text">AIMS Healthcare places a high priority on patient privacy...</p>
                        </label>
                    </div>
                    <div class="faq">
                        <input type="checkbox" id="faq2">
                        <label for="faq2">
                            <p class="faq-heading">Can I get a full body check-up at home in Dubai?</p>
                            <span class="faq-toggle">+</span>
                            <p class="faq-text">Yes, full body checkups are available with a wide range of tests.</p>
                        </label>
                    </div>
                    <!-- Add more items -->
                </div>

                <!-- Column 2 -->
                <div class="faq-column">
                    <div class="faq">
                        <input type="checkbox" id="faq3">
                        <label for="faq3">
                            <p class="faq-heading">How long does it take to receive blood test results?</p>
                            <span class="faq-toggle">+</span>
                            <p class="faq-text">Typically, results are available within 24–48 hours depending on the
                                type of test.</p>
                        </label>
                    </div>
                    <div class="faq">
                        <input type="checkbox" id="faq4">
                        <label for="faq4">
                            <p class="faq-heading">Is the flu vaccine safe for children?</p>
                            <span class="faq-toggle">+</span>
                            <p class="faq-text">Yes, it is safe and highly recommended for children.</p>
                        </label>
                    </div>
                    <!-- Add more items -->
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Footer -->
    <footer class="footer-mobile">
        <div class="footer-bg">
            <div class="footer-content">
                <h2>Your Wellness is One Call Away!</h2>
                <p>
                    Aims Healthcare intertwines superior medical practices with the accessibility of highly qualified
                    medical professionals to yield exceptional patient care and clinical outcomes.
                </p>

                <div class="contact-info">
                    <span><img src="/assets/images/phone.png" alt="Phone" /> +971 505 436 505</span>
                    <span><img src="/assets/images/whatsapp.png" alt="WhatsApp" /> +971 505 436 505</span>
                </div>

                <p class="footer-note">© 2024 Aims Healthcare LLC. All Rights Reserved –</p>

                <div class="footer-links">
                    <a href="#">Privacy</a> | <a href="#">Sitemap</a>
                </div>
            </div>
        </div>

        <div class="footer-actions">
            <button>Call Now</button>
            <button>WhatsApp</button>
        </div>
    </footer>

    <!-- Desktop Footer -->
    <footer class="footer-desktop">
        <div class="desktop-footer-wrapper">
            <img class="footer-logo" src="/assets/images/footer-logo.png" alt="AIMS Healthcare Logo" />
            <div class="footer-services">
                Covid PCR Test | Doctor on Call | Physiotherapy At Home | Skilled Nursing Care | Lab At Home | Mother &
                Baby Care |
                Palliative Care at Home | Vitamin Infusion Therapy At Home | Elderly Care at Home | Support Care
            </div>
            <div class="footer-bottom">
                © 2024 Aims Healthcare LLC. All Rights Reserved – MOHAP AD Licence No. I0701K5
            </div>
        </div>
    </footer>

</body>

</html>
