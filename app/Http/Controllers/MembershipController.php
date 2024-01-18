<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Order;

use App\Models\Staff;

use App\Models\maintenance;

use App\Models\equipment;

use App\Models\membership;

class MembershipController extends Controller
{
    public function updatemembership()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                return view('admin.updatemembership');
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
        $membership=new Membership();
        $membership->customer_name = $request -> customer_name;
        $membership->customer_email = $request -> customer_email;
        $membership->membership_level = $request -> membership_level;
        $membership->duration = $request -> duration;


        $membership->save();

        return redirect()->back()->with('message', 'membership added succesfully');
    }

    public function showmembership()
    {

        $membership=Membership::all();

        return view('admin.membershiplist',compact('membership'));
    }

    public function changemembership($membership_id)
    {
        $data=Membership::find($membership_id);

        return view('admin.changemembership', compact('data'));
    }

    public function deletemembership($membership_id)
    {
        $data=Membership::find($membership_id);
        $data->delete();
        return redirect()->back()->with('message', 'Membership Data Deleted');;

    }

    public function updatechangemembership(Request $request, $membership_id)
    {
        $data=Membership::find($membership_id);

        $data->customer_name = $request -> customer_name;
        $data->customer_email = $request -> customer_email;
        $data->membership_level = $request -> membership_level;
        $data->duration = $request -> duration;

        $data->save();

        return redirect()->back()->with('message', 'Membership Data Updated Succesfully');
    }
}
