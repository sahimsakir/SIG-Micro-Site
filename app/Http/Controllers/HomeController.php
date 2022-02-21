<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;
use App\Models\Country;

class HomeController extends Controller
{
    public function index()
    {
        $data = Country::all();
        return view ('home',['country'=>$data]);
        
    }

    function link_add()
    {
        $link = Link::all();
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view ('admin.link-add',$data,['link'=>$link]);
        
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',            
            'company_name' => 'required',
            'address' => 'required',
            'postal_code' => 'required',            
        ]);
        $samples = new Sample;
        $samples->name = $request->input('name');
        $samples->company_name = $request->input('company_name');
        $samples->address = $request->input('address');
        $samples->postal_code = $request->input('postal_code');
        $samples->country = $request->input('country');
        $samples->save();

        
        
        if($samples->save()){
            
            return redirect('home')->with('success','Thank You for your request!');
        }
        else{
            return redirect('index');
        }
        
    }
}
