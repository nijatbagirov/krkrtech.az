@extends('layouts.main')

@section('content')
<main class="main-wrapper">
  <!-- ======= Hero inner Start ======= -->
  <section class="hero-inner">
    <div class="hero-inner__bg hero-inner__bg_two" data-bg-image="assets/images/bg/inner-bg-6.jpg" style="background-image: url('assets/images/bg/inner-bg-6.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="page-breadcrumb">
              <h1 class="heading">Contact Us</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Contact Us
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

  <!-- ======= Contact Area Start ======= -->
  <section class="contact pt-120 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="section-heading text-center mb-50">
            <span class="section-heading__title_small">GET IN TOUCH</span>
            <h2 class="section-heading__title_big">We’re Here to Help You!</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-30">
          <div class="contact-item">
            <img class="icon" src="assets/images/icon/contact-location.png" alt="">
            <h3 class="title title--heading">Office Location</h3>
            <p class="address">Istanbul, Turkey</p>
            <p class="address">KRKR Technologies</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-30">
          <div class="contact-item">
            <img class="icon" src="assets/images/icon/phone-call.png" alt="">
            <h3 class="title title--heading">Call Us</h3>
            <p class="address">
              <a class="link" href="tel:+905551112233">+90 555 111 22 33</a>
            </p>
            <p class="address">
              <a class="link" href="tel:+902123456789">+90 212 345 67 89</a>
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-30">
          <div class="contact-item">
            <img class="icon" src="assets/images/icon/contact-email.png" alt="">
            <h3 class="title title--heading">Email Us</h3>
            <p class="address">
              <a class="link" href="mailto:hello@krkrtech.com">hello@krkrtech.com</a>
            </p>
            <p class="address">
              <a class="link" href="mailto:support@krkrtech.com">support@krkrtech.com</a>
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 mb-30">
          <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12097.22925939307!2d28.976959982306233!3d41.00523622253982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab9a1e09c209b%3A0x847b3f98dd15dfcd!2sIstanbul!5e0!3m2!1sen!2str!4v1689960000000!5m2!1sen!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <div class="col-lg-6">
          <form class="contact-form--main" id="contact-form">
            <div class="contact-form p-0">
              <div class="row">
                <div class="col-md-12">
                  <input name="name" type="text" class="contact-form__input" placeholder="Name *">
                </div>
                <div class="col-md-12">
                  <input name="email" type="email" class="contact-form__input" placeholder="Email *">
                </div>
                <div class="col-md-12">
                  <textarea name="message" class="contact-form__input contact-form__input_textarea" placeholder="Message"></textarea>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="contact-form__button">Send Message</button>
                </div>
              </div>
            </div>
            <div class="form-response mt-10"></div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ======= Contact Area End ======= -->

  <!-- ======= CTA Section Start ======= -->
  <section class="contact contact--agency" data-bg-image="assets/images/bg/contact-bg.jpg" style="background-image: url('assets/images/bg/contact-bg.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="contact__agency">
            <span class="title text-white">We're available around the clock</span>
            <h2 class="heading text-white">NEED A CONSULTATION?</h2>
            <a href="mailto:hello@krkrtech.com" class="btn btn--common btn--default btn--primary">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======= CTA Section End ======= -->
</main>
@endsection