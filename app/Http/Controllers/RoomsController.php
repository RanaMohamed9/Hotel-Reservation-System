<?php

namespace App\Http\Controllers;

use App\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          $rooms = Rooms::all();
        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store_data = $request->validate([
            'room_type' => 'required',
            'price' => 'required',
            'size' => 'required',
            'max_persons' => 'required',
            'view' => 'required',
            'bed' => 'required',
        ]);

        $rooms = Rooms::create($store_data);

        return redirect()->route('rooms.index')
                        ->with('success','Room created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     *

     *
     *
     */

public function show(Rooms $rooms)
{
    return view('rooms.show',compact('rooms'));
}


    /**
     *
     *
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rooms= Rooms::findorfail($id);
        return view('rooms.edit',compact('rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
      $updatedata = $request->validate([
            'room_type' => 'required',
            'price' => 'required',
            'size' => 'required',
            'max_persons' => 'required',
            'view' => 'required',
            'bed' => 'required',

        ]);
         Rooms::whereId($id)->update($updatedata);
              return redirect()->route('rooms.index')
                        ->with('success','Room updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $rooms = Rooms::findOrFail($id);
        $rooms->delete();

        return redirect()->route('rooms.index')
                        ->with('success','Room deleted successfully');
    }
}
