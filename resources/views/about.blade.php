@extends('layout.app')
@section('title', 'About us')
@section('banner')
    <div class="inner-banner">
        <img src="{{asset($content['banner'])}}" alt="">
        <div class="flex container">
            <div class="banner-title">
                About Ramaply
            </div>
            <div class="bradcam">
                <ul>
                    <li><a href="#"> Home » </a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <section id="overview" class="aboutus">
        <div class="container flex">
            <div  class="about-left">
                <div class="small-heading">
                    {!! $content['companyprofiletag'] !!}
                </div>
                <div class="heading">
                    Overview
                </div>
                <div class="scro">               
                    {!! $content['companyprofiledescription'] !!}
                </div>    
            </div>
            <div class="about-right">
                <img src="{{asset($content['companyprofileimage'])}}" alt="">
            </div>
        </div>
    </section>
    <section id="mission-and-vision" class="vis-mis">
        <div class="container flex">
            <div class="vis-img">
                <img src="{{asset($content['missionvisionimage'])}}" alt="">
            </div>
            <div class="vis-txt">
                <div class="small-heading">{{$content['visionmissiontag']}}</div>
                <div class="heading">Mission and Vision</div>
                <div class="text">
                   {!! $content['missionvisiondescription'] !!}
                </div>
            </div>
        </div>
    </section>
    <section id="our-team" class="our-team">
        <div class="container flex">
            <div class="our-team">
                <div class="heading">
                    Our Team
                </div>
               {!! $content['ourteamdescription'] !!}
            </div>
            <div class="our-team-img">
                <img src="{{asset($content['ourteamimage'])}}" alt="">
            </div>
        </div>
    </section>
    <section id="infrastructure" class="vis-mis">
        <div class="container flex">
            <div class="vis-img">
                <img src="{{asset($content['infrastructureimage'])}}" alt="">
            </div>
            <div class="vis-txt">
                <div class="small-heading">{{$content['infrastructuretag']}}</div>
                <div class="heading">Infrastructure</div>
                <div class="text">
                   {!! $content['infrastructuredescription'] !!}
                </div>
            </div>
        </div>
    </section>
@endsection
