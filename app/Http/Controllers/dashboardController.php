<?php

namespace App\Http\Controllers;

use App\Models\log_books;
use App\Models\rental_rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{

    public function welcome(){
        return view('welcome')
        ->with('datas', rental_rooms::orderBy('id', 'DESC')->get());
    }

    public function view(){
        return view('Users.landing_view')
        ->with('datas', rental_rooms::orderBy('id', 'DESC')->get());
    }
    public function view_single($id){
        return view('Users.single_room_view')
        ->with('datas', rental_rooms::where('id', $id)->get());
    }

    public function index()
    {
        if(Auth::user()->hasRole('user')){
            return redirect()->route('landing_view');
        }elseif(Auth::user()->hasRole('creator')){
            return view('creatordash');
        }elseif(Auth::user()->hasRole('admin')){

            return view('Admin.admindash')
            ->with('datas', log_books::all());
        }
    }
    public function goto_uploads(){
        if(Auth::user()->hasRole('creator')){
            // cr = Creator  i.e uploaded by creator
            return view('cr_my-uploads'); 
        }
    }
    public function new_uploads(){
        if(Auth::user()->hasRole('creator')){
            // cr = Creator  i.e uploaded by creator
            return view('cr_new-uploads'); 
        }
    }


    public function profile(){
        return view('myprofile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo"Im done upto Here";
    }


}
