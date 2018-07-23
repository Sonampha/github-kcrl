@extends('layouts.master-tertiary')

@section('title', 'Checked Baggage')

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
    .area-title ul{
        margin-left: 20px;
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
        .area-title ul{
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
                    <div class="relate-link"><a href="/">Home</a> >> <a href="/travel-info">Travel Info</a> >> <a href="/travel-info/baggage">Baggage</a> >> Checked Baggage</div>
                    <div class="area-title wow fadeIn">
                        <h3 align="center">Checked Baggage</h3><br>

                                <p><b>It depends on your booking class in your tickets:</b><br><br>
                                - Flex Economy classes can have free 30 KG checked-in baggage allowance.<br>
                                - Standard Economy classes can have free 23 KG checked-in baggage allowance.<br>
                                - Basic Economy classes do not have free check-in baggage allowance.</p><br>
                    </div>
                    <div class="text-center">
                        <img src="{{ url('/img/contents/baggage_30kg_free.jpg') }}" />
                        <img src="{{ url('/img/contents/baggage_23kg_free.jpg') }}" />
                    </div>
                </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right">
                <div class="service-menu">
                    <h4>Baggage</h4>
                    <ul>
                        <li><a href="/travel-info/baggage/checked-baggage" class="active">Checked Baggage</a></li>
                        <li><a href="/travel-info/baggage/carry-on-baggage">Carry-on Baggage</a></li>
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