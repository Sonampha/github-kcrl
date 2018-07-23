@extends('layouts.master-secondary')

@section('header', 'About Us')
@section('title', 'About')

@section('content')
<style>
    .panel-body {
        margin-left: 6%;
    }
    .service-menu h4 {
        background: #0099ff none repeat scroll 0 0;
    }
</style>
    <!--ABOUT AREA-->
    <section class="about-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="about-left-content-area wow fadeIn">
                        <img src="{{ url('/img/about/planning-flight-routes.jpg') }}" alt="">                        
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="about-content-area wow fadeIn">
                        <div class="about-content">
                            <h2>Welcome to KC International Airlines</h2>
                            <p>KC International Airlines Co., Ltd. is set up as a Sino-Cambodia joint venture with a registered capital of ＄100 million. The establishment of the company is strongly supported by Cambodian National Government and SSCA. The headquarter of the company is located in Phnom Penh International Airport, and with Siem Reap and Port Sihanouk as the main operational bases. KC International Airlines covers the countries such as mainland China, Hong Kong, Taiwan, South Korea, Japan and other ASEAN countries.</p>
                            <p>KC International Airlines uses the Airbus A320 family as the main aircraft for transport, operating with the ICAO code ‘KCH’ and IATA code ‘3Q’. KC International Airlines commits to provide full-service airlines, and operate popular business routes. Our vision is to become the safest and most popular local airline in Cambodia and the leading airline company in Southeast Asia.</p>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--FAQS AREA-->
    <section class="faqs-area section-padding wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="faqs-left-img">
                    <img src="{{ url('/img/about/current-routes.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="faqs-list">
                        <h3>Why Choose KC Airlines?</span></h3>
                        <div class="panel-group" id="accordion">
                            <div class="panel active">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_one">
                                        <i class="fa fa-minus"></i> Very Competitive Price</a>
                                    </h4>
                                </div>
                                <div id="faqs_one" class="panel-collapse collapse">                                   
                                    <div class="panel-body">
                                        <p>For Basic Economy Class</p>
                                        <img src="{{ url('/img/about/booking/competitive-price.jpg') }}" width="50%" alt=""> 
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_two">
                                        <i class="fa fa-minus"></i> High Cost Performance</a>
                                    </h4>
                                </div>
                                <div id="faqs_two" class="panel-collapse collapse">                                   
                                    <div class="panel-body">
                                        <p>For Basic Economy Class</p>
                                        <img src="{{ url('/img/about/booking/high-performance.jpg') }}" width="50%" alt=""> 
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_three">                                        
                                        <i class="fa fa-minus"></i> Value-Added Service</a>
                                    </h4>
                                </div>
                                <div id="faqs_three" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>For Basic Economy Class</p>
                                        <img src="{{ url('/img/about/booking/value-added-service.jpg') }}" width="50%" alt=""> 
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_four">
                                        <i class="fa fa-minus"></i> Standard Catering Service</a>
                                    </h4>
                                </div>
                                <div id="faqs_four" class="panel-collapse collapse">                                    
                                    <div class="panel-body">
                                        <p>For Standard Economy Class</p>
                                        <img src="{{ url('/img/about/booking/standard-catering-service.jpg') }}" width="50%" alt=""> 
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_five">
                                        <i class="fa fa-minus"></i> Delicate Catering Service</a>
                                    </h4>
                                </div>
                                <div id="faqs_five" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>For Flex Economy Class</p>
                                        <img src="{{ url('/img/about/booking/delicate-catering-service.jpg') }}" width="50%" alt=""> 
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_nine">
                                        <i class="fa fa-minus"></i> Standard Seats Selection</a>
                                    </h4>
                                </div>
                                <div id="faqs_nine" class="panel-collapse collapse">                                   
                                    <div class="panel-body">
                                        <p>For Standard Economy Class</p>
                                        <img src="{{ url('/img/about/booking/standard-selection-seats.jpg') }}" width="50%" alt=""> 
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_six">
                                        <i class="fa fa-minus"></i> Complimentary Seats Selection</a>
                                    </h4>
                                </div>
                                <div id="faqs_six" class="panel-collapse collapse">                                    
                                    <div class="panel-body">
                                        <p>For Flex Economy Class</p>
                                        <img src="{{ url('/img/about/booking/flex-economy-seats.jpg') }}" width="50%" alt=""> 
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_seven">
                                        <i class="fa fa-minus"></i> Standard Check-in Baggage Allowance</a>
                                    </h4>
                                </div>
                                <div id="faqs_seven" class="panel-collapse collapse">                                    
                                    <div class="panel-body">
                                        <p>For Standard Economy Class</p>
                                        <img src="{{ url('/img/about/booking/standard-baggage-allowance.jpg') }}" width="50%" alt=""> 
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_eight">
                                        <i class="fa fa-minus"></i> Sufficient Check-in Baggage Allowance</a>
                                    </h4>
                                </div>
                                <div id="faqs_eight" class="panel-collapse collapse">                                    
                                    <div class="panel-body">
                                        <p>For Flex Economy Class</p>
                                        <img src="{{ url('/img/about/booking/flex-economy-baggage.jpg') }}" width="50%" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQS AREA END-->

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('body').addClass('single-page');
    </script>
@endsection