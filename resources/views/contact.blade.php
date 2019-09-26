@extends('layout.app')
@section('title', 'Contact Us')
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
                    <li>Get in touch</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <section class="contact-us">
        <div class="container">
            <div class="small-heading"> {!! $contact['quote1'] !!}</div>
            <div class="heading">RAMAPLY Head office</div>
            <div class="mapframe">
                {!! $contact['map'] !!}
                <div class="addrs">
                    <h3>Ramaply Head Office</h3>
                    <ul>
                        <li>
                            <span><img src="{{asset('assets/images/white-loc-icon.png')}}" alt=""></span> <p> Near I.T.I. P.O. Birla Vikas, Satna-485005 (M.P.) </p>
                        </li>
                        <li>
                            <span><img src="{{asset('assets/images/white-phn-icon.png')}}" alt=""></span> <p> <strong> Tel : </strong> 07672-257025, 405555
                                 </p>
                        </li>
                        <li>
                            <span><img src="{{asset('assets/images/white-mail-icon.png')}}" alt=""></span> <p> <strong> Email :</strong> admin@ramaply.com</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="other-office flex">
                <div class="office-de">
                    <h4>
                        <img src="{{asset('assets/images/cor-off-icon.png')}}" alt=""> Corporate Office
                    </h4>
                    <ul>
                        <li>
                            <span> <img src="{{asset('assets/images/location-color-icon.png')}}" alt=""></span>
                            <p>Unit No. 214-217, 2nd Floor, Building No.38, Ansal Tower, Nehru Place, New Delhi-110019</p>
                        </li>
                        <li>
                            <span> <img src="{{asset('assets/images/color-phn-icon.png')}}" alt=""></span>
                            <p> <strong> Tel:</strong> 011-49076825</p>
                        </li>
                        <li>
                            <span> <img src="{{asset('assets/images/color-mail-icon.png')}}" alt=""></span>
                            <p><strong> Email </strong> : dlmo@ramaply.com</p>
                        </li>
                    </ul>
                </div>
                <div class="office-de">
                    <h4>
                        <img src="{{asset('assets/images/factory-icon.png')}}" alt=""> Works
                    </h4>
                    <ul>
                        <li>
                            <span> <img src="{{asset('assets/images/location-color-icon.png')}}" alt=""></span>
                            <p>Rama Boards LLP-11th Milestone, Panna Road, Village Bamhour, P.O.Sitpura, Distt. Satna-485441(M.P.)</p>
                        </li>
                        <li>
                            <span> <img src="{{asset('assets/images/color-phn-icon.png')}}" alt=""></span>
                            <p> <strong> Tel:</strong> 9165011832</p>
                        </li>
                        <li>
                            <span> <img src="{{asset('assets/images/color-mail-icon.png')}}" alt=""></span>
                            <p><strong> Email </strong> : prod@ramawood.net    </p>
                        </li>
                    </ul>
                </div>
                <div class="office-de">
                    <h4>
                        <img src="{{asset('assets/images/pannel-icon.png')}}" alt=""> Rama Panels Pvt. Ltd.
                    </h4>
                    <ul>
                        <li>
                            <span> <img src="{{asset('assets/images/location-color-icon.png')}}" alt=""></span>
                            <p>Plot No.8,  Sector-9, IIE Pantnagar, Distt. U.S.Nagar (Uttarakhand)-263153 </p>
                        </li>
                        <li>
                            <span> <img src="{{asset('assets/images/color-phn-icon.png')}}" alt=""></span>
                            <p> <strong> Tel:</strong>05944-250281, 85</p>
                        </li>
                        <li>
                            <span> <img src="{{asset('assets/images/color-mail-icon.png')}}" alt=""></span>
                            <p><strong> Email </strong> worksrdpr@ramaply.com</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="line"></div>
            <div class="other-office flex">
                <div class="office-de">
                    <h4>
                        <img src="{{asset('assets/images/branch-office-icon.png')}}" alt=""> For More Enquiry
                    </h4>
                    <ul>
                        <li>
                            <span> <img src="{{asset('assets/images/color-phn-icon.png')}}" alt=""></span>
                            <p> <strong> Mob </strong>: 7440966666  </p>
                        </li>
                        <li>
                            <span> <img src="{{asset('assets/images/color-mail-icon.png')}}" alt=""></span>
                            <p><strong> Email </strong> :E-mail:contact@ramaply.com</p>
                        </li>
                        <li>
                            <span> <img src="{{asset('assets/images/color-mail-icon.png')}}" alt=""></span>
                            <p><strong> Website </strong> www.ramaply.com</p>
                        </li>
                    </ul>
                </div>
                <div class="office-de-full">
                    <h4> Network Pan India </h4>
                    <ul>
                        <li>
                            Andhra Pradesh
                        </li>
                        <li>
                        Assam
                        </li>
                        <li>
                        Bihar
                        </li>
                        <li>
                        Chattisgarh
                        </li>
                        <li>
                        Goa
                        </li>
                        <li>
                        Gujrat
                        </li>
                        <li>
                        Haryana
                        </li>
                        <li>
                        Jammu & Kashmir
                        </li>
                        <li>
                        Jharkhand
                        </li>
                        <li>
                        Karnataka
                        </li>
                        <li>
                        Madhya Pradesh
                        </li>
                        <li>
                        Maharashtra
                        </li>
                        <li>
                        New Delhi
                        </li>
                        <li>
                        Odisha
                        </li>
                        <li>
                        Puducherry
                        </li>
                        <li>
                        Punjab
                        </li>
                        <li>
                        Rajasthan
                        </li>
                        <li>
                        Tamil Nadu
                        </li>
                        <li>
                        Tripura
                        </li>
                        <li>
                        Uttar Pradesh
                        </li>
                        <li>
                        Uttarakhand
                        </li>
                        <li>
                        West Bengal
                        </li>
                     
                    </ul>
                </div>
                
            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="container">
            <div class="small-heading">
                {!! $contact['quote2'] !!}
            </div>
            <div class="heading">
                FEEDBACK
            </div>
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
                        <input type="text" placeholder="Product " required>
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
