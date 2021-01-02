@extends('frontWebSite.layouts.master')

@section('title_Page')
    Contact
@endsection

@section('content')
    <!-- inner page banner -->
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="title-holder">
                            <div class="title-holder-cell text-left">
                                <h1 class="page-title">Contact</h1>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Contact</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end inner page banner -->
    <div class="section padding_layout_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="full">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="main_heading text_align_center">
                                    <h2>GET IN TOUCH</h2>
                                </div>
                            </div>
                            <div class="contact_information">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                                    <div class="information_bottom text_align_center">
                                        <div class="icon_bottom"> <i class="fa fa-road" aria-hidden="true"></i> </div>
                                        <div class="info_cont">
                                            <h4>Lorem Ipsum is simply dummy text..</h4>
                                            <p>Melbourne Australia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                                    <div class="information_bottom text_align_center">
                                        <div class="icon_bottom"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                                        <div class="info_cont">
                                            <h4>0011 234 56789</h4>
                                            <p>Mon-Fri 8:30am-6:30pm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                                    <div class="information_bottom text_align_center">
                                        <div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                                        <div class="info_cont">
                                            <h4>Example@gmail.com</h4>
                                            <p>24/7 online support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
                                <h2 class="text_align_center">SEND MESSAGER</h2>
                                <div class="form_section">
                                    <form class="form_contant" action="index.html">
                                        <fieldset>
                                            <div class="row">
                                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input class="field_custom" placeholder="Websire URL" type="text">
                                                </div>
                                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input class="field_custom" placeholder="Your name" type="text">
                                                </div>
                                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input class="field_custom" placeholder="Email adress" type="email">
                                                </div>
                                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input class="field_custom" placeholder="Phone number" type="text">
                                                </div>
                                                <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <textarea class="field_custom" placeholder="Messager"></textarea>
                                                </div>
                                                <div class="center"><a class="btn main_bt" href="#">SUBMIT NOW</a></div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src='js/hizoom.js'></script>
    <script>
        $('.hi1').hiZoom({
            width: 300,
            position: 'right'
        });
        $('.hi2').hiZoom({
            width: 400,
            position: 'right'
        });
    </script>
@endsection



