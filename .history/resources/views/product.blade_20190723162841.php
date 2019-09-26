@extends('layout.app')
@section('title', 'Products')
@section('banner')

   
   <!-- <div class="inner-banner">
        @if(isset($productsinfo->banner))
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
    </div>  -->

@endsection
@section('content')
    <section class="product">


    <div class="prod-tab">
        <div class="container">   
               @if($productsinfo->category)
                <h4>{{$productsinfo->category->name}}</h4>
               @endif 
                    <div class="flex">
                    <ul class="">
                        <li class="active item"> 
                        <a href="#"> 
                           
                            @if($productsinfo['thumb'])
                            <img src="{{asset($productsinfo['thumb'])}}" alt="{{$productsinfo->title}}"> 
                            @else
                            <img src="{{env('APP_URL')}}/productimage/noimg.jpg" alt="">
                            @endif 
                            
                        <p>{{$productsinfo->title}}</p>

                    </a>
                   
                    </li>
                    </ul>
                    <ul class="product-thumbs owl-carousel">
                        @if($relatedproduct && $relatedproduct->count() > 0)
                         
                           @foreach($relatedproduct as $singleprod)
                                <li class="item"><a href="{{url('product')}}/{{$singleprod['slug']}}">
                                
                                   @if($singleprod['thumb'])
                                     <img src="{{asset($singleprod['thumb'])}}" alt="">
                                   @else
                                   <img src="{{env('APP_URL')}}/productimage/noimg.jpg" alt="">
                                   @endif 

                                 <p>{{$singleprod->title}}</p>
                                
                                </a>
                             </li>
                           @endforeach
                        @endif 
                    </ul>
                    </div>
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

                    @php 
                    $productfeatures = $productsinfo->productfeatures;
                    @endphp
                   
                    @if($productfeatures->count() > 0)

                        <div class="spc-new">
                            <ul class="flex">

                                    @if($productsinfo->application)
                                        <li class="flex">
                                            <div class="spc-img">
                                                <img src="{{env('APP_URL')}}/assets/images/Application.png" alt="">
                                            </div> 
                                            <div class="spc-txt"><h4>Application</h4><p>{{$productsinfo->application}}</p></div> 
                                        </li>    
                                    @endif 

                                     @if($productsinfo->available_thickness)
                                        <li class="flex">
                                            <div class="spc-img">
                                                <img src="{{env('APP_URL')}}/assets/images/Available.png" alt="">
                                            </div> 
                                            <div class="spc-txt"><h4>Available Thickness</h4><p>{{$productsinfo->available_thickness}}</p></div> 
                                        </li>    
                                    @endif 


                                    @if($productsinfo->sizes)
                                        <li class="flex">
                                            <div class="spc-img">
                                                <img src="{{env('APP_URL')}}/assets/images/Sizes.png" alt="">
                                            </div> 
                                            <div class="spc-txt"><h4>Sizes</h4><p>{{$productsinfo->sizes}}</p></div> 
                                        </li>    
                                    @endif 


                                    @if($productsinfo->specification)
                                        <li class="flex">
                                            <div class="spc-img">
                                                <img src="{{env('APP_URL')}}/assets/images/specification.png" alt="">
                                            </div> 
                                            <div class="spc-txt"><h4>IS specification</h4><p>{{$productsinfo->specification}}</p></div> 
                                        </li>    
                                    @endif 

                                    @if($productsinfo->available_thickness)
                                        <li class="flex">
                                            <div class="spc-img">
                                                <img src="{{env('APP_URL')}}/assets/images/USP.png" alt="">
                                            </div> 
                                            <div class="spc-txt"><h4>Available Thickness</h4><p>{{$productsinfo->available_thickness}}</p></div> 
                                        </li>    
                                    @endif 

                                    @if($productsinfo->available_thickness)
                                        <li class="flex">
                                            <div class="spc-img">
                                                <img src="{{env('APP_URL')}}/assets/images/Warranty.png" alt="">
                                            </div> 
                                            <div class="spc-txt"><h4>Available Thickness</h4><p>{{$productsinfo->available_thickness}}</p></div> 
                                        </li>    
                                    @endif 


                            </ul>
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
                
                @endphp
                
                @if($productsliders->count() > 0)

                <div class="product-right owl-carousel">
                   
                   @foreach($productsliders as $singleinfo)
                    <div class="item">
                       
                    @if($singleinfo->image)
                    <img src="{{env('APP_URL')}}/{{$singleinfo->image}}" alt="">
                    @else
                    <img src="{{env('APP_URL')}}/productimage/noimg.jpg" alt="">
                    @endif
                    </div>
                    @endforeach
                    
                </div>
                @else
                    <div class="product-right owl-carousel">
                        
                        @if($productsinfo->thumb)
                        <img src="{{env('APP_URL')}}/{{$productsinfo->thumb}}" alt="">
                        @else
                        <img src="{{env('APP_URL')}}/productimage/noimg.jpg" alt="">
                        @endif

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
                        Specifications
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
                <div class="content specification">

                   @if($productsinfo->specifications)
                        {!! $productsinfo->specifications !!}
                    @else 
                    <p>coming Soon!!</p>
                   @endif 

                </div>
                <div class="content">
                     <!-- {!! $productsinfo->technicalspecifications !!} -->
                    <div class="spe-table">
                        
                        @if($productsinfo->technicalspecifications)
                            {!! $productsinfo->technicalspecifications !!}
                        @else 
                        <p>coming Soon!!</p>
                       @endif 

                
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($relatedproduct && $relatedproduct->count() > 0)
    <section class="other-product">
        <div class="container">
            <div class="small-heading">
                Mazbooti Bemisal, Chale Saalo Saal
            </div>
            <div class="heading">
                Others Product
            </div>
            <div class="other-product-slider owl-carousel">

            @foreach($relatedproduct as $product)

                <div class="item">
                    <a href="{{url('product')}}/{{$product['slug']}}">
                        @if($product['thumb']) 
                            <img src="{{asset($product['thumb'])}}" alt="">
                        @else
                        <img src="{{env('APP_URL')}}/productimage/noimg.jpg" alt="" >
                        @endif
                    
                        <div class="bottom-shadow">
                            <img src="{{asset('assets/images/shadow-bottom.png')}}" alt="">
                        </div>
                        <p>{{$product['name']}}</p>
                    </a>
                </div>
                
            @endforeach

            </div>
        </div>
    </section>
<!--     
<script src="https://www.centuryply.com/assets/js/slick.min.js"></script>
 <script>
       $(document).ready(function(){
      
            $('.product-thumbs').not('.slick-initialized').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                infinite: false,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 5
                        }
                    },
                    {
                        breakpoint: 1000,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });
        })

        
    </script> -->
  @endif 
@endsection
