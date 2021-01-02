<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontWebSiteController extends Controller
{
    public function showHome(){
        return view('frontWebSite.home');
    }

    public function showAboutUs(){
        return view('frontWebSite.aboutUs');
    }

    public function showBlog(){
        return view('frontWebSite.blog');
    }

    public function showBlogList(){
        return view('frontWebSite.blogList');
    }

    public function showBlogDetail(){
        return view('frontWebSite.blogDetail');
    }

    public function showBlogGrid(){
        return view('frontWebSite.blogGrid');
    }

    public function showContact1(){
        return view('frontWebSite.contact1');
    }

    public function showContact2(){
        return view('frontWebSite.contact2');
    }

    public function showShop(){
        return view('frontWebSite.shop');
    }

    public function showShopDetail(){
        return view('frontWebSite.shopDetail');
    }

    public function showShopCart(){
        return view('frontWebSite.shopCart');
    }

    public function showCheckOut(){
        return view('frontWebSite.checkOut');
    }

    public function showMakeAppointment(){
        return view('frontWebSite.makeAppointment');
    }

    public function showService(){
        return view('frontWebSite.service');
    }

    public function showServicesList(){
        return view('frontWebSite.servicesList');
    }

    public function showServicesDetail(){
        return view('frontWebSite.servicesDetail');
    }

    public function showCareer(){
        return view('frontWebSite.career');
    }

    public function showFaq(){
        return view('frontWebSite.faq');
    }

    public function showPrice(){
        return view('frontWebSite.price');
    }

    public function showError(){
        return view('frontWebSite.error');
    }

    public function showPrivacyPolicy(){
        return view('frontWebSite.privacy_policy');
    }

    public function showDarkHome(){
        return view('frontWebSite.homeDark');
    }



}

