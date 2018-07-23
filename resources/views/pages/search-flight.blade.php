@extends('layouts.master-secondary')

@section('header', 'Search Flight')
@section('title', 'Search Flight')

@section('content')
<link rel="stylesheet" href="css/flight-table.css">
    <!--SERVICE AREA-->
    <section class="service-area-three section-padding">
        <div class="container">            
            <table class="responsive-table">
                <caption>Your Search Result</caption>
                <thead>                
                <tr>
                    <th scope="col">Flight Code</th>
                    <th scope="col" colspan="2">Route</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">Day of Week</th>
                    <th scope="col">A/C Type</th>
                </tr>                
                </thead>
                <tbody>
                @foreach($flightroute as $route)
                <tr>
                    <th scope="row">{{ $route->flight_code }}</th>
                    <td data-title="Departure">{{ $route->depart_point }}</td>
                    <td data-title="Arrival">{{ $route->arrive_point }}</td>
                    <td data-title="Departure Time" data-type="currency">{{ $route->depart_time }}</td>
                    <td data-title="Arrival Time" data-type="currency">{{ $route->arrive_time }}</td>
                    <td data-title="Day of Week" data-type="currency">{{ $route->day_of_week }}</td>
                    <td data-title="A/C Type" data-type="currency">{{ $route->aircraft_type }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <!--SERVICE AREA END-->

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('body').addClass('single-page');
    </script>
@endsection