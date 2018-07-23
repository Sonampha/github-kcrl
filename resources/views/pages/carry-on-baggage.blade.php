@extends('layouts.master-tertiary')

@section('title', 'Cabin Baggage')

@section('content')
<link rel="stylesheet" href="{{ url('/css/flight-table.css') }}">
<style>
    @font-face {
    font-family: BakerSignetRegular;
    src: url("fonts/BakerSignetRegular.otf");
    }

    h3 {
    text-transform: capitalize !important;
    }
    .area-title a{
        color:#000099;
    }
    .area-title a:hover{
        color:#d01126;
    }
    .mainmenu-area {
        background-color:#000099;
    }
    .service-menu h4 {
        background: #0099ff none repeat scroll 0 0;
    }
    .faqs-list #accordion .panel-title i {
        background: #0099ff none repeat scroll 0 0;
    }
    .relate-link{
        margin-bottom:30px;
    }
    .relate-link a{
        color:#0099ff;
    }

    .responsive-table tbody td {
        text-align: left;
    }
    .responsive-table thead th {
        text-align: left;
    }
    ul{
        list-style: none inside;
    }
    li{
        margin-top: 10px;
    }
    .active{
        color:#d01126 ;
     }
    /*----------------------------------
        MOBILE LAYOUT: 320px
    -----------------------------------*/

    @media only screen and (max-width: 767px) {
        ul{
            margin-left: 0px;
        }
    }
</style>

    <div class="row">
        <img src="{{ url('/img/second-headers/cambodia-angkor-wat.jpg') }}" class="img-header"/>
    </div> 

    <!--ABOUT AREA-->
    <section class="about-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 pull-left">
                <div class="relate-link"><a href="/">Home</a> >> <a href="/travel-info">Travel Info</a> >> <a href="/travel-info/baggage">Baggage</a> >> Carry-on Baggage</div>
                    <div class="area-title wow fadeIn">
                    <h3 align="center">Carry-on Baggage</h3><br>
                        <p>KC Airlines allow you to bring carry-on baggage for free:<br>
                        - 10 KG carry-on baggage allowance for Flex Economy class<br> 
                        - 7 KG carry-on baggage allowance for Standard and Basic Economy class</p>
                    </div>
                    <div class="text-center">
                        <img src="{{ url('/img/contents/ten-kg-weight.jpg') }}" style="width:60%;margin-bottom:-20px;" />
                    </div>
                </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right">
                <div class="service-menu">
                    <h4>Baggage</h4>
                    <ul>
                        <li><a href="/travel-info/baggage/checked-baggage">Checked Baggage</a></li>
                        <li><a href="/travel-info/baggage/carry-on-baggage" class="active">Carry-on Baggage</a></li>
                        <li><a href="/travel-info/baggage/restricted-items">General Restricted Items</a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->
  
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('body').addClass('single-page');
    </script>
@endsection