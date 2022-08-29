<?php

namespace App\Http\Controllers\userview;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userview\BookingModel;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
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
    public function bookingstore(Request $request)
    {


        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'contact' => 'required',
                  'adult' => 'required',
                   'child' => 'required',
                'interst' => 'required',
                'date' => 'required',
                'message' => 'required',


            ]
        );
        //    echo "<pre>";
        //    print_r($request->all());
        // Insert Query in Laravel...
        // p($request->all());
        // die;
        // dd('stop');
        $bookingmodel = new BookingModel();
        $bookingmodel->name = $request['name'];
        $bookingmodel->email = $request['email'];
        $bookingmodel->contact = $request['contact'];
        $bookingmodel->adult = $request['adult'];
        $bookingmodel->child = $request['child'];
        $bookingmodel->interst = $request['interst'];
        $bookingmodel->date = $request['date'];
        $bookingmodel->message = $request['message'];

        $bookingmodel->save();
        return redirect()->back();
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
