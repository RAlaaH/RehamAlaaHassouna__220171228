<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>My Shop to Sell Laptop @yield('title_Page')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icons -->
    <link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Site css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- colors css -->
    <link rel="stylesheet" href="css/colors1.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css" />
    <!-- wow Animation css -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css" />
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('cssCode')

</head>

@yield('body')

<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
    <!-- header top -->
    @include('frontWebSite.layouts.header')
    <!-- end header top -->
    <!-- header bottom -->
    @include('frontWebSite.layouts.menu')
    <!-- header bottom end -->
</header>

@yield('content')

@include('frontWebSite.layouts.footer')

<!-- js section -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menumaker.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- revolution js files -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- map js -->

@yield('javaScriptCode')

<script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: {lat: 40.645037, lng: -73.880224},
            styles: [
                {
                    elementType: 'geometry',
                    stylers: [{color: '#fefefe'}]
                },
                {
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                },
                {
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                },
                {
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#f5f5f5'}]
                },
                {
                    featureType: 'administrative.land_parcel',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#bdbdbd'}]
                },
                {
                    featureType: 'poi',
                    elementType: 'geometry',
                    stylers: [{color: '#eeeeee'}]
                },
                {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#757575'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                },
                {
                    featureType: 'road.arterial',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#3d3523'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                },
                {
                    featureType: 'road.local',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                },
                {
                    featureType: 'transit.line',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                },
                {
                    featureType: 'transit.station',
                    elementType: 'geometry',
                    stylers: [{color: '#000'}]
                },
                {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#c8d7d4'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#b1a481'}]
                }
            ]
        });

        var image = 'images/it_service/location_icon_map_cont.png';
        var beachMarker = new google.maps.Marker({
            position: {lat: 40.645037, lng: -73.880224},
            map: map,
            icon: image
        });
    }
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->

</body>
</html>
