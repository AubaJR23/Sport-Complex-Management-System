<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Order;

use App\Models\Staff;

use App\Models\maintenance;

use App\Models\equipment;

class EquipmentController extends Controller
{
    public function updateequipment()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                return view('admin.updateequipment');
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
        $equipment=new Equipment();
        $equipment->equipment_name = $request -> equipment_name;
        $equipment->equipment_quantity = $request -> equipment_quantity;
        $equipment->equipment_last_maintenance = $request -> equipment_last_maintenance;


        $equipment->save();

        return redirect()->back()->with('message', 'equipment added succesfully');
    }

    public function showequipment()
    {

        $equipment=Equipment::all();

        return view('admin.equipmentlist',compact('equipment'));
    }

    public function changeequipment($equipment_id)
    {
        $data=Equipment::find($equipment_id);

        return view('admin.changeequipment', compact('data'));
    }

    public function deleteequipment($equipment_id)
    {
        $data=Equipment::find($equipment_id);
        $data->delete();
        return redirect()->back()->with('message', 'Equipment Data Deleted');;

    }

    public function updatechangeequipment(Request $request, $equipment_id)
    {
        $data=Equipment::find($equipment_id);

        $data->equipment_name = $request -> equipment_name;
        $data->equipment_quantity = $request -> equipment_quantity;
        $data->equipment_last_maintenance = $request -> equipment_last_maintenance;

        $data->save();

        return redirect()->back()->with('message', 'Equipment Data updated succesfully');
    }
}
