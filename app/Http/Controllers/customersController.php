<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class customersController extends Controller
{
    public function view(){
        $data =  customer::all();
        return view('customers', ['data'=>$data]);
    }

    public function view_login(){
        return view('auth/login');
    }

    public function add_customer(){
        return view('add-customers');
    }

    public function delete($id) {
        $data = customer::find($id);
        $data->delete();
        return redirect('customers');
    }

    public function add(Request $req) {
        $cust = new customer;
        
        //LEFT SIDE SEI DB COLS         RIGHT SIDE SEI FORM ELEMENTS
        $cust->cusName = $req->name;
        $cust->cusLocation = $req->location;
        $cust->cusEmail = $req->email;

        $cust->save();
        return redirect('customers');
    }

    public function update($id) {
        $data = customer::find($id);
        return view('update', ['data'=>$data]);
    }

    public function change(Request $req) {

        $data = customer::find($req->id);
        
        //LEFT SIDE SEI DB COLS         RIGHT SIDE SEI FORM ELEMENTS
        $data->cusName = $req->name;
        $data->cusLocation = $req->location;
        $data->cusEmail = $req->email;

        $data->save();
        return redirect('customers');
    }
}


