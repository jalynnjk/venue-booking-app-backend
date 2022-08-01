<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AcceptedRequest;

class AcceptedRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acceptedrequests = AcceptedRequest::all();
        return response()->json($acceptedrequests);
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
            'client_name' => 'required',
            'client_email' => 'required',
            'wedding_date' => 'required',
            'number_guests' => 'required',
            'budget' => 'required',
            'ceremony_location' => 'required',
            'reception_location' => 'required',
        ]);
        try{
        $newAcceptedRequest = new AcceptedRequest([
            'client_name' => $request->get('client_name'),
            'client_email' => $request->get('client_email'),
            'wedding_date' => $request->get('wedding_date'),
            'number_guests' => $request->get('number_guests'),
            'budget' => $request->get('budget'),
        ]);
        $newAcceptedRequest->save();
        return response()->json($newAcceptedRequest);
    } catch(\Exception $e){
         \Log::error($e->getMessage());
            return response()->json([
                'message'=>'There was an error with accepting the booking.'
            ],500);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $acceptedrequest = AcceptedRequest::findOrFail($id);
        return response()->json($acceptedrequest);
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
        $acceptedrequest = AcceptedRequest::findOrFail($id);
         $request->validate([
            'client_name' => 'required|max:100',
            'client_email' => 'required|max:100',
            'wedding_date' => 'required',
            'number_guests' => 'required',
            'budget' => 'required',
        ]);
            $acceptedrequest->client_name = $request->get('client_name');
            $acceptedrequest->client_email = $request->get('client_email');
            $acceptedrequest->wedding_date = $request->get('wedding_date');
            $acceptedrequest->number_guests = $request->get('number_guests');
            $acceptedrequest->budget = $request->get('budget');
            
            $acceptedrequest->save();
            return response()->json($acceptedrequest);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acceptedrequest = AcceptedRequest::findOrFail($id);
        $acceptedrequest->delete();
        return response()->json($acceptedrequest::all());
    }
}
