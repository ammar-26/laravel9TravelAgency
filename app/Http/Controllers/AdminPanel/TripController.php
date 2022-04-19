<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = trip::all();
        return view('admin.trip.index', ['trip'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.trip.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //;
        //echo $request;
        $trip = new Trip();
        //$trip->parent_id = 0;
        $trip->title = $request->input('title');
        $trip->from = $request->input('from');
        $trip->to = $request->input('to');
        $trip->duration = $request->input('duration');
        $trip->description = $request->input('description');
        $image = $request->file;
        //$imagename = time().'.'.$image->getClientOriginalExtension();
        //$request->file->move('image',$imagename);
        //$trip->image = $imagename;
        if($request->file('image')){
            $data->image=$request->file('image')->store('image');
        }
        $trip->save();
        return redirect('admin/trip');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip, $id)
    {
        //
        
        $data = trip::find($id);
        return view('admin.trip.show', ['trip'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip, $id)
    {
        //
        $data = trip::find($id);
        return view('admin.trip.edit', ['trip'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip, $id)
    {
        //
        $trip = trip::find($id);
        $trip->title = $request->input('title');
        $trip->from = $request->input('from');
        $trip->to = $request->input('to');
        $trip->duration = $request->input('duration');
        $trip->description = $request->input('description');
        if($request->file('image')){
            $data->image=$request->file('image')->store('image');
        }
        $trip->save();
        return redirect('admin/trip');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip, $id)
    {
        //
        $data = trip::find($id);
        if($data->image && Storage::dist('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/trip');
    }
}
