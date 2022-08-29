<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\userview\BookingModel;
use Illuminate\Http\Request;

class UserBookingController extends Controller
{
    public function index()
    {
        // dd('stop');
        $bookings = BookingModel::all();
        // dd($users);
        return view('admin.booking.all_booking', compact('bookings'));
    }

    public function userbookingedit($booking_id)
    {
        $booking = BookingModel::find($booking_id);
        return view('admin.booking.userbooking_edit', compact('booking'));
    }

    public function bookingupdate(Request $request, $booking_id)
    {

        $booking = BookingModel::find($booking_id);

        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->contact = $request->contact;
        $booking->adult = $request->adult;
        $booking->child = $request->child;
        $booking->interst = $request->interst;
        $booking->date = $request->date;
        $booking->message = $request->message;


        $booking->update();
        return redirect('admin/booking');
    }
    public function deletebooking($booking_id)
    {
        $booking= BookingModel::find($booking_id);
        $booking->delete();
        return redirect()->back();
    }
}
