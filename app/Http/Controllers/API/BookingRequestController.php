<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookingRequest;

class BookingRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookingrequests = BookingRequest::all();
        return response()->json($bookingrequests);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|max:100',
            'client_email' => 'required|max:100',
            'wedding_date' => 'required',
            'number_guests' => 'required',
            'budget' => 'required',
            'ceremony_location' => 'required',
            'reception_location' => 'required',
        ]);
        $newBookingRequest = new BookingRequest([
            'client_name' => $request->get('client_name'),
            'client_email' => $request->get('client_email'),
            'wedding_date' => $request->get('wedding_date'),
            'number_guests' => $request->get('number_guests'),
            'budget' => $request->get('budget'),
            'ceremony_location' => $request->get('ceremony_location'),
            'reception_location' => $request->get('reception_location'),
        ]);
        $newBookingRequest->save();
        return response()->json($newBookingRequest);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookingrequest = BookingRequest::findOrFail($id);
        return response()->json($bookingrequest);
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
        $bookingrequest = BookingRequest::findOrFail($id);
         $request->validate([
            'client_name' => 'required|max:100',
            'client_email' => 'required|max:100',
            'wedding_date' => 'required',
            'number_guests' => 'required',
            'budget' => 'required',
            'ceremony_location' => 'required',
            'reception_location' => 'required',
        ]);
            $bookingrequest->client_name = $request->get('client_name');
            $bookingrequest->client_email = $request->get('client_email');
            $bookingrequest->wedding_date = $request->get('wedding_date');
            $bookingrequest->number_guests = $request->get('number_guests');
            $bookingrequest->budget = $request->get('budget');
            $bookingrequest->ceremony_location = $request->get('ceremony_location');
            $bookingrequest->reception_location = $request->get('reception_location');
            
            $bookingrequest->save();
            return response()->json($bookingrequest);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookingrequest = BookingRequest::findOrFail($id);
        $bookingrequest->delete();

        return response()->json($bookingrequest::all());
    }
}
