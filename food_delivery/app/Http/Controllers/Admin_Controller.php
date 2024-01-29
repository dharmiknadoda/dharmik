<?php

namespace App\Http\Controllers;

use App\Models\Feedback_Model;
use App\Models\Food_Model;
use App\Models\Order_Model;
use App\Models\User_Model;
use Illuminate\Http\Request;

class Admin_Controller extends Controller
{
    public function food(Request $res)
    {
        if(isset($res->filter))
        {
            $data = Food_Model::where('name', 'like', "%{$res->filter}%")->paginate(2);
            return view("admin/html/ltr/food", compact('data'));
        }

        $data = [];
        $data = Food_Model::all();
        if(isset($res->name))
        {
            $file = $res->file('img');
            $destinationPath = 'public/img/';
            $originalFile = $file->getClientOriginalName();
            $file->move($destinationPath, $originalFile);

            
            Food_Model::create([
                "name"=>$res->name,
                "price"=>$res->price,
                "quantity"=>$res->quantity,
                "details"=>$res->details,
                "date"=>$res->date,
                "img"=>$originalFile,
            ]);
        }
        return view('admin/html/ltr/food' , compact('data'));
    }



    public function index2(Request $res)
    {
        return view('admin/html/ltr/index2');
    }



    public function user(Request $res)
    {
        if(isset($res->filter))
        {
            $data = User_Model::where('name', 'like', "%{$res->filter}%")->paginate(2);
            return view("admin/html/ltr/user", compact('data'));
        }
        $data = User_Model::all();
        return view('admin/html/ltr/user' , compact('data'));
        
    }


    public function order(Request $res)
    {
        $order = Order_Model::all();
        return view('admin/html/ltr/order' , compact('order'));
    }



    public function feedback2(Request $res)
    {
        if(isset($res->filter))
        {
            $data = Feedback_Model::where('name', 'like', "%{$res->filter}%")->paginate(2);
            return view("admin/html/ltr/feedback2", compact('data'));
        }

        $data = Feedback_Model::all();
        return view('admin/html/ltr/feedback2' , compact('data'));
    }




    function delete($id)
    {
        $data = Food_Model::where('id', '=', $id)->delete();
        if($data)
        {
            return redirect()->route('food');
        }
    }



    function update($id)
    {
        return view('admin/html/ltr/update',compact('id'));
    }



    function edit(Request $res)
    {
        if (isset($res->id)) {
            $file = $res->file('img');
            $destinationPath = 'public/img/';
            $originalFile = $file->getClientOriginalName();
            $file->move($destinationPath, $originalFile);
            
            $data = Food_Model::where('id', $res->id)->update([
                "name"=>$res->name,
                "price"=>$res->price,
                "quantity"=>$res->quantity,
                "details"=>$res->details,
                "date"=>$res->date,
                "img"=>$originalFile,
            ]);
            
            if ($data) {
                return redirect()->route('food');
            }
        }
    }
}
