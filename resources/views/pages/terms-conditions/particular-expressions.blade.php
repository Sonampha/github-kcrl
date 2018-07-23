@extends('layouts.master-tertiary')

@section('title', 'What Particular Expressions Mean In These Conditions')
@section('header', 'Particular Expressions')

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
                    <h3 align="center">What Particular Expressions Mean In These Conditions</h3>
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
        </div>
    </section>
    <!--ABOUT AREA END-->
  
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('body').addClass('single-page');
    </script>
@endsection