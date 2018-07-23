@extends('layouts.master-tertiary')

@section('title', 'Applicability')

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
                    <h3 align="center">Tickets</h3>
                    <table class="responsive-table">
                        <tbody>   
                        <tr>
                            <th>3.1	TICKET AS PRINCIPAL EVIDENCE OF CONTRACT</th>
                        </tr>
                        <tr>
                            <td>
                                <p>3.1.1 We will provide carriage only to the Passenger named in the Ticket, and you may be required to produce appropriate identification.</p>
                                <p>3.1.2 You cannot transfer your Ticket.</p>
                                <p>3.1.3 Some Tickets are sold at discounted fares which may be partially or completely non-refundable. 
                                You should choose the fare best suited to your needs. You also may wish to ensure that you have appropriate 
                                insurance to cover instances where you have to cancel your Ticket.</p>
                                <p>3.1.4 If you have a Ticket, as described in 3.1.3 above, which is completely unused, and you are prevented from 
                                travelling due to Force Majeure, provided that you promptly advise us and furnish evidence of such Force Majeure, 
                                we will provide you with a credit of the non-refundable amount of the fare, for future travel on us, subject to 
                                deduction of a reasonable administration fee.</p>
                                <p>3.1.5 Requirement for Ticket</p>
                                <p>Except in the case of an Electronic Ticket, you shall not be entitled to be carried on a flight unless you present 
                                a valid Ticket containing the Flight Coupon for that flight and all other unused Flight Coupons and the Passenger Coupon. 
                                In addition, you shall not be entitled to be carried if the Ticket presented is mutilated or if it has been altered otherwise 
                                than by us or our Authorized Agents. In the case of an Electronic Ticket, you shall not be entitled to be carried on 
                                a flight unless you provide positive identification and a valid Electronic Ticket has been duly issued in your name and 
                                delivered to you.</p>
                            </td>
                        </tr>
                        <tr>
                            <th>3.2	PERIOD OF VALIDITY</th>
                        </tr>
                        <tr>
                            <td>
                                <p>3.2.1 Except as otherwise provided in the Ticket, these Conditions, or in applicable Tariffs, 
                                (which may limit the validity of a ticket, in which case the limitation will be shown on the Ticket), 
                                a Ticket is valid for:</p>
                                <p>3.2.1.1 15 months once the ticket has no live segments and is considered closed.</p>
                                <p>3.2.2 When you are prevented from travelling within the period of validity of the Ticket because at the time you request a reservation we are unable to confirm a reservation, the validity of such Ticket will be extended or you may be entitled to a refund in accordance with article 11.</p>
                                <p>3.2.3 If after having commenced your journey, you are prevented from travelling within the period of validity of 
                                the Ticket by reason of illness, we may extend the period of validity of your Ticket until the date when you become 
                                fit to travel or until our first flight after such date, from the point where the journey is resumed on which space 
                                is available in the class of service for which the fare has been paid. Such illness must be attested to by a medical 
                                certificate. When the flight coupons remaining in the Ticket, or in the case of an Electronic Ticket, 
                                the Electronic Coupon, involve one or more Stopovers, the validity of such Ticket may be extended for not more than 
                                three months from the date shown on such certificate. In such circumstances, we will similarly extend the period of 
                                validity of Tickets of other members of your immediate family accompanying you.</p>
                                <p>3.2.4 In the event of death of a Passenger en route, the Tickets of the persons accompanying the Passenger may be 
                                modified by waiving any restriction and extending the validity. In the event of a death in the immediate family of 
                                a Passenger who has commenced travel, the validity of the Passenger's Tickets and those of his or her immediate family 
                                who accompanied the Passenger may likewise be modified. Any such modification shall be made upon receipt of a proper death 
                                certificate and any such extension of validity shall not be for a period not longer than forty-five (45) Days from 
                                the date of the death.</p>
                            </td>
                        </tr>
                        <tr>
                            <th>3.3	COUPON SEQUENCE</th>
                        </tr>
                        <tr>
                            <td>
                                <p>3.3.1 The Ticket you have purchased is valid only for the transportation as shown on the Ticket, from the place of 
                                departure via any Agreed Stopping Places to the final destination. The fare you have paid is based upon our Tariff and is 
                                calculated on the basis of the entire journey shown on the Ticket. It forms an essential part of our contract with you. 
                                The Ticket will not be honored and will lose its validity if the Coupons (or flights mentioned in the Ticket) are not used 
                                in the sequence provided in the Ticket. For example, where you commence your journey at any stopover or agreed stopping 
                                place.</p>
                                <p>3.3.2 Should you wish to change any aspect of your transportation you must contact us in advance. The fare for 
                                your new transportation will be calculated and you will be given the option of accepting the new price or maintaining 
                                your original transportation as ticketed. Should you be required to change any aspect of your transportation due to 
                                Force Majeure, you must contact us as soon as practicable and we will use reasonable efforts to transport you to 
                                your next Stopover or final destination, without recalculation of the fare. </p>
                                <p>3.3.3 Should you change your transportation without our agreement, we will assess the reasonable price for your 
                                actual travel. You will be required to pay any difference between the price you have paid and the total price applicable 
                                for your revised transportation. We will refund you the difference if the new price is lower but otherwise, your unused 
                                Coupons have no value.</p>
                                <p>3.3.4 Please be aware that while some types of changes will not result in a change of fare, others, such as changing 
                                the place of departure (for example if you do not fly the first segment) or reversing the direction you travel, can result 
                                in an increase in price. Many fares are valid only on the dates and for the flights shown on the Ticket and may not be 
                                changed at all, or only upon payment of an additional fee.</p>
                                <p>3.3.5 Each Flight Coupon contained in your Ticket will be accepted for transportation in the class 
                                of service on the date and flight for which space has been reserved. </p>
                                <p>3.3.6	Please be advised that in the event you do not show up for any flight without advising us in advance, 
                                we may cancel your return or onward reservations. However, if you do advise us in advance, we will not cancel 
                                your subsequent flight reservations. But as described in 3.3.1 above, you may not be able to use the follow-up tickets 
                                normally. Please contact us as early as possible in order to get the suggestion of further flight.</p>
                            </td>
                        </tr>

                        <tr>
                            <th>3.4	OUR NAME AND ADDRESS</th>
                        </tr>
                        <tr>
                            <td>
                                <p>Our name may be abbreviated to our Airline Designator Code, or otherwise, in the Ticket.</p>
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