@extends('layout.app')
@section('title', 'Coming Soon')
@section('banner')
    <div class="inner-banner">
        <img src="{{asset('assets/images/about-banner.jpg')}}" alt="">
        <div class="flex container">
            <div class="banner-title">
                Coming soon
            </div>
            <div class="bradcam">
                <ul>
                    <li><a href="#"> Home » </a></li>
                    <li><a href="#"> Coming Soon » </a></li>
                    <li>Coming Soon</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="blog">
        <div class="container">
            <div class="small-heading">
                Mazbooti Bemisal, Chale Saalo Saal
            </div>
            <div class="heading">Coming Soon</div>

        </div>
    </div>
@endsection
