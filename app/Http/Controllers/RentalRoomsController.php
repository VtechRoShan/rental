<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rental_rooms;
use App\Models\log_books;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Traits\log_book;

class RentalRoomsController extends Controller
{
    public function create( Request $request){
        $rent_room_datas = rental_rooms::select("*")
        ->where("created_by",Auth::user()->name)
        ->orderBy('id', 'DESC')
        ->paginate(20);

        return view('cr_my-uploads')
        ->with(compact('rent_room_datas'));

    }
    public function create_room(){
        return view('cr_new-room');
    }
    public function store_room(Request $request)
    {
        $type = "Room";   
            $query = rental_rooms::create([
            'created_by'=> Auth::user()->name,
            'type' => $type,
            'area_name'=> $request->input('area_name'),
            'size'=> $request->input('size'),
            'price'=> $request->input('price'),
            'floor'=> $request->input('floor'),
            'parking'=> $request->input('parking'),
            'available_for'=> $request->input('available_for'),
            'toilet_bathroom'=> $request->input('toilet_bathroom'),
            'kitchen'=> $request->input('kitchen'),
            'state'=> $request->input('state'),
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
            'photo_anyother'=> $request->input('tole'),
            'config_balcony'=> $request->input('balcony'),
            'config_window_no'=> $request->input('window_no'),
            'config_electricity_water_charges'=> $request->input('elex_water')
            ]);
            $id = DB::getPdo()->lastInsertId();
            // dd($id);
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
                            return redirect()->route('my-uploads') ->with('success', 'New Room Has been Added to Rent Advertisement');
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
    public function view_room(){
        $rent_room_datas = rental_rooms::select("*")
        ->where("created_by",Auth::user()->name)
        ->where("type",'Room')
        ->orderBy('id', 'DESC')
        ->paginate(10);
        // dd($rent_room_datas);
        return view('cr_room-only')
        ->with(compact('rent_room_datas'));
    }

    public function update_room($id){
        if($id){
            $creator = rental_rooms::select("created_by", "type")->where("id",$id)->first();
            $type = $creator->type;
            if($type =='Room'){
                $name = Auth::user()->name;
                $creator_name = $creator->created_by;
                if($name == $creator_name){
                    $rent_room_datas = rental_rooms::findOrFail($id)
                    ->where('id', $id)
                    ->where("created_by", Auth::user()->name)
                    ->first();
                    return view('cr_edit-room')
                    ->with(compact('rent_room_datas'));
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
    public function update_room_data(Request $request){
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
                    if($type =='Room'){
                        $name = Auth::user()->name;
                        $creator_name = $creator->created_by;
                        if($name == $creator_name){
                            $update = DB::table('rental_rooms')
                            ->where('id', $id)
                            ->update([
                                'area_name'=> $request->input('area_name'),
                                'size'=> $request->input('size'),
                                'price'=> $request->input('price'),
                                'floor'=> $request->input('floor'),
                                'parking'=> $request->input('parking'),
                                'available_for'=> $request->input('available_for'),
                                'toilet_bathroom'=> $request->input('toilet_bathroom'),
                                'kitchen'=> $request->input('kitchen'),
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
                                'photo_anyother'=> $request->input('tole'),
                                'config_balcony'=> $request->input('balcony'),
                                'config_window_no'=> $request->input('window_no'),
                                'config_electricity_water_charges'=> $request->input('elex_water')
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
                        echo"Sorry This is not  Room and You mistakenly Entered to Room";
                    }

                }else{
                     echo " Sorry Undefined User Role assigned";
                }
        }else{
            echo "No ID  has been passed ";
        }
    }

     use Traits\log_book;
 
    public function trash()
    { 
            $rent_room_datas = rental_rooms::onlyTrashed()->get();
            $rent_room_datas = compact('rent_room_datas');
            return view('cr_trash') ->with($rent_room_datas);
    }
    public function restore($id){
        if(isset($id)){
            // $from_id = rental_rooms::select("created_by", "type","id")->where("id",$id)->where("created_by",Auth::user()->name)->first();
            // $type = $from_id ->type; 
            $name =Auth::user()->name;
            $users = DB::select("select type from rental_rooms where (id = '$id' and  created_by = '$name')");
            $type = $users[0] ->type;
            if($type){
                    if(Auth::user()->hasRole('user')){
                        $user_role = 'user';
                    }elseif(Auth::user()->hasRole('creator')){
                        $user_role = 'creator';
                    }elseif(Auth::user()->hasRole('admin')){
                        $user_role = 'admin';
                    }
                    if(isset($user_role)){
                        $rent_room_datas = rental_rooms::withTrashed()->find($id);
                        if(isset($rent_room_datas)){
                            $Q_restore = $rent_room_datas ->restore();
                            if($Q_restore){
                                $action = "restore";
                                $query = log_books::create([
                                    'name'=> Auth::user()->name,
                                    'email'=> Auth::user()->email,
                                    'role' => $user_role,
                                    'action' => $action,
                                    'property_type'=> $type,
                                    'property_id'=> $id
                                    ]);
                                    if($query){
                                        return redirect()->route('my-uploads') ->with('success', 'Data has been Recovered from trash');
                                    }else{
                                        return redirect()->route('my-uploads') ->with('fail', 'Sorry items not moved to trashed');
                                    }
                            }else{
                                echo "sorry can't restore Something Went Wrong";
                            }
                        }
                    }else{
                        echo " Sorry Undefined User Role assigned";
                    }
            }else{
                echo"illegal user try to delete  ";
            }
        }
        else{
            echo"ID not passed  ";
        }
    }
    public function destroy($id)
    { 
        if(isset($id)){
            // $from_id = rental_rooms::select("created_by", "type","id")->where("id",$id)->where("created_by",Auth::user()->name)->first();
            // $type = $from_id ->type; 
            $name =Auth::user()->name;
            $users = DB::select("select type from rental_rooms where (id = '$id' and  created_by = '$name')");
            $type = $users[0] ->type;
            if($type){
                    if(Auth::user()->hasRole('user')){
                        $user_role = 'user';
                    }elseif(Auth::user()->hasRole('creator')){
                        $user_role = 'creator';
                    }elseif(Auth::user()->hasRole('admin')){
                        $user_role = 'admin';
                    }
                    if(isset($user_role)){
                        $rent_room_datas = rental_rooms::find($id);
                        $Q_trash = $rent_room_datas ->delete(); //Q_trash => query trash
                        if($Q_trash){
                            $action = "trashed";
                            $query = log_books::create([
                                'name'=> Auth::user()->name,
                                'email'=> Auth::user()->email,
                                'role' => $user_role,
                                'action' => $action,
                                'property_type'=> $type,
                                'property_id'=> $id
                                ]);
                                if($query){
                                    return redirect()->route('my-uploads') ->with('success', 'Moved to trashed');
                                }else{
                                    return redirect()->route('my-uploads') ->with('fail', 'Sorry items not moved to trashed');
                                }
                        }else{
                            echo"Sorry can't ";
                        }
                    }else{
                        echo " Sorry Undefined User Role assigned";
                    }
            }else{
                echo"illegal user try to delete  ";
            }
        }
        else{
            echo"ID not passed  ";
        }
    }
    public function forcedelete($id)
    { 
        if(isset($id)){
            $name =Auth::user()->name;
            $users = DB::select("select type from rental_rooms where (id = '$id' and  created_by = '$name')");
            $type = $users[0] ->type;
            // $from_id_down = rental_rooms::select("*")->where("id",$id)->where("created_by",Auth::user()->name)->get();
            // $type = $from_id_down->created_at; 
            // dont forget to ask this to sabin dai
            // echo $type;
            if(isset($type)){
                    if(Auth::user()->hasRole('user')){
                        $user_role = 'user';
                    }elseif(Auth::user()->hasRole('creator')){
                        $user_role = 'creator';
                    }elseif(Auth::user()->hasRole('admin')){
                        $user_role = 'admin';
                    }
                    if(isset($user_role)){
                        $rent_room_datas = rental_rooms::withTrashed()->find($id);
                        if(!is_null($rent_room_datas)){
                            $Q_force_delete =   $rent_room_datas ->forceDelete();
                        }
                        if($Q_force_delete){
                            $action = "deleted";
                            $query = log_books::create([
                                'name'=> Auth::user()->name,
                                'email'=> Auth::user()->email,
                                'role' => $user_role,
                                'action' => $action,
                                'property_type'=> $type,
                                'property_id'=> $id
                                ]);
                                if($query){
                                    return redirect()->route('trash_upload') ->with('deleted', 'Data has been deleted Permenantly');
                                }else{
                                    return redirect()->route('my-uploads') ->with('fail', 'Sorry items not moved to trashed');
                                }
                        }else{
                            echo"Sorry can't";
                        }
                    }else{
                        echo "Sorry Undefined User Role assigned";
                    }
            }else{
                echo"illegal user try to delete";
            }
        }
        else{
            echo"ID not passed";
        }
    }
}