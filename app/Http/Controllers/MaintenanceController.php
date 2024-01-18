<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Order;

use App\Models\Staff;

use App\Models\maintenance;

use App\Models\Booking;

class MaintenanceController extends Controller
{
    public function updatemaintenance()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                return view('admin.updatemaintenance');
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
        $maintenance=new Maintenance();
        $maintenance->facility_name = $request -> facility_name;
        $maintenance->facility_type = $request -> facility_type;
        $maintenance->facility_description = $request -> facility_description;
        $maintenance->facility_last_maintenance = $request -> facility_last_maintenance;
        $maintenance->maintenance_status = $request -> maintenance_status;


        $maintenance->save();

        return redirect()->back()->with('message', 'maintenance added succesfully');
    }

    public function showmaintenance()
    {

        $maintenance=Maintenance::all();

        return view('admin.maintenancelist',compact('maintenance'));
    }

    public function changemaintenance($facility_id)
    {
        $data=Maintenance::find($facility_id);

        return view('admin.changemaintenance', compact('data'));
    }

    public function deletemaintenance($facility_id)
    {
        $data=Maintenance::find($facility_id);
        $data->delete();
        return redirect()->back()->with('message', 'Maintenance Data Deleted');;

    }

    public function updatechangemaintenance(Request $request, $facility_id)
    {
        $data=Maintenance::find($facility_id);

        $data->facility_name = $request -> facility_name;
        $data->facility_type = $request -> facility_type;
        $data->facility_description = $request -> facility_description;
        $data->facility_last_maintenance = $request -> facility_last_maintenance;
        $data->maintenance_status = $request -> maintenance_status;

        $data->save();

        return redirect()->back()->with('message', 'Maintenance Data updated succesfully');
    }
}
