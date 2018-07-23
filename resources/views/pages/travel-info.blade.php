@extends('layouts.master-tertiary')

@section('title', 'Travel-Information')

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
    .responsive-table tbody td {
        text-align: left;
    }
    .responsive-table thead th {
        text-align: left;
    }
    ol{
        margin: 20px;
        padding: 0;
        list-style: decimal inside;
    }
    ul{
        margin-left: 20px;
        list-style: disc inside;
    }
    li{
        margin-top: 10px;
    }
    /*----------------------------------
        MOBILE LAYOUT: 320px
    -----------------------------------*/

    @media only screen and (max-width: 767px) {
        ol{
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
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title wow fadeIn">
                    <h3 align="center">Travel Information</h3>
                    <table class="responsive-table">   
                        <tr>
                            <th>Counter Check-In</th>
                        </tr>
                        <tr>
                            <td>
                                <p>Check-in counter should be opened according to schedule time of departure (usually at least 1hour and 
                                30minutes before schedule time of departure ) give enough time to complete all check-in procedures in-time and 
                                not causing any delay to the flight.</p>
                            </td>
                        </tr>
                        <tr>
                            <th>Travel Document</th>
                        </tr>
                        <tr>
                            <td>
                                <ol>
                                    <li>Compare the name on the ticket with the name on his official travel document.</li>
                                    <li>Check the ticket for final destination and have this confirmed by the passenger.</li>
                                    <li>Check validity of ticket ( itinerary, flight, date, carrier, reservation status, class, 
                                    any restrictions )</li>
                                    <li>Check travel document for destination, including transit stations. If need or in doubt, 
                                    ask supervisor or KC international airlines personnel of assistance.</li>
                                    <li>Check for special any remarks in the computerized check-in system and add or update if necessary</li>
                                    <li>In case of electronic ticket, identify the passenger by requesting a photo-ID document ( e.g passport)</li>
                                    <li>Check for any special seat request or ask the passenger for any seat preference</li>
                                    <li>Issue the boarding pass</li>
                                    <li>Lift the flight coupon and , depending on what is locally agreed:
                                        <ul>
                                            <li>Attach it to the boarding pass or </li>
                                            <li>Put in the boarding pass envelop or</li>
                                            <li>Keep it aside</li>
                                        </ul>
                                    </li>
                                    <li>Through-check the passenger , if applicable</li>
                                    <li>Hand over boarding pass(es) and ticket(s) to the passenger, confirming number of pieces and destination to 
                                    which baggage has been checked</li>
                                    <li>If need, inform the passenger about customs procedures and baggage transfer</li>
                                    <li>Inform the passenger about the departure gate and boarding time</li>
                                    <li>In case of expected delay, inform about the estimated time of departure</li>
                                    <li>Give any other relevant information concerning the flight.</li>
                                </ol>
                            </td>
                        </tr>                        
                        </tbody>
                    </table>
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