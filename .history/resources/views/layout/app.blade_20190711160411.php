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
    <title>@yield('title')</title>
    @yield('externalcss')
</head>
<body class="new-home">
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
<header class="header">
        <div class="container">
            <div class="logo">
                <a href="{{url('/')}}"> <img src="{{asset('assets/images/logo-black.jpg')}}" alt=""></a>
            </div>
            <div class="header-right">
                <nav>
                    <ul>
                        @foreach($frontmainmenus as $menu)
                            <li @if($menu['slug']!='products') class="noimg" @else class="product-nav" @endif>
                                <a href="{{env('APP_URL')}}/{{$menu['slug']}}">{{$menu['name']}}</a>

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
                        
                    </ul>
                </nav>

            @if($productsmenu->count() > 0)
                <div class="mega-menu  productmega-menu">
                 <div class="flex">
                    @foreach($productsmenu as $singleinfo)

                        <div class="mega-menu-inside">
                            <h3>{{$singleinfo->name}}</h3>
                            @if($singleinfo->products()->count() > 0 )
                            <ul>
                            @foreach($singleinfo->products as $singlechild)
                                    <li><a href="{{env('APP_URL')}}/product/{{$singlechild['slug']}}">{{$singlechild->title}}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                @endforeach
                </div>
                </div>
            @endif 
                <div class="enquire-now"><a href="{{url('enquirenow')}}">enquire now</a></div>
            </div>
        </div>
    </header>

 @yield('banner')


@yield('content')

<div class="quick-enquiry-form-fotter">
        <div class="quick-enq-inside">
            <h2>Quick Enquiry</h2>
            <form action="">
                <ul>
                    <li>
                        <input type="text" placeholder="Name" required>
                    </li>
                    <li>
                        <input type="text" placeholder="Email" required>
                    </li>
                    <li>
                        <input type="text" placeholder="Mobile" required>
                    </li>
                    <li>
                        <input type="text" placeholder="State" required>
                    </li>
                    <li>
                        <input type="text" placeholder="City" required>
                    </li>
                    <li>
                        <textarea placeholder="Message" required></textarea>
                    </li>
                    <li>
                        <button>Submit</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>

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
                    Unit no 214-217, Building No 38, Ansal Tower Nehru Place, New Delhi- 110019 
                </p>
                <p>
                    <span><img src="{{asset('assets/images/footer-phn-icon.png')}}" alt=""></span>
                    7440966666
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
                @foreach($productsfooter as $product)
                    <li>
                        <a href="{{url('products')}}/{{$product['slug']}}" data-img="{{asset($product['thumb'])}}">{{$product->name}}</a>
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
                        <a href="https://www.facebook.com/ramaply/" target="_blank"><img src="{{asset('assets/images/footer-face-icon.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/ramaply" target="_blank"><img src="{{asset('assets/images/twit-icon.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=iRv7w5cFJ_A" target="_blank"><img src="{{asset('assets/images/footer-you-icon.png')}}" alt=""></a>
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
    <div class="container flex">
      <p>© Copyright 2019 RamaPly all rights reserved </p> <p> Web Design &amp; Development : <a href="https://interactivebees.com/" target="_blank">Interactive Bees</a></p>
    </div>
</footer>
</body>
</html>
