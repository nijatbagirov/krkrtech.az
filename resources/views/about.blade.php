@extends('layouts.main')

@section('content')
<main class="main-wrapper">
  <!-- ======= Hero inner Start ======= -->
  <section class="hero-inner">
    <div class="hero-inner__bg hero-inner__bg_two" data-bg-image="/assets/images/bg/inner-bg-6.jpg" style="background-image: url('/assets/images/bg/inner-bg-6.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="page-breadcrumb">
              <h1 class="heading">About Us</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    About Us
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======= Hero inner End ======= -->

  <!-- ======= About Section Start ======= -->
  <section class="about pt-120 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-30">
          <div class="about-image">
            <img src="assets/images/about-us.jpg" alt="About Us" class="img-fluid rounded">
          </div>
        </div>
        <div class="col-lg-6 mb-30">
          <div class="about-content">
            <span class="section-heading__title_small">Who We Are</span>
            <h2 class="section-heading__title_big">Innovating for a Smarter Future</h2>
            <p class="paragraph">
              At KRKR Technologies, we are passionate about developing smart, scalable, and secure digital solutions that help businesses grow and adapt in a rapidly evolving technological landscape. With over a decade of experience, our team combines technical excellence with a client-centric approach.
            </p>
            <ul class="list-style">
              <li><i class="fas fa-check-circle"></i> Custom Software Development</li>
              <li><i class="fas fa-check-circle"></i> AI & Automation Solutions</li>
              <li><i class="fas fa-check-circle"></i> Scalable Web & Mobile Platforms</li>
              <li><i class="fas fa-check-circle"></i> IT Consultancy & Support</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======= About Section End ======= -->

  <!-- ======= Team CTA Start ======= -->
  <section class="contact contact--agency" data-bg-image="assets/images/bg/contact-bg.jpg" style="background-image: url('assets/images/bg/contact-bg.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="contact__agency">
            <span class="title text-white">Let’s Build the Future Together</span>
            <h2 class="heading text-white">JOIN OUR JOURNEY</h2>
            <a href="contact.html" class="btn btn--common btn--default btn--primary">
              Get In Touch
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======= Team CTA End ======= -->
</main>
@endsection