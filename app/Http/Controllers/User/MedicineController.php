<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Medicine;
use App\Model\MedicineOrder;

class MedicineController extends Controller
{
    public function getRandomMedicine(){
        $medicines = Medicine::limit(10)->get();
        return $medicines;
    }

    public function searchMedicine($value){
        $medicines = Medicine::where('name', 'LIKE', '%' . $value . '%')->get();
        return $medicines;
    }
    public function getMedicineById($id){
        $medicines = Medicine::where('id', $id)->first();
        if($medicines){
            return $medicines;
        }
        return response()->json(['sorry'=>'No medicine found']);
    }
    public function postMedicineOrder(Request $request){
        $jsonData = $request->json()->all();
        $medicineOrder = new MedicineOrder([
            'user_name' => $jsonData['user_name'],
            'user_id' => $jsonData['user_id'],
            'cart' => $jsonData['cart'],
            'status' => 'pending',
            'total' => $jsonData['total'],
            'vat' => $jsonData['vat'],
            'full_total' => $jsonData['full_total'],
            'phone' => $jsonData['phone'],
            'email' => $jsonData['email'],
            'address' => $jsonData['address'],
        ]);
        $medicineOrder->save();
        return response()->json(['message' => 'Medicine order saved successfully'], 201);
    }
    public function getMedicineOrderByUserId($id){
        $order = MedicineOrder::where('user_id',$id)->get();
        return $order;
    }

}
