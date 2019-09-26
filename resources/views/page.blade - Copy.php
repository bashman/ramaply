@extends('layout.app')
@section('externalcss')

@endsection
@section('title', $page['name'])
@section('banner')
    <div class="inner-banner">
       @if($page)
            <img src="{{env('APP_URL')}}/{{$page->banner}}" alt="">
        @else
        <img src="{{asset('assets/images/about-banner.jpg')}}" alt="">
        @endif
        
    </div>
@endsection
@section('content')
    @foreach($contents as $content)

      @if($content['type']=='1')
    <section class="aboutus">
        
        <div class="heading">{{$page['name']}}</div>
        <div class="container flex">

               {!! $content['description'] !!}

            <div class="about-right">
                <img src="{{asset($content['image'])}}" alt="">
            </div>
        </div>
    </section>
    @endif
      @if($content['type']=='2')
          <section class="vis-mis">
           <div class="heading">{{$page['name']}}</div>
        <div class="container flex">
            <div class="vis-img">
                <img src="{{asset($content['image'])}}" alt="">
            </div>
            <div class="vis-txt">
                {!! $content['description'] !!}
            </div>
        </div>
    </section>
    @endif
      @if($content['type']=='3')
    <section class="our-team">
     <div class="heading">{{$page['name']}}</div>
        <div class="container flex">

                {!! $content['description'] !!}

            <div class="our-team-img">
                <img src="{{asset($content['image'])}}" alt="">
            </div>
        </div>
    </section>
    @endif
    @endforeach
@endsection
