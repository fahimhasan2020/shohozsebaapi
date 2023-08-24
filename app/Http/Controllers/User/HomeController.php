<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BloodRequest;
use App\Model\Subscribers\Subscriber;

class HomeController extends Controller
{
    public function bloodRequest(Request $request)
{
    $data = $request->all();
    $request->validate([
        'userId'=>'required',
        'group'=>'required',
        'phone'=>'required',
        'lat'=>'required',
        'lng'=>'required',
        'location_details'=>'required',
        'donation_time'=>'required',
    ]);
    
    try {
        BloodRequest::create($request->all());
        $subscribers = Subscriber::select('id', 'first_name', 'last_name', 'phone_number', 'lat', 'lng', 'blood_group')
            ->where('blood_group', $request->group)
            ->whereRaw('(6371 * ACOS(COS(RADIANS(?)) * COS(RADIANS(lat)) * COS(RADIANS(lng) - RADIANS(?)) + SIN(RADIANS(?)) * SIN(RADIANS(lat)))) <= ?', [$request->lat, $request->lng, $request->lat, 3])
            ->get();

        return response()->json(["success" => "Request Submitted", "status" => 1, "subscribers" => $subscribers]);
    } catch(Exception $error) {
        return response()->json(["error" => "Failed to blood request", "status" => 0]);
    }
}

public function nearerBloodRequest(Request $request )
{
    $request->validate([
        'userId'=>'required',
        'lat'=>'required',
        'lng'=>'required',
    ]);

    try {
        
        $bloodRequest = BloodRequest::select("group","active","userId","donorId","donorName","purchagable","userName","phone","lat","lng","location_details","donation_time","push_token","details","donor_lat","donor_lng")
            ->where('active',1)
            ->whereRaw('(6371 * ACOS(COS(RADIANS(?)) * COS(RADIANS(lat)) * COS(RADIANS(lng) - RADIANS(?)) + SIN(RADIANS(?)) * SIN(RADIANS(lat)))) <= ?', [$request->lat, $request->lng, $request->lat, 3])
            ->get();

        return response()->json(["success" => "Found", "status" => 1, "bloodRequest" => $bloodRequest]);
    } catch(Exception $error) {
        return response()->json(["error" => "Failed to load blood request", "status" => 0]);
    }



    
}

}
