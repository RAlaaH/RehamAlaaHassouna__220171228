@extends('frontWebSite.layouts.master')

@section('title_Page')
    Shop Cart
@endsection

@section('body')
    <body id="default_theme" class="it_serv_shopping_cart shopping-cart">
@endsection

@section('content')
    <!-- zoom effect -->
    <link rel='stylesheet' href='css/hizoom.css'>
    <!-- end zoom effect -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- inner page banner -->
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="title-holder">
                            <div class="title-holder-cell text-left">
                                <h1 class="page-title">Shopping Cart</h1>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Shopping Cart</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end inner page banner -->
    <div class="section padding_layout_1 Shopping_cart_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="product-table">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Total</th>
                                <th> </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="col-sm-8 col-md-6"><div class="media"> <a class="thumbnail pull-left" href="#"> <img class="media-object" src="images/it_service/1.jpg" alt="#"></a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Norton Internet Security</a></h4>
                                            <span>Status: </span><span class="text-success">In Stock</span> </div>
                                    </div></td>
                                <td class="col-sm-1 col-md-1" style="text-align: center"><input class="form-control" value="3" type="email">
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                                <td class="col-sm-1 col-md-1"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></td>
                            </tr>
                            <tr>
                                <td class="col-md-6"><div class="media"> <a class="thumbnail pull-left" href="#"> <img class="media-object" src="images/it_service/2.jpg" alt="#"></a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Kaspersky Internet Security</a></h4>
                                            <span>Status: </span><span class="text-danger">Out Stock</span> </div>
                                    </div></td>
                                <td class="col-md-1" style="text-align: center"><input class="form-control" value="2" type="email">
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                                <td class="col-md-1"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></td>
                            </tr>
                            <tr>
                                <td class="col-sm-8 col-md-6"><div class="media"> <a class="thumbnail pull-left" href="#"> <img class="media-object" src="images/it_service/3.jpg" alt="#"></a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Mcafee Livesafe Antivirus</a></h4>
                                            <span>Status: </span><span class="text-success">In Stock</span> </div>
                                    </div></td>
                                <td class="col-sm-1 col-md-1" style="text-align: center"><input class="form-control" value="3" type="email">
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                                <td class="col-sm-1 col-md-1"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></td>
                            </tr>
                            <tr>
                                <td class="col-md-6"><div class="media"> <a class="thumbnail pull-left" href="#"> <img class="media-object" src="images/it_service/4.jpg" alt="#"></a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Norton Internet Security</a></h4>
                                            <span>Status: </span><span class="text-danger">Out Stock</span> </div>
                                    </div></td>
                                <td class="col-md-1" style="text-align: center"><input class="form-control" value="2" type="email">
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                                <td class="col-md-1"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                            <tr class="cart-form">
                                <td class="actions"><div class="coupon">
                                        <input name="coupon_code" class="input-text" id="coupon_code" placeholder="Coupon code" type="text">
                                        <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                    </div>
                                    <input class="button" name="update_cart" value="Update cart" disabled="" type="submit">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="shopping-cart-cart">
                        <table>
                            <tbody>
                            <tr class="head-table">
                                <td><h5>Cart Totals</h5></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr>
                                <td><h4>Subtotal</h4></td>
                                <td class="text-right"><h4>$50.00</h4></td>
                            </tr>
                            <tr>
                                <td><h5>Estimated shipping</h5></td>
                                <td class="text-right"><h4>$5.00</h4></td>
                            </tr>
                            <tr>
                                <td><h3>Total</h3></td>
                                <td class="text-right"><h4>$55.00</h4></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="button">Continue Shopping</button></td>
                                <td><button class="button">Checkout</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection









