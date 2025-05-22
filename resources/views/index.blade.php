@extends('layouts.main')

@section('content')

  <!-- ======= Main Wrapper Start ======= -->
  <main class="main-wrapper overflow-hidden">
   <!-- ======= Hero Start ======= -->
<section class="hero overflow-hidden">
  <div class="slider slider--active">
    <!-- Slide 1 -->
    <div class="slider__single slider__bg container-custom" data-bg-image="/assets/images/bg/hero-bg-1.jpg">
      <img src="/assets/images/shape/slider-shape-1.png" alt="" class="slider__shape slider__shape--one" data-animation="slideInDown" data-delay=".4s" data-duration="2s" />
      <img src="/assets/images/shape/slider-shape-2.png" alt="" class="slider__shape slider__shape--two" data-animation="slideInRight" data-delay=".5s" data-duration="2.5s" />
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-6 col-lg-7 col-md-8">
            <div class="slider-content">
              <span class="slider-content__title_small ml13" data-animation="fadeInUp" data-delay=".4s">
                Integrated Payment & POS Hardware</span>
              <h2 id="ml12" class="slider-content__title_big" data-animation="fadeInUp" data-delay=".6s">
                Reliable Equipment & Systems for Modern Businesses
              </h2>
              <p class="slider-content__text" data-animation="fadeInUp" data-delay=".8s">
                KRKRTECH provides cash registers, POS terminals, management systems, and integrated payment solutions. We cooperate with banks, processing and IT companies, retail and service organizations, transportation providers, and government institutions.
              </p>
              <a href="/about" class="btn btn--common btn--primary rt-button-animation-out" data-animation="fadeInUp" data-delay="1s">
                Get Details
                <svg width="34px" height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                  <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                  <g class="rt-button-cap-fake">
                    <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                  </g>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="slider__single slider__bg container-custom" data-bg-image="/assets/images/bg/hero-bg-2.jpg">
      <img src="/assets/images/shape/slider-shape-1.png" alt="" class="slider__shape slider__shape--three" data-animation="zoomIn" data-delay=".4s" data-duration="2.5s" />
      <img src="/assets/images/shape/slider-shape-4.png" alt="" class="slider__shape slider__shape--four" data-animation="slideInUp" data-delay=".3s" data-duration="2s" />
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-6 col-lg-7">
            <div class="slider-content slider-content--two">
              <span class="slider-content__title_small title title--small ml13" data-animation="fadeInUp" data-delay=".2s">
                Trusted by Businesses</span>
              <h2 class="slider-content__title_big title title--big" data-animation="fadeInUp" data-delay=".4s">
                Ideal POS Systems for Every Retail Environment
              </h2>
              <p class="slider-content__text paragraph" data-animation="fadeInUp" data-delay=".6s">
                POS terminals from KRKRTECH are ideal for shops, kiosks, and various retail points to ensure secure and efficient payment acceptance in dynamic sales environments.
              </p>
              <a href="products.html" class="btn btn--common btn--primary rt-button-animation-out" data-animation="fadeInUp" data-delay=".8s">
                View Products
                <svg width="34px" height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                  <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                  <g class="rt-button-cap-fake">
                    <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                  </g>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ======= Hero End ======= -->

<!-- ======= About Start ======= -->
<section class="about about--area about--padding">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 mb-30">
        <div class="section-heading mb-40">
          <span class="section-heading__title_small wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".4s">
            About KRKRTECH
          </span>
          <h2 class="section-heading__title_big wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
            Smart Payment & POS Solutions You Can Trust
          </h2>
        </div>
        <div class="about-content">
          <h3 class="about-content__title wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".7s">
            Serving <span class="primary-text-color">Thousands</span> of Clients
          </h3>
          <p class="about-content__text wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">
            KRKRTECH is a trusted provider of cutting-edge payment solutions, including POS terminals, cash registers, management systems, and integrated payment technologies. With a focus on reliability and innovation, we support banks, IT companies, retailers, transportation, and public institutions. Our mission is to deliver secure, scalable, and efficient hardware systems tailored for modern business needs.
          </p>
        </div>
      </div>
      <div class="col-lg-6 offset-lg-1 mb-30 text-md-center">
        <div class="about-content__image about-content__image_right position-relative">
          <img width="690" height="617" src="/assets/images/home1/about-right-image-1.jpg" alt="KRKRTECH Office Overview" class="about-img wow fadeInRight" data-wow-delay="1s" data-wow-duration="1.2s" />
          <div class="about-content__experience">
            <div class="about-content__experience_years">10+</div>
            <div class="about-content__experience_title">
              YEAR’S <span>EXPERIENCE IN PAYMENTS</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ======= About End ======= -->

   <!-- ======= Service Area Start ======= -->
