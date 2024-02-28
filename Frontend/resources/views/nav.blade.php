@props(['navItems' => ['Home','Products','Employees','Reservations',['More','test1','test2','test3']]])
<div class="container">
    <!--Centered Logo Expanded with Additional Menu Navbar -->
    <div class="columns">
        <div class="column is-fullwidth">
            <div class="card">
                <div class="card-content">
                    <nav class="navbar is-light is-transparent has-centered-logo-alt2" role="navigation" aria-label="main navigation">
                        <div class="navbar-brand is-hidden-desktop">
                            <a class="navbar-item" href="https://bulma.io">
                                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                            </a>
                            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                                <span aria-hidden="true"></span>
                                <span aria-hidden="true"></span>
                                <span aria-hidden="true"></span>
                            </a>
                        </div>
                        <div id="navbarBasicExample" class="navbar-menu">
                            <div class="navbar-start">
                                <a class="navbar-item"> <i class="fa fa-twitter"></i> </a>
                                <a class="navbar-item"> <i class="fa-brands fa-facebook"></i> </a>
                                <a class="navbar-item"> <i class="fa fa-google-plus"></i> </a>
                            </div>
                            <div class="navbar-brand is-hidden-touch">
                                <a class="navbar-item" href="https://bulma.io">
                                    <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                                </a>
                                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                                    <span aria-hidden="true"></span>
                                    <span aria-hidden="true"></span>
                                    <span aria-hidden="true"></span>
                                </a>
                            </div>
                            <div class="navbar-end">
                                <a class="navbar-item"> <i class="fa fa-search"></i> </a>
                                <a class="navbar-item"> <i class="fa fa-user"></i> </a>
                                <a class="navbar-item"> <i class="fa fa-shopping-bag"></i> </a>
                            </div>
                            <div class="navbar-start navbar-wide">
                                @foreach($navItems as $item)
                                    @if(!is_array($item))
                                        <a class="navbar-item"> {{$item}} </a>
                                        @continue
                                    @endif
                                    <div class="navbar-item has-dropdown is-hoverable">
                                        <a class="navbar-link"> {{$item[0]}} </a>
                                        <div class="navbar-dropdown">
                                    @foreach($item as $subitem)
                                                <a class="navbar-item"> {{$subitem}} </a>
                                    @endforeach
                                        </div>
                                    </div>
                                @endforeach
{{--                                <a class="navbar-item"> Home </a>--}}
{{--                                <a class="navbar-item"> Documentation </a>--}}
{{--                                <div class="navbar-item has-dropdown is-hoverable">--}}
{{--                                    <a class="navbar-link"> More </a>--}}
{{--                                    <div class="navbar-dropdown">--}}
{{--                                        <a class="navbar-item"> About </a>--}}
{{--                                        <a class="navbar-item"> Jobs </a>--}}
{{--                                        <a class="navbar-item"> Contact </a>--}}
{{--                                        <hr class="navbar-divider">--}}
{{--                                        <a class="navbar-item"> Report an issue </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
