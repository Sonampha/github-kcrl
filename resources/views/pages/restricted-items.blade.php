@extends('layouts.master-tertiary')

@section('title', 'Restricted Items')

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
                    <div class="relate-link"><a href="/">Home</a> >> <a href="/travel-info">Travel Info</a> >> <a href="/travel-info/baggage">Baggage</a> >> General Restricted Items</div>
                    <div class="area-title wow fadeIn">
                        <h3 align="center">General Restricted Items</h3><br>
                                <h4>Checked Baggage</h4>
                                <p><b>KC Airlines strongly advised against packing valuable and fragile items in your checked baggage, such as:</b></p>
                                <ul>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Laptops</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Medication</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Securities / Negotiable Papers</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Silverware / Precious Metals</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Money / Jewelry / Other Valuable Items</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Business / Travel / Identification Documents</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Perishable Items</li>
                                </ul>
                                <br><br>

                                <h4>Carry-on Baggage</h4>
                                <p><b>KC Airlines does not allow to bring unsafe and dangerous items in your carry-on baggage, such as:</b></p>
                                <ul>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Knives (including hunting knives, swords, and pocket knives)</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Scissors and any other sharp/bladed objects (e.g. ice-pick, 
                                    nail clippers, embroidery, crocheting and knitting needles) considered illegal by local law</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Weapons such as whips, nan-chakus, baton, or stun gun</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Hand-cuffs</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Sporting equipment such as baseball/cricket bats, golf clubs, hockey sticks, billiard cues</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Devices with spillable batteries</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Aerosols (hair sprays, perfumes, medicines containing alcohol) not exceeding 0.5 KG or 0.5 L per article and 
                                    2.0 KG or 2.0 L in total weight. Release valves on aerosols must be protected by a cap or other suitable means to prevent inadvertent release of the contents.</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Electronic devices which cannot be switched off (e.g. Furby toys)</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Toy guns that do not resemble weapons, such as plastic water guns</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Any other items which are deemed security hazards by local law</li>
                                    <li><span class="glyphicon glyphicon-hand-right"></span> &nbsp; &nbsp;  Any other items that resemble or have similar functions to the above items</li>
                                </ul>
                    </div>
                    <div class="text-center">
                        <img src="{{ url('/img/contents/restricted-items.jpg') }}" style="width:100%;" />
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right">
                    <div class="service-menu">
                        <h4>Baggage</h4>
                        <ul>
                            <li><a href="/travel-info/baggage/checked-baggage">Checked Baggage</a></li>
                            <li><a href="/travel-info/baggage/carry-on-baggage">Carry-on Baggage</a></li>
                            <li><a href="/travel-info/baggage/restricted-items" class="active">General Restricted Items</a></li>
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