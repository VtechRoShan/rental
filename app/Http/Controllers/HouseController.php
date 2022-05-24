<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rental_rooms;
use App\Models\log_books;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class HouseController extends Controller
{
    public function create_house(){
        return view('cr_new-house');
    }
    public function store_house(Request $request)
    {          
        $type = "House";  
        $mohoda = $request ->input('mohoda_width');
        $pichhad = $request ->input('pichhad_length');
        $size = $mohoda ." * ". $pichhad;
        $house_mohoda = $request ->input('mohoda_width');
        $house_pichhad = $request ->input('pichhad_length');
        $area_of_building = $house_mohoda ." * ". $house_pichhad;
        $query = rental_rooms::create([
        'created_by'=> Auth::user()->name,
        'type'=> $type,
        'size'=> $size,
        // house Description
        'price'=> $request->input('price'),
        'num_bed_room'=> $request->input('bedroom'),
        'num_living_room'=> $request->input('living_room'),
        'num_kitchen'=> $request->input('kitchen'),
        'floor'=> $request->input('floor'),
        'num_bathroom'=> $request->input('bathroom'),
        'num_toilet'=> $request->input('toilet'),

        'house_type'=> $request->input('house_type'),
        'parking'=> $request->input('parking'),
        'balcony'=> $request->input('balcony'),
        'built_year'=> $request->input('built_year'),
        'house_mohoda'=> $request->input('house_mohoda'),
        'house_pichhad'=> $request->input('house_pichhad'),

        'finishing'=> $request->input('finishing'),
        'Furnihsing'=> $request->input('furnishing'),
        'area_of_building'=> $area_of_building,

        'mohoda_width'=> $request->input('mohoda_width'),
        'mohoda_faced_direction'=> $request->input('mohoda_faced'),
        'pichhad_length'=> $request->input('pichhad_length'),

        'area_name'=> $request->input('area_name'),
        'road_penetration'=> $request->input('road_penetration'),
        'road_penetration_type'=> $request->input('penetrated_road_type'),
        'road_width'=> $request->input('road_width'),
        'area_unit_daam'=> $request->input('daam'),
        'area_unit_paisa'=> $request->input('paisa'),
        'area_unit_aana'=> $request->input('aana'),
        'area_unit_ropani'=> $request->input('ropani'),
        //Address
        'district'=> $request->input('district'),
        'city'=> $request->input('city'),
        'municipal'=> $request->input('municipal'),
        'ward_no'=> $request->input('ward_no'),
        'tole_name'=> $request->input('tole'),
        'street_no'=> $request->input('street'),
        'google_map_location'=> $request->input('google_map_location'),
        //Nearby places
        'nearby_hospital'=> $request->input('nearby_hospital'),
        'nearby_school'=> $request->input('nearby_school'),
        'nearby_relegious_place'=> $request->input('nearby_religious_place'),
        'nearby_highway_range'=> $request->input('nearby_highway_range'),
        //for photos
        'photo_outside_room'=> $request->input('tole'),
        'photo_inside_room'=> $request->input('tole'),
        'photo_toilet_bathroom'=> $request->input('tole'),
        'photo_anyother'=> $request->input('tole')
        ]);
        $id = DB::getPdo()->lastInsertId();
        if($query){
            if(Auth::user()->hasRole('user')){
                $user_role = 'user';
            }elseif(Auth::user()->hasRole('creator')){
                $user_role = 'creator';
            }elseif(Auth::user()->hasRole('admin')){
                $user_role = 'admin';
            }
            if(isset($user_role)){
                $action = "create";
                $query = log_books::create([
                    'name'=> Auth::user()->name,
                    'email'=> Auth::user()->email,
                    'role' => $user_role,
                    'action' => $action,
                    'property_type'=> $type,
                    'property_id'=> $id
                    ]);
                    if($query){
                        return redirect()->route('my-uploads') ->with('success', 'New House Has been Added to Rent Advertisement');
                    }else{
                        return redirect()->route('my-uploads') ->with('fail', 'Sorry cannot keep the record of the transcation');
                    }
            }else{
                return redirect()->route('my-uploads') ->with('fail', 'Sorry cannot keep the record of the transcation due to undefined role');
            }
        }else{
            return redirect()->route('new-upload') ->with('fail', 'Sorry Your Data hasnot been uploaded');
        }
    }

    public function view_house(){

        $rent_house_datas = rental_rooms::select("*")
        ->where("created_by",Auth::user()->name)
        ->where("type",'House')
        ->orderBy('id', 'DESC')
        ->paginate(10);
        // dd($rent_room_datas);
        return view('cr_house-only')
        ->with(compact('rent_house_datas'));
    }
    public function update_house($id){
        if($id){
            $creator = rental_rooms::select("created_by", "type")->where("id",$id)->first();
            $type = $creator->type;
            if($type =='House'){
                $name = Auth::user()->name;
                $creator_name = $creator->created_by;
                if($name == $creator_name){
                    $rent_house_datas = rental_rooms::findOrFail($id)
                    ->where('id', $id)
                    ->where("created_by", Auth::user()->name)
                    ->first();
                    return view('cr_edit-house')
                    ->with(compact('rent_house_datas'));
                }else{
                echo "We are sorry this is against our updating policy. Only the content creator is able to edit/update and delete the post";
                }
            }else{
            echo"Sorry This is not  Room and You mistakenly Entered to Room";
            }
        }else{
        echo "No ID  has been passed ";
        }
    }
    public function update_house_data(Request $request){

        $id = $request ->input('id');
        if($id){
            if(Auth::user()->hasRole('user')){
                $user_role = 'user';
            }elseif(Auth::user()->hasRole('creator')){
                $user_role = 'creator';
            }elseif(Auth::user()->hasRole('admin')){
                $user_role = 'admin';
            }
            if(isset($user_role)){
                    $creator = rental_rooms::select("created_by", "type")->where("id",$id)->first();
                    $type = $creator->type;
                    if($type =='House'){
                        $name = Auth::user()->name;
                        $creator_name = $creator->created_by;
                        if($name == $creator_name){

                            $mohoda = $request ->input('mohoda_width');
                            $pichhad = $request ->input('pichhad_length');
                            $size = $mohoda ." * ". $pichhad;
                            $house_mohoda = $request ->input('mohoda_width');
                            $house_pichhad = $request ->input('pichhad_length');
                            $area_of_building = $house_mohoda ." * ". $house_pichhad;
                            $update = DB::table('rental_rooms')
                            ->where('id', $id)
                            ->update([
                                'size'=> $size,
                                // house Description
                                'price'=> $request->input('price'),
                                'num_bed_room'=> $request->input('bedroom'),
                                'num_living_room'=> $request->input('living_room'),
                                'num_kitchen'=> $request->input('kitchen'),
                                'floor'=> $request->input('floor'),
                                'num_bathroom'=> $request->input('bathroom'),
                                'num_toilet'=> $request->input('toilet'),
                    
                                'house_type'=> $request->input('house_type'),
                                'parking'=> $request->input('parking'),
                                'balcony'=> $request->input('balcony'),
                                'built_year'=> $request->input('built_year'),
                                'house_mohoda'=> $request->input('house_mohoda'),
                                'house_pichhad'=> $request->input('house_pichhad'),
                    
                                'finishing'=> $request->input('finishing'),
                                'Furnihsing'=> $request->input('furnishing'),
                                'area_of_building'=> $area_of_building,
                    
                                'mohoda_width'=> $request->input('mohoda_width'),
                                'mohoda_faced_direction'=> $request->input('mohoda_faced'),
                                'pichhad_length'=> $request->input('pichhad_length'),
                    
                                'area_name'=> $request->input('area_name'),
                                'road_penetration'=> $request->input('road_penetration'),
                                'road_penetration_type'=> $request->input('penetrated_road_type'),
                                'road_width'=> $request->input('road_width'),
                                'area_unit_daam'=> $request->input('daam'),
                                'area_unit_paisa'=> $request->input('paisa'),
                                'area_unit_aana'=> $request->input('aana'),
                                'area_unit_ropani'=> $request->input('ropani'),
                                //Address
                                'district'=> $request->input('district'),
                                'city'=> $request->input('city'),
                                'municipal'=> $request->input('municipal'),
                                'ward_no'=> $request->input('ward_no'),
                                'tole_name'=> $request->input('tole'),
                                'street_no'=> $request->input('street'),
                                'google_map_location'=> $request->input('google_map_location'),
                                //Nearby places
                                'nearby_hospital'=> $request->input('nearby_hospital'),
                                'nearby_school'=> $request->input('nearby_school'),
                                'nearby_relegious_place'=> $request->input('nearby_religious_place'),
                                'nearby_highway_range'=> $request->input('nearby_highway_range'),
                                //for photos
                                'photo_outside_room'=> $request->input('tole'),
                                'photo_inside_room'=> $request->input('tole'),
                                'photo_toilet_bathroom'=> $request->input('tole'),
                                'photo_anyother'=> $request->input('tole')
        
                            ]);
                            if($update){
                                $action = "update";
                                $query = log_books::create([
                                    'name'=> Auth::user()->name,
                                    'email'=> Auth::user()->email,
                                    'role' => $user_role,
                                    'action' => $action,
                                    'property_type'=> $type,
                                    'property_id'=> $id
                                    ]);
                                    if($query){
                                        return redirect()->route('my-uploads') ->with('success', 'Room has been Updated');
                                    }else{
                                        return redirect()->route('my-uploads') ->with('fail', 'Sorry items not moved to trashed');
                                    }
                            }else{
                                return redirect()->route('update_room') ->with('fail', 'Sorry Your Data hasnot been uploaded');
                            }
                        }else{
                            echo "We are sorry this is against our updating policy. Only the content creator is able to edit/update and delete the post";
                        }
                    }else{
                        echo"Sorry This is not  Land and You mistakenly Entered to Land";
                    }

                }else{
                     echo " Sorry Undefined User Role assigned";
                }
        }else{
            echo "No ID  has been passed ";
        }
    }
}
