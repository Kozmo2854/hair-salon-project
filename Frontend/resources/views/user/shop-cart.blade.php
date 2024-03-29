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

<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
    <div class="bg-section">
        <img src="http://demo.zytheme.com/hairy/assets/images/page-titles/3.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="title title-2 text-center">
                    <div class="title--content">
                        <div class="title--heading mb-20">
                            <h1>Shopping Cart</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb breadcrumb-bottom">
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="index-2.html">shop</a></li>
                        <li class="active">Shopping Cart</li>
                    </ol>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<!-- Shop Cart
============================================= -->
<section id="shopcart" class="shop shop-cart bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="shop-cart-heading">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="cart-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="cart-product">
                                <th></th>
                                <th class="cart-product-item">Name</th>
                                <th class="cart-product-price">Price</th>
                                <th class="cart-product-quantity">Quantity</th>
                                <th class="cart-product-total">Total</th>
                                <th class="cart-product-remove"></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="cart-product-body">
                        </tbody>
                    </table>
                </div>
                <!-- .cart-table end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="cart-product-action">
                    <form class="form-inline pull-left">
                        <input type="text" class="form-control mb-0" id="coupon" placeholder="Coupon Code" />
                        <button type="submit" class="btn btn--secondary">Apply</button>
                    </form>
                    <div class="cart-total-amount text-right">
                        Subtotal :<span class="subtotal"></span>
                    </div>
                    <!-- .cart-total-amount end -->
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <a class="btn btn--secondary btn--rounded pull-right checkout-btn" href="#">Checkout</a>
            </div>
        </div>
    </div>
    <!-- .container end -->
</section>
<!-- #shopcart end -->

<!-- Footer #5
============================================= -->
<footer id="footer" class="footer">
    <!-- Widget Section
	============================================= -->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 footer--widget-about">
                    <div class="footer--widget-content">
                        <img class="mb-20" src="http://demo.zytheme.com/hairy/assets/images/logo/logo-light.png" alt="logo">
                        <p>Proin gravida nibh vel velit auctor aliquet anean lorem quis. bindum auctor, nisi elite conset ipsums sagtis id duis sed odio sit.</p>
                        <div class="work--schedule clearfix">
                            <ul class="list-unstyled">
                                <li>Monday - Friday <span>9.00 : 17.00</span></li>
                                <li>Saturday <span>9.00 : 15.00</span></li>
                                <li>Sunday <span>9.00 : 13.00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 end -->
                <div class="col-xs-12 col-sm-6 col-md-4 footer--widget-recent">
                    <div class="footer--widget-title">
                        <h5>Latest Posts</h5>
                    </div>
                    <div class="footer--widget-content">
                        <div class="entry">
                            <div class="entry--img">
                                <a href="#">
									<img src="http://demo.zytheme.com/hairy/assets/images/blog/thumb/5.jpg" alt="entry">
								</a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--title">
                                    <a href="#">Essential barbering tips you need to know before you start</a>
                                </div>
                                <div class="entry--meta">
                                    <span>Nov 09, 2017</span>
                                </div>
                            </div>
                        </div>
                        <!-- .entry end -->

                        <div class="entry">
                            <div class="entry--img">
                                <a href="#">
									<img src="http://demo.zytheme.com/hairy/assets/images/blog/thumb/4.jpg" alt="entry">
								</a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--title">
                                    <a href="#">What are the 360 waves? and how you can get them</a>
                                </div>
                                <div class="entry--meta">
                                    <span>Oct 30, 2017</span>
                                </div>
                            </div>
                        </div>
                        <!-- .entry end -->

                        <div class="entry">
                            <div class="entry--img">
                                <a href="#">
									<img src="http://demo.zytheme.com/hairy/assets/images/blog/thumb/3.jpg" alt="entry">
								</a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--title">
                                    <a href="#">Discover what is the best haircut for your face shape?</a>
                                </div>
                                <div class="entry--meta">
                                    <span>Oct 19, 2017</span>
                                </div>
                            </div>
                        </div>
                        <!-- .entry end -->
                    </div>
                </div>
                <!-- .col-md-4 end -->
                <div class="col-xs-12 col-sm-6 col-md-4 footer--widget-contact">
                    <div class="footer--widget-title">
                        <h5>Get In Touch</h5>
                    </div>
                    <div class="footer--widget-content">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-map-marker"></i> 1220 Petersham town, Wardll St New South Wales Australia PA 6550.</li>
                            <li><i class="fa fa-phone"></i> (04) 491 570 110</li>
                            <li><i class="fa fa-envelope-o"></i> contact@zytheme.com</li>
                        </ul>
                        <form class="form--newsletter">
                            <input type="email" name="email" class="form-control" placeholder="Email address">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <!-- .col-md-4 end -->
            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-widget end -->
    <!-- Copyrights
	============================================= -->
    <div class="footer--copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <span>&copy; 2017, All rights reserved.</span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 text-right">
                    <div class="social">
                        <a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="share-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a class="share-pinterest" href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </div>
</footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="http://demo.zytheme.com/hairy/assets/js/jquery-2.2.4.min.js"></script>
<script src="http://demo.zytheme.com/hairy/assets/js/plugins.js"></script>
<script src="http://demo.zytheme.com/hairy/assets/js/functions.js"></script>
<script src="{{ asset('js/html5shiv.js') }}" defer></script>
<script src="{{ asset('js/cart.js') }}" defer></script>
</body>

</html>
