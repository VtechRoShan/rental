<?php

namespace App\Http\Controllers;
use App\Models\rental_rooms;
use App\Models\mycarts;
use App\Models\log_books;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserBaseController extends Controller
{
    public function view_rooms(){
        $datas = rental_rooms::select("*")
        ->where("type",'Room')
        ->orderBy('id', 'DESC')
        ->paginate(10);
        // dd($rent_room_datas);
        return view('Users.room')
        ->with(compact('datas'));
    }
    public function view_lands(){
        $datas = rental_rooms::select("*")
        ->where("type",'House')
        ->orderBy('id', 'DESC')
        ->paginate(10);
        // dd($rent_room_datas);
        return view('Users.room')
        ->with(compact('datas'));
    }
    public function view_houses(){
        $datas = rental_rooms::select("*")
        ->where("type",'House')
        ->orderBy('id', 'DESC')
        ->paginate(10);
        // dd($rent_room_datas);
        return view('Users.room')
        ->with(compact('datas'));
    }
    public function my_cart(){
        $name =Auth::user()->name;
        $email =Auth::user()->email;
        $data_carts = DB::select("select * from rental_rooms where id in (select id from mycarts where name = '$name' and email = '$email')");
        return view('Users.mycart')
        ->with(compact('data_carts'));
    }
    public function add_to_cart($id){
        if($id){ //property id
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
                    if($user_role =='user'){
                        $user_id = Auth::user()->id;
                        $query_check_duplicacy = DB::table('mycarts')->select('user_id','property_id')
                        ->where('user_id', $user_id)
                        ->where('property_id', $id)
                        ->first();
                        if(is_null($query_check_duplicacy)){
                                $creator_name = $creator->created_by;
                                $QI_cart =mycarts::create([
                                    'name'=> Auth::user()->name,
                                    'email'=> Auth::user()->email,
                                    'user_id' => $user_id,
                                    'property_id'=> $id,
                                    'property_type' => $type,
                                    'property_creator'=> $creator_name,
                                    ]);
                                if($QI_cart){
                                    $action = "added to cart";
                                    $query = log_books::create([
                                        'name'=> Auth::user()->name,
                                        'email'=> Auth::user()->email,
                                        'role' => $user_role,
                                        'action' => $action,
                                        'property_type'=> $type,
                                        'property_id'=> $id
                                        ]);
                                        if($QI_cart){
                                            return redirect()->back()->with('success', 'Added to cart');
                                        }else{
                                            return redirect()->back() ->with('fail', 'Sorry cannot added to cart');
                                        }
                                }else{
                                    return redirect()->route('update_room') ->with('fail', 'Sorry Your Data hasnot been uploaded');
                                }
                        }else{
                            return redirect()->back()->with('Already_Added', 'View Your Cart, this property is already listed there');
                        }
                        // dd($query_check_duplicacy);                      
                    }else{
                        echo"You are not deligated and defined user to add this property to your cart";
                    }
                }else{
                     echo " Sorry Undefined User Role assigned";
            }
        }
    }

    public function destroy($id){
        if(isset($id)){ //cart id ho
            $name =Auth::user()->name;
            $users = DB::select("select * from mycarts where (id = '$id' and  name = '$name')");
            $type = $users[0]->property_type;
            $prop_id = $users[0]->property_id; //property id ho 
            $props_type_fetch = DB::select("select type from rental_rooms where (id = '$prop_id' )");
            $type = $props_type_fetch[0]->type;
            if(isset($type)){
                    if(Auth::user()->hasRole('user')){
                        $user_role = 'user';
                    }elseif(Auth::user()->hasRole('creator')){
                        $user_role = 'creator';
                    }elseif(Auth::user()->hasRole('admin')){
                        $user_role = 'admin';
                    }
                    if(isset($user_role)){
                        $remove_from_cart = mycarts::find($id);
                        if(!is_null($remove_from_cart)){
                            $Q_delete = $remove_from_cart ->delete();
                        }
                        if($Q_delete){
                            $action = "removed from cart";
                            $query = log_books::create([
                                'name'=> Auth::user()->name,
                                'email'=> Auth::user()->email,
                                'role' => $user_role,
                                'action' => $action,
                                'property_type'=> $type,
                                'property_id'=> $prop_id
                                ]);
                                if($query){
                                    return redirect()->back() ->with('deleted', 'Data has been deleted Permenantly');
                                }else{
                                    return redirect()->back() ->with('fail', 'Sorry items not moved to trashed');
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


// This is drafted  code



                        // $query_check_duplicacy = DB::select("select * from mycarts where user_id = '$user_id' and property_id = '$id'");
                        // $prop_id = $query_check_duplicacy[3]->property_id;
                        // $cart_user_id = $query_check_duplicacy[4]->user_id;
                        // echo $id ." ".$prop_id ;
                        // echo $user_id ." ".$cart_user_id ;

                        // $query_check_duplicacy = DB::table('mycarts')->select('user_id','property_id')
                        // // ->where('user_id', $user_id)
                        // ->where('property_id', $id)
                        // // ->take(1)
                        // ->first();

                        // $query_check_duplicacy = mycarts::select("*")
                        // ->where('user_id', $user_id)
                        // ->where('property_id', $id)
                        // ->get();
                        // dd($query_check_duplicacy);
                        // $prop_id = $query_check_duplicacy -> property_id;
                        // $cart_user_id = $query_check_duplicacy->user_id;

                        //  if(($id == $prop_id) && ($user_id == $cart_user_id) ){

                        //     // return redirect()->back()->with('Already_Added', 'View Your Cart, this property is already listed there');

                        //     echo $prop_id;
                        //     echo "<br>";
                        //     echo $cart_user_id;
                        //     echo "<br> up above is from database";
                        //     echo "<br> ";
                        //     echo "this is from live  <br> ";
                        //     echo $id;
                        //     echo "<br>";
                        //     echo $user_id;
                        //  }
                        //else{
                            // $creator_name = $creator->created_by;
                            // $QI_cart =mycarts::create([
                            //     'name'=> Auth::user()->name,
                            //     'email'=> Auth::user()->email,
                            //     'user_id' => $user_id,
                            //     'property_id'=> $id,
                            //     'property_type' => $type,
                            //     'property_creator'=> $creator_name,
                            //     ]);
                            // if($QI_cart){
                            //     $action = "added to cart";
                            //     $query = log_books::create([
                            //         'name'=> Auth::user()->name,
                            //         'email'=> Auth::user()->email,
                            //         'role' => $user_role,
                            //         'action' => $action,
                            //         'property_type'=> $type,
                            //         'property_id'=> $id
                            //         ]);
                            //         if($QI_cart){
                            //             return redirect()->back()->with('success', 'Added to cart');
                            //         }else{
                            //             return redirect()->back() ->with('fail', 'Sorry cannot added to cart');
                            //         }
                            // }else{
                            //     return redirect()->route('update_room') ->with('fail', 'Sorry Your Data hasnot been uploaded');
                            // }
                        // }   



                        // $cart_user_id = $query_check_duplicacy->user_id;
                        // $prop_id = $query_check_duplicacy -> property_id;
                        // if(($id == $prop_id) && ($user_id == $cart_user_id) ){
                        //     return redirect()->back()->with('Already_Added', 'View Your Cart, this property is already listed there');
                        // }else{
                        //     $creator_name = $creator->created_by;
                        //     $QI_cart =mycarts::create([
                        //         'name'=> Auth::user()->name,
                        //         'email'=> Auth::user()->email,
                        //         'user_id' => $user_id,
                        //         'property_id'=> $id,
                        //         'property_type' => $type,
                        //         'property_creator'=> $creator_name,
                        //         ]);
                        //     if($QI_cart){
                        //         $action = "added to cart";
                        //         $query = log_books::create([
                        //             'name'=> Auth::user()->name,
                        //             'email'=> Auth::user()->email,
                        //             'role' => $user_role,
                        //             'action' => $action,
                        //             'property_type'=> $type,
                        //             'property_id'=> $id
                        //             ]);
                        //             if($QI_cart){
                        //                 return redirect()->back()->with('success', 'Added to cart');
                        //             }else{
                        //                 return redirect()->back() ->with('fail', 'Sorry cannot added to cart');
                        //             }
                        //     }else{
                        //         return redirect()->route('update_room') ->with('fail', 'Sorry Your Data hasnot been uploaded');
                        //     }
                        // } 









