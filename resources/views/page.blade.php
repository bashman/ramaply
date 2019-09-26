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
    <section class="career">
        <div class="container flex">
                <div class="career-left">
                  
                    <!-- <div class="heading">
                        {{$page['name']}}
                    </div> -->
                    <div class="text">
                        {!! $contents[0]['description'] !!}
                    </div>
                </div>
                <div class="career-right">
                    <img src="{{asset($contents[0]['image'])}}" alt="">
                </div>
        </div>
    </section>

@endsection
