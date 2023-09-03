<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Medicine;
use App\Model\MedicineOrder;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;
use DB;

class MedicineController extends Controller
{
    public function medicineList(){
        $meds = DB::table('medicine')->paginate(10);
        return Inertia::render('Shop/Medicine/Medicines',
        [
            'medicines'=>$meds
        ]
    
    );   
    }
    public function medicineOrderList(){
        $meds = DB::table('medicine_order')->paginate(10);
        return Inertia::render('Shop/Medicine/Orders',
        [
            'orders'=>$meds
        ]
    
    );   
    }
    public function medicineInvoiceList(){
        $meds = DB::table('medicine_invoice')->paginate(10);
        return Inertia::render('Shop/Medicine/Invoice',
        [
            'invoice'=>$meds
        ]);  
    }
    public function postMedicine(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'type' => 'required|string',
            'description' => 'nullable|string',
            'weight' => 'required|numeric',
            'unit_price' => 'required|numeric',
            'stock' => 'required|numeric',
            'unit_value' => 'required|numeric',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('public/images'), $imageName);
            $validatedData['picture'] = URL::to('/') . '/public/images/' . $imageName;
        }
        $medicine = new Medicine($validatedData);
        $medicine->save();
        return redirect()->back()->with('success', 'Medicine created successfully');
    }

    public function deleteMedicine($id){
        $persistenses = DB::table('medicine')
                    ->where('id',$id)
                    ->delete();
                return redirect()->back()->with('success','Medicine Deleted');
    }

    public function medicineSort(Request $request){
        $per = Medicine::select('id','name','brand','type','description','picture','weight','unit_price','stock','unit_value');
        if ($request->orderBy === 'Newest'){
            $per->orderBy('id','desc');
        }elseif ($request->orderBy === 'Name'){
            $per->orderBy('name','asc');
        }else{
            $per->orderBy('id','asc');
        }
        $search_input = $request->input('search');
        if ($search_input) {
            $per->where(function($per) use ($search_input) {
                $per->where('name', 'like', '%' . $search_input . '%');
            });
        }
        $permissions = $per->paginate($request->perPage);
        return $permissions;
    }

    public function medicineEdit(Request $request){
        $medicine = Medicine::find($request->id);
        if($request->input('name')){
            $medicine->name = $request->name;
        }
        if($request->input('brand')){
            $medicine->brand = $request->brand;
        }
        if($request->input('type')){
            $medicine->type = $request->type;
        }
        if($request->input('description')){
            $medicine->description = $request->description;
        }
        if($request->input('weight')){
            $medicine->weight = $request->weight;
        }
        if($request->input('unitPrice')){
            $medicine->unit_price = $request->unitPrice;
        }
        if($request->input('stock')){
            $medicine->stock = $request->stock;
        }
        if($request->input('unitValue')){
            $medicine->unit_value = $request->unitValue;
        }
        $medicine->update();
        return redirect()->back()->with('success', 'Medicine created successfully');
    }

    public function editDeliveryById(Request $request){
        $order = MedicineOrder::find($request->id);
        $order->status = $request->value;
        return redirect()->back()->with('success', 'Order updated successfully');
    }
}
