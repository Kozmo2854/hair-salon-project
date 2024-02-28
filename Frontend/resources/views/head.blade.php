<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Rooster is a pixel perfect creative barber html5 tempalte  based on designed with great attention to details, flexibility and performance. It is ultra professional, smooth and sleek, with a clean modern layout.">
    <link href="http://demo.zytheme.com/hairy/assets/images/favicon/favicon.png" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' rel='stylesheet' type='text/css'>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://demo.zytheme.com/hairy/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/external.css') }}" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{ asset('/js/html5shiv.js') }}" defer></script>
    <script src="{{ asset('/js/jquery-2.2.4.min.js') }}" defer></script>
    <script src="{{ asset('/js/plugins.js') }}" defer></script>
    <script src="{{ asset('js/respond.min.js') }}" defer></script>
    <script src="{{ asset('js/functions.js') }}" defer></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>Rooster</title>
</head>

{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">--}}
{{--            <div class="title title-2 text-center">--}}
{{--                <div class="title--content">--}}
{{--                    <div class="title--heading mb-20">--}}
{{--                        <h1>Shopping Cart</h1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="clearfix"></div>--}}
{{--                <ol class="breadcrumb breadcrumb-bottom">--}}
{{--                    <li><a href="index-2.html">Home</a></li>--}}
{{--                    <li><a href="index-2.html">shop</a></li>--}}
{{--                    <li class="active">Shopping Cart</li>--}}
{{--                </ol>--}}
{{--            </div>--}}
{{--            <!-- .title end -->--}}
{{--        </div>--}}
{{--        <!-- .col-md-12 end -->--}}
{{--    </div>--}}
{{--    <!-- .row end -->--}}
{{--</div>--}}
{{--<!-- .container end -->--}}
{{--</section>--}}
{{--<!-- #page-title end -->--}}

{{--<!-- Shop Cart--}}
{{--============================================= -->--}}
{{--<section id="shopcart" class="shop shop-cart bg-white">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="shop-cart-heading">--}}
{{--                    You have (3 items)--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="cart-table table-responsive">--}}
{{--                    <table class="table">--}}
{{--                        <thead>--}}
{{--                        <tr class="cart-product">--}}
{{--                            <th></th>--}}
{{--                            <th class="cart-product-item">Name</th>--}}
{{--                            <th class="cart-product-price">Price</th>--}}
{{--                            <th class="cart-product-quantity">Quantity</th>--}}
{{--                            <th class="cart-product-total">Total</th>--}}
{{--                            <th class="cart-product-remove"></th>--}}
{{--                            <th></th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        <tr class="cart-product">--}}
{{--                            <td></td>--}}
{{--                            <td class="cart-product-item">--}}

{{--                                <div class="cart-product-img">--}}
{{--                                    <a href="#">--}}
{{--                                        <img src="http://demo.zytheme.com/hairy/assets/images/shop/cart/1.jpg" alt="product"/>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-product-name">--}}
{{--                                    <h6><a href="#">Gel Cream</a></h6>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td class="cart-product-price">$ 7.5</td>--}}
{{--                            <td class="cart-product-quantity">--}}
{{--                                <div class="product-quantity">--}}
{{--                                    <span class="qant-plus"><i class="fa fa-caret-up"></i></span>--}}
{{--                                    <input type="text" value="1" id="pro1-qunt" readonly>--}}
{{--                                    <span class="qant-minus"><i class="fa fa-caret-down"></i></span>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td class="cart-product-total">$ 7.5</td>--}}
{{--                            <td>--}}
{{--                                <div class="cart-product-remove">--}}
{{--                                    <i class="lnr lnr-cross"></i>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td></td>--}}
{{--                        </tr>--}}
{{--                        <tr class="cart-product">--}}
{{--                            <td></td>--}}
{{--                            <td class="cart-product-item">--}}
{{--                                <div class="cart-product-img">--}}
{{--                                    <a href="#">--}}
{{--                                        <img src="http://demo.zytheme.com/hairy/assets/images/shop/cart/2.jpg" alt="product"/>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-product-name">--}}
{{--                                    <h6><a href="#">Hair Dryer</a></h6>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td class="cart-product-price">$ 35.00</td>--}}
{{--                            <td class="cart-product-quantity">--}}
{{--                                <div class="product-quantity">--}}
{{--                                    <span class="qant-plus"><i class="fa fa-caret-up"></i></span>--}}
{{--                                    <input type="text" value="1" id="pro2-qunt" readonly>--}}
{{--                                    <span class="qant-minus"><i class="fa fa-caret-down"></i></span>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td class="cart-product-total">$ 35.00</td>--}}
{{--                            <td>--}}
{{--                                <div class="cart-product-remove">--}}
{{--                                    <i class="lnr lnr-cross"></i>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td></td>--}}
{{--                        </tr>--}}
{{--                        <tr class="cart-product">--}}
{{--                            <td></td>--}}
{{--                            <td class="cart-product-item">--}}
{{--                                <div class="cart-product-img">--}}
{{--                                    <a href="#">--}}
{{--                                        <img src="http://demo.zytheme.com/hairy/assets/images/shop/cart/3.jpg" alt="product"/>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-product-name">--}}
{{--                                    <h6><a href="#">Hair Brush</a></h6>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td class="cart-product-price">$ 23.00</td>--}}
{{--                            <td class="cart-product-quantity">--}}
{{--                                <div class="product-quantity">--}}
{{--                                    <span class="qant-plus"><i class="fa fa-caret-up"></i></span>--}}
{{--                                    <input type="text" value="1" id="pro3-qunt" readonly>--}}
{{--                                    <span class="qant-minus"><i class="fa fa-caret-down"></i></span>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td class="cart-product-total">$ 23.00</td>--}}
{{--                            <td>--}}
{{--                                <div class="cart-product-remove">--}}
{{--                                    <i class="lnr lnr-cross"></i>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td></td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--                <!-- .cart-table end -->--}}
{{--            </div>--}}
{{--            <!-- .col-md-12 end -->--}}
{{--        </div>--}}
{{--        <!-- .row end -->--}}
{{--        <div class="row clearfix">--}}
{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="cart-product-action">--}}
{{--                    <form class="form-inline pull-left">--}}
{{--                        <input type="text" class="form-control mb-0" id="coupon" placeholder="Coupon Code" />--}}
{{--                        <button type="submit" class="btn btn--secondary">Apply</button>--}}
{{--                    </form>--}}
{{--                    <div class="cart-total-amount text-right">--}}
{{--                        Subtotal :<span class="">$100.5</span>--}}
{{--                    </div>--}}
{{--                    <!-- .cart-total-amount end -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- .col-md-6 end -->--}}
{{--        </div>--}}
{{--        <!-- .row end -->--}}
{{--        <div class="row">--}}
{{--            <div class="col-xs-12 col-md-12">--}}
{{--                <a class="btn btn--secondary btn--rounded pull-right" href="#">Checkout</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- .container end -->--}}
{{--</section>--}}