<section class="services services--padding section-bg-common">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="section-heading mb-45">
          <span class="section-heading__title_small wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".4s">
            Our Services
          </span>
          <h2 class="section-heading__title_big wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".6s">
            Integrated Solutions for Businesses of All Sizes
          </h2>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="section-button mb-45">
          <a href="services.html" class="btn btn--common btn--primary rt-button-animation-out wow fadeInRight" data-wow-delay=".7s" data-wow-duration=".9s">
            Explore All
            <svg xmlns="http://www.w3.org/2000/svg" width="34px" height="16px" viewBox="0 0 34.53 16">
              <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
              <g class="rt-button-cap-fake">
                <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
              </g>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration=".4s">
        <div class="services__item mb-50">
          <div class="services__item_overlay"></div>
          <header class="services__item_header d-flex align-items-center">
            <i class="flaticon flaticon-pos services__item_icon"></i>
            <h3 class="services__item_title">
              <a href="services.html">POS Terminal Supply</a>
            </h3>
          </header>
          <div class="services__item_content">
            <p class="services__item_paragraph">
              We provide modern and reliable POS terminals suitable for retail, hospitality, and other commercial environments.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".4s" data-wow-duration=".6s">
        <div class="services__item mb-50">
          <div class="services__item_overlay"></div>
          <header class="services__item_header d-flex align-items-center">
            <i class="flaticon flaticon-server services__item_icon"></i>
            <h3 class="services__item_title">
              <a href="services.html">System Integration</a>
            </h3>
          </header>
          <div class="services__item_content">
            <p class="services__item_paragraph">
              End-to-end integration of POS hardware with backend software for seamless business operations.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".6s" data-wow-duration=".8s">
        <div class="services__item mb-50">
          <div class="services__item_overlay"></div>
          <header class="services__item_header d-flex align-items-center">
            <i class="flaticon flaticon-support services__item_icon"></i>
            <h3 class="services__item_title">
              <a href="services.html">Maintenance & Support</a>
            </h3>
          </header>
          <div class="services__item_content">
            <p class="services__item_paragraph">
              Ongoing technical support and maintenance services to ensure uninterrupted operation of your systems.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ======= Service Area End ======= -->

   <!-- ======= Service Key Area Start ======= -->
