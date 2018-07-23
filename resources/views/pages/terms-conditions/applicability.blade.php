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
                    <h3 align="center">Applicability</h3>
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
        </div>
    </section>
    <!--ABOUT AREA END-->
  
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('body').addClass('single-page');
    </script>
@endsection