<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rental_rooms;
use App\Models\log_books;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LandController extends Controller
{
   
    public function create_land(){
        return view('cr_new-land');
    }
    public function store_land(Request $request)
    {          
        $type = "Land";  
        $mohoda = $request ->input('mohoda_width');
        $pichhad = $request ->input('pichhad_length');
        $size = $mohoda ." * ". $pichhad;
            $query = rental_rooms::create([
            'created_by'=> Auth::user()->name,
            'type'=> $type,
            'size'=> $size,
            'mohoda_width'=> $request->input('mohoda_width'),
            'mohoda_faced_direction'=> $request->input('mohoda_faced'),
            'pichhad_length'=> $request->input('pichhad_length'),
            'price'=> $request->input('price'),
            'road_penetration'=> $request->input('road_penetration'),
            'area_name'=> $request->input('area_name'),
            // 'available_for'=> $request->input('available_for'),
            'road_penetration_type'=> $request->input('penetrated_road_type'),
            'road_width'=> $request->input('road_width'),
            'area_unit_daam'=> $request->input('daam'),
            'area_unit_paisa'=> $request->input('paisa'),
            'area_unit_aana'=> $request->input('aana'),
            'area_unit_ropani'=> $request->input('ropani'),
            'district'=> $request->input('district'),
            'city'=> $request->input('city'),
            'municipal'=> $request->input('municipal'),
            'ward_no'=> $request->input('ward_no'),
            'tole_name'=> $request->input('tole'),
            'nearby_hospital'=> $request->input('nearby_hospital'),
            'nearby_school'=> $request->input('nearby_school'),
            'nearby_relegious_place'=> $request->input('nearby_religious_place'),
            'nearby_highway_range'=> $request->input('nearby_highway_range'),
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
                            return redirect()->route('my-uploads') ->with('success', 'New land Has been Added to Rent Advertisement');
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

    
    public function view_land(){
        $rent_room_datas = rental_rooms::select("*")
        ->where("created_by",Auth::user()->name)
        ->where("type",'Land')
        ->orderBy('id', 'DESC')
        ->paginate(10);
        // dd($rent_room_datas);
        return view('cr_room-only')
        ->with(compact('rent_room_datas'));
    }
    public function update_land($id){
        if($id){
            $creator = rental_rooms::select("created_by", "type")->where("id",$id)->first();
            $type = $creator->type;
            if($type =='Land'){
                $name = Auth::user()->name;
                $creator_name = $creator->created_by;
                if($name == $creator_name){
                    $rent_land_datas = rental_rooms::findOrFail($id)
                    ->where('id', $id)
                    ->where("created_by", Auth::user()->name)
                    ->first();
                    return view('cr_edit-land')
                    ->with(compact('rent_land_datas'));
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


    public function update_land_data(Request $request){
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
                    if($type =='Land'){
                        $name = Auth::user()->name;
                        $creator_name = $creator->created_by;
                        if($name == $creator_name){

                            $mohoda = $request ->input('mohoda_width');
                            $pichhad = $request ->input('pichhad_length');
                            $size = $mohoda ." * ". $pichhad;

                            $update = DB::table('rental_rooms')
                            ->where('id', $id)
                            ->update([
                                'size'=> $size,
                                'mohoda_width'=> $request->input('mohoda_width'),
                                'mohoda_faced_direction'=> $request->input('mohoda_faced'),
                                'pichhad_length'=> $request->input('pichhad_length'),
                                'price'=> $request->input('price'),
                                'road_penetration'=> $request->input('road_penetration'),
                                'area_name'=> $request->input('area_name'),
                                // 'available_for'=> $request->input('available_for'),
                                'road_penetration_type'=> $request->input('penetrated_road_type'),
                                'road_width'=> $request->input('road_width'),
                                'area_unit_daam'=> $request->input('daam'),
                                'area_unit_paisa'=> $request->input('paisa'),
                                'area_unit_aana'=> $request->input('aana'),
                                'area_unit_ropani'=> $request->input('ropani'),
                                'district'=> $request->input('district'),
                                'city'=> $request->input('city'),
                                'municipal'=> $request->input('municipal'),
                                'ward_no'=> $request->input('ward_no'),
                                'tole_name'=> $request->input('tole'),
                                'nearby_hospital'=> $request->input('nearby_hospital'),
                                'nearby_school'=> $request->input('nearby_school'),
                                'nearby_relegious_place'=> $request->input('nearby_religious_place'),
                                'nearby_highway_range'=> $request->input('nearby_highway_range'),
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





    // public function update_land_data(Request $request){
    //     $id = $request ->input('id');
    //     if($id){
    //         $creator = rental_rooms::select("created_by", "type")->where("id",$id)->first();
    //         $type = $creator->type;
    //         if($type =='Land'){
    //             $name = Auth::user()->name;
    //             $creator_name = $creator->created_by;
    //             if($name == $creator_name){
    //                 $mohoda = $request ->input('mohoda_width');
    //                 $pichhad = $request ->input('pichhad_length');
    //                 $size = $mohoda ." * ". $pichhad;
    //                 $update = DB::table('rental_rooms')
    //                 ->where('id', $id)
    //                 ->update([
    //                     'size'=> $size,
    //                     'mohoda_width'=> $request->input('mohoda_width'),
    //                     'mohoda_faced_direction'=> $request->input('mohoda_faced'),
    //                     'pichhad_length'=> $request->input('pichhad_length'),
    //                     'price'=> $request->input('price'),
    //                     'road_penetration'=> $request->input('road_penetration'),
    //                     'area_name'=> $request->input('area_name'),
    //                     // 'available_for'=> $request->input('available_for'),
    //                     'road_penetration_type'=> $request->input('penetrated_road_type'),
    //                     'road_width'=> $request->input('road_width'),
    //                     'area_unit_daam'=> $request->input('daam'),
    //                     'area_unit_paisa'=> $request->input('paisa'),
    //                     'area_unit_aana'=> $request->input('aana'),
    //                     'area_unit_ropani'=> $request->input('ropani'),
    //                     'district'=> $request->input('district'),
    //                     'city'=> $request->input('city'),
    //                     'municipal'=> $request->input('municipal'),
    //                     'ward_no'=> $request->input('ward_no'),
    //                     'tole_name'=> $request->input('tole'),
    //                     'nearby_hospital'=> $request->input('nearby_hospital'),
    //                     'nearby_school'=> $request->input('nearby_school'),
    //                     'nearby_relegious_place'=> $request->input('nearby_religious_place'),
    //                     'nearby_highway_range'=> $request->input('nearby_highway_range'),
    //                     'photo_outside_room'=> $request->input('tole'),
    //                     'photo_inside_room'=> $request->input('tole'),
    //                     'photo_toilet_bathroom'=> $request->input('tole'),
    //                     'photo_anyother'=> $request->input('tole')

    //                 ]); 
    //                     if($update){
    //                         $action = "update";
    //                         $query = log_books::create([
    //                         'name'=> Auth::user()->name,
    //                         'email'=> Auth::user()->email,
    //                         'role' => $user_role,
    //                         'action' => $action,
    //                         'property_type'=> $type,
    //                         'property_id'=> $id
    //                         ]);
    //                         if($query){
    //                             return redirect()->route('my-uploads') ->with('success', 'Moved to trashed');
    //                         }else{
    //                             return redirect()->route('my-uploads') ->with('fail', 'Sorry items not moved to trashed');
    //                         }
                            
    //                     }else{
    //                         echo "Sorry cant";
    //                     }
    //                     return redirect()->route('my-uploads') ->with('success', 'Land has been Updated Roshan');
    //                 }else{
    //                     return redirect()->route('update_land') ->with('fail', 'Sorry, Something went wrong');
    //                 }
    //             }else{
    //                 echo "We are sorry this is against our updating policy. Only the content creator is able to edit/update and delete the post";
    //             }
    //         }else{
    //             echo"Sorry This is not  Land and You mistakenly Entered to Land";
    //         }
    //     }
     
    


