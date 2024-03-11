@php
    use Illuminate\Support\Facades\Session;
    $userData = !empty(Session::get('user')) ? json_encode(Session::get('user')['userData']) : '';
@endphp
<input value="{{$userData}}" class="session-data" hidden="">
<header id="navbar-spy" class="header header-topbar header-transparent header-fixed">
    <div id="top-bar" class="top-bar">
        <div class="container">
            <div class="bottom-bar-border">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 top--contact hidden-xs">
                        <ul class="list-inline mb-0 ">
                            <li>
                                <i class="lnr lnr-clock"></i><span>Mon - Fri  9.00 : 17.00</span>
                            </li>
                            <li>
                                <i class="lnr lnr-phone-handset"></i> <span>(04) 491 570 110</span>
                            </li>
                        </ul>
                    </div><!-- .col-md-6 end -->
                    <div class="col-xs-12 col-sm-6 col-md-6 top--info text-right text-center-xs">
                        @if(!empty(Session::get('user')))
                            <span class="top--login"><a href="#" class="lnr lnr-exit"></a>
                        @endif
                                @if(empty(Session::get('user')))
                                    <a href="/login">Login</a> / <a href="/register">Register</a>
                                @endif
                        </span>
                            <span class="top--social">
						<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
						<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
						<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
					</span>
                    </div><!-- .col-md-6 end -->
                </div>
            </div>
        </div>
    </div>
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="container">
            <div class="">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="/">
                        <img class="logo-light"
                             src="http://demo.zytheme.com/hairy/assets/images/logo/logo-light.png" alt="Rooster Logo">
                        <img class="logo-dark" src="http://demo.zytheme.com/hairy/assets/images/logo/logo-light.png"
                             alt="Rooster Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                    <ul class="nav navbar-nav nav-pos-right nav-bordered-right snavbar-left">
                        <!-- Home Menu -->
                        <li class="has-dropdown">
                            <a href="/">home</a>
                        </li>
                        <!-- li end -->
                        <!-- shop Menu -->
                        <li class="has-dropdown">
                            <a href="/shop">shop</a>
                        </li>
                        <!-- li end -->
                        <!-- view Orders -->
                        <li class="has-dropdown">
                            <a href="/orders">View Orders</a>
                        </li>
                        <!-- li end -->
                        <!-- Admin panel -->
                        @if( isset(Session::get('user')['userData']) && Session::get('user')['userData']['role_id']==1)
                            <li class="has-dropdown">
                                <a href="/admin/home">Admin Panel</a>
                            </li>
                            <li class="has-dropdown">
                                <a href="/admin/logs">Logs</a>
                            </li>
                        @endif
                        <!-- li end -->
                        <!-- Gallery Menu-->
                        <li class="has-dropdown">
                            <a href="{{asset("Php2_Dokumentacija.pdf")}}" target="_blank">Docs</a>
                        </li>
                        <!-- li end -->
                    </ul>
                    <!-- Module Cart -->
                    <div class="module module-cart pull-left">
                        <div class="module-icon cart-icon">
                            <i class="lnr lnr-store"></i>
                            <span class="title">shop cart</span>
                            <label class="module-label">2</label>
                        </div>
                        <div class="module-content module-box cart-box">
                            <div class="cart-overview">
                                <ul class="list-unstyled products-in-cart-list">
                                </ul>
                            </div>
                            <div class="cart-total">
                                <div class="total-desc">
                                    Subtotal:
                                </div>
                                <div class="total-price">

                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                            <div class="cart--control">
                                <a class="btn btn--primary btn--bordered btn--rounded btn--block" href="/cart">View Cart
                                    & Checkout</a>
                            </div>
                        </div>
                    </div>
                    <!-- .module-cart end -->
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>

</header>
