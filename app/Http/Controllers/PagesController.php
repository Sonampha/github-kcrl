<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Destination;
use App\FlightRoute;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destination = Destination::All();
        return View('pages.index', ['destination' => $destination]);
    }

    public function About()
    {
        return View('pages.about');
    }

    public function TravelInfo()
    {
        return View('pages.travel-info');
    }

    public function InfoForInvestors()
    {
        return View('pages.information-for-investors');
    }

    public function WhyJoinUs()
    {
        return View('pages.why-join-us');
    }

    public function ExcessBaggage()
    {
        return View('pages.excess-baggage');
    }

    public function CheckedBaggage()
    {
        return View('pages.checked-baggage');
    }

    public function CarryOneBaggage()
    {
        return View('pages.carry-on-baggage');
    }

    public function RestrictedItems()
    {
        return View('pages.restricted-items');
    }

    public function CancelAndRefund()
    {
        return View('pages.cancellation-and-refund');
    }

    public function TaxesAndServicesFee()
    {
        return View('pages.taxes-and-services-fee');
    }
    
    public function faqs()
    {
        return View('pages.faqs');
    }

    public function TermsConditions()
    {
        return View('pages.terms-conditions.terms-and-conditions');
    }

    public function Expressions()
    {
        return View('pages.terms-conditions.particular-expressions');
    }

    public function Applicability()
    {
        return View('pages.terms-conditions.applicability');
    }

    public function Tickets()
    {
        return View('pages.terms-conditions.tickets');
    }

    public function SearchFlight(Request $req)
    {
/*         $url = "https://jsonplaceholder.typicode.com/posts";        
        $result = file_get_contents($url);
        // Will dump a beauty json :3
        $data = json_decode($result, true);

        foreach($data as $article) {
            echo $article['id'].' '.$article['title'].'<br>';        
        }
        exit; */

        $depart_point = $req->input('origin');
        $arrive_point = $req->input('destination');
        $flightroute = FlightRoute::where('depart_point',$depart_point)->where('arrive_point',$arrive_point)->get();
        return View('pages.search-flight', ['flightroute' => $flightroute]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
