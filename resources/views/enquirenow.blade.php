@extends('layout.app')
@section('title', 'Enquire Now')
@section('banner')
    <div class="inner-banner">
        <img src="{{asset($contact['banner'])}}" alt="">
        <div class="flex container">
            <div class="banner-title">
                Enquire Now
            </div>
            <div class="bradcam">
                <ul>
                    <li><a href="#"> Home » </a></li>
                    <li>Enquire Now</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <section class="feedback">
        <div class="container">
            <!-- <div class="small-heading">
                {!! $contact['quote2'] !!}
            </div> -->
            
            <div class="heading-txt">
                {{$contact['feedbackcontent']}}
            </div>
            <form action="">
            <ul>
                    <li>
                        <input type="text" placeholder="Name" required>
                    </li>
                    <li>
                        <input type="text" placeholder="Email " required>
                    </li>
                    <li>
                        <input type="text" placeholder="Mobile " required>
                    </li>
                    <li>
                        <input type="text" placeholder="City " required>
                    </li>
                    <li>
                        <input type="text" placeholder="State " required>
                    </li>
                    <li>
                        <select name="product" id="products">
                            <option value="">Select Product</option>
                            @foreach($products as $singleprod)
                            <option value="{{$singleprod->title}}" @if($product==$singleprod->title) selected @endif>{{$singleprod->title}}</option>
                            @endforeach
                        </select>
                    </li>
                    <li class="full">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </li>
                    <li class="full submit">
                        <button>SUbmit</button>
                    </li>
                </ul>
            </form>
        </div>
    </section>

@endsection
