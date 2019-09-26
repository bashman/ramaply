@extends('layout.app')
@section('title', 'Network')
@section('banner')
    <div class="inner-banner">
    @if($page)
            <img src="{{env('APP_URL')}}/{{$page->banner}}" alt="">
        @else
        <img src="{{asset('assets/images/about-banner.jpg')}}" alt="">
        @endif
        <div class="flex container">
            <div class="banner-title">
                Network
            </div>
            <div class="bradcam">
                <ul>
                    <li><a href="#"> Home » </a></li>
                    <li>Network</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('content')
<section class="network">
    <div class="container">
        <div class="flex">
            <div class="network-left">
                <div class="small-heading">
                    WELCOME TO RAMAPLY THE GROUP (SINCE 1996)
                </div>
                <div class="heading">
                    RAMAPLY availability
                </div>
                <h3>Where does it come from?</h3>
                <div class="text">
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</p>
                </div>
                <div class="network-img">
                    <img src="{{asset('assets/images/network.jpg')}}" alt="">                
                </div>
            </div>
            <div class="network-right">
                <img src="{{asset('assets/images/network-map.jpg')}}" alt="">   
            </div>
        </div>    
    </div>
</section>
<section class="feedback">
        <div class="container">
            <div class="small-heading">
                Dealership form
            </div>
            <div class="heading">
                enquire now
            </div>
            <div class="heading-txt">
                Please fill up the following form to let us know your REQUIREMENTS or SUGGESTIONS to help us to serve you better.
            </div>
            <form action="">
                <ul>
                    <li>
                        <input type="text" placeholder="Name" required="">
                    </li>
                    <li>
                        <input type="text" placeholder="Company Name" required="">
                    </li>
                    <li>
                        <input type="text" placeholder="Email" required="">
                    </li>
                    <li>
                        <input type="text" placeholder="Mobile Number   " required="">
                    </li>
                    <li>
                        <input type="text" placeholder="Designation" required="">
                    </li>
                    <li>
                        <input type="text" placeholder="Subject" required="">
                    </li>
                    <li class="full">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </li>
                    <li class="full submit">
                        <button>SUbmit</button>
                    </li>
                </ul>
            </form>
        </div>
    </section>
@endsection
