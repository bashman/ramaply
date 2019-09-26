@extends('layout.app')
@section('externalcss')

@endsection
@section('title', $page['name'])
@section('banner')
    <div class="inner-banner">
       
        @if($page && $page->banner)
            <img src="{{env('APP_URL')}}/{{$page->banner}}" alt="">
        @else
        <img src="{{asset('assets/images/about-banner.jpg')}}" alt="">
        @endif
        <div class="flex container">
            <div class="banner-title">
                {{$page['name']}}
            </div>
            <div class="bradcam">
                <ul>
                    <li><a href="#"> Home » </a></li>
                    <li>{{$page['name']}}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('content')
    
    <section class="assci-client">
        <div class="container">
                <!-- <div class="heading">
                     {{$page['name']}}
                </div> -->
                <div class="heading-txt">
                {!! $contents[0]['description'] !!}
                </div>
            <div class="client-detail">
                
            </div>
        </div>
    </section>

@endsection
