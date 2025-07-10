<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class RegisterController extends Controller
{
    public function index(){
        return view('input');
    }

   public function register(Request $request){


    // p($request->all());

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'address' => 'required',
    ]);

    $employe = new Employe();
    $employe->emp_id = mt_rand(1000, 9999); // Generate a random employee ID
    $employe->name = $request->name;
    $employe->email = $request->email;
    $employe->address = $request->address;
    $employe->status = 1;
    $employe->save();

    return redirect('view');

}

    public function view(Request $request){
        $search = $request->search;

        if(!empty($search)){

            $employe = Employe::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->paginate(5)->withQueryString();
           
        }
        else{

             $employe = Employe::paginate(5);
        }

       
        $data = compact('employe');

        return view('view-detail')->with($data);
        
}

    public function edit_employe($emp_id){
        $employe = Employe::find($emp_id);

        if (!is_null($employe)) {
            $data = compact('employe');
            return view('input')->with($data);
        } else {
          return redirect('view')->with('error', 'Employee not found');
        }

    }

   public function update_emp($Id, Request $request){
    $employe = Employe::find($Id);

    $employe->name = $request->name;
    $employe->email = $request->email;
    $employe->address = $request->address;          
  
    $employe->save();

    return redirect('view');
   }

   public function delete_emp($Id){
    $employe = Employe::find($Id);

    if(!is_null($employe)){
        $employe->delete();
        return redirect()->back();
    } else {
        return redirect('view')->with('error', 'Employee not found');
    }
   }

}
