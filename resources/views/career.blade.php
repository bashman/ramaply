@extends('layout.app')
@section('externalcss')
    {!! $career['externalcss'] !!}
@endsection
@section('title', 'Career')
@section('banner')
    <div class="inner-banner">
        <img src="{{asset($career['banner'])}}" alt="">
        <div class="flex container">
            <div class="banner-title">
               Career
            </div>
            <div class="bradcam">
                <ul>
                    <li><a href="#"> Home » </a></li>
                    <li>Career</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <section class="career">
        <div class="container flex">
            <div class="career-left">
                <div class="small-heading">{{$career['quote']}}</div>
                <div class="heading">
                    {{$career['name']}}
                </div>
                <div class="text">
                    {!! $career['content'] !!}
                </div>
            </div>
            <div class="career-right">
                <img src="{{asset($career['image'])}}" alt="">
            </div>
        </div>
    </section>
   

@endsection
