<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{State,City,Donor,Requester};

class HomeController extends Controller
{
    public function index()
    {
        $data['states'] = State::get(["name", "id"]);
        $data['countDonor'] = Donor::count();
        $data['countRequest'] = Requester::count();
        return view('dashboard', $data);
    }

    public function insertDonor(Request $req){

        if($req->method()=="POST"){
           
            $data =  $req->validate([
                'name' => 'required',
                'gender' => 'required',
                'age' => 'required',
                'phone_no' => 'exists:donors,phone_no',
                'bloodGroup' => 'required',
                'covid_positive_date' => 'required',
                'covid_negative_date' => 'required',
                'city_id' => 'required',
                'state_id' => 'required',
            ]);
            
            
            Donor::create($data);
            return redirect()->route("homepage");
        }

        $data['states'] = State::get(["name", "id"]);
        return view("donorForm",$data);
    }
    public function insertRequest(Request $req){
        $data['states'] = State::get(["name", "id"]);
        return view("requestForm",$data);
    }
  
   
}
