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
                                    <h2>Responsive Login Form</h2>
                                </div>
                                <div class="row clearfix">
                                    <div class="">
                                        <form>
                                            <div class="input_field"><span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                <input type="email" name="email" placeholder="Email" required=""/>
                                            </div>
                                            <div class="input_field"><span><i class="fa fa-lock" aria-hidden="true"></i></span>
                                                <input type="password" name="phone" placeholder="Password" required=""/>
                                            </div>
                                            <input class="button" type="submit" value="Sign in"/>
                                            <div class="row clearfix bottom_row">
                                                <div class="col_half remember_me">
                                                    <input name="" type="checkbox" value=""/>
                                                    Remember me
                                                </div>
                                                <div class="col_half forgot_pw"><a href="#">Forgot Password?</a></div>
                                            </div>
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
<script src="http://demo.zytheme.com/hairy/assets/js/functions.js"></script>
<script src="{{ asset('js/html5shiv.js') }}" defer></script>
<script src="{{ asset('js/cart.js') }}" defer></script>
</body>

</html>
