@extends('layouts.master-primary')

@section('title', 'Home Page')

@section('content')
	<!--Home Tabs-->
<link href="{{ url('/images/favicon.png') }}" rel="shortcut icon" />
<link href="http://www.google-analytics.com/" rel="dns-prefetch">
<link href="http://fonts.googleapis.com/" rel="dns-prefetch">
<link rel="stylesheet" href="{{ url('/booking/css/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ url('/booking/css/normalize.css') }}">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic|Noto+Serif:400,400italic,700,700italic&amp;subset=vietnamese,latin' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{ url('/booking/css/slick.css') }}">
<link rel="stylesheet" href="{{ url('/booking/css/booking.css?v=7') }}">
<link rel="stylesheet" href="{{ url('/booking/css/select2.css') }}">
<link rel="stylesheet" href="{{ url('/booking/css/pagination.css') }}">
<link rel="stylesheet" href="{{ url('/booking/css/animate.css') }}">

<script src="{{ url('/booking/js/vendor/jquery-1.12.0.min.js') }}"></script>
<script src="{{ url('/booking/js/jquery-ui.min.js') }}"></script>
<script src="{{ url('/booking/js/vendor/modernizr-2.8.3.min.js') }}"></script>

<script src="{{ url('/booking/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/booking/js/slick.min.js') }}"></script>
<script src="{{ url('/booking/js/jquery.validate.min.js') }}"></script>
<script src="{{ url('/booking/js/select2.full.min.js') }}"></script>
<script src="{{ url('/booking/js/pagination.min.js') }}"></script>
<script src="{{ url('/booking/js/main.js') }}"></script>
<script src="{{ url('/booking/js/plugins.js') }}"></script>

