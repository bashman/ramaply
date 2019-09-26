@extends('layout.app')
@section('banner')
    <div class="banner-slider owl-carousel">
        @foreach($banners as $banner)
        <div class="item">
            <img src="{{asset($banner['banner'])}}" alt="Home Slider">
            <div class="container">
                <div class="banner-txt">
                    <h3>Premium Quality Of <span>Plywood</span></h3>
                    <p>This Product Collection Is Supplied By Our Prestigious Clients By Making Utilize.</p>
                    <div class="explore"><a href="#">Explore</a></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
@section('content')
    <section class="aboutus">
        <div class="container flex">
            <div class="about-left">
                <div class="small-heading" id="sh1">
                    {{$homepage['quote1']}}
                </div>
                <div class="heading">
                    About us
                </div>
               {!! $about['aboutushomedescription'] !!}
                <div class="about-slider owl-carousel">
                   @foreach($awards as $award)
                    <div class="item">
                        <div class="icon">
                            <img src="{{asset($award['image'])}}" class="nor-img" alt="">
                            <img src="{{asset($award['norimage'])}}" class="hov-img" alt="">
                        </div>
                        <h4>{{$award['awardcount']}}</h4>
                        <p>{{$award['name']}}</p>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="about-right">
                <img src="{{asset($about['aboutushomeimage'])}}" alt="">
            </div>
        </div>
    </section>
    <section class="product-range">
        <div class="container">
            <div class="range-top align-center">
                <dis class="small-heading" id="sh2">
                    {{$homepage['quote2']}}
                </dis>
                <div class="heading">
                    Products Range
                </div>
                <div class="heading-txt">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
            </div>
            <div class="product-range-product flex">
                <div class="range-left">
                    <ul>

                        <li>
                            <img src="{{asset($homeproduct1['image'])}}" alt=""> <h3>{{$homeproduct1['name']}}</h3>
                            <div class="flex-up">
                                <div class="mask">
                                    <h4>{{$homeproduct1['name']}}</h4>
                                    {!! $homeproduct1['description'] !!}
                                    <a href="{{url($homeproduct2['url'])}}">Explore</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset($homeproduct2['image'])}}" alt=""><h3>{{$homeproduct2['name']}}</h3>
                            <div class="flex-up">
                                <div class="mask">
                                    <h4>{{$homeproduct2['name']}}</h4>
                                    {!! $homeproduct2['description'] !!}
                                    <a href="{{url($homeproduct2['url'])}}">Explore</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="ragne-center">
                    <ul>
                        <li>
                            <img src="{{asset($homeproduct3['image'])}}" alt=""><h3>{{$homeproduct3['name']}}</h3>
                            <div class="flex-up">
                                <div class="mask">
                                    <h4>{{$homeproduct3['name']}}</h4>
                                    {!! $homeproduct3['description'] !!}
                                    <a href="{{url($homeproduct3['url'])}}">Explore</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset($homeproduct4['image'])}}" alt=""><h3>{{$homeproduct4['name']}}</h3>
                            <div class="flex-up">
                                <div class="mask">
                                    <h4>{{$homeproduct4['name']}}</h4>
                                    {!! $homeproduct4['description'] !!}
                                    <a href="{{url($homeproduct4['url'])}}">Explore</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset($homeproduct5['image'])}}" alt=""><h3>{{$homeproduct5['name']}}</h3>
                            <div class="flex-up">
                                <div class="mask">
                                    <h4>{{$homeproduct5['name']}}</h4>
                                    {!! $homeproduct5['description'] !!}
                                    <a href="{{url($homeproduct5['url'])}}">Explore</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset($homeproduct6['image'])}}" alt=""><h3>{{$homeproduct6['name']}}</h3>
                            <div class="flex-up">
                                <div class="mask">
                                    <h4>{{$homeproduct6['name']}}</h4>
                                    {!! $homeproduct6['description'] !!}
                                    <a href="{{url($homeproduct6['url'])}}">Explore</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset($homeproduct7['image'])}}" alt=""><h3>{{$homeproduct7['name']}}</h3>
                            <div class="flex-up">
                                <div class="mask">
                                    <h4>{{$homeproduct7['name']}}</h4>
                                    {!! $homeproduct7['description'] !!}
                                    <a href="{{url($homeproduct7['url'])}}">Explore</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="range-right">
                    <ul>
                        <li>
                            <img src="{{asset($homeproduct8['image'])}}" alt=""><h3>{{$homeproduct8['name']}}</h3>
                            <div class="flex-up">
                                <div class="mask">
                                    <h4>{{$homeproduct8['name']}}</h4>
                                    {!! $homeproduct8['description'] !!}
                                    <a href="{{url($homeproduct8['url'])}}">Explore</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset($homeproduct9['image'])}}" alt=""><h3>{{$homeproduct9['name']}}</h3>
                            <div class="flex-up">
                                <div class="mask">
                                    <h4>{{$homeproduct9['name']}}</h4>
                                    {!! $homeproduct9['description'] !!}
                                    <a href="{{url($homeproduct9['url'])}}">Explore</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="assci-client">
        <div class="container">
            <div class="align-center">
                <dis class="small-heading" id="sh3">
                    {{$homepage['quote3']}}
                </dis>
                <div class="heading">
                    associated Clients
                </div>
                <div class="heading-txt">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
            </div>
            <div class="client-detail">
                <ul>
                    @foreach($clients as $client)
                    <li>
                        <img src="{{asset($client['image'])}}" alt="">
                    </li>
                  @endforeach
                </ul>
            </div>
        </div>
    </section>
    <section class="ourjourney">
        <div class="container">
            <div class="align-center">
                <dis class="small-heading" id="sh4">
                    {{$homepage['quote4']}}
                </dis>
                <div class="heading">
                    our journey
                </div>
                <div class="heading-txt">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
            </div>
            <div class="video-btn">
                <a href="#"> <img src="{{asset('assets/images/vid-icon.png')}}" alt=""></a>
            </div>
        </div>
    </section>
    <section class="news-testi">
        <div class="container flex">
            <div class="latest-blog">
                <div class="small-heading" id="sh5">
                    {{$homepage['quote5']}}
                </div>
                <div class="heading">Latest Blogs/News</div>
                @foreach($blogs as $blog)
                <div class="blog-data flex">
                    <div class="blog-img">
                        <img src="{{asset($blog['thumbimage'])}}" alt="">
                    </div>
                    <div class="blog-txt">
                        <h4>{{$blog['name']}}</h4>
                       {!! $blog['description'] !!}
                        <div class="line">&nbsp;</div>
                        <div class="flex">
                            <div class="blog-auth-name">
                                <img src="{{asset('assets/images/blog-icon.png')}}" alt="">
                                <span>{{$blog['author']}}</span>
                            </div>
                            <div class="blog-date">
                                <img src="{{asset('assets/images/time-icon.png')}}" alt="">
                                <span>
                                    {{$blog['postdate']}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="testimonials">
                <div class="small-heading" id="sh6">
                    {{$homepage['quote6']}}
                </div>
                <div class="heading">
                    Testimonials
                </div>
                <div class="testi-slider owl-carousel">
                    @foreach($testimonials->chunk(2) as $tesimonial)

                    <div class="item">
                        @foreach($tesimonial as $testi)
                        <div class="testi-wrap flex">
                            <div class="testi-im">
                                <img src="{{asset($testi['image'])}}" alt="">
                            </div>
                            <div class="testi-text">
                                <h4>{{$testi['author']}}</h4>
                                <h5>{{$testi['designation']}}</h5>
                               <p>{!! $testi['description'] !!} <a href="#"> Read More </a></p>
                            </div>
                        </div>

                        @endforeach
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
