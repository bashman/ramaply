@extends('layout.app')
@section('title', $blog['title'])
@section('banner')
    <div class="inner-banner">
        <img src="{{asset('assets/images/about-banner.jpg')}}" alt="">
        <div class="flex container">
            <div class="banner-title">
               News
            </div>
            <div class="bradcam">
                <ul>
                    <li><a href="#"> Home » </a></li>
                    <li><a href="#"> News » </a></li>
                    <li>{{$blog['title']}}</li>
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
            <div class="heading">{{$blog['title']}} </div>
            <div class="flex">
                <div class="cont-left">
                    <div class="text">{!! $blog['description'] !!}</div>
                </div>
                <div class="cont-right">
                    <img src="{{asset($blog['image'])}}" alt="">
                </div>
                
            </div>

        </div>
    </div>
@endsection