<div class="func-wrapper">
    <div class="container">
        <div id="main-function" class="full-screen-mb">
            <div id="function-list">
                <p href="javascript:void(0);" data-open-function="#booking-function" id="booking-toogle" class="btn btn-function-name active">Booking</p>
                <p href="javascript:void(0);" data-open-function="#hotel-function" id="hotel-toogle" class="btn btn-function-name">Hotel</p>
            </div>
            <!-- /#function-list -->
            <div id="function-content">
                <button id="close-function-mobile" class="hidden-md hidden-lg"></button>

                <div class="single-function active-fn" id="booking-function">
                        <div class="booking-type">
                            <a href="#round-trip" id="find-roundtrip" class="btn btn-booking-type btn-radius btn-yellow find-flight-switcher">Return</a>
                            <a href="#one-way" id="find-oneway" class="btn btn-booking-type btn-radius btn-white find-flight-switcher">One Way</a>
                            <a href="#" class="btn btn-booking-type btn-radius btn-white">Multiple City</a>
                        </div>
                    <!-- /.booking-type -->
                        <form id="booking-form" action="http://183.64.63.6:6868/getSearchSimpe" method="get" target="_blank" autocomplete="off">                           
                            <div class="form-group group-find-from">                                
                                <label for="find-flight-from">From</label>
                                <select class="form-control" name="origin" tabindex="2" id="find-flight-from" required>
                                    <option value="">Choose Origin</option>
                                    @foreach($destination as $destine)
                                    <option value="{{ $destine->short_name }}">{{ $destine->destination.' ('.$destine->short_name.')' }}</option>
                                    @endforeach
                                </select>
                                <div id="find-flight-from-wap" class="dropdown-select-wap"></div>
                            </div>
                            <div class="form-group group-find-to">
                                <label for="find-flight-to">To</label>
                                <select disabled class="form-control" name="destination" tabindex="2" id="find-flight-to" required>
                                    <option value="">Choose Destination</option>
                                    @foreach($destination as $destine)
                                    <option value="{{ $destine->short_name }}">{{ $destine->destination.' ('.$destine->short_name.')' }}</option>
                                    @endforeach
                                </select>
                                <div id="find-flight-to-wap" class="dropdown-select-wap"></div>
                            </div>  
                            <input type="hidden" value="0" name="trip" />                          
                            <div class="form-group group-50 group-first group-find-depart">
                                <label for="find-flight-depart" class="label-css-top">Depart</label>
                                <input type="text" name="departuretime" class="form-control pickdate" id="find-flight-depart" required>
                                <label for="find-flight-depart" class="bookingform-calendar-icon-holder"><i class="glyphicon glyphicon-calendar icon-css-top"></i></label>
                            </div>
                            <div class="form-group group-50 group-find-return">
                                <label for="find-flight-return" class="label-css-top">Return</label>
                                <input type="text" name="returntime" class="form-control pickdate" id="find-flight-return" required>
                                <label for="find-flight-return" class="bookingform-calendar-icon-holder"><i class="glyphicon glyphicon-calendar icon-css-top"></i></label>
                            </div>
                            <div class="form-group group-30 group-first group-find-adults">
                                <label for="find-flight-adults" class="label-css-top">Adults</label>
                                <select class="form-control num-select" name="adt" id="find-flight-adults" style="width: 113px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                                <div id="select-number-wap01" class="select-number-wap"></div>
                            </div>
                            <div class="form-group group-30 group-find-child">
                                <label for="find-flight-child" class="label-css-top">Child</label>
                                <select class="form-control num-select" name="chd" id="find-flight-child" style="width: 113px;">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <p class="form-description">2-11 years</p>
                                <div id="select-number-wap02" class="select-number-wap"></div>
                                <!-- /.form-description -->
                            </div>
                            <div class="form-group group-30 group-last group-find-infant">
                                <label for="find-flight-infant" class="label-css-top">Infant</label>
                                <select class="form-control num-select" name="inft" id="find-flight-infant" style="width: 113px;">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <p class="form-description">0-23 months</p>
                                <div id="select-number-wap03" class="select-number-wap"></div>
                                <!-- /.form-description -->
                            </div>
                            <div class="form-group group-find-promocode">
                                <label for="find-flight-promocode" class="label-css-top">Promotion code</label>
                                <input type="text" name="promoCode" class="form-control promo-control" id="find-flight-promocode" value="">
                                <div class="alert alert-warning" role="alert" style="margin-top: 10px; display: none; color: #856404; background-color: #fff3cd; border-color: #ffeeba; padding-top: 10px; padding-bottom: 10px;" id="mastercard-alert"><small style="font-weight: 700">MasterCard holders name must be the same name on the e-ticket.</small></div>
                            </div>

                            <button type="submit" class="btn btn-orange btn-lg">Search</button>
                            <div id="select-number-wap"></div><!-- /#select-number-wap -->
                        </form>
                </div>
                <!-- /#booking-function.single-function -->
                    <div class="single-function purple-function" id="hotel-function">
                        Sorry, for not available at the moment! It's coming very soon.
                        <!-- #Hotel booking -->
                    </div>
                <!-- /#extra-service.single-function -->
                <!-- Purple Holiday function -->

                <!-- /#holiday-function Holiday function -->

            </div>
            <!-- /#function-content -->
        </div>
        <!-- /#main-function -->
    </div><!-- /.container -->