<section class="services-key services-key--padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="section-heading text-center mb-30">
          <span class="section-heading__title_small">
            Why KRKRTECH?
          </span>
          <h2 class="section-heading__title_big">
            Tailored Technology Solutions for Seamless Business Operations
          </h2>
        </div>
      </div>
    </div>
    <div class="services-key__navbar">
      <div class="row">
        <div class="col-sm-12">
          <ul class="services-key__navbar_nav nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item services-key__navbar_item" role="presentation">
              <button class="services-key__navbar_link nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                <i class="flaticon flaticon-settings"></i> Why Choose Us
              </button>
            </li>
            <li class="nav-item services-key__navbar_item" role="presentation">
              <button class="services-key__navbar_link nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                <i class="flaticon flaticon-team"></i> Our Partners
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="services-key__tabbar pt-50">
      <div class="row">
        <div class="col-sm-12">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                  <div class="services__item services-key__content mb-30">
                    <div class="services__item_overlay services-key__content_overlay"></div>
                    <header class="services__item_header services-key__content_header">
                      <i class="flaticon flaticon-pos services__item_icon services-key__content_icon"></i>
                      <h3 class="services__item_title services-key__content_title">
                        <a href="services.html">Advanced POS Technology</a>
                      </h3>
                    </header>
                    <div class="services__item_content services-key__content_text">
                      <p class="services__item_paragraph services-key__content_paragraph">
                        We offer cutting-edge POS terminals tailored for speed, security, and seamless retail integration.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                  <div class="services__item services-key__content mb-30">
                    <div class="services__item_overlay services-key__content_overlay"></div>
                    <header class="services__item_header services-key__content_header">
                      <i class="flaticon flaticon-server services__item_icon services-key__content_icon"></i>
                      <h3 class="services__item_title services-key__content_title">
                        <a href="services.html">Seamless Integration</a>
                      </h3>
                    </header>
                    <div class="services__item_content services-key__content_text">
                      <p class="services__item_paragraph services-key__content_paragraph">
                        Our systems integrate with banking, retail, and governmental platforms for operational efficiency.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                  <div class="services__item services-key__content mb-30">
                    <div class="services__item_overlay services-key__content_overlay"></div>
                    <header class="services__item_header services-key__content_header">
                      <i class="flaticon flaticon-support services__item_icon services-key__content_icon"></i>
                      <h3 class="services__item_title services-key__content_title">
                        <a href="services.html">Reliable Support</a>
                      </h3>
                    </header>
                    <div class="services__item_content services-key__content_text">
                      <p class="services__item_paragraph services-key__content_paragraph">
                        KRKRTECH provides continuous support and maintenance to ensure flawless service.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="services-partners overflow-hidden mb-20">
                <ul class="services-partners__wrapper overflow-hidden">
                  <li class="services-partners__item wow fadeInUp" data-wow-delay=".2s">
                    <a class="services-partners__item_link" href="#"><img src="/assets/images/partners/partners1.png" alt="Partner 1" /></a>
                  </li>
                  <li class="services-partners__item wow fadeInUp" data-wow-delay=".4s">
                    <a class="services-partners__item_link" href="#"><img src="/assets/images/partners/partners2.png" alt="Partner 2" /></a>
                  </li>
                  <li class="services-partners__item wow fadeInUp" data-wow-delay=".6s">
                    <a class="services-partners__item_link" href="#"><img src="/assets/images/partners/partners3.png" alt="Partner 3" /></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ======= Service Key Area End ======= -->
    <!-- ======= Solution Area Start ======= -->
    <div class="support support--bg support--padding secondary-bg-color pt-95 parallaxie"
      data-bg-image="/assets/images/shape/support-bg-shape.png">
      <div class="container">
        <div class="row">
          <div class="col-sm-12"></div>
        </div>
      </div>
    </div>
    <!-- ======= Solution Area End ======= -->

<!-- ======= Case Studies Area Start ======= -->
<section class="case case--minus pt-100 pb-125">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <div class="section-heading section-heading--style3 mb-50">
          <span class="section-heading__title_small wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
            PROJECT HIGHLIGHTS
          </span>
          <h2 class="section-heading__title_big text-white wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".7s">
            Our Implemented Solutions
          </h2>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="section-button mb-50">
          <a href="case-01.html" class="btn btn--common btn--primary rt-button-animation-out wow fadeInRight" data-wow-delay=".9s" data-wow-duration=".7s">
            See More
            <svg xmlns="http://www.w3.org/2000/svg" width="34px" height="16px" viewBox="0 0 34.53 16">
              <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
              <g class="rt-button-cap-fake">
                <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
              </g>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="case-wrapper">
      <div class="row case-active">
        <div class="col">
          <div class="case-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
            <div class="case-item__image">
              <a href="case-details.html">
                <img width="712" height="763" src="/assets/images/case/case-image-1.jpg" alt="POS Integration" />
              </a>
            </div>
            <div class="case-item__content secondary-bg-color text-center">
              <h5 class="text-white">
                <a href="case-details.html">Bank POS Deployment</a>
              </h5>
              <span>Hardware Integration</span>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="case-item wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".7s">
            <div class="case-item__image">
              <a href="case-details.html">
                <img width="712" height="763" src="/assets/images/case/case-image-2.jpg" alt="Retail POS" />
              </a>
            </div>
            <div class="case-item__content secondary-bg-color text-center">
              <h5 class="text-white">
                <a href="case-details.html">Retail Store POS Network</a>
              </h5>
              <span>Retail Technology</span>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="case-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration=".9s">
            <div class="case-item__image">
              <a href="case-details.html">
                <img width="712" height="763" src="/assets/images/case/case-image-3.jpg" alt="Transport Payments" />
              </a>
            </div>
            <div class="case-item__content secondary-bg-color text-center">
              <h5 class="text-white">
                <a href="case-details.html">Transport Payment Terminals</a>
              </h5>
              <span>Smart Ticketing</span>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="case-item wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
            <div class="case-item__image">
              <a href="case-details.html">
                <img width="712" height="763" src="/assets/images/case/case-image-4.jpg" alt="E-Government" />
              </a>
            </div>
            <div class="case-item__content secondary-bg-color text-center">
              <h5 class="text-white">
                <a href="case-details.html">E-Government Payment Systems</a>
              </h5>
              <span>GovTech Solutions</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ======= Case Studies Area End ======= -->

   
