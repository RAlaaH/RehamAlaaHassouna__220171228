<div class="header_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <!-- logo start -->
                <div class="logo"> <a href="{{route('frontWebSite.home')}}"><img src="images/logos/it_logo.png" alt="logo" /></a> </div>
                <!-- logo end -->
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <!-- menu start -->
                <div class="menu_side">
                    <div id="navbar_menu">
                        <ul class="first-ul">
                            <li> <a class="active" href="{{route('frontWebSite.home')}}">Home</a>
                                <ul>
                                    <li><a href="{{route('frontWebSite.home')}}">It Home Page</a></li>
                                    <li><a href="{{route('frontWebSite.homeDark')}}">It Dark Home Page</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('frontWebSite.aboutUs')}}">About Us</a></li>
                            <li> <a href="{{route('frontWebSite.service')}}">Service</a>
                                <ul>
                                    <li><a href="{{route('frontWebSite.servicesList')}}">Services list</a></li>
                                    <li><a href="{{route('frontWebSite.servicesDetail')}}">Services Detail</a></li>
                                </ul>
                            </li>
                            <li> <a href="{{route('frontWebSite.blog')}}">Blog</a>
                                <ul>
                                    <li><a href="{{route('frontWebSite.blogList')}}">Blog List</a></li>
                                    <li><a href="{{route('frontWebSite.blogGrid')}}">Blog Grid</a></li>
                                    <li><a href="{{route('frontWebSite.blogDetail')}}">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li> <a href="#">Pages</a>
                                <ul>
                                    <li><a href="{{route('frontWebSite.career')}}">Career</a></li>
                                    <li><a href="{{route('frontWebSite.price')}}">Pricing</a></li>
                                    <li><a href="{{route('frontWebSite.faq')}}">Faq</a></li>
                                    <li><a href="{{route('frontWebSite.privacy_policy')}}">Privacy Policy</a></li>
                                    <li><a href="{{route('frontWebSite.error')}}">Error 404</a></li>
                                </ul>
                            </li>
                            <li> <a href="{{route('frontWebSite.shop')}}">Shop</a>
                                <ul>
                                    <li><a href="{{route('frontWebSite.shop')}}">Shop List</a></li>
                                    <li><a href="{{route('frontWebSite.shopDetail')}}">Shop Detail</a></li>
                                    <li><a href="{{route('frontWebSite.shopCart')}}">Shopping Cart</a></li>
                                    <li><a href="{{route('frontWebSite.checkOut')}}">Checkout</a></li>
                                </ul>
                            </li>
                            <li> <a href="{{route('frontWebSite.contact1')}}">Contact</a>
                                <ul>
                                    <li><a href="{{route('frontWebSite.contact1')}}">Contact Page 1</a></li>
                                    <li><a href="{{route('frontWebSite.contact2')}}">Contact Page 2</a></li>
                                </ul>
                            </li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('login')}}">Login <span
                                            class="sr-only">(current)</span></a>
                                </li>
                            @endguest

                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('dashboard.home')}}">Dashboard <span class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('logout')}}">Logout <span class="sr-only">(current)</span></a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                    <div class="search_icon">
                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- menu end -->
            </div>
        </div>
    </div>
</div>
