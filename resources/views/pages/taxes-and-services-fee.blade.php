@extends('layouts.master-tertiary')

@section('title', 'Taxes and Services Fee')

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
    h4 {
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
        margin-bottom:20px;
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
                    <div class="relate-link"><a href="/">Home</a> >> <a href="/travel-info">Travel Info</a> >> <a href="/travel-info/charges-and-changes">Charges and Changes</a> >> Taxes and Services Fee</div>
                    <div class="area-title wow fadeIn">
                        <h3 align="center">Government Taxes</h3><br>
                        <p>All government authorities impose taxes on air transportation. These taxes are charged at the discretion of 
                        each country’s government authority, and may be adjusted from time to time to account for inflation and/or 
                        currency fluctuation. Some types of government taxes may not be included in your all-in fare, and must be paid 
                        separately from your booking.</p><br>
                        <h4>Taxes and Services Fee</h4>                        
                        <p>When you book with us, standard government taxes as well as airport and carrier surcharges are already 
                        included in your fare. However, some taxes and service fee are charged in addition to the fare you see on 
                        our website.</p>
                        <ul>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; YQ: Airline Fuel and Insurance Surcharge</li>
                        </ul>

                        <p><b>Standard Government Taxes - Cambodia</b></p>
                        <ul>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            KH: Value Added Tax Domestic</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            KX: Passenger Service Charge</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            L5: Civil Aviation Fee</li>
                        </ul>

                        <p><b>Standard Government Taxes - Thailand</b></p>
                        <ul>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            AP: Security Charge (Domestic/International)</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            E7: Advance Passenger Processing User Charge</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            G8: International Departure Fee</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            TA: Passenger Service Charge</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            TS: Passenger Service Charge</li>
                        </ul>

                        <p><b>Standard Government Taxes - Viet Nam</b></p>
                        <ul>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            AP: Security Charge (Domestic/International)</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            AX: Passenger Service Charge Domestic</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            C4: Passenger and Baggage Security Screening Service Charge</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            JC: Passenger Service Charge International</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            UE: Value Added Tax Domestic</li>
                        </ul>

                        <p><b>Standard Government Taxes - Malaysia</b></p>
                        <ul>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            AC: Value Added Tax</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            D8: Goods and Services Tax</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            H8: Regulatory Charge Domestic and International</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            MY: Passenger Service and Security Charge</li>
                        </ul>

                        <p><b>Standard Government Taxes - Hong Kong and SAR China</b></p>
                        <ul>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            AP: Security Charge (Domestic/International)</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            G3: Airport Construction Fee</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            HK: Air Passenger Departure Tax</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            I5: Airport Passenger Security Charge</li>
                        </ul>

                        <p><b>Standard Government Taxes - Laos</b></p>
                        <ul>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            LA: Airport Passenger Service Charge</li>
                        </ul>

                        <p><b>Standard Government Taxes - Chinese Taipei</b></p>
                        <ul>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            AP: Security and Insurance Surcharge Departure</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            TW: Airport Service Charge International</li>
                        </ul>

                        <p><b>Standard Government Taxes - Philippines</b></p>
                        <ul>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            LI: 3K Passenger Service Charge</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            PD: Aviation Security Fee Domestic</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            PH: Travel Tax</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            PV: Value Added Tax Vat Domestic</li>
                        </ul>

                        <p><b>Standard Government Taxes - Myanmar</b></p>
                        <ul>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            C7: Advance Passenger Information User Charge Intl Departures</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            J2: Commercial Tax Domestic Air Transport</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            MM: Passenger Service Charge</li>
                        </ul>

                        <p><b>Standard Government Taxes - Indonesia</b></p>
                        <ul>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            D5: Passenger Service Charge</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            ID: Value Added Tax Passengers Domestic</li>                            
                        </ul>

                        <p><b>Standard Government Taxes - Macau and SAR China</b></p>
                        <ul>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            MO: Airport Security Tax</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp; 
                            WN: Passenger Service Charge</li>                            
                        </ul>

                        <h4>Credit Card Service Fee</h4>                        
                        <p>If you are using your credit cards or debit cards to pay for your booking, a non-refundable credit card service fee 
                        ranging from 1.0-2.0% with a cap may be added to all bookings made with those cards. The exact fee will be displayed before 
                        you confirm your payment.</p>

                    </div>

                </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right">
                <div class="service-menu">
                    <h4>Charges and Changes</h4>
                    <ul>
                        <li><a href="/travel-info/charges-and-changes/cancellation-and-refund">Cancellation and Refund</a></li>
                        <li><a href="/travel-info/charges-and-changes/taxes-and-services-fee" class="active">Taxes and Services Fee</a></li>
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