@extends('layout.app')
@section('title', 'Blog')
@section('banner')
    <div class="inner-banner">
        @if($pageinfo)
            <img src="{{env('APP_URL')}}/{{$pageinfo->banner}}" alt="">
        @else
        <img src="{{asset('assets/images/about-banner.jpg')}}" alt="">
        @endif

        <div class="flex container">
            <div class="banner-title">
                {{$pageinfo->name}}
            </div>
            <div class="bradcam">
                <ul>
                    <li><a href="#"> Home » </a></li>
                    <li>{{$pageinfo->name}}</li>
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
            <div class="heading">Latest News</div>
            <div class="blog-data">
                <ul class="flex">
                    @foreach($blogs as $blog)
                    <li>
                        <div class="blog-img">
                            <img src="{{asset($blog['image'])}}" alt="">
                        </div>
                        <div class="flex-start">
                            <div class="blog-auth-name">
                                <img src="{{asset('assets/images/blog-icon.png')}}"  alt="">
                                <span>{{$blog['author']}}</span>
                            </div>
                            <div class="blog-date">
                                <img src="{{asset('assets/images/time-icon.png')}}"  alt="">
                                <span>
                                   {{$blog['postdate']}}
                                </span>
                            </div>
                        </div><h3>{!! $blog['name'] !!}</h3>
                        <div class="text">
                         {!! $blog['description'] !!}
                        </div>
                        <a href="{{url('media'.'/'.$blog['slug'])}}" class="readmore">Read More</a>
                    </li>
                    @endforeach
                   
                </ul>
            </div>
        </div>
    </div>
@endsection
