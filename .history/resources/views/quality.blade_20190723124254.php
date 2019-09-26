@extends('layout.app')
@section('title', 'Quality')
@section('banner')
    <div class="inner-banner">
       @if($page)
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
                    <li> {{$page['name']}}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="quality aboutus">
        <div class="container flex">
            <div class="about-left">
                <div class="small-heading">
                    COMPANY PROFILE  THE GROUP (SINCE 1996)
                </div>
                <!-- <div class="heading">
                        {{$page['name']}} 
                </div> -->
               <div class="text">
                    {!! $contents[0]['description'] !!}
                </div>
                
            </div>
            @if($contents[0]['image'])
                <div class="about-right">
                    <img src="{{asset($contents[0]['image'])}}" alt="">
                </div>
            @endif
        </div>
        @if($contents->count() > 2)
        @php
        $tablist='';$tabcontent=''; $cntr=0;
        foreach($contents as $content){

        if($cntr > 0)
        {
            $title = $content->title;
            $description = $content->description;
            if($cntr==1){
                $clsname='active';
                $imgicon = env('APP_URL').'/assets/images/feature-white-icon.png';
            }else{
                $clsname='';
                $imgicon = env('APP_URL').'/assets/images/tech-specification-icon.png';
            }
            $tablist .='<li class="'.$clsname.'">
                                        <div class="feat-tab-icon">
                                            <img src="'.$imgicon.'" class="nor" alt="">
                                            <img src="'.$imgicon.'" class="hov" alt="">
                                        </div>
                                        '.$title.'
                                    </li>';
            $tabcontent .='<div class="content">
                                    '.$description.'
                                </div>';
        }
        $cntr++;
    }

        @endphp
        <section class="feature-tab">
                <div class="container">
                        <div class="quanit-tab">
                            <div class="main-tab-up">
                            <ul class="main-ul">
                                   <li class="active">
                                        <div class="feat-tab-icon">
                                            <img src="{{asset('assets/images/feature-white-icon.png')}}" class="nor" alt="">
                                            <img src="{{asset('assets/images/feature-white-icon.png')}}" class="hov" alt="">
                                        </div>
                                        USP
                                    </li><li class="">
                                        <div class="feat-tab-icon">
                                            <img src="{{asset('assets/images/tech-specification-icon.png')}}" class="nor" alt="">
                                            <img src="{{asset('assets/images/tech-specification-icon.png')}}" class="hov" alt="">
                                        </div>
                                        R&D 
                                    </li><li class="">
                                        <div class="feat-tab-icon">
                                            <img src="{{asset('assets/images/tech-specification-icon.png')}}" class="nor" alt="">
                                            <img src="{{asset('assets/images/tech-specification-icon.png')}}" class="hov" alt="">
                                        </div>
                                        Certification
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-container">
                                <div class="content">
                                    <h4>SDS</h4>

                                     <div class="flex">
                                       
                                        <div class="cont-left">
                                            <p>It is our values...<br>
                                            It is in our processes...<br>
                                            It is in our products...<br>
                                            SDS is imbibed as values by our entire Ramaply Family</p><p><b> Strength: </b> Every product we manufacture is made with an extraodinary core venner hand-picked from seasoned wood, by our qualified team of experts, which allows the product to bear grat load yet stand tall.</p>
                                            <p>
                                            <b> Durability: </b> Our products go through rigorous hot and cold pressing procedure which elongates the life of our plywood. The product is treated with anti termite and anti podder chemical by VPI technology ( Vacuum Pressure Impregnation) at different stages to guarantee the quality and durability.</p>
                                            <p>
                                            <b> Safety:</b>  We ensure our all products are safe to be used in all manners. No harmful chemicals are used during manufacturing and no harful fumes are emitted by our products. Due to consistent quality checks all products are guaranteed for quality. All products are exceptionally strong for the use.</p>
                                            
                                            <p>
                                            Together, based on our three foundation strength, Durability and Safety; we have built a strong reputation globally. The company makes every possible effort to ensure that all individuals of the Ramaply family imbibe these values and offer their clients a unique mix of products of unmatched quality. The company's devotion and consistent hard work has given its stance a new meaning:</p>
                                            <hr />
                                            <h4>VPI</h4>
                                            <p>VVPI (Vacuum Pressure Impregnation) is an incorporated and advance technology for wood treatment. The purpose of the Vacuum Pressure treatment is to force preservative chemicals deep into the cellular structure of the wood for assuming complete protection against Fungus, Insects, Termite and Pests. The preservative chemical acts as a barrier between the wood and biological deterioration agents so that the service life of wood can be substantially increased. For Vacuum Pressure Impregnation process, moisture of wood reduced before the application of the chemicals. In case of round logs treatments, logs been debarked by using various equipments so the chemical passes through into the wood porous. VPI technology ensures the high durability of products. A technology that allows the active and proactive ingredients to better penetrate the wood fibers ensuring superior protection against Fungus and other pathogens. As a result of VPI, it is possible to enjoy the warmth and beauty of areas covered and decorated with wood for a long time. </p>
                                        </div>
                                        <div class="cont-right">
                                            <img src="{{asset('assets/images/ssd.png')}}"  alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    
                                    <div class="flex">
                                        <div class="cont-left">
                                            <h4>Supporting life through Research & Development</h4>
                                            <p>We understand contast inovation and development is the way tomake things better. Hence we have an in-house lab with A-lne tesing instruments to support this belief. Our very experienced Quality Assurance Team is in place to ensure all products are of the highest quality. Samples of all finfished products, intermediate products and raw materials are drawn at every stage for testing which promotes ultimate Quality Assurance.</p>
                                            <p>We are proud that all our products are BIS certified and are also tested by renowned labs. We habe an outstanding TQM standards and hence we are ISO 9001 certified . Apart from this we are certified under CIRT(Central Istitute of Raod Transport). We are proud member of IPRITI and Green Building. We take quality to be the foremost important element in all our products. Hence, all our efforts are dedicated towards producing outstanding Quality in everytihing we do.</p>
                                        </div>
                                        <div class="cont-right">
                                               
                                            <div class="right-slider owl-carousel">

                                            <div class="item">
                                                <img src="{{env('APP_URL')}}/homebanner/4f406fd8f0141a791c63b30fd6c88970.jpg" alt="Banner1">
                                            </div>
                                            <div class="item">
                                                <img src="{{env('APP_URL')}}/homebanner/1ce19b75dde747972c426b6af90554a9.jpg" alt="Banner1">
                                            </div>
                                            
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="content">
                                    <h4>ISI Certification </h4>
                                    <p> Our most of the products are certified from BIS and ISI marked. Few of them are as follows</p>
                                    <div class="img-dv">
                                        <img src="{{asset('assets/images/Certification-1.jpg')}}"  alt="">
                                        <img src="{{asset('assets/images/Certification-2.jpg')}}"  alt="">
                                        <img src="{{asset('assets/images/Certification-3.jpg')}}"  alt="">
                                        <img src="{{asset('assets/images/Certification-4.jpg')}}"  alt="">
                                        <img src="{{asset('assets/images/Certification-5.jpg')}}"  alt="">
                                        <img src="{{asset('assets/images/Certification-6.jpg')}}"  alt="">
                                    </div>
                                    <hr>
                                    <h4>ISO Certification  </h4>
                                    <div class="img-dv">
                                        <img src="{{asset('assets/images/Certification-7.jpg')}}"  alt="">
                                    </div>  
                                    <hr> 
                                    <h4>Other Certification  </h4>
                                    <div class="img-dv">
                                        <img src="{{asset('assets/images/Certification-8.jpg')}}"  alt="">
                                        <img src="{{asset('assets/images/Certification-9.jpg')}}"  alt="">
                                    </div>  
                                    <hr>
                                    <h4>Environment Friendly </h4>
                                    <div class="img-dv">
                                        <img src="{{asset('assets/images/Certification-10.jpg')}}"  alt="">
                                        <img src="{{asset('assets/images/Certification-11.jpg')}}"  alt="">
                                    </div>    
                                </div>
                            </div>

                        </div>
                </div>
        </section>

        @endif 
</div>

@endsection
