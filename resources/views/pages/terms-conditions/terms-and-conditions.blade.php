@extends('layouts.master-secondary')

@section('header', 'Terms and Conditions')
@section('title', 'Terms - Conditions')

@section('content')
<link rel="stylesheet" href="{{ url('/css/flight-table.css') }}">
<style>
    @font-face {
    font-family: BakerSignetRegular;
    src: url("fonts/BakerSignetRegular.otf");
    } 
    .responsive-table thead th {
        background-color: #abd8db;
        border: 1px solid #abd8db;
        font-weight: bold;
        color: #3c4a62;
    }
    .responsive-table tbody td {
        text-align: left;
        border-bottom: 1px solid #abd8db;
    }
    .service-menu .active{
        color:#d01126 ;
        font-style: italic;
     }
    .panel-body {
        margin-left: 6%;
    }
    .service-menu h4 {
        background: #0099ff none repeat scroll 0 0;
    }
    .faqs-list #accordion .panel-title i {
        background: #0099ff none repeat scroll 0 0;
    }
    ol{
        list-style:lower-alpha inside;
        margin-bottom:10px;
    }
    li{
        margin-left:20px;
    }
</style>

    <!--ABOUT AREA-->
    <section class="about-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 pull-left">
                    <div class="faqs-list">
                        <h3>Terms and Conditions</h3>
                        <div class="panel-group" id="accordion">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_one">
                                            <i class="fa fa-minus"></i>1. Particular Expressions 
                                        </a>
                                    </h4>
                                </div>
                                <div id="faqs_one" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="responsive-table">                    
                                            <thead>
                                            <tr>
                                                <th width="30%" scope="col">VOCABULARIES</th>
                                                <th scope="col">DEFINITIONS</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <th scope="row">“WE”, “OUR” AND “US”</th>
                                                <td data-title="DEFINITIONS">Means KC International Airlines Co.; Ltd.</td>
                                            </tr>   
                                            <tr>
                                                <th scope="row">“YOU”, “YOUR” AND “YOURSELF”</th>
                                                <td data-title="DEFINITIONS">Means any person, except members of the crew, carried or to be carried in 
                                                an aircraft with our consent (See also definition for “Passenger”).</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">“TICKET”</th>
                                                <td data-title="DEFINITIONS">Means certificate for passenger to take flights with the certain flight information, 
                                                passenger information, conditions of use. Including Electronic ticket, paper ticket and paid PNR for 
                                                taking flight (ticketless).</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">“AGREED STOPPING PLACES”</th>
                                                <td data-title="DEFINITIONS">Means those places, except the place of departure and the place of final destination, 
                                                set forth in the Ticket or shown in our timetables as scheduled stopping places on your route as contractually agreed 
                                                stopping places.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">“AIRLINE DESIGNATOR CODE”</th>
                                                <td data-title="DEFINITIONS">Means two-characters or three letters which identify particular air carriers.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">“AUTHORISED AGENT”</th>
                                                <td data-title="DEFINITIONS">Means a passenger sales agent who has been appointed by us to represent us 
                                                in the sale of air transportation over our services and, when authorized, over the services of other 
                                                air carriers.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">“BAGGAGE” </th>
                                                <td data-title="DEFINITIONS">means your personal property accompanying you in connection with your trip. 
                                                Unless otherwise specified, it includes both your Checked and Unchecked Baggage.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“BAGGAGE CHECK” </th>
                                                <td data-title="DEFINITIONS">means those portions of the Ticket which relate to the carriage of your Checked Baggage.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“BAGGAGE IDENTIFICATION TAG” </th>
                                                <td data-title="DEFINITIONS">means a document issued solely for identification of Checked Baggage.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“CARRIER”</th>
                                                <td data-title="DEFINITIONS">means an air carrier other than ourselves, whose airline designator code appears on your Ticket or on a Conjunction Ticket.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“CHECKED BAGGAGE” </th>
                                                <td data-title="DEFINITIONS">means Baggage of which we take sole custody and for which we have issued a Baggage Check.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“CHECK-IN DEADLINE”</th>
                                                <td data-title="DEFINITIONS">means the time limit specified by the airline by which you must have completed check-in formalities and received your boarding pass.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“ABSOLUTE DISCRETION”</th>
                                                <td data-title="DEFINITIONS">we can use our discretion to deal with a matter with our full authority that are no statutes to apply.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“CONDITIONS OF CARRIAGE”</th>
                                                <td data-title="DEFINITIONS">means these conditions of carriage or another carrier's conditions of carriage as the case may be.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“CONDITIONS OF CONTRACT”</th>
                                                <td data-title="DEFINITIONS">means those statements contained in or delivered with your paper or Electronic Ticket (Itinerary Receipt) which incorporate by reference these Conditions of Carriage, and notices(s).</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“CONNECTING FLIGHT”</th>
                                                <td data-title="DEFINITIONS">means a subsequent flight providing onward travel on the same ticket, on a different ticket or on a conjunction ticket.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“CONJUNCTION TICKET”</th>
                                                <td data-title="DEFINITIONS">means a ticket issued to you with relation to another Ticket which together constitute a single contract of carriage.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“DAMAGE” </th>
                                                <td data-title="DEFINITIONS">means death or wounding of a Passenger, or any other bodily injury suffered by a Passenger, 
                                                caused by an accident on board the aircraft or during any of the operations of embarking or disembarking. It also means 
                                                damage sustained in the event of the destruction or the total or partial loss of or damage to Baggage which occurs during 
                                                carriage by air. Additionally, it means damage occasioned by delay in the carriage by air of Passengers or Baggage.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“DAYS”</th>
                                                <td data-title="DEFINITIONS">means calendar days, including all seven days of the week; provided that, for the purpose of 
                                                notification, the day upon which notice is dispatched shall not be counted; and provided further that for purposes of 
                                                determining duration of validity the day upon which the Ticket is issued, or the flight commenced, shall not be counted.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“FORCE MAJEURE”</th>
                                                <td data-title="DEFINITIONS">means unusual and unforeseeable circumstances beyond our or your control, the consequences of 
                                                which could not have been avoided even if all due care had been exercised.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“ITINERARY RECEIPT”</th>
                                                <td data-title="DEFINITIONS">means a document or documents we issue as a Ticket to Passengers travelling on Electronic Tickets 
                                                that contains the Passenger’s name, flight information and notices.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“MONTREAL</th>
                                                <td data-title="DEFINITIONS">CONVENTION” means the Montreal Convention for the Unification of Certain Rules Relating to 
                                                International Carriage by Air, signed at Montreal, 28 May 1999.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“PASSENGER”</th>
                                                <td data-title="DEFINITIONS">means any person, except members of the crew, carried or to be carried in an aircraft 
                                                pursuant to a Ticket. (See also definition of “you”, “your” and “yourself”)</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“OUR REGULATIONS”</th>
                                                <td data-title="DEFINITIONS">means rules, other than these Conditions of Carriage and Tariffs, published by us and 
                                                in effect on the date of the commencement of carriage, governing the carriage of Passengers and Baggage.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“SDR” </th>
                                                <td data-title="DEFINITIONS">means a Special Drawing Right as defined by the International Monetary Fund. 
                                                It is an international unit of account based upon the values of several leading currencies. The currency values of 
                                                the Special Drawing Right fluctuate and are re-calculated each banking day. These values are known to most commercial banks 
                                                and are reported regularly in leading financial journals as well as the website of the International Monetary Fund (www.imf.org).</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“STOPOVER” </th>
                                                <td data-title="DEFINITIONS">means a scheduled stop on your journey, at a point between the place of departure and the place of destination.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“SUCCESSIVE CARRIER” </th>
                                                <td data-title="DEFINITIONS">means one of several carriers which performs carriage under one ticket or under a ticket and 
                                                any conjunction ticket issued in connection therewith, which is regarded as a single operation for purposes of determining 
                                                the applicability of the Montreal Convention to the transportation.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“TARIFF”</th>
                                                <td data-title="DEFINITIONS">means the published fares, charges and/or related conditions of carriage of an airline filed, which have been filed where required, with the appropriate authorities.</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">“UNCHECKED BAGGAGE”</th>
                                                <td data-title="DEFINITIONS">means any of your Baggage other than Checked Baggage including all items brought by you into the aircraft cabin.</td>
                                            </tr> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_two">
                                        <i class="fa fa-minus"></i>2. Applicability</a>
                                    </h4>
                                </div>
                                <div id="faqs_two" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="responsive-table">   
                                            <tr>
                                                <th>2.1 GENERAL</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>2.1.1	Except as provided in Articles 2.4 and 2.5, these Conditions of Carriage apply to 
                                                    all flights operated by us and in any case where we have a legal liability to you in relation to your flight.</p>
                                                    <p>2.1.2	These Conditions also apply to gratuitous and reduced fare carriage except to the extent that 
                                                    we have provided otherwise in our Regulations or in the relevant contracts, passes or tickets.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>2.2 CHARTER OPERATIONS</th>
                                            </tr>
                                            <tr>
                                                <td>If carriage is performed pursuant to a charter agreement, these Conditions of Carriage apply only to 
                                                the extent they are incorporated by reference or otherwise, in the Ticket or other agreement with 
                                                the Passenger.</td>
                                            </tr>
                                            <tr>
                                                <th>2.3 CODE SHARES</th>
                                            </tr>
                                            <tr>
                                                <td>On some services we may have arrangements with other carriers known as “Code Shares”. This means that 
                                                even if you have a reservation with us and hold a Ticket where our name or Airline Designator Code is indicated 
                                                as the Carrier, another carrier may operate the aircraft. If such arrangements apply we will advise you of 
                                                the name of the other carrier operating the aircraft at the time you make a reservation.</td>
                                            </tr>

                                            <tr>
                                                <th>2.4 OVERRIDING LAW</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>These Conditions of Carriage are applicable unless they are inconsistent with our Tariffs or 
                                                    applicable law in which event such Tariffs or laws shall prevail.</p>
                                                    <p>Carriage hereunder is subject to the rules and limitations relating to liability established by the applicable Convention, 
                                                    unless such carriage is not 'international carriage' as defined by that Convention.</p>
                                                    <p>If any provision of these Conditions of Carriage is invalid, under any applicable law, the other provisions shall 
                                                    nevertheless remain valid.</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>2.5 CONDITIONS PREVAIL OVER REGULATIONS</th>
                                            </tr>
                                            <tr>
                                                <td>Except as provided in these Conditions of Carriage, in the event of inconsistency between these Conditions of 
                                                Carriage and any other regulations we may have, dealing with particular subjects, these Conditions shall prevail.</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_three">
                                        <i class="fa fa-minus"></i>3. Tickets</a>
                                    </h4>
                                </div>
                                <div id="faqs_three" class="panel-collapse collapse">
                                    <div class="panel-body">
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
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_four">
                                        <i class="fa fa-minus"></i>4. Stopovers</a>
                                    </h4>
                                </div>
                                <div id="faqs_four" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="responsive-table">
                                            <tbody>   
                                            <tr>
                                                <td>
                                                    <p>1. Stopovers may be permitted at Agreed Stopping Places subject to Government requirements and our Regulations.</p>
                                                    <p>2. Stopovers must be arranged with Carrier in advance and specified on the ticket.</p>
                                                    <p>3. Passengers need to be aware of and fully prepared for the visa cash required for stopover in advance, and we will not take any responsibility for such problems.</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_five">
                                        <i class="fa fa-minus"></i> 5. Fares, Taxes, Fees and Charges</a>
                                    </h4>
                                </div>
                                <div id="faqs_five" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <table class="responsive-table">
                                            <tbody>   
                                            <tr>
                                                <th>1. Fares and Other Charges</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Fares apply only for carriage from the airport at the point of origin to the airport at the point of final 
                                                    destination, unless otherwise expressly stated. Fares do not include land (road, rail) and maritime transport 
                                                    service between airports and between airports and town terminals. Your fare will be calculated in accordance with 
                                                    our Tariff in effect on the date of payment of your ticket for travel on the specific dates and itinerary shown on it. Should you change your itinerary or dates of travel, this may change the fare to be paid.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>2. Charges, Surcharges, Fees and Taxes</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>2.1 Applicable charges, fees and taxes not included in the fare that are imposed on us or on you, collected by us 
                                                    on behalf of governments or other authorities, or by airport operators, shall be payable by you. At the time you purchase 
                                                    your Ticket, you will be advised of charges, fees and taxes not included in the fare, most of which will normally be shown 
                                                    separately on the Ticket. The charges, fees and taxes imposed on air travel are constantly subject to change and can be 
                                                    imposed after the date of Ticket issuance. If there is an increase in the charge, fee or tax shown on the Ticket, you will 
                                                    be obliged to pay it. Likewise, if a new charge, fee or tax is imposed after Ticket issuance, you will be obliged to pay it. 
                                                    In the event any charges, fees or taxes which you have paid to us at the time of Ticket issuance are abolished or reduced such 
                                                    that they no longer apply to you, a lesser amount is due, or you cancel your Ticket, you will be entitled to, subject to 
                                                    applicable laws, claim a partial or full refund of unused charges, fees and/or taxes (as the case may be) without being 
                                                    subject to any administration fees.</p>
                                                    <p>2.2	Certain additional charges, surcharges or fees imposed by us or by another Carrier shall also be payable by you. 
                                                    Such charges, surcharges or fees will normally be incurred at the time you purchase your Ticket and may be refunded at our 
                                                    absolute discretion or in accordance with any applicable rules or policies that we may have published and, in either case, 
                                                    subject to the payment of any administrative fees as we may determine from time to time as applicable to such refund. 
                                                    As such charges, surcharges or fees are subject to change, we reserve the right, except as limited by applicable law, 
                                                    to require you to pay new charges, surcharges or fees (or increases to existing ones) at any time up until the flight 
                                                    to which the relevant charges, surcharges or fees may apply has been fully performed.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>3. Currency</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Fares, taxes, fees and charges are payable in the currency of the country in which the Ticket is issued, unless another 
                                                    currency is indicated by us or our Authorised Agents, at or before the time payment is made (for example, because of 
                                                    the non-convertibility of the local currency). We may, at our discretion, accept payment in another currency.</p>                                                   
                                                </td>
                                            </tr>                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_six">
                                        <i class="fa fa-minus"></i> 6. Reservations</a>
                                    </h4>
                                </div>
                                <div id="faqs_six" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <table class="responsive-table">
                                            <tbody>   
                                            <tr>
                                                <th>1. Reservation Requirements</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1.1 We or our Authorized Agents will record your reservation(s). Upon request, we will provide you with written 
                                                    confirmation of your reservation(s).</p>
                                                    <p>1.2	Certain fares have conditions which limit or exclude your right to change or cancel reservations. You should check 
                                                    the conditions that apply to your fare and we accept no responsibility for your failure to do so.</p>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>2. Ticketing Time Limits</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>If you have not paid for the Ticket prior to the specified ticketing time limit as advised by us or our Authorized Agents, 
                                                    we may cancel your reservation.</p>                                                   
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>3. Personal Data</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>We may use the personal information that you provide and we collect, including information about how your purchase history 
                                                    and how you use our services and facilities for the purposes of: making a reservation, purchasing and issuing a ticket, 
                                                    providing you with your transportation and any related services and facilities; accounting, billing and auditing, verifying 
                                                    and screening credit or other payment cards; immigration and customs control; safety, security, health, administrative and 
                                                    legal purposes; statistical and marketing analysis, operating frequent flyer programmes; systems testing, maintenance and 
                                                    development; IT training; customer relations; helping us to deal with you more efficiently in the future; and direct marketing 
                                                    and market research (which we will only do at your request or with your consent or if we give you the opportunity to opt out).. 
                                                    For these purposes, you authorise us to retain and use such data as long as it is needed to perform these tasks and to transmit 
                                                    it to our own offices, Authorised Agents, government agencies, other carriers or the providers of the above-mentioned services. 
                                                    You may be required, by government regulations, to provide specific personal data or information to us, including information to 
                                                    enable us to notify family members in the event of an emergency and other purposes associated with or incidental to your carriage. We shall not be liable to you for any loss or expense incurred due to our use or transmission of any personal data provided to us unless the loss or expense was due to our negligence. We may also monitor and/or record your telephone conversations with us to ensure consistent service levels, prevent/detect fraud and for training purposes. Further information on our data privacy policy, including how to access and correct this data, can be obtained from our offices and our website.</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>4. Seating</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>We will endeavor to honor advance seating requests. Some classes maybe charged for seating requests. 
                                                    However, we cannot guarantee any particular seat. We reserve the right to assign or re-assign seats at 
                                                    any time, even after boarding of the aircraft. This may be necessary for operational, safety, government 
                                                    regulatory, health or security reasons. We will make reasonable seating accommodations for Passengers with 
                                                    disabilities in accordance with applicable law. Passenger who pay for seating can request for the refund if 
                                                    adjust seats passively.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>5. Service Charge When Space Not Occupied</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Except in the case of travel on non-refundable fares, a reasonable service charge, in accordance with our 
                                                    regulations, may be payable by you if you fail to use space for which a reservation has been made.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>6. Special Services</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>6.1	We will try to ensure that special services requested by you when you make your reservation, such as 
                                                    religious or dietary meals, or wheelchairs from the airport check-in to the aircraft are available. We will not 
                                                    however, be liable to you for loss, expense, breach of contract or other damage should we, for any reason, be 
                                                    unable to supply such previously requested service. Passenger pay for the service can request for the refund.</p>
                                                    <p>6.2 If you are a passenger with a disability or special service and you require any special assistance you should 
                                                    inform us at the time of booking of your special assistance needs so we may have adequate time to make appropriate 
                                                    arrangements.</p>
                                                    <p>6.3	If you are a passenger with a disability, we will assist you in reaching those locations where arrangements have 
                                                    been made to provide for your special needs. If you do not inform us at the time of your special needs, we will nevertheless 
                                                    use reasonable efforts to accommodate your special needs.</p>
                                                    <p>6.4	We may require that you travel with an attendant if it is essential for safety or you are unable to physically 
                                                    assist in your evacuation from the aircraft or you are unable to understand safety instructions. We reserve the right to 
                                                    cease accepting passengers who must travel on a stretcher on any flight or who is not suitable for taking flight by our 
                                                    consideration.</p>
                                                    <p>6.6	On flights where medical oxygen is permitted you may be charged for the service of medical oxygen (and you may be 
                                                    required to be accompanied by an attendant).</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>7. On Board Services</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>For operational reasons, we do not make any guarantees about the provision/availability of in-flight entertainment 
                                                    equipment and advertised programmes; advertised special meals or any other type of meals; or the availability of advertised 
                                                    in-flight services.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>8. Reconfirmation of Reservations</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>8.1	Onward or return reservations may be subject to the requirement to reconfirm the reservation within specified 
                                                    time limits. We will advise you when we require reconfirmation, and how and where it should be done. If it is required and 
                                                    you fail to reconfirm, we may cancel your onward or return reservations. However, if you advise us you still wish to travel, 
                                                    and there is space on the flight in the class of service for which the fare has been paid, we will reinstate your reservations 
                                                    and transport you to your next or final destination. If there is no space available on the flight in the class of service for 
                                                    which the fare has been paid, we will use reasonable efforts to transport you to your next or final destination.</p>
                                                    <p>8.2	You should check the reconfirmation requirements of any other Carriers involved in your journey with them. 
                                                    Where it is required, you must reconfirm with the Carriers whose code appears for the flight in question on the Ticket.</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_seven">
                                        <i class="fa fa-minus"></i> 7. Check-In and Boarding</a>
                                    </h4>
                                </div>
                                <div id="faqs_seven" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <table class="responsive-table">
                                            <tbody>   
                                            <tr>
                                                <td>
                                                    <p>1. Check-in Deadlines are different at every airport and we recommend that you inform yourself about these 
                                                    Check-in Deadlines and honor them. Your journey will be smoother if you allow yourself ample time to comply with 
                                                    the Check–in Deadlines. We reserve the right to cancel your reservation if you do not comply with the Check-in 
                                                    Deadlines indicated. </p>
                                                    <p>2. You must be present at the boarding gate not later than the time specified by us when you check-in.</p>
                                                    <p>3. We may cancel the space reserved for you if you fail to arrive at the boarding gate in time or if you fail to 
                                                    present required travel documents as provided in Article 14.2</p>
                                                    <p>4. We will not be liable to you for any loss or expense incurred due to your failure to comply with the provisions of 
                                                    this Article.</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_eight">
                                        <i class="fa fa-minus"></i> 8. Refusal of and Limitation on Carriage</a>
                                    </h4>
                                </div>
                                <div id="faqs_eight" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <table class="responsive-table">
                                            <tbody>   
                                            <tr>
                                                <th>1. Right To Refuse Carriage</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>In the reasonable exercise of our discretion, we may refuse to carry you or your Baggage (even if you 
                                                    hold a valid Ticket and/or have a boarding pass) if we have notified you in writing that we would not at 
                                                    any time after the date of such notice carry you on our flights. In this circumstance, you will be entitled 
                                                    to a refund as provided in Article 11.3. We may also refuse to carry you or your Baggage if one or more of 
                                                    the following have occurred or we reasonably believe may occur:</p>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1.1 such action is necessary in order to comply with any applicable government laws, regulations, or orders;</p> 
                                                    <p>1.2 you refuse our requests for information about yourself including information required by governments;</p>  
                                                    <p>1.3	your mental or physical state, including your impairment from alcohol or drugs, presents a safety or health 
                                                    hazard or risk to yourself, to passengers, to crew, or to property or may materially affect the comfort of other 
                                                    Passengers or crew (however, we will make reasonable accommodations for passengers with disabilities in accordance with 
                                                    applicable laws); or</p>   
                                                    <p>1.4	you have committed misconduct on a previous flight, and such conduct may be repeated; or</p> 
                                                    <p>1.5	you have refused to submit to a security check for yourself or your Baggage, or having submitted to such a check, 
                                                    you fail to provide satisfactory answers to security questions at check-in or at the boarding gate, or you fail a security 
                                                    profiling assessment/analysis, or you tamper with or remove any security seals on your Baggage or security stickers on your 
                                                    boarding pass; or</p> 
                                                    <p>1.6 you have not paid the applicable fare, taxes, fees, or charges; or</p> 
                                                    <p>1.7	you do not appear to have valid travel documents, may seek to enter a country through which you may be in transit, 
                                                    or for which you do not have valid travel documents, or destroy your travel documents during flight or refuse to surrender 
                                                    your travel documents to the flight crew, against receipt, when so requested; or</p> 
                                                    <p>1.8 you present a Ticket that has been acquired unlawfully or has been purchased from an entity other than us or 
                                                    our Authorized Agents or has been reported as being lost or stolen; or is a counterfeit ticket; or you cannot prove that 
                                                    you are the person named in the Ticket. We reserve the right to retain such Ticket; or</p>    
                                                    <p>1.9	you fail to comply with the requirements set forth in Article 3.3 above concerning coupon sequence and use, or 
                                                    you present a Ticket which has been issued or altered in any way, other than by us or our Authorized Agents, or the Ticket 
                                                    is mutilated;</p>    
                                                    <p>1.10	you fail to observe our instructions with respect to safety or security; or</p>       
                                                    <p>1.11	you have previously committed one of the acts or omissions referred to above.</p>                           
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>2. Consequences of Refusal to Carry Or Removal of Passenger</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>If, due to your behavior, conduct, mental or physical condition, we have, in the exercise of our reasonable discretion, 
                                                    refused to carry you, or removed you en route, then we may cancel the remaining unused portion of your Ticket, and you will 
                                                    not be entitled to further carriage or to a refund either in respect of the sector that was the subject of the refusal of 
                                                    carriage or removal, or any subsequent sectors covered by the Ticket. We will not be liable for any consequential loss or 
                                                    damage alleged due to any such refusal to carry or removal en route. On the contrary, we reserve the right to seek an 
                                                    indemnity from you in respect of claims or losses including the costs of diverting our flight incurred by us, including in 
                                                    respect of death, injury, loss, damage or delay to other persons or to property as a result of such behavior, conduct or 
                                                    condition and such refusal or removal. We also reserve the right to give you a banning notice. By a banning notice we mean a 
                                                    written notice we have given to you informing you that you are banned from being carried on our route network. This means you 
                                                    are banned from all flights we operate. This notice will give the date when the ban comes into force and the period for which 
                                                    it applies. A banning notice will also ask you not to buy a Ticket or ask or allow anyone to do so for you. If you try to 
                                                    travel while a banning notice is in force, we will refuse to carry you.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>3. Special Assistance</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Acceptance for carriage of unaccompanied children, incapacitated persons, pregnant women, persons with illness or other 
                                                    people requiring special assistance is subject to prior arrangement with us. Passengers with disabilities who have advised 
                                                    us of any special requirements they may have at the time of ticketing, and been accepted by us, shall not subsequently be 
                                                    refused carriage on the basis of such disability or special requirements, however our regulations and/or government 
                                                    regulations may apply to the transportation of such Passengers. Subject to any applicable laws, all or some of the requirements of 
                                                    Article 8.3 may not apply to Passengers with disabilities or special services travelling to or from destinations. If you ask us, 
                                                    we will tell you how the requirements may differ.</p>        
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>4. Aircraft Weight Limitation / Seating Capacity</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>If we believe that the aircraft weight limitation or seating capacity would otherwise be exceeded, we will decide in 
                                                    our reasonable discretion and subject to the provisions of Articles 9.6.3 and 10.2.4 of these General Conditions of 
                                                    Carriage and any applicable local laws which Passengers or articles shall be carried.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>5. Items Removed From Passengers By Airport Security Personnel</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>We will not be responsible for, nor have any liability in respect of, items removed from you or your Baggage by airport 
                                                    security personnel acting in accordance with international or government regulations, whether or not any such items are 
                                                    subsequently retained or destroyed by such airport security personnel, or are passed by such airport security personnel to us.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>6. Service Dogs</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>We do not provide service dogs (for examples) service temporarily due to the abilities constrains.</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_nine">
                                        <i class="fa fa-minus"></i> 9. Baggage</a>
                                    </h4>
                                </div>
                                <div id="faqs_nine" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <table class="responsive-table">
                                            <tbody>   
                                            <tr>
                                                <th>1. Free Baggage Allowance</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>You may carry some Baggage, free of charge, subject to Our Regulations which are shown during your reservation 
                                                    progress, which are also available upon request and are available at our offices and stations or from our Authorized 
                                                    Agents.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>2. Excess Baggage</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>You will be required to pay a charge for carriage of Baggage in excess of the free Baggage allowance. These rates are 
                                                    available from us upon request and are available at our offices and stations or from our Authorized Agents.</p>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>3. Items Unacceptable As Baggage</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>3.1 You must not include in your Baggage:</p>
                                                    <p>3.1.1 Items which do not constitute Baggage as defined in Article 1 hereof;</p>
                                                    <p>3.1.2 Items which are likely to endanger the aircraft or persons or property on board the aircraft, such as those 
                                                    specified in the International Civil Aviation Organization (ICAO) Technical Instructions for the Safe Transport of 
                                                    Dangerous Goods by Air and the International Air Transport Association (IATA) Dangerous Goods Regulations, and in Our 
                                                    Regulation. (Further information is available from us on request);</p>
                                                    <p>3.1.3 Items the carriage of which is prohibited by the applicable laws, regulations or orders of any state to 
                                                    be flown from, or to;</p>
                                                    <p>3.1.4 Items which are reasonably considered by us to be unsuitable for carriage because they are dangerous, unsafe or 
                                                    because of their weight, size, shape or character, or because they are fragile or perishable having regard to, among other 
                                                    things, the type of aircraft being used. Information about unacceptable items is available upon request.</p>
                                                    <p>3.2	If you are in possession of, or if your Baggage includes any firearms or munitions, you must present them to us for 
                                                    inspection prior to commencement of carriage and we may, at our sole discretion, refuse to carry them. If we accept such 
                                                    articles for carriage we may require them to be delivered to and remain in our custody until your arrival at the airport 
                                                    building at the place of destination. Carriage of firearms and munitions is subject to ICAO and IATA requirements and 
                                                    regulations and may be subject to applicable government regulations.</p>
                                                    <p>3.3	Weapons such as antique firearms, swords, knives and similar items may be accepted as Checked Baggage, 
                                                    at our discretion, but will not be permitted in the cabin of the aircraft.</p>
                                                    <p>3.4	You are prohibited from including in your Checked Baggage, fragile or perishable items, artwork, cameras, money, 
                                                    jewellery, precious metals, silverware, computers, diving computers, personal electronic devices, negotiable papers, 
                                                    securities or other valuables, business documents, passports and other identification documents or samples.</p>
                                                    <p>3.5	If, despite being prohibited, any items referred to in 9.3.1, or 9.3.2 are included in your Baggage, to such extent 
                                                    permissible by applicable laws, we shall not be responsible for any loss or damage to such items.</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>4. Right to Refuse Carriage</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>4.1 Subject to paragraph 9.3.2 and 9.3.3, we will refuse to carry as Baggage the items described in 9.3, and we may refuse 
                                                    further carriage of any such items upon discovery. For reasons of safety or security we may request that you permit us to 
                                                    search your Baggage. The right of search in 9.5 does not impose an obligation on us, nor does the right of search, whether 
                                                    exercised or not, constitute an agreement, either express or implied by us to carry items within your baggage which would 
                                                    otherwise be precluded from carriage.</p>
                                                    <p>4.2	We may refuse to carry as Baggage any item, reasonably considered by us to be unsuitable for carriage because of 
                                                    its size, shape, weight, content, character, or for safety or operational reasons, or the comfort of other passengers. 
                                                    Information about unacceptable items is available upon request.</p>
                                                    <p>4.3	We may refuse to carry as Baggage any item, due to security, safety or operational reasons, including Baggage which 
                                                    does not belong to you and which you have pooled with your own Baggage. We do not accept liability for such Baggage and 
                                                    reserve the right to seek indemnity from you in respect of claims or losses incurred as a result of Damage caused to it.</p>
                                                    <p>4.4	Unless advance arrangements for its carriage have been made with us, we may carry on later flights Baggage which is 
                                                    in excess of the applicable free allowance, subject to your paying the charge specified in Paragraph 9.2.</p>
                                                    <p>4.5	We may refuse to accept Baggage as Checked Baggage unless it is in our reasonable opinion properly and securely 
                                                    packed in suitable containers. Information about packing and containers unacceptable to us is available upon request.</p>
                                                    <p>4.6	we will not refuse to carry passenger wheelchairs or other disability-assistive devices, unless such carriage would 
                                                    be inconsistent with safety, hazardous materials or safety requirements. If you ask us, we will provide additional information 
                                                    concerning the carriage of wheelchairs and other disability assistive devices.</p>
                                                    <p>4.7	We and our agents shall not check through Baggage for other Carriers where we do not have an interline agreement with 
                                                    them. Therefore, where you intend to arrive at an airport on another Carrier’s flight in order to connect with one of 
                                                    our flights or you intend to arrive at the airport on one of our flights in order to connect with another Carrier’s flight 
                                                    you must check in advance whether we have an interline agreement with them. If we do not, you are responsible for clearing 
                                                    your Baggage and having it checked-in and re-tagged for the next flight. In such circumstances, we are not liable for 
                                                    any loss, damage or delay to your journey or baggage.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>5. Right of Search</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>For reasons of safety and security we may request that you permit a search and scan of your person and a search, scan 
                                                    or x-ray of your Baggage. If you are not available, your Baggage may be searched in your absence for the purpose of 
                                                    determining whether you are in possession of or whether your Baggage contains any item described in 9.3.1 or any firearms 
                                                    ammunitions or weapons, which have not been presented to us in accordance with 9.3.2 or 9.3.3. If you are unwilling to 
                                                    comply with such requests we may refuse to carry you and your Baggage. In the event a search or scan causes damage to you, 
                                                    or an x-ray or scan causes damage to your Baggage, we shall not be liable for such Damage unless due to our fault or 
                                                    negligence.</p>                
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>6. Checked Baggage</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>6.1	Upon delivery to us of your Baggage which you wish to check, we will take custody of and issue a Baggage Identification Tag, 
                                                    for each piece of your Checked Baggage.</p>
                                                    <p>6.2	Checked Baggage must have your name, or other personal identification affixed to it.</p>
                                                    <p>6.3	Checked Baggage will whenever possible, be carried on the same aircraft as you, unless we decide for safety, security, 
                                                    or operational reasons to carry it on an alternative flight. If your Checked Baggage is carried on a subsequent flight we will 
                                                    deliver it to you, unless applicable law requires you to be present for customs clearance.</p>
                                                    <p>6.4	Maximum weight of any single piece of checked baggage is 32 kg (70 lb.) and the Maximum size (sum of length width and 
                                                    height) is 185 cm (72 inch). Acceptance of any bag weighing more than 32 kg (70 lb.) or oversizing more than 185 cm (72 inch) is 
                                                    subject to prior approval and notification upon booking/reservation. Overweight or oversize items will be repacked or split into 
                                                    lighter or smaller units during check-in. Such items that cannot be repacked will not be accepted for carriage. In either case, 
                                                    we shall not be liable to you for any loss, damage or delay arising as a result of your failure to comply with the weight and 
                                                    size allowance and need to repack, split or decline to carry the overweight or oversize items.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>7. Excess Value Declaration and Charge</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>7.1	You may declare a value for Checked Baggage in excess of the applicable liability limits. If you make such a 
                                                    declaration, you shall pay reasonable additional charges in accordance with Our Regulations.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>8. Unchecked Baggage</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>8.1	We may specify maximum dimensions and/or weight for Baggage which you carry onto the aircraft. If we have not 
                                                    done so, Baggage which you carry onto the aircraft must fit under the seat in front of you or in an enclosed storage 
                                                    compartment in the cabin of the aircraft. If your Baggage cannot be stored in this manner, or is of excessive weight, 
                                                    or is considered unsafe for any reason, it must be carried as Checked Baggage and you might be requested pay separate 
                                                    charge.</p>
                                                    <p>8.2	Objects not suitable for carriage in the cargo compartment (such as delicate musical instruments) and which do not 
                                                    meet the requirements in 9.8.1 above, will only be accepted for carriage in the cabin compartment if you have given us 
                                                    notice in advance and permission has been granted by us. You may be required to pay a separate charge for this service.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>9. Collection and Delivery of Baggage</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>9.1	Subject to Article 9.6.3, you are required to collect your Checked Baggage as soon as it is made available at 
                                                    your destination or Stopover, should you not collect it within a reasonable time, we may charge you a storage fee. 
                                                    Should your Checked Baggage not be claimed within three (3) months from the time it is made available, we may dispose of 
                                                    it without any liability to you.</p>
                                                    <p>9.2	Only the bearer of the Baggage Check and Baggage Identification Tag, is entitled to delivery of Checked Baggage.</p>
                                                    <p>9.3	If a person claiming the Baggage is unable to produce the Baggage Check and identify the Baggage by means of 
                                                    a Baggage Identification Tag, we will deliver the Baggage to such person only on condition that he or she establishes 
                                                    to our satisfaction his or her right to the Baggage thereto, and if required by us, such person shall furnish adequate 
                                                    security to indemnify us for any loss, damage or expense which may be incurred by us as a result of such delivery.</p>
                                                    <p>9.4	Acceptance of Baggage by the bearer of the Baggage Check without complaint at the time of delivery shall 
                                                    constitute sufficient evidence that the Baggage has been delivered in good condition and in accordance with 
                                                    the contract of carriage.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>10. Live Animals</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>10.1	We do not provide service dogs (for examples) service temporarily due to the abilities constrains.</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_ten">
                                        <i class="fa fa-minus"></i> 10. Schedules, Cancellation of Flights</a>
                                    </h4>
                                </div>
                                <div id="faqs_ten" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="responsive-table">
                                                <tbody>   
                                                <tr>
                                                    <th>1. Schedules</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>1.1	The flight times shown in timetables may change between the date of publication and the date you actually travel. 
                                                        We do not guarantee them to you and they do not form part of your contract with us.</p>
                                                        <p>1.2	Before we accept your booking, we will notify you of the scheduled flight time in effect as of that time, and 
                                                        it will be shown on your Ticket. It is possible we may need to change the scheduled flight time subsequent to issuance of 
                                                        your Ticket. If you provide us with contact information, we will endeavor to notify you of any such changes. If, after 
                                                        you purchase your Ticket, we make a significant change to the scheduled flight time, which is not acceptable to you, and 
                                                        we are unable to book you on an alternate flight which is acceptable to you, you will be entitled to a refund in accordance 
                                                        with Article 11.</p>                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>2. Cancellation, Rerouting, Delays, Etc.</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>2.1	We will take all necessary measures to avoid delay in carrying you and your Baggage. In the exercise of these measures and 
                                                        in order to prevent a flight cancellation, in exceptional circumstances, we may arrange for a flight to be operated on our behalf by 
                                                        an alternative carrier and/or aircraft.</p>
                                                        <p>2.2	Except as otherwise provided by the Warsaw Convention or the Montreal Convention or applicable law, if we cancel 
                                                        a flight, fail to operate a flight reasonably according to the schedule, fail to stop at your destination or Stopover 
                                                        destination, or cause you to miss a connecting flight on which you hold a confirmed reservation, we shall, at your option, 
                                                        either:</p>
                                                        <p>2.2.1 carry you at the earliest opportunity on another of our scheduled services on which space is available without 
                                                        additional charges and; where necessary, extend the validity of your Ticket; or</p>
                                                        <p>2.2.2	within a reasonable period of time re-route you to the destination shown on your Ticket by our own services or 
                                                        those of another Carrier, or by other mutually agreed means and class of transportation without additional charge. 
                                                        If the fare, and charges for the revised routing are lower than what you have paid, we shall refund the difference;</p>
                                                        <p>2.2.3 make a refund in accordance with the provisions of Article 11;</p>
                                                        <p>2.3	Upon the occurrence of any of the events set out in Article 10.2.2, except as otherwise provided by the Warsaw 
                                                        Convention or the Montreal Convention, or, where applicable, EC Regulation 261/2004, the options outlined in Article 10.2.2.1 
                                                        through 10.2.2.3 are the sole and exclusive remedies available to you and we shall have no further liability to you. 
                                                        In particular, except where EC Regulation 261/2004 is applicable, if cancellations or delays are due to inclement weather or 
                                                        to air traffic control delays, we shall be under no immediate obligation to comply with Paragraphs 10.2.1 - 10.2.3 or 
                                                        to provide at all for the cost of telephone calls, accommodation, refreshments or transportation, although we shall make 
                                                        reasonable efforts to assist you as best we can in the prevailing circumstances.</p>
                                                        <p>2.4	If we are unable to provide confirmed space, we shall provide compensation to those Passengers who are denied boarding or 
                                                        who are involuntarily downgraded to the class below in accordance with applicable law.</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_eleven">
                                        <i class="fa fa-minus"></i> 11. Refunds</a>
                                    </h4>
                                </div>
                                <div id="faqs_eleven" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="responsive-table">
                                            <tbody>   
                                            <tr>
                                                <td>
                                                    <p>1. Unless otherwise stated in these conditions, fare rules or tariff or in accordance with applicable law, tickets are 
                                                    non-refundable. We will refund a Ticket or any unused portion, as set out below:</p>
                                                    <p>1.1	Except as otherwise provided in this Article, we shall be entitled to make refund either to the person named in 
                                                    the Ticket, or to the person who has paid for the Ticket upon presentation of satisfactory proof of such payment.</p>
                                                    <p>1.2	If a Ticket has been paid for by a person other than the Passenger named in the Ticket, and the Ticket indicates 
                                                    that there is a restriction on refund, we shall make a refund only to the person who paid for the Ticket, or to that 
                                                    person's order.</p>
                                                    <p>1.3	Regarding paper ticket, except in the case of lost Tickets, refunds will only be made on surrender to us of 
                                                    the Ticket and all unused Flight Coupons.</p>
                                                    <p>1.4	Regarding paper ticket, a refund made to anyone presenting the Passenger Coupon or Passenger Receipt and all unused 
                                                    Flight Coupons and holding himself or herself out as a person to whom refund may be made pursuant to 11.2.1 or 11.2.2 shall be 
                                                    deemed a proper refund and shall discharge us from liability and any further claim for refund from you or from anyone else.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>2. Involuntary Refunds</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>If we cancel a flight, fail to operate a flight reasonably according to schedule, fail to stop at your final destination 
                                                    or Stopover, or cause you to miss a connecting flight on which you hold a reservation, the amount of the refund shall be:</p>
                                                    <p>2.1	If no portion of the Ticket has been used, an amount equal to the fare paid;</p>
                                                    <p>2.2	if a portion of the Ticket has been used, the refund will be not less than the difference between the fare paid and 
                                                    the applicable fare for travel between the points for which the Ticket has been used.</p>
                                                    <p>2.3	Upon acceptance of a refund by the Passenger on the purchase of a ticket under these circumstances, we shall be released 
                                                    from any further liability.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>3. Voluntary Refunds</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>3.1	If you are entitled to a refund of your Ticket for reasons other than those set out in 11.2, the amount of the refund shall be:</p>
                                                    <p>3.1.1 if no portion of the Ticket has been used, an amount equal to the fare paid, less any reasonable service charges or 
                                                    cancellation fees;</p>
                                                    <p>3.1.2 if a portion of the Ticket has been used, the refund will be an amount equal to the difference between the fare paid and 
                                                    the applicable fare for travel between the points for which the Ticket has been used, less any reasonable service charges or 
                                                    cancellation fees.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>4. Refund On Lost Ticket</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>4.1	If you lose your Ticket or portion of it, upon furnishing us with satisfactory proof of the loss, and payment of 
                                                    a reasonable administration charge, refund will be made as soon as practicable after the expiry of the validity period of 
                                                    the Ticket, on condition:</p>
                                                    <p>4.1.1 that the lost Ticket, or portion of it, has not been used, previously refunded or replaced, (except where the use, 
                                                    refund or replacement by or to a third party resulted from our own negligence);</p>
                                                    <p>4.1.2 that the person to whom the refund is made undertakes, in such form as may be prescribed by us, to repay to us 
                                                    the amount refunded in the event of fraud and/or to the extent that the lost Ticket or portion of it is used by a third 
                                                    party (except where any fault or use by a third party resulted from our own negligence).</p>
                                                    <p>4.2 If we or our Authorized Agents lose the Ticket or portion of it, the loss shall be our responsibility.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>5. Right To Refuse Refund</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>5.1 We may refuse a refund where application is made after the expiry of the validity of the Ticket.</p>
                                                    <p>5.2	We may refuse refund on a Ticket which has been presented to us, or to Government officials, as evidence of intention to 
                                                    depart from that country, unless you establish to our satisfaction that you have permission to remain in the country or that 
                                                    you will depart from that country by another Carrier or another means of transport.</p>
                                                    <p>5.3	We may refuse refund in the circumstances covered by Article 8.2 of these Conditions.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>6. Currency</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>We reserve the right to make a refund in the same manner and the same currency used to pay for the Ticket.</p>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>7. Whom Ticket Refundable</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Voluntary refunds will be made only by the carrier which originally issued the Ticket or by its agents if so authorized.</p>                                                    
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_twelve">
                                        <i class="fa fa-minus"></i> 12. Conduct Aboard Aircraft</a>
                                    </h4>
                                </div>
                                <div id="faqs_twelve" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <table class="responsive-table">
                                            <tbody>   
                                            <tr>
                                                <td>
                                                    <p>1. If, in our reasonable opinion, you conduct yourself aboard the aircraft so as to endanger the aircraft or 
                                                    any person or property on board, or obstruct the crew in the performance of their duties, or fail to comply with 
                                                    any instruction of the crew including but not limited to those with respect to sitting down and fastening a seatbelt, 
                                                    smoking, alcohol or drug consumption, or behave in a manner which causes discomfort, inconvenience, damage or injury to 
                                                    other passengers or the crew, we may take such measures as we deem reasonably necessary to prevent continuation of 
                                                    such conduct, including restraint. You may be disembarked and refused onward carriage at any point, and may be 
                                                    prosecuted for offences committed on board the aircraft.</p>
                                                    <p>2. You are not allowed to consume alcohol aboard our aircraft (whether purchased as duty free from us or someone else 
                                                    or otherwise obtained) unless it has been served to you by us. We have the right, at any time for any reason, to refuse 
                                                    to serve you alcohol or to withdraw alcohol which has been served to you.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>3. General Indemnity</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>If you conduct yourself in a manner described in Paragraph 12.1 above, you will indemnify us for all claims or losses, 
                                                    including, but not limited to, all costs arising from the diversion of the aircraft for the purpose of offloading you and 
                                                    all losses suffered or incurred by us, our Agents, employees, independent contractors, passengers and any third party in 
                                                    respect of death, injury, loss damage or delay to other persons or to property, arising from your misconduct.</p>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>4. Electronic Devices </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>For safety or legal reasons, we may forbid or limit operation aboard the aircraft of electronic equipment, including, 
                                                    but not limited to, cellular telephones, laptop computers, portable recorders, portable radios, MP3, cassette and CD players, 
                                                    electronic games, laser products, or transmitting devices including remote or radio controlled toys and walkie-talkies. 
                                                    You must not use these items when we have informed you that they are not permitted to be used. You may also commit a criminal 
                                                    offence if you do. Operation of hearing aids and heart pacemakers is permitted.</p>      
                                                    <p>4.2	If you fail to comply with Paragraph 12.4, we reserve the right to retain such electronic devices until the termination 
                                                    of your flight or until such other time as we consider appropriate.</p>                                            
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_thirteen">
                                        <i class="fa fa-minus"></i> 13. Arrangements for Additional Services</a>
                                    </h4>
                                </div>
                                <div id="faqs_thirteen" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <table class="responsive-table">
                                            <tbody>   
                                            <tr>
                                                <td>
                                                    <p>1. If we make arrangements for you with any third party to provide any services other than carriage by air, 
                                                    including road, rail and sea transport or if we issue a ticket or voucher relating to transportation or services 
                                                    (other than carriage by air) provided by a third party, such as hotel reservations or car rental, in doing so, 
                                                    we act only as your agents for such third party. The terms and conditions of the third party service provider will 
                                                    apply, and we shall have no liability to you for such services, including a third party service providers' decision 
                                                    to cancel or deny any reservations.</p>
                                                    <p>2. If we are also providing surface (land or sea) transportation to you, other conditions may apply to such surface 
                                                    transportation. Such conditions are available from us and our authorized agents upon request.</p>                                                    
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_forteen">
                                        <i class="fa fa-minus"></i> 14. Administrative Formalities</a>
                                    </h4>
                                </div>
                                <div id="faqs_forteen" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <table class="responsive-table">
                                            <tbody>   
                                            <tr>
                                                <th>1. General</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1.1	You (not us) must check the relevant entry requirements for any country you are visiting; and present to us 
                                                    all required passport, visas, health certificates and other travel documents needed for your journey.</p>
                                                    <p>1.2	You must obey all laws, regulations, orders, demands and travel requirements of countries to be flown from, into or 
                                                    through which you transit</p>
                                                    <p>1.3	We will not be liable to you (i) if you do not have the necessary passports, visas, health certificates and 
                                                    other travel documents; (ii) your passport, visa, health certificates or other travel documents are invalid or out 
                                                    of date; or (iii) you have not obeyed all relevant laws, regulations, orders, demands, requirements, rules or instructions.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>2. Travel Documents</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Prior to travel, you must present to us all exit, entry, health and other documents including passports and 
                                                    visas required by laws, regulations, orders, demands or requirements of the countries concerned. If we ask you 
                                                    must allow us to take and retain copies and deposit your passport or equivalent travel document with a member of 
                                                    the crew of the aircraft for safe custody until the end of the flight. We reserve the right to refuse carriage if 
                                                    you have not complied with these requirements, or your travel documents do not appear to be in order.</p>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>3. Refusal of Entry</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>If you are denied entry into any country, you will be responsible to pay any fine, penalty or charge imposed against us by 
                                                    the Government concerned, any detention costs we are charged; the cost of transporting you from that country and any other 
                                                    costs we reasonably pay or agree to pay. The fare collected for carriage to the point of refusal or denied entry will not be 
                                                    refunded by us.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>4. Passenger Responsible For Fines, Detention Costs, Etc</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>If we are required to pay or deposit any fine or penalty or to incur any expenditure by reason of your failure to 
                                                    comply with laws, regulations, orders, demands or other travel requirements of the countries concerned or to produce 
                                                    the required documents, you shall reimburse us, any amount so paid or any expenditure so incurred. We may apply toward 
                                                    such payment or expenditure the value of any unused carriage on your ticket, or any of your funds in our possession.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>5. Customs Or Other Official Inspection</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>If required, you shall attend inspection of your Baggage, by customs or other government officials. We are not liable 
                                                    to you for any loss or damage suffered by you in the course of such inspection or through your failure to comply with 
                                                    this requirement.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>6. Security Inspection</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>You must allow us, government officials, airport officials, or other Carriers to carry out security screening of you 
                                                    and your baggage. We are not liable to you for any Damage suffered by you in the course of such security checks or through 
                                                    your failure to comply with this requirement unless caused by our negligence.</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_fifteen">
                                        <i class="fa fa-minus"></i> 15. Successive Carriers</a>
                                    </h4>
                                </div>
                                <div id="faqs_fifteen" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Carriage to be performed by us and other Carriers under one Ticket, or a Conjunction Ticket is regarded as a single 
                                        operation for the purposes of the Warsaw Convention and Montreal Convention. However, your attention is drawn to Art. 16.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_sixteen">
                                        <i class="fa fa-minus"></i> 16. Liability for Damage</a>
                                    </h4>
                                </div>
                                <div id="faqs_sixteen" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <table class="responsive-table">
                                            <tbody>   
                                            <tr>
                                                <th>1. Applicable Rules</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1.1	These conditions of carriage and applicable law govern our liability to you. Where we are a successive carrier, 
                                                    we are not liable for those parts of the journey performed by other carrier(s). Where we are the actual carrier, 
                                                    we are liable for an accident which causes injury or death that occurs on board the aircraft, or in the process of 
                                                    embarking or disembarking; where we are the contracting carrier but do not perform any part of the operations of carriage, 
                                                    we are liable for an accident which causes injury or death that occurs during any part of the transportation, while on board 
                                                    the aircraft, or in the process of embarking or disembarking.</p>
                                                    <p>1.2	Applicable law may include the Warsaw Convention, or the Montreal Convention, and/or laws which apply in 
                                                    individual countries. The Warsaw Convention and the Montreal Convention apply to international Carriage as defined in 
                                                    those Conventions.</p>
                                                    <p>1.3	Where we issue a Ticket for carriage by another Carrier, or we check-in your Baggage for carriage by another Carrier, 
                                                    we do so only as agent for that Carrier.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>2. Our Liability for Death or Injury to Passengers</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Our liability for proven damages sustained by you in the event of death, wounding or any other bodily injury caused by 
                                                    an accident during carriage provided by us is subject to the rules and limitations set forth in the applicable law as well 
                                                    as the following supplementary rules.</p>
                                                    <p>2.1	We will not invoke any financial limit of liability available under the applicable law in defence of any claim for 
                                                    recoverable compensatory damages.</p>   
                                                    <p>2.2	For any recoverable damages up to and including the sum of the equivalent of 113,100 SDRs with respect to claims to 
                                                    which the Montreal Convention applies and 100,000 SDRs in all other instances, we shall not exclude or limit our liability, 
                                                    including invoking any defence based upon proof that we and our agents have taken all necessary measures to avoid the damage, or 
                                                    that it was impossible for such measures to have been taken.</p>    
                                                    <p>2.3	Notwithstanding the provisions of 16.2.2; if we prove that the damage was caused by or contributed to by, the negligence or 
                                                    other wrongful act or omission of the injured or deceased passenger or of the legally entitled person claiming compensation 
                                                    we may be exonerated wholly or partly from our liability in accordance with applicable laws.</p>  
                                                    <p>2.4	To the extent that recoverable damages under this Article may potentially exceed 113,100 SDRs with respect to claims to 
                                                    which the Montreal Convention applies and 100,000 SDRs in all other instances, they will be reduced either partially or wholly 
                                                    if we prove that the damage</p> 
                                                    <ol>
                                                        <li>was not due to the negligence or other wrongful act or omission of us or our agents; or</li>
                                                        <li>was solely due to the negligence or other wrongful act or omission of a third party</li>
                                                    </ol> 
                                                    <p>2.5	We are not responsible for any illness, injury or disability, including death, attributable to your age, mental or 
                                                    physical condition or for the aggravation of such condition</p>     
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>3. Our Liability For Damage To Baggage</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>3.1	We are not liable for Damage to Unchecked Baggage (other than Damage caused by delay which is covered by 
                                                    Article 16.4 below) unless the Damage was caused by our negligence or the negligence of our agents.</p>
                                                    <p>3.2	We will not be liable for Damage to Baggage resulting from the inherent defect, quality or vice of the Baggage. 
                                                    Likewise, we will not be liable for fair wear and tear of Baggage resulting from the usual and normal rigours of transportation 
                                                    by air.</p>
                                                    <p>3.3	With respect to claims to which the Warsaw Convention applies, our liability in the case of Damage to checked Baggage 
                                                    shall be limited to 17 SDRs per kilogram and in the case of Damage to Unchecked Baggage 332 SDRs per passenger, or any higher 
                                                    sum agreed to by us pursuant to Article 9.7.1.</p>
                                                    <p>3.4 With respect to claims to which the Montreal Convention applies, our liability for damage to both Unchecked and Checked Baggage, 
                                                    including damage caused by delay is limited to 1,131 SDRs per Passenger or any higher sum agreed to by us pursuant to Article 9.7.1.</p>
                                                    <p>3.5	Where either the Warsaw Convention or Montreal Convention applies the limits of liability mentioned in Articles 16.3.3 and 
                                                    16.3.4 will not apply if you are able to prove that the damage resulted from an act or omission by us or our agents carried out 
                                                    either;</p>
                                                    <ol>
                                                        <li>with the intention of causing Damage; or</li>
                                                        <li>recklessly and with actual knowledge that Damage would probably result and you prove that our employees or agents 
                                                        responsible for the act or omission were acting within the scope of their employment.</li>
                                                    </ol>
                                                    <p>3.6	The limit of liability for Damage to both Unchecked and Checked Baggage established by local law applies to your 
                                                    Baggage where local law applies to your journey instead of the Warsaw Convention or the Montreal Convention.</p>
                                                    <p>3.7	The limit of liability for Damage to both Unchecked and Checked Baggage specified in 16.3.3 applies to Damage to 
                                                    Unchecked Baggage and Checked Baggage respectively where neither the Warsaw Convention nor the Montreal Convention applies to 
                                                    you carriage and no limit of liability is established by applicable local law.</p>
                                                    <p>3.8	You may wish to make a special declaration of value (see Article 9.7.1) or buy yourself additional insurance to cover 
                                                    instances where the actual value or replacement cost of your Checked Baggage or Unchecked Baggage exceeds our liability.</p>
                                                    <p>3.9	If the weight of the baggage is not recorded on the baggage check, it is presumed that the total weight of the checked baggage 
                                                    does not exceed the applicable free baggage allowance for the class of carriage concerned, as provided in Our Regulations.</p>
                                                    <p>3.10	If you complete a special declaration of higher value at check-in and pay the applicable fee, our liability shall be 
                                                    limited to the higher declared value.</p>
                                                    <p>3.11	We are not liable for damage to baggage caused by delay if we prove that we and our agents took all measures that could 
                                                    reasonably be required to avoid the Damage or that it was impossible for us or our agents to take such measures.</p>
                                                    <p>3.12	We are not liable for injury to you or for Damage to your Baggage caused by property contained in your baggage or anyone else. 
                                                    You are responsible for any damage caused by your baggage to other people, including property and you shall indemnify us for all losses 
                                                    and expenses incurred by us as a result thereof.</p>
                                                    <p>3.13	Except for checked or unchecked baggage carried in the course of international carriage as defined by the Warsaw or 
                                                    Montreal Conventions, we are not liable in any way whatever for Damage to articles which you include in your baggage which 
                                                    you are prohibited from including in your Baggage by Article 9.3, including but not limited to damage to fragile or perishable 
                                                    items, keys, artwork, cameras, money, jewellery, precious metals, silverware, medicines, drug, dangerous goods, commercial goods, 
                                                    odd-sized articles, negotiable papers, securities, or other valuables, business documents, passports and other identification 
                                                    documents, or samples, which are included in your Baggage.</p>
                                                    <p>3.14	We are not liable in any way whatever for Damage to your Baggage caused by your failure to adhere to Article 9.4.7 of 
                                                    these conditions including failing to take responsibility for clearing, checking-in and re-tagging Baggage for carriage on 
                                                    another flight with a Carrier which we do not have an interline agreement with.</p>
                                                    <p>3.15	We are not liable for Damage to Baggage to the extent that we prove that the Damage was caused by your negligence or 
                                                    other wrongful act or omission.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>4. Our Liability For Damage Caused By Delay To Passengers</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>4.1	Our liability for Damage caused by delay in your carriage by air is limited by the Warsaw Convention and the Montreal Convention.</p>
                                                    <p>4.2	Whether or not the Warsaw Convention or Montreal Convention applies to your claim, we are not liable for damage to 
                                                    passengers caused by delay if we prove that we and our agents took all measures that could reasonably be required to avoid 
                                                    the damage or that it was impossible for us or them to take such measures.</p>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>5. General Provisions</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>5.1	We shall be liable only for Damage occurring during transportation ticketed under our own Airline Designator Code or 
                                                    operated by us. If we issue a Ticket or if we check Baggage for transportation under another Carrier’s Designator Code, we do 
                                                    so only as Agents for the other Carrier. Nevertheless, with respect to Checked Baggage you may also have a right of action 
                                                    against the first or last Carrier. However, the liability of each Carrier involved in your journey must be determined only by 
                                                    its own Conditions of Carriage. We are not liable for any damage arising from our compliance with any laws or government 
                                                    regulations, orders or requirements, or from your failure to comply with the same;</p>
                                                    <p>5.3	Except where these conditions of carriage state differently, our liability shall be limited to proven compensatory 
                                                    damages, and in any event, we shall not be liable for (i) any loss of profits, revenue, contracts, sales, anticipated savings, 
                                                    goodwill and reputation; and (ii) indirect, consequential losses, or (iii) any form of non-compensatory damages.</p>
                                                    <p>5.4	If your age or mental or physical condition is such as to involve any hazard or risk to yourself, we shall not be 
                                                    liable for any illness, injury or disability, including death, attributable to such condition or for the aggravation of such 
                                                    condition.</p>
                                                    <p>5.5	Any exclusion or limitation of our liability shall apply to and be for the benefit of our Agents, employees and 
                                                    representatives and any person whose aircraft is used by us and such person's Agents, employees and representatives. 
                                                    As a result, the total amount recoverable from us and from such Agents, employees, representatives and persons shall not 
                                                    exceed the amount of our limit of liability.</p>
                                                    <p>5.6	Unless we state otherwise, nothing in these Conditions of Carriage gives up any exclusion or limitation of liability to 
                                                    which we are entitled under the applicable law which may apply. With respect to third parties, we reserve all of our right of 
                                                    recourse against any other person, including without limitation, rights of contribution and indemnity.</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_seventeen">
                                        <i class="fa fa-minus"></i> 17. Time Limitation on Claims and Actions</a>
                                    </h4>
                                </div>
                                <div id="faqs_seventeen" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <table class="responsive-table">
                                            <tbody>   
                                            <tr>
                                                <th>1. Time Limit for Baggage</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1.1	If you, or the person holding the Baggage Check and Baggage Identification Tag with your authority, 
                                                    receives the Checked Baggage at the time of delivery without making a formal complaint, the absence of a formal 
                                                    complaint will be sufficient evidence that the Checked Baggage was received by you in good order and condition 
                                                    unless you prove otherwise.</p> 
                                                    <p>1.2	If you wish to claim compensation from us for Damage to Checked Baggage, you must notify us as follows:</p> 
                                                    <ol>
                                                        <li>If the Damage is physical in nature, within seven (7) days of receipt of the Checked Baggage.</li>
                                                        <li>If the Damage consists of complete loss of the Checked Baggage, within twenty-one (21) days from 
                                                        the date on which the Baggage ought to have been delivered to you.</li>
                                                        <li>If the Damage consists of delay to the Checked Baggage, within twenty-one (21) days from the date of 
                                                        the Baggage was place at your disposal.</li>
                                                    </ol>    
                                                    <p>1.3	If you do not notify us in writing within the timescales in Articles 17.1.2 (a) to 17.1.2 (c) above, and 
                                                    the Warsaw Convention or the Montreal Convention applies to your claim, no action shall lie against us save in the case of 
                                                    fraud on our part.</p>                                             
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>2. Time Limit for All Actions</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Any right you may have for compensation for any Damages shall be extinguished if an action is not brought within 
                                                    two years from the date of arrival at the destination, or the date on which the aircraft ought to have arrived, or 
                                                    the date on which the carriage stopped. The period of limitation shall be determined by the law of the court where 
                                                    the case is heard.</p>                                                    
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_eighteen">
                                        <i class="fa fa-minus"></i> 18. Modification and Waiver</a>
                                    </h4>
                                </div>
                                <div id="faqs_eighteen" class="panel-collapse collapse">
                                    <div class="panel-body">
                                       <p>None of our Agents, employees or representatives has authority to alter, modify or waive any provision of 
                                       these Conditions of Carriage.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_nineteen">
                                        <i class="fa fa-minus"></i> 19. Other Conditions</a>
                                    </h4>
                                </div>
                                <div id="faqs_nineteen" class="panel-collapse collapse">
                                    <div class="panel-body">
                                       <p>Carriage of you and your Baggage is also provided in accordance with Our Regulations and certain other conditions 
                                       applying to or adopted by us. These regulations and conditions as varied from time to time are important. 
                                       They concern among other things; the carriage of unaccompanied minors, pregnant women, and sick passengers, 
                                       restrictions on use of electronic devices on board the aircraft, forbidden items in Baggage, and the on board 
                                       consumption of alcoholic beverages.</p> 
                                       <p>Copies of Our Regulations and conditions concerning these matters are available from us upon request.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_twenty">
                                        <i class="fa fa-minus"></i> 20. Interpretation</a>
                                    </h4>
                                </div>
                                <div id="faqs_twenty" class="panel-collapse collapse">
                                    <div class="panel-body">
                                       <p>The title of each Article of these Conditions of Carriage is for convenience only, and is not to be used for 
                                       interpretation of the text.</p> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<!--                 <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right">
                    <div class="service-menu">
                        <h4>Related Topics</h4>
                        <ul>
                            <li><a href="#definitions">Particular Expressions</a></li>
                            <li><a href="#applicability">Applicability</a></li>
                            <li><a href="#tickets">Tickets</a></li>
                            <li><a href="#">Stopovers</a></li>
                            <li><a href="#">Fares, Taxes, Fees and Charges</a></li>
                            <li><a href="#">Reservations</a></li>
                            <li><a href="#">Check-In and Boarding</a></li>
                            <li><a href="#">Refusal Of and Limitation on Carriage</a></li>
                            <li><a href="#">Baggage</a></li>
                            <li><a href="#">Schedules, Cancellation of Flights</a></li>
                            <li><a href="#">Refunds</a></li>
                            <li><a href="#">Conduct aboard Aircraft</a></li>
                            <li><a href="#">Arrangements for Additional Services</a></li>
                            <li><a href="#">Administrative Formalities</a></li>
                            <li><a href="#">Successive Carriers</a></li>
                            <li><a href="#">Liability for Damage</a></li>
                            <li><a href="#">Time Limitation on Claims and Actions</a></li>
                            <li><a href="#">Modification and Waiver</a></li>
                            <li><a href="#">Other Conditions</a></li>
                            <li><a href="#">Interpretation</a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->
  
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('body').addClass('single-page');
    </script>
@endsection