<!-- ======= Testimonials Area Start ======= -->
<section class="review review--bg review--padding position-relative">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="section-heading mb-55 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
          <span class="section-heading__title_small"> CLIENT FEEDBACK </span>
          <h2 class="section-heading__title_big">
            What Our Clients Say About KRKRTECH
          </h2>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-delay=".5s" data-wow-duration=".7s">
        <div class="section-button mb-55">
          <a href="javascript:void(0);" class="btn btn--common btn--primary rt-button-animation-out">See All Reviews
            <svg xmlns="http://www.w3.org/2000/svg" width="34px" height="16px" viewBox="0 0 34.53 16">
              <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
              <g class="rt-button-cap-fake">
                <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
              </g>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="review-wrapper">
    <div class="container-fluid">
      <div class="row review--active">
        <div class="col-lg-4 mb-30 wow fadeInLeft" data-wow-delay=".3s" data-wow-duration=".5s">
          <div class="review-block">
            <div class="review-block__content">
              <img class="review-block__quote_icon" src="/assets/images/icon/left-quote.png" alt="Quotes Left" />
              <h3 class="review-block__title">“Reliable & Professional”</h3>
              <p>
                KRKRTECH provided us with a reliable POS solution that significantly improved our retail operations. Their support team is responsive and knowledgeable.
              </p>
            </div>
            <div class="review-block__auth">
              <div class="review-block__auth_image">
                <a href="javascript:void(0);"><img src="/assets/images/home1/review-auth-image-1.png" alt="Review Author" /></a>
              </div>
              <div class="review-block__auth_info">
                <h3 class="review-block__auth_name">Aylin Demir</h3>
                <span class="review-block__auth_title">Retail Manager</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-30 wow fadeInLeft" data-wow-delay=".4s" data-wow-duration=".6s">
          <div class="review-block">
            <div class="review-block__content">
              <img class="review-block__quote_icon" src="/assets/images/icon/left-quote.png" alt="Quotes Left" />
              <h3 class="review-block__title">“Efficient Integration”</h3>
              <p>
                The team at KRKRTECH helped us integrate a custom payment solution across our transport network. We saw immediate improvements in transaction speed and security.
              </p>
            </div>
            <div class="review-block__auth">
              <div class="review-block__auth_image">
                <a href="javascript:void(0);"><img src="/assets/images/home1/review-auth-image-2.png" alt="Review Author" /></a>
              </div>
              <div class="review-block__auth_info">
                <h3 class="review-block__auth_name">Mehmet Yılmaz</h3>
                <span class="review-block__auth_title">IT Director</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-30 wow fadeInLeft" data-wow-delay=".5s" data-wow-duration=".7s">
          <div class="review-block">
            <div class="review-block__content">
              <img class="review-block__quote_icon" src="/assets/images/icon/left-quote.png" alt="Quotes Left" />
              <h3 class="review-block__title">“Trusted Partner”</h3>
              <p>
                We’ve worked with KRKRTECH for years and they’ve consistently delivered high-performance systems and top-notch support. Highly recommended.
              </p>
            </div>
            <div class="review-block__auth">
              <div class="review-block__auth_image">
                <a href="javascript:void(0);"><img src="/assets/images/home1/review-auth-image-3.png" alt="Review Author" /></a>
              </div>
              <div class="review-block__auth_info">
                <h3 class="review-block__auth_name">Leyla Koç</h3>
                <span class="review-block__auth_title">Operations Lead</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ======= Testimonials Area End ======= -->

    

 <!-- ======= Counter Area Start ======= -->
