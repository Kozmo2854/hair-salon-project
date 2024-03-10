@php use Illuminate\Support\Facades\Session; @endphp
    <!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('head')

<body>
<div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="wrapper clearfix">
    @include('header')

    <!-- Slider #1
    ============================================= -->
    <section id="slider" class="carousel slider slider-navs" data-slide="1" data-slide-rs="1" data-autoplay="false"
             data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800">

        <!-- Slide #1 -->
        <div class="slide--item bg-overlay bg-overlay-dark">
            <div class="bg-section">
                <img src="http://demo.zytheme.com/hairy/assets/images/sliders/slide-bg/1.jpg" alt="background">
            </div>
            <div class="pos-vertical-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 text--center">
                            <div class="slide--headline">We Will Make You Stylish</div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 text--center">
                            <div class="slide--bio">Preparing your money is a daunting challenge for today's investors
                                and will give you a complete account of the system.
                            </div>
                            <div class="slide-action">
                                <a class="btn btn--primary btn--rounded" href="#">Read More </a>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>
        </div>
        <!-- .slide-item end -->

        <!-- Slide #2 -->
        <div class="slide--item bg-overlay bg-overlay-dark">
            <div class="bg-section">
                <img src="http://demo.zytheme.com/hairy/assets/images/sliders/slide-bg/2.jpg" alt="background">
            </div>
            <div class="pos-vertical-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 text--center">
                            <div class="slide--headline">We make amazing haircuts</div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 text--center">
                            <div class="slide--bio">Preparing your money is a daunting challenge for today's investors
                                and will give you a complete account of the system.
                            </div>
                            <div class="slide-action">
                                <a class="btn btn--secondary btn--white btn--rounded mr-10" href="#">Read More </a>
                                <a class="btn btn--white btn--bordered btn--rounded" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>
        </div>
        <!-- .slide-item end -->

        <!-- Slide #3 -->
        <div class="slide--item bg-overlay bg-overlay-dark">
            <div class="bg-section">
                <img src="http://demo.zytheme.com/hairy/assets/images/sliders/slide-bg/3.jpg" alt="background">
            </div>
            <div class="pos-vertical-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 text--center">
                            <div class="slide--headline">our clients trust us</div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 text--center">
                            <div class="slide--bio">Preparing your money is a daunting challenge for today's investors
                                and will give you a complete account of the system.
                            </div>
                            <div class="slide-action">
                                <a class="btn btn--secondary btn--white btn--rounded mr-10" href="#">Read More </a>
                                <a class="btn btn--white btn--bordered btn--rounded" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>
        </div>
        <!-- .slide-item end -->

    </section>
    <!-- #slider end -->
    <!-- Services #1
    ============================================= -->
    <section id="service1" class="services services-2 text-center bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading text--center mb-80">
                        <h2 class="heading--title">What We Do?</h2>
                        <p class="heading--desc">Duis aute irure dolor in reprehenderit volupte velit esse cillum dolore
                            eu fugiat pariatursint occaecat cupidatat non proident culpa.</p>
                        <div class="divider--line"></div>
                    </div>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <!-- Service #1 -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="service-panel">
                        <div class="service--img">
                            <img src="http://demo.zytheme.com/hairy/assets/images/services/1.jpg" alt="img">
                        </div>
                        <h3>Haircut Styles</h3>
                        <p>Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore fugiat nulla.</p>
                    </div>
                    <!-- .container end -->
                </div>
                <!-- .col-md-4 end -->

                <!-- Service #2 -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="service-panel">
                        <div class="service--img">
                            <img src="http://demo.zytheme.com/hairy/assets/images/services/2.jpg" alt="img">
                        </div>
                        <h3>Beard Trim</h3>
                        <p>Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore fugiat nulla.</p>
                    </div>
                    <!-- .container end -->
                </div>
                <!-- .col-md-4 end -->

                <!-- Service #3 -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="service-panel">
                        <div class="service--img">
                            <img src="http://demo.zytheme.com/hairy/assets/images/services/3.jpg" alt="img">
                        </div>
                        <h3>Hot Shave</h3>
                        <p>Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore fugiat nulla.</p>
                    </div>
                    <!-- .container end -->
                </div>
                <!-- .col-md-4 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #service1 end -->

    <!-- working-time #1
    ============================================= -->
    <section id="working-time" class="working-time text-center bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="http://demo.zytheme.com/hairy/assets/images/background/2.jpg" alt="Background"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading text--center mb-80">
                        <h2 class="heading--title text-white">Working Hours</h2>
                        <p class="heading--desc text-white">Duis aute irure dolor in reprehenderit volupte velit esse
                            cillum dolore eu fugiat pariatursint occaecat cupidatat non proident culpa.</p>
                        <div class="divider--line"></div>
                    </div>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <!-- Service #1 -->
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="time-panel">
                        <h3>sun</h3>
                        <ul class="list-unstyled mb-0">
                            <li>10.00 am</li>
                            <li>to</li>
                            <li>5.00 am</li>
                        </ul>
                    </div>
                    <!-- .time-panel end -->
                </div>
                <!-- .col-md-2 end -->

                <!-- Service #2 -->
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="time-panel">
                        <h3>mon</h3>
                        <ul class="list-unstyled mb-0">
                            <li>9.00 am</li>
                            <li>to</li>
                            <li>4.30 am</li>
                        </ul>
                    </div>
                    <!-- .time-panel end -->
                </div>
                <!-- .col-md-2 end -->

                <!-- Service #3 -->
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="time-panel">
                        <h3>tue</h3>
                        <ul class="list-unstyled mb-0">
                            <li>10.00 am</li>
                            <li>to</li>
                            <li>5.30 am</li>
                        </ul>
                    </div>
                    <!-- .time-panel end -->
                </div>
                <!-- .col-md-2 end -->

                <!-- Service #4 -->
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="time-panel">
                        <h3>wed</h3>
                        <ul class="list-unstyled mb-0">
                            <li>9.30 am</li>
                            <li>to</li>
                            <li>4.00 am</li>
                        </ul>
                    </div>
                    <!-- .time-panel end -->
                </div>
                <!-- .col-md-2 end -->

                <!-- Service #5 -->
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="time-panel">
                        <h3>thu</h3>
                        <ul class="list-unstyled mb-0">
                            <li>10.00 am</li>
                            <li>to</li>
                            <li>5.00 am</li>
                        </ul>
                    </div>
                    <!-- .time-panel end -->
                </div>
                <!-- .col-md-2 end -->

                <!-- Service #6 -->
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="time-panel">
                        <h3>Fri</h3>
                        <ul class="list-unstyled mb-0">
                            <li>9.00 am</li>
                            <li>to</li>
                            <li>4.30 am</li>
                        </ul>
                    </div>
                    <!-- .time-panel end -->
                </div>
                <!-- .col-md-2 end -->

            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #service1 end -->

    <!-- pricing #2
    ============================================= -->
    <section id="pricing" class="pricing pricing-2 bg-white pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading text--center mb-70">
                        <h2 class="heading--title">Our Pricing</h2>
                        <p class="heading--desc">Duis aute irure dolor in reprehenderit volupte velit esse cillum dolore
                            eu fugiat pariatursint occaecat cupidatat non proident culpa.</p>
                        <div class="divider--line"></div>
                    </div>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3">
                    <!-- Pricing #1 -->
                    <div class="pricing-panel">
                        <div class="pricing--content">
                            <h4 class="pricing--heading">Haircut</h4>
                            <div class="pricing--divider"></div>
                            <span class="price">$20.00</span>
                        </div>
                        <p class="pricing--desc">Our stylist consults & delivers you a precision haircut.</p>
                    </div>
                    <!-- .panel end -->
                    <!-- Pricing #2 -->
                    <div class="pricing-panel">
                        <div class="pricing--content">
                            <h4 class="pricing--heading">Moustache Trim</h4>
                            <div class="pricing--divider"></div>
                            <span class="price">$10.00</span>
                        </div>
                        <p class="pricing--desc">Select & Change your hair color for new experience.</p>
                    </div>
                    <!-- .panel end -->
                    <!-- Pricing #3 -->
                    <div class="pricing-panel">
                        <div class="pricing--content">
                            <h4 class="pricing--heading">Beard Trim</h4>
                            <div class="pricing--divider"></div>
                            <span class="price">$15.00</span>
                        </div>
                        <p class="pricing--desc">Keep your beard clean and sharp with an awesome style.</p>
                    </div>
                    <!-- .panel end -->
                    <!-- Pricing #4 -->
                    <div class="pricing-panel">
                        <div class="pricing--content">
                            <h4 class="pricing--heading">Hair Wash</h4>
                            <div class="pricing--divider"></div>
                            <span class="price">$6.00</span>
                        </div>
                        <p class="pricing--desc">Relax and have a hot towel for cleaning your face.</p>
                    </div>
                    <!-- .panel end -->
                    <!-- Pricing #5 -->
                    <div class="pricing-panel">
                        <div class="pricing--content">
                            <h4 class="pricing--heading">Hair Color</h4>
                            <div class="pricing--divider"></div>
                            <span class="price">$18.00</span>
                        </div>
                        <p class="pricing--desc">Select & Change your hair color for new experience.</p>
                    </div>
                    <!-- .panel end -->
                </div>
                <!-- .col-md-4 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #pricing1 end -->


    <!-- Testimonial #2
    ============================================= -->
    <section id="Heading" class="bg-overlay bg-overlay-dark bg-parallax text-center">
        <div class="bg-section">
            <img src="http://demo.zytheme.com/hairy/assets/images/testimonial/bg-1.jpg" alt="Background"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="text--center heading mb-100">
                        <h2 class="heading--title color-white">Clients Say</h2>
                        <p class="heading--desc mb-0 color-gray">Duis aute irure dolor in reprehenderit volupte velit
                            esse cillum dolore eu fugiat pariatursint occaecat cupidatat non proident culpa.</p>
                        <div class="divider--line divider--center"></div>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #testimonial2 end -->

    <!-- Testimonial #3
    ============================================= -->
    <section id="testimonial2" class="testimonial testimonial-1  testimonial-3 text-center bg-gray pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div id="testimonial-carousel" class="carousel carousel-dots carousel-dark" data-slide="3"
                         data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="30"
                         data-loop="true" data-speed="800">
                        <!-- Testimonial #1 -->
                        <div class="testimonial-panel">
                            <div class="testimonial--meta">
                                <div class="testimonial--meta-img">
                                    <img src="http://demo.zytheme.com/hairy/assets/images/testimonial/1.png"
                                         alt="Testimonial Author">
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                            <div class="testimonial--body">
                                <p>“Proin gravida nibh vel velit auctor aliquet aenean sollidin, lorem quis bibendum
                                    auctor nisi elit.”</p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta-content">
                                <h4>Ryan Printz</h4>
                            </div>
                        </div>
                        <!-- .testimonial-panel end -->

                        <!-- Testimonial #2 -->
                        <div class="testimonial-panel">
                            <div class="testimonial--meta">
                                <div class="testimonial--meta-img">
                                    <img src="http://demo.zytheme.com/hairy/assets/images/testimonial/2.png"
                                         alt="Testimonial Author">
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                            <div class="testimonial--body">
                                <p>“Proin gravida nibh vel velit auctor aliquet aenean sollidin, lorem quis bibendum
                                    auctor nisi elit.”</p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta-content">
                                <h4>Mark Smith</h4>
                            </div>
                        </div>
                        <!-- .testimonial-panel end -->

                        <!-- Testimonial #3 -->
                        <div class="testimonial-panel">
                            <div class="testimonial--meta">
                                <div class="testimonial--meta-img">
                                    <img src="http://demo.zytheme.com/hairy/assets/images/testimonial/3.png"
                                         alt="Testimonial Author">
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                            <div class="testimonial--body">
                                <p>“Proin gravida nibh vel velit auctor aliquet aenean sollidin, lorem quis bibendum
                                    auctor nisi elit.”</p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta-content">
                                <h4>Steve Martin</h4>
                            </div>
                        </div>
                        <!-- .testimonial-panel end -->

                        <!-- Testimonial #4 -->
                        <div class="testimonial-panel">
                            <div class="testimonial--meta">
                                <div class="testimonial--meta-img">
                                    <img src="http://demo.zytheme.com/hairy/assets/images/testimonial/2.png"
                                         alt="Testimonial Author">
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                            <div class="testimonial--body">
                                <p>“Proin gravida nibh vel velit auctor aliquet aenean sollidin, lorem quis bibendum
                                    auctor nisi elit.”</p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta-content">
                                <h4>Smith Printz</h4>
                            </div>
                        </div>
                        <!-- .testimonial-panel end -->
                    </div>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #testimonial2 end -->

    <!-- Booking
    ============================================= -->
    <section id="booking" class="booking booking-2 bg-overlay bg-overlay-dark bg-parallax text-center">
        <div class="bg-section">
            <img src="http://demo.zytheme.com/hairy/assets/images/testimonial/bg-1.jpg" alt="Background"/>
        </div>
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-2 mb-80 text--center">
                        <h2 class="heading--title text-white">Book Online</h2>
                        <p class="heading--desc text-white">Duis aute irure dolor in reprehenderit volupte velit esse
                            cillum dolore eu fugiat pariatursint occaecat cupidatat non proident culpa.</p>
                        <div class="divider--line"></div>
                    </div>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="booking-form">
                        <form class="mb-0 contact-form">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <input type="text" class="form-control" name="contact_name" id="name"
                                           placeholder="Your Name" required>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <input type="text" class="form-control" name="contact_phone" id="phone"
                                           placeholder="Phone" required>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-select">
                                        <i class="fa fa-angle-down"></i>
                                        <select class="form-control" name="services" id="services" required>
                                            <option value="">Select Service</option>
                                            <option value="3">Service 1</option>
                                            <option value="4">Service 2</option>
                                            <option value="5">Service 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-select">
                                        <i class="fa fa-angle-down"></i>
                                        <select class="form-control" name="date" id="date" required>
                                            <option value="">Date</option>
                                            <option value="March 23">March 23, 2017</option>
                                            <option value="March 24">March 24, 2017</option>
                                            <option value="March 25">March 25, 2017</option>
                                            <option value="March 26">March 26, 2017</option>
                                            <option value="March 27">March 27, 2017</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <textarea class="form-control" name="contact_message" id="message" rows="3"
                                              placeholder=
                                              @if(!Session::get('user'))
                                                "Please login before booking."
                                              @else
                                                "Add your notes (optional)"
                                              @endif></textarea>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input @if(!Session::get('user')) disabled @endif type="submit" value="Book Now" name="submit"
                                           class="btn btn--secondary btn--rounded btn--block">
                                </div>
                            </div>
                            <!-- .row end -->
                        </form>
                        <!-- form end -->
                    </div>
                    <!-- .booking-form end -->
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #booking end -->
    <!-- Footer #5
    ============================================= -->
    <footer id="footer" class="footer footer-light">
        <!-- Copyrights
        ============================================= -->
        <div class="footer--copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text--center">
                        <span>&copy; 2017, All rights reserved.</span>
                    </div>
                </div>
            </div>
            <!-- .container end -->
        </div>
    </footer>
</div>
<!-- #wrapper end -->
{{--@include('user.footer')--}}
</body>

<script src="{{ asset('/js/html5shiv.js') }}" defer></script>
<script src="{{ asset('/js/jquery-2.2.4.min.js') }}" defer></script>
<script src="{{ asset('/js/plugins.js') }}" defer></script>
<script src="{{ asset('js/respond.min.js') }}" defer></script>
<script src="{{ asset('/js/functions.js') }}" defer></script>
</html>
