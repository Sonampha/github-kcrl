@extends('layouts.master-tertiary')

@section('title', 'Cancellation and Refund')

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
                    <div class="relate-link"><a href="/">Home</a> >> <a href="/travel-info">Travel Info</a> >> <a href="/travel-info/charges-and-changes">Charges and Changes</a> >> Cancellation and Refund</div>
                    <div class="area-title wow fadeIn">
                        <h3 align="center">Cancellation and Refund</h3><br>

                    <table class="responsive-table">   
                        <tbody>
                        <tr>
                            <th>1. REFUNDS</th>
                        </tr>
                        <tr>
                            <td>
                                <p>Unless otherwise stated in these conditions, fare rules or tariff or in accordance with applicable law, 
                                tickets are non-refundable. We will refund a Ticket or any unused portion, as set out below:</p>
                                <p>1.1 Except as otherwise provided in this Article, we shall be entitled to make refund either to the person named in 
                                the Ticket, or to the person who has paid for the Ticket upon presentation of satisfactory proof of such payment.</p>
                                <p>1.2 If a Ticket has been paid for by a person other than the Passenger named in the Ticket, and the Ticket 
                                indicates that there is a restriction on refund, we shall make a refund only to the person who paid for the Ticket, or 
                                to that person's order.</p>
                                <p>1.3 Regarding paper ticket, except in the case of lost Tickets, refunds will only be made on surrender to us of 
                                the Ticket and all unused Flight Coupons.</p>
                                <p>1.4 Regarding paper ticket, a refund made to anyone presenting the Passenger Coupon or Passenger Receipt and 
                                all unused Flight Coupons and holding himself or herself out as a person to whom refund may be made pursuant to 
                                2.1 or 2.2 shall be deemed a proper refund and shall discharge us from liability and any further claim for refund from 
                                you or from anyone else.</p>
                            </td>
                        </tr>
                        <tr>
                            <th>2. INVOLUNTARY REFUNDS</th>
                        </tr>
                        <tr>
                            <td>
                                <p>If we cancel a flight, fail to operate a flight reasonably according to schedule, fail to stop at your final destination or 
                                Stopover, or cause you to miss a connecting flight on which you hold a reservation, the amount of the refund shall be:</p>
                                <p>2.1 If no portion of the Ticket has been used, an amount equal to the fare paid;</p>
                                <p>2.2 If a portion of the Ticket has been used, the refund will be not less than the difference between the fare paid 
                                and the applicable fare for travel between the points for which the Ticket has been used.</p>
                                <p>2.3 Upon acceptance of a refund by the Passenger on the purchase of a ticket under these circumstances, 
                                we shall be released from any further liability.</p>
                            </td>
                        </tr>
                        <tr>
                            <th>3. VOLUNTARY REFUNDS</th>
                        </tr>
                        <tr>
                            <td>
                                <p>If you are entitled to a refund of your Ticket for reasons other than those set out in 11.2, the amount of 
                                the refund shall be:</p>
                                <p>3.1 if no portion of the Ticket has been used, an amount equal to the fare paid, less any reasonable service charges or 
                                cancellation fees;</p>
                                <p>3.2 If a portion of the Ticket has been used, the refund will be an amount equal to the difference between the fare paid 
                                and the applicable fare for travel between the points for which the Ticket has been used, less any reasonable service charges 
                                or cancellation fees.</p>                                
                            </td>
                        </tr>

                        <tr>
                            <th>4. REFUND ON LOST TICKET</th>
                        </tr>
                        <tr>
                            <td>
                                <p>4.1 If you lose your Ticket or portion of it, upon furnishing us with satisfactory proof of the loss, and 
                                payment of a reasonable administration charge, refund will be made as soon as practicable after the expiry of 
                                the validity period of the Ticket, on condition:</p>
                                <p>4.1.1 that the lost Ticket, or portion of it, has not been used, previously refunded or replaced, 
                                (except where the use, refund or replacement by or to a third party resulted from our own negligence);</p>
                                <p>4.1.2 that the person to whom the refund is made undertakes, in such form as may be prescribed by us, to repay to us 
                                the amount refunded in the event of fraud and/or to the extent that the lost Ticket or portion of it is used by 
                                a third party (except where any fault or use by a third party resulted from our own negligence).</p>
                                <p>4.2	If we or our Authorized Agents lose the Ticket or portion of it, the loss shall be our responsibility.</p>
                            </td>
                        </tr>

                        <tr>
                            <th>5. RIGHT TO REFUSE REFUND</th>
                        </tr>
                        <tr>
                            <td>
                                <p>5.1 We may refuse a refund where application is made after the expiry of the validity of the Ticket.</p>
                                <p>5.2 We may refuse refund on a Ticket which has been presented to us, or to Government officials, as evidence of 
                                intention to depart from that country, unless you establish to our satisfaction that you have permission to remain in 
                                the country or that you will depart from that country by another Carrier or another means of transport.</p>
                                <p>5.3 We may refuse refund in the circumstances covered by Article 8.2 of these Conditions.</p>
                            </td>
                        </tr>
                        <tr>
                            <th>6. CURRENCY</th>
                        </tr>
                        <tr>
                            <td>
                                <p>We reserve the right to make a refund in the same manner and the same currency used to pay for the Ticket.</p>
                            </td>
                        </tr>
                        <tr>
                            <th>7. BY WHOM TICKET REFUNDABLE</th>
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

            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right">
                <div class="service-menu">
                    <h4>Charges and Changes</h4>
                    <ul>
                        <li><a href="/travel-info/charges-and-changes/cancellation-and-refund" class="active">Cancellation and Refund</a></li>
                        <li><a href="/travel-info/charges-and-changes/taxes-and-services-fee">Taxes and Services Fee</a></li>
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