<section class="counter counter--bg counter--padding parallaxie" data-bg-image="/assets/images/bg/counter-area-bg-1.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-20 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
        <div class="counter__item text-center">
          <span class="counter__item_count text-white counter-number" data-num="150">150</span>
          <h3 class="counter__item_title text-white">Business Clients</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-20 wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".7s">
        <div class="counter__item text-center">
          <span class="counter__item_count text-white counter-number" data-num="42">42</span>
          <h3 class="counter__item_title text-white">Projects Completed</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-20 wow fadeInUp" data-wow-delay=".7s" data-wow-duration=".9s">
        <div class="counter__item text-center">
          <span class="counter__item_count text-white counter-number" data-num="20">20</span>
          <h3 class="counter__item_title text-white">Industry Partners</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-20 wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
        <div class="counter__item text-center">
          <span class="counter__item_count text-white counter-number" data-num="12">12</span>
          <h3 class="counter__item_title text-white">Years of Experience</h3>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ======= Counter Area End ======= -->


  

  <!-- ======= Contact Area Start ======= -->
<section class="contact contact--bg contact--padding" data-bg-image="/assets/images/shape/contact-bg-shape.png">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 mb-30">
        <div class="contact-address contact-address--bg" data-bg-image="/assets/images/bg/contact-address-bg.jpg">
          <ul>
            <li class="contact-address__item mb-20">
              <div class="contact-address__item_icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="contact-address__item_text">
                <h3 class="text-white">Our Location</h3>
                <p class="text-white">
                  Istanbul, Turkey
                </p>
              </div>
            </li>
            <li class="contact-address__item mb-20">
              <div class="contact-address__item_icon">
                <i class="fas fa-envelope-open-text"></i>
              </div>
              <div class="contact-address__item_text">
                <h3 class="text-white">Email Address</h3>
                <p class="text-white">info@krkrtech.com</p>
              </div>
            </li>
            <li class="contact-address__item">
              <form class="contact-address__form" action="javascript:void(0);">
                <input class="contact-address__form_input" type="text" placeholder="Find Your Solution" />
                <button class="contact-address__form_button">
                  <i class="fas fa-arrow-right"></i>
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7 mb-30">
        <form action="javascript:void(0);" class="contact-form" id="contact-form">
          <div class="row">
            <div class="col-sm-12">
              <div class="section-heading mb-45">
                <span class="section-heading__title_small">
                  Get In Touch
                </span>
                <h2 class="section-heading__title_big">
                  Are you Ready for a Better, more Productive Business?
                </h2>
              </div>
            </div>
            <div class="col-md-6">
              <input name="name" type="text" class="contact-form__input" placeholder="Name *" />
            </div>
            <div class="col-md-6">
              <input name="email" type="text" class="contact-form__input" placeholder="Email *" />
            </div>
            <div class="col-md-6">
              <input name="phone" type="text" class="contact-form__input" placeholder="Phone" />
            </div>
            <div class="col-md-6">
              <select class="contact-form__input" name="subject">
                <option value="1">Select your subject</option>
              </select>
            </div>
            <div class="col-md-12">
              <textarea class="contact-form__input contact-form__input_textarea" name="message" placeholder="Message"></textarea>
            </div>
            <div class="col-md-12">
              <button type="submit" class="contact-form__button">
                Send Message
              </button>
            </div>
          </div>
          <div class="form-response"></div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- ======= Contact Area End ======= -->

  </main>
  <!-- ======= Main Wrapper End ======= -->

 @endsection