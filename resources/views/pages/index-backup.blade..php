@extends('layouts.master-primary')

@section('title', 'Home Page')

@section('content')
	<!--Home Tabs-->
<link href="images/favicon.png" rel="shortcut icon" />
<link href="http://www.google-analytics.com/" rel="dns-prefetch">
<link href="http://fonts.googleapis.com/" rel="dns-prefetch">
<link rel="stylesheet" href="booking/css/jquery-ui.min.css">
<link rel="stylesheet" href="booking/css/normalize.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic|Noto+Serif:400,400italic,700,700italic&amp;subset=vietnamese,latin' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="booking/css/slick.css">
<link rel="stylesheet" href="booking/css/booking.css?v=7">
<link rel="stylesheet" href="booking/css/select2.css">
<link rel="stylesheet" href="booking/css/pagination.css">
<link rel="stylesheet" href="booking/css/animate.css">

<script src="booking/js/vendor/jquery-1.12.0.min.js"></script>
<script src="booking/js/jquery-ui.min.js"></script>
<script src="booking/js/vendor/modernizr-2.8.3.min.js"></script>

<script src="booking/js/bootstrap.min.js"></script>
<script src="booking/js/slick.min.js"></script>
<script src="booking/js/jquery.validate.min.js"></script>
<script src="booking/js/select2.full.min.js"></script>
<script src="booking/js/pagination.min.js"></script>
<script src="booking/js/main.js"></script>
<script src="booking/js/plugins.js"></script>


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
                        <form id="booking-form" action="/search-flight" method="get">                           
                            <div class="form-group group-find-from">
                                <label for="find-flight-from">From</label>
                                <select class="form-control depart_select" name="depart_point" id="find-flight-from" style="width: 100%;" required>
                                <option value="">Select</option>
                                @foreach($destinations as $destine)
                                    <option value="{{ $destine->destination }}">{{ $destine->destination }}</option>
                                @endforeach
                                </select>
                                <div id="find-flight-from-wap" class="dropdown-select-wap"></div>
                            </div>
                            <div class="form-group group-find-to">
                                <label for="find-flight-to">To</label>
                                <select class="form-control arrive_select" name="arrive_point" id="find-flight-to" style="width: 100%;" required>
                                <option value="">Select</option>
                                @foreach($destinations as $destine)
                                <option value="{{ $destine->destination }}">{{ $destine->destination }}</option>
                                @endforeach
                                </select>
                                <div id="find-flight-to-wap" class="dropdown-select-wap"></div>
                            </div>                            
                            <div class="form-group group-50 group-first group-find-depart">
                                <label for="find-flight-depart">Depart</label>
                                <input type="text" name="departureDate" class="form-control pickdate" id="find-flight-depart" readonly onfocus="this.blur()" required>
                                <label for="find-flight-depart" class="bookingform-calendar-icon-holder"><i class="glyphicon glyphicon-calendar"></i></label>
                            </div>
                            <div class="form-group group-50 group-find-return">
                                <label for="find-flight-return">Return</label>
                                <input type="text" name="returnDate" class="form-control pickdate" id="find-flight-return" readonly onfocus="this.blur()" required>
                                <label for="find-flight-return" class="bookingform-calendar-icon-holder"><i class="glyphicon glyphicon-calendar"></i></label>
                            </div>
                            <div class="form-group group-30 group-first group-find-adults">
                                <label for="find-flight-adults">Adults</label>
                                <select class="form-control num-select" name="numAdults" id="find-flight-adults" style="width: 113px;">
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
                                <label for="find-flight-child">Child</label>
                                <select class="form-control num-select" name="numChildren" id="find-flight-child" style="width: 113px;">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <p class="form-description">2-11 years</p>
                                <div id="select-number-wap02" class="select-number-wap"></div>
                                <!-- /.form-description -->
                            </div>
                            <div class="form-group group-30 group-last group-find-infant">
                                <label for="find-flight-infant">Infant</label>
                                <select class="form-control num-select" name="numInfants" id="find-flight-infant" style="width: 113px;">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <p class="form-description">0-23 months</p>
                                <div id="select-number-wap03" class="select-number-wap"></div>
                                <!-- /.form-description -->
                            </div>
                            <div class="form-group group-find-promocode">
                                <label for="find-flight-promocode">Promotion code</label>
                                <input type="text" name="promoCode" class="form-control promo-control" id="find-flight-promocode" value="">
                                <div class="alert alert-warning" role="alert" style="margin-top: 10px; display: none; color: #856404; background-color: #fff3cd; border-color: #ffeeba; padding-top: 10px; padding-bottom: 10px;" id="mastercard-alert"><small style="font-weight: 700">MasterCard holders name must be the same name on the e-ticket.</small></div>
                            </div>

                            <button type="submit" class="btn btn-orange btn-lg">Search</button>
                            <div id="select-number-wap"></div><!-- /#select-number-wap -->
                        </form>
                        <script type="text/javascript">
                                $.validator.addMethod('promotionCode', function(value, element) {
                                    if($(window).width() <= 768 || $.trim(value) == '') {
                                        return true;
                                    }

                                    if($.trim(value).substring(0, 3).toLowerCase() == 'mob') {
                                        return false;
                                    }

                                    return true;
                                }, "The code is for mobile");
                            $('#booking-form').validate({
                                    errorClass: 'input-error',
                                    errorElement: "span",
                                    rules: {
                                        promoCode: {
                                            promotionCode: true
                                        }
                                    },
                                    submitHandler: function(form) {
                                    form.submit();
                                }
                            });
                            </script>
                </div>
                <!-- /#booking-function.single-function -->
                    <div class="single-function purple-function" id="hotel-function">
                        <form id="hotel-search-form" method="POST" action="#" autocomplete="off">
                            <input type="hidden" name="language" value="en_US" />
                            <!--List City-->
                            <div class="row">
                                <div class="col-xs-24">
                                    <div class="form-group clearfix auto-complete hotel-autocomplete">
                                        <label for="hotel-search-text">Location</label>
                                        <input type="text" class="form-control" id="hotel-search-text" required />
                                        <input type="hidden" name="txtHotelID" class="form-control" id="hotel-search-data-text" />
                                        <input type="hidden" name="data-id" id="hotel-search-data-id" />
                                        <input type="hidden" name="data-cate" id="hotel-search-data-cate" />
                                        <div id="hotel-search-text-to-wap" class="dropdown-select-wap"></div>
                                    </div>
                                </div>
                            </div>
                            <!--Datetime check in-->
                            <div class="input-daterange">
                                <div class="row">
                                    <!-- Check in -->
                                    <div class="col-md-24">
                                        <div class="form-group clearfix icon-datetime">
                                            <label for="hotel-search-datefrom">Check-in</label>
                                            <input class="form-control" id="hotel-search-datefrom" name="datefrom" type="text" required />
                                            <label for="hotel-search-datefrom" class="bookingform-calendar-icon-holder"><i class="glyphicon glyphicon-calendar"></i></label>
                                        </div><!--form-group-->
                                    </div><!--col-md-24-->
                                    <!-- Check out -->
                                    <div class="col-md-24">
                                        <div class="form-group clearfix icon-datetime">
                                            <label for="hotel-search-dateto">Check-out</label>
                                            <input class="form-control" id="hotel-search-dateto" name="dateto" type="text" required />
                                            <label for="hotel-search-dateto" class="bookingform-calendar-icon-holder"><i class="glyphicon glyphicon-calendar"></i></label>
                                        </div><!--form-group-->
                                    </div><!--col-md-24-->
                                    <!--Room-->
                                    <div class="col-md-24">
                                        <div class="form-group clearfix roomnumber">
                                            <label>Rooms</label>
                                            <select class="form-control" id="hotel-search-cboRoom" name="cboRoom" onchange="hotelSearchSelectRoom()">
                                                <option selected="selected" value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <div id="hotel-search-cboRoom-append-to" class="select-number-wap"></div>
                                        </div><!--form-group-->
                                    </div><!--col-md-24-->
                                </div><!--row-->
                                <!--########  SECTION OF ROOM ########-->
                                <!-- ROOM 1 -->
                                <div id="hotel-search-room-row-1" class="clearfix bg-color">
                                    <div class="form-group row">
                                        <div class="col-md-24 txt-col">
                                            <p class="status_room">Room 1</p>
                                        </div><!-- col-md-24 -->

                                        <div class="col-md-12 txt-col">
                                            <label>Adults</label>
                                            <select class="form-control" id="hotel-search-number-of-adults-1" name="number_of_adults[]">
                                                <option selected="selected" value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <div id="hotel-search-number-of-adults-1-append-to" class="select-number-wap"></div>
                                        </div><!-- col-md-12 -->

                                        <div class="col-md-12 txt-col">

                                            <label>Child(ren)</label>
                                            <select class="form-control" id="hotel-search-number-of-children-1" name="number_of_children[]" onchange="hotelSearchSetChildAge(1)">
                                                <option selected="selected" value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <div id="hotel-search-number-of-children-1-append-to" class="select-number-wap"></div>

                                        </div><!--col-md-12-->
                                    </div><!--form-group-->

                                    <div class="row">

                                        <div class="col-md-24 hide_select">
                                            <label id="hotel-search-label-child-age-1">Child Age</label>
                                        </div><!--col-md-24-->

                                        <div class="clearfix form-group">
                                            <div class="col-md-8 txt-age hide_select">
                                                <select class="form-control" id="hotel-search-child-age-1-1" name="child_age_1[]">
                                                    <option selected="selected" value="0">Infant &lt; 2</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                                <div id="hotel-search-child-age-1-1-append-to" class="select-number-wap"></div>
                                            </div><!--col-md-8-->

                                            <div class="col-md-8 txt-age hide_select">
                                                <select class="form-control" id="hotel-search-child-age-1-2" name="child_age_1[]">
                                                        <option selected="selected" value="0">Infant &lt; 2</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                <div id="hotel-search-child-age-1-2-append-to" class="select-number-wap"></div>
                                            </div><!--col-md-8-->

                                            <div class="col-md-8 txt-age hide_select">
                                                <select class="form-control" id="hotel-search-child-age-1-3" name="child_age_1[]">
                                                    <option selected="selected" value="0">Infant &lt; 2</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                                <div id="hotel-search-child-age-1-3-append-to" class="select-number-wap"></div>
                                            </div><!--col-md-8-->
                                        </div><!--form-group-->
                                    </div><!--row-->

                                </div><!--room_row_1-->
                                <!-- ROOM 2 -->
                                <div id="hotel-search-room-row-2" class="clearfix bg-color">
                                    <div class="form-group row">
                                        <div class="col-md-24 txt-col">
                                            <p class="status_room">Room 2</p>
                                        </div><!--col-md-8-->
                                        <!-- Room2.Adults -->
                                        <div class="col-md-12 txt-col">
                                            <label>Adults</label>
                                            <select class="form-control" id="hotel-search-number-of-adults-2" name="number_of_adults[]">
                                                <option selected="selected" value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <div id="hotel-search-number-of-adults-2-append-to" class="select-number-wap"></div>
                                        </div><!-- #Room2.Adults -->
                                        <!-- Room2.Children -->
                                        <div class="col-md-12 txt-col">
                                            <label>Child(ren)</label>
                                            <select class="form-control" id="hotel-search-number-of-children-2" name="number_of_children[]" onchange="hotelSearchSetChildAge(2)">
                                                <option selected="selected" value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <div id="hotel-search-number-of-children-2-append-to" class="select-number-wap"></div>
                                        </div><!-- #Room2.Children -->
                                    </div><!--row-->
                                    <!-- Room2.Child Age List -->
                                    <div class="row">
                                        <div class="clearfix">
                                            <div class="col-md-24 hide_select">
                                                <label id="hotel-search-label-child-age-2">Child Age</label>
                                            </div>
                                            <div class="clearfix form-group">
                                                <div class="col-md-8 txt-age hide_select">
                                                    <select class="form-control" id="hotel-search-child-age-2-1" name="child_age_2[]">
                                                        <option selected="selected" value="0">Infant &lt; 2</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                    <div id="hotel-search-child-age-2-1-append-to" class="select-number-wap"></div>
                                                </div>
                                                <div class="col-md-8 txt-age hide_select">
                                                    <select class="form-control" id="hotel-search-child-age-2-2" name="child_age_2[]">
                                                        <option selected="selected" value="0">Infant &lt; 2</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                    <div id="hotel-search-child-age-2-2-append-to" class="select-number-wap"></div>
                                                </div>
                                                <div class="col-md-8 txt-age hide_select">
                                                    <select class="form-control" id="hotel-search-child-age-2-3" name="child_age_2[]">
                                                        <option selected="selected" value="0">Infant &lt; 2</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                    <div id="hotel-search-child-age-2-3-append-to" class="select-number-wap"></div>
                                                </div><!--col-md-24-->
                                            </div>
                                        </div>
                                    </div><!-- Room2.Child Age List -->
                                </div><!--room_row_2-->
                                <!-- ROOM 3 -->
                                <div id="hotel-search-room-row-3" class="clearfix bg-color">
                                    <!--style="display:none"-->
                                    <div class="form-group row">
                                        <div class="col-md-24 txt-col">
                                            <p class="status_room">Room 3</p>
                                        </div><!--col-md-8-->

                                        <div class="col-md-12 txt-col">
                                            <label>Adults</label>
                                            <select class="form-control" id="hotel-search-number-of-adults-3" name="number_of_adults[]">
                                                <option selected="selected" value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <div id="hotel-search-number-of-adults-3-append-to" class="select-number-wap"></div>
                                        </div>

                                        <div class="col-md-12 txt-col">
                                            <label>Child(ren)</label>
                                            <select class="form-control" id="hotel-search-number-of-children-3" name="number_of_children[]" onchange="hotelSearchSetChildAge(3)">
                                                <option selected="selected" value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <div id="hotel-search-number-of-children-3-append-to" class="select-number-wap"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-24 hide_select">
                                            <label id="hotel-search-label-child-age-3">Child Age</label>
                                        </div>
                                        <div class="clearfix form-group">
                                            <div class="col-md-8 txt-age hide_select">
                                                <select class="form-control" id="hotel-search-child-age-3-1" name="child_age_3[]">
                                                    <option selected="selected" value="0">Infant &lt; 2</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                                <div id="hotel-search-child-age-3-1-append-to" class="select-number-wap"></div>
                                            </div>
                                            <div class="col-md-8 txt-age hide_select">
                                                <select class="form-control" id="hotel-search-child-age-3-2" name="child_age_3[]">
                                                    <option selected="selected" value="0">Infant &lt; 2</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                                <div id="hotel-search-child-age-3-2-append-to" class="select-number-wap"></div>
                                            </div>
                                            <div class="col-md-8 txt-age hide_select">
                                                <select class="form-control" id="hotel-search-child-age-3-3" name="child_age_3[]">
                                                    <option selected="selected" value="0">Infant &lt; 2</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                                <div id="hotel-search-child-age-3-3-append-to" class="select-number-wap"></div>
                                            </div>
                                        </div>
                                    </div><!--row-->
                                </div><!--room_row_3-->
                                <!--########  END SECTION OF ROOM ########-->
                            </div>
                            <div class="row">
                                <div class="col-md-24">
                                    <div class="form-group">
                                        <button class="btn btn-orange btn-lg pull-right">SEARCH</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                            <img src="img/blog/blog_1.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-ship"></i></a></div>
                            <h3><a href="single-blog.html">Ocean Freight</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout..</p>
                            <a href="single-blog.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-image">
                            <img src="img/blog/blog_2.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="single-blog.html">Air Freight</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout..</p>
                            <a href="single-blog.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src="img/blog/blog_3.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-truck"></i></a></div>
                            <h3><a href="single-blog.html">Street Freight</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout..</p>
                            <a href="single-blog.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <!--ABOUT AREA-->
    <section class="about-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="quote-form-area wow fadeIn">
                        <h3>Get A Quote</h3>
                        <form class="quote-form" action="#">
                            <p class="width-full">
                                <input type="text" name="name" id="name" placeholder="Your Name">
                            </p>
                            <p class="width-half">
                                <input type="email" name="email" id="email" placeholder="Email">
                                <input class="pull-right" type="phone" name="phone" id="phone" placeholder="Phone">
                            </p>
                            <p class="width-half">
                                <input type="text" name="type" id="type" placeholder="Type">
                                <input class="pull-right" type="text" name="quantity" id="quantity" placeholder="Quantity">
                            </p>
                            <p class="width-full">
                                <input type="text" name="destination" id="destination" placeholder="Destination">
                            </p>
                            <p>
                                <textarea name="quote-message" id="quote-message" cols="30" rows="4" placeholder="Your Message..."></textarea>
                            </p>
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                    <div class="about-content-area wow fadeIn">
                        <div class="about-content">
                            <h2>We have 25 years experience in this passion</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,</p>
                            <a href="#">read more <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="about-count">
                            <div class="single-about-count">
                                <h4><i class="fa fa-suitcase"></i> 120</h4>
                                <p>Project Done</p>
                            </div>
                            <div class="single-about-count">
                                <h4><i class="fa fa-thumbs-o-up"></i> 100</h4>
                                <p>Project Done</p>
                            </div>
                            <div class="single-about-count">
                                <h4><i class="fa fa-users"></i> 30</h4>
                                <p>Project Done</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--SERVICE AREA-->
    <section class="service-area">
        <div class="service-top-area padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                        <div class="area-title text-center wow fadeIn">
                            <h2>Our Service</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="service-content wow fadeIn">
                            <h2>we offer quick & powerful logistics solution</h2>
                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you.</p>
                            <a href="service.html" class="read-more">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <div class="service-catalouge-content-area wow fadeIn">
                            <div class="service-catalouge-bg"></div>
                            <div class="row">
                                <div class="col-md-7 col-lg-7 col-md-offset-5 col-lg-offset-5 col-sm-12 col-xs-12">
                                    <div class="catalouge-content">
                                        <h3>Why Choose Us ?</h3>
                                        <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you.</p>
                                        <ul>
                                            <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet, consectetur.</li>
                                            <li><i class="fa fa-check"></i> Sed quia consequuntur magni dolores eos.</li>
                                            <li><i class="fa fa-check"></i> Nemo enim ipsam voluptatem .</li>
                                            <li><i class="fa fa-check"></i> We denounce with righteous indignation.</li>
                                        </ul>
                                        <a href="service.html" class="read-more">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-bottom-area section-padding">
            <div class="service-bottom-area-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-md-offset-6 col-lg-offset-6 col-sm-12 col-xs-12">
                        <div class="service-list wow fadeIn">
                            <div class="single-service">
                                <div class="service-icon-hexagon">
                                    <div class="hex">
                                        <div class="service-icon">
                                            <i class="fa fa-dropbox"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-details">
                                    <h4>Ware House</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    <a href="#">read more</a>
                                </div>
                            </div>
                            <div class="single-service">
                                <div class="service-icon-hexagon">
                                    <div class="hex">
                                        <div class="service-icon"><i class="fa fa-truck"></i></div>
                                    </div>
                                </div>
                                <div class="service-details">
                                    <h4>Road Freight</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    <a href="#">read more</a>
                                </div>
                            </div>
                            <div class="single-service">
                                <div class="service-icon-hexagon">
                                    <div class="hex">
                                        <div class="service-icon"><i class="fa fa-ship"></i></div>
                                    </div>
                                </div>
                                <div class="service-details">
                                    <h4>Sea Freight</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    <a href="#">read more</a>
                                </div>
                            </div>
                            <div class="single-service">
                                <div class="service-icon-hexagon">
                                    <div class="hex">
                                        <div class="service-icon"><i class="fa fa-plane"></i></div>
                                    </div>
                                </div>
                                <div class="service-details">
                                    <h4>Air Freight</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    <a href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SERVICE AREA END-->

    <!--PROMO AREA-->
    <section class="promo-area">
        <div class="promo-top-area section-padding wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-anchor"></i></div>
                            <div class="promo-details">
                                <h3>Our Location</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-newspaper-o"></i></div>
                            <div class="promo-details">
                                <h3>Latest News</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-umbrella"></i></div>
                            <div class="promo-details">
                                <h3>24/7 Support</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-bicycle"></i></div>
                            <div class="promo-details">
                                <h3>Fast Delevery</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="promo-bottom-area section-padding">
            <div class="promo-botton-area-bg" data-stellar-background-ratio="0.6"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12 text-center">
                        <div class="promo-bottom-content wow fadeIn">
                            <h2>we provide international freight &amp; logistics service worldwidw</h2>
                            <a href="#" class="read-more">Get a quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PROMO AREA END-->

    <!--TESTMONIAL AREA -->
    <section class="testmonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>what client’s say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                    <div class="client-photo-list wow fadeIn">
                        <div class="client_photo">
                            <div class="item">
                                <img src="img/testmonial/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/testmonial/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/testmonial/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/testmonial/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/testmonial/2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="client_nav">
                        <span class="fa fa-angle-left testi_prev"></span>
                        <span class="fa fa-angle-right testi_next"></span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
                    <div class="client-details-content wow fadeIn">
                        <div class="client_details">
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TESTMONIAL AREA END -->
	
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('body').addClass('home-one');
    </script>

    <script>
        $(document).ready(function(e) {
            $('.depart_select').change(function(e) {
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
            });
        });

        
    </script>
@endsection