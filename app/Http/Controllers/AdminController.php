<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Order;

use App\Models\Staff;

use App\Models\maintenance;

use App\Models\Booking;


use DB;

class AdminController extends Controller
{
    public function updatestaff()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                return view('admin.updatestaff');
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
        $staff=new Staff();
        $staff->staff_name = $request -> staff_name;
        $staff->staff_role = $request -> staff_role;
        $staff->staff_shift = $request -> staff_shift;
        $staff->staff_email = $request -> staff_email;

        $staff->save();

        return redirect()->back()->with('message', 'Staff added succesfully');
    }

    public function showstaff()
    {

        $staff=Staff::all();

        return view('admin.stafflist',compact('staff'));
    }

    public function changestaff($staff_id)
    {
        $data=staff::find($staff_id);

        return view('admin.changestaff', compact('data'));
    }

    public function deletestaff($staff_id)
    {
        $data=Staff::find($staff_id);
        $data->delete();
        return redirect()->back()->with('message', 'Staff Data Deleted');;

    }

    public function updatechangestaff(Request $request, $staff_id)
    {
        $data=Staff::find($staff_id);

        $data->staff_name = $request -> staff_name;
        $data->staff_role = $request -> staff_role;
        $data->staff_shift = $request -> staff_shift;
        $data->staff_email = $request -> staff_email;

        $data->save();

        return redirect()->back()->with('message', 'Staff Data updated succesfully');
    }
}
