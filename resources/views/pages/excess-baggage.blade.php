@extends('layouts.master-tertiary')

@section('title', 'Excess Baggage')

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
    .responsive-table thead th {
        text-align: center !important;
    }

    .responsive-table thead th {
        background-color: #abd8db;
        border: 1px solid #abd8db;
        font-weight: bold;
        color: #3c4a62;
    }
    .responsive-table tbody td {
        border-bottom: 1px solid #abd8db;
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
     .table-one{
         width:60%;
     }
     .table-two{
         width:90%;
     }
    /*----------------------------------
        MOBILE LAYOUT: 320px
    -----------------------------------*/

    @media only screen and (max-width: 767px) {
        .area-title ul{
            margin-left: 0px;
        }
        .table-one{
            width:100%;
        }
        .table-two{
            width:100%;
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
                    <div class="relate-link"><a href="/">Home</a> >> <a href="/plan-travel">Plan Travel</a> >> Excess Baggage</div>
                    <div class="area-title wow fadeIn">
                        <h3 align="center">Excess Baggage Promotion</h3><br>
                        <p>The baggage is very important for travelers around the world as you need to pack all your compulsory stuffs 
                        once you are away from home. Therefore, sometimes you need to bring a baggage which is heavier than what airlines 
                        provide in your tickets. However, do not worry, now you can enjoy an excess baggage promotion with us. You can get 
                        20% discount on excess baggage when you book it in advance with us. There are 2 ways to book your excess baggage 
                        such as book through our website or our call center.</p>
                    </div>
                    <h4>Additional Baggage Fees</h4>
                    <p><b>A. Domestic Flight: </b></p>

                    <table class="responsive-table table-one">                    
                        <thead>
                        <tr>
                            <th style="width:30%" scope="col">Flight/Sector</th>
                            <th style="width:30%" scope="col">Price/Kg</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td data-title="Flight/Sector">Between: PNH, REP & KOS</td>
                            <td data-title="Price/Kg">3 USD / Kg </td>
                        </tr>   
                        </tbody>
                    </table>
                <p><b>B. International Flight: </b></p>
                <p>Zone 1: Cambodia/Vietnam/Laos/Myanmar/Thailand/Indonesia</p>
                <p>Zone 2: China mainland/Macau/Hong Kong/Taiwan/Japan/Korea/Singapore/Philippines</p>
                <table class="responsive-table table-two">                    
                        <thead>
                        <tr>
                            <th style="width:30%" scope="col">From/To</th>
                            <th style="width:30%" scope="col">Zone 1</th>
                            <th style="width:30%" scope="col">Zone 2</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td data-title="From/To">Zone 1</td>
                            <td data-title="Zone 1">5 USD / Kg</td>
                            <td data-title="Zone 2">10 USD / Kg </td>
                        </tr>   
                        <tr>
                            <td data-title="From/To">Zone 2</td>
                            <td data-title="Zone 1">10 USD / Kg</td>
                            <td data-title="Zone 2">20 USD / Kg </td>
                        </tr>  
                        </tbody>
                    </table>

                    <div class="text-center">
                        <img src="{{ url('/img/contents/excess-baggage.jpg') }}" />
                    </div>
                </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right">
                <div class="service-menu">
                    <h4>Plan Travel</h4>
                    <ul>
                        <li><a href="/plan-travel/excess-baggage" class="active">Excess Baggage</a></li>
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