<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Order;

use App\Models\Staff;

use App\Models\maintenance;

use App\Models\Booking;

class BookingController extends Controller
{
    public function updatebooking()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                return view('admin.updatebooking');
            }

            else
            {
                return redirect()->back();
            }

        }

        else
        {
            return redirect('login');
        }

    }

    public function store(Request $request)

    {
        $booking=new Booking();
        $booking->booking_customer = $request -> booking_customer;
        $booking->booking_facility = $request -> booking_facility;
        $booking->booking_start = $request -> booking_start;
        $booking->booking_end = $request -> booking_end;

        $booking->save();

        return redirect()->back()->with('message', 'Booking added succesfully');
    }

    public function showbooking()
    {

        $booking=Booking::all();

        return view('admin.bookinglist',compact('booking'));
    }

    public function changebooking($booking_id)
    {
        $data=booking::find($booking_id);

        return view('admin.changebooking', compact('data'));
    }

    public function deletebooking($booking_id)
    {
        $data=Booking::find($booking_id);
        $data->delete();
        return redirect()->back()->with('message', 'Booking Data Deleted');;

    }

    public function updatechangebooking(Request $request, $booking_id)
    {
        $data=Booking::find($booking_id);

        $booking->booking_customer = $request -> booking_customer;
        $booking->booking_facility = $request -> booking_facility;
        $booking->booking_start = $request -> booking_start;
        $booking->booking_end = $request -> booking_end;

        $data->save();

        return redirect()->back()->with('message', 'Booking Data updated succesfully');
    }
}
