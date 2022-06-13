<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Reservation::all();
        // dd($data);
        return view('admin.reservation.index', ['data'=>$data]);
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
        $data = Reservation::find($id);
        $data->save();
        return view('admin.reservation.show', ['data'=>$data]);
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
        $data = Reservation::find($id);
        $data->status = $request->status;
        $data->save();
        return redirect(route('admin.reservation.show', ['id'=>$id]));
    }

    // public function up()
    // {
    //     Schema::create('reservations', function (Blueprint $table) {
    //         $table->id()->autoIncrement();
    //         $table->integer('user_id');
    //         $table->integer('package_id');
    //         $table->string('startdate');
    //         $table->integer('person');
    //         $table->integer('price');
    //         $table->float('amount');
    //         $table->integer('ip', 150)->nullable();
    //         $table->string('note', 20);
    //         $table->string('status', 30)->default('New');
    //         $table->timestamps();
    //     });
    // }

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
