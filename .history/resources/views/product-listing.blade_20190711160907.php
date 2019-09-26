@extends('layout.app')
@section('title', 'Products')
@section('banner')
    <div class="inner-banner">
       @if($pageinfo)
            <img src="{{env('APP_URL')}}/{{$pageinfo->banner}}" alt="">
        @else
        <img src="{{asset('assets/images/about-banner.jpg')}}" alt="">
        @endif

        <div class="flex container">
            <div class="banner-title">
                Products
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
<section class="productlisting">
    <div class="container">
        <div class="small-heading">
            Mazbooti Bemisal, Chale Saalo Saal
        </div>
        <div class="heading">
        {{$pageinfo->name}}
        </div>
        <div class="product-detail">
            <ul class="flex-start">
                @foreach($products as $product)
                <li>
                    <div class="product-img">
                        <img src="{{asset($product['thumb'])}}" alt="">
                    </div>
                    <h3>{{$product['name']}}</h3>
                    <div class="text">
                       {!! $product['shortdescription'] !!}
                    </div>
                    <a href="{{url('product')}}/{{$product['slug']}}" class="button">Explore</a>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
</section>

@endsection
