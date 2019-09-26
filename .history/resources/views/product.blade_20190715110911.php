@extends('layout.app')
@section('title', 'Products')
@section('banner')

   
    <!-- <div class="inner-banner">
        @if($productsinfo->banner)
            <img src="{{env('APP_URL')}}/{{$productsinfo->banner}}" alt="">
        @else
        <img src="{{asset('assets/images/product-detials.jpg')}}" alt="">
        @endif
        <div class="flex container">
            <div class="banner-title">
                Product
            </div>
            <div class="bradcam">
                <ul>
                    <li><a href="#"> Home » </a></li>
                    <li><a href="{{env('APP_URL')}}/product"> Products » </a></li>
                    <li>{{$productsinfo->title}}</li>
                </ul>
            </div>
        </div>
    </div> -->
@endsection
@section('content')
    <section class="product">
    <div class="prod-tab">
        <div class="container">   
               @if($productsinfo->category)
                <h4>{{$productsinfo->category->name}}</h4>
               @endif 
                
                    <ul class="flex-start">
                        <li class="active"> <a href="#"> <img src="{{asset($productsinfo['thumb'])}}" alt="{{$productsinfo->title}}"> <p>{{$productsinfo->title}}</p></a> </li>
                        @if($relatedproduct && $relatedproduct->count() > 0)
                         
                           @foreach($relatedproduct as $singleprod)
                                <li><a href="{{url('product')}}/{{$singleprod['slug']}}"><img src="@if($singleprod['thumb']){{asset($singleprod['thumb'])}}@else{{env('APP_URL')}}/productimage/noimg.jpg" alt=""> <p>{{$singleprod->title}}</p></a> </li>
                           @endforeach
                        @endif 
                    </ul>
                    </div>    
            </div>
        <div class="container">
       
            <div class="flex">
                <div class="product-left">
                    <div class="small-heading">
                        {{$productsinfo->title}}
                    </div>
                    <div class="heading">{{$productsinfo->name}}</div>
                    <div class="text">
                        {!! $productsinfo->description !!}
                    </div>
                    @if($productsinfo->specifications)
                    <div class="specification">
                        <h4>Specifications</h4>
                        {!! $productsinfo->specifications !!}
                    </div>
                    @endif 

                    <div class="download-broch">
                        @if($productsinfo->brochure)
                            <a href="{{env('APP_URL')}}/{{$productsinfo->brochure}}" download="{{$productsinfo->brochure}}"> Download Brochure</a>
                        @endif
                    </div>

                    <div class="enquire-now">
                        <a href="{{env('APP_URL')}}/enquirenow?product={{urlencode($productsinfo->name)}}">Enquiry Now</a>
                    </div>
                </div>
                @php 
                $productsliders = $productsinfo->productsliders;
                $productfeatures = $productsinfo->productfeatures;
                @endphp
                
                @if($productsliders->count() > 0)

                <div class="product-right owl-carousel">
                   
                   @foreach($productsliders as $singleinfo)
                    <div class="item">
                        <img src="{{env('APP_URL')}}/{{$singleinfo->image}}" alt="">
                    </div>
                    @endforeach
                    
                </div>
                @else
                    <div class="product-right owl-carousel">
                        <img src="{{env('APP_URL')}}/{{$productsinfo->thumb}}" alt="">
                    </div>
                @endif 
            </div>

        </div>
    </section>
    <section class="feature-tab">
        <div class="container">
            <div class="main-tab-up">
                <ul class="main-ul">
                    <li class="active">
                        <div class="feat-tab-icon">
                            <img src="{{asset('assets/images/feature-black.png')}}" class="nor" alt="">
                            <img src="{{asset('assets/images/feature.png')}}" class="hov" alt="">
                        </div>
                        Features
                    </li>
                    <li>
                        <div class="feat-tab-icon">
                            <img src="{{asset('assets/images/tech-black.png')}}" class="nor" alt="">
                            <img src="{{asset('assets/images/tech.png')}}" class="hov" alt="">
                        </div>
                        Tech Specification
                    </li>
                </ul>
            </div>
            <div class="tab-container">
                <div class="content">

                   @if($productfeatures->count() > 0)

                    <ul>

                       @foreach($productfeatures as $singleinfo)

                        <li>
                            <div class="content-left">
                               @if($singleinfo->image)
                               <img src="{{env('APP_URL')}}/{{$singleinfo->image}}" alt="">
                                @else
                                <img src="{{asset('assets/images/tab-icon.jpg')}}" alt="">
                                @endif 
                            </div>
                            <div class="content-right">
                                <h3>{{$singleinfo->name}}</h3>
                                <div class="text">
                                    {{$singleinfo->description}}
                                </div>
                            </div>
                        </li>

                        @endforeach

                    </ul>
                    @else
                    <p class="error">Coming Soon..</p>
                    @endif 

                </div>
                <div class="content">
                     <!-- {!! $productsinfo->technicalspecifications !!} -->
                    <div class="spe-table">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <th>S. No.</th>
                                <th>Description</th>
                                <th>As per BIS</th>
                                <th>Our Test Result</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Moisture Content (%)</td>
                                <td>5-15</td>
                                <td>Our Test Result</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Glue Adhesion in Dry State <br> a) Glue Sher strenght <br> b) Adhesion of Piles (N)</td>
                                <td> <div class="full"></div> <br> Avg : 1350 <br> Excellent/Pass/Poor </td>
                                <td> <div class="full"></div> <br> 1560 <br> Excellent </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Glue Adhesion in Dry State <br> a) Glue Sher strenght <br> b) Adhesion of Piles (N)</td>
                                <td> <div class="full"></div> <br> Avg : 1350 <br> Excellent/Pass/Poor </td>
                                <td> <div class="full"></div> <br> 1560 <br> Excellent </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Glue Adhesion in Dry State <br> a) Glue Sher strenght <br> b) Adhesion of Piles (N)</td>
                                <td> <div class="full"></div> <br> Avg : 1350 <br> Excellent/Pass/Poor </td>
                                <td> <div class="full"></div> <br> 1560 <br> Excellent </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($products->count() > 0)
    <section class="other-product">
        <div class="container">
            <div class="small-heading">
                Mazbooti Bemisal, Chale Saalo Saal
            </div>
            <div class="heading">
                Others Product
            </div>
            <div class="other-product-slider owl-carousel">

            @foreach($products as $product)

                <div class="item">
                    <a href="{{url('product')}}/{{$product['slug']}}">
                        @if($product['thumb']) 
                            <img src="{{asset($product['thumb'])}}" alt="">
                        @else
                        {{$product['name']}}
                        @endif
                    </a>
                    <div class="bottom-shadow">
                        <img src="{{asset('assets/images/shadow-bottom.png')}}" alt="">
                    </div>
                    <p>{{$product['name']}}</p>
                </div>
                
            @endforeach

            </div>
        </div>
    </section>
  @endif 
@endsection
