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

}
