<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('head')
<link href="{{ asset('/css/register.css') }}" rel="stylesheet">
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

    <!-- Page Title #1
============================================= -->
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="http://demo.zytheme.com/hairy/assets/images/page-titles/3.jpg" alt="Background"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="title title-2 text-center">
                        <div class="form_wrapper">
                            <div class="form_container">
                                <div class="title_container">
                                    <h2>Responsive Registration Form</h2>
                                </div>
                                <div class="row clearfix">
                                    <div class="">
                                        <form class="register-form">
                                            <div class="input_field"><span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                                <input type="email" class="register-email" name="email" placeholder="Email" required/>
                                            </div>
                                            <div class="input_field"><span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                                <input type="password" class="register-password" name="password" placeholder="Password" required/>
                                            </div>
                                            <div class="input_field"><span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                                <input type="password" name="password" placeholder="Re-type Password" required/>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col_half">
                                                    <div class="input_field"><span><i aria-hidden="true" class="fa fa-user"></i></span>
                                                        <input type="text" class="register-name" name="name" placeholder="First Name"/>
                                                    </div>
                                                </div>
                                                <div class="col_half">
                                                    <div class="input_field"><span><i aria-hidden="true" class="fa fa-user"></i></span>
                                                        <input type="text" class="register-last-name" name="name" placeholder="Last Name" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input_field radio_option">
                                                <input type="radio" name="radiogroup1" id="rd1">
                                                <label for="rd1">Male</label>
                                                <input type="radio" name="radiogroup1" id="rd2">
                                                <label for="rd2">Female</label>
                                            </div>
                                            <div class="input_field select_option">
                                                <select>
                                                    <option>Select a country</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                </select>
                                                <div class="select_arrow"></div>
                                            </div>
                                            <div class="input_field checkbox_option">
                                                <input type="checkbox" id="cb1">
                                                <label for="cb1">I agree with terms and conditions</label>
                                            </div>
                                            <div class="input_field checkbox_option">
                                                <input type="checkbox" id="cb2">
                                                <label for="cb2">I want to receive the newsletter</label>
                                            </div>
                                            <input class="button" type="submit" value="Register"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .title end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
</div>
<script src="http://demo.zytheme.com/hairy/assets/js/jquery-2.2.4.min.js"></script>
<script src="http://demo.zytheme.com/hairy/assets/js/plugins.js"></script>
{{--<script src="http://demo.zytheme.com/hairy/assets/js/functions.js"></script>--}}
<script src="{{ asset('js/html5shiv.js') }}" defer></script>
<script src="{{ asset('js/functions.js') }}" defer></script>
<script src="{{ asset('js/cart.js') }}" defer></script>
</body>

</html>
