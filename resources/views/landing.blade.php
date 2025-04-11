<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>AIMS Healthcare</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
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

  <section class="py-5 bg-light">
    <div class="container py-5">
      <div class="row align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 mt-4 mt-md-0 text-center text-md-start">
          <h2 class="fw-bold mb-3">Accurate Lab Results from<br>the Comfort of Your Home</h2>
          <p class="text-muted">Skip the hassle of lab visits with AIMS Healthcare’s convenient home blood testing service. Our expert DHA-licensed professionals will visit you at a scheduled time, often within 30 minutes, to collect accurate samples and deliver reliable results right to your doorstep. Book your appointment today for seamless, hassle-free testing at home!</p>
          <div class="book-btn">
            <a href="#" class="btn px-4 py-2 fw-bold">BOOK NOW</a>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <img src="{{ asset('assets/images/doc-team.png') }}" alt="Doctors" class="img-fluid rounded-4 shadow">
        </div>
      </div>
    </div>
  </section>

  <section class="lab-test-section text-white pb-5">
    <div class="lab-test-background py-5">
      <div class="container text-center mb-5 pb-5">
        <h2 class="fw-bold mb-2">Discover a Range of Lab Test Options</h2>
        <p class="lead">Our skilled medical team ensures accurate lab results and fast reporting for your convenience and peace of mind.</p>
      </div>
    </div>

    <div class="container position-relative z-1">
      <div class="row g-4">
        <!-- Repeated Cards Start -->
        <!-- Just keep this looped structure for the cards you already pasted -->
      </div>
      <div class="text-center mt-5">
        <a href="#" class="btn btn-light text-danger fw-bold px-4 py-2">BOOK NOW</a>
      </div>
    </div>
  </section>

  <section class="why-choose-section py-5 text-center">
    <div class="container">
      <h2 class="fw-bold mb-5">Why Choose <span class="text-danger">Aims?</span></h2>
      <div class="choose-wrapper position-relative mx-auto">
        <div class="benefits-container">
          <div class="benefits-column benefits-left">
            <div class="choose-box choose-1">
              <div class="text-start">
                <h6 class="fw-bold">Convenience</h6>
                <p class="small">Skip travel and long waits—get lab tests done at home, saving time and effort.</p>
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
                <p class="small">Certified professionals ensure accurate, reliable sample collection.</p>
              </div>
              <div class="choose-icon">
                <img src="/assets/images/pro-service.png" alt="Professional Service" />
              </div>
            </div>
          </div>

          <div class="choose-circle-container">
            <div class="choose-circl mx-auto">
              <img src="/assets/images/oval-lady.png" alt="Technician" class="img-fluid rounded-circle" />
            </div>
          </div>

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
                <p class="small">Streamlined processes deliver quicker results than traditional methods.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="how-it-works" style="background-color: #e8e9eb">
    <div class="container">
      <h6>How It Works</h6>
      <h2>Get Started with <span style="color: #96050F">3 Easy Steps</span></h2>
      <div class="steps-wrapper">
        <div class="how-step">
          <div>
            <div class="icon-wrapper">
              <img src="/assets/images/steps/appointment.png" alt="Step 1">
            </div>
            <h5>Book Your Appointment</h5>
            <p>Call or WhatsApp us at <strong>+97145810811</strong> to schedule your confidential testing session.</p>
            <div class="arrow d-md-none">⌄</div>
          </div>
          <div class="arrow d-none d-md-block">›</div>
        </div>
        <div class="how-step">
          <div class="icon-wrapper">
            <img src="/assets/images/steps/location.png" alt="Step 2">
          </div>
          <h5>Share Your Location</h5>
          <p>Enjoy a seamless booking experience by sharing your location with us.</p>
          <div class="arrow d-md-none">⌄</div>
          <div class="arrow d-none d-md-block">›</div>
        </div>
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

  <section class="review-section py-5 text-center" style="background-color: #e8e9eb">
    <div class="container container-review">
      <h2 class="fw-bold mb-5">Our Patient Reviews</h2>
      <div class="review-slider position-relative">
        <div class="review-card mx-auto position-relative">
          <div class="review-img-wrapper">
            <img src="/assets/images/user.png" alt="User" />
          </div>
          <p class="review-text">"The service was incredibly efficient..."</p>
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

  <section class="faq-section" style="background-color: #e8e9eb">
    <div class="container">
      <h2><span style="color: #96031a;">Frequently</span> Asked Questions</h2>
      <div class="faq-grid">
        <div class="faq-column">
          <div class="faq">
            <input type="checkbox" id="faq1">
            <label for="faq1">
              <p class="faq-heading">What are the privacy and safety measures taken for home lab tests?</p>
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
        </div>
        <div class="faq-column">
          <div class="faq">
            <input type="checkbox" id="faq3">
            <label for="faq3">
              <p class="faq-heading">How long does it take to receive blood test results?</p>
              <span class="faq-toggle">+</span>
              <p class="faq-text">Typically, results are available within 24–48 hours depending on the type of test.</p>
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
        </div>
      </div>
    </div>
  </section>

  <footer class="footer-mobile">
    <div class="footer-bg">
      <div class="footer-content">
        <h2>Your Wellness is One Call Away!</h2>
        <p>Aims Healthcare intertwines superior medical practices with the accessibility of highly qualified medical professionals to yield exceptional patient care and clinical outcomes.</p>
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

  <footer class="footer-desktop">
    <div class="desktop-footer-wrapper">
      <img class="footer-logo" src="/assets/images/footer-logo.png" alt="AIMS Healthcare Logo" />
      <div class="footer-services">
        Covid PCR Test | Doctor on Call | Physiotherapy At Home | Skilled Nursing Care | Lab At Home | Mother & Baby Care | Palliative Care at Home | Vitamin Infusion Therapy At Home | Elderly Care at Home | Support Care
      </div>
      <div class="footer-bottom">© 2024 Aims Healthcare LLC. All Rights Reserved – MOHAP AD Licence No. I0701K5</div>
    </div>
  </footer>
</body>

</html>