</div>


    <!--BLOG AREA-->
    <section class="blog-area gray-bg padding-top">
        <div class="container">	
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-image">
                        <img src="img/tourism/cambodia-tour.jpg" alt="Cambodia">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="/kc-route/cambodia" target="_blank">Cambodia</a></h3>
                            <p style="text-align:left;">Cambodia is dotted with an array of unforgettable views, people and experiences 
                            that will ensure you have a memorable time visiting the Kingdom of Wonder. 
                            Here are the most beautiful...</p>
                            <a href="/kc-route/cambodia" target="_blank" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-image">
                            <img src="img/tourism/thailand-tour.jpg" alt="Thailand">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="/kc-route/thailand" target="_blank">Thailand</a></h3>
                            <p style="text-align:left;">As one of the world’s most popular tourist destinations, 
                            it’s no secret Thailand is home to some truly spectacular places. 
                            White sand beaches and palm trees are the first images that come to mind for many...</p>
                            <a href="/kc-route/thailand" target="_blank" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src="img/tourism/taipei-tour.jpg" alt="Taipei">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="/kc-route/taipei" target="_blank">Taipei</a></h3>
                            <p style="text-align:left;">Planning what to explore in Taiwan? Here are the most beautiful sights 
                            and places in Taiwan, offering picturesque landscape and characteristic architecture, from the naturally formed 
                            volcano...</p>
                            <a href="/kc-route/taipei" target="_blank" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->   

    <!--BLOG AREA-->
    <section class="blog-area gray-bg padding-top">
        <div class="container">			
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src="img/tourism/hongkong-tour.jpg" alt="Hong Kong">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="/kc-route/hongkong" target="_blank">Hong Kong</a></h3>
                            <p style="text-align:left;">With its countless waterfronts, high mountain peaks and dizzying skyscrapers, 
                            there’s no shortage of amazing scenic views in Hong Kong. Some of the best scenes 
                            combine the area’s natural beauty...</p>
                            <a href="/kc-route/hongkong" target="_blank" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-image">
                            <img src="img/tourism/malaysia-tour.jpg" alt="Malaysia">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="/kc-route/malaysia" target="_blank">Malaysia</a></h3>
                            <p style="text-align:left;">The rich cultural panorama of Malaysia is defined by its diversity. 
                            The country is home to an ethnic mix of Malays, Chinese and Indians, as well as several indigenous 
                            groups who maintain age-old cultural...</p>
                            <a href="kc-route/malaysia" target="_blank" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src="img/tourism/singapore-tour.jpg" alt="Singapore">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="/kc-route/singapore"target="_blank" >Singapore</a></h3>
                            <p style="text-align:left;">Singapore might be small, but when you shuttle from one location to another attempting to beat 
                            the crowds, it’s easy to miss out on some of the more beautiful sights. There’s much history and 
                            beauty...</p>
                            <a href="/kc-route/singapore" target="_blank" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END--> 

    <!--BLOG AREA-->
    <section class="blog-area gray-bg padding-top">
        <div class="container">			
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src="img/tourism/vietnam-tour.jpg" alt="Vietnam">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="/kc-route/vietnam" target="_blank">Vietnam</a></h3>
                            <p style="text-align:left;">Vietnam is becoming one of the world’s top destinations owing to its endless natural beauty. 
                            White sand beaches, limestone mountains, terraced rice fields and more beckon travelers from 
                            around the globe...</p>
                            <a href="/kc-route/vietnam" target="_blank" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-image">
                            <img src="img/tourism/lao-tour.jpg" alt="Lao">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="/kc-route/lao" target="_blank">Lao</a></h3>
                            <p style="text-align:left;">Laos is a majority Buddhist country with many functional temples and sacred places. 
                            It also has some of least touched natural areas in southeast Asia. Laos is an up and coming destination on 
                            the South...</p>
                            <a href="/kc-route/lao" target="_blank" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src="img/tourism/myanmar-tour.jpg" alt="Myanmar">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="/kc-route/myanmar" target="_blank">Myanmar</a></h3>
                            <p style="text-align:left;">Oftentimes referred to as the Land of the Pagodas, 
                            the country of Myanmar has seemingly more of these religious structures than 
                            there are tourists actually visiting them. From the most neglected of...</p>
                            <a href="/kc-route/myanmar" target="_blank" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END--> 

    <!--BLOG AREA-->
    <section class="blog-area gray-bg padding-top">
        <div class="container">			
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src="img/tourism/philippines-tour.jpg" alt="Philippines">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="/kc-route/philippines" target="_blank">Philippines</a></h3>
                            <p style="text-align:left;">There’s no shortage of world-class dive sites among the Philippines‘ 7,107 islands. 
                            Divers will receive a warm welcome in this archipelago known for its marine biodiversity, 
                            dreamy beaches...</p>
                            <a href="/kc-route/philippines" target="_blank" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src="img/tourism/indonesia-tour.jpg" alt="Indonesia">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="/kc-route/indonesia" target="_blank">Indonesia</a></h3>
                            <p style="text-align:left;">As the world’s biggest archipelago, it’s safe to say that no other country has as many 
                            island destinations as Indonesia. Among its 17,000 islands, each with its own allure and charm, these are the most 
                            beautiful...</p>
                            <a href="/kc-route/indonesia" target="_blank" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END--> 
	
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('body').addClass('home-one');
    </script>

    <script>
        $(document).ready(function(e) {
/*             $('.depart_select').change(function(e) {
                var optionSelected = $(this).find("option:selected");
                var valueSelected  = optionSelected.val();
                var textSelected   = optionSelected.text();
                if ($('.depart_select').val()==textSelected){
                    $(".arrive_select option").show();
                    $(".arrive_select option:contains('" + textSelected + "')").hide();
                }
            });

            $('.arrive_select').change(function(e) {
                var optionSelected = $(this).find("option:selected");
                var valueSelected  = optionSelected.val();
                var textSelected   = optionSelected.text();
                if ($('.arrive_select').val()==textSelected){
                    $(".depart_select option").show();
                    $(".depart_select option:contains('" + textSelected + "')").hide();
                }
            }); */

             $('.depart_select').change(function(e) {
                index = $(this).prop('selectedIndex');
            $('.arrive_select option:eq(' + index + ')').css('display','none').siblings().css('display','block');
            });

            $('.arrive_select').change(function(e) {
                index = $(this).prop('selectedIndex');
            $('.depart_select option:eq(' + index + ')').css('display','none').siblings().css('display','block');
            }); 

            $('#find-roundtrip').click(function(){
                $('input[name=trip]').val('0');
            });

            $('#find-oneway').click(function(){
                $('input[name=trip]').val('1');
            });

            $('#find-flight-from').on('change', function() {
                var opt_value = this.value;
                if(opt_value == "PNH"){
                    $('#find-flight-to').prop('disabled', false);
                    $("#find-flight-to option").show();
                    $("#find-flight-to").val("");       
                    $("#find-flight-to :contains('" + opt_value + "')").hide();   
                }else if(opt_value == "HKG"){
                    $('#find-flight-to').prop('disabled', false);
                    $("#find-flight-to option").hide();
                    $("#find-flight-to").val("");                    
                    $("#find-flight-to :contains('PNH')").show();
                    $("#find-flight-to :contains('BKK')").show();
                }else if(opt_value == "TPE"){
                    $('#find-flight-to').prop('disabled', false);
                    $("#find-flight-to option").hide();    
                    $("#find-flight-to").val("");                
                    $("#find-flight-to :contains('PNH')").show();
                    $("#find-flight-to :contains('SIN')").show();
                    $("#find-flight-to :contains('RGN')").show();
                }else if(opt_value == "BKK"){
                    $('#find-flight-to').prop('disabled', false);
                    $("#find-flight-to option").hide();    
                    $("#find-flight-to").val("");                
                    $("#find-flight-to :contains('PNH')").show();
                    $("#find-flight-to :contains('HKG')").show();
                }else if(opt_value == "CGK" || opt_value == "MNL" || opt_value == "REP" || opt_value == "VTE" || opt_value == "CNX" || opt_value == "HAN"){
                    $('#find-flight-to').prop('disabled', false);
                    $("#find-flight-to option").hide();     
                    $("#find-flight-to").val("");               
                    $("#find-flight-to :contains('PNH')").show();
                }else if(opt_value == "RGN"){
                    $('#find-flight-to').prop('disabled', false);
                    $("#find-flight-to option").hide();   
                    $("#find-flight-to").val("");                 
                    $("#find-flight-to :contains('PNH')").show();
                    $("#find-flight-to :contains('TPE')").show();
                }else if(opt_value == "SIN"){
                    $('#find-flight-to').prop('disabled', false);
                    $("#find-flight-to option").hide();   
                    $("#find-flight-to").val("");                 
                    $("#find-flight-to :contains('PNH')").show();
                    $("#find-flight-to :contains('TPE')").show();
                }else if(opt_value == ""){
                    $("#find-flight-to").val("");
                    $('#find-flight-to').prop('disabled', true);                    
                }
            });

        });        
    </script>

<!--     <script>
        function showDestination(){
            var selectBox = document.getElementById('find-flight-from');
            var userInput =  selectBox.options[selectBox.selectedIndex].value;
            if(userInput == "PNH"){
                document.getElementById('find-flight-to').disabled = 'false';
            }else{
                document.getElementById('find-flight-to').disabled = 'true';
            }
        }
    </script> -->
    <style>
        .form-control[disabled], select {
            cursor:pointer;
        }
    </style>
@endsection