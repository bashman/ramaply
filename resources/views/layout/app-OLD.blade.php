<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mCustomScrollbar.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-rama.js')}}"></script>
    <title>Index</title>
    @yield('externalcss')
</head>
<body>
<header class="header-top">
    <div class="container align-right">
        <ul>
            <li>
                <img src="{{asset('assets/images/call-icon.png')}}" alt=""> +91 7440966666
            </li>
            <li>
                <img src="{{asset('assets/images/mail-icon.png')}}" alt=""> <a href="mailto:dlmo@ramaply.com"> dlmo@ramaply.com</a>
            </li>
        </ul>
    </div>
</header>
<div class="banner">
    <header class="header">
        <div class="container">
            <div class="logo">
               <a href="{{url('/')}}"> <img src="{{asset('assets/images/logo.png')}}" alt=""></a>
            </div>
            <div class="header-right">
                <nav>
                    <ul>

                        @foreach($frontmainmenus as $menu)
                            <li>
                                <a href="{{env('APP_URL')}}/{{$menu['slug']}}">{{$menu['name']}}</a>
                                @if($menu['slug']=='product')
                                    <ul>
                                    @foreach($productsmenu as $product)
                                        <li class="productmenu">
                                            <a href="{{url('product')}}/{{$product['slug']}}" data-img="{{asset($product['thumb'])}}">{{$product->name}}</a>
                                        </li>
                                    @endforeach
                                       
                                        <li class="right-img-menu">
                                            <img src="{{asset($product['thumb'])}}" id="topnav_img" alt="">
                                        </li>
                                    </ul>
                                @endif
                                @if($menu->frontmenuchildcount($menu['id']))
                                    <ul>
                                    @foreach($menu->frontmenuchild($menu['id']) as $child)
                                            <li>
                                                <a href="{{env('APP_URL')}}/{{$child['slug']}}"> {{$child['name']}}</a>
                                            </li>
                                    @endforeach
                                    </ul>
                                @endif

                            </li>
                        @endforeach
                        {{--<li><a href="{{url('/')}}">Home </a></li>--}}
                        {{--<li><a href="about">About Us</a></li>--}}
                        {{--<li><a href="product">Products</a>--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--<a href="product"> BWP Marine Plywood IS :710</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="product"> BWP Fire Retardant Marine Plywood IS:710 & 15061/5509</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="product"> BWR & MR Plywood IS :303</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="product"> Teak Plywood IS :1328</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="product"> BWP & MR blockboard IS: 1659</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="product"> Doors</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="product">Shuttering Plywood IS : 4990</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="product"> Automotive Grade Plywood (Transport sector)</a>--}}
                                {{--</li>--}}
                                {{--<li class="right-img-menu">--}}
                                    {{--<img src="{{asset('assets/images/menu-right.jpg')}}" alt="">--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="#">Media</a></li>--}}
                        {{--<li><a href="#">Career</a></li>--}}
                        {{--<li><a href="#">Quality</a></li>--}}
                        {{--<li><a href="contact">Contact Us</a></li>--}}
                    </ul>
                </nav>
                <div class="enquire-now"><a href="{{url('enquirenow')}}">enquire now</a></div>
            </div>
        </div>
    </header>
    @yield('banner')

</div>
@yield('content')
<footer class="footer">
    <div class="container flex">
        <div class="footer-left">
            <h4>About Ramaply</h4>
            <div class="text">
                Since the Group's inception, we have always planned for the future with a highly dedicated team and achieved our ambitious goals with the help of a hi-tech infrastructure and result oriented after sales service
            </div>
            <h5>CORPORATE OFFICE:</h5>
            <div class="cor-offi">
                <p>
                    <span><img src="{{asset('assets/images/footer-loc-icon.png')}}" alt=""></span>
                    A-16, FF, WHS Kirti Nagar, New Delhi- 110015
                </p>
                <p>
                    <span><img src="{{asset('assets/images/footer-phn-icon.png')}}" alt=""></span>
                    011-25103992, Mob.: 7440966666
                </p>
                <p>
                    <span><img src="{{asset('assets/images/footer-mail-icon.png')}}" alt=""></span>
                    <a href="mailto:dlmo@ramaply.com"> dlmo@ramaply.com  </a>
                </p>
            </div>
        </div>
        <div class="footer-left1 width135">
            <h4>Links</h4>
            <ul>
                <li>
                    <a href="{{env('APP_URL')}}">Home</a>
                </li>
                <li>
                    <a href="{{env('APP_URL')}}/about">About Us</a>
                </li>
                <li>
                    <a href="{{env('APP_URL')}}/product">Products</a>
                </li>
                <li>
                    <a href="{{env('APP_URL')}}/career">Career</a>
                </li>
                <li>
                    <a href="{{env('APP_URL')}}/media">Media</a>
                </li>
                <li>
                    <a href="{{env('APP_URL')}}/quality">Quality</a>
                </li>
                <li>
                    <a href="{{env('APP_URL')}}/network">Network</a>
                </li>
                <li>
                    <a href="{{env('APP_URL')}}/contact">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="footer-left1">
            <h4>Products</h4>
            <ul>
                @foreach($productsmenu as $product)
                    <li>
                        <a href="{{url('product')}}/{{$product['slug']}}" data-img="{{asset($product['thumb'])}}">{{$product->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="footer-last">
            <h4>
                Subscribe Newsletter
            </h4>
            <div class="text">
                Subscribe to our mailing list to get the updates to your email inbox.
            </div>
            <div class="newsletter">
                <input type="text" placeholder="Enter your email address">
                <button class="news-submit">Submit</button>
            </div>
            <div class="footer-social">
                <ul>
                    <li>
                        <a href="#"><img src="{{asset('assets/images/footer-face-icon.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('assets/images/twit-icon.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('assets/images/footer-you-icon.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('assets/images/footer-gplus-icon.png')}}" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script>

$(".productmenu a").hover(function(){
  var imgsrc = $(this).attr('data-img');
  $("#topnav_img").attr('src',imgsrc);
});

</script>
<footer class="footer-last-bot">
    <div class="container">
        Web Design &amp; Development : <a href="https://interactivebees.com/" target="_blank">Interactive Bees</a>
    </div>
</footer>
</body>
</html>
